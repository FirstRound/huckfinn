<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>huckfinn</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/media.css" rel="stylesheet"> 
    <script>
        function initMap() {
        var uluru = {lat: 34.0717487, lng: -117.5925061};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: uluru
        });
        var infowindow = new google.maps.InfoWindow({
            content: '<p>Huck Finn Jubilee</p>'
          });

          var styledMapType = new google.maps.StyledMapType(
            [
              {
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#f5f5f5"
                  }
                ]
              },
              {
                "elementType": "labels.icon",
                "stylers": [
                  {
                    "visibility": "off"
                  }
                ]
              },
              {
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#616161"
                  }
                ]
              },
              {
                "elementType": "labels.text.stroke",
                "stylers": [
                  {
                    "color": "#f5f5f5"
                  }
                ]
              },
              {
                "featureType": "administrative.land_parcel",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#bdbdbd"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#eeeeee"
                  }
                ]
              },
              {
                "featureType": "poi",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#757575"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#e5e5e5"
                  }
                ]
              },
              {
                "featureType": "poi.park",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              },
              {
                "featureType": "road",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#ffffff"
                  }
                ]
              },
              {
                "featureType": "road.arterial",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#757575"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#dadada"
                  }
                ]
              },
              {
                "featureType": "road.highway",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#616161"
                  }
                ]
              },
              {
                "featureType": "road.local",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              },
              {
                "featureType": "transit.line",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#e5e5e5"
                  }
                ]
              },
              {
                "featureType": "transit.station",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#eeeeee"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [
                  {
                    "color": "#c9c9c9"
                  }
                ]
              },
              {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [
                  {
                    "color": "#9e9e9e"
                  }
                ]
              }
            ],
            {name: 'Styled Map'});

            map.mapTypes.set('styled_map', styledMapType);


            map.setMapTypeId('styled_map');

                var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                title: 'Huck Finn Jubilee'
            });
            infowindow.open(map, marker);
        }
    </script>
</head>

<body>
<div class="corner_label hidden-xs">
    <a href="tickets.html"><img src="img/top_ticket.png" class="img-responsive" alt=""></a>
    <a href="/"><img src="img/corner_label.png" class="img-responsive" alt=""></a>
</div>
    <div class="main-menu fixed-menu">
        <ul class="lvl-1-wrapp">
            <li class="lvl-1">
                <a href="tickets.html">tickets</a>
            </li>
            <li class="lvl-1">
                <a href="line-up.html">the line up</a>
            </li>
            <!--
            <li class="lvl-1">
                <a href="shop.html">MERCH</a>
            </li>
-->
            <li class="lvl-1">
                <a>EVENT INFO</a>
                <div class="menu-sec-lvl">
                    <div class="images-l-r">
                        <ul>
                            <li>
                                <a href="map.html">map</a>
                            </li>
                            <li>
                                <a href="guidelines.html">meet the huckers</a>
                            </li>
                            <li>
                                <a href="travel-and-accomidations.html">travel &amp; accomidations</a>
                            </li>
                            <li>
                                <a href="camping.html">camping</a>
                            </li>
                            <li>
                                <a href="volunteering.html">volunteering</a>
                            </li>
                            <li>
                                <a href="faq.html">Sustainability</a>
                            </li>
                            <li>
                                <a href="volunteers.html">volunteers</a>
                            </li>
                            <li>
                                <a href="vendors.html">vendors</a>
                            </li>
                            <li>
                                <a href="partners.html">partners</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="lvl-1">
                <a >ATTRACTIONS</a>
                <div class="menu-sec-lvl">
                    <div class="images-l-r">
                        <ul>
                            <li>
                                <a href="marketplace.html">the marketplace</a>
                            </li>
                            <li>
                                <a href="kidzone.html">kidzone</a>
                            </li>
                            <li>
                                <a href="fishing.html">fishing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="main-m-w header">
        <div class="image-cover">
            <div class="center-image">
                <img src="img/baner-part-1.png" class="img-responsive" alt="">
            </div> 
            <div class="left-image">
                <img src="img/baner-part-2.png" class="img-responsive" alt="">
            </div> 
            <div class="right-image">
                <img src="img/baner-part-3.png" class="img-responsive" alt="">
            </div> 
            <button class="hidden-lg hidden-md hidden-sm navbar-toggle click-modal-xs">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </div>
    <div class="main-menu">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#my-menu">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="my-menu">
            <ul class="lvl-1-wrapp">
                <li class="lvl-1">
                    <a href="tickets.html">tickets</a>
                </li>
                <li class="lvl-1">
                    <a href="line-up.html">the line up</a>
                </li>
<!--
                <li class="lvl-1">
                    <a href="shop.html">MERCH</a>
                </li>
-->
                <li class="lvl-1">
                    <a>EVENT INFO</a>
                    <div class="menu-sec-lvl">
                        <div class="images-l-r">
                            <ul>
                                <li>
                                    <a href="map.html">map</a>
                                </li>
                                <li>
                                    <a href="guidelines.html">meet the huckers</a>
                                </li>
                                <li>
                                    <a href="travel-and-accomidations.html">travel &amp; accomidations</a>
                                </li>
                                <li>
                                    <a href="camping.html">camping</a>
                                </li>
                                <li>
                                    <a href="volunteering.html">volunteering</a>
                                </li>
                                <li>
                                    <a href="faq.html">Sustainability</a>
                                </li>
                                <li>
                                    <a href="volunteers.html">volunteers</a>
                                </li>
                                <li>
                                    <a href="vendors.html">vendors</a>
                                </li>
                                <li>
                                    <a href="partners.html">partners</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="lvl-1">
                    <a >ATTRACTIONS</a>
                    <div class="menu-sec-lvl">
                        <div class="images-l-r">
                            <ul>
                                <li>
                                    <a href="marketplace.html">the marketplace</a>
                                </li>
                                <li>
                                    <a href="kidzone.html">kidzone</a>
                                </li>
                                <li>
                                    <a href="fishing.html">fishing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <section class="slider-wrapper">
        <div class="slider-init">
            <div class="slide">
                <div class="image" style="background-image: url(img/index1.jpg)"></div>
            </div>
            <div class="slide">
                <div class="image" style="background-image: url(img/index2.jpg)"></div>
            </div>
            <div class="slide">
                <div class="image" style="background-image: url(img/index3.jpg)"></div>
            </div>
            <div class="slide">
                <div class="image" style="background-image: url(img/index4.jpg)"></div>
            </div>
            <div class="slide">
                <div class="image" style="background-image: url(img/index5.jpg)"></div>
            </div>
            <div class="slide">
                <div class="image" style="background-image: url(img/index6.jpg)"></div>
            </div>
            <div class="slide">
                <div class="image" style="background-image: url(img/index7.jpg)"></div>
            </div>
            <div class="slide">
                <div class="image" style="background-image: url(img/index8.jpg)"></div>
            </div>
            <div class="slide">
                <div class="image" style="background-image: url(img/index9.jpg)"></div>
            </div>
        </div>
    </section>
    <div class="main-m-w">
        <div class="flex-insta-head">
            <img class="img-responsive" src="img/insta-head-1.png" alt="">
            <p>INSTAHUCKS</p>
            <img class="img-responsive" src="img/insta-head-2.png" alt="">
        </div>
    </div>
    <div class="main-m-w">
        <div class="huckfinn_container">
            <div id="instafeed"></div>
        </div>
    </div>
    <div class="main-m-w-2">
        <div class="form-wrapp">
            <p class="head-form">Sign up below for festival updates</p>
            <form>
                <div class="row-inputs">
                    <input type="text" placeholder="Name *" required>
                    <input type="email" placeholder="Email *" required>
                </div>
                <input type="text" placeholder="Subject">
                <textarea placeholder="Message"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    
    </div>
    <div id="map"></div>
    <footer>
        <div class="main-m-w">
            <div class="flex-footer">
                <ul>
                    <li>
                        <a href="/">HOME</a>
                    </li>
                    <li>
                        <a href="guidelines.html">Meet the Huckers</a>
                    </li>
                    <li>
                        <a href="line-up.html">THE LINE UP</a>
                    </li>
                    <li>
                        <a href="travel-and-accomidations.html">Directions</a>
                    </li>
                    <li>
                        <a href="tickets.html">tickets</a>
                    </li>
                    <li>
                        <a href="map.html">PARK Map</a>
                    </li>
                    <li>
                        <a href="festival.html">attractions</a>
                    </li>
                    <li>
                        <a href="camping.html">Camping</a>
                    </li>
                    <li>
                        <a href="event-info.html">event infO</a>
                    </li>
                    <li>
                        <a href="volunteering.html">Volunteering</a>
                    </li>
<!--
                    <li>
                        <a href="shop.html">MERCH</a>
                    </li>
-->
                    <li>
                        <a href="accessibility.html">Handicap Accessibility</a>
                    </li>
                    <li>
                        <a href="faq.html">Sustainability</a>
                    </li>
                    
                </ul>
                <ul>
                    <li>
                        <a href="ticket-purchase-payment-plans.html">PURCHASE TicketS</a>
                    </li>
                    <li>
                        <a href="#">MERCHANDISE</a>
                    </li>
                    <li>
                        <a href="ticketing-faq.html">Ticketing FAQ</a>
                    </li>
                    <li>
                        <a href="#">CART</a>
                    </li>
                    <li class="copy-right">
                        <div class="soc">
                            <a href="https://www.facebook.com/HuckFinnJubilee" class="soc-item" target="_blank">
                                <img src="img/fb.png" class="img-responsive" alt="">
                            </a>
                            <a href="https://instagram.com/wix/" class="soc-item" target="_blank">
                                <img src="img/insta.png" class="img-responsive" alt="">
                            </a>
                        </div>
                        <p>© 2018 Huck Finn Jubilee</p>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
     <div class="modal fade" id="modal-menu">
        <div class="modal-dialog">
           <div class="main-menu">
                <div class="close-menu"></div>
                
                <ul class="lvl-1-wrapp">
                    <li class="lvl-1 active">
                        <a href="/" >home</a>
                    </li>
                    <li class="lvl-1">
                        <a href="tickets.html">tickets</a>
                    </li>
                    <li class="lvl-1">
                        <a href="line-up.html">the line up</a>
                    </li>
<!--
                    <li class="lvl-1">
                        <a href="shop.html">MERCH</a>
                    </li>
-->
                    <li class="lvl-1 xs-open-close">
                        <a>EVENT INFO<div class="xs-open-close-icon"></div></a>
                       
                        <div class="menu-sec-lvl">
                            <div class="images-l-r">
                                <ul>
                                    <li>
                                        <a href="map.html">map</a>
                                    </li>
                                    <li>
                                        <a href="guidelines.html">meet the huckers</a>
                                    </li>
                                    <li>
                                        <a href="travel-and-accomidations.html">travel &amp; accomidations</a>
                                    </li>
                                    <li>
                                        <a href="camping.html">camping</a>
                                    </li>
                                    <li>
                                        <a href="volunteering.html">volunteering</a>
                                    </li>
                                <li>
                                    <a href="faq.html">Sustainability</a>
                                </li>
                                    <li>
                                        <a href="volunteers.html">volunteers</a>
                                    </li>
                                    <li>
                                        <a href="vendors.html">vendors</a>
                                    </li>
                                    <li>
                                        <a href="partners.html">partners</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="lvl-1 xs-open-close">
                        <a>ATTRACTIONS <div class="xs-open-close-icon"></div></a>
                        
                        <div class="menu-sec-lvl">
                            <div class="images-l-r">
                                <ul>
                                    <li>
                                        <a href="marketplace.html">the marketplace</a>
                                    </li>
                                    <li>
                                        <a href="kidzone.html">kidzone</a>
                                    </li>
                                    <li>
                                        <a href="fishing.html">fishing</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                
            </div>
                       
                  
        </div>
    </div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiDtu1T1JT4F3whkOla5FxBQ603ucfZNY&callback=initMap&language=en"
  type="text/javascript"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/instafeed.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        var feed = new Instafeed({
            clientId: 'c7579bb4287a4d16b5b687ed209b72d3',
            accessToken: '1703524666.ba4c844.dbabe1be746f4e1a8fd458b0090fa499',
            target: 'instafeed',
            get: 'tagged',
            tagName: 'photographyportfolio',
            links: true,
            limit: 8,
            sortBy: 'most-recent',
            resolution: 'standard_resolution',
            template: '<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3"><div class="photo-box"><div class="image-wrap"><a href="{{link}}"><img src="{{image}}"></a><div class="likes">{{likes}} Likes</div></div><div class="description">{{caption}}<div class="date">{{model.date}}</div></div></div></div>'
        });
        //feed.run();
    </script>
</body>

</html>