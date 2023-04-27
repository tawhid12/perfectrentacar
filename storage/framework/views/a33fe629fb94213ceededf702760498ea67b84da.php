<div class="widget shadow widget-find-car">
    <h4 class="widget-title"><?php echo e($title ?? ''); ?></h4>
    <div class="widget-content">
        <!-- Search form -->
        <div class="form-search light">
            <form action="<?php echo e(route('products.index')); ?>" method="get">

                <div class="form-group has-icon has-label">
                    <label for="formSearchUpLocation3"><?php echo e(__('Picking Up Location')); ?></label>
                    <select name="PickingUpLocation"
                            class="selectpicker input-price"
                            data-live-search="true" data-width="100%"
                            data-toggle="tooltip"
                            id="formSearchUpLocation"
                    >
                        <?php if($locations ?? false): ?>
                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                                <option
									<?php  selected( old( 'PickingUpLocation', session( 'PickingUpLocation' ) ), $location->alias ); ?>
                                    value="<?php echo e($location->alias); ?>"><?php echo e($location->title); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                    <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                </div>

                <div class="form-group has-icon has-label">
                    <label for="formSearchOffLocation"><?php echo e(__('Dropping Off Location')); ?></label>
                    <select id="formSearchOffLocation" name="DroppingOffLocation"
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="<?php echo e(__('Select')); ?>">
                        <?php if($locations): ?>
                            <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <option
									<?php  selected( old( 'DroppingOffLocation', session( 'DroppingOffLocation' ) ), $location->alias ); ?>
                                    value="<?php echo e($location->alias); ?>"><?php echo e($location->title); ?></option>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                    <span class="form-control-icon"><i class="fa fa-map-marker"></i></span>
                </div>

                <div class="form-group has-icon has-label">
                    <label for="formSearchUpDate3"><?php echo e(__('Picking Up Date')); ?></label>
                    <input autocomplete="off"
                           name="PickingUpDate"
                           type="text"
                           class="PickingUpDate form-control datepicker"
                           id="formSearchUpDate" placeholder="dd/mm/yyyy"
                           value="<?php echo e(session('PickingUpDate')); ?>"
                    >
                    <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                </div>
                <div class="form-group has-icon has-label">
                    <label for="formSearchOffDate"><?php echo e(__('Dropping Off Date')); ?></label>
                    <input autocomplete="off"
                           name="DroppingOffDate"
                           type="text"
                           class="form-control datepicker DroppingOffDate"
                           id="formSearchOffDate"
                           placeholder="dd/mm/yyyy"
                           value="<?php echo e(session('DroppingOffDate')); ?>"
                    >

                    <span class="form-control-icon"><i class="fa fa-calendar"></i></span>
                </div>

                <div class="form-group has-icon has-label selectpicker-wrapper">
                    <label><?php echo e(__('Picking Up Hour')); ?></label>
                    <select
                            name="PickingUpHour"
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="<?php echo e(__('Select')); ?>">

						<?php  $times = rentit_get_times(); ?>
                        <?php if($times && is_array($times)): ?>
                            <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
									<?php  selected( old( 'PickingUpHour', session( 'PickingUpHour' ) ), $time ); ?> value="<?php echo e($time); ?>"><?php echo e($time); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </select>
                    <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                </div>


                <div class="form-group has-icon has-label selectpicker-wrapper">
                    <label><?php echo e(__('Dropping Off Hour')); ?></label>
                    <select name="DroppingOffHour"
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="<?php echo e(__('Select')); ?>">
                        <?php if($times && is_array($times)): ?>
                            <?php $__currentLoopData = $times; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option
									<?php  selected( old( 'DroppingOffHour', session( 'DroppingOffHour' ) ), $time ); ?> value="<?php echo e($time); ?>"><?php echo e($time); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                    </select>
                    <span class="form-control-icon"><i class="fa fa-clock-o"></i></span>
                </div>

                <div class="form-group selectpicker-wrapper">
                    <label><?php echo e(__('Select Category')); ?></label>
                    <select
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="<?php echo e(__('Select')); ?>" name="category">
                        <option value="0"><?php echo e(__('Select Category')); ?></option>
                        <?php if($category_list ?? false): ?>
                            <?php $__currentLoopData = $category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option <?php  selected( old( 'category', request()->category ?? '' ), $item->alias ); ?> value="<?php echo e($item->alias ?? ''); ?>"><?php echo e($item->title ?? ''); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group selectpicker-wrapper">
                    <label><?php echo e(__('Select Type')); ?></label>
                    <select
                            class="selectpicker input-price" data-live-search="true" data-width="100%"
                            data-toggle="tooltip" title="<?php echo e(__('Select')); ?>" name="group">
                        <option value="0"><?php echo e(__('Select Type')); ?></option>
                        <?php if($group_list ?? false): ?>
                            <?php $__currentLoopData = $group_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option  <?php  selected( old( 'group', request()->group ?? '' ), $item->alias ); ?> value="<?php echo e($item->alias ?? ''); ?>"><?php echo e($item->title ?? ''); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </select>
                </div>

                <button type="submit" id="formSearchSubmit3" class="btn btn-submit btn-theme btn-theme-dark btn-block">
                    <?php echo e(__('Find Car')); ?>

                </button>

            </form>
        </div>
        <!-- /Search form -->
    </div>
</div>