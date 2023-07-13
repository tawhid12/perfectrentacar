<?php if( $plugin ?? false): ?>
    <tr data-alias="<?php echo e($plugin['pathname'] ?? ''); ?>"  <?php if($plugin['activated'] ?? false): ?> class="success" <?php endif; ?> >
        <td>

            <input type="checkbox" class="check check-plugins" name="checked[]"
                   value="<?php echo e($plugin['pathname'] ?? ''); ?>"
                   data-checkbox="icheckbox_square-green">

        </td>
        <td class="col-md-3 ">

            <div class="form-group"
                 style="position: relative;     padding: 0px 5px 15px 50px;">


                <div <?php if(!($plugin['activated'] ?? false)): ?>  style="display: none;"
                     <?php endif; ?> class="ribbon ribbon-bookmark ribbon-vertical-l ribbon-success">
                    <i class="fa fa-check-circle"></i></div>


                <strong>
                    <?php echo e($plugin['name'] ?? ''); ?>

                </strong>
            </div>


        </td>
        <td class="col-md-6">

            <?php echo e($plugin['description'] ?? ''); ?>


            <div class="inactive second plugin-version-author-uri">
                <?php echo e(__('admin.Version')); ?>       <?php echo e($plugin['version'] ?? ''); ?> |   <?php echo e(__('admin.By')); ?>  <a
                        href="<?php echo e($plugin['author-url'] ?? ''); ?>"><?php echo e($plugin['author'] ?? ''); ?></a>
                |
                <a
                        href="<?php echo e($plugin['homepage'] ?? ''); ?>"
                        class="thickbox open-plugin-details-modal"
                        aria-label="More information about Hello Dolly"
                        data-title="Hello Dolly"><?php echo e(__('admin.View details')); ?></a></div>
        </td>
        <td class="col-md-3">
            <div class="col-md-12">


                <button <?php if(($plugin['activated'] ?? false)): ?>  style="display: none;"
                        <?php endif; ?>   data-alias="<?php echo e($plugin['pathname'] ?? ''); ?>"
                        class="text-inverse p-r-10 btn-outline btn-info activated_plugin"
                        data-toggle="tooltip" title=""
                        data-original-title="<?php echo e(__('admin.Activate')); ?>   <?php echo e($plugin['name'] ?? ''); ?>">
                    <i class="fa fa-plug fa-fw"></i>
                    <?php echo e(__('admin.Activate')); ?>

                </button>

                <button <?php if(!($plugin['activated'] ?? false)): ?>  style="display: none;"
                        <?php endif; ?>
                        data-alias="<?php echo e($plugin['pathname'] ?? ''); ?>"
                        class="text-inverse deactivate_plugin btn-outline  btn-warning"
                        title=""
                        data-id="3" data-toggle="tooltip"
                        data-original-title="<?php echo e(__('admin.Deactivate')); ?>   <?php echo e($plugin['name'] ?? ''); ?>">
                    <i class="ti-trash"></i>

                    <?php echo e(__('admin.Deactivate')); ?>

                </button>
                <button <?php if(($plugin['activated'] ?? false)): ?>  style="display: none;"
                        <?php endif; ?>   data-alias="<?php echo e($plugin['pathname'] ?? ''); ?>"
                        class="text-inverse delete_plugin btn-outline btn-danger"
                        title=""
                        data-id="3" data-toggle="tooltip"
                        data-original-title=" <?php echo e(__('admin.Delete')); ?>  <?php echo e($plugin['name'] ?? ''); ?>">
                    <i class="ti-trash"></i>
                    <?php echo e(__('admin.Delete')); ?>


                </button>
            </div>
        </td>


    </tr>
<?php endif; ?>