<div class="container-fluid">
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"><?php echo e(__(" Products")); ?></div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">


                        <div class="form-group row">
                            <div class="col-md-9">
                                <a href="<?php echo e(route('admin.products.create')); ?>" type="submit"
                                   class="btn  btn-success btn-lg"><i class="fa fa-user-plus"></i>
                                    <?php echo e(__('Add new Product')); ?>

                                </a>
                            </div>

                            <div class="col-md-3 col-xs-12 pull-right">
                                <form action="<?php echo e(route('admin.products.index')); ?>" method="GET">
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
                                    <th><?php echo e(__("Name")); ?></th>
                                    <th><?php echo e(__("Categories")); ?></th>
                                    <th><?php echo e(__("Price")); ?></th>
                                    <th><?php echo e(__("Tags")); ?></th>
                                    <th><?php echo e(__("Date")); ?></th>
                                    <th><?php echo e(__("Status")); ?></th>
                                    <th><?php echo e(__("Actions")); ?></th>
                                </tr>
                                </thead>
                                <tbody class="products-items">


                                <?php if(isset($products) && is_object($products)): ?>
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo $__env->make( 'plugin:eCommerce::products.product_item', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php endif; ?>
                                </tbody>
                            </table>

                            <?php if($products->isEmpty()): ?>
                                <h6><?php echo e(__('admin.Nothing found...')); ?></h6>
                            <?php endif; ?>


                        </div>      <!-- Pagination -->
                        <div class="pagination-wrapper">
                            <ul class="pagination">
                                <?php if($products->currentPage() !== 1): ?>
                                    <li class="disabled"><a href="<?php echo e($products->url(($products->currentPage() - 1))); ?>">
                                            <i class="fa fa-angle-double-left"></i></a></li>

                                <?php endif; ?>

                                <?php for($i = 1; $i <= $products->lastPage(); $i++): ?>
                                    <?php if($products->currentPage() == $i): ?>

                                        <li class="active"><a href="#"><?php echo e($i); ?>

                                                <span class="sr-only"></span></a>
                                        </li>
                                    <?php else: ?>

                                        <li><a href="<?php echo e($products->url($i)); ?>"><?php echo e($i); ?></a></li>
                                    <?php endif; ?>
                                <?php endfor; ?>

                                <?php if($products->currentPage() !== $products->lastPage()): ?>

                                    <li><a href="<?php echo e($products->url(($products->currentPage() + 1))); ?>"> <i
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


        $("body").on("click", ".delete_product", function (e) {
            var this_v = $(this);
            swal({
                title: "<?php echo e(__('admin.Product will be deleted permanently!')); ?>",
                text: "<?php echo e(__('admin.Are you sure to proceed?')); ?>",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "<?php echo e(__('admin.Yes, Remove Product!')); ?>",
                cancelButtonText: "<?php echo e(__('admin.No, I am not sure!')); ?>",
                // closeOnConfirm: false,
                // closeOnCancel: false
            }).
            then(function (isConfirm) {


                // alert(isConfirm);
                if (isConfirm.value) {

                    e.preventDefault();
                    $('.preloader').show().css('opacity', '0.3');


                    $.ajax({
                        url: '<?php echo e(route('admin.products.index')); ?>/' + this_v.data('id'),
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
                    })
                }


            });
        });

        $("body").on("click", "a.clone_product", function (e) {

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
                    $('.products-items').append(r);
                    console.log(r);
                },
                error: function (msg) {
                    $('.preloader').hide();
                }
            });
        });
    });

</script>