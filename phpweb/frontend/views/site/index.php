<?php /** @noinspection PhpPossiblePolymorphicInvocationInspection */

/* @var $this yii\web\View */

use common\models\Article;
use yii\helpers\Html;

$this->title = 'VN EXPRESS FAKE';
?>
<div class="site-index">
    <div class="container">
        <div class="top">
            <div class="row">
                <div class="banner">
                    <img src="https://intphcm.com/data/upload/mau-banner-dep-chuan.jpg" alt="khong hien thi duoc" style="height: 250px; width: 100%">
                </div>
            </div>
            <div class="nav">
                <div class="nav-icon">
                    <img src="https://s1.vnecdn.net/vnexpress/restruct/i/v393/v2_2019/pc/graphics/logo.svg" alt="">
                    <p id ="time" style="margin-left: 50px; margin-top: 2px"> </p>

                </div>
                <div class="nav-extend" style="margin-left: -40px; margin-top: 18px">
                    <ul>
                        <li><a id="newest" href="#">Mới nhất</a></li>
                        <li><a id="international" href="#">Quốc tế</a></li>
                    </ul>
                </div>
                <form class="nav-form">
                    <label>
                        <input type="text" placeholder="Tìm kiếm..." name="search">
                    </label>
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
                <div class="navbar" >
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link" href="#" style="padding-left: 10px" >Thời sự</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Góc nhìn</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Thế giới</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Video</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Kinh doanh</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Giải trí</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Thể thao</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Pháp luật</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Giáo dục</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Sức khỏe</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Đời sống</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Du lịch</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Khoa học</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Số hóa</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Xe</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Ý kiến</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Tâm sự</a></li>
                        <li class="nav-item"><a class="nav-link" href="#" >Hài</a></li>
                    </ul>
                </div>

        </div>

        <div class="body-content">
            <div class="top col-md-12 " style="height: 600px; border-bottom: 1px solid black">
                <div class="col-md-8 aside-left" style=" margin-left: -15px">
                    <div class="col-md-8 aside-left" style="height: 400px; margin-left: -15px">
                        <img src="https://i1-suckhoe.vnecdn.net/2021/06/17/1-1623930404-7976-1623931360.jpg?w=680&h=408&q=100&dpr=2&fit=crop&s=zXJVEXUiG49_j1ss9ljLaA" alt="anh1" style="width: 600px; height:400px ; margin-left: -15px">
                    </div>
                    <?php $item1 = Article::find()
                        ->where(['title' => 'Thứ trưởng Y tế: Mục tiêu hết tháng 12 chủng ngừa 70% dân số'])
                        ->one();?>

                    <div class="col-md-4 col-md-offset-8 admin-right " style="height: 400px; margin-left: 15px; background-color: whitesmoke; font-size:18px">
                        <?php if($item1) { ?>
                            <h2> <?php echo $item1->title ;?></h2>
                            <div>
                                <?php echo $item1->description ?>

                                <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]); ?>
                            </div>
                        <?php } ?>
                    </div>

                    <?php $item1 = Article::find()
                        ->where(['title' => 'Số ca Covid-19 theo ngày cao kỷ lục tại TP HCM'])
                        ->one();?>
                    <div class = "col-md-4" style = "height: 200px; margin-left: -15px; margin-top: 5px" >
                        <?php if($item1) { ?>
                            <h4> <?php echo $item1->title ;?></h4>
                            <div>
                                <?php echo $item1->description ?>
                                <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <?php $item1 = Article::find()
                        ->where(['title' => 'Trưa 17/6 thêm 220 ca Covid-19'])
                        ->one();?>
                    <div class = "col-md-4 col-md-offset-0" style = "height: 200px; margin-top: 5px" >
                        <?php if($item1) { ?>
                            <h4> <?php echo $item1->title ;?></h4>
                            <div>
                                <?php echo $item1->description ?>
                                <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <?php $item1 = Article::find()
                        ->where(['title' => 'Hồn nhiên phạm luật'])
                        ->one();?>
                    <div class = "col-md-4 col-md-offset-0" style = "height: 200px; margin-top: 5px" >
                        <?php if($item1) { ?>
                            <h4> <?php echo $item1->title ;?></h4>
                            <div>
                                <?php echo $item1->description ?>
                                <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]); ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4 admin-right" style="margin-left: 10px">
                    <img src="https://sapphireresidence.info/wp-content/uploads/sites/64/2019/04/the-sapphire-residence-ha-long-thuc-te-1.jpg" alt="" style="width: 430px; height: 600px">
                </div>
            </div>

            <div class="col-md-12 " style=" margin: 25px 0 30px 0; padding-bottom: 80px; border-bottom: 1px solid gainsboro">
                <div class="col-md-5 " style="margin-left: -15px; border-right:2px solid whitesmoke;">
                    <div class="row" style="padding-bottom: 10px; border-bottom: 2px solid whitesmoke">
                        <?php $item1 = Article::find()
                            ->where(['title' => 'Điểm mới trong chiến dịch tiêm chủng lớn nhất lịch sử'])
                            ->one();?>
                        <div class="col-md " style="height: 200px">
                            <?php if($item1) { ?>
                                <div class="col-md-4 " style="height: 200px;">
                                    <img src="<?php echo $item1->image ;?>" alt="" style="width: 180px; height: 200px; margin-left: -15px">
                                </div>
                                <div class="col-md-8" style="">
                                    <h3> <?php echo $item1->title ;?></h3>
                                    <div>
                                        <?php echo $item1->description ?>
                                        <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row" style=" margin-top: 10px ;padding-bottom: 10px; border-bottom: 2px solid whitesmoke">
                        <?php $item1 = Article::find()
                            ->where(['title' => 'Vòng loại cuối World Cup áp dụng VAR'])
                            ->one();?>
                        <div class="col-md " style="height: 200px">
                            <?php if($item1) { ?>
                                <div class="col-md-4" style="height: 200px;">
                                    <img src="<?php echo $item1->image ;?>" alt="" style="width: 180px; height: 200px; margin-left: -15px">
                                </div>
                                <div class="col-md-8" style="">
                                    <h3> <?php echo $item1->title ;?></h3>
                                    <div>
                                        <?php echo $item1->description ?>
                                        <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row" style=" margin-top: 10px ;padding-bottom: 10px; border-bottom: 2px solid whitesmoke">
                        <?php $item1 = Article::find()
                            ->where(['title' => 'Thách thức chờ đợi Biden sau chuyến công du châu Âu'])
                            ->one();?>
                        <div class="col-md " style="height: 200px">
                            <?php if($item1) { ?>
                                <div class="col-md-4" style="height: 200px;">
                                    <img src="<?php echo $item1->image ;?>" alt="" style="width: 180px; height: 200px; margin-left: -15px">
                                </div>
                                <div class="col-md-8" style="">
                                    <h3> <?php echo $item1->title ;?></h3>
                                    <div>
                                        <?php echo $item1->description ?>
                                        <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row" style=" margin-top: 10px ;padding-bottom: 10px; border-bottom: 2px solid whitesmoke">
                        <?php $item1 = Article::find()
                            ->where(['title' => 'Nghiên cứu làm đường sắt nối sân bay Tân Sơn Nhất - Long Thành'])
                            ->one();?>
                        <div class="col-md " style="height: 200px">
                            <?php if($item1) { ?>
                                <div class="col-md-4" style="height: 200px;">
                                    <img src="<?php echo $item1->image ;?>" alt="" style="width: 180px; height: 200px; margin-left: -15px">
                                </div>
                                <div class="col-md-8" style="">
                                    <h3> <?php echo $item1->title ;?></h3>
                                    <div>
                                        <?php echo $item1->description ?>
                                        <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row" style=" margin-top: 10px ;padding-bottom: 10px; border-bottom: 2px solid whitesmoke">
                        <?php $item1 = Article::find()
                            ->where(['title' => 'Hà Lan vào vòng 1/8 với ngôi nhất bảng'])
                            ->one();?>
                        <div class="col-md " style="height: 200px">
                            <?php if($item1) { ?>
                                <div class="col-md-4" style="height: 200px;">
                                    <img src="<?php echo $item1->image ;?>" alt="" style="width: 180px; height: 200px; margin-left: -15px">
                                </div>
                                <div class="col-md-8" style="">
                                    <h3> <?php echo $item1->title ;?></h3>
                                    <div>
                                        <?php echo $item1->description ?>
                                        <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row" style=" margin-top: 10px ;padding-bottom: 10px; border-bottom: 2px solid whitesmoke">
                        <?php $item1 = Article::find()
                            ->where(['title' => 'Israel tiếp tục không kích Gaza'])
                            ->one();?>
                        <div class="col-md " style="height: 200px">
                            <?php if($item1) { ?>
                                <div class="col-md-4" style="height: 200px;">
                                    <img src="<?php echo $item1->image ;?>" alt="" style="width: 180px; height: 200px; margin-left: -15px">
                                </div>
                                <div class="col-md-8" style="">
                                    <h3> <?php echo $item1->title ;?></h3>
                                    <div>
                                        <?php echo $item1->description ?>
                                        <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]); ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
<!--                    <div class="row" style=" margin-top: 10px ;padding-bottom: 10px; border-bottom: 2px solid whitesmoke">-->
<!--                        --><?php //$item1 = Article::find()
//                            ->where(['title' => 'Giải phóng mặt bằng Metro Số 2 sẽ xong trong năm 2021'])
//                            ->one();?>
<!--                        <div class="col-md " style="height: 200px">-->
<!--                            --><?php //if($item1) { ?>
<!--                                <div class="col-md-4" style="height: 200px;">-->
<!--                                    <img src="--><?php //echo $item1->image ;?><!--" alt="" style="width: 180px; height: 200px; margin-left: -15px">-->
<!--                                </div>-->
<!--                                <div class="col-md-8" style="">-->
<!--                                    <h3> --><?php //echo $item1->title ;?><!--</h3>-->
<!--                                    <div>-->
<!--                                        --><?php //echo $item1->description ?>
<!--                                        --><?php //echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]); ?>
<!--                                    </div>-->
<!--                                </div>-->
<!--                            --><?php //} ?>
<!--                        </div>-->
<!--                    </div>-->
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="navbar ">
                            <ul class="nav bg-info" style="display: flex">
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black; font-weight: bold">KINH DOANH</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Quốc tế</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Doanh nghiệp</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Chứng khoán</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Bất động sản</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Start up</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Bảo hiểm</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Vhome</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom : 40px ;border-bottom: 1px solid gainsboro">

                        <div class="col-md-8">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Nhà đầu tư tiếp tục bán, giá vàng giảm mạnh'])
                                ->one();?>
                            <?php if($item1) { ?>
                            <div class="col-md-6" style="margin-left: -15px">
                                <img src="<?php echo $item1->image; ?>" alt="" style=" width:200px ;height: 200px">
                            </div>
                            <div class="col-md-6" style="height: 200px; margin-top: -10px">
                                <h4 style="font-weight: bold"> <?php echo $item1->title ; ?></h4>
                                <?php echo $item1->description ;?>
                                <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]);?>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Giá vàng trong nước giảm'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <div class="col-md" style="width: 240px; height: 200px; margin-top: -10px">
                                    <h4 style="font-weight: bold"><?php echo $item1->title ; ?> </h4>
                                    <?php echo $item1->description ;?>
                                    <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]);?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px; padding-bottom: 10px; border-bottom: 1px solid whitesmoke">
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Thanh khoản bất động sản nghỉ dưỡng giảm mạnh'])
                                ->one();?>
                            <?php if($item1) { ?>
                               <h4> <?php echo Html::a('・Thanh khoản bất động sản nghỉ dưỡng giảm mạnh',['/article/view','id'=>$item1->slug]);?></h4>
                            <?php } ?>
                        </div>
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Nhiều tồn tại trong phát triển điện mặt trời'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <h4> <?php echo Html::a('・Nhiều tồn tại trong phát triển điện mặt trời',['/article/view','id'=>$item1->slug]);?></h4>
                            <?php } ?>
                        </div>
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Thứ trưởng Công Thương: Chưa quan ngại về nhập siêu'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <h4> <?php echo Html::a('・Thứ trưởng Công Thương: Chưa quan ngại về nhập siêu',['/article/view','id'=>$item1->slug]);?></h4>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 20px; padding-bottom: 20px; border-bottom: 2px solid whitesmoke">
                        <div class="col-md-5" >
                            <table class="table-bordered" >
                                <thead>
                                <tr>
                                    <th style="width: 220px; height: 30px">Giá vàng</th>
                                    <th style="width: 50px; height: 30px">Mua</th>
                                    <th style="width: 50px; height: 30px">Bán</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="height: 30px">Vàng SJC (triệu đồng/lượng)</td>
                                    <td style="height: 30px">56.15</td>
                                    <td style="height: 30px">57.75</td>
                                </tr>
                                <tr>
                                    <td style="height: 30px">Thế giới (USD/ounce)</td>
                                    <td style="height: 30px">1.783</td>
                                    <td style="height: 30px">1.783,5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-7">
                            <table class="table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 220px; height: 30px">Lãi xuất tiết kiệm</th>
                                    <th style="width: 50px; height: 30px">1</th>
                                    <th style="width: 50px; height: 30px">3</th>
                                    <th style="width: 50px; height: 30px">6</th>
                                    <th style="width: 50px; height: 30px">9</th>
                                    <th style="width: 50px; height: 30px">12</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td style="height: 30px">Online (%/năm)</td>
                                    <td style="height: 30px">4</td>
                                    <td style="height: 30px">4</td>
                                    <td style="height: 30px">6.45</td>
                                    <td style="height: 30px">6.6</td>
                                    <td style="height: 30px">6.8</td>
                                </tr>
                                <tr>
                                    <td>Tại quầy (%/năm)</td>
                                    <td style="height: 30px">4</td>
                                    <td style="height: 30px">4</td>
                                    <td style="height: 30px">6.25</td>
                                    <td style="height: 30px">6.35</td>
                                    <td style="height: 30px">6.8</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>・
                <div class="col-md-7">
                    <div class="row">
                        <div class="navbar bg-info ">
                            <ul class="nav" style="display: flex">
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black; font-weight: bold">GIẢI TRÍ</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Giới sao</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Phim </a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Nhạc</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Thời trang</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Sách</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom : 10px ;border-bottom: 1px solid gainsboro">

                        <div class="col-md-8">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Thư Kỳ diện mốt hở nội y bên dàn sao'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <div class="col-md-6 " style="margin-left: -15px">
                                    <img src="<?php echo $item1->image; ?>" alt="" style=" width:200px ;height: 200px">
                                </div>
                                <div class="col-md-6 " style="height: 200px">
                                    <h4 style="font-weight: bold"> <?php echo $item1->title ; ?></h4>
                                    <?php echo $item1->description ;?>
                                    <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]);?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Một ngày ở nhà của hoa hậu Phương Khánh'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <div class="col-md" style="width: 240px; height: 200px">
                                    <h4 style="font-weight: bold"><?php echo $item1->title ; ?> </h4>
                                    <?php echo $item1->description ;?>
                                    <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]);?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px; padding-bottom: 10px; border-bottom: 1px solid black">
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Britney Spears không còn ý định ca hát'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <h4> <?php echo Html::a('・Britney Spears không còn ý định ca hát',['/article/view','id'=>$item1->slug]);?></h4>
                            <?php } ?>
                        </div>
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Megan Fox muốn đính hôn'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <h4> <?php echo Html::a('・Megan Fox muốn đính hôn',['/article/view','id'=>$item1->slug]);?></h4>
                            <?php } ?>
                        </div>
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Váy áo tôn eo con kiến của Emily Ratajkowski'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <h4> <?php echo Html::a('・Váy áo tôn eo con kiến của Emily Ratajkowski',['/article/view','id'=>$item1->slug]);?></h4>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="navbar bg-info ">
                            <ul class="nav" style="display: flex">
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black; font-weight: bold">THỂ THAO</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Bóng đá</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Lịch thi đấu </a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Tennis</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">VM 2021</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">V-Race</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">Euro 2021</a></li>
                                <li class="nav-item"><a class="nav-link" href="#" style="color: black">World Cup 2022</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row" style="padding-bottom : 30px ;border-bottom: 1px solid gainsboro">

                        <div class="col-md-8">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Thủ môn Bùi Tấn Trường: ‘Đời ai chẳng có sai lầm’'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <div class="col-md-6 " style="margin-left: -15px">
                                    <img src="<?php echo $item1->image; ?>" alt="" style=" width:200px ;height: 200px; ">
                                </div>
                                <div class="col-md-6 " style="height: 200px">
                                    <h4 style="font-weight: bold"> <?php echo $item1->title ; ?></h4>
                                    <?php echo $item1->description ;?>
                                    <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]);?>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Djokovic và thành trì cuối cùng của Federer - Nadal'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <div class="col-md" style="width: 240px; height: 200px">
                                    <h4 style="font-weight: bold"><?php echo $item1->title ; ?> </h4>
                                    <?php echo $item1->description ;?>
                                    <?php echo Html::a('Chi tiết &raquo;',['/article/view','id'=>$item1->slug]);?>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px; padding-bottom: 10px; border-bottom: 1px solid black">
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Sergio Ramos tiết lộ lý do rời Real'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <h4> <?php echo Html::a('・Sergio Ramos tiết lộ lý do rời Real',['/article/view','id'=>$item1->slug]);?></h4>
                            <?php } ?>
                        </div>
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Rashford: ‘Tôi muốn giống Ronaldo hơn làm Thủ tướng’'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <h4> <?php echo Html::a('・Rashford: ‘Tôi muốn giống Ronaldo hơn làm Thủ tướng’',['/article/view','id'=>$item1->slug]);?></h4>
                            <?php } ?>
                        </div>
                        <div class="col-md-4">
                            <?php $item1 = Article::find()
                                ->where(['title' => 'Eriksen nhắn tin khen cầu thủ Đan Mạch'])
                                ->one();?>
                            <?php if($item1) { ?>
                                <h4> <?php echo Html::a('・Eriksen nhắn tin khen cầu thủ Đan Mạch',['/article/view','id'=>$item1->slug]);?></h4>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer" style=" margin: 50px auto; width: 96% ;height: 500px; background-color: white" >
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
                        Tổng biên tập: Phạm Hiếu
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
    <script>
        var today = new Date();
        switch (today.getDay()) {
            case 0:
                day = "Chủ nhật";
                break;
            case 1:
                day = "Thứ hai";
                break;
            case 2:
                day = "Thứ ba";
                break;
            case 3:
                day = "Thứ tư";
                break;
            case 4:
                day = "Thứ năm";
                break;
            case 5:
                day = "Thứ sáu";
                break;
            case 6:
                day = "Thứ bảy";
        }
        var date = day+','+(today.getDate())+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
        document.getElementById('time').innerHTML=date;
    </script>
</div>

