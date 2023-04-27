<div class="container-fluid">
    <!-- /.row -->


    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <?php echo e((isset($page->id)) ?  __('admin.Edit Page') :  __('admin.Add Page')); ?>


                </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">

                        <form method="post"
                              action="<?php echo e((isset($page->id)) ? route('admin.pages.update',['pages'=>$page->id]) : route('admin.pages.store')); ?>">

                            <?php if(isset($page->id)): ?>
                                <input type="hidden" name="_method" value="PUT">

                            <?php endif; ?>

                            <div class="form-body">
                                <?php if(count($errors) > 0): ?>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="alert alert-danger"><?php echo e($error); ?></div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>

                                    </div>
                                <?php endif; ?>

                                <?php if(session('status')): ?>
                                    <div class="row">
                                        <div class="col-md-12">


                                            <div class=" alert alert-success"><?php echo e(session('status')); ?></div>


                                        </div>
                                    </div>


                                <?php endif; ?>

                                <div class="col-md-9">
                                    <h3 class="box-title"><?php echo e(__('admin.About Page')); ?></h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label"> <?php echo e(__('admin.Page Name')); ?></label>
                                                <input type="text" id="firstName" class="form-control"
                                                       name="title" placeholder="<?php echo e(__('admin.Page Name')); ?>"

                                                       value="<?php echo e(old('title', isset($page->title) ? $page->title : '' )); ?>"
                                                ></div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-6">
                                            <div class="">
                                                <label class="control-label"> <?php echo e(__('admin.Permalink:')); ?>


                                                    <?php if(isset($page->id)): ?>

                                                        <a class="" target="_blank"
                                                           href="<?php echo e(route('pages.show',['alias' => $page->alias])); ?>"><?php echo e(route('pages.show',['alias' => $page->alias])); ?></a>

                                                    <?php endif; ?>
                                                </label>

                                            </div>
                                            <input name="alias" type="text" id="alias" class="form-control"
                                                   placeholder=""
                                                   value="<?php echo e(old('alias', isset($page->alias) ? $page->alias : '' )); ?>"

                                            ></div>


                                        <!--/span-->
                                    </div>
                               
                                    <div class="form-group">
                                        <h3 class="box-title m-t-40"> <?php echo e(__('admin.Page Description')); ?></h3>
                                        <div class="row">
                                            <div class="col-md-12 ">

                                                <div class="form-group  text-editor-full">
                                                    <textarea name="text" class="text form-control"
                                                              rows="40"><?php echo e(old('text', isset($page->text) ? $page->text : '' )); ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>





                                </div>
                                <!--->
                                <div class="col-md-3">

                                    <div class="clearfix ">
                                        <div class="form-actions m-t-40">
                                            <button type="submit" class="btn btn-block btn-success btn-lg"><i
                                                        class="fa fa-check"></i>

                                                <?php if(isset($page->id) ): ?>

                                                    <?php echo e(__('admin.update')); ?>

                                                <?php else: ?>

                                                    <?php echo e(__('admin.save')); ?>

                                                <?php endif; ?>
                                            </button>

                                        </div>
                                        <br><br>
                                    </div>
                                    <div class="">


                                        <!--/span-->
                                        <div class="form-group">
                                            <div class="input-group">
                                                <label for="scheduled_publication" class="control-label"><strong>
                                                        <?php echo e(__('admin.Scheduled publication')); ?>


                                                    </strong> </label>
                                                <input id="scheduled_publication"
                                                       type="text"
                                                       name="published_at"
                                                       value="<?php echo e(isset($page->published_at ) ? $page->published_at->format('m/d/Y H:i') : ''); ?>"

                                                       class="form-control mydatepicker"
                                                       placeholder="mm/dd/yyyy">


                                            </div>
                                        </div>


                                        <div class="">
                                            <div class="form-group">
                                                <label class="control-label"><strong> <?php echo e(__('admin.Status')); ?></strong></label>
                                                <div class="radio-list">
                                                    <label class="radio-inline p-0">
                                                        <div class="radio radio-info">
                                                            <input <?php echo e(isset($page->status ) ? checked($page->status, 'published') : ''); ?> type="radio"
                                                                   name="status"
                                                                   id="radio1"
                                                                   value="published">
                                                            <label for="radio1"><?php echo e(__('admin.Published')); ?></label>
                                                        </div>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <div class="radio radio-info">
                                                            <input <?php echo e(isset($page->status ) ?  checked($page->status, 'draft') : ''); ?>

                                                                   type="radio" name="status" id="radio2"
                                                                   value="draft">
                                                            <label for="radio2"><?php echo e(__('admin.Draft')); ?></label>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/span-->
                                    </div>
                                    <div class="">
                                        <div class="">
                                            <div class="form-group">
                                                <label><strong> <?php echo e(__('admin.Meta Description')); ?></strong></label>
                                                <input type="text"
                                                       value="<?php echo e(old('meta_desc', isset($page->meta_desc) ? $page->meta_desc : '' )); ?>"
                                                       name="meta_desc" class="form-control"></div>
                                        </div>
                                        <!--/span-->
                                        <div class="=">
                                            <div class="form-group">
                                                <label><strong> <?php echo e(__('admin.Meta Keyword')); ?> </strong</label>
                                                <input
                                                        value="<?php echo e(old('keywords', isset($page->keywords) ? $page->keywords : '' )); ?>"

                                                        type="text" name="keywords" class="form-control"></div>
                                        </div>
                                        <div class="=">


                                            <div class=" ">
                                                <label
                                                        for="rentit_disable_footer">
                                                    <?php echo e(__('admin.Disable widgets in footer?')); ?></label>



                                                <input <?php echo e(checked($page_meta['rentit_disable_footer'] ?? '', 'on')); ?> type="checkbox" class="check check-plugins" name="rentit_disable_footer"

                                                       data-checkbox="icheckbox_square-green">


                                        </div>




                                        </div>
                                        <!--/span-->
                                        <div class="">
                                            <h3 class="box-title m-t-20">
                                                <strong><?php echo e(__('admin.Featured Image')); ?> </strong></h3>
                                            <div class="product-img">

                                                <?php if(isset($page->img)): ?>
                                                    <img class="img-responsive"
                                                         src="<?php echo e(the_image_url($page->img,'thumbnail-260x260')); ?>">
                                                    <input type="hidden" name="img" value="<?php echo e($page->img); ?>"
                                                           class="featured_image_id">
                                                <?php else: ?>
                                                    <img class="img-responsive"
                                                         src="<?php echo e(asset(config('settings.admin'))); ?>/plugins/images/placeholder.png">
                                                    <input type="hidden" name="img" value="" class="featured_image_id">
                                                <?php endif; ?>


                                                <br>
                                                <br>
                                                <div
                                                        class="set_media fileupload btn btn-info waves-effect waves-light">
                                                    <span><i class="ion-upload m-r-5"></i> <?php echo e(__('admin.Set featured Image')); ?> </span>
                                                    
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                                <!--/row-->


                                <!--/row-->

                                <hr>
                            </div>
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>

<style></style>
<?php  $tags_arr = [];
$tags_arr = [];
if ( isset( $tags ) ) {
	foreach ( $tags as $tag ) {
		$tags_arr[] = '"' . $tag->title . '"';
	}
}
$obj = implode( ',', $tags_arr );
?>
<script>
    // $(document).ready(function () {


    jQuery(document).ready(function ($) {

        var data = [<?php echo $obj; ?>];

        var states = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: data
        });
        states.initialize();

        $(".Page-tag").tagsinput({
            allowDuplicates: true,
            typeaheadjs: {
                name: "states",
                source: states.ttAdapter()
            },
            freeInput: true
        });

        $('.Page-tag').tagsinput('refresh');


        ///////////////////////////////

        $('.cat-group').slimScroll({
            height: '250px'
        });
        $('#scheduled_publication').datetimepicker({
            format: "MM/DD/YYYY H:mm",
        });


        /*
         upload image
         */

        $('.set_media').click(function (e) {
            mediaLibrary.open();
            var button = $(this);
            $('#mediaLibrary-modal').on('mediaLibrary.stateChange', function (e, img_id, img_src) {
                var  img_f =  button.closest('.product-img');
                img_f.find('img').attr('src',img_src);
                img_f.find('input').val(img_id);
            });
        });


        ////////////////////////////////////////////////

    });


    tinymce.init({
        selector: 'textarea.text',
        height: 500,
        valid_elements : '*[*]',
        extended_valid_elements : '*[*]',
        plugins: 'paste print preview   searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools    contextmenu colorpicker textpattern help',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
        image_advtab: true,
        images_upload_url: 'PageAcceptor.php',
        toolbar: "paste",
        paste_data_images: true,
        images_upload_handler: function (blobInfo, success, failure) {
            var formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.blob().name);
            formData.append('tiny_uploader', '1');

            $.ajax({
                url: '<?php echo e(route('admin.media.store')); ?>',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                data: formData,
                processData: false,
                contentType: false,
                type: 'Page',
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    success(obj.location);
                    console.log(obj.location);

                }
            });
        },


    });


</script>