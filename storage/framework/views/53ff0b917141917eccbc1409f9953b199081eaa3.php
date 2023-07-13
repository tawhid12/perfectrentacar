<?php $__env->startSection('sidebar-left'); ?>
    <?php echo $sidebar_left; ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $content; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admins.' . config('settings.admin'). '.layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>