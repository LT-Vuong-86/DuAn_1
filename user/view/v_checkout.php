<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Checkout | E-Shopper</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
    <style>
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
        }
    </style>
   </head><!--/head-->

<body>
	<header id="header">
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        
                    </div>
                    <div class="col-sm-8">
                        
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->
    </header>
    <!--/header-->

    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="?controller=home">Trang chủ</a></li>
                    <li class="active">Thanh toán</li>
                </ol>
            </div>
            <!--/breadcrums-->
            <div class="shopper-informations">
                <div class="row">
                <div class="col-sm-3">
                        <div class="shopper-info">
                            <p>Thông tin người mua hàng</p>
                            <form>
                                <input type="text" name="full_name" value="<?php echo $khachhang[0]['full_name']?>">
                                <input type="number" name="sdt" value="<?php echo $khachhang[0]['sdt']?>">
                            </form>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="shopper-info">
                            <p>Địa chỉ người mua</p>
                            <form>
                                <input type="email" value="<?php echo $khachhang[0]['email']?>">
                                <input name="diachi" rows="3" value="<?php echo $khachhang[0]['diachi']?>">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="review-payment">
                <h2>Xác nhận & Thanh toán</h2>
            </div>
            <div class="table-responsive cart_info">
                <table class="table table-condensed">
                    <thead>
                        <tr class="cart_menu text-center">
                            <td class="image">Ảnh</td>
                            <td class="description">Tên sản phẩm</td>
                            <td class="quantity">Số lượng</td>
                            <td class="price">Giá</td>
                            <td class="total">Tổng</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $tongtiensp = 0;
                            $tongsl = 0;
                            $tongtien = 0;
                            if(isset($_SESSION['cart'])){
                                foreach ($_SESSION['cart'] as $key => $value){
                                    $tongsl+=$value['sl'];
                                    $tongtiensp+=$value['sl']*$value['gia'];
                                    $tongtien = $tongtiensp
                        ?>
                        <tr class="text-center">
                            <td class="cart_product">
                                <img style="width:100px" src="<?php echo $value['anh_chinh']?>" alt="">
                            </td>
                            <td class="cart_description">
                                <h4><?php echo $value['tensanpham']?></h4>
                            </td>

                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <p><?php echo $value['sl']?></p>
                                </div>
                            </td>

                            <td class="cart_price">
                                <p><?php echo number_format($value['gia'])?>đ</p>                                
                            </td>
                            
                            <td class="cart_total">
                                <p class="cart_total_price"><?php echo number_format($value['sl']*$value['gia'])?>đ</p>
                            </td>

                            
                        </tr>
                        <?php }}?>
                    </tbody>

                    <tr>
                        <td colspan="4">&nbsp;</td>
                        <td colspan="2">
                            <table class="table table-condensed total-result">
                                <tr>
                                    <td>Tổng số lượng</td>
                                    <td><?php echo $tongsl?></td>
                                    <td>Tổng tiền</td>
                                    <td><span><?php echo number_format($tongtien)?></span>đ</td>
                                    <td class="cart_delete">
                                        <a class="cart_quantity_delete" style="color: black;" href="?controller=cart">Sửa</a>
                                    </td>
                                </tr>

                                
                            </table>
                            <a class="btn btn-default check_out" name="btn_thanhtoan" href="#">Đồng ý với các quyết định trên</a><br>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </section>
    <!--/#cart_items-->



    <footer id="footer">
        <!--Footer-->
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Hỗ trợ trực tuyến</a></li>
                                <li><a href="">Liên hệ chúng tôi</a></li>
                                <li><a href="">Tình trạng đặt hàng</a></li>
                                <li><a href="">Thay đổi địa điểm</a></li>
                                <li><a href="">câu hỏi thường gặp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Áo thun</a></li>
                                <li><a href="">Nam</a></li>
                                <li><a href="">Nữ</a></li>
                                <li><a href="">Thẻ quà tặng</a></li>
                                <li><a href="">Giày</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Điều khoản sử dụng</a></li>
                                <li><a href="">Chính sách bảo mật</a></li>
                                <li><a href="">Chính sách hoàn tiền</a></li>
                                <li><a href=""> Hệ thống thanh toán</a></li>
                                <li><a href="">hệ thống vé</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Thông tin công ty</a></li>
                                <li><a href="">nghề nghiệp</a></li>
                                <li><a href="">Vị trí cửa hàng</a></li>
                                <li><a href=""> Chương trình liên kết</a></li>
                                <li><a href="">bản quyền</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer><!--/Footer-->
	


  
</body>
</html>