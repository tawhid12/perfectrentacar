<?php $__env->startSection('breadcrumbs'); ?>
    <?php echo $breadcrumbs ?? ''; ?>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('sidebar'); ?>
    <?php echo $sidebar ?? ''; ?>


<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>
    <?php echo isset($content) ? $content : ''; ?>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('content-area'); ?>
    <section class="page-section with-sidebar sub-page">
        <div class="container">
            <div class="row">
                <!-- SIDEBAR -->
                <div class="col-md-9 content car-listing" id="content">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
                <!-- /SIDEBAR -->

                <!-- CONTENT -->
                <div class="col-md-3 sidebar"  id="sidebar">
                    <?php echo $__env->yieldContent('sidebar'); ?>
                </div>
                <!-- /CONTENT -->

            </div>
        </div>
    </section>

    <section class="page-section contact dark">
        <div class="container">

            <!-- Get in touch -->

            <h2 class="section-title">
                <small><?php echo e(__('Feel Free to Say Hello!')); ?></small>
                <span><?php echo e(__("Get in Touch With Us")); ?></span>
            </h2>

            <div class="row">
                <div class="col-md-6">
                    <!-- Contact form -->
                    <form name="contact-form" method="post" action="#" class="contact-form alt" id="contact-form">

                        <div class="row">
                            <div class="col-md-6">

                                <div class="outer required">
                                    <div class="form-group af-inner has-icon">
                                        <label class="sr-only" for="name"><?php echo e(__("Name")); ?></label>
                                        <input type="text" name="name" id="name" placeholder="<?php echo e(__('Name')); ?>" value="" size="30" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Name is required">
                                        <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="outer required">
                                    <div class="form-group af-inner has-icon">
                                        <label class="sr-only" for="email"><?php echo e(__("Email")); ?></label>
                                        <input type="text" name="email" id="email" placeholder="<?php echo e(__('Email')); ?>" value="" size="30" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Email is required">
                                        <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group af-inner has-icon">
                            <label class="sr-only" for="input-message"><?php echo e(__("Message")); ?></label>
                            <textarea name="message" id="input-message" placeholder="<?php echo e(__('Message')); ?>" rows="4" cols="50" data-toggle="tooltip" title="" class="form-control placeholder" data-original-title="Message is required"></textarea>
                            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                        </div>

                        <div class="outer required">
                            <div class="form-group af-inner">
                                <input type="submit"
                                       name="submit" class="form-button form-button-submit btn btn-block btn-theme"
                                       id="submit_btn" value="<?php echo e(__('Send message')); ?>">
                            </div>
                        </div>

                    </form>
                    <!-- /Contact form -->
                </div>
                <div class="col-md-6">

                    <p><?php echo e(__("This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.")); ?></p>

                    <ul class="media-list contact-list">
                        <li class="media">
                            <div class="media-left"><i class="fa fa-home"></i></div>
                            <div class="media-body"><?php echo e(__("Adress: 1600 Pennsylvania Ave NW, Washington, D.C.")); ?></div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa"></i></div>
                            <div class="media-body"><?php echo e(__("DC 20500, ABD")); ?></div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-phone"></i></div>
                            <div class="media-body"><?php echo e(__("Support Phone: 01865 339665")); ?></div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-envelope"></i></div>
                            <div class="media-body"><?php echo e(__("E mails: info@example.com")); ?></div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-clock-o"></i></div>
                            <div class="media-body"><?php echo e(__("Working Hours: 09:30-21:00 except on Sundays")); ?></div>
                        </li>
                        <li class="media">
                            <div class="media-left"><i class="fa fa-map-marker"></i></div>
                            <div class="media-body"><?php echo e(__("View on The Map")); ?></div>
                        </li>
                    </ul>

                </div>
            </div>

            <!-- /Get in touch -->

        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer'); ?>
    <?php echo $footer ?? ''; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('theme:rentit::layouts.blog', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>