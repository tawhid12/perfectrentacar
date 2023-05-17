<footer class="footer">


    <?php if(!isset($hide_widgets) || $hide_widgets == false ): ?>
        
    <?php endif; ?>

    <div class="footer-meta">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    {{--<p class="btn-row text-center">

						<?php
						if(get_theme_mod( 'footer_enable_social_buttons', true )){
						$all_arr = get_theme_mod( 'footer_social_buttons' );
						$new_arr = [];
						if ( $all_arr['url'] ?? false ) {
						foreach ( $all_arr['url'] as $k => $v ) {
						?>
                        <a target="_blank" href="<?php echo e($all_arr['url'][$k] ?? ''); ?>"
                           class="btn btn-theme btn-icon-left <?php echo e($all_arr['type'][$k] ?? ''); ?>">
                            <i class="fa <?php echo e($all_arr['icon'][$k] ?? ''); ?>"></i><?php echo e($all_arr['text'][$k] ?? ''); ?>

                        </a>

						<?php

						}
						}
						}
						?>

                    </p>--}}
                    <div class="copyright">
                        <?php echo e(get_theme_mod('footer_copyright', '©'.  date('Y', time()) . '  Rent It — An One Page Rental Car Theme made with passion by jThemes Studio')); ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
