<!DOCTYPE html>
<!--
Template Name: Ice-Cream - ice-cream responsive Template
Version: 1.0.0
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Begin Head -->
<head>
    <?=$this->getMeta();?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="author"  content="KMV"/>
    <meta name="MobileOptimized" content="320">
    <!-- start style-->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
    <link rel="stylesheet" type="text/css" href="css/custom_animation.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- favicon link-->
    <link rel="icon" type="image/ico" href="images/favicon">
</head>
<body>
<div class="loader_wrapper">
    <div class="loader">
        <img src="images/loader.gif" alt="">
    </div>
</div>
<div class="ice_main_wrapper">
    <div class="ice_banner_wrapper">
        <img src="http://via.placeholder.com/1920x980" alt="" class="img-responsive">
        <div class="banner_content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-0 col-xs-offset-0">
                        <div class="header_wrapper">
                            <div class="ice_logo">
                                <a href="index.html"><img src="images/logo.png" alt=""></a>
                            </div>
                            <div class="ice_menu_wraper">
                                <a data-toggle="collapse" data-target="#menu" class="toggle"><span></span></a>
                                <div class="ice_menu collapse" id="menu">
                                    <a data-toggle="collapse" data-target="#menu" class="toggle close"><span></span></a>
                                    <ul>
                                        <li><a>home</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">home version 1</a></li>
                                                <li><a href="index1.html">home version 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a>blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog_single.html">blog single</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop_single.html">shop single</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a>pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="checkout.html">checkout</a>
                                                </li>
                                                <li><a href="error.html">404</a>
                                                </li>
                                                <li><a href="faq.html">FAQS</a>
                                                </li>
                                                <li><a href="shortcodes.html">shortcodes</a>
                                                </li>
                                                <li><a href="term_condition.html">terms & conditions</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </div>
                                <div class="pull-right search_wrapper">
                                    <ul>
                                        <li class="cart"><a><i class="flaticon-shopping-purse-icon"></i><span>2</span></a>
                                            <ul class="cart_box">
                                                <li>
                                                    <div class="cart_section">
                                                        <div class="cart_img">
                                                            <a href="#"><img src="http://via.placeholder.com/60x60" alt=""></a>
                                                        </div>
                                                        <div class="cart_detail">
                                                            <h4><a href="cart.html">ice-cream</a></h4>
                                                            <h5>$ 23.12</h5>
                                                        </div>
                                                        <a class="cart_delete"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart_section">
                                                        <div class="cart_img">
                                                            <a href="#"><img src="http://via.placeholder.com/60x60" alt=""></a>
                                                        </div>
                                                        <div class="cart_detail">
                                                            <h4><a href="cart.html">ice-cream</a></h4>
                                                            <h5>$ 23.12</h5>
                                                        </div>
                                                        <a class="cart_delete"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart_section">
                                                        <div class="cart_img">
                                                            <h4>total</h4>
                                                        </div>
                                                        <div class="cart_detail">
                                                            <h5>$ 23.12</h5>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="cart_section">
                                                        <p><a href="cart.html" class="ice_btn">view cart</a></p>
                                                        <p><a href="checkout.html" class="ice_btn">proceed to checkout</a></p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="search"><a><i class="flaticon-magnifier-tool"></i></a>
                                            <ul class="search_box">
                                                <li><a class="search_close"></a></li>
                                                <li>
                                                    <form class="search_form">
                                                        <p>
                                                            <input type="text" value="" name="search" id="search">
                                                            <label for="search">search</label>
                                                        </p>
                                                        <a href="#" class="search_btn"><i class="flaticon-magnifier-tool"></i></a>
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="slider_content">
                            <h1>All YOu Need Is Love & Ice Cream</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay">
            <div class="chery c1"><img src="images/banner/1.png" alt=""></div>
            <div class="chery c2"><img src="images/banner/1.png" alt=""></div>
            <div class="chery c3"><img src="images/banner/1.png" alt=""></div>
            <div class="chery c4"><img src="images/banner/1.png" alt=""></div>
            <div class="chery c5"><img src="images/banner/1.png" alt=""></div>
            <div class="chery c6"><img src="images/banner/1.png" alt=""></div>
            <div class="chery c7"><img src="images/banner/1.png" alt=""></div>
            <div class="chery c8"><img src="images/banner/1.png" alt=""></div>
        </div>
    </div>

<div class="content">
    <?=$content;?>
</div>

    <div class="ice_footer_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="widget widget_info text-center">
                        <div class="ice_logo">
                            <a href="index.html"><img src="images/logo1.png" alt=""></a>
                        </div>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical.</p>
                        <ul class="social_icon">
                            <li><a href="#"><i class="flaticon-facebook-letter-logo"></i></a></li>
                            <li><a href="#"><i class="flaticon-twitter-logo-silhouette"></i></a></li>
                            <li><a href="#"><i class="flaticon-linkedin-logo"></i></a></li>
                            <li><a href="#"><i class="flaticon-google-plus-logo"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="widget widget_news">
                        <h2 class="ice_sub_heading widget-title">latest news</h2>
                        <ul>
                            <li>
                                <div class="news_img"><a href="#"><img src="http://via.placeholder.com/111x92" alt=""></a></div>
                                <div class="news_detail"><a href="#">22 jul 2017</a> <p>Li nov lingua franca va simplic Europan. simplice Europan.</p></div>
                            </li>
                            <li>
                                <div class="news_img"><a href="#"><img src="http://via.placeholder.com/111x92" alt=""></a></div>
                                <div class="news_detail"><a href="#">22 jul 2017</a> <p>Li nov lingua franca va simplic Europan. simplice Europan.</p></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="widget widget_page">
                        <h2 class="ice_sub_heading widget-title">our pages</h2>
                        <ul>
                            <li><a href="term_condition.html"><i class="flaticon-check"></i>terms and condition</a></li>
                            <li><a href="cart.html"><i class="flaticon-check"></i>cart</a></li>
                            <li><a href="checkout.html"><i class="flaticon-check"></i>checkout</a></li>
                            <li><a href="faq.html"><i class="flaticon-check"></i>FAQS</a></li>
                            <li><a href="error.html"><i class="flaticon-check"></i>404</a></li>
                            <li><a href="shortcodes.html"><i class="flaticon-check"></i>shortcodes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="widget widget_address">
                        <h2 class="ice_sub_heading widget-title">our contact</h2>
                        <ul>
                            <li>
                                <div class="address_icon"><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i></div>
                                <div class="address_detail"><h3>Address</h3> <p>Rainbow Drive Youngstown</p></div>
                            </li>
                            <li>
                                <div class="address_icon"><i class="flaticon-call-answer"></i></div>
                                <div class="address_detail"><h3>Contact Numbers</h3> <p>1800 450 1245</p></div>
                            </li>
                            <li>
                                <div class="address_icon"><i class="fa fa-clock-o"></i></div>
                                <div class="address_detail"><h3>Office Timings</h3> <p>Mon - Fri 9.00am : 6.00pm</p></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay">
            <img src="images/footer/ice.png" alt="">
        </div>
    </div>
    <div class="ice_copyright_wrapper text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copyright">
                        <p class="white">Copyrights &copy; 2017, All Rights Reserved by <a href="index.html">ICE CREAM</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="goto_wrapper"><img src="images/loader.gif" alt=""></div>
<!-- site jquery start -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/theia-sticky-sidebar.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/okzoom.min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- site jquery end -->

</body>
</html>