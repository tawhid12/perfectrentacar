<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo $breadcrumbs ?? ''; ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('sidebar'); ?>
    <?php echo $sidebar ?? ''; ?>


<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
    <?php echo isset($content) ? $content : ''; ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content-area'); ?>
    <section class="page-section with-sidebar sub-page">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR -->
                <div class="col-md-9 content car-listing" id="content">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- /SIDEBAR -->

                <!-- CONTENT -->
                <div class="col-md-3 sidebar"  id="sidebar">
                    <?php echo $__env->yieldContent('sidebar'); ?>
                </div>
                <!-- /CONTENT -->

            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    <?php echo $footer ?? ''; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme:rentit::layouts.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>