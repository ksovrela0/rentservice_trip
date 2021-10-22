<?php
include("php/func.php");
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>VipTrip - Отзывы</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="css/bootstrap.css?v=3">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/styles.css?v=4.0">
    <link rel="stylesheet" href="css/select2.css?v=1.3"/>
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
    <div class="global-wrap">
        <header id="main-header">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a class="logo" href="index.php">
                                <img src="img/logo.jpg" alt="Transfer" title="Image Title" />
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
                                        <a title="Georgian" href="../geo/index.php">
                                            <img src="img/flags/32/ge.png" alt="Image Alternative text" title="Image Title" /><span class="right">GEO</span>
                                        </a>
                                    </li>
                                    <li class="top-user-area-lang">
                                        <a title="Russian" href="index.php">
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
                    <li><a href="index.php">Трансфер</a>
                        </li>
                        <li><a href="tours.php">Туры</a>
                        </li>
                        <li class="active"><a href="reviews.php">Отзывы</a>
                        </li>
                        <li><a href="contact.php">Контакт</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </header>

        <div class="container prepared_trip">
            <div class="gap"></div>
            <h3 class="text-center mb20 popular_destination">Отзывы</h3>
            <?php
                $db->setQuery("SELECT *
                                FROM reviews
                                ORDER BY date DESC");
                $revs = $db->getResultArray();

                foreach($revs['result'] AS $rev){
                    echo '  <div class="col-md-12">
                                <div class="comment_rev">
                                    <p style="color:#ffca18">'.$rev[name].' ('.$rev[date].')</p>
                                    <div class="rev_desc">
                                        '.$rev[desc].'       
                                    </div>
                                    
                                </div>
                            </div>';
                }
            ?>
            
            <div class="gap gap-small"></div>
        </div>
       
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/select2.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCKHmTCzDHpTTBRQ4dTfR9d8xkmO-9OsqA"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js?v=2.7"></script>
        <script src="js/switcher.js"></script>
        <script src="https://kit.fontawesome.com/dcb8a1d54e.js" crossorigin="anonymous"></script>
        
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" id="ordercar" data-toggle="modal" data-target="#exampleModal" style="display:none;">
    Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Order</h5>
                    <button type="button" style="opacity:1!important;margin-top: -25px;" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input class="form-control cl_inputs" placeholder="Fullname" id="cl_fullname">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input class="form-control cl_inputs" placeholder="Phone" id="cl_phone">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input class="form-control cl_inputs" placeholder="E-mail" id="cl_email">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input class="form-control cl_inputs" placeholder="Pickup address" id="cl_address">
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <textarea class="form-control cl_inputs" placeholder="Comment" id="cl_comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="text-align:center!important;">
                    <button style="width:100%" type="button" class="btn btn-primary placeOrder">Book Now</button>
                </div>
                <input type="hidden" value="0" id="car_token">
            </div>
        </div>
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
        .comment_rev{
            padding: 7px;
            border: 1px solid #ffca18;
            margin: 4px;
            color: #fff;
            background-color: #484848;
        }
    </style>
</body>

</html>



