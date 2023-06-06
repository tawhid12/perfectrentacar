<footer class="footer">


    <?php if(!isset($hide_widgets) || $hide_widgets == false ): ?>
        <div class="footer-widgets">
            <div class="container">
                <div class="row">

                    <!-- widget search -->
                    <?php if( app('BaseCms')->dynamicSidebar('rentit-footer-sidebar')): ?>
                        <?php echo app('BaseCms')->dynamicSidebar('rentit-footer-sidebar'); ?>
                    <?php endif; ?>


                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="footer-meta">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <p class="btn-row text-center">

						
                    <div class="copyright">
                        <?php echo e(get_theme_mod('footer_copyright', '©'.  date('Y', time()) . '  Rent It — An One Page Rental Car Theme made with passion by jThemes Studio')); ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
