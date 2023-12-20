<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class sendSmsOtp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sms:otp {number} {content}';

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
        $number = $this->argument('number');
        $content = $this->argument('content');
        Log::info('Start OTP: ' . $content);

        $user = config('constants.OTP.USER');
        $password = config('constants.OTP.PASS');
        $brandname = config('constants.OTP.BRAND');
        $phone = convertVNMobile($number);
        $content = $content;

        $data_request = [
            'user' => $user,
            'password' => $password,
            'brandname' => $brandname,
            'phone' => $phone,
            'content' => $content,
        ];

        $url = config('constants.OTP.URL');
        $result = postJson($url, $data_request);

        Log::channel('db_log')->info(json_encode(['number' => $number, 'content' => $content]), ['OTP_PROCCESS' => $result]);
        Log::info('End OTP: ' . $content ."\t". json_encode($result));
    }
}
