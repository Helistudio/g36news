<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class UpdateItemJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        Log::channel('log_api')->info('------------- Start Update Item Queue ---------------');
        Log::channel('log_api')->info('Update Item Job: '.json_encode($data));
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $access_key = config('constants.NFT.ACCESS_KEY');
        $secret_key = config('constants.NFT.SECRET_KEY');
        $timestamp = miliseconds();
        $params = [
            'accessKey' => $access_key,
            'timestamp' => $timestamp,
        ];

        $query_str = http_build_query($params);
        $signature = hash_hmac('sha256', $query_str, $secret_key);

        $header = [
            'Content-Type: application/json',
            'accept: application/json',
            'signature: ' . $signature,
        ];
        $url = config('constants.NFT.END_POINT') . '/api/v1/item/update?' . $query_str;
        $result = postJson($url, $this->data, $header, true);
        Log::channel('log_api')->info('------------- End Update Item Queue ---------------');

//        if ($result['httpcode'] == 200) {
//            $result_body = json_decode($result['body'], true);
//            if ($result_body['code'] == 0) {
//                $response['code'] = 1;
//                $response['message'] = 'Success';
//            } else {
//                $response['message'] = $result_body['msg'];
//            }
//        } else {
//            $response['message'] = 'Not Authorize';
//        }
    }
}
