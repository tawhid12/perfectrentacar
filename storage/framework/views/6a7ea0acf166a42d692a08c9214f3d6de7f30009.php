<div class="container-fluid">
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> Sliders</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <div class="form-group row">
                            <div class="col-md-9">
                                <a href="<?php echo e(route('admin.posts.create')); ?>" type="submit"
                                   class="btn  btn-success btn-lg"><i
                                            class="fa fa-user-plus"></i>
                                    Add New Slider
                                </a>
                            </div>

                            <div class="col-md-3 col-xs-12 pull-right">
                                <form action="<?php echo e(route('admin.posts.index')); ?>" method="GET">
                                    <div class="row">

                                        <div class="input-group">
                                            <input name="search" value="<?php echo e($request->search ?? ''); ?>" type="text"
                                                   class="form-control" placeholder="Search"/>
                                            <div class="input-group-btn">
                                                <button class="btn btn-primary" type="submit">
                                                    <span class="glyphicon glyphicon-search"></span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>
                                </form>


                            </div>

                        </div>
                        <?php if($request->search ?? false): ?>
                            <h3><?php echo e(__('Search result for'). ' "'. $request->search . '"'); ?>  </h3>
                        <?php endif; ?>

                        <div class="table-responsive ">


                            <table class="table product-overview " id="myTable">
                                <thead>
                                <tr>
                                    <th><?php echo e(__('admin.Title')); ?></th>
                                    <th><?php echo e(__('admin.Categories')); ?></th>
                                    <th><?php echo e(__('admin.Author')); ?>

                                    </th>
                                    <th> <?php echo e(__('admin.Tags')); ?></th>
                                    <th><i class="ti-comment-alt"></i></th>
                                    <th><?php echo e(__('admin.Date')); ?></th>
                                    <th><?php echo e(__('admin.Status')); ?></th>
                                    <th><?php echo e(__('admin.Actions')); ?></th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php if(isset($posts) && is_object($posts)): ?>
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $__env->make( 'admins.'.config('settings.admin').'.posts.post_item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                <?php endif; ?>
                                </tbody>
                            </table>

                            <?php if($posts->isEmpty()): ?>
                             <h6><?php echo e(__('admin.Nothing found...')); ?></h6>
                            <?php endif; ?>

                        </div>


                        <!-- /Blog posts -->

                        <!-- Pagination -->
                        <div class="pagination-wrapper">
                            <ul class="pagination">
                                <?php if($posts->currentPage() !== 1): ?>
                                    <li class="disabled"><a href="<?php echo e($posts->url(($posts->currentPage() - 1))); ?>">
                                            <i class="fa fa-angle-double-left"></i></a></li>

                                <?php endif; ?>

                                <?php for($i = 1; $i <= $posts->lastPage(); $i++): ?>
                                    <?php if($posts->currentPage() == $i): ?>

                                        <li class="active"><a href="#"><?php echo e($i); ?>

                                                <span class="sr-only"></span></a>
                                        </li>
                                    <?php else: ?>

                                        <li><a href="<?php echo e($posts->url($i)); ?>"><?php echo e($i); ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>

                                <?php if($posts->currentPage() !== $posts->lastPage()): ?>

                                    <li><a href="<?php echo e($posts->url(($posts->currentPage() + 1))); ?>"> <i
                                                    class="fa fa-angle-double-right"></i></a></li>
                                <?php endif; ?>

                            </ul>
                        </div>
                        <!-- /Pagination -->


                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script>
    $(document).ready(function () {


        $("body").on("click", ".delete_post", function (e) {

            e.preventDefault();
            $('.preloader').show().css('opacity', '0.3');
            var this_v = $(this);

            $.ajax({
                url: '<?php echo e(route('admin.posts.index')); ?>/' + $(this).data('id'),
                type: 'delete', // replaced from put
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (r) {
                    $(this_v).closest('tr').remove();
                    $('.preloader').hide();
                },
                error: function (msg) {
                    $('.preloader').hide();
                }
            });
        });


        $("body").on("click", "a.clone_post", function (e) {

            e.preventDefault();
            $('.preloader').show().css('opacity', '0.3');
            var this_v = $(this);


            $.ajax({
                url: this_v.attr('href'),
                type: 'post', // replaced from put
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (r) {
                    $('.preloader').hide();
                    //  $('.result').html(r);
                    this_v.closest('tr').before(r);
                    //      $('.products-items').append(r);
                    console.log(r);
                },
                error: function (msg) {
                    $('.preloader').hide();
                }
            });
        });

    });

</script>