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
                    <?php echo $content_row ?? ''; ?>


                </div>
                <hr>

            </div>
        </div>
    </div>


</div>