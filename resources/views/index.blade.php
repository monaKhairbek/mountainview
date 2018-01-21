<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content=" Website" />
    <title>iApartment Landing page</title>
    <!--browser icon-->
    <link rel="shortcut icon" href="mountainview/Images/favicon.ico" type="image/x-icon" />
    <link href="mountainview/css/reset.css" rel="stylesheet" />
    <link href="mountainview/css/bootstrap.min.css" rel="stylesheet" />
    <link href="mountainview/css/font-awesome.css" rel="stylesheet" />
    <link href="mountainview/css/animate.min.css" rel="stylesheet" />
    <link href="mountainview/css/material-design-iconic-font.css" rel="stylesheet" />
    <link href="mountainview/css/Swiper.css" rel="stylesheet" />
    <!-- fancybox -->
    <link href="mountainview/css/jquery.fancybox.css" rel="stylesheet" />

    <link href="mountainview/css/style.css" rel="stylesheet" />
    <!--<link href="mountainview/css/bootstrap-rtl.min.css" rel="stylesheet" />

    <link href="mountainview/css/styleAR.css" rel="stylesheet" />-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body>




    <div class="a-Header ">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="a-logo">
                    <a href="https://www.mountainviewegypt.com" target="_blank" class="Logo">
                        <img src="mountainview/Images/Logo.png" />
                    </a>
                    <div class="navbar-header  a-buttonToggle">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
                <div class="a_LeftMenu">
                    <div class="a-Menus collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a data-href="#Gallery">Gallery</a> </li>
                            <li><a data-href="#E-Brochure">E-Brochure</a></li>
                            <li><a data-href="#Locations">Locations</a></li>
                            <li><a href="tel:16201" class="AnchorPhone"><i class="fa fa-phone" aria-hidden="true"></i> 16201</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--------------------------------------------------  header  ----------------------------------------------------->
    <!--------------------------------------------------  Banner  ----------------------------------------------------->
    <div id="ContactUs" class="HomeBanner wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="container">
            <div class="MainBanner">
                <div class="SectionForms">
                    <div class="Interested">
                        Interested in
                        <br />
                        Mountain View iApartment ?
                    </div>
                    <div class="Please">
                        Please complete form below and
                        <br />
                        we will get back to you soon:
                    </div>
                    <form class="ApplyForm" role="form" method="POST" action="{{route('add-request') }}">
                        {{ csrf_field() }}
                        <div class="a-MassageSuc" id="SuccessMsg" hidden="">
                            SuccessMsg
                        </div>
                        <div class="a-MassageFail" id="FailureMsg" hidden="">
                            FailureMsg
                        </div>
                        <div class="form-group form-Select">
                            <label>Title</label>
                            <select class="form-control" name="title">
                                <option>Mr</option>
                                <option>Ms</option>
                                <option>Miss</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="full_name" placeholder="Enter Full Name" required />
                        </div>
                        <div class="form-group ">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email" required />
                        </div>
                        <input type="hidden" class="form-control" name="source" value="facebook" required />

                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" pattern="^0*\d{1,10}$"  class="form-control" name="mobile" placeholder="Enter Mobile Number 01xxxxxxxxx" required />
                        </div>
                        <div class="form-group form-Select">
                            <label>How would you like us to contact you?</label>
                            <select class="form-control" name="contact_type">
                                <option>Email</option>
                                <option>Mobile</option>
                            </select>
                        </div>
                        <button type="submit" class="Abtn btn btn-default SubmitBtn">Send</button>
                    </form>
                </div>
                <div class="BannerImg ">
                    <img src="mountainview/Images/Banner.png" />
                </div>
            </div>
        </div>
    </div>
    <div id="Gallery" class="Gallery wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="container">
            <div class="Title">
                Our Gallery
            </div>
            <div class="GalleryItems">
                <a class="fancybox-media fancybox.iframe " rel="video" data-fancybox="VideoGallery" href="http://youtube.com/embed/LpHzEe9AN68">
                    <span class="GalleryImg HoverImg">
                        <img src="mountainview/Images/Gallery/1.png" />
                        <i class="zmdi zmdi-play-circle-outline"></i>
                    </span>
                    <span class="GalleryText">
                        Mountain View Building Communities
                    </span>
                </a>
                <a class="fancybox-media fancybox.iframe " rel="video" data-fancybox="VideoGallery" href="http://youtube.com/embed/lDXFCPfrwo8">
                    <span class="GalleryImg HoverImg">
                        <img src="mountainview/Images/Gallery/2.png" />
                        <i class="zmdi zmdi-play-circle-outline"></i>
                    </span>
                    <span class="GalleryText"> Mountain View iCity. The 4D innovation </span>
                </a>
                <a class="fancybox-media fancybox.iframe " rel="video" data-fancybox="VideoGallery" href="http://youtube.com/embed/G06QFPo0dlI">
                    <span class="GalleryImg HoverImg">
                        <img src="mountainview/Images/Gallery/3.png" />
                        <i class="zmdi zmdi-play-circle-outline"></i>
                    </span>
                    <span class="GalleryText"> Mountain View iCity –iApartment  </span>
                </a>
            </div>

        </div>
    </div>
    <!--------------------------------------------------  Gallery  ----------------------------------------------------->
    <!--------------------------------------------------  E-Brochure  ----------------------------------------------------->

    <div id="E-Brochure" class="Brochure wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="container">
            <div class="BrochureItem">
                <div class="BrochureItemTitle">
                    Mountain View iCity New Cairo Brochure
                </div>
                <a href="https://www.mountainviewegypt.com/abouticity/icitynewcairo/index.html" target="_blank">Know More</a>
            </div>
            <div class="BrochureItem">
                <div class="BrochureItemTitle">
                    Mountain View iCity October Brochure
                </div>
                <a href="https://www.mountainviewegypt.com/abouticity/icityoctober/index.html" target="_blank">Know More</a>
            </div>
        </div>
    </div>
    <!--------------------------------------------------  E-Brochure  ----------------------------------------------------->
    <!--------------------------------------------------  Map   ----------------------------------------------------->

    <div id="Locations" class="Locations wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="container">
            <div class="Title">
                Our Locations
            </div>
            <div class="OfficeLo">
                <div class="OfficeLoTitle">
                    Office Location:
                </div>
                <ul>
                    <li>City Stars: Star Capital 8, Nasr City, Ground Floor</li>
                    <li>6th of October City, Bldg. No. 6, 4th Floor</li>
                </ul>
            </div>

        </div>
        <div id="map" style="height: 500px; width: 100%; border: 0">
        </div>
        <a id="firelocation" class="hidden normalfancy" href="#location-popup"></a>

        <div class="hidden">
            <div id="location-popup">
                <p id="MapAddress"></p>
            </div>
        </div>
    </div>

    <!--------------------------------------------------  Map   ----------------------------------------------------->
    <!--------------------------------------------------   Footer   ----------------------------------------------------->
    <div class="a-Footer wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="container">
            <span class="AllRights">© 2018 Mountain View.All Rights Reserved  </span>
            <div class="LOGOFo"><img src="mountainview/Images/LOGOFo.png" /> </div>
            <span class="FastLinks">
                <span>Follow US</span>
                <a href="https://www.facebook.com/MountainViewEgypt" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a>
                <a href="https://twitter.com/mountainviewegy?lang=en" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://www.instagram.com/mountainview_egypt " target="_blank" title="instagram"><i class="fa fa-instagram"></i></a>
            </span>
            <a href="tel:16201" class="callcenter">call center : 16201</a>
        </div>
    </div>
    <!--------------------------------------------------   Footer   ----------------------------------------------------->
    <!-- child of the body tag -->
    <span id="top-link-block" class="hidden" title="top">
        <a href="#top" class="well well-sm" onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </a>
    </span>

    <!-- /top-link-block -->
    <!-- jquery -->
    <script src="mountainview/js/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="mountainview/js/bootstrap.min.js"></script>
    <!-- sliders -->
    <script src="mountainview/js/swiper.jquery.min.js"></script>
    <!-- fancybox -->
    <script src="mountainview/js/jquery.fancybox.js"></script>
    <script src="mountainview/js/jquery.touchSwipe.min.js"></script>

    <!-- parsley -->
    <script src="mountainview/js/parsley.min.js"></script>
    <script src="mountainview/js/jquery.nicescroll.js"></script>
    <script src="mountainview/js/wow.min.js"></script>
    <script src="mountainview/js/reflection.js"></script>
    <!-- My scripts -->
    <script src="mountainview/js/scripts.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-Gcr3KNachUj7cJopFOsPC7JyJ9y0aP4&callback=initMap"></script>
    <script type="text/javascript">
        var map;
        function initMap() {
            var map;
           // var place = { lat: 30.0687659, lng: 31.5778927 };
            var place1 = { lat: 30.020722, lng: 31.003083 };
            var place2 = { lat: 30.071917, lng: 31.344472 };
            map = new google.maps.Map(document.getElementById('map'), {
                center: place2,
                zoom: 11,
                scrollwheel: false,
                animation: google.maps.Animation.DROP
            });
            map.addListener('click', function () {
                map.set('scrollwheel', true);
            });
            map.addListener('mouseout', function () {
                map.set('scrollwheel', false);
            });
            var image = 'mountainview/Images/mark.png';
            //var beachMarker = new google.maps.Marker({
            //    position: place,
            //    map: map,
            //    icon: image
            //});


            $('#Mapmenue').slideToggle();
            //Address = "Mountain View iCity New Cairo "
            //$("#MapAddress").html(Address);


            //var infowindow = new google.maps.InfoWindow({
            //    content: $("#location-popup").html()
            //});
            //infowindow.open(map, beachMarker);
            //google.maps.event.addListener(beachMarker, 'click', function () {
            //    infowindow1.close(); infowindow2.close();
            //    infowindow.open(map, beachMarker);

            //});
            //google.maps.event.addListener(map, 'click', function () {
            //    infowindow.close();
            //});


            var beachMarker1 = new google.maps.Marker({
                position: place1,
                map: map,
                icon: image
            });
            $('#Mapmenue').slideToggle();
            Address1 = "<a href='https://goo.gl/maps/5pZkFA91CdB2' target='_blank' > 6th of October City, Bldg. No. 6, 4th Floor </a>"
            $("#MapAddress").html(Address1);


            var infowindow1 = new google.maps.InfoWindow({
                content: $("#location-popup").html()
            });
            infowindow1.open(map, beachMarker1);
            //google.maps.event.addListener(beachMarker1, 'click', function () {
            //    infowindow.close(); infowindow2.close();
            //    infowindow1.open(map, beachMarker1);

            //});
            //google.maps.event.addListener(map, 'click', function () {
            //    infowindow1.close();

            //});
            var beachMarker2 = new google.maps.Marker({
                position: place2,
                map: map,
                icon: image
            });

            $('#Mapmenue').slideToggle();
            Address2 = "<a href='https://goo.gl/maps/qGLhfmMTNZr' target='_blank'> Star Capital 8, Nasr City, Ground Floor </a>"
            $("#MapAddress").html(Address2);


            var infowindow2 = new google.maps.InfoWindow({
                content: $("#location-popup").html()
            });
            infowindow2.open(map, beachMarker2);
            //google.maps.event.addListener(beachMarker2, 'click', function () {
            //    infowindow.close(); infowindow1.close();
            //    infowindow2.open(map, beachMarker2);

            //});
            //google.maps.event.addListener(map, 'click', function () {
            //    infowindow2.close();
            //});
        }


    </script>

    <script>




        // Javascript to enable link to tab
        $(".a_LeftMenu a").click(function () {
            var TabID = $(this).attr("data-href");
            $('body,html').animate({
                scrollTop: $(TabID).offset().top - '130'   // 75px height of fixed header
            },
                   'slow');
        })
        // Javascript to enable link to tab
        var url = document.location.toString();
        if (url.match('#')) {
            var TabID = url.split('#')[1];
            $('body,html').animate({
                scrollTop: $("#" + TabID).offset().top - '130'  // 75px height of fixed header
            },
                    'slow');
        };

    </script>

</body>
</html>
