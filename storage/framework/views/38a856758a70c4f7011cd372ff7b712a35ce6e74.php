<div class="container-fluid">
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> <?php echo e(__('admin.Pages')); ?></div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">


                        <div class="form-group row">
                            <div class="col-md-9">
                                <a href="<?php echo e(route('admin.pages.create')); ?>" type="submit" class="btn  btn-success btn-lg"><i class="fa fa-user-plus"></i>
                                    <?php echo e(__('admin.Add new Page')); ?>


                                </a>
                            </div>

                            <div class="col-md-3 col-xs-12 pull-right">
                                <form action="<?php echo e(route('admin.pages.index')); ?>" method="GET">
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

                                <?php if(isset($pages) && is_object($pages)): ?>
                                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



                                        <tr>
                                            <td>
                                                <a href="<?php echo e(route('admin.pages.edit',['pages'=>$post->id])); ?>">
                                                    <?php if($post->img > 0): ?>
                                                        <img src="<?php echo e(the_image_url($post->img,'thumbnail-260x260')); ?>"
                                                             alt="<?php echo e($post->title); ?>"
                                                             width="80">
                                                    <?php endif; ?>

                                                    <?php echo e($post->title); ?></a>
                                            </td>

                                            <td>
                                                
                                                
                                                
                                                <?php echo e($post->user->name); ?>

                                            </td>
                                            <td>....</td>
                                            <td>0</td>
                                            <td><?php echo e($post->created_at->format('d-m-Y') ?? ''); ?></td>
                                            <td><span class="label label-success font-weight-100"><?php echo e(__('admin.Published')); ?></span></td>
                                            <td>
                                                <a href="<?php echo e(route('admin.pages.edit',['pages'=>$post->id])); ?>"
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
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php endif; ?>
                                </tbody>
                            </table>
                            <?php if($pages->isEmpty()): ?>
                                <h6><?php echo e(__('admin.Nothing found...')); ?></h6>
                        <?php endif; ?>
                            <!-- Pagination -->
                            <div class="pagination-wrapper">
                                <ul class="pagination">
                                    <?php if($pages->currentPage() !== 1): ?>
                                        <li class="disabled"><a href="<?php echo e($pages->url(($pages->currentPage() - 1))); ?>">
                                                <i class="fa fa-angle-double-left"></i></a></li>

                                    <?php endif; ?>

                                    <?php for($i = 1; $i <= $pages->lastPage(); $i++): ?>
                                        <?php if($pages->currentPage() == $i): ?>

                                            <li class="active"><a href="#"><?php echo e($i); ?>

                                                    <span class="sr-only"></span></a>
                                            </li>
                                        <?php else: ?>

                                            <li><a href="<?php echo e($pages->url($i)); ?>"><?php echo e($i); ?></a></li>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <?php if($pages->currentPage() !== $pages->lastPage()): ?>

                                        <li><a href="<?php echo e($pages->url(($pages->currentPage() + 1))); ?>"> <i
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

</div>


<script>
    $(document).ready(function () {


        $("body").on("click", ".delete_post", function (e) {

            e.preventDefault();
            $('.preloader').show().css('opacity', '0.3');
            var this_v = $(this);

            $.ajax({
                url: '<?php echo e(route('admin.pages.index')); ?>/' + $(this).data('id'),
                type: 'delete', // replaced from put
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (r) {
                    res = JSON.parse(r);
                    if(res.deleted) {
                        $(this_v).closest('tr').remove();
                        $('.preloader').hide();
                    }
                },
                error: function (msg) {
                    $('.preloader').hide();
                }
            });
        });

    });

</script>