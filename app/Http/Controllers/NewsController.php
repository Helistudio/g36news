<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;


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
        $userId = 0;
        if ($request->has('uid')) {
            $userId = $request->input('uid');
        }

        $gacha_history = DB::connection('game')->table('user_gacha_history as ugh')
        ->where('ugh.user_id', $userId)
        ->orderBy('ugh.id', 'desc')
        ->limit(20)
        ->get();

        $heros = json_decode(Redis::connection()->client()->get('webview_heros'));
        if($heros == null) {
            $heros = DB::connection('gamemain')->table('hero as h')
            ->where('h.release', '=', 1)
            ->get();
            Redis::connection()->client()->set('webview_heros', json_encode($heros) , 3600);
        }

        $itemShops = json_decode(Redis::connection()->client()->get('webview_item_shops'));
        if($itemShops == null) {
            $itemShops = DB::connection('gamemain')->table('item_shop')->get();
            Redis::connection()->client()->set('webview_item_shops', json_encode($itemShops) , 3600);
        }

        $itemDatas = json_decode(Redis::connection()->client()->get('webview_item_data'));
        if($itemDatas == null) {
            $itemDatas = DB::connection('gamemain')->table('item')->get();
            Redis::connection()->client()->set('webview_item_data', json_encode($itemDatas) , 3600);
        }

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

    public function battleIntro(Request $request) {
        return view("battle_intro");
    }
}
