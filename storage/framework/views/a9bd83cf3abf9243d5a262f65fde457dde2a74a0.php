<h5 class="widget-title-sub"><?php echo e(__('Picking Up Location')); ?></h5>
<div class="media">
    <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
    <div class="media-body"><p><?php echo e($request->PickingUpDate ?? ''); ?> /<?php echo e($request->PickingUpHour ?? ''); ?> </p></div>
</div>
<div class="media">
    <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
    <div class="media-body"><p><?php echo e(__('From')); ?> <?php echo e($locations[$request->PickingUpLocation] ?? ''); ?></p></div>
</div>
<h5 class="widget-title-sub"><?php echo e(__('Droping Off Location')); ?></h5>
<div class="media">
    <span class="media-object pull-left"><i class="fa fa-calendar"></i></span>
    <div class="media-body"><p><?php echo e($request->DroppingOffDate ?? ''); ?> /<?php echo e($request->DroppingOffHour ?? ''); ?> </p></div>
</div>
<div class="media">
    <span class="media-object pull-left"><i class="fa fa-location-arrow"></i></span>
    <div class="media-body"><p><?php echo e(__('From')); ?> <?php echo e($locations[$request->DroppingOffLocation] ?? ''); ?></p></div>
</div>

<h5 class="widget-title-sub"><?php echo e(__('EXTRAS & FREES')); ?></h5>
<div class="media">


    <?php if($ecommerce_cart['names']['extras'] ?? false): ?>

        <?php $__currentLoopData = $ecommerce_cart['names']['extras']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php  if($item['duration_type'] == 'days'){ ?>
                <span class="media-object pull-left"><i class="fa fa-check-circle"></i></span>
                <div class="media-body"><p><?php echo e($item['name']); ?>: <?php echo e(formatted_price($item['price'] * $days )); ?></p></div>

            <?php } else { ?>
            <span class="media-object pull-left"><i class="fa fa-check-circle"></i></span>
            <div class="media-body"><p><?php echo e($item['name']); ?>: <?php echo e(formatted_price($item['price'])); ?></p></div>

			<?php  } ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>



<h5 class="widget-title-sub"><?php echo e(__('Total price')); ?></h5>
<div class="price">
    <strong><?php echo e(formatted_price($ecommerce_cart['total_price'] ?? 0)); ?></strong> <span><?php echo e(__('/for')); ?> <?php echo e($days); ?> <?php echo e(__('day(s)')); ?></span>
</div>
