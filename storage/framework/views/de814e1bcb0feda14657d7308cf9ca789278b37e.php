<div class="container-fluid">
    <!-- row -->

    <!--/.row -->
    <!-- /row -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="white-box">
                <h2 class=""><b><?php echo e(__('Settings')); ?></b></h2>


                <ul class="nav nav-tabs">
                    <li role="presentation"
                        <?php if(url()->current() == route('admin.ecommerce.settings.index') ): ?>
                        class="active"
                            <?php endif; ?>
                    >
                        <a href="<?php echo e(route('admin.ecommerce.settings.index')); ?>"
                           aria-controls="home"
                           >
                            <?php echo e(__('General')); ?>

                        </a>
                    </li>
                    <li role="presentation"

                        <?php if(url()->current() == route('admin.ecommerce.payment.index') ): ?>
                        class="active"
                            <?php endif; ?>

                    >
                        <a href="<?php echo e(route('admin.ecommerce.payment.index')); ?>" aria-controls="home"
                        ><?php echo e(__('Payments')); ?>


                        </a>
                    </li>
                    <li role="presentation"

                        <?php if(url()->current() == route('admin.ecommerce.email.index') ): ?>
                        class="active"
                            <?php endif; ?>

                    >
                        <a href="<?php echo e(route('admin.ecommerce.email.index')); ?>" aria-controls="home"
                        ><?php echo e(__('Emails')); ?>


                        </a>
                    </li>


                </ul>
                <hr>
                <div class="row">

                    <form  action="<?php echo e(route('admin.ecommerce.settings.store')); ?>" method="post" class="col-md-6">
                        <?php echo csrf_field(); ?>

                        <h4 class="box-title"><?php echo e(__('Currency options')); ?></h4>
                        <?php if(count($errors) > 0): ?>

                            <div class="row">
                                <div class="col-md-12">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="alert alert-danger"><?php echo e($error); ?></div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>

                            </div>
                        <?php endif; ?>

                        <?php if(session('status')): ?>
                            <div class="row">
                                <div class="col-md-12">


                                    <div class=" alert alert-success"><?php echo e(session('status')); ?></div>


                                </div>
                            </div>


                        <?php endif; ?>

                        <div class="form-body">


                            <div class="form-group">
                                <label for="currency"><?php echo e(__('Currency symbol')); ?></label>
                                <input name="currency" type="text" required="" class="form-control"
                                       id="currency" value="<?php echo e(old('currency', isset($settings['currency']) ? $settings['currency'] : '' )); ?>"
                                       placeholder=""
                                >
                            </div>
     <div class="form-group">
                                <label for="currency"><?php echo e(__('Currency code')); ?></label>
         <smail><?php echo e(__('you can see it here')); ?> <a target="_blank" href="https://en.wikipedia.org/wiki/ISO_4217#Position_of_ISO_4217_code_in_amounts">https://en.wikipedia.org/wiki/ISO_4217#Position_of_ISO_4217_code_in_amounts</a>  </smail>
                                <input name="currency_code" type="text" required="" class="form-control"
                                       id="currency" value="<?php echo e(old('currency_code', isset($settings['currency_code']) ? $settings['currency_code'] : '' )); ?>"
                                       placeholder=""
                                >
                            </div>


                            <div class="form-group">
                                <label for="currency_pos"><?php echo e(__('Currency position:')); ?></label>

                                <select class="form-control" name="currency_pos" id="currency_pos">
                                    <option value="left"
                                          <?php  selected('left',isset($settings['currency_pos']) ? $settings['currency_pos'] : '' ) ?> >
                                        <?php echo e(__('Left')); ?>

                                    </option>
                                    <option value="right"
                                    <?php  selected('right',isset($settings['currency_pos']) ? $settings['currency_pos'] : '' ) ?>
                                    >
                                        <?php echo e(__('Right')); ?>

                                    </option>
                                    <option value="left_space"
                                    <?php  selected('left_space',isset($settings['currency_pos']) ? $settings['currency_pos'] : '' ) ?>
                                    >
                                        <?php echo e(__(' Left with space')); ?>

                                    </option>
                                    <option value="right_space"
                                    <?php  selected('right_space',isset($settings['currency_pos']) ? $settings['currency_pos'] : '' ) ?>
                                    >
                                        <?php echo e(__('Right with space')); ?>

                                    </option>

                                </select>
                            </div>

                            <div class="row">


                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="price_thousand_sep"><?php echo e(__('Thousand separator')); ?></label>

                                        <input name="price_thousand_sep" type="text" required="" class="form-control"
                                               id="price_thousand_sep" value=","
                                               placeholder=","
                                        >
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="price_decimal_sep"><?php echo e(__('Decimal separator')); ?></label>

                                        <input name="price_decimal_sep" type="text" required="" class="form-control"
                                               id="price_decimal_sep" value="<?php echo e(old('currency_code', isset($settings['price_decimal_sep']) ? $settings['price_decimal_sep'] : '.' )); ?>"
                                               placeholder="."
                                        >
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="price_num_decimals"><?php echo e(__('Number of decimals')); ?></label>

                                        <input name="price_num_decimals" type="number" required="" class="form-control"
                                               id="price_num_decimals" value="<?php echo e(old('currency_code', isset($settings['price_num_decimals']) ? $settings['price_num_decimals'] : '2' )); ?>"
                                               placeholder="2"
                                        >
                                        <p></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">
                                        <?php echo e(__('Save options')); ?>

                                    </button>
                                </div>


                            </div>


                        </div>
                    </form>




                </div>
                <hr>

            </div>
        </div>
    </div>


</div>