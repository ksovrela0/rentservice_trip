<?php
include("../class.Mysqli.php");
GLOBAL $db;
$db = new dbClass();
if(!isset($_SESSION['driver_id'])){
    header("Location: index.php");
}
else{
    $user_id = $_SESSION['driver_id'];
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>VipTrip - დღეების გამორთვა</title>


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
    <link rel="stylesheet" href="../css/ui.css">
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
                            <li><a href="dayoff.php"><i class="fa fa-calendar"></i>დღეების გამორთვა</a>
                            </li>
                            
                            
                        </ul>
                    </aside>
                </div>
                <div class="col-md-9">
                    <div id="dayoff"></div>
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
        <script src="../js/switcher.js"></script>
        <script src="../js/ui.js"></script>
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

            

            $(document).ready(function(){
                $.ajax({
                    url: '../php/ajax.php',
                    dataType: 'json',
                    data: 'act=get_disabled_dates&driver_id=<?php echo $user_id; ?>',
                    success: function(data) {

                        var unavailableDates = [];

                        var dates = data.dates;
                        if(dates != null){
                            dates.forEach(function(item){
                                var splited_date = item.dis_date.split('-');
                                if(splited_date[1][0] == '0'){
                                    splited_date[1].slice(1)
                                    splited_date[1] = splited_date[1].slice(1);

                                    item.dis_date = splited_date[0]+'-'+splited_date[1]+'-'+splited_date[2];
                                }

                                
                                unavailableDates.push(item.dis_date)
                            })
                        }

                        

                        function unavailable(date) {
                            dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
                            if ($.inArray(dmy, unavailableDates) == -1) {
                                return [true, ""];
                            } else {
                                return [false, "", "Unavailable"];
                            }
                        }


                        $("#dayoff").datepicker({
                            dateFormat: 'yy-mm-dd',
                            beforeShowDay: unavailable,
                            startDate: new Date(),
                            onSelect: function (date) {
                                $.ajax({
                                    url: '../php/ajax.php',
                                    dataType: 'json',
                                    data: 'act=disable_date&driver_id=<?php echo $user_id; ?>&date='+date,
                                    success: function(data) {
                                        location.reload();
                                    }
                                });
                            }
                            
                        });
                        
                    }
                });

                $(document).on('click', 'td.ui-state-disabled', function(){
                    var day = $(this).find('span').html();
                    var month = $(".ui-datepicker-month").html();
                    var year = $(".ui-datepicker-year").html();

                    if(month == 'January'){
                        month = '01';
                    }
                    else if(month == 'February'){
                        month = '02';
                    }
                    else if(month == 'March'){
                        month = '03';
                    }
                    else if(month == 'April'){
                        month = '04';
                    }
                    else if(month == 'May'){
                        month = '05';
                    }
                    else if(month == 'June'){
                        month = '06';
                    }
                    else if(month == 'July'){
                        month = '07';
                    }
                    else if(month == 'August'){
                        month = '08';
                    }
                    else if(month == 'September'){
                        month = '09';
                    }
                    else if(month == 'October'){
                        month = '10';
                    }
                    else if(month == 'November'){
                        month = '11';
                    }
                    else if(month == 'December'){
                        month = '12';
                    }
                    var disabled_date = year+'-'+month+'-'+day;
                    $.ajax({
                        url: '../php/ajax.php',
                        dataType: 'json',
                        data: 'act=turn_on&driver_id=<?php echo $user_id; ?>&date='+disabled_date,
                        success: function(data) {
                            location.reload();
                        }
                    });

                })
            });
        </script>

        <style>
            .ui-state-disabled {
                cursor: pointer!important;
                pointer-events: all!important;
            }
        </style>
    </div>
</body>

</html>



