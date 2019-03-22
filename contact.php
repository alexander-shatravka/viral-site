<?php include 'top.php';?>
<main id="main" role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-5 wow fadeInLeft" data-wow-delay="0.2s">
                <!-- contact -->
                <div class="contact">
                    <h3>Contact us by email!</h3>
                    <p>At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum.</p>
                    <div class="wpcf7">
                        <form enctype="multipart/form-data" class="wpcf7-form" action="inc/process2.php" id="contactform">
                            <div class="column">
                                <span class="wpcf7-form-control-wrap text-field-required">
                                    <input type="text" placeholder="Full Name" size="12" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" value="" name="name">
                                </span>
                            </div>
                            <div class="column">
                                <span class="wpcf7-form-control-wrap text-field-required">
                                    <input type="tel" name="phone" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" placeholder="Phone number">
                                </span>
                            </div>
                            <div class="column">
                                <span class="wpcf7-form-control-wrap Emailfield">
                                    <input type="email" placeholder="Email" size="12" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email email-class wpcf7-use-title-as-watermark" value="" name="email">
                                </span>
                            </div>
                            <div class="column">
                                <span class="wpcf7-form-control-wrap textarea">
                                    <textarea placeholder="Message" cols="39" rows="9" class="wpcf7-form-control wpcf7-textarea textarea-class wpcf7-use-title-as-watermark" name="comment"></textarea>
                                </span>
                            </div>
                            <input type="submit" value="Submit Form " id="contact-submit">
                        </form>
                    </div>
                    <div class="done-massage done-massage3">
                        <strong>Thank you!</strong> We have received your message.
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-7 wow fadeInRight" data-wow-delay="0.2s">
                <!-- map -->
                <div class="map">
                    <img src="http://placehold.it/770x475" alt="image description">
                    <div class="map-canvas" id="map-canvas-contact" data-lat="45.144522" data-lng="-92.549216" data-string="Str. Wall Street, Nr.77" data-zoom="12"></div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'bottom.php';?>