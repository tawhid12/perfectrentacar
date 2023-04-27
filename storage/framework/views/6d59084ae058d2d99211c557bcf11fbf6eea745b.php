<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="description" content="<?php echo e($description ?? ''); ?>"/>
    <meta name="keywords" content="<?php echo e($keywords ?? ''); ?>"/>
    <title><?php echo e($title ?? ''); ?></title>

    <link rel="apple-touch-icon-precomposed" sizes="144x144"
          href="<?php echo e(asset(config('settings.theme'))); ?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="<?php echo e(asset(config('settings.theme'))); ?>/assets/ico/favicon.ico">
    <?php echo $lr_header ?? ''; ?>


</head>
<body id="home" class="wide <?php if(isAdminBarVisible()): ?>) adminbar <?php endif; ?>">

<?php if(get_theme_mod('rentit_enable_preloader',1)): ?>
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
            <div id="preloader-title"><?php echo e(__('Loading')); ?></div>
        </div>
    </div>
    <!-- /PRELOADER -->
<?php endif; ?>
<!-- WRAPPER -->
<div class="wrapper">

    <!-- HEADER -->
    <header class="header fixed">
        <div class="header-wrapper">

            <div class="container">

                <!-- Logo --><?php

				if(get_theme_mod( 'header_logo' )){ ?>
                <div class="logo">

                    <a href="<?php echo e(url('/')); ?>"
                    >

                        <?php if(get_theme_mod( 'header_logo' )): ?>
                            <img
                                    src="<?php  echo the_image_url( get_theme_mod( 'header_logo' ) ); ?>"
                                    alt=""/>
                        <?php endif; ?>
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

                            <?php if(getOption('LANG') && $langs = getOption('custom_langs')): ?>



								<?php

								if ( isset( $langs->code ) && isset( $langs->name ) ){
								$langs = array_combine( $langs->code, $langs->name );

							
								?>
                                
								<?php  } ?>
                            <?php endif; ?>
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
    <h4 class="theme-config-head"><?php echo e(__('User Account')); ?><a href="#"><i class="fa   fa-user"></i></a></h4>
    <div class="theme-config-wrap">

        <ul class="options colors" data-type="colors">
            <li class="user-auth-box">
                <?php echo e(__('Hi, :name', ['name' =>Auth::user()->name ]  )); ?>


                <a
                        href="<?php echo e(route('MyAccount')); ?>"><?php echo e(__('My bookings')); ?></a>
                <a
                        href="<?php echo e(route('MyAccountEdit')); ?>"><?php echo e(__('Edit account')); ?></a>
                <a class="ab-item"
                   href="<?php echo e(route('logout')); ?>"><?php echo e(__('admin.Log Out')); ?></a>
            </li>

        </ul>

    </div>
</div>
<?php  } ?>