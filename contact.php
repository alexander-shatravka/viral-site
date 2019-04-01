<?php include 'top.php';?>
<main id="main" role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-5 wow fadeInLeft" data-wow-delay="0.2s">
                <!-- contact -->
                <div class="contact">
                    <h3>Свяжитесь с нами заплонив форму !</h3>
                    <p>At vero eos et accusamus et iusto odios un dignissimos ducimus qui blan ditiis prasixer esentium voluptatum.</p>
                    <div class="wpcf7">
                        <form class="wpcf7-form f-contact-form" id="order-form-3">
                            <div class="rows">
                                <span class="wpcf7-form-control-wrap text-field-required">
                                    <input type="text" name="orderName" id="orderName" value="" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" placeholder="Имя">
                                </span>
                            </div>
                            <div class="rows">
                                <span class="wpcf7-form-control-wrap text-field-required">
                                    <input type="text" name="orderPhone" id="orderPhone" value="" class="masked-phone wpcf7-form-control wpcf7-text wpcf7-validates-as-required text-field-class wpcf7-use-title-as-watermark" size="12" data-rule-phonevalidate="1" data-rule-phoneverified="1" placeholder="Телефон" data-mask="+38 (099) 999-99-99" minlength="19" maxlength="19" autocomplete="off">
                                </span>
                            </div>
                            <div class="rows">
                                <span class="wpcf7-form-control-wrap Emailfield">
                                    <input type="email" name="orderEmail" id="orderEmail"  value="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email email-class wpcf7-use-title-as-watermark" size="12" placeholder="Email" />
                                </span>
                            </div>
                            <div class="rows">
                                <span class="wpcf7-form-control-wrap textarea">
                                    <textarea name="orderMessage" id="orderMessage"  class="wpcf7-form-control wpcf7-textarea textarea-class wpcf7-use-title-as-watermark" rows="9" cols="39" placeholder="Расскажите о своей идее"></textarea>
                                </span>
                            </div>
                            <input id="submit" class="btn-submit-order-3" type="submit" value="ОТПРАВИТЬ">`
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
                    <div class="map-canvas" id="map-canvas-contact" data-lat="45.144522" data-lng="-92.549216" data-string="Str. Wall Street, Nr.77" data-zoom="12">
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include 'bottom.php';?>