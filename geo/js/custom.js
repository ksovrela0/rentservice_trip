"use strict";
var aJaxURL = 'php/ajax.php';
$('ul.slimmenu').slimmenu({
    resizeWidth: '992',
    collapserTitle: 'Main Menu',
    animSpeed: 250,
    indentChildren: true,
    childrenIndenter: ''
});


// Countdown
$('.countdown').each(function() {
    var count = $(this);
    $(this).countdown({
        zeroCallback: function(options) {
            var newDate = new Date(),
                newDate = newDate.setHours(newDate.getHours() + 130);

            $(count).attr("data-countdown", newDate);
            $(count).countdown({
                unixFormat: true
            });
        }
    });
});


$('.btn').button();

$("[rel='tooltip']").tooltip();

$('.form-group').each(function() {
    var self = $(this),
        input = self.find('input');

    input.focus(function() {
        self.addClass('form-group-focus');
    })

    input.blur(function() {
        if (input.val()) {
            self.addClass('form-group-filled');
        } else {
            self.removeClass('form-group-filled');
        }
        self.removeClass('form-group-focus');
    });
});

$('.typeahead').typeahead({
    hint: true,
    highlight: true,
    minLength: 3,
    limit: 8
}, {
    source: function(q, cb) {
        return $.ajax({
            dataType: 'json',
            type: 'get',
            url: 'http://gd.geobytes.com/AutoCompleteCity?callback=?&q=' + q,
            chache: false,
            success: function(data) {
                var result = [];
                $.each(data, function(index, val) {
                    result.push({
                        value: val
                    });
                });
                cb(result);
            }
        });
    }
});


$('input.date-pick, .input-daterange, .date-pick-inline').datepicker({
    todayHighlight: true
});



$('input[name="start"]').datepicker({
    startDate: '+0d',
    format: 'yyyy-mm-dd',
});
$('.input-daterange input[name="end"]').datepicker('setDate', '+7d');

$('input.time-pick').timepicker({
    minuteStep: 15,
    showInpunts: false
})

$('input.date-pick-years').datepicker({
    startView: 2
});




$('.booking-item-price-calc .checkbox label').click(function() {
    var checkbox = $(this).find('input'),
        // checked = $(checkboxDiv).hasClass('checked'),
        checked = $(checkbox).prop('checked'),
        price = parseInt($(this).find('span.pull-right').html().replace('$', '')),
        eqPrice = $('#car-equipment-total'),
        tPrice = $('#car-total'),
        eqPriceInt = parseInt(eqPrice.attr('data-value')),
        tPriceInt = parseInt(tPrice.attr('data-value')),
        value,
        animateInt = function(val, el, plus) {
            value = function() {
                if (plus) {
                    return el.attr('data-value', val + price);
                } else {
                    return el.attr('data-value', val - price);
                }
            };
            return $({
                val: val
            }).animate({
                val: parseInt(value().attr('data-value'))
            }, {
                duration: 500,
                easing: 'swing',
                step: function() {
                    if (plus) {
                        el.text(Math.ceil(this.val));
                    } else {
                        el.text(Math.floor(this.val));
                    }
                }
            });
        };
    if (!checked) {
        animateInt(eqPriceInt, eqPrice, true);
        animateInt(tPriceInt, tPrice, true);
    } else {
        animateInt(eqPriceInt, eqPrice, false);
        animateInt(tPriceInt, tPrice, false);
    }
});


$('div.bg-parallax').each(function() {
    var $obj = $(this);
    if($(window).width() > 992 ){
        $(window).scroll(function() {
            var animSpeed;
            if ($obj.hasClass('bg-blur')) {
                animSpeed = 10;
            } else {
                animSpeed = 15;
            }
            var yPos = -($(window).scrollTop() / animSpeed);
            var bgpos = '50% ' + yPos + 'px';
            $obj.css('background-position', bgpos);

        });
    }
});



$(document).ready(
    
    function() {
        $("#location_from").select2();
        $("#location_to").select2();
        $("#trip_days").select2();

        // Owl Carousel
        var owlCarousel = $('#owl-carousel'),
            owlItems = owlCarousel.attr('data-items'),
            owlCarouselSlider = $('#owl-carousel-slider'),
            owlNav = owlCarouselSlider.attr('data-nav');
        // owlSliderPagination = owlCarouselSlider.attr('data-pagination');

        owlCarousel.owlCarousel({
            items: owlItems,
            navigation: true,
            navigationText: ['', '']
        });

        owlCarouselSlider.owlCarousel({
            slideSpeed: 300,
            paginationSpeed: 400,
            // pagination: owlSliderPagination,
            singleItem: true,
            navigation: true,
            navigationText: ['', ''],
            transitionStyle: 'fade',
            autoPlay: 4500
        });

    // footer always on bottom
    var docHeight = $(window).height();
   var footerHeight = $('#main-footer').height();
   var footerTop = $('#main-footer').position().top + footerHeight;
   
   if (footerTop < docHeight) {
    $('#main-footer').css('margin-top', (docHeight - footerTop) + 'px');
   }
    }

);


$('.nav-drop').dropit();


$("#price-slider").ionRangeSlider({
    min: 130,
    max: 575,
    type: 'double',
    prefix: "$",
    // maxPostfix: "+",
    prettify: false,
    hasGrid: true
});

$('.i-check, .i-radio').iCheck({
    checkboxClass: 'i-check',
    radioClass: 'i-radio'
});



$('.booking-item-review-expand').click(function(event) {
    console.log('baz');
    var parent = $(this).parent('.booking-item-review-content');
    if (parent.hasClass('expanded')) {
        parent.removeClass('expanded');
    } else {
        parent.addClass('expanded');
    }
});


$('.stats-list-select > li > .booking-item-rating-stars > li').each(function() {
    var list = $(this).parent(),
        listItems = list.children(),
        itemIndex = $(this).index();

    $(this).hover(function() {
        for (var i = 0; i < listItems.length; i++) {
            if (i <= itemIndex) {
                $(listItems[i]).addClass('hovered');
            } else {
                break;
            }
        };
        $(this).click(function() {
            for (var i = 0; i < listItems.length; i++) {
                if (i <= itemIndex) {
                    $(listItems[i]).addClass('selected');
                } else {
                    $(listItems[i]).removeClass('selected');
                }
            };
        });
    }, function() {
        listItems.removeClass('hovered');
    });
});



$('.booking-item-container').children('.booking-item').click(function(event) {
    if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $(this).parent().removeClass('active');
    } else {
        $(this).addClass('active');
        $(this).parent().addClass('active');
        $(this).delay(1500).queue(function() {
            $(this).addClass('viewed')
        });
    }
});


$('.form-group-cc-number input').payment('formatCardNumber');
$('.form-group-cc-date input').payment('formatCardExpiry');
$('.form-group-cc-cvc input').payment('formatCardCVC');




if ($('#map-canvas').length) {
    var map,
        service;

    jQuery(function($) {
        $(document).ready(function() {
            var latlng = new google.maps.LatLng(40.7564971, -73.9743277);
            var myOptions = {
                zoom: 16,
                center: latlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false
            };

            map = new google.maps.Map(document.getElementById("map-canvas"), myOptions);


            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });
            marker.setMap(map);


            $('a[href="#google-map-tab"]').on('shown.bs.tab', function(e) {
                google.maps.event.trigger(map, 'resize');
                map.setCenter(latlng);
            });
        });
    });
}


$('.card-select > li').click(function() {
    self = this;
    $(self).addClass('card-item-selected');
    $(self).siblings('li').removeClass('card-item-selected');
    $('.form-group-cc-number input').click(function() {
        $(self).removeClass('card-item-selected');
    });
});
// Lighbox gallery
$('#popup-gallery').each(function() {
    $(this).magnificPopup({
        delegate: 'a.popup-gallery-image',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});

// Lighbox image
$('.popup-image').magnificPopup({
    type: 'image'
});

// Lighbox text
$('.popup-text').magnificPopup({
    removalDelay: 500,
    closeBtnInside: true,
    callbacks: {
        beforeOpen: function() {
            this.st.mainClass = this.st.el.attr('data-effect');
        }
    },
    midClick: true
});

// Lightbox iframe
$('.popup-iframe').magnificPopup({
    dispableOn: 700,
    type: 'iframe',
    removalDelay: 160,
    mainClass: 'mfp-fade',
    preloader: false
});


$('.form-group-select-plus').each(function() {
    var self = $(this),
        btnGroup = self.find('.btn-group').first(),
        select = self.find('select');
    btnGroup.children('label').last().click(function() {
        btnGroup.addClass('hidden');
        select.removeClass('hidden');
    });
});
// Responsive videos
$(document).ready(function() {
    $("body").fitVids();
});

$(function($) {
    $("#twitter").tweet({
        username: "remtsoy", //!paste here your twitter username!
        count: 3
    });
});

$(function($) {
    $("#twitter-ticker").tweet({
        username: "remtsoy", //!paste here your twitter username!
        page: 1,
        count: 20
    });
});

$(document).ready(function() {
    var ul = $('#twitter-ticker').find(".tweet-list");
    var ticker = function() {
        setTimeout(function() {
            ul.find('li:first').animate({
                marginTop: '-4.7em'
            }, 850, function() {
                $(this).detach().appendTo(ul).removeAttr('style');
            });
            ticker();
        }, 5000);
    };
    ticker();
});
$(function() {
    $('#ri-grid').gridrotator({
        rows: 4,
        columns: 8,
        animType: 'random',
        animSpeed: 1200,
        interval: 1200,
        step: 'random',
        preventClick: false,
        maxStep: 2,
        w992: {
            rows: 5,
            columns: 4
        },
        w768: {
            rows: 6,
            columns: 3
        },
        w480: {
            rows: 8,
            columns: 3
        },
        w320: {
            rows: 5,
            columns: 4
        },
        w240: {
            rows: 6,
            columns: 4
        }
    });

});


$(function() {
    $('#ri-grid-no-animation').gridrotator({
        rows: 4,
        columns: 8,
        slideshow: false,
        w1024: {
            rows: 4,
            columns: 6
        },
        w768: {
            rows: 3,
            columns: 3
        },
        w480: {
            rows: 4,
            columns: 4
        },
        w320: {
            rows: 5,
            columns: 4
        },
        w240: {
            rows: 6,
            columns: 4
        }
    });

});

var tid = setInterval(tagline_vertical_slide, 2500);

// vertical slide
function tagline_vertical_slide() {
    var curr = $("#tagline ul li.active");
    curr.removeClass("active").addClass("vs-out");
    setTimeout(function() {
        curr.removeClass("vs-out");
    }, 500);

    var nextTag = curr.next('li');
    if (!nextTag.length) {
        nextTag = $("#tagline ul li").first();
    }
    nextTag.addClass("active");
}

function abortTimer() { // to be called when you want to stop the timer
    clearInterval(tid);
}



$(document).on('click', '.add-destination-plus', function(){
    var options;
    $.ajax({
        url: aJaxURL,
        dataType: 'json',
        data: {
            act: "get_additional_options",
            type: 1
        },
        success: function(data) {
            options = data.options;
            $('#destinations').append(` <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                            <label>მიმართულება(სად)</label>
                                            <select class="form-control location_tos">
                                                <option value="0">აირჩიეთ ლოკაცია</option>
                                                `+options+`
                                            </select>
                                            <i class="fa fa-minus add-destination-minus"></i>
                                        </div>`);
        }
    });

});

$(document).on('click', '.add-destination-minus', function(){
    $(this).parent().remove();
    var origin_base = $("#location_from").val();
    var destination_base = $("#location_to").val();
    var trip_days = $("#trip_days").val();
    var waypoints = [];
    $(".location_tos").each(function(){
        waypoints.push($(this).val());
    })

    if(trip_days > 0 && destination_base > 0 && origin_base > 0){
        filterCars(origin_base,destination_base,trip_days,waypoints);
    }
});

$(document).on('click', '.destination', function(){
    var start_id = $(this).attr('start-id');
    var end_id = $(this).attr('end-id');

    $("#location_from").val(start_id);
    $('#location_from').trigger('change');

    $("#location_to").val(end_id);
    $('#location_to').trigger('change');

    
    $("#trip_days").val(1);
    $('#trip_days').trigger('change');
})

$(document).on('click', ".car_li", function(){
    $(".car_li").each(function(){
        $(this).removeClass('actived');
    });
    $(this).addClass('actived')
    var origin_base = $("#location_from").val();
    var destination_base = $("#location_to").val();
    var trip_days = $("#trip_days").val();
    var waypoints = [];
    $(".location_tos").each(function(){
        waypoints.push($(this).val());
    })

    if(trip_days > 0 && destination_base > 0 && origin_base > 0){
        filterCars(origin_base,destination_base,trip_days,waypoints,$(this).attr('data-id'));
    }
})

$(document).on('change', '#location_from,#location_to,#trip_days,.location_tos', function(){
    var origin_base = $("#location_from").val();
    var destination_base = $("#location_to").val();
    var trip_days = $("#trip_days").val();
    var waypoints = [];
    $(".location_tos").each(function(){
        waypoints.push($(this).val());
    })

    if(trip_days > 0 && destination_base > 0 && origin_base > 0){
        filterCars(origin_base,destination_base,trip_days,waypoints);
    }
});

$(document).on('click', '.makeOrder', function(){
    if($("#trip_start").val() == ''){
        alert("დასაჯავშვნად გთხოვთ აირჩიოთ ტრანსფერის თარიღი");
    }
    else{
        $("#ordercar").click();
        $("#car_token").val($(this).attr('data-car'));
    }
    
})

$(document).on('click', '.placeOrder', function(){
    const order = new Object();
    order.act = 'order_car';
    order.car = $("#car_token").val();
    order.fullname = $("#cl_fullname").val();
    order.phone = $("#cl_phone").val();
    order.email = $("#cl_email").val(); 
    order.address = $("#cl_address").val();
    order.comment = $("#cl_comment").val();
    order.origin_base = $("#location_from").val();
    order.destination_base = $("#location_to").val();
    order.trip_days = $("#trip_days").val();
    order.trip_start = $("#trip_start").val();
    var waypoints = [];
    $(".location_tos").each(function(){
        waypoints.push($(this).val());
    });
    order.waypoints = waypoints;
    var itsok = 0;
    if(order.fullname == '' || order.phone == '' || order.email == '' || order.address == ''){
        itsok++;
        alert("გთხოვთ შეავსოთ ყველა ველი");
    }

    if(itsok == 0){
        $.ajax({
            url: aJaxURL,
            dataType: 'json',
            data: order,
            success: function(data) {
                if(data.status == '000'){
                    $(".modal-body").html(`<div class="order_success">თქვენი შეკვეთა მიღებულია!!!</div>`);
                    $(".modal-footer").hide();
                }
            }
        });
    }
    


});

/* $.ajax({
    url: aJaxURL,
    dataType: 'json',
    data: {
        act: "calculate_distance_data",
        type: 1
    },
    success: function(data) {
       
    }
}); */


function filterCars(origin_base,destination_base,trip_days,waypoints = 0,car_type = 0){
    $(".prepared_trip").hide();
    $(".cars_area").show();
    $("#carData").html('');
    $.ajax({
        url: aJaxURL,
        dataType: 'json',
        data: {
            act: "calculate_distance_data",
            origin_base: origin_base,
            destination_base: destination_base,
            trip_days: trip_days,
            waypoints: waypoints,
        },
        success: function(data) {
            $("#tripDistance").html(data.tripDistanceKM);
            $("#tripDuration").html(data.tripDuration);

            $("#map_area").show();
            drawMap(data.markers);

            $.ajax({
                url: aJaxURL,
                dataType: 'json',
                data: {
                    act: "get_cars",
                    distance: data.tripDistanceKM,
                    trip_days: trip_days,
                    car_type: car_type
                },
                success: function(data) {
                    $("#carData").html('');
                    var cars = data.cars;
                    
                    for(let i = 0; i < cars.length; i++){
                        $("#carData").append(`  <div class="col-xs-12 col-lg-4">
                                                    <div class="car_dest">
                                                        <div class="row">
                                                            <div class="col-md-6 col-md-push-6 car_descr">
                                                                <div class="car_img_wrapper">
                                                                    <img class="car_img_thumb" src="`+cars[i].image+`" />
                                                                    <p class="car_img_title">`+cars[i].car_name+`</p>
                                                                </div>
                                                                <div class="price_area">
                                                                    <div class="price_gel">`+cars[i].price_gel+` GEL</div>
                                                                    <div class="price_other">`+cars[i].price_usd+` $</div>
                                                                    <div class="price_other">`+cars[i].price_eur+` €</div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-md-pull-6 car_descr">
                                                                <div class="driver_data">
                                                                    <div class="driver_name"><p>`+cars[i].driver_name+`</p></div>
                                                                    <div class="driver_avatar"><img class="dr_img" src="`+cars[i].driver_avatar+`" /></div>
                                                                </div>
                                                                <div class="driver_other_data">
                                                                    <div class="dr_language"><i class="fa fa-language" aria-hidden="true"></i> `+cars[i].languages+`</div>
                                                                    <div class="dr_fuel"><i class="fas fa-gas-pump"></i> `+cars[i].fuel_type+`</div>
                                                                    <div class="dr_seats"><i class="fas fa-chair"></i> `+cars[i].seats+`</div>
                                                                    <div class="dr_wifi"><i class="fas fa-wifi"></i> `+cars[i].wifi+`</div>
                                                                    <div class="dr_airconditioner"><i class="fas fa-snowflake"></i> `+cars[i].air_conditioner+`</div>
                                                                </div>
                                                                <div class="car_btn_area makeOrder" data-car="`+cars[i].id+`">
                                                                    დაჯავშვნა
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>`);
                    }
                    
                    
                }
            });
        }
    });
}



function drawMap(markers){
    
    /* var markers = [{
        "latitude": '18.641400',
        "longitude": '72.872200'
      },
      {
        "latitude": '18.964700',
        "longitude": '72.825800'
      },
      {
        "latitude": '18.523600',
        "longitude": '73.847800'
      }
    ]; */

      var mapOptions = {
        center: new google.maps.LatLng(markers[0].latitude, markers[0].longitude),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById("map_area"), mapOptions);
      var infoWindow = new google.maps.InfoWindow();
      var lat_lng = new Array();
      var latlngbounds = new google.maps.LatLngBounds();
      for (i = 0; i < markers.length; i++) {
        var data = markers[i]
        var myLatlng = new google.maps.LatLng(data.latitude, data.longitude);
        lat_lng.push(myLatlng);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: data.timestamp
        });
        // console.log(i)
    
        latlngbounds.extend(marker.position);
        (function(marker, data) {
          google.maps.event.addListener(marker, "click", function(e) {
            infoWindow.setContent(data.timestamp);
            infoWindow.open(map, marker);
          });
        })(marker, data);
      }
      map.setCenter(latlngbounds.getCenter());
      map.fitBounds(latlngbounds);
    
      //***********ROUTING****************//
    
    
      //Initialize the Direction Service
      var service = new google.maps.DirectionsService();
    
    
    
    
      //Loop and Draw Path Route between the Points on MAP
      for (var i = 0; i < lat_lng.length; i++) {
        if ((i + 1) < lat_lng.length) {
          var src = lat_lng[i];
          var des = lat_lng[i + 1];
          // path.push(src);
    
          service.route({
            origin: src,
            destination: des,
            travelMode: google.maps.DirectionsTravelMode.DRIVING
          }, function(result, status) {
            if (status == google.maps.DirectionsStatus.OK) {
    
              //Initialize the Path Array
              var path = new google.maps.MVCArray();
              //Set the Path Stroke Color
              var poly = new google.maps.Polyline({
                map: map,
                strokeColor: '#4986E7'
              });
              poly.setPath(path);
              for (var i = 0, len = result.routes[0].overview_path.length; i < len; i++) {
                path.push(result.routes[0].overview_path[i]);
              }
            }
          });
        }
      }
    
    
}