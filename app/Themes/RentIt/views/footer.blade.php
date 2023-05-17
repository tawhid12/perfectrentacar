<footer class="footer">


    @if(!isset($hide_widgets) || $hide_widgets == false )
        <div class="footer-widgets">
            <div class="container">
                <div class="row">

                    <!-- widget search -->
                    @if( app('BaseCms')->dynamicSidebar('rentit-footer-sidebar'))
                        @dynamic_sidebar('rentit-footer-sidebar')
                    @endif


                </div>
            </div>
        </div>
    @endif

    <div class="footer-meta">
        <div class="container">
            <div class="row">

                <div class="col-sm-12">
                    <p class="btn-row text-center">

						
                    <div class="copyright">
                        {{get_theme_mod('footer_copyright', '©'.  date('Y', time()) . '  Rent It — An One Page Rental Car Theme made with passion by jThemes Studio')}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>
