<tr>
    <td>
        <a href="<?php echo e(route('admin.posts.edit',['posts'=>$post->id])); ?>">
            <?php if($post->img > 0): ?>
                <img src="<?php echo e(the_image_url($post->img,'thumbnail-260x260')); ?>"
                     alt="<?php echo e($post->title); ?>"
                     width="80">
            <?php endif; ?>

            <?php echo e($post->title); ?></a>
    </td>
    <td><?php echo e($post->category->title ?? ''); ?></td>
    <td>
        
        
        
        <?php echo e($post->user->name); ?>

    </td>
    <td>....</td>
    <td>0</td>
    <td><?php echo e($post->created_at->format('d-m-Y') ?? ''); ?></td>
    <td><span class="label label-success font-weight-100"><?php echo e(__('admin.Published')); ?></span></td>
    <td>
        <a href="<?php echo e(route('admin.posts.clone',['posts'=>$post->id])); ?>"
           class="text-inverse p-r-10 clone_post" data-toggle="tooltip"
           title="<?php echo e(__('admin.Clone')); ?>">
            <i class="fa fa-clone"></i></a>

        <a href="<?php echo e(route('admin.posts.edit',['posts'=>$post->id])); ?>"
           class="text-inverse p-r-10" data-toggle="tooltip"
           title="<?php echo e(__('admin.Edit')); ?>"><i class="ti-marker-alt"></i></a>

        <a
                href="javascript:void(0)"
                class="text-inverse delete_post"
                title="<?php echo e(__('admin.Delete')); ?>"
                data-id="<?php echo e($post->id); ?>"
                data-toggle="tooltip"><i
                    class="ti-trash"></i></a></td>
</tr>