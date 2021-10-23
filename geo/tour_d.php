<?php
include("php/func.php");
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>VipTrip - ტური - <?php getTourDetail('name', $_REQUEST['id']); ?></title>


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
                        <li class="active"><a href="tours.php">ტურები</a>
                        </li>
                        <li><a href="reviews.php">კომენტარები</a>
                        </li>
                        <li><a href="contact.php">კონტაქტი</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </header>


        <div class="bg-holder">
            <div class="bg-mask-darken"></div>
            <div class="bg-parallax"></div>
            <!-- START GRIDROTATOR -->
            <div class="ri-grid" id="ri-grid" style="background-image: url(<?php getTourDetail('image', $_REQUEST['id']); ?>)">
                <div class="bg-front full-center">
                    <div class="container container-transfer">
                        <div class="search-tabs search-tabs-bg">
                            <h5 style="color: #ffca18; font-weight: 800;"><?php getTourDetail('name', $_REQUEST['id']); ?></h5>
                            <div class="tabbable">
                                
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab-1">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-group-lg form-group-icon-left noevents"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>საწყისი ლოკაცია</label>
                                                        <select class="form-control" id="location_from">
                                                            <option value="0">აირჩიეთ ლოკაცია</option>
                                                            <?php
                                                                getDefaultLocations();
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group form-group-lg form-group-icon-left noevents"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>მიმართულება(სად)</label>
                                                        <select class="form-control" id="location_to">
                                                            <option value="0">აირჩიეთ ლოკაცია</option>
                                                            <?php
                                                                getDefaultLocations();
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div id="destinations" class="noevents">

                                                    </div>
                                                    <div class="add-destination-plus" style="display:none;">
                                                        დაამატეთ მიმართულება <i class="fa fa-plus"></i>
                                                    </div>
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>თარიღი</label>
                                                        <input class="form-control" name="start" type="text" id="trip_start"/>
                                                    </div>
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fas fa-clock input-icon"></i>
                                                        <label>რამდენი დღით ჯავშნით</label>
                                                        <select class="form-control" id="trip_days">
                                                            <option value="0">აირჩიეთ დღეები ოდენობა</option>
                                                            <?php
                                                                for($i = 1; $i <= 30; $i++){
                                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END GRIDROTATOR -->
            
        </div>

        <div class="container">
            <div class="gap"></div>
            <h3 class="text-center mb20 popular_destination"><?php getTourDetail('name', $_REQUEST['id']); ?></h3>
            <div class="tour_desc">
                <?php getTourDetail('desc', $_REQUEST['id']); ?>
            </div>
            <div class="gap gap-small"></div>
        </div>
        <div class="container" id="map_area" style="display:none; height:400px; margin-top:10px;">
        </div>
        <div class="container cars_area" style="display:none; border-top: 1px solid black;border-radius: 40px; margin-top:10px;">
            <div class="trip_data">
                <div class="trip_distance">მარშუტის სიგრძე: <span class="changable_text" id="tripDistance">0</span> კმ</div>
                <div class="trip_duration">მგზავრობის ხანგრძლივობა: <span class="changable_text" id="tripDuration">00:00</span> სთ</div>
            </div>
            <div class="fleet_filter">
                <div class="fleet_type">
                    <ul class="car_types">
                        <li class="car_li actived" data-id="0"><i class="fa fa-car" aria-hidden="true" style="font-size: 36px;"></i>ყველა</li>
                        <li class="car_li" data-id="1"><img src="img/cartypes/sedan_t.png" >სედანი</li>
                        <li class="car_li" data-id="2"><img src="img/cartypes/suv_t.png" >ჯიპი</li>
                        <li class="car_li" data-id="3"><img src="img/cartypes/minivan_t.png" >მინივენი</li>
                        <li class="car_li" data-id="4"><img src="img/cartypes/minibus_t.png" >მიკ-ავტობუსი</li>
                    </ul>
                </div>
                
            </div>
            <div class="gap"></div>
            <h5 class="text-center mb20" style="font-weight:bold;color: #ffca18;">ფასი მოიცავს მგზავრობის სრულ ღირებულებას (და არა ერთი მგზავრის საფასურს)</h5>
            <div class="row" id="carData">
                
            </div>
            <div class="gap gap-small"></div>
        </div>


        <!-- <div class="container">
            <div class="gap"></div>
            <h2 class="text-center mb20">Top Travel Destinations</h2>
            <div class="row row-wrap">
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="img/the_journey_home_400x300.jpg" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Africa</h4>
                            <p class="thumb-desc">Hendrerit nam congue habitant maecenas tempus netus penatibus</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="img/people_on_the_beach_800x600.jpg" alt="Image Alternative text" title="people on the beach" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Australia</h4>
                            <p class="thumb-desc">Massa ridiculus ad parturient inceptos sit consequat penatibus</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="img/lack_of_blue_depresses_me_800x600.jpg" alt="Image Alternative text" title="lack of blue depresses me" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">Greece</h4>
                            <p class="thumb-desc">Odio cras congue montes dictum facilisi posuere nunc</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumb">
                        <header class="thumb-header">
                            <a class="hover-img curved" href="#">
                                <img src="img/upper_lake_in_new_york_central_park_800x600.jpg" alt="Image Alternative text" title="Upper Lake in New York Central Park" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>
                            </a>
                        </header>
                        <div class="thumb-caption">
                            <h4 class="thumb-title">USA</h4>
                            <p class="thumb-desc">Massa inceptos conubia ridiculus neque aliquam commodo faucibus</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="gap gap-small"></div>
        </div> -->




        <script src="js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $.ajax({
                    url: aJaxURL,
                    dataType: 'json',
                    data: "act=get_tour&tour_id=<?php echo $_REQUEST['id']; ?>",
                    success: function(data) {
                        $("#location_from").val(data.start_location);
                        $('#location_from').trigger('change');
                        var end_location = data.end_location;
                        var waypoints = data.waypoints;
                        waypoints = waypoints.split(',');
                        var waypointsLen = waypoints.length;
                        
                        $("#location_to").val(waypoints[0]);
                        $('#location_to').trigger('change');
                        waypoints.shift();
                        
                        console.log(waypoints)
                        $.ajax({
                            url: aJaxURL,
                            dataType: 'json',
                            data: {
                                act: "get_additional_options",
                                type: 1
                            },
                            success: function(data) {
                                options = data.options;
                                for(let i = 0; i < waypointsLen; i++){
                                    $('#destinations').append(` <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                <label>მიმართულება(სად)</label>
                                                                <select class="form-control location_tos" id="loc_`+waypoints[i]+`">
                                                                    <option value="0">აირჩიეთ ლოკაცია</option>
                                                                    `+options+`
                                                                </select>
                                                                <i class="fa fa-minus add-destination-minus"></i>
                                                            </div>`);
                                    $("#loc_"+waypoints[i]).val(waypoints[i]);
                                    $("#loc_"+waypoints[i]).trigger('change');
                                }
                                $("#loc_undefined").val(end_location);
                                $('#loc_undefined').trigger('change');
                                $("#trip_days").val(1);
                                $('#trip_days').trigger('change');
                                $(".add-destination-plus").hide();
                            }
                        });
                        
                    }
                });
            });
        </script>
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
        <script src="js/custom.js?v=2.93"></script>
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
                    <h5 class="modal-title" id="exampleModalLabel">დაჯავშვნა</h5>
                    <button type="button" style="opacity:1!important;margin-top: -25px;" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input class="form-control cl_inputs" placeholder="სახელი და გვარი" id="cl_fullname">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input class="form-control cl_inputs" placeholder="ტელეფონი" id="cl_phone">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input class="form-control cl_inputs" placeholder="E-mail" id="cl_email">
                            </div>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <div class="form-group">
                                <input class="form-control cl_inputs" placeholder="აყვანის მისამართი" id="cl_address">
                            </div>
                        </div>
                        <div class="col-md-12 col-xs-12">
                            <div class="form-group">
                                <textarea class="form-control cl_inputs" placeholder="კომენტარი" id="cl_comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer" style="text-align:center!important;">
                    <button style="width:100%" type="button" class="btn btn-primary placeOrder">დაჯავშვნა</button>
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
        .tour_desc{
            border: 1px solid #ffca18;
            padding: 7px;
            color: #fff;
            background-color: #484848;
            border-radius: 15px;
        }
    </style>
</body>

</html>



