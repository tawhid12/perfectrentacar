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
        .main-slider .slide2{
            background-image: url(rentit/assets/img/preview/slider/slide-1.png);
        }
        .main-slider .slide3{
            background-image: url(rentit/assets/img/preview/slider/slide-2.png);
        }
        .page-section.contact{
            background: url(rentit/assets/img/preview/page-section-contact-2.png);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .page-section.dark{
            color:#fff;
        }
        .main-slider .ver3 .caption-subtitle{
            color:#000;
        }
        .pb-module-section{
            background: url(rentit/assets/img/preview/contact-us-bg.png);
            position: relative;
            z-index: 0;
        }
        .pb-module-section::after{
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
<div class="container">
    <div class="row">
        <div class="col-md-12" style="display:flex;justify-content: end;align-items: center;">
     
               
                    <ul class="social-icons">
                        <li><a target="_blank" href="" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href="" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
                        <li><a target="_blank" href="" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="" class="linkedin"><i class="fa fa-google"></i></a></li>
                    </ul>
                                               
        </div>
    </div>
</div>
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