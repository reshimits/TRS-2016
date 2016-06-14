<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>My Account // THE RETROFIT SOURCE</title>
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
<body class="account" id="wholesaleAcct">

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
                <div class="col-xs-12 header-waypoint" data-animate-down="header-small" data-animate-up="header-large">
                    <h1>My Account: <span class="text-weightRegular text-secondary">Wholesale</span></h1>
                    <h5 class="text-white">Welcome, Boss Koss</h5>
                </div>
            </div>
            <div class="jumbotron-img"></div>
            <div class="section wrap section-ticker">
                <div class="ticker-wrap">
                    <div class="ticker">
                        <h5 class="ticker-item"><span class="icon icon-news icon-before"></span><span class="text-white">6/10/16</span> The industry standard: ACME brings a hell of a bargain to the table with high-quality parts at an entry level price. <a href="">Check them out here!</a></h5>
                        <h5 class="ticker-item"><span class="icon icon-news icon-before"></span><span class="text-white">5/23/16</span> Spring 2016 brings revisions of many current RetroQuik brackets to new projector models, and many new models added to the lineup as well! <a href="">Shop RetroQuik Systems!</a></h5>
                        <h5 class="ticker-item"><span class="icon icon-news icon-before"></span><span class="text-white">2/13/16</span> As one of the premier JW Speaker distributors in the automotive lighting market, we're now offering the new 5.75" Cycle-centric 8690 headlamps and the awesome new adaptive 7" 8790 Motorcycle headlamp. <a href="">Shop housings!</a></h5>
                    </div>
                </div>
            </div>
        </div>


        <div class="section wrap gray4">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="tabWrap">
                        <div class="nav-tabsWrap col-xs-12 col-sm-4 col-md-3 col-lg-2">
                            <div class="row">
                                <ul class="nav nav-tabs nav-stacked">
                                    <li class="active"><a href="#orderhistory" data-toggle="tab">
                                        <span class="icon icon-myacct icon-myacct-orderhistory"></span>
                                        <h4>Order History</h4>
                                        <span class="nav-tabs-arrow"></span>
                                    </a></li>
                                    <li><a href="#account" data-toggle="tab">
                                        <span class="icon icon-myacct"></span>
                                        <h4>My Account</h4>
                                        <span class="nav-tabs-arrow"></span>
                                    </a></li>
                                    <li><a href="#catalog" data-toggle="tab">
                                        <span class="icon icon-myacct icon-myacct-catalog"></span>
                                        <h4>Catalog</h4>
                                        <span class="nav-tabs-arrow"></span>
                                    </a></li>
                                    <li><a href="#marketingtools" data-toggle="tab">
                                        <span class="icon icon-myacct icon-myacct-marketingtools"></span>
                                        <h4>Marketing Tools</h4>
                                        <span class="nav-tabs-arrow"></span>
                                    </a></li>
                                    <li><a href="#guides" data-toggle="tab">
                                        <span class="icon icon-myacct icon-myacct-guides"></span>
                                        <h4>Customer Guides</h4>
                                        <span class="nav-tabs-arrow"></span>
                                    </a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-contentWrap gray3 col-xs-12 col-sm-8 col-md-9 col-lg-10">
                            <div id="myTabContent" class="tab-content gray3">
                                <div class="tab-pane fade active in" id="orderhistory">
                                    <?php require('../account/orderhistory.html');?>
                                </div>
                                <div class="tab-pane fade" id="account">
                                    <?php require('../account/myacct.html');?>
                                </div>
                                <div class="tab-pane fade" id="catalog">
                                    <?php require('../account/myacct.html');?>
                                </div>
                                <div class="tab-pane fade" id="marketingtools">
                                    <?php require('../account/myacct.html');?>
                                </div>
                                <div class="tab-pane fade" id="guides">
                                    <?php require('../account/myacct.html');?>
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