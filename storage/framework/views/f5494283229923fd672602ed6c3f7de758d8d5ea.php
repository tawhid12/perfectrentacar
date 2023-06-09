<div class="container-fluid">
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> <?php echo e(trans_choice('admin.Plugins',1)); ?>    </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">

                    <div class="panel-body">

                        <div id="resss"></div>


                        <form id="media_uploader" class="dropzone"
                              action="<?php echo e(route('admin.plugins.store')); ?>" method="POST"
                              enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="preview">

                                <div class="fallback">
                                    <input name="file" type="file" multiple/></div>

                                <div class="dz-message" data-dz-message><span>
                                       <?php echo e(__('admin.Drop zip plugin file here to upload')); ?>

                                            </span></div>


                            </div>
                        </form>

                        <br>


                        <div class="tablenav row clearfix ">

                            <label for="bulk-action-selector-top"
                                   class="screen-reader-text col-md-12"><?php echo e(__('admin.Select bulk action')); ?>

                            </label>
                            <div class=" actions bulkactions clearfix ">


                                <div class="col-md-3">


                                    <select class="form-control" name="action" id="bulk-action-selector-top">
                                        <option value="-1"><?php echo e(__('admin. Bulk Actions')); ?>

                                        </option>
                                        <option value="activate"><?php echo e(__('admin.Activate')); ?>

                                        </option>
                                        <option value="deactivate"><?php echo e(__('admin.Deactivate')); ?>

                                        </option>
                                        
                                        <option value="delete"><?php echo e(__('admin.Delete')); ?>

                                        </option>
                                    </select>

                                </div>

                                <div class="col-md-1">
                                    <div class="row">
                                        <button type="submit" id="doaction"
                                                class="button  doaction  btn btn-info action">
                                            <?php echo e(__('admin.Apply')); ?>

                                        </button>
                                    </div>


                                </div>
                            </div>
                            <br>

                        </div>
                        <div class="table-responsive ">
                            <table class="table color-table purple-table">
                                <thead>
                                <tr>

                                    <th>
                                        <input type="checkbox" class="check selectAll"
                                               data-checkbox="icheckbox_square-green">
                                    </th>
                                    <th><?php echo e(__('admin.Plugin')); ?></th>
                                    <th><?php echo e(__('admin.Actions')); ?></th>
                                    <th><?php echo e(__('admin.Description')); ?></th>


                                </tr>
                                </thead>

                                <tbody>

                                <?php if($plugins ?? false): ?>
                                    <?php $__currentLoopData = $plugins; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plugin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr data-alias="<?php echo e($plugin['pathname'] ?? ''); ?>"
                                            <?php if($plugin['activated'] ?? false): ?> class="success" <?php endif; ?> >
                                        <?php echo $__env->make( 'admins.'.config('settings.admin').'.plugins.item', ['plugin' => $plugin ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php endif; ?>


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            jQuery(document).ready(function ($) {

                var body = $("body");
                body.on("change", ".selectAll", function (e) {
                    var table = $(e.target).closest('table');
                    //  alert(1);

                    $('input:checkbox').prop('checked', this.checked).iCheck('update');


                });

                $('input').on('ifChanged', function (event) {
                    $(event.target).trigger('change');
                });


                body.on("click", ".activated_plugin", function (e) {

                    e.preventDefault();
                    activatePlugin($(this));
                });


                body.on("click", ".deactivate_plugin", function (e) {

                    e.preventDefault();
                    deactivatePlugin($(this));


                });
                body.on("click", ".delete_plugin", function (e) {

                    e.preventDefault();
                    if (!confirm("<?php echo e(__('admin.Are you sure want delete plugin?')); ?>  " + $(this).data('alias'))) return;

                    deletePlugin($(this));


                });


                body.on("click", ".doaction", function (e) {

                    e.preventDefault();
                    var val = $('#bulk-action-selector-top').val();

                    //    if(val == 'deactivate') {
                    $('input:checkbox.check-plugins').each(function (e) {

                        if ($(this).is(':checked')) {
                            if (val == 'deactivate') {

                                deactivatePlugin($(this).closest('tr').find('.deactivate_plugin '));
                            }
                            else if (val == 'activate') {
                                //  console.log(($(this).closest('tr').find('.activated_plugin').data('alias')));
                                activatePlugin($(this).closest('tr').find('.activated_plugin'));
                            }
                            else if (val == 'delete') {
                                delete_plugin = $(this).closest('tr').find('.delete_plugin');
                                if (!($(this).closest('tr').hasClass('success') && $(delete_plugin).css('display') == 'none')) {
                                    deletePlugin(delete_plugin);
                                }


                            }

                        }

                    });


                });


                function deactivatePlugin(this_v) {
                    $('.preloader').show().css('opacity', '0.3');

                    console.log('deactivatePlugin');
                    var data = {};
                    data.alias = this_v.data('alias');
                    data.deactivate = true;


                    $.ajax({
                        url: '<?php echo e(route('admin.plugins.store')); ?>',
                        type: 'POST', // replaced from put
                        data: data,
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (r) {
                            var returnedData = JSON.parse(r);

                            $('.preloader').hide();
                            if (returnedData.status == 1) {
                                this_v.hide();
                                this_v.fadeOut().closest('tr').removeClass('success').find('.ribbon').fadeOut()
                                    .closest('tr').find('.deactivate_plugin').fadeOut()
                                    .closest('tr').find('.delete_plugin').fadeIn()
                                    .closest('tr').find('.activated_plugin').fadeIn();
                                $('.preloader').hide();

                            } else {
                                alert('<?php echo e(__('admin.some error occurred.')); ?>');
                                console.log(returnedData);
                            }
                            $('.preloader').hide();


                        },
                        error: function (msg) {
                            $('.preloader').hide();
                            alert('<?php echo e(__('admin.some error occurred.')); ?>');
                            console.log(msg);
                        }
                    });
                }

                function activatePlugin(this_v) {
                    $('.preloader').show().css('opacity', '0.3');
                    console.log('activatePlugin');
                    var data = {};
                    data.alias = this_v.data('alias');
                    $.ajax({
                        url: '<?php echo e(route('admin.plugins.store')); ?>',
                        type: 'POST', // replaced from put
                        data: data,
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (r) {
                            var returnedData = JSON.parse(r);

                            $('.preloader').hide();
                            if (returnedData.status == 1) {
                                this_v.hide();
                                this_v.fadeOut().closest('tr').addClass('success').find('.ribbon').fadeIn()
                                    .closest('tr').find('.deactivate_plugin').fadeIn()
                                    .closest('tr').find('.delete_plugin').hide();

                            } else {
                                alert('<?php echo e(__('admin.some error occurred.')); ?>');
                                console.log(returnedData);
                            }
                            $('.preloader').hide();
                        },
                        error: function (msg) {
                            $('.preloader').hide();
                            var error = '';
                            if(msg.responseJSON.message){
                                error = msg.responseJSON.message;
                            }
                            alert('<?php echo e(__('admin.some error occurred.')); ?> ' + error);
                            console.log(msg);
                        }
                    });
                }

                function deletePlugin(this_v) {

                    $('.preloader').show().css('opacity', '0.3');

                    var data = {};
                    data.alias = this_v.data('alias');
                    data.delete = true;


                    $.ajax({
                        url: '<?php echo e(route('admin.plugins.store')); ?>',
                        type: 'POST', // replaced from put
                        data: data,
                        headers: {
                            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (r) {
                            var returnedData = JSON.parse(r);
                            console.log(returnedData);
                            $('.preloader').hide();
                            if (returnedData.status == 1) {
                                this_v.hide();
                                this_v.closest('tr').fadeOut().remove();
                                /* this_v.fadeOut().closest('tr').removeClass('success').find('.ribbon').fadeOut()
                                     .closest('tr').find('.deactivate_plugin').fadeOut()
                                     .closest('tr').find('.delete_plugin').fadeIn()
                                     .closest('tr').find('.activated_plugin').fadeIn();
                                 $('.preloader').hide();*/

                            }
                            $('.preloader').hide();


                        },
                        error: function (msg) {
                            $('.preloader').hide();
                        }
                    });
                }


                var myDropzone1;
                jQuery("#media_uploader").dropzone({
                    acceptedFiles: 'application/x-zip-compressed',

                    init: function () {

                        this.on("complete", function (file) {
                            console.log(file);

                            obj = JSON.parse(file.xhr.response);

                            if (typeof obj.plugin !== 'undefined') {
                                var flag = false;
                                $('tr').each(function () {

                                    if ($(this).data('alias') == obj.location) {
                                        flag = true;
                                    }
                                });

                                if (!flag) {
                                    $('table').append(obj.plugin);
                                    $('input:checkbox.check-plugins').iCheck({
                                        checkboxClass: 'icheckbox_flat-green',
                                        radioClass: 'iradio_flat-green'
                                    });

                                }


                                // your code here

                            }

                        });
                        myDropzone1 = this;


                    }
                });

            });
        </script>

