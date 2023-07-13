<?php if(count($errors) > 0): ?>

    <div class="row">
        <div class="col-md-12">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="alert alert-danger fade in">
                    <button class="close" data-dismiss="alert" type="button">×</button>
                    <strong><?php echo e($error); ?></strong></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    </div>
<?php endif; ?>

<?php if(session('status')): ?>
    <div class="row">
        <div class="col-md-12">


            <div class=" alert alert-success">
                <button class="close" data-dismiss="alert" type="button">×</button>
                <strong><?php echo e(session('status')); ?></strong></div>


        </div>
    </div>


<?php endif; ?>

<h3 class="block-title alt"><i class="fa fa-angle-down"></i><?php echo e(__('Car Information')); ?></h3>
<div class="car-big-card alt">
    <div class="row">


        <div class="col-md-8">
            <div class="owl-carousel img-carousel">

                <?php if( $product->img ?? false ): ?>

                    <div class="item">
                        <a class="btn btn-zoom" href="<?php echo e(the_image_url($product->img,'thumbnail-370x220')); ?>"
                           data-gal="prettyPhoto"><i class="fa fa-arrows-h"></i></a>
                        <a href="<?php echo e(the_image_url($product->img,'full')); ?>" data-gal="prettyPhoto">
                            <img class="img-responsive" src="<?php echo e(the_image_url($product->img,'thumbnail-600x426')); ?>"
                                 alt=""/></a>
                    </div>
                <?php endif; ?>
                <?php if( is_array($gallery_media) && !empty($gallery_media) ): ?>

                    <?php $__currentLoopData = $gallery_media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($k  < 3): ?>
                            <div class="item">

                                <a class="btn btn-zoom" href="<?php echo e(the_image_url($item)); ?>" data-gal="prettyPhoto"><i
                                            class="fa fa-arrows-h"></i></a>
                                <a href="<?php echo e(the_image_url($item,'thumbnail-600x426')); ?>" data-gal="prettyPhoto">
                                    <img
                                            class="img-responsive" src="<?php echo e(the_image_url($item,'thumbnail-600x426')); ?>"
                                            alt=""/></a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php endif; ?>

            </div>
            <div class="row car-thumbnails">
                <?php if( $product->img ?? false ): ?>

                    <div class="col-xs-2 col-sm-2 col-md-3">
                        <a href="#" onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [0,300]);">
                            <img src="<?php echo e(the_image_url($product->img,'thumbnail-70x70')); ?>" alt=""/></a>
                    </div>
                <?php endif; ?>
                <?php if( is_array($gallery_media) && !empty($gallery_media) ): ?>

                    <?php $__currentLoopData = $gallery_media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($k  < 3): ?>
                            <div class="col-xs-2 col-sm-2 col-md-3">
                                <a href="#"
                                   onclick="jQuery('.img-carousel').trigger('to.owl.carousel', [<?php echo e($k+1); ?>,300]);">
                                    <img src="<?php echo e(the_image_url($item,'thumbnail-70x70')); ?>" alt=""/></a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <?php endif; ?>

            </div>
        </div>
        <div class="col-md-4">
            <div class="car-details">
                <div class="list">
                    <ul>
                        <li class="title">
                            <h2> <?php
								$arr = explode( ' ', $product->title );
								$arr[count( $arr ) - 1] = '<span>' . $arr[count( $arr ) - 1] . '</span>';
								echo implode( $arr, ' ' );

								?></h2>

                        </li>
                        <?php if(isset($product_meta['attributes']{1})): ?>
							<?php $attr = json_decode( $product_meta['attributes'] );
							if($attr){ ?>
                            <?php $__currentLoopData = $attr->value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($item); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php  } ?>
                        <?php endif; ?>


                    </ul>
                </div>
             
                <div class="price">
                    <strong><?php echo ec_price($price); ?></strong> <span><?php echo e(__('/for 1 day(s)')); ?></span> <i class="fa fa-info-circle"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="page-divider half transparent"/>

<p><?php echo $product->text ?? ''; ?></p>

<form action="<?php echo e(route('products.store')); ?>" method="POST" class="form-booking_a_car">
    <?php echo csrf_field(); ?>
    <h3 class="block-title alt"><i class="fa fa-angle-down"></i>
        <?php echo e(__('Extras & Frees')); ?>

    </h3>
    <div role="form" class="form-extras">

        <div class="row">


            <?php if(isset($product_meta['_rental_resource']) && $rental_resource = json_decode($product_meta['_rental_resource']) ): ?>
				<?php




				$collection = [];
				if(isset($rental_resource->item_name)){
				?>
                <?php $__currentLoopData = $rental_resource->item_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php
					$checked = false;
					$disable = false;

					$duration_type = '';
					if ( $rental_resource->duration_type[$j] == 'hours' )
						$duration_type = __( 'Hour' );
					if ( $rental_resource->duration_type[$j] == 'days' )
						$duration_type = __( 'Days' );

					if ( $rental_resource->duration_type[$j] == 'Total' )
						$duration_type = __( 'Total' );

					if ( $rental_resource->duration_type[$j] == 'Included' )
						$duration_type = __( 'Included' );

					if ( $rental_resource->duration_type[$j] == 'fixed_change' )
						$duration_type = __( 'Fixed change' );


					$collection[] = [
						'id' => $j,
						'item_name' => $name,
						'quantity' => $rental_resource->quantity[$j] ?? '',
						'cost' => $rental_resource->cost[$j] ?? '',
						'duration_type' => $rental_resource->duration_type[$j] ?? '',
						'type' => $duration_type,
						'checked' => $checked,
						'disable' => $disable

					];  ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php

				$quantity = count( $collection );

				$collection1 = array_slice( $collection, 0, intval( ceil( $quantity / 2 ) ), true );
				$collection2 = array_diff_key( $collection, $collection1 );


				?>


                <div class="col-md-6">
                    <div class="left">
						<?php  $i = 0; ?>
                        <?php if($collection1): ?>

                            <?php $__currentLoopData = $collection1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <div class="checkbox checkbox-danger">
                                    <input name="checkbox_extras[<?php echo( $i ); ?>]"

                                           id="checkbox_<?php echo e($item['item_name']); ?>" type="checkbox"
									       <?php if ( $item['checked'] == true ) {
										       echo 'checked="" value="on"';
									       } ?>
									       <?php if ( $item['disable'] == true ) { ?>
                                           disabled="disabled"
									<?php } ?>

                                    >
                                    <label for="checkbox_<?php echo e($item['item_name']); ?>"><?php echo e($item['item_name']); ?><span
                                                class="pull-right">
                                    <?php echo e(formatted_price($item['cost'])); ?> / <?php echo e($item['type']); ?></span></label>
                                </div>
								<?php  $i ++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="right">
                        <?php if($collection1): ?>
                            <?php $__currentLoopData = $collection2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php   ?>
                                <div class="checkbox checkbox-danger">
                                    <input name="checkbox_extras[<?php echo( $i ); ?>]"
                                           id="checkbox_<?php echo e($item['item_name']); ?>" type="checkbox"
									       <?php if ( $item['checked'] == true ) {
										       echo 'checked="" value="on"';
									       } ?>
									       <?php if ( $item['disable'] == true ) { ?>
                                           disabled="disabled"
									<?php } ?>

                                    >
                                    <label for="checkbox_<?php echo e($item['item_name']); ?>"><?php echo e($item['item_name']); ?>

                                        <span class="pull-right"><?php echo e(formatted_price($item['cost'])); ?>

                                            / <?php echo e($item['type']); ?></span></label>
                                </div>
									<?php  $i ++; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </div>
                </div>
                <?php  } ?>
            <?php endif; ?>

        </div>

    </div>


    <div class="row row-inputs">
        <div class="">
			<?php

			$picking_up_location = json_decode( $product_meta['__picking_up_location'] ?? '' );
			$dropping_off = json_decode( $product_meta['__dropping_off_location'] ?? '' );

			?>
            <div class="col-sm-6">
                <div class="form-group has-icon has-label">
                    <label for="formSearchUpLocation"><?php echo e(__('Picking Up Location')); ?></label>
                    <select name="PickingUpLocation"
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="Select">
                        <?php if($locations): ?>
                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if( is_array($picking_up_location) && in_array($location->alias,  $picking_up_location) ): ?>
                                    <option
										<?php  selected( old( 'PickingUpLocation', session('PickingUpLocation') ), $location->alias ); ?>
                                        value="<?php echo e($location->alias); ?>"><?php echo e($location->title); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                    <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group has-icon has-label">
                    <label for="formSearchUpDate"><?php echo e(__('Picking Up Date')); ?></label>
                    <input autocomplete="off" type="text"
                           class="form-control PickingUpDate"
                           id="formSearchUpDate3"
                           value="<?php echo e(old('PickingUpDate', session('PickingUpDate'))); ?>"
                           placeholder="<?php echo e(get_theme_mod('rentit_calendar_format', 'MM/DD/YYYY')); ?>"
                           name="PickingUpDate"

                    >
                    <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group has-icon has-label selectpicker-wrapper">
                    <label><?php echo e(__('Picking Up Hour')); ?></label>
                    <select
                            name="PickingUpHour"
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="Select">

						<?php  $times = rentit_get_times(); ?>
                        <?php if($times && is_array($times)): ?>
                            <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
									<?php  selected( old( 'PickingUpHour',session('PickingUpHour') ), $time ); ?> value="<?php echo e($time); ?>"><?php echo e($time); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </select>
                    <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-inputs">
        <div class="">
            <div class="col-sm-6">
                <div class="form-group has-icon has-label">
                    <label for="formSearchOffLocation"><?php echo e(__('Dropping Off Location')); ?></label>
                    <select name="DroppingOffLocation"
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="Select">
                        <?php if($locations): ?>
                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <?php if( is_array($dropping_off) && in_array($location->alias,  $dropping_off) ): ?>
                                    <option
										<?php  selected( old( 'DroppingOffLocation', session('DroppingOffLocation') ), $location->alias ); ?>
                                        value="<?php echo e($location->alias); ?>"><?php echo e($location->title); ?></option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                    <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group has-icon has-label">
                    <label for="formSearchOffDate"><?php echo e(__('Dropping Off Date')); ?></label>
                    <input autocomplete="off"  value="<?php echo e(old('DroppingOffDate',session('DroppingOffDate'))); ?>" name="DroppingOffDate" type="text" class="DroppingOffDate form-control "
                           id="formSearchOffDate3"
                           placeholder="<?php echo e(get_theme_mod('rentit_calendar_format', 'MM/DD/YYYY')); ?>">
                    <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group has-icon has-label selectpicker-wrapper">
                    <label><?php echo e(__('Dropping Off Hour')); ?></label>
                    <select name="DroppingOffHour"
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="Select">
                        <?php if($times && is_array($times)): ?>
                            <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
									<?php  selected( old( 'DroppingOffHour',session('DroppingOffHour') ), $time ); ?> value="<?php echo e($time); ?>"><?php echo e($time); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </select>
                    <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                </div>
            </div>
        </div>
    </div>


    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <h3 class="block-title alt"><i class="fa fa-angle-down"></i><?php echo e(__('Customer Information')); ?></h3>
    <div class="form-delivery">
        <div class="row">
            <div class="col-md-12">
                <div class="radio radio-inline">
                    <input type="radio" <?php  checked( old( 'gender' ), 'Mr' ); ?>  id="inlineRadio1" value="Mr"
                           name="gender" checked="">
                    <label for="inlineRadio1"><?php echo e(__('Mr')); ?></label>
                </div>
                <div class="radio radio-inline">
                    <input type="radio" <?php  checked( old( 'gender' ), 'Ms' ); ?>  id="inlineRadio2" value="Ms"
                           name="gender">
                    <label for="inlineRadio2"><?php echo e(__('Ms')); ?></label>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input name="name"
                           id="fd-name" title="<?php echo e(__('Name is required')); ?>" data-toggle="tooltip"
                           class="form-control alt" type="text" placeholder="<?php echo e(__('Name and Surname:')); ?>*">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input name="email"
                           id="fd-email"
                           title="<?php echo e(__('Email is required')); ?>"
                           data-toggle="tooltip"
                           class="form-control alt"
                           type="text"
                           value="<?php echo e($errors->has('email') ?? old('email')); ?>"
                           placeholder="<?php echo e(__('Your Email Address:*')); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input
                            class="form-control alt"
                            name="phone"
                            type="number"
                            value="<?php echo e(old('phone')); ?>"
                            placeholder="<?php echo e(__('Phone Number:')); ?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input
                            class="form-control alt"
                            name="street_address"
                            value="<?php echo e(old('street_address')); ?>"
                            type="text"
                            placeholder="<?php echo e(__('Street address *')); ?>">
                </div>
            </div>

        </div>
    </div>


    <h3 class="block-title alt"><i class="fa fa-angle-down"></i><?php echo e(__('Payments options')); ?></h3>
    <div class="panel-group payments-options payment-panel" id="accordion" role="tablist" aria-multiselectable="true">

        <!----------------------------------------------------->


        <!------------------------------------------------------->
        <?php if($available_gateways  =$PaymentGateways->get_available_payment_gateways()): ?>

            <?php $__currentLoopData = $available_gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                               href="#<?php echo e($gateway->id); ?>"
                               aria-expanded="false" aria-controls="collapseTwo">

                        <span class="dot"><input class="dn" type="radio" name="payment"
                                                 value="<?php echo e($gateway->id); ?>"></span><?php echo e($gateway->method_title); ?>

                            </a>
                        </h4>
                    </div>
                    <div id="<?php echo e($gateway->id); ?>" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="heading2">
                        <div class="panel-body">
                            <div class="alert alert-success" role="alert">
                                <?php echo e($gateway->method_description); ?>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>


        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        
        



        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </div>

    <h3 class="block-title alt"><i class="fa fa-angle-down"></i><?php echo e(__('Additional Information')); ?></h3>
    <div class="form-additional">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                                        <textarea name="message" id="fad-message"
                                                  title="<?php echo e(__('Addition information is required')); ?>"
                                                  data-toggle="tooltip"
                                                  class="form-control alt"
                                                  placeholder="<?php echo e(__('Additional Information')); ?>" cols="30"
                                                  rows="10"></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="overflowed reservation-now">
        <div class="checkbox pull-left">
            <input id="accept" type="checkbox" name="fd-name" title="Please accept" data-toggle="tooltip">
            <label for="accept"><?php echo e(__('I accept all information and Payments etc')); ?></label>
        </div>
        <input type="hidden" name="product_id" value="<?php echo e($product->id ?? ''); ?>">
        <input type="hidden" name="product_url" value="<?php echo e(url()->current()); ?>">
        <button type="submit" class="btn btn-theme pull-right btn-reservation-now"
                href="#"><?php echo e(__('Reservation Now')); ?></button>
        <a class="btn btn-theme pull-right btn-cancel btn-theme-dark" href="#"><?php echo e(__('Cancel')); ?></a>
    </div>


</form>


