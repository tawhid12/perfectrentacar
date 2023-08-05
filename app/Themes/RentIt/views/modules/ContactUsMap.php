<section id="<?php  echo $id; ?>" class="edit page-section color  pb-module-section">
	<div class="edit container">

		<div class="edit row">

			<div class="edit col-md-4">
				<div class="edit contact-info">

					<h2 class="edit block-title"><span>Contact Us</span></h2>

					<div class="edit media-list">
						<div class="edit media">
							<i class="edit pull-left fa fa-home"></i>
							<div class="edit media-body">
								<strong>Address:</strong><br>
								Dubai
							</div>
						</div>
						<div class="edit media">
							<i class="edit pull-left fa fa-phone"></i>
							<div class="edit media-body">
								<strong>Telephone:</strong><br>
								+971 54 495 7070
							</div>
						</div>
						<div class="edit media">
							<i class="edit pull-left fa fa-envelope-o"></i>
							<div class="edit media-body">
								<strong>Fax:</strong><br>
								
							</div>
						</div>
						<div class="edit media">
							<div class="edit media-body">
								At Perfect Line,Our customer’s satisfaction comes first,We provide mobility solutions that benefi
							</div>
						</div>
						<div class="edit media">
							<div class="edit media-body">
								<strong>Customer Service:</strong><br>
								<a href="mailto:hello@rentit.com">perfectlinerac@yahoo.com</a>
							</div>
						</div>
						<!--<div class="edit media">
							<div class="edit media-body">
								<strong>Returns and Refunds:</strong><br>
								<a href="mailto:hello@rentit.com">perfectlinerac@yahoo.com</a>
							</div>
						</div>-->
					</div>

				</div>
			</div>

			<div class="edit col-md-8 text-left">

				<h2 class="edit block-title"><span>Contact Form</span></h2>

				<!-- Contact form -->
				<form name="contact-form" method="post" action="<?php echo route('mail'); ?>" class="contact-form" id="contact-form">
				<?php
    session_start();
    $csrfToken = isset($_SESSION['_token']) ? $_SESSION['_token'] : '';
    ?>
    <input type="hidden" name="_token" value="<?php echo $csrfToken; ?>">
					<div class="edit outer required">
						<div class="edit form-group af-inner">
							<label class="edit sr-only" for="name">Name</label>
							<input type="text" name="name" id="name" placeholder="Name" value="" size="30" data-toggle="tooltip" title="" class="edit form-control placeholder" data-original-title="Name is required">
						</div>
					</div>

					<div class="edit outer required">
						<div class="edit form-group af-inner">
							<label class="edit sr-only" for="email">Email</label>
							<input type="text" name="email" id="email" placeholder="Email" value="" size="30" data-toggle="tooltip" title="" class="edit form-control placeholder" data-original-title="Email is required">
						</div>
					</div>

					<div class="edit outer required">
						<div class="edit form-group af-inner">
							<label class="edit sr-only" for="subject">Subject</label>
							<input type="text" name="subject" id="subject" placeholder="Subject" value="" size="30" data-toggle="tooltip" title="" class="edit form-control placeholder" data-original-title="Subject is required">
						</div>
					</div>

					<div class="edit form-group af-inner">
						<label class="edit sr-only" for="input-message">Message</label>
						<textarea name="message" id="input-message" placeholder="Message" rows="4" cols="50" data-toggle="tooltip" title="" class="edit form-control placeholder" data-original-title="Message is required"></textarea>
					</div>

					<div class="edit outer required">
						<div class="edit form-group af-inner">
							<input type="submit" name="submit" class="edit form-button form-button-submit btn btn-theme btn-theme-dark" id="submit_btn" value="Send message">
						</div>
					</div>

				</form>
				<!-- /Contact form -->

			</div>

		</div>

	</div>
</section>
<!--<section id="<?php echo $id; ?>" class="page-section no-padding  pb-module-section">

    <div class="container full-width">-->

        <!-- Google map -->
        <!--<div class="google-map">
            <div id="map-canvas"></div>

        </div>-->
        <!-- /Google map -->

    <!--</div>
    <script type="text/javascript">
        var
            mapObject,
            markers = [],
            markersData =  <?php echo $markersData ?? ''  ?>


        }
        ;


        function initialize_map() {


            loadScript("/rentit/js/infobox.js", after_load);

        }

        function after_load() {
            var global_scrollwheel = false;
            var markerClusterer = null;
            var markerCLuster;
            var Clusterer;

            initialize_new2();
        }

        function loadScript(src, callback) {
            var s,
                r,
                t;
            r = false;
            s = document.createElement('script');
            s.type = 'text/javascript';
            s.src = src;
            s.onload = s.onreadystatechange = function () {
                ////console.log( this.readyState ); //uncomment this line to see which ready states are called.
                if (!r && (!this.readyState || this.readyState == 'complete')) {
                    r = true;
                    callback();
                }
            };
            t = document.getElementsByTagName('script')[0];
            t.parentNode.insertBefore(s, t);

        }
    </script>
</section>-->