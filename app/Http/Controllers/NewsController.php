<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Client\RequestException;

class NewsController extends Controller
{
    public function getNews(Request $request) {

        $news = DB::connection('gamemain')->table('notice as n')
        ->where('n.status', '=', 1)
        ->orderBy('n.id', 'desc')
        ->get();
        return view("news", [
            'news' => $news
        ]);
    }
}
