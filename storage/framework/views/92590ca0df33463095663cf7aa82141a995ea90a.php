<?php echo $__env->make('theme:rentit::layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- CONTENT AREA -->
<div class="content-area">

    <!-- BREADCRUMBS -->

<?php echo $__env->yieldContent('breadcrumbs'); ?>

<!-- /BREADCRUMBS -->

    <!-- PAGE WITH SIDEBAR -->
    <?php $__env->startSection('content-area'); ?>
        <section class="page-section with-sidebar sub-page">
            <div class="container">
                <div class="row">
                    <!-- SIDEBAR -->

                    <?php if($sidebar ?? false): ?>
                        <aside class="col-md-3 sidebar" id="sidebar">
                            <?php echo $__env->yieldContent('sidebar'); ?>

                        </aside>
                    <?php endif; ?>
                <!-- /SIDEBAR -->

                    <!-- CONTENT -->
                    <div class="<?php echo e((isset($sidebar) || isset($sidebar_right)) ? 'col-md-9' : 'col-md-12'); ?> content" id="content">

                        <?php echo $__env->yieldContent('content'); ?>

                    </div>

                    <?php if($sidebar_right ?? false): ?>
                        <aside class="col-md-3 sidebar" id="sidebar">
                         <?php echo $sidebar_right; ?>


                        </aside>
                <?php endif; ?>
                <!-- /CONTENT -->

                </div>
            </div>
        </section>
        <!-- /PAGE WITH SIDEBAR -->
    <?php $__env->stopSection(); ?>
    <?php echo $__env->yieldContent('content-area'); ?>

</div>
<!-- /CONTENT AREA -->

<!-- FOOTER -->


<?php echo $__env->yieldContent('footer'); ?>

<!-- /FOOTER -->

<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /WRAPPER -->

<?php echo $lr_footer ?? ''; ?>

</body>
</html>