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
                        <tr class="third-color">
                            <td>Edward Eric (R 3 {{ __('messages.Lang130') }})</td>
                            <td>6%</td>
                        </tr>
                        <tr class="third-color">
                            <td>Koby (R 3 {{ __('messages.Lang130') }})</td>
                            <td>6%</td>
                        </tr>
                        <tr class="third-color">
                            <td>Yoruichi (R 3 {{ __('messages.Lang130') }})</td>
                            <td>6%</td>
                        </tr>
                        <tr class="third-color">
                            <td>Sona wukong (R 3 {{ __('messages.Lang130') }})</td>
                            <td>4,6%</td>
                        </tr>     <tr class="third-color">
                            <td>TR-0009 Targer (R 3 {{ __('messages.Lang130') }})</td>
                            <td>4,6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Alex Mercer (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>3,4%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Portgas D.Ace (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>3,4%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Shanks (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>3,4%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Ikaros (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>3,4%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Lisbeth (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>3,4%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Killua Zoldyck (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>3,4%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>2B (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>3,4%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Sebas Tian (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>3,4%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Hyuga Hinata (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>3,4%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Mikasa (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>3,4%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Master Roshi (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>3,4%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Sailor Moon (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Alice Zuberg (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Eugeo (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Phoenix Ikki (SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Susanoo(SR 4 {{ __('messages.Lang130') }})</td>
                            <td>2%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Alex Mercer (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>1.6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Portgas D.Ace (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>1.6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Shanks (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>1.6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Ikaros (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>1.6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Lisbeth (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>1.6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Killua Zoldyck(SR 5 {{ __('messages.Lang130') }})</td>
                            <td>1.6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>2B (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>1.6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Sebas Tian (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>1.6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Hyuga Hinata (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>1.6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Mikasa (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>1.6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Master Roshi (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>1.6%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Sailor Moon (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.8%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Eugeo (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.7%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Alice Zuberg (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.8%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Phoenix Ikki (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.8%</td>
                        </tr>
                        <tr class="secondary-color">
                            <td>Susanoo (SR 5 {{ __('messages.Lang130') }})</td>
                            <td>0.7%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Nico Robin (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Aokiji (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Zoro Wano (SSR)</td>
                            <td>0.2</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Sanji G66 (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Kuma (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Chopper (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Marco (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Nami New World (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Magellan (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Law (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Sengoku (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Boa Hancock (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Enel (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Kid (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>BigMom (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Jozu (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Perona (SSR)</td>
                            <td>0.2%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Songoku (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Garp (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Luffy Gear 5(SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Kakashi (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Moria (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                        <tr class="primary-color">
                            <td>Akainu (SSR)</td>
                            <td>0.1%</td>
                        </tr>
                    </table>
                    <div>
                    </div>
                </div>
            </div>
@endsection
