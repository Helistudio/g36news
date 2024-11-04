@extends("layouts.home")
@section("body_class")gacha-history-container @endsection
@section("content")
    <div class="row gacha-history-section">
        <div class="col-12">
            <div class="table-1">
                <div class="title-wrapper">
                    <p class="gacha-detail-title">{{ __('messages.Lang124') }}</p>
                </div>
                <table>
                    <tr>
                        <td class="primary-color">{{ __('messages.Lang121') }} SSR</td>
                        <td>5%</td>
                    </tr>
                    <tr>
                        <td class="secondary-color">{{ __('messages.Lang121') }} SR</td>
                        <td>25%</td>
                    </tr>
                    <tr>
                        <td class="third-color">{{ __('messages.Lang121') }} R</td>
                        <td>70%</td>
                    </tr>
                </table>
            </div>
            <div class="table-2">
                <div class="title-wrapper">
                    <p class="gacha-detail-title">{{ __('messages.Lang120') }}</p>
                </div>
                <div class="scroll-table">
                    <table>
                        <tr class="primary-color special-bg">
                            <td>{{ __('messages.Lang118') }}</td>
                            <td>{{ __('messages.Lang119') }}</td>
                        </tr>
                        <tr>
                            <td>Sona Wukong (R 3 {{ __('messages.Lang130') }})</td>
                            <td>7.1%</td>
                        </tr>
                        <tr>
                            <td>TR-009 Tager (R 3 {{ __('messages.Lang130') }})</td>
                            <td>7.1%</td>
                        </tr>
                        <tr>
                            <td>Levi Ackerman (R 3 {{ __('messages.Lang130') }})</td>
                            <td>16%</td>
                        </tr>
                        <tr>
                            <td>Yoruichi (R 3 {{ __('messages.Lang130') }})</td>
                            <td>16%</td>
                        </tr>
                        <tr>
                            <td>Edward Eric (R 3 {{ __('messages.Lang130') }})</td>
                            <td>16%</td>
                        </tr>
                        <tr>
                            <td>Killua Zoldyck (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr>
                            <td>Mikasa (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr>
                            <td>Lisbeth (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr>
                            <td>Portgas D.ace (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr>
                            <td>Shanks (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr>
                            <td>Hyuga hinata (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr>
                            <td>Ikaros (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr>
                            <td>2B (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr>
                            <td>Susanoo (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr>
                            <td>Alex Mercer (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr>
                            <td>Master Roshi (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr>
                            <td>Sailor Moon (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>1%</td>
                        </tr>
                        <tr>
                            <td>Eugeo (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>1%</td>
                        </tr>
                        <tr>
                            <td>Alice Zuberg (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>1%</td>
                        </tr>
                        <tr>
                            <td>Phoenix Ikki (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>1%</td>
                        </tr>
                        <tr>
                            <td>Sebas Tian (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>1%</td>
                        </tr>
                        <tr>
                            <td>Killua Zoldyck (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.6%</td>
                        </tr>
                        <tr>
                            <td>Mikasa (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.6%</td>
                        </tr>
                        <tr>
                            <td>Lisbeth (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.6%</td>
                        </tr>
                        <tr>
                            <td>Portgas D.ace (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.6%</td>
                        </tr>
                        <tr>
                            <td>Shanks (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.6%</td>
                        </tr>
                        <tr>
                            <td>Hyuga hinata (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.6%</td>
                        </tr>
                        <tr>
                            <td>Ikaros (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.6%</td>
                        </tr>
                        <tr>
                            <td>2B (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.6%</td>
                        </tr>
                        <tr>
                            <td>Susanoo (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.6%</td>
                        </tr>
                        <tr>
                            <td>Alex Mercer (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.6%</td>
                        </tr>
                        <tr>
                            <td>Master Roshi (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.6%</td>
                        </tr>
                        <tr>
                            <td>Sailor Moon (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.4%</td>
                        </tr>
                        <tr>
                            <td>Eugeo (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.3%</td>
                        </tr>
                        <tr>
                            <td>Alice Zuberg (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.3%</td>
                        </tr>
                        <tr>
                            <td>Phoenix Ikki (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.3%</td>
                        </tr>
                        <tr>
                            <td>Sebas Tian (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.3%</td>
                        </tr>
                        <tr>
                            <td>Kirito (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Hatsune Miku (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Angemon (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Jaganshi Hiei (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Black Star (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Lambda-11 (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Angewomon (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Mikasa Mikoto (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Akame (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Orochi (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Menethil (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Saitama (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Kurosaki Ichigo (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Marisa Kirisame (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Rei Yanami (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Erza Scarlet (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Rem (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Meliodas (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Ichigo Hollow (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Ainz Ooal Gown (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Hades (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Beerus (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Asuna (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Saber (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Songoku (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr>
                            <td>Athena (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                    </table>
                    <div>
                    </div>
                </div>
            </div>
@endsection
