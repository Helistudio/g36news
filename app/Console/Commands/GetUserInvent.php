<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class GetUserInvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manage:get_invent';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $userExId = '4s9kdljg000f';
        $access_key = config('constants.NFT.ACCESS_KEY');
        $secret_key = config('constants.NFT.SECRET_KEY');
        $timestamp = miliseconds();

        $params_info = [
            'accessKey' => $access_key,
            'timestamp' => $timestamp,
            'userExId' => $userExId
        ];
        $query_str = http_build_query($params_info);
        $signature = hash_hmac('sha256', $query_str, $secret_key);

        $header_info = [
            'Content-Type: application/json',
            'accept: application/json',
            'signature: ' . $signature,
        ];

        $url_info = config('constants.NFT.END_POINT') . '/api/v1/user/inventory?' . $query_str;
        $result_info = getJson($url_info, $header_info);
        dd($result_info);
    }
}
