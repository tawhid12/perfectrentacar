
<!-- PAGE -->
<section class="page-section text-center error-page light">
    <div class="container">
        <h3><?php echo e(__("404")); ?></h3>
        <h2><i class="fa fa-warning"></i><?php echo e(__('Oops! The Page you requested was not found!')); ?></h2>
        <p><a class="btn btn-theme btn-theme-dark" href="<?php echo e(url('/')); ?>"><?php echo e(__("Back to Home")); ?></a></p>
    </div>
</section>
<!-- /PAGE -->

<!-- PAGE -->
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
                                    <input
                                            type="text" name="name" id="name" placeholder="Name" value="" size="30"
                                            data-toggle="tooltip" title="Name is required"
                                            class="form-control placeholder"/>
                                    <span class="form-control-icon"><i class="fa fa-user"></i></span>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">

                            <div class="outer required">
                                <div class="form-group af-inner has-icon">
                                    <label class="sr-only" for="email"><?php echo e(__("Email")); ?></label>
                                    <input
                                            type="text" name="email" id="email" placeholder="Email" value="" size="30"
                                            data-toggle="tooltip" title="Email is required"
                                            class="form-control placeholder"/>
                                    <span class="form-control-icon"><i class="fa fa-envelope"></i></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="form-group af-inner has-icon">
                        <label class="sr-only" for="input-message"><?php echo e(__("Message")); ?></label>
                        <textarea
                                name="message" id="input-message" placeholder="Message" rows="4" cols="50"
                                data-toggle="tooltip" title="Message is required"
                                class="form-control placeholder"></textarea>
                        <span class="form-control-icon"><i class="fa fa-bars"></i></span>
                    </div>

                    <div class="outer required">
                        <div class="form-group af-inner">
                            <input type="submit" name="submit" class="form-button form-button-submit btn btn-block btn-theme" id="submit_btn" value="Send message" />
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
<!-- /PAGE -->