<?php
include("../class.Mysqli.php");
GLOBAL $db;
$db = new dbClass();
if(!isset($_SESSION['user_id'])){
    header("Location: index.php");
}
else{
    $user_id = $_SESSION['user_id'];
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>VipTrip - შეკვეთები</title>


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
                    <li><a href="reviews.php">კომენტარები</a>
                    </li>
                    <li><a href="#">კონტაქტი</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </header>

        <div class="container">
            <h1 class="page-title" style="color:white; ">შეკვეთები</h1>
        </div>




        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <aside class="user-profile-sidebar">
                        <div class="user-profile-avatar text-center">
                            <?php
                                $db->setQuery(" SELECT  CONCAT(firstname_geo, ' ', lastname) AS name,
                                                        IFNULL(users.avatar, 'no-avatar.jpg') AS avatar

                                                FROM    users
                                                WHERE   id = '$user_id'");
                                $driver = $db->getResultArray();
                                $driver = $driver['result'][0];
                                echo '
                                    <img src="'.$driver[avatar].'" alt="Image Alternative text" title="AMaze" />
                                    <h5>'.$driver[name].'</h5>
                                ';
                            ?>
                            
                        </div>
                        <ul class="list user-profile-nav">
                            <li><a href="orders.php"><i class="fa fa-clock-o"></i>შეკვეთები</a>
                            </li>
                            <li><a href="#"><i class="fa fa-calendar"></i>დღეების გამორთვა</a>
                            </li>
                            <li><a href="#"><i class="fa fa-cog"></i>მანქანა</a>
                            </li>
                            
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <table class="table table-bordered table-striped table-booking-history">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>მარშრუტი</th>
                                <th>კლიენტი</th>
                                <th>დაწყება</th>
                                <th>დღეების რ-ბა</th>
                                <th>მანძილი</th>
                                <th>დრო</th>
                                <th>მისამართი</th>
                                <th>კომენტარი</th>
                                <th>ფასი</th>
                                <th>სტატუსი</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $db->setQuery(" SELECT  orders.id,
                                                        orders.trip_route,
                                                        CONCAT(orders.cl_name, ' ', orders.cl_phone, ' ', orders.cl_email ) AS client,
                                                        orders.trip_start_date,
                                                        orders.trip_days,
                                                        orders.trip_distance,
                                                        orders.trip_duration,
                                                        orders.cl_address,
                                                        orders.cl_comment,
                                                        CONCAT(orders.price_gel,'GEL ', orders.price_usd, 'USD ', orders.price_eur, 'EUR') AS price,
                                                        CASE
                                                            WHEN orders.status = 1 THEN CONCAT('<button class=\"confirmOrder\" data-id=\"',orders.id,'\">დადასტურება</button>')
                                                            WHEN orders.status = 2 THEN '<span style=\"color:#fff;background-color:green;padding:5px; border-radius:8px; font-size: 15px;\">OK</span>'
                                                            WHEN orders.status = 4 THEN '<span style=\"color:#fff;background-color:red;padding:5px; border-radius:8px; font-size: 15px;\">გაუქმ.</span>'
                                                        END AS status
                                                FROM    orders
                                                JOIN    cars ON cars.id = orders.car_id
                                                JOIN    users ON users.id = cars.user_id
                                                WHERE   orders.status IN (1,2) AND users.id = '$user_id'");
                                $orders = $db->getResultArray();

                                foreach($orders['result'] AS $item){
                                    echo '
                                    
                                    <tr>
                                        <td>'.$item['id'].'</td>
                                        <td>'.$item['trip_route'].'</td>
                                        <td>'.$item['client'].'</td>
                                        <td>'.$item['trip_start_date'].'</td>
                                        <td>'.$item['trip_days'].'</td>
                                        <td>'.$item['trip_distance'].' KM</td>
                                        <td>'.$item['trip_duration'].'</td>
                                        <td>'.$item['cl_address'].'</td>
                                        <td>'.$item['cl_comment'].'</td>
                                        <td>'.$item['price'].'</td>
                                        <td>'.$item['status'].'</td>
                                    </tr>
                                    
                                    ';
                                }
                            ?>             
                        </tbody>
                    </table>
                </div>
            </div>
        </div>



        <div class="gap"></div>

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

        <script>
            $(document).on('click','.confirmOrder', function(){
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '../php/ajax.php',
                    dataType: 'json',
                    data: "act=confirmOrder&orderID="+id,
                    success: function(data) {
                        if(data.status == '000'){
                            location.reload();
                        }
                    }
                });
            })
        </script>
    </div>
</body>

</html>



