<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


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

    public function getGachaHistory(Request $request) {

        $gacha_history = DB::connection('game')->table('user_gacha_history as ugh')
        ->orderBy('ugh.id', 'desc')
        ->limit(20)
        ->get();

        $heros = DB::connection('gamemain')->table('hero as h')
        ->where('h.release', '=', 1)
        ->get();

        $itemShops = DB::connection('gamemain')->table('item_shop')->get();

        $itemDatas = DB::connection('gamemain')->table('item')->get();

        $heroArray = [];
        $itemShopArray = [];
        $itemDataArray = [];

        foreach($heros as $hero) {
            $heroArray[$hero->id] = $hero->name;
        }

        foreach($itemShops as $is) {
            $itemShopArray[$is->id] = $is->name;
        }

        foreach($itemDatas as $idata) {
            $itemDataArray[$idata->id] = $idata->name;
        }

        return view("gacha_history", [
            'gacha_history' => $gacha_history,
            'heros'         => $heroArray,
            'itemShop'      => $itemShopArray,
            'itemData'      => $itemDataArray,
        ]);
    }

    public function getGachaDetail(Request $request) {
        return view("gacha_detail");
    }

    public function getLimitedGachaDetail(Request $request) {
        return view("limited_gacha_detail");
    }
}
