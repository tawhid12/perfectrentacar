<?php if($products && $products->total() > 0): ?>


    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php        $product_meta = getProductMetas( $product );?>



        <div class="thumbnail no-border no-padding thumbnail-car-card clearfix ">
            <div class="media">

                <?php if(isset($product->img) && $product->img > 0): ?>
                    <a class="media-link" href="<?php echo e(the_image_url($product->img)); ?>" data-gal="prettyPhoto">
                        <img src="<?php echo e(the_image_url($product->img,'thumbnail-370x220')); ?>">
                    </a>

                <?php endif; ?>
            </div>
            <div class="caption">
                <div class="rating">
	                <?php
	                $star_active =  $product_meta['product_stars'] ?? 5;
	                $star        = 5 - $star_active;
	                echo ( str_repeat( ' <span class="star"></span>', $star ) );
	                echo ( str_repeat( ' <span class="star active"></span>', $star_active ) );	                ?>

                </div>
                <h4 class="caption-title"><a
                            href="<?php echo e(route('products.show',['products'=> $product->alias ])); ?>"><?php echo e($product->title ?? ''); ?></a>
                </h4>
                <h5 class="caption-title-sub"><?php echo str_replace('%price%',ec_price($product->final_cost ?? $product->price),
                get_theme_mod('rentit_product_list_price_format',__('Start from %price% /per a day'))); ?>

                </h5>
                <div class="caption-text">
                    <?php echo $product->desc; ?></div>


                <table class="table">
                    <tbody>
                    <tr>
						<?php
						if($product_meta['product_icons'] ?? false) {
						    $product_icons = unserialize( $product_meta['product_icons'] );


						    if ( is_array( $product_icons ) && $product_icons['icon'] ?? false && $product_icons['text'] ?? false) {
						    $product_icons = array_combine( $product_icons['icon'], $product_icons['text'] );


						    $j = 0;
						        foreach ( $product_icons as $k => $text ) {  ?>
                                     <td><i class="fa <?php echo e($k); ?>"></i> <?php echo e($text); ?></td>
						        <?php
						         }
						    }
						}
						?>

                        <td class="buttons"><a class="btn btn-theme"
                                               href="<?php echo e(route('products.show',['products'=> $product->alias ])); ?>">
                                <?php echo e(get_theme_mod('rentit_rent_it',__('Rent It'))); ?>


                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>



    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
    <h1><?php echo e(__('By your request products not found, try again')); ?></h1>
<?php endif; ?>




<!-- /Blog posts -->
<?php if($products->lastPage() > 1): ?>
    <!-- Pagination -->
    <div class="pagination-wrapper">
        <ul class="pagination">
            <?php if($products->currentPage() !== 1): ?>
                <li class="disabled"><a href="<?php echo e($products->url(($products->currentPage() - 1))); ?>">
                        <i class="fa fa-angle-double-left"></i><?php echo e(__('Previous')); ?> </a></li>

            <?php endif; ?>

            <?php for($i = 1; $i <= $products->lastPage(); $i++): ?>
                <?php if($products->currentPage() == $i): ?>

                    <li class="active"><a href="#"><?php echo e($i); ?>

                            <span class="sr-only">(current)</span></a>
                    </li>
                <?php else: ?>

                    <li><a href="<?php echo e($products->url($i)); ?>"><?php echo e($i); ?></a></li>
                <?php endif; ?>
            <?php endfor; ?>

            <?php if($products->currentPage() !== $products->lastPage()): ?>

                <li><a href="<?php echo e($products->url(($products->currentPage() + 1))); ?>"><?php echo e(__('Next')); ?> <i
                                class="fa fa-angle-double-right"></i></a></li>
            <?php endif; ?>

        </ul>
    </div>
    <!-- /Pagination -->
<?php endif; ?>


