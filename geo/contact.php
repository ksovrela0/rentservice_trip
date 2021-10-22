<?php
include("php/func.php");
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>VipTrip - კონტაქტები</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/styles.css?v=4.0">
    <link rel="stylesheet" href="css/mystyles.css">
    <script src="js/modernizr.js"></script>

    <link rel="stylesheet" href="css/switcher.css" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/bright-turquoise.css" title="bright-turquoise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/turkish-rose.css" title="turkish-rose" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/salem.css" title="salem" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/hippie-blue.css" title="hippie-blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/mandy.css" title="mandy" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/green-smoke.css" title="green-smoke" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/horizon.css" title="horizon" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/cerise.css" title="cerise" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/brick-red.css" title="brick-red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/de-york.css" title="de-york" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/shamrock.css" title="shamrock" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/studio.css" title="studio" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/leather.css" title="leather" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/denim.css" title="denim" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="css/schemes/scarlet.css" title="scarlet" media="all" />
</head>

<body style="background-image: url('img/patterns/binding_dark.png');" class="boxed">

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
                                        <a href="../index.php">
                                            <img src="img/flags/32/uk.png" alt="Image Alternative text" title="Image Title" />ENG
                                        </a>
                                    </li>
                                    <li class="top-user-area-lang">
                                        <a title="Georgian" href="index.php">
                                            <img src="img/flags/32/ge.png" alt="Image Alternative text" title="Image Title" /><span class="right">GEO</span>
                                        </a>
                                    </li>
                                    <li class="top-user-area-lang">
                                        <a title="Russian" href="../rus/index.php">
                                            <img src="img/flags/32/ru.png" alt="Image Alternative text" title="Image Title" /><span class="right">RUS</span>
                                        </a>
                                    </li>
                                    <?php
                                    if(isMobile()){
                                        echo '  <li>
                                                    <div style="color:white; padding-right:10px; left:0; top:0; z-index:99999999;">
                                                        <ul>
                                                            <li style="list-style-type:none; margin-bottom:10px; display:block;"><a href="https://www.facebook.com/viptrip.ge" target="_blank"><i class="fa fa-facebook social-fb" aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </li>';
                                    }
                                    ?>
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
                        <li><a href="tours.php">ტურები</a>
                        </li>
                        <li><a href="reviews.php">კომენტარები</a>
                        </li>
                        <li class="active"><a href="contact.php">კონტაქტი</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </header>

        <div class="container">
            <h1 class="page-title" style="color:white; ">დაგვიკავშირდით</h1>
        </div>





        <div class="container">
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-12">
                <ul class="address-list list">
                            <?php
                                $db->setQuery("SELECT * FROM system");
                                $data = $db->getResultArray();
                            ?>
                            <li>
                                <h2 style="color">Email</h2><a href="mailto:<?php echo $data['result'][0]['email']; ?>" style="font-size: 19px;"><?php echo $data['result'][0]['email']; ?></a>
                            </li>
                            <li>
                                <h2>ტელეფონი</h2><a href="#" style="font-size: 19px;"><?php echo $data['result'][0]['mobile']; ?></a>
                            </li>
                        </ul>
                </div>
                
            </div>
            <div class="gap"></div>
        </div>

        <?php
            if(!isMobile()){
                echo '  <div style="position:fixed; color:white; margin-top:100px; padding-right:10px; left:0; top:0; z-index:99999999;">
                            <ul>
                                <li style="list-style-type:none; margin-bottom:10px; display:block;"><a href="https://www.facebook.com/viptrip.ge" target="_blank"><i class="fa fa-facebook social-fb" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>';
            }
        ?>
        <style>
            .social-fb{
                width: 40px;
                height: 40px;
                line-height: 40px;
                font-size: 18px;
                text-align: center;
                border: 1px solid #ffca18;
                transition: all 1s ease;
            }
            .social-fb:hover{
                color:  #fff;
                background-color: #007bff;
            }
        </style>
        

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/nicescroll.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/switcher.js"></script>
    </div>
</body>

</html>



