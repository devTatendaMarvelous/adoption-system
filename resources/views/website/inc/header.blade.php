<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from unicktheme.com/sopot-html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Feb 2023 13:21:52 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ORPHANAGE ADOPTION SYSTEM</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('website/images/favicons/apple-touch-icon.png')}}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('website/images/favicons/favicon-32x32.png')}}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('website/images/favicons/favicon-16x16.png')}}" />
    <link rel="manifest" href="{{asset('website/images/favicons/site.webmanifest')}}" />
    <meta name="description" content="Sopot HTML Template For Charity" />

    <link rel="stylesheet" href="{{asset('website/vendors/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/animate/animate.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/animate/custom-animate.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/jarallax/jarallax.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/jquery-magnific-popup/jquery.magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/nouislider/nouislider.pips.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/odometer/odometer.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/sopot-icons/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/vendors/tiny-slider/tiny-slider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/reey-font/stylesheet.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/owl-carousel/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/bootstrap-select/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/vegas/vegas.min.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" href="{{asset('website/vendors/timepicker/timePicker.css')}}" />

    <!-- template styles -->
    <link rel="stylesheet" href="{{asset('website/css/sopot.css')}}" />
    <link rel="stylesheet" href="{{asset('website/css/sopot-responsive.css')}}" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="{{asset('website/images/loader.png')}}" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
        <header class="main-header clearfix">
            <div class="main-header__top clearfix">
                <div class="container clearfix">
                    <div class="main-header__top-inner clearfix">
                       
                        <div class="main-header__top-right">
                            <ul class="list-unstyled main-header__top-right-content">
                                <li><a href="{{ route('login') }}">Login</a></li>
                                
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu clearfix">
                <div class="container clearfix">
                    <div class="main-menu-wrapper clearfix">
                        <div class="main-menu-wrapper__left">
                            <div class="main-menu-wrapper__logo ">
                                <div class="row">
                                    <a class="col-2" href="/"><img src="{{asset('website/images/resources/logo-1.png')}}" alt=""></a> 
                                </div>
                            </div>
                        </div>
                        <div class="main-menu-wrapper__right">
                            <div class="main-menu-wrapper__main-menu">
                                <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                <ul class="main-menu__list">
                                    <li class=" ">
                                        <a href="/">Home</a>
                                        
                                    </li>
                                    <li><a href="/about">About</a></li>
                                    
                                    
                                    <li class="">
                                        <a href="/blog">Blog</a>
                                        
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
                                </ul>
                            </div>
                            <a href="/adoptions/adopt" class="thm-btn main-header__btn m-4">Adopt Now</a>
                            <a href="/donations/donate" class="thm-btn main-header__btn">Donate Now</a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->
