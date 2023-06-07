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

        <h2 class="section-title wow fadeInDown" data-wow-offset="200" data-wow-delay="100ms">
            <small>Feel Free to Say Hello!</small>
            <span><?php echo e(__("Get in Touch With Us")); ?></span>
        </h2>

        <div class="row">
            <div class="col-md-6 wow fadeInLeft" data-wow-offset="200" data-wow-delay="200ms">
                <!-- Contact form -->
                <form name="contact-form" method="post" action="#" class="contact-form" id="contact-form">

                    <div class="row">
                        <div class="col-md-6">

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="name"><?php echo e(__("Name")); ?></label>
                                    <input type="text" name="name" id="name" placeholder="Name" value="" size="30" data-toggle="tooltip" title="Name is required" class="form-control placeholder" />
                                    <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="email"><?php echo e(__("Email")); ?></label>
                                    <input type="text" name="email" id="email" placeholder="Email" value="" size="30" data-toggle="tooltip" title="Email is required" class="form-control placeholder" />
                                    <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="outer required">
                        <div class="form-group af-inner has-icon">
                            <label class="sr-only" for="subject"><?php echo e(__("Subject")); ?></label>
                            <input type="text" name="subject" id="subject" placeholder="Subject" value="" size="30" data-toggle="tooltip" title="Subject is required" class="form-control placeholder" />
                            <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                        </div>
                    </div>

                    <div class="form-group af-inner has-icon">
                        <label class="sr-only" for="input-message"><?php echo e(__("Message")); ?></label>
                        <textarea name="message" id="input-message" placeholder="Message" rows="4" cols="50" data-toggle="tooltip" title="Message is required" class="form-control placeholder"></textarea>
                        <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                    </div>

                    <div class="outer required">
                        <div class="form-group af-inner">
                            <input type="submit" name="submit" class="form-button form-button-submit btn btn-block btn-theme ripple-effect btn-theme-dark" id="submit_btn" value="Send message" />
                        </div>
                    </div>

                </form>
                <!-- /Contact form -->
            </div>
            <div class="col-md-6 wow fadeInRight" data-wow-offset="200" data-wow-delay="200ms">

                <p><?php echo e(__(" At Perfect Line,Our customer's satisfaction comes first,We provide mobility solutions that benefit")); ?></p>

                <ul class="media-list contact-list">
                    <li class="media">
                        <div class="media-left"><i class="fa fa-home"></i></div>
                        <div class="media-body"><?php echo e(__("Adress: Shop No. 06, Wasl Duet - 02 , Al Karama , Dubai , U.A.E")); ?></div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-phone"></i></div>
                        <div class="media-body"><?php echo e(__("Tel: +971 4 326 7557")); ?></div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-phone"></i></div>
                        <div class="media-body"><?php echo e(__("Whatsapp: +971 54 495 7070")); ?></div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-envelope"></i></div>
                        <div class="media-body"><?php echo e(__("E mails: perfectlinerac@yahoo.com")); ?></div>
                    </li>

                    <!--<li class="media">
                        <div class="media-left"><i class="fa fa-clock-o"></i></div>
                        <div class="media-body">
                            <p><?php echo e(__("Working Hours: 9:00 AM - 10:00 PM on Monday")); ?></p>
                            <p><?php echo e(__("Working Hours: 8:30 AM - 10:00 PM on Tuesday")); ?></p>
                            <p><?php echo e(__("Working Hours: 9:00 AM - 10:00 PM on Wednesday")); ?></p>
                            <p><?php echo e(__("Working Hours: 9:00 AM - 10:00 PM on Thursday")); ?></p>
                            <p><?php echo e(__("Working Hours: 9:00 AM - 10:00 PM on Thursday")); ?></p>
                            <p><?php echo e(__("Working Hours: 9:00 AM - 10:00 PM on Saturday")); ?></p>
                            <p><?php echo e(__("Working Hours: 8:30 AM - 9:00 PM on Sunday")); ?></p>
                        </div>
                    </li>
                    <li class="media">
                        <div class="media-left"><i class="fa fa-map-marker"></i></div>
                        <div class="media-body"><?php echo e(__("View on The Map")); ?></div>
                    </li>-->
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