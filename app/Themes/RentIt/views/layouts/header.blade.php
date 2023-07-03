<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$description ?? ''}}"/>
    <meta name="keywords" content="{{$keywords ?? ''}}"/>
    <title>{{$title ?? ''}}</title>

    <!--<link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="{{ asset(config('settings.theme')) }}/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="{{ asset(config('settings.theme')) }}/assets/ico/favicon.ico">-->
    {!! $lr_header ?? '' !!}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .social-icons{
            margin:8px 0px;
        }
        .social-icons li {
            padding: 0px 10px 0 0;
        }
        .main-slider .slide1{
            background-image: url(rentit/assets/img/preview/slider/slide-1.jpg);
        }
        .main-slider .slide2{
            background-image: url(rentit/assets/img/preview/slider/slide-2.jpg);
        }
        .main-slider .slide3{
            background-image: url(rentit/assets/img/preview/slider/slide-3.jpg);
        }
        .main-slider .slide4{
            background-image: url(rentit/assets/img/preview/slider/slide-4.jpg);
        }
        .main-slider .slide5{
            background-image: url(rentit/assets/img/preview/slider/slide-5.jpg);
        }
        .page-section.contact{
            background: url(rentit/assets/img/preview/page-section-contact-2.png);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .page-section.dark{
            color:#fff;
        }
        .main-slider .ver3 .caption-subtitle{
            color:#000;
        }
        #breadcrumbs__0 + section.edit{
            background: url(rentit/assets/img/preview/contact-us-bg.png);
            background-size: cover;
            position: relative;
            z-index: 0;
        }
        #breadcrumbs__0 + section.edit::after{
            content:"";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,1);
            opacity: 0.6;
            z-index: -1;
        }
        .block-title{
            color:#fff;
        }
        .contact-info .media .fa{
            background-color: rebeccapurple;
        }
        .media-body{
            color:#fff;
        }
        .media-body a{
            color:#fff;
        }

        /*Nav */
        .sf-menu.nav>li>a:focus, .sf-menu.nav>li>a:hover{
            border:#e60000;
        }
        .nav {
            background:#fff;
        }
        .social-icons a:hover{
            background:#e60000;
            border: solid 1px #e60000;
        }
        .main-slider .ver2:before {
            background:none;
        }
        .sf-menu a{
            color:#000;
        }
        /*Testimonial */
        .title {
            font-size: 35px;
            font-weight: 800;
            color: #29166f;
            text-transform: uppercase;
            margin-bottom: 80px;
            position: relative;
        }
        .title span {
            background: #29166f none repeat scroll 0 0;
            bottom: -30px;
            height: 4px;
            left: 0;
            position: absolute;
            width: 70px;
        }
        .testimonial .testimonial-text, .testimonial .testimonial-name{
            color:#000;
        }
        .testimonials-carousel .testimonial .testimonial-text{
            font-size: 14px !important;
        }
        .social-icons a {
            display: inline-block;
            position: relative;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background-color: transparent;
            border: solid 1px #14181c;
            color: #14181c;
        }
        .social-icons a + span{
            font-weight: 900;
        }
        .navigation{
            display: flex;
            align-items: center;
            justify-content: end;
        }
        .navigation i.fa{
            font-size: 22px;
            padding: 5px 8px;
        }
        i.fa.fa-whatsapp {
            color: #fff;
            background-color: green;
        }
        i.fa.fa-facebook {
            color: #fff;
            background-color: #1877F2;
        }
        i.fa.fa-map-marker {
            color: red;
            border: 1px solid #000;
        }
    </style>
</head>
<body id="home" class="wide @if(isAdminBarVisible())) adminbar @endif">

@if(get_theme_mod('rentit_enable_preloader',1))
    <!-- PRELOADER -->
    <div id="preloader">
        <div id="preloader-status">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
            <div id="preloader-title">{{__('Loading')}}</div>
        </div>
    </div>
    <!-- /PRELOADER -->
@endif

<!-- WRAPPER -->
<div class="wrapper">

    <!-- HEADER -->
    <header class="header fixed">
        <div class="header-wrapper">

            <div class="container">

                <!-- Logo --><?php

				if(get_theme_mod( 'header_logo' )){ ?>
                <div class="logo">

                    <a href="{{ url('/') }}"
                    >

                        @if(get_theme_mod( 'header_logo' ))
                            <img
                                    src="<?php  echo the_image_url( get_theme_mod( 'header_logo' ) ); ?>"
                                    alt=""/>
                        @endif
                    </a>

                </div> <?php  } ?>
            <!-- /Logo -->

                <!-- Mobile menu toggle button -->
                <a href="#" class="menu-toggle btn btn-theme-transparent"><i class="fa fa-bars"></i></a>
                <!-- /Mobile menu toggle button -->
                <a href="#" class="menu-toggle-close btn"><i class="fa fa-times"></i></a>

                <!-- Navigation -->

                <nav class="navigation closed clearfix">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- navigation menu -->
						<?php
						/*
                echo cache()->rememberForever( 'header-menu', function () {
                    return app( 'BaseCms' )->nav_menu( [
                        'theme_location' => 'header-menu',
                        'walker' => new  \Corp\Repositories\MenuWalker(),
                        'echo' => false
                    ] );
                } );
                        */

						echo app( 'BaseCms' )->nav_menu( [
							'theme_location' => 'header-menu',
							'walker' => new  \Corp\Themes\RentIt\Classes\MenuWalker(),
							'echo' => false
						] );

						?>

                        <!-- /navigation menu -->

                            @if(getOption('LANG') && $langs = getOption('custom_langs'))



								<?php

								if ( isset( $langs->code ) && isset( $langs->name ) ){
								$langs = array_combine( $langs->code, $langs->name );

							
								?>
                                {{--<div class="entry language">
                                    <div class="title"><b>
                                            @if(isset($langs[App::getLocale()]))
                                                {{ $langs[App::getLocale()]}}
                                            @else
                                                {{App::getLocale()}}
                                            @endif

                                        </b></div>
                                    <div class="language-toggle header-toggle-animation">

                                        @foreach($langs as $k => $v)

                                            <a href="{{ route( 'setlocale', [ 'lang' => $k] )}}"><span
                                                        class="flag-icon flag-icon-ru"></span> {{$v}} </a>

                                        @endforeach

                                    </div>
                                </div>--}}
								<?php  } ?>
                            @endif
                        </div>

                    </div>
                    <!-- Add Scroll Bar -->
                    <div class="swiper-scrollbar"></div>
                </nav>
                <!-- /Navigation -->

            </div>


        </div>

    </header>
    <!-- /HEADER -->

</div>



<?php  if(Auth::user() && 1 > 2){ ?>
<div id="themeConfig" class="theme-config  active" style="right: 0px;">
    <h4 class="theme-config-head">{{__('User Account')}}<a href="#"><i class="fa   fa-user"></i></a></h4>
    <div class="theme-config-wrap">

        <ul class="options colors" data-type="colors">
            <li class="user-auth-box">
                {{ __('Hi, :name', ['name' =>Auth::user()->name ]  )}}

                <a
                        href="{{route('MyAccount')}}">{{__('My bookings')}}</a>
                <a
                        href="{{route('MyAccountEdit')}}">{{__('Edit account')}}</a>
                <a class="ab-item"
                   href="{{route('logout')}}">{{__('admin.Log Out')}}</a>
            </li>

        </ul>

    </div>
</div>
<?php  } ?>