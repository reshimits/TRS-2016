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
                    <h5 class="text-white"><span class="hidden-xs">With thousands of customers rocking the roads with TRS retrofits, </span>it would be blasphemy if we didn't share the pics.</h5>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 pull-right">
                    <a type="button" href="resources.php" class="btn btn-block btn-ghost">Resources Hub</a>
                    <hr class="aligncenter half">
                    <div type="button" class="btn btn-block btn-primary">Share Photos</div>
                </div>
            </div>
            <div class="jumbotron-img"></div>
            <!-- <div class="section wrap section-ticker">
                <div class="ticker-wrap">
                    <div class="ticker">
                        <h5 class="ticker-item"><div type="button" class="btn btn-sm btn-dark">Share Photos</div></h5>
                    </div>
                </div>
            </div> -->
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
                                        <h4>Retrofits in Progress</h4>
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