<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


</head>
<body>
<?php $this->beginBody() ?>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--Main Wrapper Start-->
<div class="as-mainwrapper">
    <!--Bg White Start-->
    <div class="bg-white">
        <!--Header Area Start-->
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-5 hidden-xs">
                            <span>Have any question? +998 97 7156500</span>
                        </div>
                        <div class="col-lg-5 col-md-6 col-sm-7 col-xs-12">
                            <div class="header-top-right">
                                <div class="content"><a href="index.html#"><i class="zmdi zmdi-account"></i> My Account</a>
                                    <ul class="account-dropdown">
                                        <li><a href="index.html#">My Account</a></li>
                                        <li><a href="index.html#">Log In</a></li>
                                        <li><a href="index.html#">Register</a></li>
                                        <li><a href="index.html#">Blog</a></li>
                                    </ul>
                                </div>
                                <div class="content"><div id="google_translate_element"></div></div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-logo-menu sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <div class="logo">
                                <a href="index.php"><img src="img/logo/logo.png" alt="EDUCAT"></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="mainmenu-area pull-right">
                                <div class="mainmenu hidden-sm hidden-xs">
                                    <nav>
                                        <ul id="nav">
                                            <li class="current"><a href="index.php">Home</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index-9.html">Video Background</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="courses.html">Courses</a>
                                                <ul class="sub-menu">
                                                    <li><a href="courses-details.html">Courses Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="index.html">Features</a>
                                                <ul class="sub-menu">
                                                    <li><a href="index.html#">Sliders<i class="zmdi zmdi-chevron-right"></i></a>
                                                        <ul class="inside-menu">
                                                            <li><a href="video-background.html">Video Background </a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.html#">Menu Style<i class="zmdi zmdi-chevron-right"></i></a>
                                                        <ul class="inside-menu">
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.html#">Page Title<i class="zmdi zmdi-chevron-right"></i></a>
                                                        <ul class="inside-menu">
                                                        </ul>
                                                    </li>
                                                    <li><a href="index.html#">Footer Style<i class="zmdi zmdi-chevron-right"></i></a>
                                                        <ul class="inside-menu">
                                                            <li><a href="footer-style-1.html">Footer Style 1</a></li>
                                                            <li><a href="footer-style-2.html">Footer Style 2</a></li>
                                                            <li><a href="footer-style-3.html">Footer Style 3</a></li>
                                                            <li><a href="https://devitems.com/html/educat-preview/educat/footer-style-4.html">Footer Style 4</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li><a href="index.html">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="courses.html">Courses Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-grid.html">Book</a>
                                                <ul class="sub-menu">
                                                    <li><a href="product-details.html">Book Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <ul class="header-search">
                                    <li class="search-menu">
                                        <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                                    </li>
                                </ul>
                                <!--Search Form-->
                                <div class="search">
                                    <div class="search-form">
                                        <form id="search-form" action="index.html#">
                                            <input type="search" placeholder="Search here..." name="search" />
                                            <button type="submit">
                                                <span><i class="fa fa-search"></i></span>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                                <!--End of Search Form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="index.html">HOME</a>
                                            <ul>
                                                <li><a href="index.html">Slider Style 1</a></li>
                                                <li><a href="index-2.html">Slider Style 2</a></li>
                                                <li><a href="index-3.html">Background Image</a></li>
                                                <li><a href="index-4.html">Image Overlay Light</a></li>
                                                <li><a href="index-5.html">Image Overlay Dark</a></li>
                                                <li><a href="index-6.html">Menu With Slider</a></li>
                                                <li><a href="index-7.html">Menu With Image</a></li>
                                                <li><a href="index-8.html">Menu With Overlay</a></li>
                                                <li><a href="index-9.html">Video Background</a></li>
                                                <li><a href="index-10.html">Fixed Image</a></li>
                                                <li><a href="index-11.html">Overlay Fixed Image</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="courses.html">Courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses-details.html">Courses Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.html">Shop</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="event.html">Event</a>
                                            <ul class="sub-menu">
                                                <li><a href="event-details.html">Event Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.html">Shortcode</a>
                                            <ul class="sub-menu">
                                                <li><a href="shortcode-course.html">Courses</a></li>
                                                <li><a href="shortcode-event.html">Event</a></li>
                                                <li><a href="shortcode-latest-news.html">Latest News</a></li>
                                                <li><a href="shortcode-product.html">Product</a></li>
                                                <li><a href="shortcode-testimonial.html">Testimonial</a></li>
                                                <li><a href="shortcode-contact-form.html">Contact Form</a></li>
                                                <li><a href="shortcode-map.html">Map</a></li>
                                                <li><a href="shortcode-facts.html">Facts</a></li>
                                                <li><a href="image-gallery.html">Image Gallery</a></li>
                                                <li><a href="video-gallery.html">Video Gallery</a></li>
                                                <li><a href="shortcode-alerts.html">Alerts</a></li>
                                                <li><a href="shortcode-button.html">Button</a></li>
                                                <li><a href="shortcode-breadcrumbs.html">Breadcrumb</a></li>
                                                <li><a href="shortcode-dropdown.html">Dropdown</a></li>
                                                <li><a href="shortcode-pagination.html">Pagination</a></li>
                                                <li><a href="shortcode-progressbar.html">Progressbar</a></li>
                                                <li><a href="text-animation-1.html">Text Animation 1</a></li>
                                                <li><a href="text-animation-2.html">Text Animation 2</a></li>
                                                <li><a href="text-animation-3.html">Text Animation 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="latest-news.html">Latest News</a>
                                            <ul class="sub-menu">
                                                <li><a href="news-details.html">News Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="index.html">Features</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html#">Sliders</a>
                                                    <ul>
                                                        <li><a href="slider-style-1.html">Slider Style 1</a></li>
                                                        <li><a href="slider-style-2.html">Slider Style 2</a></li>
                                                        <li><a href="slider-style-3.html">Slider Style 3</a></li>
                                                        <li><a href="background-image.html">Image Background </a></li>
                                                        <li><a href="image-overlay-light.html">Overlay Light </a></li>
                                                        <li><a href="image-overlay-dark.html">Overlay Dark </a></li>
                                                        <li><a href="video-background.html">Video Background </a></li>
                                                        <li><a href="fixed-image.html">Fixed Image</a></li>
                                                        <li><a href="overlay-fixed-image.html">Overlay Fixed Image</a></li>
                                                        <li><a href="text-animation-1.html">Text Animation 1 </a></li>
                                                        <li><a href="text-animation-2.html">Text Animation 2 </a></li>
                                                        <li><a href="text-animation-3.html">Text Animation 3 </a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="index.html#">Menu Style</a>
                                                    <ul>
                                                        <li><a href="theme-menu-1.html">Theme Menu 1</a></li>
                                                        <li><a href="theme-menu-2.html">Theme Menu 2</a></li>
                                                        <li><a href="theme-menu-3.html">Theme Menu 3</a></li>
                                                        <li><a href="without-top-bar.html">Without Top Bar</a></li>
                                                        <li><a href="menu-center.html">Menu Center</a></li>
                                                        <li><a href="menu-transparent.html">Transparent</a></li>
                                                        <li><a href="menu-semi-transparent.html">Semi Transparent</a></li>
                                                        <li><a href="menu-dark.html">Menu Dark</a></li>
                                                        <li><a href="borderd-menu.html">Menu Border</a></li>
                                                        <li><a href="menu-top-border.html">Top Border Hover</a></li>
                                                        <li><a href="menu-sticky.html">Menu Sticky</a></li>
                                                        <li><a href="menu-non-sticky.html">Menu Non Sticky</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="index.html#">Page Title</a>
                                                    <ul>
                                                        <li><a href="breadcrumb-dark.html">Title Dark</a></li>
                                                        <li><a href="breadcrumb-fixed.html">Title Fixed</a></li>
                                                        <li><a href="breadcrumb-image.html">Title Image</a></li>
                                                        <li><a href="breadcrumb-transparent.html">Title Transparent</a></li>
                                                        <li><a href="breadcrumb-left.html">Title Left</a></li>
                                                        <li><a href="breadcrumb-right.html">Title Right</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="index.html#">Footer Style</a>
                                                    <ul>
                                                        <li><a href="footer-style-1.html">Footer Style 1</a></li>
                                                        <li><a href="footer-style-2.html">Footer Style 2</a></li>
                                                        <li><a href="footer-style-3.html">Footer Style 3</a></li>
                                                        <li><a href="https://devitems.com/html/educat-preview/educat/footer-style-4.html">Footer Style 4</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area end -->
        </header>
        <!--End of Header Area-->
        <!--Slider Area Start-->
        <div class="slider-area">
            <div class="preview-2">
                <div id="nivoslider" class="slides">
                    <img src="img/slider/1.jpg" alt="" title="#slider-1-caption1"/>
                    <img src="img/slider/2.jpg" alt="" title="#slider-1-caption2"/>
                </div>
                <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content-wrapper">
                                        <div class="text-content">
                                            <h1 class="title1 wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="0s">LIME.UZ Education Needs<br>
                                                Complete Solution</h1>
                                            <p class="sub-title wow fadeInUp hidden-sm hidden-xs" data-wow-duration="2900ms" data-wow-delay=".5s"> There are many variations of passages of Lorem Ipsum available, but the majority have<br>
                                                suffered alteration in some form, by injected humour, or randomised words which<br>
                                                don't look even slightly believable.</p>
                                            <div class="banner-readmore wow fadeInUp" data-wow-duration="3600ms" data-wow-delay=".6s">
                                                <a class="button-default" href="index.html#">View Courses</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                    <div class="banner-content slider-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-content-wrapper">
                                        <div class="text-content slide-2">
                                            <h1 class="title1 wow rotateInDownLeft" data-wow-duration="1000ms" data-wow-delay="0s">LIME.UZ FIRST WEB EDUCATION<br>
                                                Complete Solution</h1>
                                            <p class="sub-title wow rotateInDownLeft hidden-sm hidden-xs" data-wow-duration="1800ms" data-wow-delay="0s"> There are many variations of passages of Lorem Ipsum available, but the majority have<br>
                                                suffered alteration in some form, by injected humour, or randomised words which<br>
                                                don't look even slightly believable.</p>
                                            <div class="banner-readmore wow rotateInDownLeft" data-wow-duration="1800ms" data-wow-delay="0s">
                                                <a class="button-default" href="index.html#">View Courses</a>
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
        <!--End of Slider Area-->
        <!--About Area Start-->
        <div class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="about-container">
                            <h3>WHY LIME.UZ ?</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text
                                amr songr balga ami toami valo lasi ciri din akr dali</p>
                            <a class="button-default" href="index.html#">Learn Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of About Area-->
        <!--Course Area Start-->
        <div class="course-area section-padding bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>POPULAR COURSES</h3>
                                <p>There are many variations of passages of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-item">
                            <div class="single-item-image overlay-effect">
                                <a href="index.html#"><img src="img/course/1.jpg" alt=""></a>
                            </div>
                            <div class="single-item-text">
                                <h4><a href="index.html#">Photoshop CC 2017</a></h4>
                                <div class="single-item-text-info">
                                    <span>By: <span>Farida</span></span>
                                    <span>Date: <span>20.5.15</span></span>
                                </div>
                                <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo ur,There are many but the mri have suffered alteration in some </p>
                                <div class="single-item-content">
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <div class="single-item-rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="button-bottom">
                                <a href="index.html#" class="button-default">Learn Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-item">
                            <div class="single-item-image overlay-effect">
                                <a href="index.html#"><img src="img/course/2.jpg" alt=""></a>
                            </div>
                            <div class="single-item-text">
                                <h4><a href="index.html#">Illustrator CC 2017</a></h4>
                                <div class="single-item-text-info">
                                    <span>By: <span>Subas Das</span></span>
                                    <span>Date: <span>20.5.15</span></span>
                                </div>
                                <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo ur,There are many but the mri have suffered alteration in some </p>
                                <div class="single-item-content">
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <div class="single-item-rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="button-bottom">
                                <a href="index.html#" class="button-default">Learn Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm">
                        <div class="single-item">
                            <div class="single-item-image overlay-effect">
                                <a href="index.html#"><img src="img/course/3.jpg" alt=""></a>
                            </div>
                            <div class="single-item-text">
                                <h4><a href="index.html#">Indesign CC 2017</a></h4>
                                <div class="single-item-text-info">
                                    <span>By: <span>Momin Boss</span></span>
                                    <span>Date: <span>20.5.15</span></span>
                                </div>
                                <p>There are many variations of sages of Lorem Ipsum available, but the mrity have suffered alteration in some orm, by injected humo ur,There are many but the mri have suffered alteration in some </p>
                                <div class="single-item-content">
                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-eye"></i>59</span>
                                        <span><i class="zmdi zmdi-comments"></i>19</span>
                                    </div>
                                    <div class="single-item-rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="button-bottom">
                                <a href="index.html#" class="button-default">Learn Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 text-center">
                        <a href="index.html#" class="button-default button-large">Browse All Courses <i class="zmdi zmdi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Course Area-->
        <!--Fun Factor Area Start-->
        <div class="fun-factor-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper white">
                            <div class="section-title">
                                <h3>IMPORTANT FACTS</h3>
                                <p>There are many variations of passages of Lorem Ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="single-fun-factor">
                            <h4>Teachers</h4>
                            <h2><span class="counter">79</span>+</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-fun-factor">
                            <h4>Members</h4>
                            <h2><span class="counter">120</span>+</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-fun-factor">
                            <h4>Courses</h4>
                            <h2><span class="counter">36</span>+</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="single-fun-factor">
                            <h4>Countries</h4>
                            <h2><span class="counter">20</span>+</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Fun Factor Area-->
        <!--Latest News Area Start-->
        <div class="latest-area section-padding bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>Latest News</h3>
                                <p>There are many variations of passages</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-latest-item">
                            <div class="single-latest-image">
                                <a href="index.html#"><img src="img/latest/1.jpg" alt=""></a>
                            </div>
                            <div class="single-latest-text">
                                <h3><a href="index.html#">Learn English in ease</a></h3>
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                    <span><i class="zmdi zmdi-eye"></i>59</span>
                                    <span><i class="zmdi zmdi-comments"></i>19</span>
                                </div>
                                <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                <a href="index.html#" class="button-default">LEARN Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-latest-item">
                            <div class="single-latest-image">
                                <a href="index.html#"><img src="img/latest/2.jpg" alt=""></a>
                            </div>
                            <div class="single-latest-text">
                                <h3><a href="index.html#">Learn Russian in ease</a></h3>
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                    <span><i class="zmdi zmdi-eye"></i>59</span>
                                    <span><i class="zmdi zmdi-comments"></i>19</span>
                                </div>
                                <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                <a href="index.html#" class="button-default">LEARN Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-latest-item">
                            <div class="single-latest-image">
                                <a href="index.html#"><img src="img/latest/3.jpg" alt=""></a>
                            </div>
                            <div class="single-latest-text">
                                <h3><a href="index.html#">Korean Language in ease</a></h3>
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                    <span><i class="zmdi zmdi-eye"></i>59</span>
                                    <span><i class="zmdi zmdi-comments"></i>19</span>
                                </div>
                                <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                <a href="index.html#" class="button-default">LEARN Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-latest-item">
                            <div class="single-latest-image">
                                <a href="index.html#"><img src="img/latest/4.jpg" alt=""></a>
                            </div>
                            <div class="single-latest-text">
                                <h3><a href="index.html#">Learn English in ease</a></h3>
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-calendar-check"></i>25 jun 2050</span>
                                    <span><i class="zmdi zmdi-eye"></i>59</span>
                                    <span><i class="zmdi zmdi-comments"></i>19</span>
                                </div>
                                <p>There are many variaons of passages of Lorem Ipsuable, amrn in some by injected humour, </p>
                                <a href="index.html#" class="button-default">LEARN Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Latest News Area-->
        <!--Online Product Area Start-->
        <div class="product-area section-bottom-padding bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>Online Library</h3>
                                <p>There are many variations of passages</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="single-product-item">
                            <div class="single-product-image">
                                <a href="index.html#"><img src="img/product/1.jpg" alt=""></a>
                            </div>
                            <div class="single-product-text">
                                <h4><a href="index.html#">Title Product Here</a></h4>
                                <h5>Book</h5>
                                <div class="product-price">
                                    <h3>-</h3>
                                    <div class="single-item-rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                </div>
                                <div class="product-buttons">
                                    <button type="button" class="button-default cart-btn">ADD TO CART</button>
                                    <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                                    <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-product-item">
                            <div class="single-product-image">
                                <a href="index.html#"><img src="img/product/2.jpg" alt=""></a>
                            </div>
                            <div class="single-product-text">
                                <h4><a href="index.html#">Title Product Here</a></h4>
                                <h5>Book</h5>
                                <div class="product-price">
                                    <h3>-</h3>
                                    <div class="single-item-rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                </div>
                                <div class="product-buttons">
                                    <button type="button" class="button-default cart-btn">ADD TO CART</button>
                                    <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                                    <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-product-item">
                            <div class="single-product-image">
                                <a href="index.html#"><img src="img/product/3.jpg" alt=""></a>
                            </div>
                            <div class="single-product-text">
                                <h4><a href="index.html#">Title Product Here</a></h4>
                                <h5>Book</h5>
                                <div class="product-price">
                                    <h3>-</h3>
                                    <div class="single-item-rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                </div>
                                <div class="product-buttons">
                                    <button type="button" class="button-default cart-btn">ADD TO CART</button>
                                    <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                                    <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm">
                        <div class="single-product-item">
                            <div class="single-product-image">
                                <a href="index.html#"><img src="img/product/4.jpg" alt=""></a>
                            </div>
                            <div class="single-product-text">
                                <h4><a href="index.html#">Title Product Here</a></h4>
                                <h5>Book</h5>
                                <div class="product-price">
                                    <h3>-</h3>
                                    <div class="single-item-rating">
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star"></i>
                                        <i class="zmdi zmdi-star-half"></i>
                                    </div>
                                </div>
                                <div class="product-buttons">
                                    <button type="button" class="button-default cart-btn">ADD TO CART</button>
                                    <button type="button" class="button-default"><i class="zmdi zmdi-favorite"></i></button>
                                    <button type="button" class="button-default"><i class="zmdi zmdi-refresh-alt"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Online Product Area-->
        <!--Testimonial Area Start-->
        <div class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-0 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2">
                                <div class="testimonial-image-slider text-center">
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/1.jpg" alt="testimonial 1" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/2.jpg" alt="testimonial 2" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/3.jpg" alt="testimonial 3" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/1.jpg" alt="testimonial 1" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/2.jpg" alt="testimonial 2" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="img/testimonial/3.jpg" alt="testimonial 3" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-text-slider text-center">
                            <div class="sin-testiText">
                                <h2>Farida </h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Chowchilla Madera</h2>
                                <p>Nam nec tellus a odio tincidunt This lorem is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean nisi sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum gravida.</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Kattie Luis</h2>
                                <p>Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean tincidunt sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum Photoshop.</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Farida </h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Chowchilla Madera</h2>
                                <p>Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, aliquet lorem quis tellus velit bibendum auctor, nisi elit consequat ipsum</p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Kattie Luis</h2>
                                <p>Nam nec tellus a odio tincidunt This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem gravida tincidunt quis bibendum auctor, nisi elit consequat ipsum</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Testimonial Area-->
        <!--Event Area Start-->
        <div class="event-area section-padding bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-wrapper">
                            <div class="section-title">
                                <h3>OUR EVENTS</h3>
                                <p>There are many variations of passages</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-event-item">
                            <div class="single-event-image">
                                <a href="index.html#">
                                    <img src="img/event/1.jpg" alt="">
                                    <span><span>15</span>Jun</span>
                                </a>
                            </div>
                            <div class="single-event-text">
                                <h3><a href="index.html#">Learn English in ease</a></h3>
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                    <span><i class="zmdi zmdi-pin"></i>Dhaka Bangladesh</span>
                                </div>
                                <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                                <a class="button-default" href="index.html#">LEARN Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-event-item">
                            <div class="single-event-image">
                                <a href="index.html#">
                                    <img src="img/event/2.jpg" alt="">
                                    <span><span>20</span>Apr</span>
                                </a>
                            </div>
                            <div class="single-event-text">
                                <h3><a href="index.html#">Learn English in ease</a></h3>
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                    <span><i class="zmdi zmdi-pin"></i>Jessore Bangladesh</span>
                                </div>
                                <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                                <a class="button-default" href="index.html#">LEARN Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm">
                        <div class="single-event-item">
                            <div class="single-event-image">
                                <a href="index.html#">
                                    <img src="img/event/3.jpg" alt="">
                                    <span><span>06</span>Dec</span>
                                </a>
                            </div>
                            <div class="single-event-text">
                                <h3><a href="index.html#">Learn English in ease</a></h3>
                                <div class="single-item-comment-view">
                                    <span><i class="zmdi zmdi-time"></i>4.00 pm - 8.00 pm</span>
                                    <span><i class="zmdi zmdi-pin"></i>Dhaka. Bangladesh</span>
                                </div>
                                <p>There are many variaons of passa of Lorem Ipsuable, amrn in sofby injected humour, amr sarata din megla....</p>
                                <a class="button-default" href="index.html#">LEARN Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Event Area-->
        <!--Newsletter Area Start-->
        <div class="newsletter-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5">
                        <div class="newsletter-content">
                            <h3>SUBSCRIBE</h3>
                            <h2>TO OUR NEWSLETTER</h2>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7">
                        <div class="newsletter-form angle">
                            <form action="index.html#" id="mc-form" class="mc-form footer-newsletter fix">
                                <div class="subscribe-form">
                                    <input id="mc-email" type="email" name="email" placeholder="Enter your email address...">
                                    <button id="mc-submit" type="submit">SUBSCRIBE</button>
                                </div>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre fix pull-right">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Newsletter Area-->
        <!--Footer Widget Area Start-->
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="img/logo/footer.png" alt=""></a>
                            </div>
                            <p>Elit Study Group is the only training center in Uzbekistan, which operates in more than 30 directions. At us you can find a wide range of courses, both basic, or additional, and professional educational level of all spheres </p>
                            <div class="social-icons">
                                <a href="index.html#"><i class="zmdi zmdi-facebook"></i></a>
                                <a href="index.html#"><i class="zmdi zmdi-rss"></i></a>
                                <a href="index.html#"><i class="zmdi zmdi-google-plus"></i></a>
                                <a href="index.html#"><i class="zmdi zmdi-pinterest"></i></a>
                                <a href="index.html#"><i class="zmdi zmdi-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-footer-widget">
                            <h3>GET IN TOUCH</h3>
                            <a href="tel:+998977156500"><i class="fa fa-phone"></i>+998977156500</a>
                            <span><i class="fa fa-envelope"></i>info@lime.uz</span>
                            <span><i class="fa fa-globe"></i>www.lime.uz</span>
                            <span><i class="fa fa-map-marker"></i>Tashkent city, Yunusabad, A.Temur 108.</span>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-sm">
                        <div class="single-footer-widget">
                            <h3>Useful Links</h3>
                            <ul class="footer-list">
                                <li><a href="index.html#">Teachers &amp; Staff</a></li>
                                <li><a href="index.html#">Our Courses</a></li>
                                <li><a href="index.html#">Courses Categories</a></li>
                                <li><a href="index.html#">Support</a></li>
                                <li><a href="index.html#">Terms &amp; Conditions</a></li>
                                <li><a href="index.html#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <div class="single-footer-widget">
                            <h3>Instagram</h3>
                            <div class="instagram-image">
                                <div class="footer-img">
                                    <a href="index.html#"><img src="img/footer/1.jpg" alt=""></a>
                                </div>
                                <div class="footer-img">
                                    <a href="index.html#"><img src="img/footer/2.jpg" alt=""></a>
                                </div>
                                <div class="footer-img">
                                    <a href="index.html#"><img src="img/footer/3.jpg" alt=""></a>
                                </div>
                                <div class="footer-img">
                                    <a href="index.html#"><img src="img/footer/4.jpg" alt=""></a>
                                </div>
                                <div class="footer-img">
                                    <a href="index.html#"><img src="img/footer/5.jpg" alt=""></a>
                                </div>
                                <div class="footer-img">
                                    <a href="index.html#"><img src="img/footer/6.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Footer Widget Area-->
        <!--Footer Area Start-->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <span>Copyright &copy; Elite Study Group 2018.All right reserved.Created by <a href="index.html#">Perfect Programming Service</a></span>
                    </div>
                    <div class="col-md-6 col-sm-5">
                        <div class="column-right">
                            <span>Privacy Policy , Terms &amp; Conditions</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End of Footer Area-->
    </div>
    <!--End of Bg White-->
</div>
<!--End of Main Wrapper Area-->

<!-- Color Switcher -->
<div class="ec-colorswitcher">
    <a class="ec-handle" href="index.html#"><i class="zmdi zmdi-settings"></i></a>
    <h3>Style Switcher</h3>
    <div class="ec-switcherarea">
        <h6>Select Layout</h6>
        <div class="layout-btn">
            <a href="index.html#" class="ec-boxed"><span>Boxed</span></a>
            <a href="index.html#" class="ec-wide"><span>Wide</span></a>
        </div>
        <h6>Chose Color</h6>
        <ul class="ec-switcher">
            <li><a href="index.html#" class="cs-color-1 styleswitch" data-rel="color-one"></a></li>
            <li><a href="index.html#" class="cs-color-2 styleswitch" data-rel="color-two"></a></li>
            <li><a href="index.html#" class="cs-color-3 styleswitch" data-rel="color-three"></a></li>
            <li><a href="index.html#" class="cs-color-4 styleswitch" data-rel="color-four"></a></li>
            <li><a href="index.html#" class="cs-color-5 styleswitch" data-rel="color-five"></a></li>
            <li><a href="index.html#" class="cs-color-6 styleswitch" data-rel="color-six"></a></li>
            <li><a href="index.html#" class="cs-color-7 styleswitch" data-rel="color-seven"></a></li>
            <li><a href="index.html#" class="cs-color-8 styleswitch" data-rel="color-eight"></a></li>
            <li><a href="index.html#" class="cs-color-9 styleswitch" data-rel="color-nine"></a></li>
            <li><a href="index.html#" class="cs-color-10 styleswitch" data-rel="color-ten"></a></li>
        </ul>
        <div class="ec-pattren">
            <h6>Chose Pattren</h6>
            <div class="pattren-wrap">
                <a href="index.html#" data-rel="pattren1" class="styleswitch"><img src="img/ec-pattren/pattren1.jpg" alt=""></a>
                <a href="index.html#" data-rel="pattren2" class="styleswitch"><img src="img/ec-pattren/pattren2.jpg" alt=""></a>
                <a href="index.html#" data-rel="pattren3" class="styleswitch"><img src="img/ec-pattren/pattren3.jpg" alt=""></a>
                <a href="index.html#" data-rel="pattren4" class="styleswitch"><img src="img/ec-pattren/pattren4.jpg" alt=""></a>
                <a href="index.html#" data-rel="pattren5" class="styleswitch"><img src="img/ec-pattren/pattren5.jpg" alt=""></a>
            </div>
        </div>
        <div class="ec-background">
            <h6>Chose Background</h6>
            <div class="background-wrap">
                <a href="index.html#" data-rel="background1" class="styleswitch"><img src="img/ec-background/bg-1.jpg" alt=""></a>
                <a href="index.html#" data-rel="background2" class="styleswitch"><img src="img/ec-background/bg-2.jpg" alt=""></a>
                <a href="index.html#" data-rel="background3" class="styleswitch"><img src="img/ec-background/bg-3.jpg" alt=""></a>
                <a href="index.html#" data-rel="background4" class="styleswitch"><img src="img/ec-background/bg-4.jpg" alt=""></a>
                <a href="index.html#" data-rel="background5" class="styleswitch"><img src="img/ec-background/bg-5.jpg" alt=""></a>
            </div>
        </div>
    </div>
</div>
<!-- Color Switcher end -->


<!-- jquery
============================================ -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>

<!-- bootstrap JS
============================================ -->
<script src="js/bootstrap.min.js"></script>

<!-- nivo slider js
============================================ -->
<script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="lib/nivo-slider/home.js" type="text/javascript"></script>

<!-- meanmenu JS
============================================ -->
<script src="js/jquery.meanmenu.js"></script>

<!-- wow JS
============================================ -->
<script src="js/wow.min.js"></script>

<!-- owl.carousel JS
============================================ -->
<script src="js/owl.carousel.min.js"></script>

<!-- scrollUp JS
============================================ -->
<script src="js/jquery.scrollUp.min.js"></script>

<!-- Waypoints JS
============================================ -->
<script src="js/waypoints.min.js"></script>

<!-- Counterup JS
============================================ -->
<script src="js/jquery.counterup.min.js"></script>

<!-- Slick JS
============================================ -->
<script src="js/slick.min.js"></script>

<!-- Animated Headlines JS
============================================ -->
<script src="js/animated-headlines.js"></script>

<!-- Textilate JS
============================================ -->
<script src="js/textilate.js"></script>

<!-- Lettering JS
============================================ -->
<script src="js/lettering.js"></script>

<!-- Video Player JS
============================================ -->
<script src="js/jquery.mb.YTPlayer.js"></script>

<!-- Mail Chimp JS
============================================ -->
<script src="js/jquery.ajaxchimp.min.js"></script>

<!-- AJax Mail JS
============================================ -->
<script src="js/ajax-mail.js"></script>

<!-- plugins JS
============================================ -->
<script src="js/plugins.js"></script>

<!-- StyleSwitch JS
============================================ -->
<script src="js/styleswitch.js"></script>

<!-- main JS
============================================ -->
<script src="js/main.js"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'ru', includedLanguages: 'en,fr,kk,ko,ru,tg,uz', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
    }
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>