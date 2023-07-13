<?php echo $__env->make('theme:rentit::layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- /HEADER -->

<!-- CONTENT AREA -->
<div class="content-area pb-edit-content" data-p-id="<?php echo e(app( 'request' )->route()->controller->page_id ?? ''); ?>">

  <?php echo $content ?? ''; ?>


</div>
<!-- /CONTENT AREA -->

<!-- FOOTER -->
<?php echo $__env->make('theme:rentit::footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- /FOOTER -->

<div id="to-top" class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /WRAPPER -->

<?php echo $lr_footer ?? ''; ?>

</body>
</html>