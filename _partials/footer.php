<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-4 footerleft">
            <h3>ABOUT US</h3>
            <p>Development Solutions Associates (DSA) Center is a research think tank and advisory agency
                with special focus on economic and local development. It was registered as an NGO/NPO in
                Albania in 2006.</p>
        </div>
        <div class="col-md-4 footermiddle">
            <h3>Get in touch</h3>
            <p>Rr. Fran Bardhi, No. 2/1, Apt.42, 10 th floor</p>
            <p>Tirana, Albania</p>
            <p class="phone">phone: +355 42 225237</p>
            <p class="phone">fax: +355 42 225237</p>
        </div>
        <div class="col-md-4 footerright">
            <h3>Contact Points</h3>
            <ul class="w3agile_footer_grid_list">
                <li>
                    <p class="phone">Mail: <a href="mailto:info@dsa.org">info@dsa.org</a></p>
                    <p class="phone">Mail: <a href="mailto:info@dsa.org">ezhllima@dsa.org</a></p>
                    <p class="phone">Mail: <a href="mailto:info@dsa.org">dimami@dsa.org</a></p>
                </li>
            </ul>
</div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->

<!-- copyright -->
<div class="wthree_copy_right">
    <div class="container">
        <p>© 2017 DSA. All rights reserved! </p>

    </div>
</div>
<!-- //copyright -->

<!-- Default-JavaScript-File -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //Default-JavaScript-File -->

<!-- scrolling script -->

<script>
    $('.carousel').carousel();
</script>
<script>
    $( document ).ready(function() {
        $('.collapse').on('show.bs.collapse', function() {
            var toggle = $('[data-target="#' + this.id + '"]');
            if (toggle) {
                var parent = toggle.attr('data-parent');
                if (parent) {
                    $(parent).find('.collapse.in').collapse('hide');
                }
            }
        });
    });
</script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //scrolling script -->

<!--banner Slider starts Here-->
<script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager:true,
            nav:true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--banner Slider ends Here-->


<!-- Stats-Number-Scroller-Animation-JavaScript -->
<script src="js/waypoints.min.js"></script>
<script src="js/counterup.min.js"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 100,
            time: 1000
        });
    });
</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->


<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>
<!-- //here ends scrolling icon -->

<!-- FlexSlider-JavaScript -->
<script defer src="js/jquery.flexslider.js"></script>
<!--<script type="text/javascript">-->
<!--    $(function(){-->
<!--        SyntaxHighlighter.all();-->
<!--    });-->
<!--    $(window).load(function(){-->
<!--        $('.flexslider').flexslider({-->
<!--            animation: "slide",-->
<!--            start: function(slider){-->
<!--                $('body').removeClass('loading');-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->
<!-- //FlexSlider-JavaScript -->


</body>
<!-- //Body -->
</html>