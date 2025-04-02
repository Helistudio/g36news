@extends("layouts.home")
@section("body_class")
    news-container
@endsection
@section("content")
    <div class="row news-section">
        <div class="col-3 hidden-scroll" style="max-height: 375px; overflow-y: scroll;">
            <div class="nav flex-column nav-pills news-tab" role="tablist" aria-orientation="vertical" >
                <a class="nav-link title active" data-toggle="pill" href="#v-pills-0" role="tab">
                    <div>{{ __('messages.Lang1') }}</div>
                </a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-1" role="tab">{{ __('messages.Lang2') }}</a>
                <a class="nav-link title " data-toggle="pill" href="#v-pills-2" role="tab">{{ __('messages.Lang3') }}</a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-3" role="tab">{{ __('messages.Lang4') }}</a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-4" role="tab">{{ __('messages.Lang5') }}</a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-5" role="tab">{{ __('messages.Lang6') }}</a>
            </div>
        </div>
        <div class="col-9 background_info">
            <div class="tab-content hidden-scroll" style="max-height: 375px; overflow-y: scroll;">
                <div class="tab-pane description fade show active" id="v-pills-0" role="tabpanel">
                    <div class="info-battle">
                        <ul>
                            <li>{{ __('messages.Lang7') }}
                                <img src="./images/intro_thu_tu_danh.png"/>
                            </li>
                            <li>{{ __('messages.Lang16') }}</li>
                            <li>{{ __('messages.Lang17') }}</li>
                            <li>{{ __('messages.Lang18') }}</li>
                            <li>{{ __('messages.Lang19') }}</li>
{{--                            <li><p id="css-output"></p></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description img-w-80 fade" id="v-pills-1" role="tabpanel">
                    <div class="info-battle">
                        <ul>
                            <li>
                                <div class="image-container" style="position: relative; width: 100%; /* Chiều rộng của ảnh */">
                                    <img style="min-width: 457px; min-height: 187px;  height: auto; margin: 15px auto;" src="./images/intro_muc_tieu_tan_cong_1.png"/>
                                    {{ __('messages.Lang20') }}<p class="custom_text" style=" position: absolute; top: 2%; left: 36%; color: black; font-size: 13px;">{{__('messages.introLang1')}}</p>
                                </div>
                            </li>
                            <li>
                                <img style="min-width: 469px; min-height: 185px;" src="./images/intro_muc_tieu_tan_cong_2.png"/>
                                {{ __('messages.Lang21') }}
                            </li>
                            <li>
                                <img style="min-width: 478px; min-height: 211px;" src="./images/intro_muc_tieu_tan_cong_3.png"/>
                                {{ __('messages.Lang22') }}
                            </li>
                            <li>{{ __('messages.Lang23') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description img-w-80 fade" id="v-pills-2" role="tabpanel">
                    <div class="info-battle">
                        <ul>
                            <li>
                                <div class="image-container" style="position: relative; width: 100%; /* Chiều rộng của ảnh */">
                                    {{ __('messages.Lang24') }}
                                    <img style="height: auto; margin: 15px auto;" src="./images/intro_tuyet_ky.png"/>
                                    <p class="custom_text_blood" style="position: absolute; top: 21%; left: 56%; color: #159e0e; font-size: 13px;">{{__('messages.introLang2')}}</p>
                                    <p class="custom_text_energy" style="position: absolute; top: 34%; left: 56%; color: #dfbd21; font-size: 13px;">{{__('messages.introLang3')}}</p>
                                </div>
                            </li>
                            <li>{{ __('messages.Lang25') }}</li>
                            <li>{{ __('messages.Lang26') }}</li>
                            <li>{{ __('messages.Lang27') }}</li>
                            <li>{{ __('messages.Lang28') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description fade" id="v-pills-3" role="tabpanel">
                    <div>
                        <ul>
                            <li>{{ __('messages.Lang29') }}</li>
                            <li>
                                {{ __('messages.Lang30') }}
                                <ul>
                                    <li>{{ __('messages.Lang31') }}</li>
                                    <li>{{ __('messages.Lang32') }}</li>
                                </ul>
                            </li>
                            <li>
                                {{ __('messages.Lang33') }}
                                <ul>
                                    <li>{{ __('messages.Lang34') }}</li>
                                </ul>
                            </li>
                            <li>{{ __('messages.Lang35') }}</li>
                        </ul>
                    </div>
                    <p>{{ __('messages.Lang36') }}</p>
                    <table class="battle-intro">
                        <tr>
                            <td>{{ __('messages.Lang37') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_3.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang38') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_50.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang39') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_51.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang40') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_52.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang41') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_53.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang42') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_54.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang43') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_60.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang44') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_62.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang45') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_63.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang46') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_65.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang47') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_66.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang48') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_70.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang49') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_72.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang50') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_73.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang51') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_75.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang52') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_78.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang53') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_80.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang54') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_82.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang55') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_91.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang56') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_99.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang57') }}</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_111.gif"/>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <p>{{ __('messages.Lang58') }}</p>
                    <table class="battle-intro buff">
                        <tr>
                            <td>{{ __('messages.Lang59') }}</td>
                            <td><img src="./images/buff/1.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang60') }}</td>
                            <td><img src="./images/buff/10001.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang61') }}</td>
                            <td><img src="./images/buff/2.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang62') }}</td>
                            <td><img src="./images/buff/10002.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang63') }}</td>
                            <td><img src="./images/buff/4.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang64') }}</td>
                            <td><img src="./images/buff/10004.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang65') }}</td>
                            <td><img src="./images/buff/6.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang66') }}</td>
                            <td><img src="./images/buff/10006.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang67') }}</td>
                            <td><img src="./images/buff/7.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang68') }}</td>
                            <td><img src="./images/buff/10007.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang69') }}</td>
                            <td><img src="./images/buff/9.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang70') }}</td>
                            <td><img src="./images/buff/10009.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang71') }}</td>
                            <td><img src="./images/buff/10.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang72') }}</td>
                            <td><img src="./images/buff/10010.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang73') }}</td>
                            <td><img src="./images/buff/11.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang74') }}</td>
                            <td><img src="./images/buff/10011.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang75') }}</td>
                            <td><img src="./images/buff/12.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang76') }}</td>
                            <td><img src="./images/buff/10012.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang77') }}</td>
                            <td><img src="./images/buff/13.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang78') }}</td>
                            <td><img src="./images/buff/10013.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang79') }}</td>
                            <td><img src="./images/buff/16.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang80') }}</td>
                            <td><img src="./images/buff/10016.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang81') }}</td>
                            <td><img src="./images/buff/17.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang82') }}</td>
                            <td><img src="./images/buff/10017.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang83') }}</td>
                            <td><img src="./images/buff/10055.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang84') }}</td>
                            <td><img src="./images/buff/10056.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang85') }}</td>
                            <td><img src="./images/buff/10057.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang86') }}</td>
                            <td><img src="./images/buff/10067.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang87') }}</td>
                            <td><img src="./images/buff/10068.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang88') }}</td>
                            <td><img src="./images/buff/10069.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang89') }}</td>
                            <td><img src="./images/buff/10079.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang90') }}</td>
                            <td><img src="./images/buff/90.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang91') }}</td>
                            <td><img src="./images/buff/10090.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang92') }}</td>
                            <td><img src="./images/buff/92.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang93') }}</td>
                            <td><img src="./images/buff/93.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang94') }}</td>
                            <td><img src="./images/buff/94.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang95') }}</td>
                            <td><img src="./images/buff/95.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang96') }}</td>
                            <td><img src="./images/buff/96.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang97') }}</td>
                            <td><img src="./images/buff/10097.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang98') }}</td>
                            <td><img src="./images/buff/98.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang99') }}</td>
                            <td><img src="./images/buff/10112.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang100') }}</td>
                            <td><img src="./images/buff/10114.png"/></td>
                        </tr>
                        <tr>
                            <td>{{ __('messages.Lang101') }}</td>
                            <td><img src="./images/buff/115.png"/></td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane description fade" id="v-pills-4" role="tabpanel">
                    <div class="info-battle">
                        <ul>
                            <li>{{ __('messages.Lang102') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description fade" id="v-pills-5" role="tabpanel">
                    <div class="info-battle">
                        <ul>
                            <li>
                                {{ __('messages.Lang103') }}
                                {{ __('messages.Lang131') }}
                                {{ __('messages.Lang132') }}
                                <div class="image-container" style="position: relative; width: 100%; /* Chiều rộng của ảnh */">
                                    <img style="  height: auto; margin: 15px auto;" src="./images/intro_he_1.png"/>
                                    <p class="custom_text_he_1" style="{{__('messages.introHeCSSLang1')}}">
                                        {{ __('messages.introHeLang1') }}
                                    </p>
                                    <p class="custom_text_he_2" style="{{__('messages.introHeCSSLang2')}}">
                                        {{ __('messages.introHeLang2') }}
                                    </p>
                                    <p class="custom_text_he_3" style="{{__('messages.introHeCSSLang3')}}">
                                        {{ __('messages.introHeLang3') }}
                                    </p>
                                    <p class="custom_text_he_4" style="{{__('messages.introHeCSSLang4')}}">
                                        {{ __('messages.introHeLang4') }}
                                    </p>
                                    <p class="custom_text_he_5" style="{{__('messages.introHeCSSLang5')}}">
                                        {{ __('messages.introHeLang5') }}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
