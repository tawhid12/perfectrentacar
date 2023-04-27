<?php if(!empty($posts) && !$posts->isEmpty()
): ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


        <!-- Blog posts -->
        <article class="post-wrap">
            <div class="post-media">

                <?php if(isset($post->img) && $post->img > 0): ?>
                    <a href="<?php echo e(the_image_url($post->img)); ?>" data-gal="prettyPhoto">
                        <img src="<?php echo e(the_image_url($post->img,'thumbnail-870x370')); ?>">
                    </a>

                <?php endif; ?>

            </div>
            <div class="post-header">
                <h2 class="post-title"><a
                            href="<?php echo e(route('posts.show',['alias' => $post->alias])); ?>"><?php echo e($post->title); ?></a></h2>



                <div class="post-meta"><?php echo e(__('By')); ?> <a href="#"><?php echo e($post->user->name ?? ''); ?>


                    </a> / <?php echo e($post->created_at->format('d M Y') ?? ''); ?>  /

                    <?php if(is_object($post->categories) && $post->categories && isset($post->categories[0]->alias) ): ?>

                    <?php echo e(__('in')); ?>


                    <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e(route('postsCat',['cat_alias'=> $category->alias ])); ?>"> <?php echo e($category->title); ?></a>,
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    /
                    <a href="#">(<?php echo e(count($post->comments->where('status','published')->where('locale', App::getLocale()))); ?> Comments)</a>
                        </div>
            </div>
            <div class="post-body">
                <div class="post-excerpt">
                    <p><?php echo e($post->desc); ?></p>
                </div>
            </div>
            <div class="post-footer">
                <span class="post-read-more">
                    <a href="<?php echo e(route('posts.show',['alias' => $post->alias])); ?>"

                       class="btn btn-theme btn-theme-transparent btn-icon-left"><?php echo e(__('Read more')); ?></a>



                </span>
            </div>
        </article>
        <!-- / -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php else: ?>
    <h1><?php echo e(__('Nothing found')); ?> </h1>
<?php endif; ?>
