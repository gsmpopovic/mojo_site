<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
	============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/swiper.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />

    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--  Specific Stylesheet -->
    <link rel="stylesheet" href="css/colors.php?color=222222" type="text/css" />
    <!--  Theme Color -->
    <link rel="stylesheet" href="demos/store/css/fonts.css" type="text/css" />
    <!--  Theme Font -->
    <link rel="stylesheet" href="demos/store/store.css" type="text/css" />
    <!-- Theme Custom CSS -->
    <!-- / -->

    <!-- Document Title -- Mojo English Home 
	============================================= -->
    <title>Home | Mojo English</title>

</head>

<body class="stretched modal-subscribe-bottom" style="background:fff!important;">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Modal -->
        <div class="modal animated fadeInUp fast pr-0" id="modal-subscribe" role="dialog" displayed="false" data-backdrop="static">

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close position-relative" data-dismiss="modal" aria-label="Close" style="z-index: 1">
                                <span aria-hidden="true">&times;</span>
                            </button>

                        <div class="form-widget mx-auto" data-loader="button" style="padding: 30px">

                            <h2 class="font-weight-bold h1 mb-3" style="letter-spacing: -2px">Get Special Discount!
                            </h2>
                            <p>Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:
                            </p>

                            <div class="form-result"></div>

                            <form class="mb-0" id="modal-subscribe-form" action="include/form.php" method="post" enctype="multipart/form-data">
                                <label for="modal-subscribe-form-email">Email Address <span>*</span></label>
                                <input type="email" name="modal-subscribe-form-email" id="modal-subscribe-form-email" class="form-control required rounded-0" placeholder="youremail@address.com">

                                <input class="d-none" type="text" id="modal-subscribe-form-botcheck" name="modal-subscribe-form-botcheck" value="" />
                                <button name="modal-subscribe-form-submit" class="button btn-block btn-danger m-0 mt-2" type="submit">Subscribe
                                        Now</button>

                                <input type="hidden" name="prefix" value="modal-subscribe-form-">
                            </form>
                            <div class="text-center">
                                <small class="text-black-50 mt-1"><em>We never send SPAM to your Email</em></small>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header
		============================================= -->
        <header id="header" class="dark transparent-header floating-header header-size-custom" data-sticky-shrink="false" data-sticky-class="not-dark">
            <div id="header-wrap">
                <div class="container-fluid">
                    <div class="header-row justify-content-lg-between">

                        <!-- Logo
                        ============================================= -->
                        <div id="logo" class="mr-sm-2">
                            <a href="index.html" class="standard-logo" data-dark-logo="images/mojologo.png"><img src="images/Mojo English black logo-1.png" alt="Mojo English logo"></a>
                            <a href="index.html" class="retina-logo" data-dark-logo="images/mojologo.png"><img src="images/Mojo English black logo-1.png" alt="Mojo English Logo"></a>
                        </div>
                        <!-- #logo end -->

                        <div class="header-misc">

                            <!-- Top Login
                            Integrated via plugin; customer info not stored
                            in ME datastores. Maybe will be needed later.
                            ============================================= -->
                            <!-- <div id="top-account" class="px-4">
                                <a href="#modal-register" data-lightbox="inline">Sign up/Login</a>
                            </div> -->
                            <!-- #top-search end -->

                            <!-- Top Cart
                            ============================================= -->
                            <div id="top-cart">
                                <a href="#" id="top-cart-trigger" class="position-relative"><i
                                            class="icon-line-bag"></i><span class="top-cart-number">5</span></a>
                                <div class="top-cart-content">
                                    <div class="top-cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="top-cart-items">
                                        <div class="top-cart-item">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="productpics/hands.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                        <div class="top-cart-item">
                                            <div class="top-cart-item-image">
                                                <a href="#" class="font-weight-normal"><img src="productpics/3O8A9347.jpg" alt="Leather Bag" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <div class="top-cart-item-desc-title">
                                                    <a href="#" class="font-weight-normal">Mojo Family Fun</a>
                                                    <span class="top-cart-item-price d-block"></span>
                                                </div>
                                                <div class="top-cart-item-quantity font-weight-semibold" id="top-cart-item"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-cart-action">
                                        <span class="top-checkout-price font-weight-semibold text-dark">$14.99</span>
                                        <button class="button button-dark button-small m-0">View Cart</button>
                                    </div>
                                </div>
                            </div>
                            <!-- #top-cart end -->
                        </div>

                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                    <path
                                        d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                    </path>
                                    <path d="m 30,50 h 40"></path>
                                    <path
                                        d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                    </path>
                                </svg>
                        </div>

                        <!-- Primary Navigation
                        ============================================= -->
                        <nav class="primary-menu with-arrows">

                            <!-- Menu Left -->
                            <ul class="not-dark menu-container">
                                <li class="menu-item current">
                                    <a class="menu-link" href="#">
                                        <div>Home</div>
                                    </a>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Help</div>
                                    </a>
                                    <div class="mega-menu-content mega-menu-style-2">
                                        <div class="container">
                                            <div class="row">
                                                <ul class="mega-menu-column sub-menu-container col-lg-4 border-left-0">
                                                    <li class="mega-menu-title menu-item">
                                                        <a class="menu-link" href="#">
                                                            <div>Contact Us</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <div class="widget">
                                                                    <address>
                                                                            <strong>Da Nang Store:</strong><br>
                                                                            795 Folsom Ave, Suite 600<br>
                                                                            Da Nang, VN 94107<br>
                                                                        </address>
                                                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 841 763 2521<br>
                                                                    <abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
                                                                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@mojoenglish.com
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="mega-menu-column sub-menu-container col-lg-4 border-left-0">
                                                    <li class="mega-menu-title menu-item">
                                                        <a class="menu-link" href="#">
                                                            <div>Inquiries</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>About Us</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Our Policies</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Exchange/Return</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Payments</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                                <ul class="mega-menu-column sub-menu-container col-lg-4 border-left-0">
                                                    <li class="mega-menu-title menu-item">
                                                        <a class="menu-link" href="#">
                                                            <div>FAQs</div>
                                                        </a>
                                                        <ul class="sub-menu-container">
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Q. Who is Mojo English for?</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Q. Where is Mojo English available?</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Q. Shipping Charges?</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Q. How long is your delivery time?</div>
                                                                </a>
                                                            </li>
                                                            <li class="menu-item">
                                                                <a class="menu-link" href="#">
                                                                    <div>Q. Are there any hidden Charges?</div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <!-- .mega-menu end -->
                                <li class="menu-item">
                                    <a class="menu-link" href="#">
                                        <div>Contact</div>
                                    </a>
                                </li>
                            </ul>

                        </nav>
                        <!-- #primary-menu end -->

                    </div>

                </div>

            </div>
            <div class="header-wrap-clone"></div>

        </header>
        <!-- #header end -->