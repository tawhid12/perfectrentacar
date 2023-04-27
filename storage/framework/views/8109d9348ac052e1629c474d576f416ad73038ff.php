<div class="container-fluid">
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"><?php echo e(__("admin.General Settings")); ?></div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form method="post" action="<?php echo e(route('admin.options.store')); ?>" class="form-horizontal">
                            <?php echo csrf_field(); ?>
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

                            <div class="col-md-6">
                                <div class="">

                                    <h3 class="box-title m-b-0"><?php echo e(__("admin.GENERAL SETTINGS")); ?></h3>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12">


                                            <div class="form-group">
                                                <label for="blogname" class="col-sm-3 control-label"><?php echo e(__("admin.Site Title")); ?></label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="blogname"
                                                           class="form-control"
                                                           id="blogname"
                                                           value="<?php echo e(old('blogname', isset($options['blogname']) ? $options['blogname'] : '' )); ?>"
                                                    >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="blogdescription" class="col-sm-3 control-label"><?php echo e(__("admin.Tagline")); ?></label>
                                                <div class="col-sm-9">
                                                    <input type="text"
                                                           name="blogdescription"
                                                           class="form-control"
                                                           id="blogdescription"
                                                           value="<?php echo e(old('blogdescription', isset($options['blogdescription']) ? $options['blogdescription'] : '' )); ?>"
                                                    >


                                                    <small><?php echo e(__("admin.In a few words, explain what this site is about.")); ?></small>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="blogname" class="col-sm-3 control-label"><?php echo e(__("admin.Select title for seo")); ?></label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="seo_title"
                                                           class="form-control"
                                                           id="blogname"
                                                           value="<?php echo e(old('seo_title', isset($options['seo_title']) ? $options['seo_title'] : '%controller_title% > %site_title%' )); ?>"
                                                    >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="admin_email" class="col-sm-3 control-label"><?php echo e(__('admin.Admin Email*')); ?></label>
                                                <div class="col-sm-9">
                                                    <input
                                                            name="admin_email"
                                                            type="email"
                                                            class="form-control"
                                                            id="admin_email"
                                                            placeholder="Email"
                                                            value="<?php echo e(old('blogdescription', isset($options['admin_email']) ? $options['admin_email'] : '' )); ?>"
                                                    >
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="inputPassword4" class="col-sm-3 control-label"><?php echo e(__("admin.Default Site Language")); ?></label>
                                                <div class="col-sm-9">

                                                    <select name="LANG" id="WPLANG" class="form-control">
                                                        <optgroup label="Installed">

                                                            <?php $__currentLoopData = $available_langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                                <option value="<?php echo e($lang); ?>" lang="<?php echo e($lang); ?>"
                                                                        data-installed="1"
																<?php  selected($lang, getOption('LANG', 'en')) ?>><?php echo e($langs[$lang] ?? $lang); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                        </optgroup>

                                                    </select>
                                                </div>


                                            </div>


                                            <div class="form-group">
                                                <label for="admin_email" class="col-sm-3 control-label"><?php echo e(__("admin.Add custom language")); ?></label>
                                                <div class="col-sm-9">
                                                    <small>
                                                    </small>
                                                    <table id="langs-table"
                                                           class="table color-table purple-table">

                                                        <thead>
                                                        <tr>
                                                            <th><?php echo e(__("admin.Language code")); ?></th>
                                                            <th><?php echo e(__("admin.Language name")); ?></th>
                                                            <th></th>


                                                        </tr>
                                                        </thead>
                                                        <tbody class="langs-table">

														<?php
														try {



														?>
                                                        <?php if(is_array($custom_langs)): ?>

                                                            <?php $__currentLoopData = $custom_langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php echo $__env->make( 'admins.'.config('settings.admin').'.options.lang_item', compact('k','v'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
														<?php

														} catch ( Exception $e ) {

														}

														?>


                                                        </tbody>
                                                        <tfoot>

                                                        </tfoot>
                                                    </table>

                                                    <button data-tr='<?php echo $__env->make( 'admins.'.config('settings.admin').'.options.lang_item', [
                                                    'k' => '',
                                                    'v' => ''
                                                    ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>'
                                                            class="add-new-language btn btn-info waves-effect waves-light">
                                                        <span><i class="ion-upload m-r-5"></i><?php echo e(__("admin.Add new Language")); ?></span>

                                                    </button>
                                                </div>
                                            </div>


                                            <div class="form-group m-b-0">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-success"><i
                                                                class="fa fa-check"></i><?php echo e(__("admin.Save changes")); ?></button>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            
                            
                            
                            
                            
                            
                            

                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            

                            
                            


                            
                            
                            
                            
                            
                            
                            
                            


                            
                            
                            

                            
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>

<script>

    jQuery(document).ready(function ($) {


        $('.add-new-language').click(function (e) {
            e.preventDefault();
            $('.langs-table').append($(this).data('tr'));
        });


        $("body").on("click", ".btn-delete", function (e) {
            e.preventDefault();
            $(this).closest('tr').remove();
        });
    });

</script>