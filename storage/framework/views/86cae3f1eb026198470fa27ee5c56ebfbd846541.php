<div class="row el-element-overlay m-b-20">

    <div class="col-md-12">
        <div id="resss"></div>
        <div class="white-box">

            <form id="media_uploader" class="dropzone"
                  action="<?php echo e(route('admin.media.store')); ?>" method="post"
                  enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <div class="preview">

                    <div class="fallback">
                        <input name="file" type="file" multiple/></div>


                    <div class="col-md-12 media_container">
                        <?php echo $medias ?? ''; ?>

                    </div>


                </div>
            </form>
        </div>
    </div>
</div>