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

                    <div class="col-md-12">
                        <h4 class="box-title"><?php echo e(__('Payment gateway')); ?></h4>
                        <div class="form-body">


                            <div class="table-responsive ">

                                <table class="table product-overview " id="myTable">
                                    <thead>
                                    <tr>
                                        <th><?php echo e(__('Method')); ?></th>
                                        <th><?php echo e(__('Enabled')); ?></th>
                                        <th><?php echo e(__('Description')); ?> </th>
                                        <th><?php echo e(__('Actions')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>


                               
                                    <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr data-gateway_id="<?php echo e($gateway->id); ?>">
                                            <td>

                                                <a href="<?php echo e(route('admin.ecommerce.payment.edit',['payment' => $gateway->id])); ?>">
<?php echo e($gateway->get_title() ??  __('(no title)')); ?>

                                                </a>
                                            </td>
                                            <td></td>
                                            <td>

                                              <?php echo e($gateway->get_method_description()); ?>



                                            </td>

                                            <td>
                                                <a href="<?php echo e(route('admin.ecommerce.payment.edit',['payment' => $gateway->id])); ?>" class="text-inverse p-r-10"
                                                   data-toggle="tooltip" title="" data-original-title="Edit"><i
                                                            class="ti-marker-alt"></i></a>


                                        </tr>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                                    </tbody>
                                </table>


                            </div>

                        </div>
                    </div>


                </div>
                <hr>

            </div>
        </div>
    </div>


</div>