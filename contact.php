<?php  $page = 'contact';
include "_partials/header.php";
?>

    <!-- banner -->
    <div class=" banner banner1">
        <div class="wthree-different-dot1">
            <?php
            include "_partials/nav.php";
            ?>
            <h2>Contact us</h2>
        </div>
    </div>
    <!-- //banner -->

    <!-- contact -->
    <div class="agile_about contact" id="contact">

        <div class="agileits_agile_about">
            <div class="agileinfo_map_color">
                <div class="agileinfo_map_color_grid">
                    <div class="col-md-4 agileinfo_map_color_grid_left">
                        <h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Address</h4>
                        <p>Rr. Fran Bardhi, No. 2/1, Apt.42, 10 th floor, Tirana, Albania</p>
                    </div>
                    <div class="col-md-4 agileinfo_map_color_grid_left">
                        <h4><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Mail Us</h4>
                        <p><a href="mailto:example@mail.com"> info@dsa.org</a></p>
                    </div>
                    <div class="col-md-4 agileinfo_map_color_grid_left">
                        <h4><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Phone</h4>
                        <p>+355 042 225237</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="container">
                <form name="contactform" method="post" action="send_form_email.php">
                <div class="agileits_agile_about_mail">
                    <form action="#" method="post">
                        <div class="col-md-6 agileits_agile_about_mail_left">
                            <input type="text" name="Name" placeholder="Name" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-6 agileits_agile_about_mail_left">
                            <input type="email" name="Email" placeholder="Email" required="">
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                        <textarea name="Message" placeholder="Message..." required=""></textarea>
                        <div class="submit">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- //contact -->

    <!-- map -->
    <div class="map">
        <!--	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158858.47339870626!2d-0.2417004386729234!3d51.52855824202755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2sin!4v1497263047247"></iframe>-->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d749.1234454347303!2d19.809657329182457!3d41.319874905921345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13503101d184e897%3A0xe8885471d28f3223!2sRruga+Emin+Duraku%2C+Tirana%2C+Albania!5e0!3m2!1sen!2s!4v1508446010816"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- map -->

<?php
include "_partials/footer.php";
?>