<?php

/* @var $this yii\web\View */
/* @var $model common\models\Article */

?>

<div class="article-view" >
    <div class="container" style="background-image: url(https://tamnhinrong.org/tnr-9-hinh-anh-dep-ve-bien.jpg)">
        <div class="content" style="margin-top: 150px">
            <?php if($model){ ?>
                <div class="col-md-8 admin-right" style="margin-left: 50px">
                    <?php echo $model->content; ?>
                </div>
                <div class="col-md-2 aside-left" style="margin-left: -15px">
                    <img src="https://toplist.vn/images/800px/nguoi-nong-dan-va-cay-lua-201821.jpg" alt="" style="width: 350px; height: auto">
                    <img src="https://toplist.vn/images/800px/nguoi-nong-dan-va-cay-lua-201823.jpg" alt="" style="width: 350px; height: auto">
                    <img src="https://toplist.vn/images/800px/a-201839.jpg" alt="" style="width: 350px; height: auto">
                    <iframe width="350" height="300" src="https://www.youtube.com/embed/tgbNymZ7vqY?autoplay=1&mute=1"></iframe>
                </div>
            <?php } ?>
        </div>

    </div>
    <div class="footer" style=" margin: 50px auto; width: 96% ;height: 400px; background-color: white" >
        <div class="row" style="border-bottom: 2px solid whitesmoke">
            <div class="col-md-8" style="border-right: 1px solid black">
                <div class="col-md-3">
                    <div class="nav" style="font-weight: bold; font-size: 16px">
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Trang chủ</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Video</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Ảnh</a></li>
                        <li class="nav-item"><a href="" class="nav-link" id="special" style="color: black; margin-bottom: 10px; border-bottom: 1px solid gainsboro">Infographics</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Mới nhất</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Xem nhiều</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Tin nóng</a></li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="nav" style="font-size: 16px">
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Thời sự</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Góc nhìn</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Thế giới</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Kinh doanh</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Giải trí</a></li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="nav" style="font-size: 16px">
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Thể thao</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Pháp luật</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Giáo dục</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Sức khỏe</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Đời sống</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Du lịch</a></li>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="nav" style="font-size: 16px">
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Khoa học</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Số hóa</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Xe</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Ý kiến</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Tâm sự</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Hài</a></li>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-md-6" style="border-right: 1px solid gainsboro; margin-left: -30px">
                    <div class="nav" style="font-size: 16px">
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Rao vặt</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Shop VNExpress</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Start up</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Pay VNExpress</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Mua ảnh VNEpress</a></li>
                        <li class="nav-item"><a href="" class="nav-link" style="color: black;">Vhome</a></li>
                    </div>
                </div>
                <div class="col-md-6" style="margin-left: 20px">
                    <div class="row" style="padding-bottom :10px;border-bottom: 1px solid gainsboro">
                        <p>Tải ứng dụng</p>
                        <button type="button" class="btn btn-light">VNExpress</button>
                        <button type="button" class="btn btn-light">International</button>
                        <p>Liên hệ</p>
                        <button type="button"><i class="fa fa-facebook"></i></button>
                        <a>Tòa soạn</a>
                        <button type="button"><i class="fa fa-address-card"></i></button>
                        <a>Quảng cáo</a>
                    </div>
                    <div class="row">
                        <p>Đường dây nóng</p>
                        <p>083.888.0123 <br>
                            (Hà nội)</p>
                        <p style="margin-left: 110px; margin-top: -50px">082.233.3555<br>
                            (TP.Hồ Chí Minh)</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row " style="font-size: 16px">
            <div class="col-md-3 " style="margin-left: 30px; margin-top: 20px">
                <div class="row">
                    <img src="https://s1.vnecdn.net/vnexpress/restruct/i/v393/v2_2019/pc/graphics/logo.svg" alt="" style="margin-left: 10px">
                </div>
                <p style="font-weight: bold; margin-top: 20px">
                    Báo tiếng Việt nhiều người xem nhất
                </p>
                <p>
                    Thuộc Bộ Khoa học Công nghệ
                    Số giấy phép: 06/GP-BTTTT ngày 03/01/2014
                </p>
            </div>
            <div class="col-md-6" style="margin-top: 65px">
                <p>
                    Tổng biên tập: Phạm Hiếu<br>
                    Địa chỉ: Tầng 5, Tòa nhà FPT, 17 phố Duy Tân, Cầu Giấy, Hà Nội<br>
                    Điện thoại: 024 7300 8899 - máy lẻ 4500
                </p>
            </div>
            <div class="col-md-3" style="margin-left: 1030px; margin-top: -130px">
                <p>
                    Theo dõi VNExpress trên
                    <button type="button"><i class="fa fa-facebook"></i></button>
                    <button type="button"><i class="fa fa-twitter"></i></button>
                    <button type="button"><i class="fa fa-youtube-play"></i></button>
                </p>
                <p>
                    © 1997-2021. Toàn bộ bản quyền thuộc VnExpress
                </p>

            </div>
        </div>
    </div>
    </div>

</div>
