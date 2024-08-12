@extends("layouts.home")
@section("body_class")news-container @endsection
@section("content")
    <div class="row news-section">
        <div class="col-3">
            <div class="nav flex-column nav-pills news-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link title active" data-toggle="pill" href="#v-pills-0" role="tab">Order of attack</a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-1" role="tab">Attack target</a>
                <a class="nav-link title " data-toggle="pill" href="#v-pills-2" role="tab">Excellent skill</a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-3" role="tab">Effect</a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-4" role="tab">Match</a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-5" role="tab">System</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content">
                <div class="tab-pane description fade show active" id="v-pills-0" role="tabpanel" >
                    <div>
                        <ul>
                            <li>Up to 6 warriors can go into battle with 6 optional positions. The same warriors will not be able to go into battle together.
                                <img src="./images/intro_thu_tu_danh.png"/>
                            </li>
                            <li>At the beginning of each match, the side with the higher total speed of the Warriors in the formation will attack first.</li>
                            <li>Warriors who have died in battle still have their speed counted in the squad.</li>
                            <li>When entering battle, the speed of the entire squad can be changed by Acceleration and Deceleration effects of teammates or enemies. Therefore, the attack order of each side can be changed in each round.</li>
                            <li>The order of the Warrior's attack depends on the speed and position in the match. The Warrior on both sides with high speed will attack first, and the Warrior with the same speed in a high position will attack first.< /li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description img-w-80 fade" id="v-pills-1" role="tabpanel" >
                    <div>
                        <ul>
                            <li><img src="./images/intro_muc_tieu_tan_cong_1.png"/>Warriors will prioritize attacking enemies in the same row, facing the front.</li>
                            <li>
                                <img src="./images/intro_muc_tieu_tan_cong_2.png"/>
                                If there is no target in the opposite row, the Warrior will prioritize attacking the enemy in the vertical row above.
                            </li>
                            <li>
                                <img src="./images/intro_muc_tieu_tan_cong_3.png"/>
                                If there are no targets in the opposite and vertical rows above, the Warrior will prioritize attacking enemies in the vertical row below.
                            </li>
                            <li>Some Warriors will select targets according to the unique mechanism of each skill and do not need to increase the above rules.</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description img-w-80 fade" id="v-pills-2" role="tabpanel" >
                    <div>
                        <ul>
                            <li>When you accumulate 100 energy points, the Warrior will automatically use special attacks.<img src="./images/intro_tuyet_ky.png"/></li>
                            <li>Depending on their special abilities, some Warriors can use special attacks right from the start of battle.</li>
                            <li>Every time the Warrior attacks an enemy, he will recover 50 fury points.</li>
                            <li>Every time the Warrior is hit, he will restore energy equal to half the amount when attacking (25 points).</li>
                            <li>After using the ultimate skill, the energy points return to 0. Excess anger (greater than 100 points) will add a percentage of damage to the ultimate attack. 1 point of rage corresponds to increased damage by 1%.</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description fade" id="v-pills-3" role="tabpanel" >
                    <div>
                        <ul>
                            <li>Effects will not be cumulative for effect groups that increase character stats, cause immobility and some special marks (increase attack, increase defense, stun, ...). If a similar effect is caused but has a larger duration, the system will replace that effect with the original effect.</li>
                            <li>
                                For example, a Warrior with the original effect of increasing attack for 2 turns will have the following cases:
                                <ul>
                                    <li>If you receive a new attack-increasing effect that lasts for 3 turns, the original effect will be replaced with an attack-increasing effect that lasts for 3 rounds instead of the original 2 rounds.</li>
                                    <li>If you receive an additional attack-increasing effect that lasts for 1 turn, the original effect will not change.</li>
                                </ul>
                            </li>
                            <li>
                                With groups of sustained damage effects per round:
                                <ul>
                                    <li>Can stack and exist at the same time according to the effect's duration. For example: poison, burning, bleeding.</li>
                                </ul>
                            </li>
                            <li>With groups of special effects such as seals, they can be accumulated.</li>
                        </ul>
                    </div>
                    <p>Effects on character 1</p>
                    <table class="battle-intro">
                        <tr>
                            <td>Heal</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_3.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Shocked</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_50.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Silenced</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_51.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Burned</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_52.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bleeding</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_53.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Poisoned</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_54.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Petrified</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_60.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Frozen</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_62.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Mark receives additional damage when attacked</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_63.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Heal health by turn</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_65.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Weakened</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_66.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Invulnerable - does not take any damage during the effect</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_70.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Boredom causes the warrior to lose rage at the end of the turn</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_72.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Fear prevents warriors from attacking normally</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_73.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Shield absorbs energy</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_75.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Shield reflects damage</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_78.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Marked warriors will be revived once per battle</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_80.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Lull to sleep</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_82.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>It is forbidden to increase anger</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_91.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Panic - Doraemon's passive skill effect, panicked warriors will attack allies themselves</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_99.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Poisoned Apple - Passive skill effect of Princess Snow White, poisoned warriors will have reduced defense, reduced healing from all sources</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_111.gif"/>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <p>Effects on character 2</p>
                    <table class="battle-intro buff">
                        <tr>
                            <td>Increases attack stat</td>
                            <td><img src="./images/buff/1.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced attack stats</td>
                            <td><img src="./images/buff/10001.png"/></td>
                        </tr>
                        <tr>
                            <td>Increases defense stat</td>
                            <td><img src="./images/buff/2.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced defense stat</td>
                            <td><img src="./images/buff/10002.png"/></td>
                        </tr>
                        <tr>
                            <td>Increases speed index</td>
                            <td><img src="./images/buff/4.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced speed index</td>
                            <td><img src="./images/buff/10004.png"/></td>
                        </tr>
                        <tr>
                            <td>Increases skill damage</td>
                            <td><img src="./images/buff/6.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced skill damage</td>
                            <td><img src="./images/buff/10006.png"/></td>
                        </tr>
                        <tr>
                            <td>Increases hit accuracy index</td>
                            <td><img src="./images/buff/7.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced hit accuracy index</td>
                            <td><img src="./images/buff/10007.png"/></td>
                        </tr>
                        <tr>
                            <td>Increased attack rate</td>
                            <td><img src="./images/buff/9.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduce the rate of violence</td>
                            <td><img src="./images/buff/10009.png"/></td>
                        </tr>
                        <tr>
                            <td>Increases critical damage</td>
                            <td><img src="./images/buff/10.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced critical damage</td>
                            <td><img src="./images/buff/10010.png"/></td>
                        </tr>
                        <tr>
                            <td>Increases armor penetration index</td>
                            <td><img src="./images/buff/11.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced armor penetration index</td>
                            <td><img src="./images/buff/10011.png"/></td>
                        </tr>
                        <tr>
                            <td>Increases effect resistance</td>
                            <td><img src="./images/buff/12.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced effect resistance</td>
                            <td><img src="./images/buff/10012.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced damage taken</td>
                            <td><img src="./images/buff/13.png"/></td>
                        </tr>
                        <tr>
                            <td>Increases damage taken</td>
                            <td><img src="./images/buff/10013.png"/></td>
                        </tr>
                        <tr>
                            <td>Increases attack resistance index</td>
                            <td><img src="./images/buff/16.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced attack resistance index</td>
                            <td><img src="./images/buff/10016.png"/></td>
                        </tr>
                        <tr>
                            <td>Increases evasion index</td>
                            <td><img src="./images/buff/17.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced evasion index</td>
                            <td><img src="./images/buff/10017.png"/></td>
                        </tr>
                        <tr>
                            <td>Marked to take extra damage if burned (Minimized by armor)</td>
                            <td><img src="./images/buff/10055.png"/></td>
                        </tr>
                        <tr>
                            <td>Marked to take extra damage if bleeding (Minimized by armor)</td>
                            <td><img src="./images/buff/10056.png"/></td>
                        </tr>
                        <tr>
                            <td>Marked to take extra damage if poisoned (Minimized by armor)</td>
                            <td><img src="./images/buff/10057.png"/></td>
                        </tr>
                        <tr>
                            <td>Marked to take extra damage if burned (Not affected by armor)</td>
                            <td><img src="./images/buff/10067.png"/></td>
                        </tr>
                        <tr>
                            <td>Marked to take extra damage if bleeding (Not deducted by armor)</td>
                            <td><img src="./images/buff/10068.png"/></td>
                        </tr>
                        <tr>
                            <td>Marked to take extra damage if poisoned (Not affected by armor)</td>
                            <td><img src="./images/buff/10069.png"/></td>
                        </tr>
                        <tr>
                            <td>Marked takes extra damage if petrified</td>
                            <td><img src="./images/buff/10079.png"/></td>
                        </tr>
                        <tr>
                            <td>Increased damage output</td>
                            <td><img src="./images/buff/90.png"/></td>
                        </tr>
                        <tr>
                            <td>Reduced damage output</td>
                            <td><img src="./images/buff/10090.png"/></td>
                        </tr>
                        <tr>
                            <td>The mark gains increased damage if it hits a science-type warrior</td>
                            <td><img src="./images/buff/92.png"/></td>
                        </tr>
                        <tr>
                            <td>Tick ​​increases damage if it hits magic-type warriors</td>
                            <td><img src="./images/buff/93.png"/></td>
                        </tr>
                        <tr>
                            <td>Mark increases damage if it hits a martial arts warrior</td>
                            <td><img src="./images/buff/94.png"/></td>
                        </tr>
                        <tr>
                            <td>The mark increases damage if it hits a light-type warrior</td>
                            <td><img src="./images/buff/95.png"/></td>
                        </tr>
                        <tr>
                            <td>The mark increases damage if it hits a dark-type warrior</td>
                            <td><img src="./images/buff/96.png"/></td>
                        </tr>
                        <tr>
                            <td>Mark takes additional damage from all sources</td>
                            <td><img src="./images/buff/10097.png"/></td>
                        </tr>
                        <tr>
                            <td>Increases damage counter index</td>
                            <td><img src="./images/buff/98.png"/></td>
                        </tr>
                        <tr>
                            <td>Jinwoo's basic attack effect, marked warriors will receive additional damage every turn</td>
                            <td><img src="./images/buff/10112.png"/></td>
                        </tr>
                        <tr>
                            <td>Cursed - cursed warriors will take additional damage and cannot regenerate rage</td>
                            <td><img src="./images/buff/10114.png"/></td>
                        </tr>
                        <tr>
                            <td>Attacks cannot miss the target</td>
                            <td><img src="./images/buff/115.png"/></td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane description fade" id="v-pills-4" role="tabpanel" >
                    <div>
                        <ul>
                            <li>Each round is considered to end when all Warriors on our side and the enemy side complete their entire action turn.</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description fade" id="v-pills-5" role="tabpanel" >
                    <div>
                        <ul>
                            <li>
                                In the game there are a total of 5 systems: Martial Arts, Science, Magic, Light, Dark. When Warriors attack each other, their damage will be increased or damage reduced.
                                <img src="./images/intro_he.png"/>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
