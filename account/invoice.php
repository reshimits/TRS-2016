<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Order Invoice // THE RETROFIT SOURCE</title>
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
<body class="utility cart invoice">

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
                <div class="col-xs-12 col-sm-6">
                    <h1>Invoice</h1>
                    <h5 class="text-white">Thank you for your order!</h5>
                </div>
                <div class="col-xs-12 col-sm-6 pull-right">
                    
                </div>
            </div>
            <div class="jumbotron-img"></div>
        </div>

        <div class="section texturedEdge header-waypoint" data-animate-down="header-small" data-animate-up="header-large"></div>

        <div class="modal-lg modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="section wrap">
                        <p style="margin-top:0;">Completed 10/10/2013   -   -   -   15:07:35 EST<br>
                        An email containing this invoice has been sent to josh@theretrofitsource.com</p>
                        <p style="margin-bottom:0;">If you need to cancel or modify this order: please return to your <a href="">Account History</a> </p>

                    </div>
                </div>
            </div>
        </div>

        <div id="orderdetails">
            <div class="modal-lg modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title text-primary" id="myModalLabel">#100057922 Order Details</h3>
                        <hr>
                    </div>

                    <div class="modal-body">
                        <div class="section wrap">
                            <div class="modal-body-titlecopy">
                                <h5>Billing / Shipping Information</h5>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 wellWrap">
                                    <div class="well option">
                                        <p class="lead text-gray2">Shipping Address</p>
                                        <hr class="aligncenter first">
                                        <p><span class="lead">Robert Shimits</span><br>
                                        747 Quaker Ridge Ct. <br>
                                        Columbus, OH, 43235<br>
                                        United States<br>
                                        440.666.8214
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 wellWrap">
                                    <div class="well option">
                                        <p class="lead text-gray2">Shipping Method</p>
                                        <hr class="aligncenter first">
                                        <p><span class="lead">USPS</span><br>
                                        First Class Mail - Package <br>
                                        1-3 business days<br>
                                        $24.63<br>
                                        Tracking #: <a href="#" class="text-primary">9400111988223468835993</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 wellWrap">
                                    <div class="well option">
                                        <p class="lead text-gray2">Billing Address</p>
                                        <hr class="aligncenter first">
                                        <p><span class="lead">Robert Shimits</span><br>
                                        747 Quaker Ridge Ct. <br>
                                        Columbus, OH, 43235<br>
                                        United States<br>
                                        440.666.8214
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 wellWrap">
                                    <div class="well option">
                                        <p class="lead text-gray2">Billing Method</p>
                                        <hr class="aligncenter first">
                                        <p><span class="lead">Store Credit</span><br>
                                        $100</p>
                                        <p><span class="lead">Credit Card</span> - MasterCard<br>
                                        XXXX-XXXX-XXXX-4466
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xs-12"><div class="row"><hr class="aligncenter first"></div></div>

                        <div class="section half last">
                            <div class="modal-body-titlecopy">
                                <h5>Order Extra Information</h5>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 wellWrap">
                                    <div class="well option">
                                        <p class="lead text-gray2">Purchase Order Details</p>
                                        <hr class="aligncenter first">
                                        <p><span class="lead">Drop Ship</span><br>
                                        P.O. #: 59781B</p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 wellWrap">
                                    <div class="well option">
                                        <p class="lead text-gray2">Promo Code</p>
                                        <hr class="aligncenter first">
                                        <p><span class="lead">TRS2016BlackFriday</span><br>
                                        10% Off 
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-12 wellWrap">
                                    <div class="well option">
                                        <p class="lead text-gray2">Special Requests / Comments</p>
                                        <hr class="aligncenter first">
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut lagret dolore magna aliquam erat volutpat. Ut wisi enim ad minim venom, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea comido consequat. Duis autem vel rum iriure dolor in hendrerit in vulputate veilt esse molestie consegua, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et giusto odio degnissima qui blandi present luptatum zirli delenit augue dus dolore te fegati nulla faciliti.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12"><div class="row"><hr class="aligncenter first"></div></div>

                        <div class="section half">
                            <div class="modal-body-titlecopy">
                                <h5>Order Items</h5>
                            </div>
                            <div class="section first cart-product">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3>BI-XENON: LEXUS RX350</h3>
                                        <hr class="aligncenter first">
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <img class="img-responsive" src="../img/temp--Morimoto XB35 AMP Ballast 4.jpg" alt="" border="0"/>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <ul class="list-group">
                                            <li class="list-group-item active"><p class="small"><span class="lead text-gray2">Bi-Xenon Projectors:</span> 2 x Morimoto Mini H1 6.0 (LHD) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                            <li class="list-group-item"><p class="small"><span class="lead text-gray2">Compatible Ballasts:</span> 2 x Morimoto XB35 (35W) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                            <li class="list-group-item active"><p class="small"><span class="lead text-gray2">Ballast Igniters (required):</span> 2 x Morimoto XB Igniter (AMP) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                            <li class="list-group-item"><p class="small"><span class="lead text-gray2">H1 HID Bulbs:</span> 2 x H1: XB 4500K <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                            <li class="list-group-item active"><p class="small"><span class="lead text-gray2">Shroud Style:</span> 2 x Mini Gatling Gun <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                            <li class="list-group-item"><p class="small"><span class="lead text-gray2">Wire Harness:</span> 1 x HD Relay <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                            <li class="list-group-item active"><p class="small"><span class="lead text-gray2">LED Halos:</span> 2 x 70mm XSB Switchback <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                            <li class="list-group-item"><p class="small"><span class="lead text-gray2">Headlight Sealant:</span> 1 x Gray: RetroRubber <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 cta">
                                        <div class="panel panel-empty">
                                            <div class="panel-body">
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-xs-12 col-sm-4">
                                                                <div class="section wrap">
                                                                    <p><span class="lead">Item Price:</span> <span class="retail text-muted">$439.99</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-4">
                                                                <div class="section wrap">
                                                                    <p><span class="lead">Order QTY:</span> <span class="retail text-muted">1</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-4">
                                                                <div class="section wrap">
                                                                    <p><span class="lead">Sub-Total:</span> <span class="retail text-primary">$439.99</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <div class="section wrap cart-product">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3>BI-XENON Long Title MORIMOTO MINI STAGE III (D2S) Kit</h3>
                                        <hr class="aligncenter first">
                                        <ul class="messages"><li class="error-msg"><ul><li><span>OUT OF STOCK! All or part of this item is current sold out. More are expected in stock by 12-12-16 </span></li></ul></li></ul>
                                    </div>
                                    <div class="col-xs-12 col-sm-4">
                                        <img class="img-responsive" src="../img/temp--Morimoto XB35 AMP Ballast 6.jpg" alt="" border="0"/>
                                    </div>
                                    <div class="col-xs-12 col-sm-8">
                                        <ul class="list-group">
                                            <li class="list-group-item active"><p class="small"><span class="lead text-gray2">Compatible Ballasts:</span> 2 x Morimoto XB35 (35W) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                            <li class="list-group-item"><p class="small"><span class="lead text-gray2">Ballast Igniters (required):</span> 2 x Morimoto XB Igniter (AMP) <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                            <li class="list-group-item active"><p class="small"><span class="lead text-gray2">H1 HID Bulbs:</span> 2 x H1: XB 4500K <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                            <li class="list-group-item"><p class="small"><span class="lead text-gray2">Wire Harness:</span> 1 x HD Relay <span class="lead text-secondary pull-right">$0.00</span></p></li>
                                        </ul>
                                    </div>
                                    <div class="col-xs-12 cta">
                                        <div class="panel panel-empty">
                                            <div class="panel-body">
                                                <div class="col-xs-12">
                                                    <div class="row">
                                                        <div class="form-group">
                                                            <div class="col-xs-12 col-sm-4">
                                                                <div class="section wrap">
                                                                    <p><span class="lead">Item Price:</span> <span class="retail text-muted">$439.99</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-4">
                                                                <div class="section wrap">
                                                                    <p><span class="lead">Order QTY:</span> <span class="retail text-muted">2</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-4">
                                                                <div class="section wrap">
                                                                    <p><span class="lead">Sub-Total:</span> <span class="retail text-primary">$879.98</span></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="section modal-scrollUnder"></div>
                    <div class="modal-footer">
                        <div class="section half last">
                            <div class="modal-body-titlecopy">
                                <h5>Order Summary</h5>
                            </div>
                            <div class="row">
                            <div class="section wrap">
                                <div class="col-xs-12">
                                    <h4>Subtotal: <span class="pull-right">$399.99</span></h4>
                                </div>
                                
                                <div class="col-xs-12">
                                    <h4>Promo Code: <span class="pull-right">-$39.99</span></h4>
                                </div>
                                
                                <div class="col-xs-12">
                                    <h4>Shipping &amp; Handling: <span class="pull-right">$24.04</span></h4>
                                </div>
                                
                                <div class="col-xs-12">
                                    <h4>Sales Tax: <span class="pull-right">$16.38</span></h4>
                                </div>
                                
                                <div class="col-xs-12">
                                    <hr>
                                    <h3 class="text-primary">Total: <span class="pull-right">$840.40</span></h3>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
         

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