<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class revertTankToLevl1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manage:revert_tank';

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
        $data = [
            'userExId' => '4s9kdljg000f',
            'items' => [
                [
                    "itemId" => 1,
                    "attributes" => [
                        ["trait_type" => "atk", "value" => "300"],
                        ["trait_type" => "pie", "value" => "130"],
                        ["trait_type" => "acc", "value" => "120"],
                        ["trait_type" => "aoe", "value" => "0"],
                        ["trait_type" => "crit", "value" => "30"],
                        ["trait_type" => "hp", "value" => "3000"],
                        ["trait_type" => "def", "value" => "650"],
                        ["trait_type" => "eva", "value" => "60"],
                        ["trait_type" => "anti_crit", "value" => "160"],
                        ["trait_type" => "star", "value" => "1"],
                        ["trait_type" => "level", "value" => "1"],
                        ["trait_type" => "anger", "value" => "23"],
                        ["trait_type" => "chart_atk", "value" => "4"],
                        ["trait_type" => "chart_skill", "value" => "3"],
                        ["trait_type" => "chart_def", "value" => "8"],
                        ["trait_type" => "chart_aoe", "value" => "0"],
                        ["trait_type" => "chart_support", "value" => "2"],
                        ["trait_type" => "exp", "value" => "20"],
                        ["trait_type" => "stamina", "value" => "18"],
                        ["trait_type" => "stamina_max", "value" => "20"],
                        ["trait_type" => "stamina_timestemp", "value" => "1645168780958"],
                        ["trait_type" => "potential", "value" => "0"],
                        ["trait_type" => "potential_point", "value" => "[0,0,0,0]"],
                    ],
                ]
            ]
        ];
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
        $result = postJson($url, $data, $header, true);
    }
}
