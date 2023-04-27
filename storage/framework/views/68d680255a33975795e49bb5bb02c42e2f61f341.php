
    


<!-- ===== Page-Container ===== -->
<div class="container-fluid">
    <?php Eventy::action('dashboard.top-widget'); ?>
    <div >
        <div class="white-box">
            <div class="text-center">
                <h1 class=""><?php echo e(__('admin.Welcome to Lararent!')); ?>  <small>v <?php echo e(config('settings.lr_version')); ?></small></h1>

                <p><?php echo e(__('admin.We’ve assembled some links to get you started:')); ?></p></div>

                <div class="row default-steps">
                    <div class="col-md-4 column-step">
                        <div class="step-number"><?php echo e(__('admin.1')); ?></div>
                        <div class="step-title"><?php echo e(__('admin.Get Started')); ?></div>
                        <div class="step-info">

                            <a class="btn  btn-success btn-lg"
                               href="<?php echo e(route('admin.customize.index')); ?>"><?php echo e(__('admin.Customize Your Site')); ?></a>

                            <p class="hide-if-no-customize"><?php echo e(__('admin.or,')); ?>

                                <a href="<?php echo e(route('admin.themes.index')); ?>"><?php echo e(__('admin.change your theme completely')); ?></a></p>

                            <br><br>
                            <br>
                        </div>
                    </div>
                    <div class="col-md-4 column-step active">
                        <div class="step-number"><?php echo e(__('admin.2')); ?></div>
                        <div class="step-title"><?php echo e(__('admin.Next Steps')); ?></div>
                        <div class="step-info">
                            <div class="list-group">

                                <a href="<?php echo e(route('admin.pages.create')); ?>" class="list-group-item active"><?php echo e(__('admin.Add additional pages')); ?></a>
                                <a href="<?php echo e(route('admin.posts.create')); ?>" class="list-group-item active"><?php echo e(__('admin.Add additional posts')); ?></a>
                                <a href="<?php echo e(url('/')); ?>" class="list-group-item active"><?php echo e(__('admin.View your site')); ?></a>
                            </div>

                       </div>
                    </div>
                    <div class="col-md-4 column-step">
                        <div class="step-number"><?php echo e(__('admin.3')); ?></div>
                        <div class="step-title"><?php echo e(__('admin.More Actions')); ?></div>
                        <div class="step-info">
                            <div class="list-group">
                                <span class="list-group-item active">
                                   <?php echo e(__('admin.Manage')); ?> <a href="<?php echo e(route('admin.widgets.index')); ?>" class="text-white">
                                        <?php echo e(__('admin.widgets')); ?></a> <?php echo e(__('admin.or')); ?>  <a href="<?php echo e(route('admin.menus.index')); ?>" class="text-white"><?php echo e(__('admin.menus')); ?></a>
                                </span>


                                <a href="<?php echo e(route('admin.users.index')); ?>" class="list-group-item"><?php echo e(__('admin.Manage users')); ?></a>
                                <a href="<?php echo e(route('admin.options.index')); ?>" class="list-group-item"><?php echo e(__('admin.Change options')); ?></a>
                            </div>

                      </div>
                    </div>


        </div>
    </div>
    <!-- ===== Right-Sidebar-End ===== -->
</div>
    <?php Eventy::action('dashboard.bottom-widget'); ?>
</div>

<!-- ===== Page-Container-End ===== -->