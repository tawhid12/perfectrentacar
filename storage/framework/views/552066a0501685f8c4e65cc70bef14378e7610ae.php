<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo $breadcrumbs ?? ''; ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
    <?php echo $sidebar ?? ''; ?>


<?php $__env->stopSection(); ?>






<?php $__env->startSection('content'); ?>
    <?php echo isset($content) ? $content : ''; ?>



<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer'); ?>
    <?php echo $footer ?? ''; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme:rentit::layouts.blog',
[
'sidebar' => $sidebar ?? null,
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>