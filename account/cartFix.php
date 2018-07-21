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
    <link href="../css/stupid-visfire-crap-trs.css" rel="stylesheet">
    
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
        
        <main class="page-main">
            <div class="main-page-title">My Cart</div>
            <div class="main-page-sbtitle">Checkout</div>
            <div class="mycart-container">
                <div class="right-section">
                    <div class="order-summary-section cart-summary">
                        <div class="rightbar-title">Summary</div>
                        <div class="rightbar-container">
                            <div class="carttop-section">
                                <table class="data table totals">
                                    <tbody>
                                        <tr class="totals sub">
                                            <th>Subtotal</th>
                                            <td class="amount">
                                                <span class="price"><span class="price">$126.00</span></span>
                                            </td>
                                        </tr>        
                                        <tr class="grand totals">
                                            <th>
                                                <strong>Order Total</strong>
                                            </th>
                                            <td class="amount">
                                                <strong>
                                                    <span class="price"><span class="price">$126.00</span></span>
                                                </strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="proceed-chout-section">
                                <button type="button" title="Proceed to Checkout" class="btn btn-block btn-primary" onclick="window.location='https://stage.theretrofitsource.com/checkout/onepage/';">
                                    Proceed to Checkout 
                                </button>
                            </div>
                            <div class="or-container">
                                <span>or</span>
                            </div>
                            <div type="button" class="btn btn-block btn-default paypal button pp-express-buy-btn braintree-paypal-loading" disabled="disabled" data-paypalexpress="true">
                                <span class="icon icon-paypal icon-before"></span>
                                PayPal <i class="hidden-sm text-weightRegular small">Checkout</i>
                            </div>
                        </div>                                                                
                        <div class="order-description"> <!-- Originally class="order-discription" SMH -->
                                <div class="section wrap notice-affirm">
            <div class="text-right text-gray1">
                <div class="affirm-as-low-as" data-promo-id="promo_set_retrofit_source" data-amount="12600"></div>    </div>
        </div>

        <script type="text/javascript">
            if (!AFFIRM_AFFIRM.promos.getIsInitialized()) {
                AFFIRM_AFFIRM.promos.initialize("OPRA6K7RDPIOA6EB",
                    "https://cdn1.affirm.com/js/v2/affirm.js");
            }
                AFFIRM_AFFIRM.promos.initLimitation("175", "50000");

            if (!AFFIRM_AFFIRM.promos.getIsScriptLoaded()) {
                AFFIRM_AFFIRM.promos.loadScript();
            }
        </script>                        <p>*We offer free standard shipping on orders over $100.</p>
                                <p>*For a shipping quote, please fill out address</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left-section">
                                <form id="cart-form" action="https://stage.theretrofitsource.com/checkout/cart/updatePost/" method="post" class="cart-detail-section">
                        <input name="form_key" type="hidden" value="zac6qTOL809JcaQt" />
                        <div class="cart-table-wrapper">
                            <div class="table-responsive">
                                <div class="table">
                                    <div class="thead">
                                        <div class="tr">
                                            <div class="td pro-item">
                                                <span>Item</span>
                                            </div>
                                            <div class="td pro-item-price">
                                                <span>Price</span>
                                            </div>
                                            <div class="td pro-item-qty">
                                                <span>Qty</span>
                                            </div>
                                            <div class="td pro-item-sbtotal">
                                                <span>Subtotal</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tbody">
                                                                            <div class="tr foo">
            <div class="td">

                        <a href="https://stage.theretrofitsource.com/profile-prism-led-rgb-demon-eyes.html" title="Demon Eyes: Profile Prism (RGB)" tabindex="-1" class="product-item-photo">
                <span class="product-image-container">
                    <span class="product-image-wrapper">
                        <img src="https://stage.theretrofitsource.com/media/catalog/product/cache/1/thumbnail/165x/9df78eab33525d08d6e5fb8d27136e95/placeholder/default/productplaceholder_2.jpg" class="product-image-photo" alt="Demon Eyes: Profile Prism (RGB)">
                    </span>
                </span>
                </a>

                <div class="product-item-details">

                    <strong class="product-item-name">
                        <a href="https://stage.theretrofitsource.com/profile-prism-led-rgb-demon-eyes.html">Demon Eyes: Profile Prism (RGB)</a>
                    </strong>

                    
                                                    <div class="dl item-options">
                                                    <div class="product-detail-table">
                                    <div class="product-item-row">
                                        <span class="produt-item-title">Optional XBT Bluetooth Controller:</span>
                                                                            <span class="product-item-detail">
                                            1 X RGBW Controller: Morimoto XBT (1x5 / 2x4 Wire Universal Standard)                                </span>
                                            <span class="product-item-price">
                                            <span class="price">$75.00</span>                                </span>
                                                                    </div>
                                </div>
                                                    <div class="product-detail-table">
                                    <div class="product-item-row">
                                        <span class="produt-item-title">RGB Demon Eyes:</span>
                                                                            <span class="product-item-detail">
                                            2 X Profile Prism: Demon Eye w/ Driver (RGB)                                </span>
                                            <span class="product-item-price">
                                            <span class="price">$45.00</span>                                </span>
                                                                    </div>
                                </div>
                                                    <div class="product-detail-table">
                                    <div class="product-item-row">
                                        <span class="produt-item-title">Optional Mounting Brackets:</span>
                                                                            <span class="product-item-detail">
                                            2 X Demon Eye Bracket - Mini H1                                </span>
                                            <span class="product-item-price">
                                            <span class="price">$6.00</span>                                </span>
                                                                    </div>
                                </div>
                                            </div>
                        <div class="editcon">
                            <a href="https://stage.theretrofitsource.com/checkout/cart/configure/id/4628547/" class="action action-edit" title="Edit item parameters">
                                <span>Edit</span>
                            </a>
                        </div>
                            </div>
            </div>
            <div class="td col-pr">
                <span class="cart-amount"><span class="price"><span class="price">$126.00</span></span></span>
            </div>
            <div class="td col-qt">
                <div class="control qty">
                    <input type="text" class="qty-input" name="cart[4628547][qty]" value="1" title="Quantity" />
                </div>
                <button type="submit" title="Update Quantity" class="update-btn">//Update</button>
            </div>
            <div class="td col-sb">
                <span class="cart-price"><span class="price"><span class="price">$126.00</span></span></span>
            </div>
        </div>
        <div class="tr item-actions">
            <div class="td">
                <div class="actions-toolbar">
                    <a href="https://stage.theretrofitsource.com/checkout/cart/delete/id/4628547/form_key/zac6qTOL809JcaQt/uenc/aHR0cHM6Ly9zdGFnZS50aGVyZXRyb2ZpdHNvdXJjZS5jb20vY2hlY2tvdXQvY2FydC8,/" title="Remove" class="action-delete">//Delete</a>
                </div>
            </div>
        </div>                                                            </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="promotionalcd-section">
                        <h3>But wait, there's more</h3>
        <h5>Do you have a promotional code?</h5>
        <form id="discount-coupon-form" action="https://stage.theretrofitsource.com/checkout/cart/couponPost/" method="post" class="form-inline">
            <input type="hidden" name="remove" id="remove-coupone" value="0" />
            <div class="form-group">
                <div class="input-group">
                    <input class="form-control" placeholder="Enter Promo Code" id="coupon_code" name="coupon_code" value="" />
                    <div class="input-group-addon">
                                            <button type="button" title="Apply Coupon" class="apply-btn" onclick="discountForm.submit(false)" value="Apply Coupon">Apply</button>
                                    </div>
                </div>
            </div>
        </form>
        <script type="text/javascript">
            //<![CDATA[
            var discountForm = new VarienForm('discount-coupon-form');
            discountForm.submit = function (isRemove) {
                if (isRemove) {
                    $('coupon_code').removeClassName('required-entry');
                    $('remove-coupone').value = "1";
                } else {
                    $('coupon_code').addClassName('required-entry');
                    $('remove-coupone').value = "0";
                }
                return VarienForm.prototype.submit.bind(discountForm)();
            }
            //]]>
        </script>
                    </div>
                </div>
            </div>
        </main>    

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