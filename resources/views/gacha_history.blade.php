@extends("layouts.home")
@section("body_class")gacha-history-container @endsection
@section("content")
    <div class="row gacha-history-section">

        <div class="col-12">
            <?php if(count($gacha_history) > 0):?>
            <table>
                    <?php
                    $bonusItemType = "";
                    $bonusItemName = "";
                foreach($gacha_history as $index =>  $gh):
                    $bonus = str_replace("[", "", $gh->bonus);
                    $bonus = str_replace("]", "", $bonus);
                    $arrayBonus = explode(",", $bonus);
                    if(is_array($arrayBonus)) {
                        if(isset($arrayBonus[0]) && $arrayBonus[0] == 100) {

                            $bonusItemType = "{{ __('messages.Lang126') }}";
                            $bonusItemName = $heros[$arrayBonus[1]] ?? '';
                        }
                        else if(isset($arrayBonus[0]) && $arrayBonus[0] == 6) {

                            $bonusItemType = "{{ __('messages.Lang127') }}";
                            $bonusItemName = $heros[$arrayBonus[1]] ?? '';
                        }
                        else if(isset($arrayBonus[0]) && $arrayBonus[0] == 1) {

                            $bonusItemType = "{{ __('messages.Lang128') }}";
                            $bonusItemName = $itemShop[$arrayBonus[1]] ?? '';
                        }
                        else if(isset($arrayBonus[0]) && $arrayBonus[0] == 3) {

                            $bonusItemType = "{{ __('messages.Lang128') }}";
                            $bonusItemName = $itemData[$arrayBonus[1]] ?? '';
                        }
                    }
                    ?>
                <tr>
                    <td><span class="username">{{ $gh->screen_name }}</span> {{ __('messages.Lang129') }} {{ $bonusItemType }}<span class="bonus"> {{ $bonusItemName }}</span></td>
                </tr>
                <?php endforeach;?>
            </table>
            <?php else:?>
            <div>{{ __('messages.Lang125') }}</div>
            <?php endif;?>
        </div>

    </div>
@endsection
