<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>My Cart // THE RETROFIT SOURCE</title>
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
<body class="utility cart" id="">

    <!-- Header
    ================================================== -->

    <?php require('../shared/header.html');?>


    <!-- Primary Page Layout
    ==================================================
    ==================================================
    ================================================== -->

    <div class="bodyWrap">

        <div class="jumbotron header-waypoint" data-animate-down="header-small" data-animate-up="header-large"">
            <div class="featureHeadline col-xs-12">
                <div class="col-xs-12">
                    <h1>My Cart: <!-- <span class="text-weightRegular text-secondary">Checkout</span> --></h1>
                    <!-- <h5 class="text-gray1">Guest, please <a href="" class="text-gray1">sign in.</a></h5> -->
                </div>
            </div>
        </div>

        <!-- If no Products are in Cart -->
        <!-- <div class="section short">
            <div class="container-fluid">
                <div class="col-xs-12">
                    <h3>You have no items in your shopping cart.</h3>
                    <h5 class="text-gray1">Click <a href="">here</a> to continue shopping.</h5>
                </div>
            </div>
        </div> -->

        <!-- If Products are in Cart -->
        <div class="section first">
            <div class="container-fluid">

                <div class="col-xs-12 col-md-4 col-xlg-3 cta pull-right">
                    <div class="section first">
                    <div class="panel panel-empty">
                        <div class="panel-body">
                            <div class="col-xs-12">
                                <div class="row">
                                    <h5 class="first last">Summary</h5>
                                    <div class="section wrap">
                                        <hr class="aligncenter first">
                                        <p><span class="lead">SubTotal:</span> <span class="retail pull-right">$2000.00</span></p>
                                        <p><span class="lead">Tax:</span> <span class="retail pull-right">$230.00</span></p>
                                        <hr class="aligncenter first">
                                    </div>
                                    <div class="section wrap">
                                        <h5>Order Total <span class="text-secondary pull-right">$2230.00</span></h5>
                                    </div>
                                    <div class="section half last">
                                        <div type="button" class="btn btn-block btn-primary">Proceed to Checkout</div>
                                    </div>
                                    <div class="section wrap">
                                        <div class="or-container"><span>or</span></div>
                                    </div>
                                    <div class="section wrap checkoutmethod">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div type="button" class="btn btn-block btn-default amazon"><span class="icon icon-amazon icon-before"></span>Amazon <i class="text-weightRegular small">Pay</i></div>

                                                <div data-toggle="modal" data-target="#paypal" type="button" class="btn btn-block btn-default paypal"><span class="icon icon-paypal icon-before"></span>PayPal <i class="text-weightRegular small">Checkout</i></div>
                                            </div>
                                            <div class="col-xs-12"><hr class="aligncenter first"></div>
                                        </div>
                                        <div class="section wrap notice-affirm">
                                            <p class="text-center text-gray1">Starting at <span class="text-affirm">$X.XX/month</span> with <span class="btn btn-empty"><span class="icon icon-affirmFull"></span></span></p> 
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="section half last cta-extras">
                                <div class="section wrap">
                                    <h6 class="text-center text-gray1">*We offer free standard shipping on orders over $100.</h6>
                                </div>
                                <div class="section wrap">
                                    <p class="note text-center"><span class="lead"><em>*For a shipping quote please fill out address</em></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>


                <div class="col-xs-12 col-md-8 col-xlg-9">
                    <div class="row cart-titles hidden-xs">
                        <div class="col-xs-12 col-sm-8">
                            <p><span class="lead text-gray2">Item:</span></p>
                        </div>
                        <div class="col-xs-12 col-sm-4 pull-right">
                            <div class="form-group">
                                <div class="col-xs-12 col-sm-3 text-right">
                                    <p><span class="lead text-gray2">Price:</span></p>
                                </div>
                                <div class="col-xs-12 col-sm-4 text-right">
                                    <p><span class="lead text-gray2">QTY:</span></p>
                                </div>
                                <div class="col-xs-12 col-sm-5 text-right">
                                    <p><span class="lead text-gray2">SubTotal:</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="section first">
                            <div class="col-xs-12 cart-product">
                                <hr class="aligncenter first">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="col-xs-3 col-sm-4 col-md-3 col-lg-4">
                                            <div class="row">
                                                <img class="img-thumbnail img-responsive" src="../img/temp--Morimoto XB35 AMP Ballast 4.jpg" alt="" border="0"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-9 col-sm-8 col-md-9 col-lg-8">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <h5 class="text-gray1">BI-XENON: LEXUS RX350</h5>
                                                </div>
                                            </div>
                                            
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <ul class="list-group">
                                                        <li class="list-group-item active"><p class="small text-gray2"><span class="lead text-gray3">Bi-Xenon Projectors:</span> 2 x Morimoto Mini H1 6.0 (LHD) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                                        <li class="list-group-item"><p class="small text-gray2"><span class="lead text-gray3">Compatible Ballasts:</span> 2 x Morimoto XB35 (35W) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                                        <li class="list-group-item active"><p class="small text-gray2"><span class="lead text-gray3">Ballast Igniters (required):</span> 2 x Morimoto XB Igniter (AMP) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                                        <li class="list-group-item"><p class="small text-gray2"><span class="lead text-gray3">H1 HID Bulbs:</span> 2 x H1: XB 4500K <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                                        <li class="list-group-item active"><p class="small text-gray2"><span class="lead text-gray3">Shroud Style:</span> 2 x Mini Gatling Gun <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                                        <li class="list-group-item"><p class="small text-gray2"><span class="lead text-gray3">Wire Harness:</span> 1 x HD Relay <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                                        <li class="list-group-item active"><p class="small text-gray2"><span class="lead text-gray3">LED Halos:</span> 2 x 70mm XSB Switchback <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                                        <li class="list-group-item"><p class="small text-gray2"><span class="lead text-gray3">Headlight Sealant:</span> 1 x Gray: RetroRubber <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="btn btn-empty btn-xs edit text-gray1 pull-right">// Edit</span>
                                        </div>
                                    </div>
                                
                                    <div class="col-xs-12 col-sm-4 pull-right">
                                        <form>
                                        <div class="form-group">
                                            <div class="col-xs-3 text-right" data-th="Price:">
                                                <p><span class="lead">$750.00</span></p>
                                            </div>
                                            <div class="col-xs-3 col-xs-offset-1 col-sm-3 col-sm-offset-1 text-right" data-th="Qty:">
                                                <div class="section wrap">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="2">
                                                    </div>
                                                    <span class="btn btn-empty btn-xs edit">// Update</span><span class="btn btn-empty btn-xs edit text-gray1">// Remove</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-5 text-right" data-th="SubTotal:">
                                                <p><span class="lead">$1500.00</span></p>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section first">
                            <div class="col-xs-12 cart-product">
                                <hr class="aligncenter first">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-8">
                                        <div class="col-xs-3 col-sm-4 col-md-3 col-lg-4">
                                            <div class="row">
                                                <img class="img-thumbnail img-responsive" src="../img/temp-gallery7.png" alt="" border="0"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-9 col-sm-8 col-md-9 col-lg-8">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <h5 class="text-gray1">SUPER7: MORIMOTO BI-LED</h5>
                                                </div>
                                            </div>
                                            
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <ul class="list-group">
                                                        <li class="list-group-item active"><p class="small text-gray2"><span class="lead text-gray3">Bi-Xenon Projectors:</span> 2 x Morimoto Mini H1 6.0 (LHD) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                                        <li class="list-group-item"><p class="small text-gray2"><span class="lead text-gray3">Compatible Ballasts:</span> 2 x Morimoto XB35 (35W) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                                        <li class="list-group-item active"><p class="small text-gray2"><span class="lead text-gray3">Ballast Igniters (required):</span> 2 x Morimoto XB Igniter (AMP) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <span class="btn btn-empty btn-xs edit text-gray1 pull-right">// Edit</span>
                                        </div>
                                    </div>
                                
                                    <div class="col-xs-12 col-sm-4 pull-right">
                                        <form>
                                        <div class="form-group">
                                            <div class="col-xs-3 text-right" data-th="Price:">
                                                <p><span class="lead">$250.00</span></p>
                                            </div>
                                            <div class="col-xs-3 col-xs-offset-1 col-sm-3 col-sm-offset-1 text-right" data-th="Qty:">
                                                <div class="section wrap">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" value="2">
                                                    </div>
                                                    <span class="btn btn-empty btn-xs edit">// Update</span><span class="btn btn-empty btn-xs edit text-gray1">// Remove</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-5 text-right" data-th="SubTotal:">
                                                <p><span class="lead">$500.00</span></p>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="section first">
                            <div class="col-xs-12 orderextras">
                            <hr class="aligncenter first">
                                <div class="section">
                                    <h5>But Wait, There’s More</h5>
                                    <form class="form-horizontal">
                                        <fieldset>
                                            <div class="form-group">
                                                <div class="col-xs-10 col-sm-5 col-md-6 col-lg-5">
                                                    <p class="small"><span class="text-uppercase">Do you have a Promotional Code?</span></p>                                
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" id="inputDefault" placeholder="Enter Promo Code">
                                                        <span class="input-group-btn">
                                                            <a class="btn btn-default" type="button"> Apply</a>
                                                        </span>
                                                    </div>
                                                    <!-- <ul class="messages"><li class="success-msg"><ul><li><span>SUCCESS! 10% off Coupon Code Accepted.</span></li></ul></li></ul> -->
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>       
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

    <!-- PRODUCT QTY ORDERING: Added to style the Spinner for Numeric Inputs -->
    <script type="text/javascript">
        (function ($) {
          $('.spinner .btn.add').on('click', function() {
            $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
          });
          $('.spinner .btn.subtract').on('click', function() {
            $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
          });
        })(jQuery);
    </script>

    
  

    <!-- End Document
    ================================================== -->

</body>
</html>