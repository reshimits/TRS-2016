<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Job Opportunities // THE RETROFIT SOURCE</title>
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

<body class="utility about opportunities">

    <!-- Header
    ================================================== -->

    <?php require('../shared/header.html');?>


    <!-- Primary Page Layout
    ==================================================
    ==================================================
    ================================================== -->

    <div class="bodyWrap">
        
        <div class="jumbotron wLinks">
            <div class="featureHeadline col-xs-12">
                <div class="col-xs-12 col-sm-8">
                    <h1>About Us: <span class="text-weightRegular text-secondary">Job Opportunities</span></h1>
                    <!-- <h1><span class="hidden-sm">Job </span>Opportunities</h1> -->
                    <h5 class="text-white">The Retrofit Source is always seeking talented individuals for hire!</h5>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 pull-right">
                    <a type="button" href="about.php" class="btn btn-block btn-ghost">About Us</a>
                    <a type="button" href="testimonials.php" class="btn btn-block btn-ghost">Testimonials</a>
                    <a type="button" data-toggle="modal" data-target="#writereview" class="btn btn-block btn-ghost">Submit a Testimonial</a>
                </div>
            </div>
            <div class="jumbotron-img"></div>
        </div>


       <div class="section wrap header-waypoint" data-animate-down="header-small" data-animate-up="header-large">

                <div class="col-xs-12 col-sm-5 col-lg-6 section">
                    <div class="container-fluid">
                    <div class="col-xs-12 details">
                        <h3>Why Apply?</h3>
                        <p><span class="text-weightBold">If you’re a car guy looking for an opportunity with a well-established company in the automotive aftermarket, we encourage you to leave your contact information with us for future openings. Our brand new headquarters in Atlanta, GA is probably one of the coolest work environments in the industry and best of all, we maintain a strict no suit and tie dress code!</p>
                        <p>We invite you to fill out an application!</p>
                    </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-7 col-lg-6 section gray2">
                    <div class="container-fluid">
                    <div class="col-xs-12 details">
                        <h3>Personal Information</h3>
                        <form class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Last Name">
                                    </div>
                                </div>
                                <hr class="aligncenter">
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Email Address">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Confirm Email Address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Phone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="inputDefault" placeholder="Postal Code">
                                    </div>
                                </div>
                                
                                <hr class="aligncenter">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <p class="small"><span class="text-uppercase">Tell us a bit about yourself:</span></p>
                                        <textarea class="form-control" rows="5" id="textArea" placeholder=""></textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 price">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div type="button" class="btn btn-primary continue pull-right"><span class="icon icon-arrowRcircle-fff icon-after"></span> Submit</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form> 
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