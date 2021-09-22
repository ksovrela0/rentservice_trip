<?php
include("php/func.php");
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>VipTrip - ტრანსფერი</title>


    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Template, html, premium, themeforest" />
    <meta name="description" content="Traveler - Premium template for travel companies">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600' rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel="stylesheet" href="css/bootstrap.css?v=2">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/styles.css?v=2.98">
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
                            <a class="logo" href="index-2.html">
                                <img src="img/logo.jpg" alt="Transfer" title="Image Title" />
                            </a>
                        </div>
                        <div class="col-md-3 col-md-offset-2">
                            
                        </div>
                        <div class="col-md-4">
                            <div class="top-user-area clearfix">
                                <ul class="top-user-area-list list list-horizontal list-border">
                                    <li class="top-user-area-lang nav-drop">
                                        <a href="#">
                                            <img src="img/flags/32/ge.png" alt="Image Alternative text" title="Image Title" />GEO<i class="fa fa-angle-down"></i><i class="fa fa-angle-up"></i>
                                        </a>
                                        <ul class="list nav-drop-menu">
                                            <li>
                                                <a title="English" href="#">
                                                    <img src="img/flags/32/uk.png" alt="Image Alternative text" title="Image Title" /><span class="right">ENG</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title="Russian" href="#">
                                                    <img src="img/flags/32/ru.png" alt="Image Alternative text" title="Image Title" /><span class="right">RUS</span>
                                                </a>
                                            </li>
                                        </ul>
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
                        <li class="active"><a href="#">ტრანსფერი</a>
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


        <div class="bg-holder">
            <div class="bg-mask-darken"></div>
            <div class="bg-parallax"></div>
            <!-- START GRIDROTATOR -->
            <div class="ri-grid" id="ri-grid">
                <div class="bg-front full-center">
                    <div class="container container-transfer">
                        <div class="search-tabs search-tabs-bg">
                            <h1>დაგეგმე შენი ტრანსფერი</h1>
                            <div class="tabbable">
                                <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-car"></i> <span >ტრანსფერი</span></a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab-1">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>საწყისი ლოკაცია</label>
                                                        <select class="form-control" id="location_from">
                                                            <option value="0">აირჩიეთ ლოკაცია</option>
                                                            <?php
                                                                getDefaultLocations();
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                        <label>მიმართულება(სად)</label>
                                                        <select class="form-control" id="location_to">
                                                            <option value="0">აირჩიეთ ლოკაცია</option>
                                                            <?php
                                                                getDefaultLocations();
                                                            ?>
                                                        </select>
                                                        <i class="fa fa-plus add-destination-plus"></i>
                                                    </div>
                                                    <div id="destinations">

                                                    </div>
                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                        <label>თარიღი</label>
                                                        <input class="form-control" name="start" type="text" />
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

        <div class="container prepared_trip">
            <div class="gap"></div>
            <div class="prepared_states">
                <h3 class="text-center mb20 popular_destination">პოპულარული მარშრუტები</h3>
                <div class="category_destination">
                    <h3 class="text-center mb20 dest_title">ტრანსფერები თბილისის აეროპორტიდან</h3>
                    <div class="trips">
                        <div class="destination">
                            თბილისის აეროპორტი – ბათუმი
                        </div>
                        <div class="destination">
                            თბილისის აეროპორტი – ქუთაისი
                        </div>
                        <div class="destination">
                            თბილისის აეროპორტი – გუდაური
                        </div>
                        <div class="destination">
                            თბილისის აეროპორტი – ბაკურიანი
                        </div>
                        <div class="destination">
                            თბილისის აეროპორტი – მესტია
                        </div>
                        <div class="destination">
                            თბილისის აეროპორტი – სტეფანწმინდა
                        </div>
                    </div>
                    
                </div>

                <div class="category_destination">
                    <h3 class="text-center mb20 dest_title">ტრანსფერები ქუთაისის აეროპორტიდან</h3>
                    <div class="trips">
                        <div class="destination">
                            ქუთაისის აეროპორტი – თბილისი
                        </div>
                        <div class="destination">
                            ქუთაისის აეროპორტი – ბათუმი
                        </div>
                        <div class="destination">
                            ქუთაისის აეროპორტი – გუდაური
                        </div>
                        <div class="destination">
                            ქუთაისის აეროპორტი – მესტია
                        </div>
                        <div class="destination">
                            ქუთაისის აეროპორტი – სტეფანწმინდა
                        </div>
                    </div>
                    
                </div>

                <div class="category_destination">
                    <h3 class="text-center mb20 dest_title">ტრანსფერები ერევანში</h3>
                    <h5 class="text-center mb20 dest_alert_title">პანდემიასთან დაკავშირებით ტრანსფერი ხორციელდება საზღვრამდე. სადახლო.</h5> 
                    <div class="trips">
                        <div class="destination">
                            თბილისი – ერევანის აეროპორტი
                        </div>
                        <div class="destination">
                            თბილისი – ერევანი
                        </div>
                        <div class="destination">
                            ქუთაისი – ერევანის აეროპორტი 
                        </div>
                        <div class="destination">
                            ქუთაისი – ერევანი
                        </div>
                        <div class="destination">
                            ბათუმი – ერევანის აეროპორტი ბათუმი – ერევანი
                        </div>
                        <div class="destination">
                            ბათუმი – ერევანი
                        </div>
                    </div>
                    
                </div>
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
                        <li class="car_li actived"><i class="fa fa-car" aria-hidden="true" style="font-size: 36px;"></i>ყველა</li>
                        <li class="car_li"><img src="img/cartypes/sedan_t.png" >სედანი</li>
                        <li class="car_li"><img src="img/cartypes/suv_t.png" >ჯიპი</li>
                        <li class="car_li"><img src="img/cartypes/minivan_t.png" >მინივენი</li>
                        <li class="car_li"><img src="img/cartypes/minibus_t.png" >მიკ-ავტობუსი</li>
                    </ul>
                </div>
                
            </div>
            <div class="gap"></div>
            <h5 class="text-center mb20" style="font-weight:bold;color: #ffca18;">ფასი მოიცავს მგზავრობის სრულ ღირებულებას (და არა ერთი მგზავრის საფასურს)</h5>
            <div class="row">
                <div class="col-xs-12 col-lg-4">
                    <div class="car_dest">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6 car_descr">
                                <div class="car_img_wrapper">
                                    <img class="car_img_thumb" src="https://startrip.ge/timthumb/thumb.php?src=/upload/3XfjaNXCoasrGuMvrtXz9IlCMjfKPl.jpg&w=400&h=300&zc=1&q=70" />
                                    <p class="car_img_title">TOYOTA PRIUS</p>
                                </div>
                                <div class="price_area">
                                    <div class="price_gel">123 GEL</div>
                                    <div class="price_other">123 $</div>
                                    <div class="price_other">123 €</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-pull-6 car_descr">
                                <div class="driver_data">
                                    <div class="driver_name"><p>ირაკლი</p></div>
                                    <div class="driver_avatar"><img class="dr_img" src="https://startrip.ge/timthumb/thumb.php?src=/upload/C8DexBZI0NNxk8p72dDZmnJNkLYo6T.jpg&w=50&h=50&zc=1&q=70" /></div>
                                </div>
                                <div class="driver_other_data">
                                    <div class="dr_language"><i class="fa fa-language" aria-hidden="true"></i> ინგლისური რუსული ივრითი</div>
                                    <div class="dr_fuel"><i class="fas fa-gas-pump"></i> ბენზინი</div>
                                    <div class="dr_seats"><i class="fas fa-chair"></i> 4</div>
                                    <div class="dr_wifi"><i class="fas fa-wifi"></i> კი</div>
                                    <div class="dr_airconditioner"><i class="fas fa-snowflake"></i> კი</div>
                                </div>
                                <div class="car_btn_area">
                                    დაჯავშვნა
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="car_dest">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6 car_descr">
                                <div class="car_img_wrapper">
                                    <img class="car_img_thumb" src="https://startrip.ge/timthumb/thumb.php?src=/upload/OugMImVfH2xMi0KH8aJb3SUOEJDLva.jpg&w=400&h=300&zc=1&q=70" />
                                    <p class="car_img_title">TOYOTA PRIUS</p>
                                </div>
                                <div class="price_area">
                                    <div class="price_gel">123 GEL</div>
                                    <div class="price_other">123 $</div>
                                    <div class="price_other">123 €</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-pull-6 car_descr">
                                <div class="driver_data">
                                    <div class="driver_name"><p>ირაკლი</p></div>
                                    <div class="driver_avatar"><img class="dr_img" src="https://startrip.ge/timthumb/thumb.php?src=/upload/C8DexBZI0NNxk8p72dDZmnJNkLYo6T.jpg&w=50&h=50&zc=1&q=70" /></div>
                                </div>
                                <div class="driver_other_data">
                                    <div class="dr_language"><i class="fa fa-language" aria-hidden="true"></i> ინგლისური რუსული ივრითი</div>
                                    <div class="dr_fuel"><i class="fas fa-gas-pump"></i> ბენზინი</div>
                                    <div class="dr_seats"><i class="fas fa-chair"></i> 4</div>
                                    <div class="dr_wifi"><i class="fas fa-wifi"></i> კი</div>
                                    <div class="dr_airconditioner"><i class="fas fa-snowflake"></i> კი</div>
                                </div>
                                <div class="car_btn_area">
                                    დაჯავშვნა
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="car_dest">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6 car_descr">
                                <div class="car_img_wrapper">
                                    <img class="car_img_thumb" src="https://startrip.ge/timthumb/thumb.php?src=/upload/t6KTqW2Zc77zws1b5VEKE5MSeMyISc.jpg&w=400&h=300&zc=1&q=70" />
                                    <p class="car_img_title">FORD FUSION</p>
                                </div>
                                <div class="price_area">
                                    <div class="price_gel">123 GEL</div>
                                    <div class="price_other">123 $</div>
                                    <div class="price_other">123 €</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-pull-6 car_descr">
                                <div class="driver_data">
                                    <div class="driver_name"><p>ირაკლი</p></div>
                                    <div class="driver_avatar"><img class="dr_img" src="https://startrip.ge/timthumb/thumb.php?src=/upload/C8DexBZI0NNxk8p72dDZmnJNkLYo6T.jpg&w=50&h=50&zc=1&q=70" /></div>
                                </div>
                                <div class="driver_other_data">
                                    <div class="dr_language"><i class="fa fa-language" aria-hidden="true"></i> ინგლისური რუსული ივრითი</div>
                                    <div class="dr_fuel"><i class="fas fa-gas-pump"></i> ბენზინი</div>
                                    <div class="dr_seats"><i class="fas fa-chair"></i> 4</div>
                                    <div class="dr_wifi"><i class="fas fa-wifi"></i> კი</div>
                                    <div class="dr_airconditioner"><i class="fas fa-snowflake"></i> კი</div>
                                </div>
                                <div class="car_btn_area">
                                    დაჯავშვნა
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-lg-4">
                    <div class="car_dest">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6 car_descr">
                                <div class="car_img_wrapper">
                                    <img class="car_img_thumb" src="https://startrip.ge/timthumb/thumb.php?src=/upload/mVxe0V5ha2OFgTd4b0vBw1dUH6wdmP.jpg&w=400&h=300&zc=1&q=70" />
                                    <p class="car_img_title">HYNDAI ELANTRA</p>
                                </div>
                                <div class="price_area">
                                    <div class="price_gel">123 GEL</div>
                                    <div class="price_other">123 $</div>
                                    <div class="price_other">123 €</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-pull-6 car_descr">
                                <div class="driver_data">
                                    <div class="driver_name"><p>ირაკლი</p></div>
                                    <div class="driver_avatar"><img class="dr_img" src="https://startrip.ge/timthumb/thumb.php?src=/upload/C8DexBZI0NNxk8p72dDZmnJNkLYo6T.jpg&w=50&h=50&zc=1&q=70" /></div>
                                </div>
                                <div class="driver_other_data">
                                    <div class="dr_language"><i class="fa fa-language" aria-hidden="true"></i> ინგლისური რუსული ივრითი</div>
                                    <div class="dr_fuel"><i class="fas fa-gas-pump"></i> ბენზინი</div>
                                    <div class="dr_seats"><i class="fas fa-chair"></i> 4</div>
                                    <div class="dr_wifi"><i class="fas fa-wifi"></i> კი</div>
                                    <div class="dr_airconditioner"><i class="fas fa-snowflake"></i> კი</div>
                                </div>
                                <div class="car_btn_area">
                                    დაჯავშვნა
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">
                    <div class="car_dest">
                        <div class="row">
                            <div class="col-md-6 col-md-push-6 car_descr">
                                <div class="car_img_wrapper">
                                    <img class="car_img_thumb" src="https://startrip.ge/timthumb/thumb.php?src=/upload/mVxe0V5ha2OFgTd4b0vBw1dUH6wdmP.jpg&w=400&h=300&zc=1&q=70" />
                                    <p class="car_img_title">HYNDAI ELANTRA</p>
                                </div>
                                <div class="price_area">
                                    <div class="price_gel">123 GEL</div>
                                    <div class="price_other">123 $</div>
                                    <div class="price_other">123 €</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-md-pull-6 car_descr">
                                <div class="driver_data">
                                    <div class="driver_name"><p>ირაკლი</p></div>
                                    <div class="driver_avatar"><img class="dr_img" src="https://startrip.ge/timthumb/thumb.php?src=/upload/C8DexBZI0NNxk8p72dDZmnJNkLYo6T.jpg&w=50&h=50&zc=1&q=70" /></div>
                                </div>
                                <div class="driver_other_data">
                                    <div class="dr_language"><i class="fa fa-language" aria-hidden="true"></i> ინგლისური რუსული ივრითი</div>
                                    <div class="dr_fuel"><i class="fas fa-gas-pump"></i> ბენზინი</div>
                                    <div class="dr_seats"><i class="fas fa-chair"></i> 4</div>
                                    <div class="dr_wifi"><i class="fas fa-wifi"></i> კი</div>
                                    <div class="dr_airconditioner"><i class="fas fa-snowflake"></i> კი</div>
                                </div>
                                <div class="car_btn_area">
                                    დაჯავშვნა
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
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
        <script src="js/bootstrap.js"></script>
        <script src="js/slimmenu.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script src="js/bootstrap-timepicker.js"></script>
        <script src="js/dropit.js"></script>
        <script src="js/select2.js"></script>
        <script src="js/ionrangeslider.js"></script>
        <script src="js/icheck.js"></script>
        <script src="js/fotorama.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAfnQE12ExP7zZnj5SirrP9qEvNV0XXO0"></script>
        <script src="js/typeahead.js"></script>
        <script src="js/card-payment.js"></script>
        <script src="js/magnific.js"></script>
        <script src="js/owl-carousel.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/tweet.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/gridrotator.js"></script>
        <script src="js/custom.js?v=1.8"></script>
        <script src="js/switcher.js"></script>
        <script src="https://kit.fontawesome.com/dcb8a1d54e.js" crossorigin="anonymous"></script>
        
    </div>
</body>

</html>



