<table class="table table-striped" id="myTable">
    <thead>
    <tr>
        <th></th>
        <th><?php echo e(__('Email')); ?></th>
        <th><?php echo e(__('	Recipient(s)')); ?></th>
        <th></th>
    </tr>
    </thead>
    <tbody>



    <?php $__currentLoopData = $gateways; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gateway): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>

            <td><i class="icon-screen-desktop fa-fw"></i></td>
            <td><?php echo e($gateway->method_title); ?></td>
            <td><?php echo e($gateway->recipients ?? ''); ?></td>

            <td><a href="<?php echo e(route('admin.ecommerce.email.edit',['email' => $gateway->id])); ?>"
                   class="btn btn-block btn-success"><?php echo e(__('Edit')); ?></a></td>
        </tr>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </tbody>
</table>