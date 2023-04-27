
<tr>
    <td>
        <a href="<?php echo e(route('admin.products.edit',['product'=>$product->id])); ?>">
            <?php if($product->img > 0): ?>
                <img src="<?php echo e(the_image_url($product->img,'thumbnail-260x260')); ?>"
                     alt="<?php echo e($product->title); ?>"
                     width="80">
            <?php endif; ?>

            <?php echo e($product->title); ?>

        </a>
    </td>
    <td></td>
    <td>


        <?php echo e($product->price ?? ''); ?>

    </td>
    <td><?php echo e(__("....")); ?></td>
    <td><?php echo e($product->created_at->format('d-m-Y') ?? ''); ?></td>
    <td><?php echo e($product->created_at->format('d-m-Y') ?? ''); ?></td>
    <td><span class="label label-success font-weight-100">
                                            <?php echo e($product->status ?? ''); ?>

                                        </span></td>
    <td>
        <a href="<?php echo e(route('admin.products.edit',['product'=>$product->id])); ?>"
           class="text-inverse p-r-10" data-toggle="tooltip" title=""
           data-original-title="Edit"><i class="ti-marker-alt"></i></a>

        <a href="<?php echo e(route('admin.product.clone',['product'=>$product->id])); ?>"
           class="text-inverse p-r-10 clone_product" data-toggle="tooltip"
           title="<?php echo e(__('admin.Clone')); ?>">
            <i class="fa fa-clone"></i></a>

        <a href="javascript:void(0)" class="text-inverse delete_product"
           title=""
           data-id="<?php echo e($product->id); ?>"
           data-toggle="tooltip" data-original-title="<?php echo e(__('admin.Delete')); ?>">
            <i class="ti-trash"></i></a></td>
</tr>
