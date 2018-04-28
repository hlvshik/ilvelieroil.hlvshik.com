<!DOCTYPE html>
<html lang="en" class=" desktop landscape">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Home</title>
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./assets/img/favicon_min.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/contact-form.css">
    <link rel="stylesheet" href="./assets/css/tm_docs.css" type="text/css" media="screen">
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="./assets/js/jquery.equalheights.min.js"></script>

    <script>
        jQuery(document).ready(function () {
            jQuery(".toggle_nav_button").on("click", function () {
                jQuery(this).addClass("active");
                jQuery("+nav.navbar.navbar-default.navbar-static-top.tm_navbar", this).addClass("active");
                return false;
            });
            jQuery("body").on("click", function (e) {
                var t = false;
                var parents = $(e.target).parents().andSelf();
                for (var key1 in parents) {
                    for (var key2 in parents[key1].classList) {
                        if (parents[key1].classList[key2] == "navbar") {
                            t = true;
                        }
                    }
                }
                if (t == true) { } else {
                    jQuery(".toggle_nav_button").removeClass("active");
                    jQuery("nav.navbar.navbar-default.navbar-static-top.tm_navbar").removeClass("active");
                }
            });
        });
    </script>
</head>

<body>
<header id="header" class="parallax parallax-bg-1 large_header" style="background-position: 50% 0px;">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="stuck_container">
                        <div class="left_side">
                            <a href="#" class="brand">
                                <h1 class="brand_name">Il Velieroil Restaurant</h1>
                            </a>
                        </div>
                        <div class="right_side">
                            <a href="#" class="toggle_nav_button"></a>
                            <nav class="navbar navbar-default navbar-static-top tm_navbar clearfix" role="navigation">
                                <ul class="nav sf-menu clearfix sf-js-enabled sf-arrows">
                                    <li class="active sub-menu"><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li class=""><a href="#" class="sf-with-ul">Menu</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                                <select class="select-menu nav sf-menu clearfix sf-js-enabled sf-arrows" style="display: inline-block;">
                                    <option value="#">Navigate to...</option>
                                    <option value="/">Home</option>
                                    <option value="/about">About</option>
                                    <option value="/menu">Menu</option>
                                    <option value="/gallery">Gallery</option>
                                    <option value="/contacts">Contacts</option>
                                </select>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_middle">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <span class="header_address">Via Fratelli Perini, 57 - 38122 Trento</span>
                        <span class="header_phone">+39 331 8810303</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="thumb-pad-1">
                        <a href="#" class="thumbnail color-1">
                            <figure>
                                <img src="./assets/img/page1-img1.jpg" alt="photo">
                            </figure>
                            <div class="caption">
                                <h2>pasta</h2>
                                <h5>Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="thumb-pad-1">
                        <a href="#" class="thumbnail color-2">
                            <figure>
                                <img src="./assets/img/page1-img2.jpg" data-src="img/toggle_menu_icon.png" alt="photo">
                            </figure>
                            <div class="caption">
                                <h2>pizza</h2>
                                <h5>Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="thumb-pad-1">
                        <a href="#" class="thumbnail color-3">
                            <figure>
                                <img src="./assets/img/page1-img3.jpg" alt="photo">
                            </figure>
                            <div class="caption">
                                <h2>fish</h2>
                                <h5>Lorem ipsum dolor sit amet, con sectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. </h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--========================================================
                        CONTENT
=========================================================-->
<div id="content">
    <div class="block-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="title title-1">What’s Happening?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="thumb-pad-2 indent-1">
                                <div class="thumbnail">
                                    <img src="./assets/img/page1-img4.jpg" alt="photo">
                                    <div class="caption">
                                        <time datetime="2015-10-27">27/10/2015</time>
                                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                                            sociis natoque</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="thumb-pad-2 indent-1">
                                <div class="thumbnail">
                                    <img src="./assets/img/page1-img5.jpg" alt="photo">
                                    <div class="caption">
                                        <time datetime="2015-10-22">22/10/2015</time>
                                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                                            sociis natoque</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="thumb-pad-2 indent-1">
                                <div class="thumbnail">
                                    <img src="./assets/img/page1-img6.jpg" alt="photo">
                                    <div class="caption">
                                        <time datetime="2015-10-15">15/10/2015</time>
                                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                                            sociis natoque</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="thumb-pad-2 indent-1">
                                <div class="thumbnail">
                                    <img src="./assets/img/page1-img7.jpg" alt="photo">
                                    <div class="caption">
                                        <time datetime="2015-10-11">11/10/2015</time>
                                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum
                                            sociis natoque</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-2 parallax parallax-bg-2" style="background-position: 50% -161px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="title title-2">our menu</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="block-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="box box-1" style="height: 611px;">
                        <div class="thumb-pad-3">
                            <div class="thumbnail">
                                <img src="./assets/img/page1-img8.jpg" alt="photo">
                                <div class="caption">
                                    <div class="wrapper">
                                        <ul class="list list-1">
                                            <li>
                                                <a href="#">Appetizers</a>
                                            </li>
                                            <li>
                                                <a href="#">Salads</a>
                                            </li>
                                            <li>
                                                <a href="#">Baked Pastas</a>
                                            </li>
                                            <li>
                                                <a href="#">Pastas</a>
                                            </li>
                                            <li>
                                                <a href="#">Chicken, Veal &amp; Beef</a>
                                            </li>
                                            <li>
                                                <a href="#">Sides</a>
                                            </li>
                                            <li>
                                                <a href="#">Desserts &amp; Beverages</a>
                                            </li>
                                            <li>
                                                <a href="#">Delivery Packages</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>FEATURED DISHES</h4>
                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque</p>
                        <a href="#" class="btn-default btn btn-1">view more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="box box-1" style="height: 611px;">
                        <div class="thumb-pad-3">
                            <div class="thumbnail">
                                <img src="./assets/img/page1-img9.jpg" alt="photo">
                                <div class="caption">
                                    <div class="wrapper">
                                        <ul class="list list-1">
                                            <li>
                                                <a href="#">Appetizers</a>
                                            </li>
                                            <li>
                                                <a href="#">Flatbreads</a>
                                            </li>
                                            <li>
                                                <a href="#">Soups &amp; Salads</a>
                                            </li>
                                            <li>
                                                <a href="#">Sandwiches</a>
                                            </li>
                                            <li>
                                                <a href="#">Lunch Combinations</a>
                                            </li>
                                            <li>
                                                <a href="#">Pastas</a>
                                            </li>
                                            <li>
                                                <a href="#">The Standards</a>
                                            </li>
                                            <li>
                                                <a href="#">On The House Classic Pastas</a>
                                            </li>
                                            <li>
                                                <a href="#"> Meal For Two</a>
                                            </li>
                                            <li>
                                                <a href="#">Chef Requests</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>lunch menu</h4>
                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque</p>
                        <a href="#" class="btn-default btn btn-1">view more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="box box-1" style="height: 611px;">
                        <div class="thumb-pad-3">
                            <div class="thumbnail">
                                <img src="./assets/img/page1-img10.jpg" alt="photo">
                                <div class="caption">
                                    <div class="wrapper">
                                        <ul class="list list-1">
                                            <li>
                                                <a href="#">Appetizers</a>
                                            </li>
                                            <li>
                                                <a href="#">Soups &amp; Salads</a>
                                            </li>
                                            <li>
                                                <a href="#">On The House Classic Pastas</a>
                                            </li>
                                            <li>
                                                <a href="#">Meal For Two</a>
                                            </li>
                                            <li>
                                                <a href="#">Specialty Pastas</a>
                                            </li>
                                            <li>
                                                <a href="#">Chicken</a>
                                            </li>
                                            <li>
                                                <a href="#">Seafood</a>
                                            </li>
                                            <li>
                                                <a href="#">Veal &amp; Beef</a>
                                            </li>
                                            <li>
                                                <a href="#">Sides</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>dinner menu</h4>
                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque</p>
                        <a href="#" class="btn-default btn btn-1">view more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="box box-1" style="height: 611px;">
                        <div class="thumb-pad-3">
                            <div class="thumbnail">
                                <img src="./assets/img/page1-img11.jpg" alt="photo">
                                <div class="caption">
                                    <div class="wrapper">
                                        <ul class="list list-1">
                                            <li>
                                                <a href="#">Desserts</a>
                                            </li>
                                            <li>
                                                <a href="#">Coffee &amp; Tea</a>
                                            </li>
                                            <li>
                                                <a href="#">After Dinner Drinks</a>
                                            </li>
                                            <li>
                                                <a href="#">Dessert Wine</a>
                                            </li>
                                            <li>
                                                <a href="#">Ports</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Dessert Menu</h4>
                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque</p>
                        <a href="#" class="btn-default btn btn-1">view more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="box box-1" style="height: 611px;">
                        <div class="thumb-pad-3">
                            <div class="thumbnail">
                                <img src="./assets/img/page1-img12.jpg" alt="photo">
                                <div class="caption">
                                    <div class="wrapper">
                                        <ul class="list list-1">
                                            <li>
                                                <a href="#">Happy Hour &amp; More</a>
                                            </li>
                                            <li>
                                                <a href="#">Handcrafted Cocktails &amp; </a>
                                            </li>
                                            <li>
                                                <a href="#">Beer</a>
                                            </li>
                                            <li>
                                                <a href="#">White Wines</a>
                                            </li>
                                            <li>
                                                <a href="#">Red Wines</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Beverages Menu</h4>
                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque</p>
                        <a href="#" class="btn-default btn btn-1">view more</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="box box-1" style="height: 611px;">
                        <div class="thumb-pad-3">
                            <div class="thumbnail">
                                <img src="./assets/img/page1-img13.jpg" alt="photo">
                                <div class="caption">
                                    <div class="wrapper">
                                        <ul class="list list-1">
                                            <li>
                                                <a href="#">Appetizers</a>
                                            </li>
                                            <li>
                                                <a href="#">Flatbreads</a>
                                            </li>
                                            <li>
                                                <a href="#">Soups &amp; Salads</a>
                                            </li>
                                            <li>
                                                <a href="#">Sandwiches</a>
                                            </li>
                                            <li>
                                                <a href="#">Classic Pastas</a>
                                            </li>
                                            <li>
                                                <a href="#">Specialty Pastas</a>
                                            </li>
                                            <li>
                                                <a href="#">Chicken</a>
                                            </li>
                                            <li>
                                                <a href="#">Seafood</a>
                                            </li>
                                            <li>
                                                <a href="#">Veal &amp; Beef</a>
                                            </li>
                                            <li>
                                                <a href="#">Sides</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4>Carryout Menu</h4>
                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis
                            natoque</p>
                        <a href="#" class="btn-default btn btn-1">view more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-2 parallax parallax-bg-3" style="background-position: 50% -165px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="title title-2">Contact us</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="block-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <form id="contact-form" method="POST" action="">
                        <div class="contact-form-loader"></div>
                        <fieldset>
                            <label class="name form-div-1">
                                <input type="text" name="name" value="" data-constraints="@Required @JustLetters" id="regula-generated-839893" class="">
                                <span class="empty-message">*This field is required.</span>
                                <span class="error-message">*This is not a valid name.</span>
                                <span class="_placeholder" style="left: 0px; top: 0px; width: 414px; height: 58px;">Your Name </span>
                            </label>
                            <label class="email form-div-2">
                                <input type="text" name="email" value="" data-constraints="@Required @Email" id="regula-generated-350037" class="">
                                <span class="empty-message">*This field is required.</span>
                                <span class="error-message">*This is not a valid email.</span>
                                <span class="_placeholder" style="left: 0px; top: 0px; width: 414px; height: 58px;">Your Email </span>
                            </label>
                            <label class="message form-div-4">
                                        <textarea name="message" data-constraints="@Length(min=20,max=999999)" id="regula-generated-361170" class="">
                                        </textarea>
                                <span class="empty-message">*This field is required.</span>
                                <span class="error-message">*The message is too short.</span>
                                <span class="_placeholder" style="left: 0px; top: 0px; width: 914px; height: 202px;">Your Message </span>
                            </label>
                            <!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->
                            <div class="btns">
                                <a href="#" data-type="submit" class="btn-default btn btn-2" data-text="send">send</a>
                            </div>
                        </fieldset>
                        <div class="modal fade response-message">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            ×
                                        </button>
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        You message has been sent! We will be in touch soon.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="stripHTML" value="true">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer_bottom">
                    <div class="footer_privacy">Il Velieroil Restaurant ©
                        <span id="copyright-year">2018</span> All Rights Reserved |
                        <a href="https://livedemo00.template-help.com/wt_53639/index-5.html"> Privacy policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/jquery.cookie.js"></script>
<script src="./assets/js/jquery.easing.1.3.js"></script>
<script src="./assets/js/device.min.js"></script>
<script src="./assets/js/superfish.js"></script>
<script src="./assets/js/jquery.mobilemenu.js"></script>
<script src="./assets/js/jquery.rd-parallax.js"></script>
<script src="./assets/js/jquery.mousewheel.min.js"></script>
<script src="./assets/js/jquery.simplr.smoothscroll.min.js"></script>
<script src="./assets/js/jquery.ui.totop.js"></script>
<script>
    if (jQuery("body").width() > 991) {
        jQuery('.box-1').equalHeights();
    }
    jQuery(window).resize(function () {
        jQuery('.box-1').height('auto');
        if (jQuery("body").width() > 991) {
            jQuery('.box-1').equalHeights();
        }
    });
</script>

</body>
</html>
