
    <!-- Footer
		============================================= -->
        <footer id="footer" class="bg-color dark border-0">

<div class="container-fluid">

    <!-- Footer Widgets
        ============================================= -->
    <div class="footer-widgets-wrap pb-5">

        <div class="row">

            <div class="col-lg-2 col-md-3 col-6">
                <div class="widget">

                    <h4 class="ls0 mb-3 nott">Features</h4>

                    <ul class="list-unstyled iconlist ml-0">
                        <li><a href="#">Contact Support</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="widget">

                    <h4 class="ls0 mb-3 nott">Support</h4>

                    <ul class="list-unstyled iconlist ml-0">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="widget">

                    <h4 class="ls0 mb-3 nott">Trending</h4>

                    <ul class="list-unstyled iconlist ml-0">
                        <li><a href="#">Shop</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-6">
                <div class="widget">

                    <h4 class="ls0 mb-3 nott">Get to know us</h4>

                    <ul class="list-unstyled iconlist ml-0">
                        <li><a href="#">Corporate</a></li>
                        <li><a href="#">Agency</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- .footer-widgets-wrap end -->
</div>

<!-- Copyrights
    ============================================= -->
<div id="copyrights">

    <div class="container-fluid clearfix">

        <div class="row justify-content-between align-items-center">
            <div class="col-md-6">
                Copyrights &copy; 2020 All Rights Reserved by Mojo English Inc.<br>
                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
                </div>
            </div>

            <div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
                <ul class="list-unstyled d-flex flex-row mb-2 clearfix">
                    <li class="mr-2"><img src="./images/cards/visa.svg" alt="Visa" width="34"></li>
                    <li class="mr-2"><img src="./images/cards/mc.svg" alt="Master Card" width="34">
                    </li>
                    <li class="mr-2"><img src="./images/cards/ae.svg" alt="American Express" width="34">
                    </li>
                    <li class="mr-2"><img src="./images/cards/pp.svg" alt="PayPal" width="34"></li>
                    <li class="mr-2"><img src="./images/cards/sk.svg" alt="Skrill" width="34"></li>
                    <li class="mr-2"><img src="./images/cards/2co.svg" alt="2CheckOut" width="34">
                    </li>
                    <li class="mr-2"><img src="./images/cards/wu.svg" alt="Western Union" width="34">
                    </li>
                </ul>
                <div class="copyrights-menu copyright-links clearfix">
                    <a href="#">About</a>/<a href="#">Features</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- #copyrights end -->

</footer>
<!-- #footer end -->

</div>
<!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="js/jquery.js"></script>
<script src="js/plugins.min.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="js/functions.js"></script>

<script>
$(document).ready(changeHeaderColor);
$(window).on('resize', changeHeaderColor);

function changeHeaderColor() {
    if (jQuery(window).width() > 991.98) {
        jQuery("#header").hover(
            function() {
                if (!$(this).hasClass("sticky-header")) {
                    $(this).addClass("hover-light").removeClass("dark");
                    SEMICOLON.header.logo();
                }
                $("#wrapper").addClass("header-overlay");
            },
            function() {
                if (!$(this).hasClass("sticky-header")) {
                    $(this).removeClass("hover-light").addClass("dark");
                    SEMICOLON.header.logo();
                }
                $("#wrapper").removeClass("header-overlay");
            }
        );
    }
};

$(window).scroll(function() {
    if ($(document).scrollTop() > 2000 && $("#modal-subscribe").attr("displayed") === "false") {
        $('#modal-subscribe').modal('show');
        $("#modal-subscribe").attr("displayed", "true");
    }
});

jQuery('#modal-subscribe-form').on('formSubmitSuccess', function() {
    $("#modal-subscribe").addClass("fadeOutDown");
    setTimeout(function() {
        $('#modal-subscribe').modal('hide');
    }, 400);
    $("#modal-subscribe").attr("displayed", "false");
});

//Sidebar cart quantity increment/decrement

function increment() {
    document.getElementById('demoInput').stepUp();
    var display = document.getElemntById("sidebar-cart-display");
    var text = display.html();
    var value = parseInt(text) - 14.99;
    display = value;


}

function decrement() {
    document.getElementById('demoInput').stepDown();
}
</script>

</body>

</html>