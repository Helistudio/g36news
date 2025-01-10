@extends("layouts.home")
@section("body_class")
    gacha-history-container
@endsection
@section("content")
    <div class="row gacha-history-section">

        <div class="col-12">
            <?php if (count($gacha_history) > 0): ?>
            <table>
                    <?php
                        $bonusItemType = "";
                        $bonusItemName = "";
                        $bonusStyle = "";
                        foreach ($gacha_history as $index => $gh):
                            $bonus = str_replace("[", "", $gh->bonus);
                            $bonus = str_replace("]", "", $bonus);
                            $arrayBonus = explode(",", $bonus);
                            if (is_array($arrayBonus)) {
                                if (isset($arrayBonus[0]) && $arrayBonus[0] == 100) {
                                    $bonusItemType = "126";
                                    $bonusItemName = $heros[$arrayBonus[1]] ?? '';
                                    $bonusStyle = $arrayBonus[2] ?? '';
                                } else if (isset($arrayBonus[0]) && $arrayBonus[0] == 6) {

                                    $bonusItemType = "127";
                                    $bonusItemName = $heros[$arrayBonus[1]] ?? '';
                                } else if (isset($arrayBonus[0]) && $arrayBonus[0] == 1) {

                                    $bonusItemType = "128";
                                    $bonusItemName =   __('messages.itemLang'.$arrayBonus[1])  ?? '';
                                } else if (isset($arrayBonus[0]) && $arrayBonus[0] == 3) {

                                    $bonusItemType = "128";
                                    $bonusItemName = $itemData[$arrayBonus[1]] ?? '';
                                }
                        }
                    ?>
                <tr>
                    <td><span class="username">{{ $gh->screen_name }}</span> {{ __('messages.Lang129') }} {{ __('messages.Lang'.$bonusItemType) }} <span class="bonus{{$bonusStyle}}"> {{ $bonusItemName }}</span></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <?php else: ?>
            <div>{{ __('messages.Lang125') }}</div>
            <?php endif; ?>
        </div>

    </div>
@endsection
