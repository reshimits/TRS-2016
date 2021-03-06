<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Customer Gallery // THE RETROFIT SOURCE</title>
    <meta name="description" content="Google Description Here">
    <meta name="keywords" content="Keywords Here" />
    <meta name="author" content="SHIMITS Design/Development">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no" />

    <!-- CSS
    ================================================== -->
    <link href="../css/bootstrap-theme-full.css" rel="stylesheet">
    <link href="../css/trs-theme.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    
    <!-- Javascript [primary]
    ================================================== -->
    
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="../img/favicon.ico">
    <link rel="icon" sizes="32x32" href="../img/favicon-32.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="../img/favicon-152.png">

</head>

<!-- Apply id="wholesaleAcct" if user is logged in as Wholesaler -->
<body class="account utility gallery">

    <!-- Header
    ================================================== -->

    <?php require('../shared/header.html');?>


    <!-- Primary Page Layout
    ==================================================
    ==================================================
    ================================================== -->

    <div class="bodyWrap">
        
        <div class="jumbotron">
            <div class="featureHeadline col-xs-12">
                <div class="col-xs-12 col-sm-8">
                    <h1>Customer Gallery</h1>
                    <h5 class="text-white"><span class="hidden-sm">With thousands of customers rocking the roads with TRS retrofits, </span>it would be blasphemy if we didn't share the pics.</h5>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 pull-right">
                    <a type="button" href="resources.php" class="btn btn-block btn-ghost">Resources Hub</a>
                   <!--  <hr class="aligncenter half">
                    <div type="button" class="btn btn-block btn-primary">Share Photos</div> -->
                </div>
            </div>
            <div class="jumbotron-img"></div>
            
        </div>

        <div class="section gray2 gallerytoolbar header-waypoint" data-animate-down="header-small" data-animate-up="header-large">
            <div class="container-fluid">
                <div class="col-xs-12 col-sm-7 col-md-8">
                    <form role="search">
                        <div class="form-group">
                            <p class="lead filter">Search Ours:</p>
                            <div class="col-xs-12 col-sm-3">
                                <select class="form-control drop required" id="select">
                                    <option value="">MAKE</option>
                                    
                                </select>
                            </div>
                            <div class="col-xs-12 col-sm-3">
                                <select class="form-control drop required" id="select">
                                    <option value="">MODEL</option>
                                    
                                </select>
                            </div>
                            <p class="lead filter" style="float:left;">or</p>
                            <div class="col-xs-12 col-sm-4">
                                <input type="text" class="form-control" id="inputSuggestions" placeholder="Search Keywords...">
                            </div>

                            <div class="col-xs-1 col-xs-offset-11 col-sm-1 col-sm-offset-0">
                                <div type="submit" class="btn btn-empty icon icon-arrowRcircle-fff pull-right"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 pull-right">
                    <p class="lead filter">Add Yours:</p>
                    <div type="button" data-toggle="modal" data-target="#sharePhotos" class="btn btn-block btn-primary">&nbsp; Share Photos &nbsp;</div>
                </div>
            </div>
        </div>

        <div class="section wrap gray4">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="tabWrap">
                        <div class="nav-tabsWrap col-xs-12 col-sm-3 col-lg-2">
                            <div class="row">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="tab-gallery-customercars active"><a href="#customercars" data-toggle="tab">
                                        <span class="icon icon-gallery icon-gallery-customercars"></span>
                                        <h4>Customer Cars</h4>
                                        <span class="nav-tabs-arrow hidden-xs"></span>
                                    </a></li>
                                    <li class="tab-gallery-retroprogress"><a href="#retroprogress" data-toggle="tab">
                                        <span class="icon icon-gallery icon-gallery-retroprogress"></span>
                                        <h4>Retro<span class="hidden-xs">fits in</span> Progress</h4>
                                        <span class="nav-tabs-arrow hidden-xs"></span>
                                    </a></li>
                                    <li class="tab-gallery-outputshots"><a href="#outputshots" data-toggle="tab">
                                        <span class="icon icon-gallery icon-gallery-outputshots"></span>
                                        <h4>Output Shots</h4>
                                        <span class="nav-tabs-arrow hidden-xs"></span>
                                    </a></li>
                                    <li class="tab-gallery-appexamples"><a href="#appexamples" data-toggle="tab">
                                        <span class="icon icon-gallery icon-gallery-appexamples"></span>
                                        <h4>Application Examples</h4>
                                        <span class="nav-tabs-arrow hidden-xs"></span>
                                    </a></li>
                                    <li class="tab-gallery-gallerysearch"><a href="#gallerysearch" data-toggle="tab">
                                        <span class="icon icon-gallery icon-gallery-gallerysearch"></span>
                                        <h4>Search</h4>
                                        <span class="nav-tabs-arrow hidden-xs"></span>
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-contentWrap gray3 col-xs-12 col-sm-9 col-lg-10">
                            <div id="myTabContent" class="tab-content gray3">
                                <div class="tab-pane fade active in" id="customercars">
                                    <?php require('../utility/customercars.html');?>
                                </div>
                                <div class="tab-pane fade" id="retroprogress">
                                    <?php require('../utility/retroprogress.html');?>
                                </div>
                                <div class="tab-pane fade" id="outputshots">
                                    <?php require('../utility/outputshots.html');?>
                                </div>
                                <div class="tab-pane fade" id="appexamples">
                                    <?php require('../utility/appexamples.html');?>
                                </div>
                                <div class="tab-pane fade" id="gallerysearch">
                                    <?php require('../utility/gallerysearch.html');?>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        
        <!-- Footer
        ================================================== -->

        <?php require('../shared/footer.html');?>


    </div> <!-- /container -->

    <?php require('../shared/modals.html');?>


    <!-- End Primary Page Layout
    ==================================================
    ==================================================
    ================================================== -->
        
    

    <!-- Javascript [secondary]
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>   
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> 

    <!-- HEADER/NAV size change based on scroll -->
    <script src="../js/waypoints.min.js"></script>
    <script>
        var $head = $( '#header' );
        $( '.header-waypoint' ).each( function(i) {
            var $el = $( this ),
                animClassDown = $el.data( 'animateDown' ),
                animClassUp = $el.data( 'animateUp' );

            $el.waypoint( function( direction ) {
                if( direction === 'down' && animClassDown ) {
                    $head.attr('class', 'header ' + animClassDown);
                }
                else if( direction === 'up' && animClassUp ){
                    $head.attr('class', 'header ' + animClassUp);
                }
            }, { offset: '0%' } );
        } );
    </script>

    <!-- HEADER/NAV toggle MENU BTN -->
    <script type='text/javascript'>
        function toggleText(id) {
            var showMore = document.getElementById(id);
            (showMore.style.display=='block') ? showMore.style.display='none' : showMore.style.display='block' ;  
        }
        $( ".navbar-menu" ).click(function() {
            $(".navbar-menu").toggleClass( "active" );
            $(".bodyWrap").toggleClass( "active" );
        });
    </script>

    <!-- GALLERY SEARCH toggle -->
    <script type='text/javascript'>
        function toggleText(id) {
            var showMore = document.getElementById(id);
            (showMore.style.display=='block') ? showMore.style.display='none' : showMore.style.display='block' ;  
        }
        $( ".gallerytoolbar .form-group .btn-empty" ).click(function() {
            $(".nav-tabs li").toggleClass( "active",false );
            $(".tab-content .tab-pane").toggleClass( "active",false );
            $(".tab-content .tab-pane").toggleClass( "in",false );
            $(".nav-tabs .tab-gallery-gallerysearch").toggleClass( "active" );
            $(".tab-content #gallerysearch").toggleClass( "active" );
            $(".tab-content #gallerysearch").toggleClass( "in" );
        });
    </script>

    <!-- GALLERY DeActivate Carousel Automatic Transition -->
    <script type='text/javascript'>
        $(document).ready(function(){
            $("#trsGalleryCarousel").carousel("pause");
            // Enable Carousel Controls
            $(".left").click(function(){
                $("#trsGalleryCarousel").carousel("prev");
            });
            $(".right").click(function(){
                $("#trsGalleryCarousel").carousel("next");
            });
        });
    </script>
    <script type='text/javascript'>
        $(document).ready(function(){
            $("#trsGalleryCarousel2").carousel("pause");
            // Enable Carousel Controls
            $(".left").click(function(){
                $("#trsGalleryCarousel2").carousel("prev");
            });
            $(".right").click(function(){
                $("#trsGalleryCarousel2").carousel("next");
            });
        });
    </script>

    <!-- iOS Viewport Units Buggyfill -->
    <script src="../js/viewport-units-buggyfill.js"></script>
    <script>window.viewportUnitsBuggyfill.init();
        var hacks = require('viewport-units-buggyfill.hacks');
        require('viewport-units-buggyfill').init({
          hacks: hacks
        });
    </script>

  

    <!-- End Document
    ================================================== -->

</body>
</html>