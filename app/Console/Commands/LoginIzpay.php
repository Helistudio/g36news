<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class LoginIzpay extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'izpay:login';

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
        $url = config('constants.CARD_GATES.IZPAY.HOST') . '/user/login';
        $data = [
            'username' => config('constants.CARD_GATES.IZPAY.USER'),
            'password' => config('constants.CARD_GATES.IZPAY.PASS'),
        ];
        $header = [
            'Content-Type: application/json',
            'x-partner: ' . config('constants.CARD_GATES.IZPAY.USER'),
            'x-version: 2'
        ];

        $result = postJsonV2($url, $data, $header, true);
        if ($result) {
            if ($result['code'] == 200) {
                $sid = $result['data']['sid'];
                DB::connection('cms')->table('configs')->updateOrInsert(
                    ['key' => 'izpay_sid'],
                    [
                        'value' => $sid,
                        "created_at" => Carbon::now(),
                        "updated_at" => Carbon::now(),
                    ]
                );
            }
        }
    }
}
