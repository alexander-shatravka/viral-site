<?php include 'top.php';?>
<main id="main" role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-7 col-xs-12 wow fadeInLeft" data-wow-delay="0.2s">
                <!-- map -->
                <div class="map">
                    <img src="http://placehold.it/370x465" alt="image description">
                </div>
            </div>
            <div class="col-md-8 col-sm-5 col-xs-12 wow fadeInUp" data-wow-delay="0.2s">
                <!-- contact -->
                <div class="contact">
                    <h3>Kawhi Leonard</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem laudanm, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed ttquia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <p>Phasellus ut condimentum diam, eget tempus lorem. Morbi bibendum est quis arcu posuere condimentum. Nullam justo eros. qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <p>Phasellus ut condimentum diam, eget tempus lorem. Morbi bibendum est quis arcu posuere condimentum. Nullam justo eros. qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
            </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.2s">
            <div class="col-xs-12">
                <div class="contact">
                    <h3>Drop a massage</h3>
                    <div class="wpcf7">
                        <form enctype="multipart/form-data" class="wpcf7-form" action="#">
                            <div class="column">
                                <span class="wpcf7-form-control-wrap text-field-required">
                                    <input type="text" placeholder="Full Name" size="12" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" value="" name="text-field-required">
                                </span>
                            </div>
                            <div class="column">
                                <span class="wpcf7-form-control-wrap text-field-required">
                                    <input type="tel" name="text-field-required" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" placeholder="Phone number">
                                </span>
                            </div>
                            <div class="column">
                                <span class="wpcf7-form-control-wrap Emailfield">
                                    <input type="email" placeholder="Email" size="12" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email email-class wpcf7-use-title-as-watermark" value="" name="Email-address">
                                </span>
                            </div>
                            <div class="column">
                                <span class="wpcf7-form-control-wrap textarea">
                                    <textarea placeholder="Message" cols="39" rows="9" class="wpcf7-form-control wpcf7-textarea textarea-class wpcf7-use-title-as-watermark" name="textarea"></textarea>
                                </span>
                            </div>
                            <input type="submit" value="Submit Massage ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'bottom.php';?>