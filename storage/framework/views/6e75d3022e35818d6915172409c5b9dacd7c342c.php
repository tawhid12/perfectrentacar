<?php if($posts ?? false && is_object($posts)): ?>

    <div class="widget widget-tabs alt">
        <div class="widget-content">
            <ul id="tabs" class="nav nav-justified">
                <li><a href="#tab-s1" data-toggle="tab">Recent posts</a></li>
                <li class="active"><a href="#tab-s2" data-toggle="tab">Popular post</a></li>
            </ul>
            <div class="tab-content">
                <!-- tab 1 -->
                <div class="tab-pane fade" id="tab-s1">
                    <div class="recent-post">


                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="media">

                                <?php if(isset($post->img) && $post->img > 0): ?>
                                    <a class="pull-left media-link"
                                       href="<?php echo e(route('posts.show',['alias' => $post->alias])); ?>"
                                       data-gal="prettyPhoto">

                                        <img data-id="<?php echo e($post->img); ?>" class="media-object img-responsive"
                                             alt="<?php echo e($post->title ?? ''); ?>"
                                             src="<?php echo e(the_image_url($post->img,'thumbnail-70x70')); ?>">
                                        <i class="fa fa-plus"></i>
                                    </a>

                                <?php endif; ?>


                                <div class="media-body">
                                    <div class="media-meta">
                                        <?php echo e($post->created_at->format('d M Y') ?? ''); ?>

                                        <span class="divider">/</span><a href="#"><i
                                                    class="fa fa-comment"></i><?php echo e(count($post->comments->where('status','published')->where('locale', App::getLocale()))); ?>

                                        </a>
                                    </div>
                                    <h4 class="media-heading"><a
                                                href="<?php echo e(route('posts.show',['alias' => $post->alias])); ?>"><?php echo e($post->title ?? ''); ?></a>
                                    </h4>
                                </div>
                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- tab 2 -->
                <div class="tab-pane fade in active" id="tab-s2">
                    <div class="recent-post">
                        <?php if($popular_post ?? false && is_object($popular_post)): ?>
                            <?php $__currentLoopData = $popular_post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="media">

                                    <?php if(isset($post->img) && $post->img > 0): ?>
                                        <a class="pull-left media-link"
                                           href="<?php echo e(route('posts.show',['alias' => $post->alias])); ?>"
                                           data-gal="prettyPhoto">
                                            <img class="media-object img-responsive" alt="<?php echo e($post->title ?? ''); ?>"
                                                 src="<?php echo e(the_image_url($post->img,'thumbnail-70x70')); ?>">
                                            <i class="fa fa-plus"></i>
                                        </a>

                                    <?php endif; ?>


                                    <div class="media-body">
                                        <div class="media-meta">
                                            <?php echo e($post->created_at->format('d M Y') ?? ''); ?>

                                            <span class="divider">/</span><a href="#"><i
                                                        class="fa fa-comment"></i><?php echo e(count($post->comments->where('status','published')->where('locale', App::getLocale()))); ?>

                                            </a>
                                        </div>
                                        <h4 class="media-heading"><a
                                                    href="<?php echo e(route('posts.show',['alias' => $post->alias])); ?>"><?php echo e($post->title ?? ''); ?></a>
                                        </h4>
                                    </div>
                                </div>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>

                </div>

            </div>
            <a class="btn btn-theme btn-theme-transparent btn-theme-sm btn-block" href="#">
                <?php echo e(__('MorePosts')); ?>

            </a>
        </div>
    </div>
<?php endif; ?>