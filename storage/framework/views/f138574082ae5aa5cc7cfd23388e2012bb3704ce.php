<section class="page-section breadcrumbs">
    <div class="container text-right">
        <div class="page-header">
            <h1><?php echo e($title ?? ''); ?></h1>
        </div>
        <ul class="breadcrumb">
            <li><a href="<?php echo e(request()->root()); ?>"><?php echo e(__('Home')); ?></a></li>
            <?php echo $list_links ?? ''; ?>

        </ul>
    </div>
</section>