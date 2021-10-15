<?php
include("../class.Mysqli.php");
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Traveler - Booking History</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/mystyles.css">
    <script src="../js/modernizr.js"></script>

    <link rel="stylesheet" href="../css/switcher.css" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/bright-turquoise.css" title="bright-turquoise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/turkish-rose.css" title="turkish-rose" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/salem.css" title="salem" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/hippie-blue.css" title="hippie-blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/mandy.css" title="mandy" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/green-smoke.css" title="green-smoke" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/horizon.css" title="horizon" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/cerise.css" title="cerise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/brick-red.css" title="brick-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/de-york.css" title="de-york" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/shamrock.css" title="shamrock" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/studio.css" title="studio" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/leather.css" title="leather" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/denim.css" title="denim" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="../css/schemes/scarlet.css" title="scarlet" media="all" />
</head>

<body style="background-image: url('../img/patterns/binding_dark.png');" class="boxed">

    <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
    <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="index.php">
                                <img src="../img/logo.jpg" alt="Transfer" title="Image Title" />
                            </a>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            
                        </div>
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-lang">
                                        <a href="eng/index.php">
                                            <img src="../img/flags/32/uk.png" alt="Image Alternative text" title="Image Title" />ENG
                                        </a>
                                    </li>
                                    <li class="top-user-area-lang">
                                        <a title="Georgian" href="index.php">
                                            <img src="../img/flags/32/ge.png" alt="Image Alternative text" title="Image Title" /><span class="right">GEO</span>
                                        </a>
                                    </li>
                                    <li class="top-user-area-lang">
                                        <a title="Russian" href="rus/index.php">
                                            <img src="../img/flags/32/ru.png" alt="Image Alternative text" title="Image Title" /><span class="right">RUS</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="nav">
                    <ul class="slimmenu" id="slimmenu">
                        <li><a href="index.php">ტრანსფერი</a>
                        </li>
                        <li><a href="#">ტურები</a>
                        </li>
                        <li><a href="#">კომენტარები</a>
                        </li>
                        <li><a href="#">კონტაქტი</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </header>

        <div class="container">
            <h1 class="page-title">Booking History</h1>
        </div>




        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="user-profile-sidebar">
                        <div class="user-profile-avatar text-center">
                            <img src="../img/amaze_300x300.jpg" alt="Image Alternative text" title="AMaze" />
                            <h5>John Doe</h5>
                            <p>Member Since May 2012</p>
                        </div>
                        <ul class="list user-profile-nav">
                            <li><a href="user-profile.html"><i class="fa fa-user"></i>Overview</a>
                            </li>
                            <li><a href="user-profile-settings.html"><i class="fa fa-cog"></i>Settings</a>
                            </li>
                            <li><a href="user-profile-photos.html"><i class="fa fa-camera"></i>My Travel Photos</a>
                            </li>
                            <li><a href="user-profile-booking-history.html"><i class="fa fa-clock-o"></i>Booking History</a>
                            </li>
                            <li><a href="user-profile-cards.html"><i class="fa fa-credit-card"></i>Credit/Debit Cards</a>
                            </li>
                            <li><a href="user-profile-wishlist.html"><i class="fa fa-heart-o"></i>Wishlist</a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div class="checkbox">
                        <label>
                            <input class="i-check" type="checkbox" />Show only current trip</label>
                    </div>
                    <table class="table table-bordered table-striped table-booking-history">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Location</th>
                                <th>Order Date</th>
                                <th>Execution Date</th>
                                <th>Cost</th>
                                <th>Current</th>
                                <th>Cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
                                <td class="booking-history-title">London to New York City</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/25/2014</td>
                                <td>$350</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-building-o"></i><small>hotel</small>
                                </td>
                                <td class="booking-history-title">InterContinental New York Barclay</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/25/2014 <i class="fa fa-long-arrow-right"></i> 4/30/2014</td>
                                <td>$1200</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-dashboard"></i><small>car</small>
                                </td>
                                <td class="booking-history-title">Maserati GranTurismo</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/25/2014 <i class="fa fa-long-arrow-right"></i> 4/30/2014</td>
                                <td>$500</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-bolt"></i><small>activity</small>
                                </td>
                                <td class="booking-history-title">Central Park Trip</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/27/2014</td>
                                <td>$0</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-bolt"></i><small>activity</small>
                                </td>
                                <td class="booking-history-title">Music Festival</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/28/2014</td>
                                <td>$100</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-bolt"></i><small>activity</small>
                                </td>
                                <td class="booking-history-title">Adrenaline Madness</td>
                                <td>New york City</td>
                                <td>4/12/2014</td>
                                <td>4/29/2014</td>
                                <td>$210</td>
                                <td class="text-center"><i class="fa fa-check"></i>
                                </td>
                                <td class="text-center"><a class="btn btn-default btn-sm" href="#">Cancel</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
                                <td class="booking-history-title">London to Bali</td>
                                <td>Bali</td>
                                <td>2/12/2014</td>
                                <td>2/20/2014</td>
                                <td>$500</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-home"></i><small>rental</small>
                                </td>
                                <td class="booking-history-title">Modern Chic 3BR Villa Fanisa</td>
                                <td>Bali</td>
                                <td>2/12/2014</td>
                                <td>2/20/2014 <i class="fa fa-long-arrow-right"></i> 2/23/2014</td>
                                <td>$800</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-plane"></i><small>flight</small>
                                </td>
                                <td class="booking-history-title">London to San Fancisco</td>
                                <td>San Fancisco</td>
                                <td>1/01/2014</td>
                                <td>1/05/2014</td>
                                <td>$423</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                            <tr>
                                <td class="booking-history-type"><i class="fa fa-building-o"></i><small>hotel</small>
                                </td>
                                <td class="booking-history-title">Wellington Hotel</td>
                                <td>San Fancisco</td>
                                <td>1/01/2014</td>
                                <td>1/05/2014 <i class="fa fa-long-arrow-right"></i> 1/15/2014</td>
                                <td>$850</td>
                                <td class="text-center"><i class="fa fa-times"></i>
                                </td>
                                <td class="text-center"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <div class="gap"></div>
        <footer id="main-footer">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a class="logo" href="index.html">
                            <img src="../img/logo-invert.png" alt="Image Alternative text" title="Image Title" />
                        </a>
                        <p class="mb20">Booking, reviews and advices on hotels, resorts, flights, vacation rentals, travel packages, and lots more!</p>
                        <ul class="list list-horizontal list-space">
                            <li>
                                <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Enter your E-mail Address</label>
                            <input type="text" class="form-control">
                            <p class="mt5"><small>*We Never Send Spam</small>
                            </p>
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>
                    <div class="col-md-2">
                        <ul class="list list-footer">
                            <li><a href="#">About US</a>
                            </li>
                            <li><a href="#">Press Centre</a>
                            </li>
                            <li><a href="#">Best Price Guarantee</a>
                            </li>
                            <li><a href="#">Travel News</a>
                            </li>
                            <li><a href="#">Jobs</a>
                            </li>
                            <li><a href="#">Privacy Policy</a>
                            </li>
                            <li><a href="#">Terms of Use</a>
                            </li>
                            <li><a href="#">Feedback</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h4>Have Questions?</h4>
                        <h4 class="text-color">+1-202-555-0173</h4>
                        <h4><a href="#" class="text-color">support@traveler.com</a></h4>
                        <p>24/7 Dedicated Customer Support</p>
                    </div>

                </div>
            </div>
        </footer>

        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/slimmenu.js"></script>
        <script src="../js/bootstrap-datepicker.js"></script>
        <script src="../js/bootstrap-timepicker.js"></script>
        <script src="../js/nicescroll.js"></script>
        <script src="../js/dropit.js"></script>
        <script src="../js/ionrangeslider.js"></script>
        <script src="../js/icheck.js"></script>
        <script src="../js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="../js/typeahead.js"></script>
        <script src="../js/card-payment.js"></script>
        <script src="../js/magnific.js"></script>
        <script src="../js/owl-carousel.js"></script>
        <script src="../js/fitvids.js"></script>
        <script src="../js/tweet.js"></script>
        <script src="../js/countdown.js"></script>
        <script src="../js/gridrotator.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../js/switcher.js"></script>
    </div>
</body>

</html>



