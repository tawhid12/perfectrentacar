<div class="container-fluid">
    <!-- /.row -->


    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css">

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <?php echo e((isset($post->id)) ? 'Edit Slide' : 'Add Slide'); ?>


                </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">

                        <form method="post"
                              action="<?php echo e((isset($post->id)) ? route('admin.posts.update',['posts'=>$post->id]) : route('admin.posts.store')); ?>">

                            <?php if(isset($post->id)): ?>
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
                                    <h3 class="box-title">Slide Details</h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Slide</label>
                                                <input type="text" id="firstName" class="form-control"
                                                       name="title" placeholder="Slide Name"

                                                       value="<?php echo e(old('title', isset($post->title) ? $post->title : '' )); ?>"
                                                ></div>
                                        </div>
                                        <!--/span-->
                                        <!-- <div class="col-md-6">
                                            <div class="">
                                                <label class="control-label"> <?php echo e(__('admin.Permalink:')); ?>


                                                    <?php if(isset($post->id)): ?>

                                                        <a class="" target="_blank"
                                                           href="<?php echo e(route('posts.show',['alias' => $post->alias])); ?>"><?php echo e(route('posts.show',['alias' => $post->alias])); ?></a>

                                                    <?php endif; ?>
                                                </label>

                                            </div>
                                            <input name="alias" type="text" id="alias" class="form-control"
                                                   placeholder=""
                                                   value="<?php echo e(old('alias', isset($post->alias) ? $post->alias : '' )); ?>"

                                            ></div> -->


                                        <!--/span-->
                                    </div>
                                    <!-- <div class="form-group">
                                        <h3 class="box-title m-t-40"> <?php echo e(__('admin.Post Short Description')); ?></h3>
                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group">
                                                    <textarea name="desc" class="desc form-control"
                                                              rows="4"><?php echo e(old('desc', isset($post->desc) ? $post->desc : '' )); ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <h3 class="box-title m-t-40"> <?php echo e(__('admin.Post Description')); ?></h3>
                                        <div class="row">
                                            <div class="col-md-12 ">

                                                <div class="form-group  text-editor-full">
                                                    <textarea name="text" class="text form-control"
                                                              rows="4"><?php echo e(old('text', isset($post->text) ? $post->text : '' )); ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <h3 class="box-title m-t-40"><?php echo e(__('admin.Add tags')); ?></h3>

                                    <div class="tags-default">
                                        <input name="tags" style="width: 100%" class="post-tag form-grup" type="text"
                                               value="<?php echo $attached_tag ?? ''; ?>"
                                               placeholder="<?php echo e(__('admin.Add tags')); ?>"/>
                                    </div> -->


                                </div>
                                
                                <div class="col-md-3">

                                    <div class="clearfix ">
                                        <div class="form-actions m-t-40">
                                            <button type="submit" class="btn btn-block btn-success btn-lg"><i
                                                        class="fa fa-check"></i>

                                                <?php if(isset($post->id) ): ?>

                                                    <?php echo e(__('admin.update')); ?>

                                                <?php else: ?>

                                                    <?php echo e(__('admin.save')); ?>

                                                <?php endif; ?>
                                            </button>

                                        </div>
                                        <br><br>
                                    </div>
                                    <div class="">

                                        <!--<div class="">

                                            <div class="form-group  shadow-group ">
                                                <label class="control-label"><strong>  <?php echo e(__('admin.Select Category')); ?></strong></label>


                                                <?php if($category_list == '<ul class="category-group icheck-list"></ul>'): ?>

                                                    <a href="<?php echo e(route('admin.categories.index')); ?>"><?php echo e(__('admin.Add New Category')); ?></a>
                                                <?php else: ?>
                                                    <div class="cat-group">
                                                        <?php echo $category_list; ?>

                                                    </div>
                                                <?php endif; ?>


                                            </div>
                                        </div>-->
                                        <!--/span-->
                                        <!-- <div class="form-group">
                                            <div class="input-group">
                                                <label for="scheduled_publication" class="control-label"><strong>
                                                        <?php echo e(__('admin.Scheduled publication')); ?>


                                                    </strong> </label>
                                                <input id="scheduled_publication"
                                                       type="text"
                                                       name="published_at"
                                                       value="<?php echo e(isset($post->published_at ) ? $post->published_at->format('m/d/Y H:i') : ''); ?>"

                                                       class="form-control mydatepicker"
                                                       placeholder="mm/dd/yyyy">


                                            </div>
                                        </div> -->


                                        <div class="">
                                            <div class="form-group">
                                                <label class="control-label"><strong> <?php echo e(__('admin.Status')); ?></strong></label>
                                                <div class="radio-list">
                                                    <label class="radio-inline p-0">
                                                        <div class="radio radio-info">
                                                            <input <?php echo e(isset($post->status ) ? checked($post->status, 'published') : ''); ?> type="radio"
                                                                   name="status"
                                                                   id="radio1"
                                                                   value="published">
                                                            <label for="radio1"><?php echo e(__('admin.Published')); ?></label>
                                                        </div>
                                                    </label>
                                                    <label class="radio-inline">
                                                        <div class="radio radio-info">
                                                            <input <?php echo e(isset($post->status ) ?  checked($post->status, 'draft') : ''); ?>

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
                                        <!-- <div class="">
                                            <div class="form-group">
                                                <label><strong> <?php echo e(__('admin.Meta Description')); ?></strong></label>
                                                <input type="text"
                                                       value="<?php echo e(old('meta_desc', isset($post->meta_desc) ? $post->meta_desc : '' )); ?>"
                                                       name="meta_desc" class="form-control"></div>
                                        </div> -->
                                        <!--/span-->
                                        <!-- <div class="=">
                                            <div class="form-group">
                                                <label><strong> <?php echo e(__('admin.Meta Keyword')); ?> </strong</label>
                                                <input
                                                        value="<?php echo e(old('keywords', isset($post->keywords) ? $post->keywords : '' )); ?>"

                                                        type="text" name="keywords" class="form-control"></div>
                                        </div> -->
                                        <!--/span-->
                                        <div class="">
                                            <h3 class="box-title m-t-20">
                                                <strong><?php echo e(__('admin.Featured Image')); ?> </strong></h3>
                                            <div class="product-img">

                                                <?php if(isset($post->img)): ?>
                                                    <img class="img-responsive"
                                                         src="<?php echo e(the_image_url($post->img,'thumbnail-260x260')); ?>">
                                                    <input type="hidden" name="img" value="<?php echo e($post->img); ?>"
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

        $(".post-tag").tagsinput({
            allowDuplicates: true,
            typeaheadjs: {
                name: "states",
                source: states.ttAdapter()
            },
            freeInput: true
        });

        $('.post-tag').tagsinput('refresh');


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
                var img_f = button.closest('.product-img');
                img_f.find('img').attr('src', img_src);
                img_f.find('input').val(img_id);
            });
        });


        ////////////////////////////////////////////////

    });


    tinymce.init({
        selector: 'textarea.text',
        height: 500,
        //    theme: 'modern',
        plugins: 'paste print preview   searchreplace autolink directionality  visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools    contextmenu colorpicker textpattern help',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat',
        image_advtab: true,
        images_upload_url: 'postAcceptor.php',
        /*   menubar: "edit",'*/
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
                type: 'POST',
                success: function (data) {
                    var obj = jQuery.parseJSON(data);
                    success(obj.location);
                    console.log(obj.location);

                }
            });
        },


    });


</script>