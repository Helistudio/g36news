@extends("layouts.home")
@section("body_class")gacha-history-container @endsection
@section("content")
    <div class="row gacha-history-section">
        <div class="col-12">
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
                                
                                $bonusItemType = "chiến binh";
                                $bonusItemName = isset($arrayBonus[1]) ? $heros[$arrayBonus[1]] : '';
                            }
                            else if(isset($arrayBonus[0]) && $arrayBonus[0] == 6) {
                                
                                $bonusItemType = "mảnh tướng";
                                $bonusItemName = isset($arrayBonus[1]) ? $heros[$arrayBonus[1]] : '';
                            }
                            else if(isset($arrayBonus[0]) && $arrayBonus[0] == 1) {
                                
                                $bonusItemType = "vật phẩm";
                                $bonusItemName = isset($arrayBonus[1]) ? $itemShop[$arrayBonus[1]] : '';
                            }
                            else if(isset($arrayBonus[0]) && $arrayBonus[0] == 3) {
                                
                                $bonusItemType = "vật phẩm";
                                $bonusItemName = isset($arrayBonus[1]) ? $itemData[$arrayBonus[1]] : '';
                            }
                        }
                ?>
                    <tr>
                        <td><span class="username">{{ $gh->username }}</span> nhận {{ $bonusItemType }}<span class="bonus"> {{ $bonusItemName }}</span></td>
                    </tr>
                <?php endforeach;?>
            </table>
        </div>
    </div>
@endsection