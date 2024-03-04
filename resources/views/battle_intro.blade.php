@extends("layouts.home")
@section("body_class")news-container @endsection
@section("content")
    <div class="row news-section">
        <div class="col-3">
            <div class="nav flex-column nav-pills news-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link title active" data-toggle="pill" href="#v-pills-0" role="tab">Thứ tự tấn công</a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-1" role="tab">Mục tiêu tấn công</a>
                <a class="nav-link title " data-toggle="pill" href="#v-pills-2" role="tab">Tuyệt kỹ</a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-3" role="tab">Hiệu ứng</a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-4" role="tab">Hiệp đấu</a>
                <a class="nav-link title" data-toggle="pill" href="#v-pills-5" role="tab">Hệ</a>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content">
                <div class="tab-pane description fade show active" id="v-pills-0" role="tabpanel" >
                    <div>
                        <ul>
                            <li>Ra trận tối đa 6 chiến binh với 6 vị trí tùy chọn, các chiến binh giống nhau sẽ không thể cùng ra trận.
                                <img src="./images/intro_thu_tu_danh.png"/>
                            </li>
                            <li>Đầu mỗi trận, bên nào có tổng tốc độ các Chiến binh trong đội hình cao hơn sẽ được tấn công trước.</li>
                            <li>Chiến binh đã tử trận vẫn được tính tốc độ vào đội hình.</li>
                            <li>Khi vào trận tốc độ của cả đội hình có thể bị thay đổi bởi các hiệu ứng Tăng tốc và giảm tốc của đồng đội hoặc kẻ địch. Do đó thứ tự tấn công của mỗi bên có thể bị thay đổi theo từng hiệp đấu.</li>
                            <li>Thứ tự tấn công của Chiến binh phụ thuộc vào tốc độ và vị trí trong trận đấu, Chiến binh nào 2 bên có tốc độ cao sẽ tấn công trước, cùng tốc độ thì ở vị trí cao sẽ tấn công trước.</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description img-w-80 fade" id="v-pills-1" role="tabpanel" >
                    <div>
                        <ul>
                            <li><img src="./images/intro_muc_tieu_tan_cong_1.png"/>Chiến binh sẽ ưu tiên tấn công kẻ địch cùng hàng, đối diện trước mặt.</li>
                            <li>
                                <img src="./images/intro_muc_tieu_tan_cong_2.png"/>
                                Nếu không có mục tiêu ở hàng đối diện Chiến binh sẽ ưu tiên tấn công kẻ địch hàng dọc ở phía trên.
                            </li>
                            <li>
                                <img src="./images/intro_muc_tieu_tan_cong_3.png"/>
                                Nếu không có mục tiêu ở hàng đối diện và hàng dọc phía trên Chiến binh sẽ ưu tiên tấn công kẻ địch hàng dọc ở phía dưới.
                            </li>
                            <li>Một số Chiến binh sẽ lựa chọn mục tiêu theo cơ chế riêng của từng kỹ năng và không cần tăng thêm quy tắc trên.</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description img-w-80 fade" id="v-pills-2" role="tabpanel" >
                    <div>
                        <ul>
                            <li>Khi tích đủ 100 điểm năng lượng, Chiến binh sẽ sử dụng đòn đánh tuyệt kỹ một cách tự động.<img src="./images/intro_tuyet_ky.png"/></li>
                            <li>Tùy thuộc vào sự đặc biệt của mình một số Chiến binh có thể sử dụng đòn đánh tuyệt kỹ ngay từ khi vào trận.</li>
                            <li>Mỗi khi tấn công kẻ địch Chiến binh sẽ được hồi 50 điểm nộ khí.</li>
                            <li>Mỗi khi bị đánh Chiến binh sẽ hồi năng lượng bằng 1 nửa so với khi tấn công (25 điểm).</li>
                            <li>Sau khi sử dụng tuyệt kỹ thì điểm năng lượng về 0. Số nộ khí dư thừa (lớn hơn 100 điểm) sẽ được cộng thêm % sát thương cho đòn đánh tuyệt kỹ. 1 điểm nộ khí tương ứng sát thương gia tăng bằng 1%.</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description fade" id="v-pills-3" role="tabpanel" >
                    <div>
                        <ul>
                            <li>Các hiệu ứng sẽ không được cộng dồn đối với các nhóm hiệu ứng tăng chỉ số nhân vật, gây bất động và một số dấu ấn đặc biệt (tăng công, tăng thủ, làm choáng, ...). Nếu gây ra một hiệu ứng tương tự nhưng có số hiệp duy trì lớn hơn thì hệ thống sẽ thay thế hiệu ứng đó với hiệu ứng ban đầu.</li>
                            <li>
                                Ví dụ: Chiến binh đang có hiệu ứng gốc là tăng công duy trì 2 lượt sẽ có các trường hợp sau:
                                <ul>
                                    <li>Nếu được nhận thêm 1 hiệu ứng tăng công mới duy trì 3 lượt thì hiệu ứng gốc sẽ được thay thế thành tăng công duy trì 3 hiệp thay vì 2 hiệp như ban đầu.</li>
                                    <li>Nếu được nhận thêm 1 hiệu ứng tăng công mới duy trì 1 lượt thì hiệu ứng gốc sẽ không thay đổi.</li>
                                </ul>
                            </li>
                            <li>
                                Với các nhóm hiệu ứng sát thương duy trì theo hiệp:
                                <ul>
                                    <li>Có thể cộng dồn và tồn tại đồng thời theo số hiệu duy trì của hiệu ứng. Ví dụ: độc, thiêu đốt, chảy máu.</li>
                                </ul>
                            </li>
                            <li>Với các nhóm hiệu ứng đặc biệt như các loại ấn thì có thể cộng dồn tích lũy.</li>
                        </ul>
                    </div>
                    <p>Hiệu ứng trên nhân vật 1</p>
                    <table class="battle-intro">
                        <tr>
                            <td>Hồi  máu</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_3.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bị choáng</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_50.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bị câm lặng</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_51.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bị thiêu đốt</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_52.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bị chảy máu</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_53.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bị trúng độc</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_54.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bị hóa đá</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_60.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bị đóng băng</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_62.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Đánh dấu nhận thêm sát thương khi bị bạo kích</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_63.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Hồi máu theo lượt</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_65.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bị suy yếu</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_66.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bất tử - không nhận bất kỳ sát thương nào trong thời gian hiệu ứng</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_70.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Chán nản khiến chiến binh bị giảm nộ cuối lượt</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_72.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Sợ hãi khiến chiến binh không thể đánh thường</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_73.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Khiên hấp thụ năng lượng</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_75.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Khiên phản lại sát thương</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_78.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Đánh dấu chiến binh sẽ được hồi sinh một lần trong trận</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_80.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ru ngủ</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_82.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Cấm tăng nộ</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_91.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Hoảng loạn - Hiệu ứng kỹ năng bị động của Doraemon, chiến binh bị hoảng loạn sẽ tự đánh đồng minh</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_99.gif"/>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Táo độc - Hiệu ứng kỹ năng bị động của công chúa Bạch Tuyết, chiến binh bị nhiễm độc sẽ bị giảm phòng thủ, giảm khả năng hồi máu từ tất cả các nguồn</td>
                            <td>
                                <div class="effect">
                                    <img class="hero-img" src="./images/effects/hero.png"/>
                                    <img class="effect-gif" src="./images/effects/Effect_111.gif"/>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <p>Hiệu ứng trên nhân vật 2</p>
                    <table class="battle-intro buff">
                        <tr>
                            <td>Tăng chỉ số tấn công</td>
                            <td><img src="./images/buff/1.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm chỉ số tấn công</td>
                            <td><img src="./images/buff/10001.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng chỉ số phòng thủ</td>
                            <td><img src="./images/buff/2.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm chỉ số phòng thủ</td>
                            <td><img src="./images/buff/10002.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng chỉ số tốc độ</td>
                            <td><img src="./images/buff/4.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm chỉ số tốc độ</td>
                            <td><img src="./images/buff/10004.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng sát thương kỹ năng</td>
                            <td><img src="./images/buff/6.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm sát thương kỹ năng</td>
                            <td><img src="./images/buff/10006.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng chỉ số đánh chính xác</td>
                            <td><img src="./images/buff/7.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm chỉ số đánh chính xác</td>
                            <td><img src="./images/buff/10007.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng tỷ lệ bạo kích</td>
                            <td><img src="./images/buff/9.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm tỷ lệ bạo kích</td>
                            <td><img src="./images/buff/10009.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng sát thương bạo kích</td>
                            <td><img src="./images/buff/10.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm sát thương bạo kích</td>
                            <td><img src="./images/buff/10010.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng chỉ số xuyên giáp</td>
                            <td><img src="./images/buff/11.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm chỉ số xuyên giáp</td>
                            <td><img src="./images/buff/10011.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng chỉ số kháng hiệu ứng</td>
                            <td><img src="./images/buff/12.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm chỉ số kháng hiệu ứng</td>
                            <td><img src="./images/buff/10012.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm sát thương nhận vào</td>
                            <td><img src="./images/buff/13.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng sát thương nhận vào</td>
                            <td><img src="./images/buff/10013.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng chỉ số kháng bạo kích</td>
                            <td><img src="./images/buff/16.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm chỉ số kháng bạo kích</td>
                            <td><img src="./images/buff/10016.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng chỉ số né tránh</td>
                            <td><img src="./images/buff/17.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm chỉ số né tránh</td>
                            <td><img src="./images/buff/10017.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu nhận thêm sát thương nếu bị thiêu đốt (Bị trừ bởi giáp)</td>
                            <td><img src="./images/buff/10055.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu nhận thêm sát thương nếu bị chảy máu (Bị trừ bởi giáp)</td>
                            <td><img src="./images/buff/10056.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu nhận thêm sát thương nếu bị trúng độc (Bị trừ bởi giáp)</td>
                            <td><img src="./images/buff/10057.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu nhận thêm sát thương nếu bị thiêu đốt (Không bị trừ bởi giáp)</td>
                            <td><img src="./images/buff/10067.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu nhận thêm sát thương nếu bị chảy máu (Không bị trừ bởi giáp)</td>
                            <td><img src="./images/buff/10068.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu nhận thêm sát thương nếu bị trúng độc (Không bị trừ bởi giáp)</td>
                            <td><img src="./images/buff/10069.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu nhận thêm sát thương nếu bị hóa đá</td>
                            <td><img src="./images/buff/10079.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng sát thương đầu ra</td>
                            <td><img src="./images/buff/90.png"/></td>
                        </tr>
                        <tr>
                            <td>Giảm sát thương đầu ra</td>
                            <td><img src="./images/buff/10090.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu được tăng sát thương nếu đánh vào chiến binh hệ khoa học</td>
                            <td><img src="./images/buff/92.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu được tăng sát thương nếu đánh vào chiến binh hệ pháp thuật</td>
                            <td><img src="./images/buff/93.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu được tăng sát thương nếu đánh vào chiến binh hệ võ thuật</td>
                            <td><img src="./images/buff/94.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu được tăng sát thương nếu đánh vào chiến binh hệ ánh sáng</td>
                            <td><img src="./images/buff/95.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu được tăng sát thương nếu đánh vào chiến binh hệ bóng tối</td>
                            <td><img src="./images/buff/96.png"/></td>
                        </tr>
                        <tr>
                            <td>Đánh dấu bị nhận thêm sát thương từ tất cả các nguồn</td>
                            <td><img src="./images/buff/10097.png"/></td>
                        </tr>
                        <tr>
                            <td>Tăng chỉ số phản sát thương</td>
                            <td><img src="./images/buff/98.png"/></td>
                        </tr>
                        <tr>
                            <td>Hiệu ứng đòn đánh thường của Jinwoo, chiến binh bị đánh dấu sẽ nhận thêm sát thương sau mỗi lượt</td>
                            <td><img src="./images/buff/10112.png"/></td>
                        </tr>
                        <tr>
                            <td>Bị nguyền rủa - chiến binh bị nguyền rủa sẽ phải nhận thêm sát thương và không thể hồi nộ</td>
                            <td><img src="./images/buff/10114.png"/></td>
                        </tr>
                        <tr>
                            <td>Tấn công không thể trượt mục tiêu</td>
                            <td><img src="./images/buff/115.png"/></td>
                        </tr>
                    </table>
                </div>
                <div class="tab-pane description fade" id="v-pills-4" role="tabpanel" >
                    <div>
                        <ul>
                            <li>Mỗi hiệp đấu được tính kết thúc khi tất cả Chiến binh của phe ta và phe địch kết thúc toàn bộ lượt hành động của mình.</li>
                        </ul>
                    </div>
                </div>
                <div class="tab-pane description fade" id="v-pills-5" role="tabpanel" >
                    <div>
                        <ul>
                            <li>
                                Trong trò chơi có tổng cộng 5 hệ: Võ thuật, Khoa học, Pháp thuật, Ánh sáng, Bóng tối, các Chiến binh khi tấn công nhau sẽ được tăng sát thương hoặc giảm sát thương.
                                <img src="./images/intro_he.png"/>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection