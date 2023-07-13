<!-- PAGE -->
<?php if(Session::has('success')): ?>
<div class="alert alert-success">
    <?php echo e(Session::get('success')); ?>

</div>
<?php endif; ?>

<section class="page-section no-padding slider">
    <div class="container full-width">

        <div class="main-slider">
            <div class="owl-carousel" id="main-slider">

                <?php $sliders = \DB::table('posts')->get(); ?>
                <?php $__empty_1 = true; $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <!-- Slide 1 -->
                <div class="item" style="background-image:url('<?php echo e(the_image_url($post->img,'thumbnail-870x600')); ?>')">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <section class="contact">
                                    <div class="container">

                                        <!-- Get in touch -->

                                        <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
                                            <small>Feel Free to Say Hello!</small>
                                            <span><?php echo e(__("Get in Touch With Us")); ?></span>
                                        </h2>

                                        <div class="row">
                                            <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
                                                <!-- Contact form -->
                                                <form method="post" action="<?php echo e(route('mail')); ?>" class="contact-form" id="contact-form1">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="row">
                                                        <div class="col-md-6">

                                                            <div class="outer required">
                                                                <div class="form-group af-inner has-icon">
                                                                    <label class="sr-only" for="name"><?php echo e(__("Name")); ?></label>
                                                                    <input type="text" name="name" id="name" placeholder="Name" value="" size="30" data-toggle="tooltip" title="Name is required" class="form-control placeholder" />
                                                                    <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-md-6">

                                                            <div class="outer required">
                                                                <div class="form-group af-inner has-icon">
                                                                    <label class="sr-only" for="email"><?php echo e(__("Email")); ?></label>
                                                                    <input type="text" name="email" id="email" placeholder="Email" value="" size="30" data-toggle="tooltip" title="Email is required" class="form-control placeholder" />
                                                                    <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="outer required">
                                                        <div class="form-group af-inner has-icon">
                                                            <label class="sr-only" for="subject"><?php echo e(__("Subject")); ?></label>
                                                            <input type="text" name="subject" id="subject" placeholder="Subject" value="" size="30" data-toggle="tooltip" title="Subject is required" class="form-control placeholder" />
                                                            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                                                        </div>
                                                    </div>

                                                    <div class="form-group af-inner has-icon">
                                                        <label class="sr-only" for="input-message"><?php echo e(__("Message")); ?></label>
                                                        <textarea name="message" id="input-message" placeholder="Message" rows="4" cols="50" data-toggle="tooltip" title="Message is required" class="form-control placeholder"></textarea>
                                                        <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                                                    </div>

                                                    <div class="outer required">
                                                        <div class="form-group af-inner">
                                                            <input type="submit" name="submit" class="form-button form-button-submit btn btn-block ripple-effect btn-theme-dark" id="submit_btn" value="Send message" />
                                                        </div>
                                                    </div>

                                                </form>
                                                <!-- /Contact form -->
                                            </div>
                                            <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">

                                                <p><?php echo e(__(" At Perfect Line,Our customer's satisfaction comes first,We provide mobility solutions that benefit")); ?></p>

                                                <ul class="media-list contact-list">
                                                    <li class="media">
                                                        <div class="media-left"><i class="fa fa-phone"></i></div>
                                                        <div class="media-body"><?php echo e(__("Tel: +971 4 326 7557")); ?></div>
                                                    </li>
                                                    <li class="media">
                                                        <div class="media-left"><i class="fa fa-whatsapp"></i></div>
                                                        <div class="media-body"><?php echo e(__("Whatsapp: +971 54 495 7070")); ?></div>
                                                    </li>
                                                    <li class="media">
                                                        <div class="media-left"><i class="fa fa-envelope"></i></div>
                                                        <div class="media-body"><?php echo e(__("E mails: perfectlinerac@yahoo.com")); ?></div>
                                                    </li>
                                                    <li class="media">
                                                        <div class="media-left"><i class="fa fa-home"></i></div>
                                                        <div class="media-body"><?php echo e(__("Adress: Adress: Shop No. 06, Wasl Duet - 02 , Al Karama , Dubai , U.A.E")); ?></div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>

                                        <!-- /Get in touch -->


                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <?php endif; ?>






            </div><!--owl Carosuel-->

        </div>
    </div>
</section>
<!-- /PAGE -->
<!-- PAGE -->
<!--<section class="page-section">
    <div class="container">

        <div class="row">
            <div class="col-md-4 wow flipInY" data-wow-offset="70" data-wow-duration="1s">
                <div class="thumbnail thumbnail-featured no-border no-padding">
                    <div class="media">
                        <a class="media-link" href="#">
                            <div class="caption">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-support"></i></div>
                                        <h4 class="caption-title">7/24 Car Support</h4>
                                        <div class="caption-text"><?php echo e(__("Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.")); ?></div>
                                        <div class="buttons">
                                            <span onclick="window.location.href='#'" class="btn btn-theme ripple-effect btn-theme-transparent"><?php echo e(__("Read More")); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption hovered">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-support"></i></div>
                                        <h4 class="caption-title">7/24 Car Support</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow flipInY" data-wow-offset="70" data-wow-duration="1s" data-wow-delay="200ms">
                <div class="thumbnail thumbnail-featured no-border no-padding">
                    <div class="media">
                        <a class="media-link" href="#">
                            <div class="caption">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-calendar"></i></div>
                                        <h4 class="caption-title"><?php echo e(__("Reservation Anytime")); ?></h4>
                                        <div class="caption-text"><?php echo e(__("Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.")); ?></div>
                                        <div class="buttons">
                                            <span class="btn btn-theme ripple-effect btn-theme-transparent"><?php echo e(__("Read More")); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption hovered">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-calendar"></i></div>
                                        <h4 class="caption-title"><?php echo e(__("Reservation Anytime")); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow flipInY" data-wow-offset="70" data-wow-duration="1s" data-wow-delay="400ms">
                <div class="thumbnail thumbnail-featured no-border no-padding">
                    <div class="media">
                        <a class="media-link" href="#">
                            <div class="caption">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-map-marker"></i></div>
                                        <h4 class="caption-title"><?php echo e(__("Lots of Locations")); ?></h4>
                                        <div class="caption-text"><?php echo e(__("Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.")); ?></div>
                                        <div class="buttons">
                                            <span class="btn btn-theme ripple-effect btn-theme-transparent"><?php echo e(__("Read More")); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption hovered">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-map-marker"></i></div>
                                        <h4 class="caption-title"><?php echo e(__("Lots of Locations")); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h2 class="caption-title text-center" style="margin-bottom:20px;"><?php echo e(__("Office Working Hours")); ?></h2>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">Sunday</th>
                            <th class="text-center">Monday</th>
                            <th class="text-center">Tuesday</th>
                            <th class="text-center">Wednesday</th>
                            <th class="text-center">Thursday</th>
                            <th class="text-center">Saturday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>8:30 AM - 9:00 PM</td>
                            <td>9:00 AM - 10:00 PM</td>
                            <td>8:30 AM - 10:00 PM</td>
                            <td>9:00 AM - 10:00 PM</td>
                            <td>9:00 AM - 10:00 PM</td>
                            <td>9:00 AM - 10:00 PM </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>-->
<!-- /PAGE -->





<!-- PAGE -->

<!-- /PAGE -->

<!-- PAGE -->
<section class="page-section">
    <div class="container">

        <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
            <!-- <small><?php echo e(__("Select What You Want")); ?></small> -->
            <span><?php echo e(__("Our Fleet")); ?></span>
        </h2>

        <?php if($terms): ?>



        <div class="tabs awesome wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
            <ul id="tabs1" class="nav"><!--

                <?php $i = 1; ?>
                        -->
                <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($item->type == 'group'): ?>
                <li data-q="<?php echo e($i); ?>" class="<?php echo e(($i == 2 ? 'active' : '')); ?>"><a href="#tab-x<?php echo e($i); ?>" data-toggle="tab"><?php echo e($item->title); ?></a></li>

                <?php $i++; ?>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </ul>
        </div>



        <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
            <!-- tab 1 -->

            <?php $i = 1; ?>

            <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item->type == 'group'): ?>
            <div class="mutabsss tab-pane fade panel1 <?php echo e(( $i == 1 ) ? ' active in ' : ''); ?>" id="tab-x<?php echo e($i); ?>">
                <div class="car-big-card">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="tabs awesome-sub">
                                <ul id="tabs4" class="nav"><!--

                                            -->
                                    <?php $j = 1; ?>
                                    <?php $__currentLoopData = $item->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="<?php echo e(( $j == 1 ) ? ' active' : ""); ?> linkswiperSlider<?php echo e($i); ?>x<?php echo e($j); ?>">
                                        <a href="#tab-x<?php echo e($i); ?>x<?php echo e($j); ?>" data-swiper="swiperSlider<?php echo e($i); ?>x<?php echo e($j); ?>" data-toggle="tab"><?php echo e($product->title); ?></a>
                                    </li><!--
                                            -->
                                    <?php $j++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">

                            <!-- Sub tabs content -->
                            <div class="tab-content">

                                <div class="tab-content">
                                    <?php $j = 1; ?>
                                    <?php $__currentLoopData = $item->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="tab-pane mytab_car fade custumclass <?php echo e(( $j == 1 ) ? ' active in' : ""); ?>" id="tab-x<?php echo e($i); ?>x<?php echo e($j); ?>">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <?php
                                                $gallery_media = [];
                                                foreach ($product->meta as $meta) {
                                                    if ($meta->name == 'gallery_media') {
                                                        $gallery_media = explode(',', $meta->value);
                                                    }
                                                }

                                                ?>
                                                <!-- Swiper -->
                                                <div class="swiper-container" id="swiperSlider<?php echo e($i); ?>x<?php echo e($j); ?>" data-img0="<?php echo e(the_image_url($product->img,'thumbnail-600x426')); ?>" <?php if($gallery_media && isset($gallery_media[0]{0})): ?> <?php $__currentLoopData = $gallery_media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=> $gItme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    data-img<?php echo e($k+1); ?>="<?php echo e(the_image_url($gItme,'thumbnail-600x426')); ?>"
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                    >
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a class="btn btn-zoom" href="<?php echo e(the_image_url($product->img)); ?>" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                            <a href="<?php echo e(the_image_url($product->img)); ?>" data-gal="prettyPhoto"><img class="img-responsive" src="<?php echo e(the_image_url($product->img,'thumbnail-600x426')); ?>" alt="" /></a>
                                                        </div>


                                                        <?php if($gallery_media && isset($gallery_media[0]{0})): ?>

                                                        <?php $__currentLoopData = $gallery_media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gItme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="swiper-slide">
                                                            <a class="btn btn-zoom" href="<?php echo e(the_image_url($gItme)); ?>" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                            <a href="<?php echo e(the_image_url($gItme)); ?>" data-gal="prettyPhoto"><img class="img-responsive" src="<?php echo e(the_image_url($gItme, 'thumbnail-600x426')); ?>" alt="" /></a>
                                                        </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>


                                                    </div>
                                                    <!-- Add Pagination -->
                                                    <div class="row car-thumbnails"></div>
                                                </div>
                                            </div>
                                            <script>
                                                jQuery(document).ready(function($) {

                                                    var wiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>;

                                                    swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?> = new Swiper(swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>, {

                                                        pagination: '#swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?> .row.car-thumbnails',

                                                        paginationClickable: true,
                                                        initialSlide: 0, //slide number which you want to show-- 0 by default
                                                        paginationBulletRender: function(index, className) {

                                                            var img = jQuery('#swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>').data("img" + index);

                                                            return '<div class="col-xs-2 col-sm-2 col-md-3 ' + className + '">' +

                                                                '<a href="#"><img width="70" height="70" class="responsive" src="' + img + ' "' +

                                                                ' alt=""/></a></div>';


                                                        }

                                                    });

                                                    setTimeout(function() {
                                                        swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.update();
                                                        swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.onResize();
                                                        swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.slideTo(0);
                                                    }, 500);

                                                    jQuery('.linkswiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>').click(function() {
                                                        console.log('.linkswiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>');
                                                        setTimeout(function() {
                                                            swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.update();
                                                            swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.onResize();
                                                            swiperSlider<?php echo (int) $i; ?>x<?php echo (int) $j; ?>.slideTo(0)
                                                        }, 250);
                                                    });


                                                });
                                            </script>
                                            <div class="col-md-4">
                                                <div class="car-details">
                                                    <div class="price">
                                                        <strong><?php echo e($product->price); ?></strong><?php echo e(__(" ")); ?>

                                                        <span><?php echo e(__("AED/per a day ")); ?></span><i class="fa fa-info-circle"></i>
                                                    </div>
                                                    <div class="list">
                                                        <ul>
                                                            <?php $product_meta = getProductMetas($product); ?>
                                                            <?php if(isset($product_meta['attributes']{1})): ?>
                                                            <?php $attr = json_decode($product_meta['attributes']);
                                                            if ($attr) { ?>
                                                                <?php $__currentLoopData = $attr->value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li><?php echo e($item); ?></li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php  } ?>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                    <div class="button">
                                                        <a href="<?php echo e(route('products.show',['products'=> $product->alias ])); ?>" class="btn btn-theme ripple-effect btn-theme-dark btn-block"><?php echo e(__("Reservation Now")); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php $j++; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>

                            </div>
                            <!-- /Sub tabs content -->

                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <?php endif; ?>
    </div>

    <script>
        jQuery(document).ready(function($) {


            jQuery('#tabs1 li a').eq(0).click();


            jQuery('.tab-content .panel1.mutabsss').removeClass('active');

            jQuery('.tab-content .panel1.mutabsss').eq(0).find('.mytab_car').removeClass('active');


            jQuery('.tab-content .panel1').eq(0).addClass('active in');

            jQuery('.tab-content .panel1').eq(0).find('.tabs a').eq(0).click();
            jQuery('.tab-content .panel1').eq(0).find('.mytab_car').eq(0).addClass('active in');

            jQuery('#tabs1 li').click(function(e) {
                var id = $(this).data('q');

                console.log(id);
                setTimeout(function() {
                    console.log('swiperSlider' + id + 'x1.update()');
                    eval('swiperSlider' + id + 'x1.update()');
                    eval('swiperSlider' + id + 'x1.onResize()');

                }, 250);
                $('#swiperSlider2x1').update();
            });
        });
    </script>
</section>
<!-- /PAGE -->



<!-- PAGE -->

<!-- /PAGE -->

<!-- PAGE -->
<!--<section class="page-section find-car dark">
    <div class="container">

        <form action="<?php echo e(route('products.index')); ?>" method="get" class="form-find-car">
            <div class="row">

                <div class="col-md-3 wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">

                    <h2 class="section-title text-left no-margin">
                        <small><?php echo e(__("Great Rental Cars")); ?></small>
                        <span><?php echo e(__("Find your car")); ?></span>
                    </h2>

                </div>
                <div class="col-md-3 wow fadeInDown" data-wow-offset="200" data-wow-delay="200ms">
                    <div class="form-group has-icon has-label">

                        <label for="formFindCarLocation"><?php echo e(__("Picking Up Location")); ?></label>
                        <select name="PickingUpLocation"
                                class="selectpicker input-price"
                                data-live-search="true" data-width="100%"
                                data-toggle="tooltip"
                                id="formFindCarLocation"
                        >
                            <?php if($locations ?? false): ?>
                                <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                    <option
                                        <?php selected(old('PickingUpLocation'), $location->alias); ?>
                                        value="<?php echo e($location->alias); ?>"><?php echo e($location->title); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                        <span class="form-control-icon"><i class="fa fa-location-arrow"></i></span>

                    </div>
                </div>
                <div class="col-md-2 wow fadeInDown" data-wow-offset="200" data-wow-delay="300ms">
                    <div class="form-group has-icon has-label">
                        <label for="formFindCarDate"><?php echo e(__("Picking Up Date")); ?></label>
                        <input type="text" class="form-control datepicker" id="formFindCarDate"
                               placeholder="dd/mm/yyyy">
                        <span class="form-control-icon"><i class="fa fa-calendar"></i></span>

                    </div>
                </div>
                <div class="col-md-2 wow fadeInDown" data-wow-offset="200" data-wow-delay="400ms">
                    <div class="form-group has-icon has-label">
                        <label for="formFindCarCategory"><?php echo e(__("Price Category")); ?></label>

                        <select name="group"
                                class="selectpicker input-price"
                                data-live-search="true" data-width="100%"
                                data-toggle="tooltip"
                                id="formFindCarCategory"
                        >
                            <?php if($terms ?? false): ?>
                                <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($group->type == 'group'): ?>
                                        <option
                                            <?php selected(old('PickingUpLocation'), $group->alias); ?>
                                            value="<?php echo e($group->alias); ?>"><?php echo e($group->title); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </select>
                        <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                    </div>
                </div>
                <div class="col-md-2 wow fadeInDown" data-wow-offset="200" data-wow-delay="500ms">
                    <div class="form-group">
                        <button type="submit" id="formFindCarSubmit"
                                class="btn btn-block btn-submit ripple-effect btn-theme"><?php echo e(__("Find Car")); ?></button>
                    </div>
                </div>

            </div>
        </form>

    </div>
</section>-->
<!-- /PAGE -->

<!-- PAGE -->



<!-- /PAGE -->


<!-- PAGE -->

<!-- /PAGE -->

<!-- PAGE -->

<!-- /PAGE -->


<section style="padding:40px 0px">
    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h2 class="caption-title text-center" style="margin-bottom:20px;"><?php echo e(__("Office Working Hours")); ?></h2>
                <table class="table table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">Friday</th>
                            <th class="text-center">Saturday</th>
                            <th class="text-center">Sunday</th>
                            <th class="text-center">Monday</th>
                            <th class="text-center">Tuesday</th>
                            <th class="text-center">Wednesday</th>
                            <th class="text-center">Thursday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>8:30 AM - 12:00 PM, 2-10 PM </td>
                            <td>8:30 AM - 10:00 PM </td>
                            <td>8:30 AM - 10:00 PM</td>
                            <td>8:30 AM - 10:00 PM</td>
                            <td>8:30 AM - 10:00 PM</td>
                            <td>8:30 AM - 10:00 PM</td>
                            <td>8:30 AM - 10:00 PM</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>
<!-- /PAGE -->

<!-- PAGE -->
<section class="page-section contact dark">
    <div class="container">

        <!-- Get in touch -->

        <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
            <small>Feel Free to Say Hello!</small>
            <span><?php echo e(__("Get in Touch With Us")); ?></span>
        </h2>

        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
                <!-- Contact form -->
                <form name="contact-form" method="post" action="#" class="contact-form" id="contact-form">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="name"><?php echo e(__("Name")); ?></label>
                                    <input type="text" name="name" id="name" placeholder="Name" value="" size="30" data-toggle="tooltip" title="Name is required" class="form-control placeholder" />
                                    <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="email"><?php echo e(__("Email")); ?></label>
                                    <input type="text" name="email" id="email" placeholder="Email" value="" size="30" data-toggle="tooltip" title="Email is required" class="form-control placeholder" />
                                    <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="outer required">
                        <div class="form-group af-inner has-icon">
                            <label class="sr-only" for="subject"><?php echo e(__("Subject")); ?></label>
                            <input type="text" name="subject" id="subject" placeholder="Subject" value="" size="30" data-toggle="tooltip" title="Subject is required" class="form-control placeholder" />
                            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                        </div>
                    </div>

                    <div class="form-group af-inner has-icon">
                        <label class="sr-only" for="input-message"><?php echo e(__("Message")); ?></label>
                        <textarea name="message" id="input-message" placeholder="Message" rows="4" cols="50" data-toggle="tooltip" title="Message is required" class="form-control placeholder"></textarea>
                        <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                    </div>

                    <div class="outer required">
                        <div class="form-group af-inner">
                            <input type="submit" name="submit" class="form-button form-button-submit btn btn-block btn-theme ripple-effect btn-theme-dark" id="submit_btn" value="Send message" />
                        </div>
                    </div>

                </form>
                <!-- /Contact form -->
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">

                <p><?php echo e(__(" At Perfect Line,Our customer's satisfaction comes first,We provide mobility solutions that benefit")); ?></p>

                <ul class="media-list contact-list">
                    <li class="media">
                        <div class="media-left"><i class="fa fa-phone"></i></div>
                        <div class="media-body"><?php echo e(__("Tel: +971 4 326 7557")); ?></div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-whatsapp"></i></div>
                        <div class="media-body"><?php echo e(__("Whatsapp: +971 54 495 7070")); ?></div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-envelope"></i></div>
                        <div class="media-body"><?php echo e(__("E mails: perfectlinerac@yahoo.com")); ?></div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-home"></i></div>
                        <div class="media-body"><?php echo e(__("Adress: Adress: Shop No. 06, Wasl Duet - 02 , Al Karama , Dubai , U.A.E")); ?></div>
                    </li>

                    <!--<li class="media">
                        <div class="media-left"><i class="fa fa-clock-o"></i></div>
                        <div class="media-body">
                            <p><?php echo e(__("Working Hours: 9:00 AM - 10:00 PM on Monday")); ?></p>
                            <p><?php echo e(__("Working Hours: 8:30 AM - 10:00 PM on Tuesday")); ?></p>
                            <p><?php echo e(__("Working Hours: 9:00 AM - 10:00 PM on Wednesday")); ?></p>
                            <p><?php echo e(__("Working Hours: 9:00 AM - 10:00 PM on Thursday")); ?></p>
                            <p><?php echo e(__("Working Hours: 9:00 AM - 10:00 PM on Thursday")); ?></p>
                            <p><?php echo e(__("Working Hours: 9:00 AM - 10:00 PM on Saturday")); ?></p>
                            <p><?php echo e(__("Working Hours: 8:30 AM - 9:00 PM on Sunday")); ?></p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-map-marker"></i></div>
                        <div class="media-body"><?php echo e(__("View on The Map")); ?></div>
                    </li>-->
                </ul>
            </div>
        </div>

        <!-- /Get in touch -->


    </div>
</section>
<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-md-12">
            <h2 class="caption-title text-center" style="margin-bottom:20px;"><?php echo e(__("Map Location")); ?></h2>
        </div>
    </div>
</div>

<div class="container-fluid px-0">
    <div class="row">
        <div class="col-md-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.8944436199554!2d55.29692027456759!3d25.240480029947808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42fae252b60d%3A0x65564fcfd03d0152!2sPERFECT%20LINE%20RENT%20A%20CAR%20L.L.C!5e0!3m2!1sen!2sbd!4v1686754370298!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>