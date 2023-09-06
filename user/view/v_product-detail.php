<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
       <style>
        .category-tab ul {
            background: whitesmoke;
        }
        input[type='number']::-webkit-inner-spin-button,
        input[type='number']::-webkit-outer-spin-button {
                                -webkit-appearance: none;
                                margin: 0;
        }
        #product-variation{
            overflow: hidden;
            min-width: 5rem;
            min-height: 2.125rem;
            box-sizing: border-box;
            padding: .25rem .75rem;
            margin: 0 8px 8px 0;
            color: rgba(0,0,0,.8);
            text-align: center;
            border-radius: 2px;
            border: 1px solid rgba(0,0,0,.09);
            position: relative;
            background: whitesmoke;
            outline: 0;
            word-break: break-word;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
        #product-variation:hover{
            border-color: red;
        }
        .size_color{
            display: contents;
        }
        .warning{
            color:red;
        }
       
       
    </style>
</head>
<!--/head-->

<body>
    <header id="header">
        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="?controller=home"><img src="../images/home/logo.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                            <li><a href="?controller=account"><i class="fa fa-user"></i>Tài khoản</a></li>
                                <li><a href=""><i class="fa fa-star"></i>Danh sách yêu thích</a></li>
                                <li><a href="?controller=checkout"><i class="fa fa-crosshairs"></i>Thanh toán</a></li>
                                <li><a href="?controller=cart"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a></li>
                                <li><?php if (isset($_SESSION['ss_user'])) {
                                    echo "<a href='?controller=logout'><i class='fa fa-lock'></i>Đăng xuất</a>";
                                }else{
                                    echo "<a href='?controller=login'><i class='fa fa-lock'></i>Đăng nhập</a>";
                                } ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="?controller=home" class="active">Trang chủ</a></li>
                                <li class="dropdown"><a href="#">Mail<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="?controller=shop">Cửa hàng</a></li>
                                        <li><a href="?controller=checkout">Thủ tục thanh toán</a></li>
                                        <li><a href="?controller=cart">Giỏ hàng</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="?controller=blog">Blog List</a></li>
                                        <li><a href="?controller=blog-single">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="?controller=contact">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Loại</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span> Nam
                                        </a>
                                    </h4>
                                </div>
                                <div id="mens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Áo Vest</a></li>
                                            <li><a href="">Quần</a></li>
                                            <li><a href="">Áo Polo</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span> Nữ
                                        </a>
                                    </h4>
                                </div>
                                <div id="womens" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Đầm</a></li>
                                            <li><a href="">Quần</a></li>
                                            <li><a href="">Áo nữ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordian" href="#kid">
                                            <span class="badge pull-right"><i class="fa fa-plus"></i></span> trẻ em
                                        </a>
                                    </h4>
                                </div>
                                <div id="kid" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li><a href="">Áo</a></li>
                                            <li><a href="">Quần</a></li>
                                            <li><a href="">Cả bộ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shipping text-center">
                            <!--shipping-->
                            <img src="../images/home/shipping.jpg" alt="" />
                        </div>
                        <!--/shipping-->

                    </div>
                </div>
                    
                <div class="col-sm-9 padding-right">
                    <div class="product-details">
                        <!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="../images/sanpham/<?php echo $product[0]['anh_chinh']?>" alt="" />
                            </div>
                            <div id="similar-product" class="carousel slide" data-ride="carousel">

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <?php 
                                            foreach($anhphu1 as $key => $value){?>
                                            <img style="width:100px; height:100px;" class="imagess" src="../images/sanpham/<?php echo $value['anh_phu']?>" alt="">
                                            
                                        <?php }?>
                                        
                                    </div>
                                </div>

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a style="margin-right: -13px;" class="right item-control" href="#similar-product" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>

                        </div>
                        <div class="col-sm-7">
                            <form action="" method="post">
                            <div class="product-information">
                                <!--/product-information-->
                                <img src="../images/product-details/new.jpg" class="newarrival" alt="" />

                                <!-- /// product-name //// -->
                                
                                <div class="product-content-right-product-name">
                                    <strong>
                                        <h1 >
                                           <input type="text" name="tensanpham" value=" <?php echo $product[0]['tensanpham']?> ">
                                        </h1>
                                    </strong>
                                    <p>Web ID: <?php echo $product[0]['id_sanpham']?></p>
                                    <img src="../images/product-details/rating.png" alt="" />
                                </div>

                                <!-- //// productproduct-giá //// -->
                                <div class="product-content-right-product-price">
                                    <span class="cart"><?php echo number_format($product[0]['gia'])?><sup>đ</sup></span>
                                </div>
                                
                                
                                <div class="product-content-right-product-color">
                                    <p style="font-weight: bold;">Loại sản phẩm</p>
                                   
                                    <?php 
                                        foreach($anhphu1 as $key => $value){
                                    ?>
                                    
                                    <div class="size_color">
                                    <label>
                                        <input type="radio"  name="loai_sp" value="<?php echo $value['type_name']?>"  >
                                        <span class="text-uppercase"><?php echo $value['type_name']?></span>
                                        </label>
                                    </div>    
                                    <?php  }?>
                                    <?php if (isset($loi['loai_sp'])) { ?>
                                        <p ><span class="warning"><?php echo $loi['loai_sp'] ?></span></p> 
                                   <?php }  ?>
                                   
                                </div>
                               

                                <!-- //// product-size //// -->
                                <div class="product-content-right-product-size">
                                    <p style="font-weight: bold;">Size</p>
                                    <div class="size">
                                   
                                     
                                       <label>
                                        <input type="radio" name="size_name" value="s" >
                                        <span class="text-uppercase">s</span>
                                    </label> 
                                    <label>
                                        <input type="radio" name="size_name" value="m" >
                                        <span class="text-uppercase">m</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="size_name" value="l" >
                                        <span class="text-uppercase">l</span>
                                    </label>
                                     <label>
                                        <input type="radio" name="size_name" value="xl">
                                        <span class="text-uppercase">xl</span>
                                    </label>
                                  <label>
                                        <input type="radio" name="size_name" value="xxl">
                                        <span class="text-uppercase slash">xxl</span>
                                    </label>
                                       <!-- <li><input type="submit"  name="size_name" value="S" ><?php echo '<br>sl:'.$size[0]['s']  ?></li> 
                                         <li><input type="submit"  name="size_name" value="M" ><?php echo '<br>sl:'.$size[0]['m']  ?></li> 
                                       <li><input type="submit"  name="size_name" value="L" ><?php echo '<br>sl:'.$size[0]['l']  ?></li> 
                                        <li><input type="submit"  name="size_name" value="XL" ><?php echo '<br>sl:'.$size[0]['xl']  ?></li>
                                        <li><input type="submit"  name="size_name" value="XXL" ><?php echo '<br>sl:'.$size[0]['xxl']  ?></li> -->
                                        <?php if (isset($loi['size_name'])) { ?>
                                         <p ><span class="warning"><?php echo $loi['size_name'] ?></span></p> 
                                   <?php }  ?>
                                      
                                    </div>
                                </div>
                              
                                <div class="quantity">
                                    <span>
                                    
                                       <input style="cursor: pointer;" type="button" name="giam" value="-">       
                                        <input type="number" min="1" max="" name="sl" value="1">
                                        <input type="button" name="tang" value="+">
                                    
									</span>
                                </div>


                                <!-- /// product-button /// -->
                                <div class="product-content-right-product-button">
                                    <button name="themgiohang">THÊM VÀO GIỎ HÀNG</button>
                                    <button name="muangay">MUA NGAY</button>
                                    <a href="?controller=addToCart&id=<?php echo $value['id_sanpham']?>"><button>&hearts;</button></a>
                                </div>

                                </span>
                                <p><b>Sẵn có:</b> Còn hàng</p>
                                <p><b>Tình trạng:</b> Mới</p>
                                <a href=""><img src="../images/product-details/share.png" class="share img-responsive" alt="" /></a>
                            </div>
                            </form>
                            <!--/product-information-->
                        </div>
                    </div>
                    <!--/product-details-->

                    <div class="category-tab shop-details-tab">
                        <!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <!-- <li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li> -->

                                <li class="active"><a href="#reviews" data-toggle="tab">chi tiết</a></li>
                                <li><a href="#tag" data-toggle="tab">Đánh giá(5)</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                           

                            <div class="tab-pane fade" id="tag">
                                <div class="col-sm-12">
                                    <div class="blog-post-area">
                                        <h2 class="title text-center">Mới nhất từ ​​Blog của chúng tôi</h2>

                                    </div>
                                    <!--/blog-post-area-->

                                    <div class="rating-area">
                                        <ul class="ratings">
                                            <li class="rate-this">Đánh giá mục này:</li>
                                            <li>
                                                <i class="fa fa-star color"></i>
                                                <i class="fa fa-star color"></i>
                                                <i class="fa fa-star color"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="color">(6 phiếu)</li>
                                        </ul>
                                    </div>
                                    <!--/rating-area-->

                                    <div class="socials-share">
                                        <a href=""><img src="../images/blog/socials.png" alt=""></a>
                                    </div>
                                    <!--/socials-share-->

                                    <div class="media commnets">
                                        <a class="pull-left" href="#">
                                            <img class="media-object" src="../images/blog/man-one.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">Annie Davis</h4>
                                            <img src="../images/product-details/rating.png" alt="" />
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat.</p>
                                            <div class="blog-socials">
                                                <ul>
                                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                                <a class="btn btn-primary" href="">Bài viết khác</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Comments-->
                                    <div class="response-area">
                                        <h2>3 RESPONSES</h2>
                                        <ul class="media-list">
                                            <li class="media">

                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="../images/blog/man-two.jpg" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <ul class="sinlge-post-meta">
                                                        <li><i class="fa fa-user"></i>Janis Gallagher</li>
                                                        <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                                        <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                                                    </ul>
                                                    <img src="../images/product-details/rating.png" alt="" style="width:80px; height:15px;">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat.</p>
                                                    <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>phát lại</a>
                                                </div>
                                            </li>
                                            <li class="media second-media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="../images/blog/man-three.jpg" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <ul class="sinlge-post-meta">
                                                        <li><i class="fa fa-user"></i>Janis Gallagher</li>
                                                        <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                                        <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                                                    </ul>
                                                    <img src="../images/product-details/rating.png" alt="" style="width:80px; height:15px;">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat.</p>
                                                    <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>phát lại</a>
                                                </div>
                                            </li>
                                            <li class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="../images/blog/man-four.jpg" alt="">
                                                </a>
                                                <div class="media-body">
                                                    <ul class="sinlge-post-meta">
                                                        <li><i class="fa fa-user"></i>Janis Gallagher</li>
                                                        <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                                        <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                                                    </ul>
                                                    <img src="../images/product-details/rating.png" alt="" style="width:80px; height:15px;">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                                        aliquip ex ea commodo consequat.</p>
                                                    <a class="btn btn-primary" href=""><i class="fa fa-reply"></i>phát lại</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--/Response-area-->
                                    <div class="replay-box">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h2>Leave a replay</h2>
                                                <form>
                                                    <div class="blank-arrow">
                                                        <label>Tên của bạn</label>
                                                    </div>
                                                    <span>*</span>
                                                    <input type="text" placeholder="write your name...">
                                                    <div class="blank-arrow">
                                                        <label>Địa chỉ email</label>
                                                    </div>
                                                    <span>*</span>
                                                    <input type="email" placeholder="your email address...">
                                                    <div class="blank-arrow">
                                                        <label>Trang web</label>
                                                    </div>
                                                    <input type="email" placeholder="current city...">
                                                </form>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="text-area">
                                                    <div class="blank-arrow">
                                                        <label>Tên của bạn</label>
                                                    </div>
                                                    <span>*</span>
                                                    <textarea name="message" rows="11"></textarea>
                                                    <a class="btn btn-primary" href="">đăng bình luận</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Repaly Box-->
                                </div>
                            </div>

                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    <div class="single-blog-post">
                                        <h3>Áo phông hồng bé gái đã về hàng</h3>
                                        <div class="post-meta">
                                            <ul>
                                                <li><i class="fa fa-user"></i> Mac Doe</li>
                                                <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                                                <li><i class="fa fa-calendar"></i> DEC 5, 2013</li>
                                            </ul>
                                            <span>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-o"></i>
											</span>
                                        </div>
                                        <a href="">
                                            <img src="../images/blog/blog-one.jpg" alt="">
                                        </a>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p> <br>

                                        <p>
                                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> <br>

                                        <p>
                                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p> <br>

                                        <p>
                                            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                        </p>
                                        <div class="pager-area" style="border-bottom: 2px solid gray;">
                                            <ul class="pager pull-right">
                                                <!-- <li><a href="#">Pre</a></li>
												<li><a href="#">Next</a></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
                                        <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
                                        <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    <p><b>Write Your Review</b></p>

                                    <form action="#">
                                        <span>
											<input type="text" placeholder="Tên của bạn"/>
											<input type="email" placeholder="Địa chỉ email"/>
										</span>
                                        <textarea name=""></textarea>
                                        <b>Xếp hạng: </b> <img src="../images/product-details/rating.png" alt="" />
                                        <button type="button" class="btn btn-default pull-right">
											Thêm
										</button>
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!--/category-tab-->

                    <div class="recommended_items">
                        <!--recommended_items-->
                        <h2 class="title text-center">Các đề mục được đề xuất</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend1.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend2.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="product-image-wrapper">
                                            <div class="single-products">
                                                <div class="productinfo text-center">
                                                    <img src="../images/home/recommend3.jpg" alt="" />
                                                    <h2>$56</h2>
                                                    <p>Easy Polo Black Edition</p>
                                                    <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>e</span>-shopper</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="../images/home/iframe1.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="../images/home/iframe2.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="../images/home/iframe3.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="../images/home/iframe4.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="../images/home/map.png" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Dịch vụ</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Hỗ trợ trực tuyến</a></li>
                                <li><a href="">Liên hệ chúng tôi</a></li>
                                <li><a href="">Tình trạng đặt hàng</a></li>
                                <li><a href=""> Thay đổi địa điểm</a></li>
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
                            <h2>chính sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Điều khoản sử dụng</a></li>
                                <li><a href="">Chính sách bảo mật</a></li>
                                <li><a href="">Chính sách hoàn tiền</a></li>
                                <li><a href="">Hệ thống thanh toán</a></li>
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
                                <p>Nhận các bản cập nhật mới nhất từ <br />trang web của chúng tôi và tự cập nhật cho chính bạn...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">bản quyền © 2013 E-SHOPPER Inc. All rights reserved.</p>
                    <p class="pull-right">Thiết kế bởi <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->


    <script>
        const inputGiam = document.querySelector("input[name='giam']");
const inputSl = document.querySelector("input[name='sl']");
const inputTang = document.querySelector("input[name='tang']");

inputGiam.addEventListener("click", function() {
    if (inputSl.value < 1) {
    alert("Số ko thích hợp");
    inputSl.value = 1;
  } else {
    inputSl.value--;
  }
});

inputTang.addEventListener("click", function() {
  inputSl.value++;
});
        function addBorder(button) {
  button.style.border = "1px solid red";
}
document.querySelector(".active").addEventListener("click", addBorder);
        let i, u;
        const images = document.getElementsByClassName('imagess');
        const button = document.querySelector('.right');
        const button1 = document.querySelector('.left');
        for (i = 3; i < images.length; i++) {
            images[i].style.display = 'none';
        }
        // Nếu đang hiển thị ảnh, ẩn đi khi vượt quá 4 ảnh

        if (button) {
            button.addEventListener("click", function() {
                for (u = 0; u < images.length; u++) {
                    images[u].style.display = 'block';
                }
                for (i = 0; i < 3; i++) {
                    images[i].style.display = 'none';
                }
            })
        }
        if (button1) {
            button1.addEventListener("click", function() {
                for (u = 0; u < images.length; u++) {
                    images[u].style.display = 'none';
                }
                for (i = 0; i < 3; i++) {
                    images[i].style.display = 'block';
                }
            })
        }
        const bigimg = document.querySelector(".view-product img")
        const smallimg = document.querySelectorAll(".imagess")
        smallimg.forEach(function(imgitem) {
            imgitem.addEventListener("click", function() {
                bigimg.src = imgitem.src
            })
        })
    </script>
    <script src="../js/jquery.js"></script>
    <script src="../js/price-range.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>