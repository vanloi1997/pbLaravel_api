
<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index28:48-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home Store Loyyy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="{{ asset('css/fontawesome-stars.css') }}">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.css') }}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="{{ asset('css/venobox.css') }}">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="{{ asset('css/helper.css') }}">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            @include('frontend.components.header')
            <!-- Header Area End Here -->
            <!-- Begin Slider With Banner Area -->
            @include('frontend.pages.slider.index')
            <!-- Slider With Banner Area End Here -->
            <!-- Begin Product Area -->
            <div class="product-area pt-60 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <ul class="nav li-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#li-new-product"><span>Sản Phẩm Mới Nhất</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/1.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/2.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/3.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/4.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/6.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Area End Here -->
            <!-- Begin Li's Static Banner Area -->
            <div class="li-static-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="images/banner/1_3.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="images/banner/1_4.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                        <!-- Begin Single Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="single-banner">
                                <a href="#">
                                    <img src="images/banner/1_5.jpg" alt="Li's Static Banner">
                                </a>
                            </div>
                        </div>
                        <!-- Single Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Li's Static Banner Area End Here -->
            <!-- Begin Li's Laptop Product Area -->
            <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Laptop</span>
                                </h2>
                                <ul class="li-sub-category-list">
                                    <li class="active"><a href="shop-left-sidebar.html">Prime Video</a></li>
                                    <li><a href="shop-left-sidebar.html">Computers</a></li>
                                    <li><a href="shop-left-sidebar.html">Electronics</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/1.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/2.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/3.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/4.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/6.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Laptop Product Area End Here -->
            <!-- Begin Li's TV & Audio Product Area -->
            <section class="product-area li-laptop-product li-tv-audio-product pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>TV & Audio</span>
                                </h2>
                                <ul class="li-sub-category-list">
                                    <li class="active"><a href="shop-left-sidebar.html">Chamcham</a></li>
                                    <li><a href="shop-left-sidebar.html">Sanai</a></li>
                                    <li><a href="shop-left-sidebar.html">Meito</a></li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/3.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's TV & Audio Product Area End Here -->
            <!-- Begin Li's Static Home Area -->
            <div class="li-static-home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin Li's Static Home Image Area -->
                            <div class="li-static-home-image"></div>
                            <!-- Li's Static Home Image Area End Here -->
                            <!-- Begin Li's Static Home Content Area -->
                            <div class="li-static-home-content">
                                <p>Sale Offer<span>-20% Off</span>This Week</p>
                                <h2>Featured Product</h2>
                                <h2>Meito Accessories 2018</h2>
                                <p class="schedule">
                                    Starting at
                                    <span> $1209.00</span>
                                </p>
                                <div class="default-btn">
                                    <a href="shop-left-sidebar.html" class="links">Shopping Now</a>
                                </div>
                            </div>
                            <!-- Li's Static Home Content Area End Here -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Li's Static Home Area End Here -->
            <!-- Begin Li's Trending Product Area -->
            <section class="product-area li-trending-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Tab Menu Area -->
                        <div class="col-lg-12">
                            <div class="li-product-tab li-trending-product-tab">
                                <h2>
                                    <span>Trendding Products</span>
                                </h2>
                                <ul class="nav li-product-menu li-trending-product-menu">
                                   <li><a class="active" data-toggle="tab" href="#home1"><span>Sanai</span></a></li>
                                   <li><a data-toggle="tab" href="#home2"><span>Camera Accessories</span></a></li>
                                   <li><a data-toggle="tab" href="#home3"><span>XailStation</span></a></li>
                                </ul>               
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                            <div class="tab-content li-tab-content li-trending-product-content">
                                <div id="home1" class="tab-pane show fade in active">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/2.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/4.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price new-price-2">$71.80</span>
                                                                <span class="old-price">$77.22</span>
                                                                <span class="discount-percentage">-7%</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/6.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/8.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price new-price-2">$71.80</span>
                                                                <span class="old-price">$77.22</span>
                                                                <span class="discount-percentage">-7%</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/10.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/12.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price new-price-2">$71.80</span>
                                                                <span class="old-price">$77.22</span>
                                                                <span class="discount-percentage">-7%</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="home2" class="tab-pane fade">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price new-price-2">$71.80</span>
                                                                <span class="old-price">$77.22</span>
                                                                <span class="discount-percentage">-7%</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price new-price-2">$71.80</span>
                                                                <span class="old-price">$77.22</span>
                                                                <span class="discount-percentage">-7%</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price new-price-2">$71.80</span>
                                                                <span class="old-price">$77.22</span>
                                                                <span class="discount-percentage">-7%</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="home3" class="tab-pane fade">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/3.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price new-price-2">$71.80</span>
                                                                <span class="old-price">$77.22</span>
                                                                <span class="discount-percentage">-7%</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/1.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price new-price-2">$71.80</span>
                                                                <span class="old-price">$77.22</span>
                                                                <span class="discount-percentage">-7%</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">$46.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="single-product.html">
                                                            <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="shop-left-sidebar.html">Studio Design</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <ul class="rating">
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                        <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price new-price-2">$71.80</span>
                                                                <span class="old-price">$77.22</span>
                                                                <span class="discount-percentage">-7%</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                                <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Menu Content Area End Here -->
                        </div>
                        <!-- Tab Menu Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Trending Product Area End Here -->
            <!-- Begin Li's Trendding Products Area -->
            <section class="product-area li-laptop-product li-trendding-products best-sellers pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-section-title">
                                <h2>
                                    <span>Bestsellers</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/11.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/9.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/7.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">$46.80</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="single-product.html">
                                                    <img src="images/product/large-size/5.jpg" alt="Li's Product Image">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="shop-left-sidebar.html">Studio Design</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <ul class="rating">
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                                <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price new-price-2">$71.80</span>
                                                        <span class="old-price">$77.22</span>
                                                        <span class="discount-percentage">-7%</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="#">Add to cart</a></li>
                                                        <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Li's Trendding Products Area End Here -->
            <!-- Begin Footer Area -->
            @include('frontend.components.footer')
            <!-- Footer Area End Here -->
            <!-- Begin Quick View | Modal Area -->
            <div class="modal fade modal-wrapper" id="exampleModalCenter" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="modal-inner-area row">
                                <div class="col-lg-5 col-md-6 col-sm-6">
                                   <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images slider-navigation-1">
                                            <div class="lg-image">
                                                <img src="images/product/large-size/1.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/2.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/3.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/4.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/5.jpg" alt="product image">
                                            </div>
                                            <div class="lg-image">
                                                <img src="images/product/large-size/6.jpg" alt="product image">
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs slider-thumbs-1">                                        
                                            <div class="sm-image"><img src="images/product/small-size/1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/5.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="images/product/small-size/6.jpg" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--// Product Details Left -->
                                </div>

                                <div class="col-lg-7 col-md-6 col-sm-6">
                                    <div class="product-details-view-content pt-60">
                                        <div class="product-info">
                                            <h2>Today is a good day Framed poster</h2>
                                            <span class="product-details-ref">Reference: demo_15</span>
                                            <div class="rating-box pt-20">
                                                <ul class="rating rating-with-review-item">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="review-item"><a href="#">Read Review</a></li>
                                                    <li class="review-item"><a href="#">Write Review</a></li>
                                                </ul>
                                            </div>
                                            <div class="price-box pt-20">
                                                <span class="new-price new-price-2">$57.98</span>
                                            </div>
                                            <div class="product-desc">
                                                <p>
                                                    <span>100% cotton double printed dress. Black and white striped top and orange high waisted skater skirt bottom. Lorem ipsum dolor sit amet, consectetur adipisicing elit. quibusdam corporis, earum facilis et nostrum dolorum accusamus similique eveniet quia pariatur.
                                                    </span>
                                                </p>
                                            </div>
                                            <div class="product-variants">
                                                <div class="produt-variants-size">
                                                    <label>Dimension</label>
                                                    <select class="nice-select">
                                                        <option value="1" title="S" selected="selected">40x60cm</option>
                                                        <option value="2" title="M">60x90cm</option>
                                                        <option value="3" title="L">80x120cm</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="single-add-to-cart">
                                                <form action="#" class="cart-quantity">
                                                    <div class="quantity">
                                                        <label>Quantity</label>
                                                        <div class="cart-plus-minus">
                                                            <input class="cart-plus-minus-box" value="1" type="text">
                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                        </div>
                                                    </div>
                                                    <button class="add-to-cart" type="submit">Add to cart</button>
                                                </form>
                                            </div>
                                            <div class="product-additional-info pt-25">
                                                <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a>
                                                <div class="product-social-sharing pt-25">
                                                    <ul>
                                                        <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                                        <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                                        <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                                                        <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <!-- Quick View | Modal Area End Here -->
        </div>
        <!-- Body Wrapper End Here -->
        <!-- Modernizr js -->
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <!-- jQuery-V1.12.4 -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- Popper js -->
        <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
        <!-- Bootstrap V4.1.3 Fremwork js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Ajax Mail js -->
        <script src="{{ asset('js/ajax-mail.js') }}"></script>
        <!-- Meanmenu js -->
        <script src="{{ asset('js/jquery.meanmenu.min.js') }}"></script>
        <!-- Wow.min js -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- Slick Carousel js -->
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <!-- Owl Carousel-2 js -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- Magnific popup js -->
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!-- Isotope js -->
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <!-- Imagesloaded js -->
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <!-- Mixitup js -->
        <script src="{{ asset('js/jquery.mixitup.min.js') }}"></script>
        <!-- Countdown -->
        <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
        <!-- Counterup -->
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <!-- Waypoints -->
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <!-- Barrating -->
        <script src="{{ asset('js/jquery.barrating.min.js') }}"></script>
        <!-- Jquery-ui -->
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <!-- Venobox -->
        <script src="{{ asset('js/venobox.min.js') }}"></script>
        <!-- Nice Select js -->
        <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
        <!-- ScrollUp js -->
        <script src="{{ asset('js/scrollUp.min.js') }}"></script>
        <!-- Main/Activator js -->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>

<!-- index30:23-->
</html>