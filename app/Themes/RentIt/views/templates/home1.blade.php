<!-- PAGE -->

<section class="page-section no-padding slider">
    <div class="container full-width">

        <div class="main-slider">
            <div class="owl-carousel" id="main-slider">
               
                @php $sliders = \DB::table('posts')->get(); @endphp
                @forelse($sliders as $key => $post)
                                <!-- Slide 1 -->
                                <div class="item style="background-image:url('{{ the_image_url($post->img,'thumbnail-870x600') }}')">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse

            
           



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
                                        <div class="caption-text">{{__("Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.")}}</div>
                                        <div class="buttons">
                                            <span onclick="window.location.href='#'" class="btn btn-theme ripple-effect btn-theme-transparent">{{__("Read More")}}</span>
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
                                        <h4 class="caption-title">{{__("Reservation Anytime")}}</h4>
                                        <div class="caption-text">{{__("Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.")}}</div>
                                        <div class="buttons">
                                            <span class="btn btn-theme ripple-effect btn-theme-transparent">{{__("Read More")}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption hovered">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-calendar"></i></div>
                                        <h4 class="caption-title">{{__("Reservation Anytime")}}</h4>
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
                                        <h4 class="caption-title">{{__("Lots of Locations")}}</h4>
                                        <div class="caption-text">{{__("Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque,lacinia at tempor vitae, porta at arcu.")}}</div>
                                        <div class="buttons">
                                            <span class="btn btn-theme ripple-effect btn-theme-transparent">{{__("Read More")}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="caption hovered">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <div class="caption-icon"><i class="fa fa-map-marker"></i></div>
                                        <h4 class="caption-title">{{__("Lots of Locations")}}</h4>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <h2 class="caption-title text-center" style="margin-bottom:20px;">{{__("Office Working Hours")}}</h2>
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
{{--<section class="page-section testimonials">
    <div class="container wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
        <div class="testimonials-carousel">
            <div class="owl-carousel" id="testimonials">
                <div class="testimonial">
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object testimonial-avatar"
                                     src="{{ asset(config('settings.theme')) }}/assets/img/preview/avatars/testimonial-140x140x1.jpg"
alt="Testimonial avatar">
</a>
</div>
<div class="media-body">
    <div class="testimonial-text">{{__("Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.")}}</div>
    <div class="testimonial-name">{{__("John Anthony Gibson ")}}<span class="testimonial-position">{{__("Co- founder at Rent It")}}</span></div>
</div>
</div>
</div>
<div class="testimonial">
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img class="media-object testimonial-avatar" src="{{ asset(config('settings.theme')) }}/assets/img/preview/avatars/testimonial-140x140x1.jpg" alt="Testimonial avatar">
            </a>
        </div>
        <div class="media-body">
            <div class="testimonial-text">{{__("Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.")}}</div>
            <div class="testimonial-name">{{__("John Anthony Gibson ")}}<span class="testimonial-position">{{__("Co- founder at Rent It")}}</span></div>
        </div>
    </div>
</div>
<div class="testimonial">
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img class="media-object testimonial-avatar" src="{{ asset(config('settings.theme')) }}/assets/img/preview/avatars/testimonial-140x140x1.jpg" alt="Testimonial avatar">
            </a>
        </div>
        <div class="media-body">
            <div class="testimonial-text">{{__("Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia.")}}</div>
            <div class="testimonial-name">{{__("John Anthony Gibson ")}}<span class="testimonial-position">{{__("Co- founder at Rent It")}}</span></div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>--}}
<!-- /PAGE -->

<!-- PAGE -->
<section class="page-section">
    <div class="container">

        <h2 class="section-title wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
            <!-- <small>{{__("Select What You Want")}}</small> -->
            <span>{{__("Our Fleet")}}</span>
        </h2>

        @if($terms)



        <div class="tabs awesome wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
            <ul id="tabs1" class="nav"><!--

                <?php $i = 1; ?>
                        -->
                @foreach($terms as $item)

                @if($item->type == 'group')
                <li data-q="{{$i}}" class="{{($i == 2 ? 'active' : '')}}"><a href="#tab-x{{$i}}" data-toggle="tab">{{$item->title}}</a></li>

                <?php $i++; ?>
                @endif
                @endforeach


            </ul>
        </div>



        <div class="tab-content wow fadeInUp" data-wow-offset="70" data-wow-delay="500ms">
            <!-- tab 1 -->

            <?php $i = 1; ?>

            @foreach($terms as $item)
            @if($item->type == 'group')
            <div class="mutabsss tab-pane fade panel1 {{ ( $i == 1 ) ? ' active in ' : ''}}" id="tab-x{{$i}}">
                <div class="car-big-card">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="tabs awesome-sub">
                                <ul id="tabs4" class="nav"><!--

                                            -->
                                    <?php $j = 1; ?>
                                    @foreach($item->products as $product)
                                    <li class="{{( $j == 1 ) ? ' active' : ""}} linkswiperSlider{{$i}}x{{$j}}">
                                        <a href="#tab-x{{$i}}x{{$j}}" data-swiper="swiperSlider{{$i}}x{{$j}}" data-toggle="tab">{{$product->title}}</a>
                                    </li><!--
                                            -->
                                    <?php $j++; ?>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">

                            <!-- Sub tabs content -->
                            <div class="tab-content">

                                <div class="tab-content">
                                    <?php $j = 1; ?>
                                    @foreach($item->products as $product)
                                    <div class="tab-pane mytab_car fade custumclass {{( $j == 1 ) ? ' active in' : ""}}" id="tab-x{{$i}}x{{$j}}">
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
                                                <div class="swiper-container" id="swiperSlider{{$i}}x{{$j}}" data-img0="{{the_image_url($product->img,'thumbnail-600x426')}}" @if($gallery_media && isset($gallery_media[0]{0})) @foreach($gallery_media as $k=> $gItme)
                                                    data-img{{$k+1}}="{{the_image_url($gItme,'thumbnail-600x426')}}"
                                                    @endforeach
                                                    @endif
                                                    >
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <a class="btn btn-zoom" href="{{the_image_url($product->img)}}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                            <a href="{{the_image_url($product->img)}}" data-gal="prettyPhoto"><img class="img-responsive" src="{{the_image_url($product->img,'thumbnail-600x426')}}" alt="" /></a>
                                                        </div>


                                                        @if($gallery_media && isset($gallery_media[0]{0}))

                                                        @foreach($gallery_media as $gItme)
                                                        <div class="swiper-slide">
                                                            <a class="btn btn-zoom" href="{{the_image_url($gItme)}}" data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                                                            <a href="{{the_image_url($gItme)}}" data-gal="prettyPhoto"><img class="img-responsive" src="{{the_image_url($gItme, 'thumbnail-600x426')}}" alt="" /></a>
                                                        </div>
                                                        @endforeach
                                                        @endif


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
                                                        <strong>{{$product->price}}</strong>{{__(" ")}}
                                                        <span>{{__("AED/per a day ")}}</span><i class="fa fa-info-circle"></i>
                                                    </div>
                                                    <div class="list">
                                                        <ul>
                                                            <?php $product_meta = getProductMetas($product); ?>
                                                            @if(isset($product_meta['attributes']{1}))
                                                            <?php $attr = json_decode($product_meta['attributes']);
                                                            if ($attr) { ?>
                                                                @foreach($attr->value as $item)
                                                                <li>{{$item}}</li>
                                                                @endforeach
                                                            <?php  } ?>
                                                            @endif
                                                        </ul>
                                                    </div>
                                                    <div class="button">
                                                        <a href="{{route('products.show',['products'=> $product->alias ])}}" class="btn btn-theme ripple-effect btn-theme-dark btn-block">{{__("Reservation Now")}}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php $j++; ?>
                                    @endforeach

                                </div>

                            </div>
                            <!-- /Sub tabs content -->

                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
            @endif
            @endforeach

        </div>
        @endif
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
{{--<section class="page-section">
    <div class="container">

        <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
            <small>{{__("See What People Ask to Us")}}</small>
<span>{{__("FAQS")}}</span>
</h2>

<div class="row">
    <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
        <!-- FAQ -->
        <div class="panel-group accordion" id="accordion" role="tablist" aria-multiselectable="true">
            <!-- faq1 -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading1">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            <span class="dot"></span> How can ı dorp the rental car?
                        </a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                    <div class="panel-body">
                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                        vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                        sollicitudin aliquet.
                    </div>
                </div>
            </div>
            <!-- /faq1 -->
            <!-- faq2 -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading2">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <span class="dot"></span> Where can I rent a car?
                        </a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body">
                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                        vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                        sollicitudin aliquet.
                    </div>
                </div>
            </div>
            <!-- /faq2 -->
            <!-- faq3 -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading3">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <span class="dot"></span> If I crash a car. What happens?
                        </a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body">
                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                        vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                        sollicitudin aliquet.
                    </div>
                </div>
            </div>
            <!-- /faq3 -->
        </div>
        <!-- /FAQ -->
    </div>
    <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">
        <!-- FAQ -->
        <div class="panel-group accordion" id="accordion2" role="tablist" aria-multiselectable="true">
            <!-- faq1 -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading21">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse21" aria-expanded="false" aria-controls="collapse21">
                            <span class="dot"></span> How can ı dorp the rental car?
                        </a>
                    </h4>
                </div>
                <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
                    <div class="panel-body">
                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                        vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                        sollicitudin aliquet.
                    </div>
                </div>
            </div>
            <!-- /faq1 -->
            <!-- faq2 -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading22">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapse22" aria-expanded="true" aria-controls="collapse22">
                            <span class="dot"></span> Where can I rent a car?
                        </a>
                    </h4>
                </div>
                <div id="collapse22" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading22">
                    <div class="panel-body">
                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                        vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                        sollicitudin aliquet.
                    </div>
                </div>
            </div>
            <!-- /faq2 -->
            <!-- faq3 -->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading23">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse23" aria-expanded="false" aria-controls="collapse23">
                            <span class="dot"></span> If I crash a car. What happens?
                        </a>
                    </h4>
                </div>
                <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
                    <div class="panel-body">
                        Duis bibendum diam non erat facilaisis tincidunt. Fusce leo neque, lacinia at tempor
                        vitae, porta at arcu. Vestibulum varius non dui at pulvinar. Ut egestas orci in quam
                        sollicitudin aliquet.
                    </div>
                </div>
            </div>
            <!-- /faq3 -->
        </div>
        <!-- /FAQ -->
    </div>
</div>

</div>
</section>--}}
<!-- /PAGE -->

<!-- PAGE -->
<!--<section class="page-section find-car dark">
    <div class="container">

        <form action="{{ route('products.index') }}" method="get" class="form-find-car">
            <div class="row">

                <div class="col-md-3 wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">

                    <h2 class="section-title text-left no-margin">
                        <small>{{__("Great Rental Cars")}}</small>
                        <span>{{__("Find your car")}}</span>
                    </h2>

                </div>
                <div class="col-md-3 wow fadeInDown" data-wow-offset="200" data-wow-delay="200ms">
                    <div class="form-group has-icon has-label">

                        <label for="formFindCarLocation">{{__("Picking Up Location")}}</label>
                        <select name="PickingUpLocation"
                                class="selectpicker input-price"
                                data-live-search="true" data-width="100%"
                                data-toggle="tooltip"
                                id="formFindCarLocation"
                        >
                            @if($locations ?? false)
                                @foreach($locations as $location)


                                    <option
                                        <?php selected(old('PickingUpLocation'), $location->alias); ?>
                                        value="{{$location->alias}}">{{$location->title}}</option>
                                @endforeach
                            @endif
                        </select>
                        <span class="form-control-icon"><i class="fa fa-location-arrow"></i></span>

                    </div>
                </div>
                <div class="col-md-2 wow fadeInDown" data-wow-offset="200" data-wow-delay="300ms">
                    <div class="form-group has-icon has-label">
                        <label for="formFindCarDate">{{__("Picking Up Date")}}</label>
                        <input type="text" class="form-control datepicker" id="formFindCarDate"
                               placeholder="dd/mm/yyyy">
                        <span class="form-control-icon"><i class="fa fa-calendar"></i></span>

                    </div>
                </div>
                <div class="col-md-2 wow fadeInDown" data-wow-offset="200" data-wow-delay="400ms">
                    <div class="form-group has-icon has-label">
                        <label for="formFindCarCategory">{{__("Price Category")}}</label>

                        <select name="group"
                                class="selectpicker input-price"
                                data-live-search="true" data-width="100%"
                                data-toggle="tooltip"
                                id="formFindCarCategory"
                        >
                            @if($terms ?? false)
                                @foreach($terms as $group)
                                    @if($group->type == 'group')
                                        <option
                                            <?php selected(old('PickingUpLocation'), $group->alias); ?>
                                            value="{{$group->alias}}">{{$group->title}}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                        <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                    </div>
                </div>
                <div class="col-md-2 wow fadeInDown" data-wow-offset="200" data-wow-delay="500ms">
                    <div class="form-group">
                        <button type="submit" id="formFindCarSubmit"
                                class="btn btn-block btn-submit ripple-effect btn-theme">{{__("Find Car")}}</button>
                    </div>
                </div>

            </div>
        </form>

    </div>
</section>-->
<!-- /PAGE -->

<!-- PAGE -->
{{--<section class="page-section no-padding no-bottom-space-off">
    <div class="container full-width">

        <!-- Google map -->
        <div class="google-map">
            <div id="map-canvas"></div>
        </div>
        <!-- /Google map -->
        

    </div>
</section>--}}


<!-- /PAGE -->


<!-- PAGE -->
{{--<section class="page-section">
    <div class="container">

        <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
            <small>{{__("Rental Magazine Here")}}</small>
<span>{{__("Recent Blog Posts")}}</span>
</h2>

<div class="row">
    @if($posts)
    @foreach($posts as $post)
    <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
        <div class="recent-post alt">
            <div class="media">
                <a class="media-link" href="#">
                    <div class="badge type">{{__("Car Service")}}</div>
                    <div class="badge post"><i class="fa  fa-image"></i></div>
                    @if(isset($post->img) && $post->img > 0)

                    <img class="media-object" src="{{ the_image_url($post->img,'thumbnail-570x270 ') }}">
                    <i class="fa fa-plus"></i>

                    @endif
                </a>
                <div class="media-left">
                    <div class="meta-date">
                        <div class="day">{{$post->created_at->format('d') ?? ''}}</div>
                        <div class="month">{{$post->created_at->format('M') ?? ''}}</div>
                    </div>
                </div>
                <div class="media-body">
                    <div class="media-meta">
                        {{__('By')}}{{$post->user->name ?? ''}}
                    </div>
                    <h4 class="media-heading"><a href="{{ route('posts.show',['alias' => $post->alias]) }}">{{$post->title}}</a></h4>
                    <div class="media-excerpt">{{$post->desc}}</div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @endif

</div>

<div class="text-center margin-top wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
    <a href="{{ route('posts.index') }}" class="btn btn-theme ripple-effect btn-theme-light btn-more-posts">{{__("See All Posts")}}</a>
</div>

</div>
</section>--}}
<!-- /PAGE -->

<!-- PAGE -->
{{--<section class="page-section image subscribe">
    <div class="container">

        <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
            <small>{{__("You Can Follow Us By E Mail")}}</small>
<span>{{__("Subscrıbe")}}</span>
</h2>

<div class="row wow fadeInDown" data-wow-offset="200" data-wow-delay="200ms">
    <div class="col-md-8 col-md-offset-2">

        <p class="text-center">{{__("This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.")}}</p>

        <!-- Subscribe form -->
        <form action="#" class="form-subscribe mail-chimp">
            <div class="form-group">
                <label for="formSubscribeEmail" class="sr-only">{{__("Enter your email here")}}</label>
                <input type="text" class="form-control" id="formSubscribeEmail" placeholder="Enter your email here" title="Email is required">
            </div>
            <button type="submit" class="btn btn-submit btn-theme ripple-effect btn-theme-dark">{{__("Subscribe")}}</button>
        </form>
        <!-- Subscribe form -->

    </div>
</div>

</div>
</section>--}}
<!-- /PAGE -->


<section style="padding:40px 0px">
    <div class="container">

        <div class="row">

            <div class="col-md-12">
                <h2 class="caption-title text-center" style="margin-bottom:20px;">{{__("Office Working Hours")}}</h2>
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
            <span>{{__("Get in Touch With Us")}}</span>
        </h2>

        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
                <!-- Contact form -->
                <form name="contact-form" method="post" action="#" class="contact-form" id="contact-form">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="name">{{__("Name")}}</label>
                                    <input type="text" name="name" id="name" placeholder="Name" value="" size="30" data-toggle="tooltip" title="Name is required" class="form-control placeholder" />
                                    <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="email">{{__("Email")}}</label>
                                    <input type="text" name="email" id="email" placeholder="Email" value="" size="30" data-toggle="tooltip" title="Email is required" class="form-control placeholder" />
                                    <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="outer required">
                        <div class="form-group af-inner has-icon">
                            <label class="sr-only" for="subject">{{__("Subject")}}</label>
                            <input type="text" name="subject" id="subject" placeholder="Subject" value="" size="30" data-toggle="tooltip" title="Subject is required" class="form-control placeholder" />
                            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                        </div>
                    </div>

                    <div class="form-group af-inner has-icon">
                        <label class="sr-only" for="input-message">{{__("Message")}}</label>
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

                <p>{{__(" At Perfect Line,Our customer's satisfaction comes first,We provide mobility solutions that benefit")}}</p>

                <ul class="media-list contact-list">
                    <li class="media">
                        <div class="media-left"><i class="fa fa-home"></i></div>
                        <div class="media-body">{{__("Adress: Adress: Shop No. 06, Wasl Duet - 02 , Al Karama , Dubai , U.A.E")}}</div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-phone"></i></div>
                        <div class="media-body">{{__("Tel: +971 4 326 7557")}}</div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-whatsapp"></i></div>
                        <div class="media-body">{{__("Whatsapp: +971 54 495 7070")}}</div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-envelope"></i></div>
                        <div class="media-body">{{__("E mails: perfectlinerac@yahoo.com")}}</div>
                    </li>

                    <!--<li class="media">
                        <div class="media-left"><i class="fa fa-clock-o"></i></div>
                        <div class="media-body">
                            <p>{{__("Working Hours: 9:00 AM - 10:00 PM on Monday")}}</p>
                            <p>{{__("Working Hours: 8:30 AM - 10:00 PM on Tuesday")}}</p>
                            <p>{{__("Working Hours: 9:00 AM - 10:00 PM on Wednesday")}}</p>
                            <p>{{__("Working Hours: 9:00 AM - 10:00 PM on Thursday")}}</p>
                            <p>{{__("Working Hours: 9:00 AM - 10:00 PM on Thursday")}}</p>
                            <p>{{__("Working Hours: 9:00 AM - 10:00 PM on Saturday")}}</p>
                            <p>{{__("Working Hours: 8:30 AM - 9:00 PM on Sunday")}}</p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-map-marker"></i></div>
                        <div class="media-body">{{__("View on The Map")}}</div>
                    </li>-->
                </ul>
            </div>
        </div>

        <!-- /Get in touch -->


    </div>
</section>