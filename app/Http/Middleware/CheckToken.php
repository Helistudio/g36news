<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class CheckToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $res = ['code' => -1, 'message' => ''];
        $token = $request->header('Content-AT');
        if ($token) {
            try {
                $origin = Crypt::decrypt($token);
                if ($origin) {
                    $origin_arr = explode('____', $origin);
                    if (isset($origin_arr[0]) && isset($origin_arr[1])) {
                        $email = $origin_arr[0];
                        $redis_token = $origin_arr[1];
                        try {
                            $redis_cur_token = Redis::connection()->client()->get($email);
                            if (Hash::check($redis_token, $redis_cur_token)) {
                                return $next($request);
                            } else {
                                $res['message'] = 'Wrong Cache';
                                return response()->json($res);
                            }
                        } catch (\Exception $ex) {
                            $res['message'] = 'Wrong Cache';
                            return response()->json($res);
                        }

                    } else {
                        $res['message'] = 'Wrong Check';
                        return response()->json($res);
                    }
                } else {
                    $res['message'] = 'Wrong Token';
                    return response()->json($res);
                }
            } catch (DecryptException $e) {
                $res['message'] = 'Wrong Token';
                return response()->json($res);
            }
        } else {
            $res['message'] = 'Not Allow';
            return response()->json($res);
        }

    }
}
