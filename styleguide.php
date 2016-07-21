<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

	<!-- Basic Page Needs
  	================================================== -->
	<meta charset="utf-8">
	<title>StyleGuide // THE RETROFIT SOURCE</title>
	<meta name="description" content="HTML/CSS Style Guide for designers and developers">
	<meta name="author" content="SHIMITS Design/Development">

	<!-- Mobile Specific Metas
  	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no" />

	<!-- CSS
  	================================================== -->
	<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="css/bootstrap-theme-full.css" rel="stylesheet">
	<link href="css/trs-theme.css" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	

	<!-- Javascript [primary]
  	================================================== -->
	
	
	<!-- Favicons
  ================================================== -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="icon" sizes="32x32" href="img/favicon-32.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/favicon-152.png">

</head>

<body class="styleguide">


	<!-- Header
	================================================== -->

	<?php require('shared/header.html');?>


	
	<!-- Primary Page Layout
	==================================================
	==================================================
	================================================== -->

	<div class="bodyWrap">

		<!-- <div class="jumbotron feature1">
			<div class="jumbotronCopy">
				<div class="featureHeadline col-xs-12 col-sm-10 col-sm-offset-1">
                    <img src="img/feature1headline.svg" alt="" border="0"/>
                </div>
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
					<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
				</div>
			</div>
			<div class="jumbotron-img"></div>
	  	</div>
 -->
	  	<div class="jumbotron feature1">
			<div class="featureHeadline col-xs-12 col-sm-10 col-sm-offset-1">
                <img src="img/feature1headline.svg" alt="" border="0"/>
            </div>
			<div class="jumbotron-img"></div>
			<div class="jumbotron-honeycomb"></div>
	  	</div>


		
	  	
		<!-- Colors
		================================================== -->
		
		<div class="section title">
			<div class="container-fluid">
            	<div class="col-xs-12">
                	<h2 class="text-center">Colors</h2>
            	</div>
            </div>
        </div>

		<div class="section">
			<div class="container-fluid">
				<div class="row">
			  	<div class="col-sm-12">
					<h5 class="text-primary">Primary: Green #88e333 <span class="text-green hover">(Secondary/Hover #4ebb00)</h5>
					<div class="bs-component" style="margin-bottom: 30px">
				  		<div class="progress">
							<div class="progress-bar bg-primary" style="width: 100%;"></div>
				  		</div>
					</div>
					<!-- <h5 class="text-secondary">Secondary: Orange #ff6d00 <span class="text-orange hover">(#f25d00)</h5>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar bg-secondary" style="width: 66%;"></div>
				  		</div>
					</div>
					<h5 class="text-tertiary">Tertiary: Green #25d588 <span class="text-green hover">(#21c27c)</h5>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar bg-tertiary" style="width: 33%;"></div>
				  		</div>
					</div> -->
					<h5 class="text-gray1">Structural: Gray1 #999  // 
						<span class="text-gray2">Gray2 #666 </span> // 
						<span class="text-gray3">Gray3 #474747 </span> //
						<span class="text-gray4">Gray4 #333 </span>
					</h5>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar progress-bar-striped active bg-gray1" style="width: 25%"></div>
							<div class="progress-bar active bg-gray2" style="width: 25%"></div>
							<div class="progress-bar progress-bar-striped active bg-gray3" style="width: 25%"></div>
							<div class="progress-bar active bg-gray4" style="width: 25%"></div>
				  		</div>
					</div>

			  	</div>
			  	</div>
			</div>
		</div>


		<!-- Typography
		================================================== -->
		
		<div class="section title">
			<div class="container-fluid">
            	<div class="col-xs-12">
                	<h2 class="text-center">Typography</h2>
            	</div>
            </div>
        </div>

		<div class="section">
			<div class="container-fluid">
				<div class="row">
				  	<div class="col-sm-12">
						<div class="bs-component">
					  		<h1>H1: Page Title: <span class="text-weightRegular text-secondary">Sub-Page Title</span></h1>
					  		<h1 class="productdetail">H1: Product Detail Title</h1>
					  		<h2>H2: Section Title</h2>
					  		<h3>H3: Sub-Section Title</h3>
					  		<h4>H4: Section Sub-Title</h4>
					  		<h5>H5: Copy Callout</h5>
					  		<h6>H6: Sub-Sub-Section Sub-Title</h6>
						</div>
				  	</div>
				  	<div class="col-sm-12">
						<div class="bs-component">
					  		<p><span class="lead">Paragraph Lead:</span> Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
					  		<p><small>Small text.</small> &nbsp; <span class="text-weightMedium">Medium text.</span> &nbsp; <span class="text-weightBold">Bold text.</span> &nbsp; <em>Italicized text.</em> &nbsp; <span class="strikethrough">Strikethrough text.</span></p>

					  		<p class="text-muted">Muted: Fusce dapibus, tellus ac cursus commodo.</p>
					  		<p class="text-primary">Primary: Nullam id dolor id nibh ultricies.</p>
					  		<!-- <p class="text-warning">Warning: Etiam porta sem malesuada magna.</p>
					  		<p class="text-danger">Danger: Donec ullamcorper nulla non metus.</p>
					  		<p class="text-success">Success: Duis mollis, est non commodo luctus.</p>
					  		<p class="text-info">Info: Maecenas sed diam eget risus varius blandit.</p> -->
						</div>
					</div>
					<div class="col-sm-6"> 
						<div class="section gray1">
							<h3>Blockquote</h3>
					  		<div class="blockquote">
								<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</h5>
								<small>Someone famous in <cite title="Source Title">Source Title</cite></small>
					  		</div>
						</div>
				  	</div>
				  	<div class="col-xs-12 col-sm-6 col-lg-4">
	                    <div class="panel panel-empty">
	                        <div class="panel-body">
	                            <div class="col-xs-12">
	                                <div class="row" style="background-color: #474747;">
	                                    <div class="blockquote">
	                                        <div class="btn btn-empty btn-hexicon"><span class="icon icon-blockquoteHex"></span></div>
	                                        <p>07.01.2016</p>
	                                        <h6 class="text-white">“Packaging was very nice. Everything comes very neat and labeled clearly. Everything is very straight forward. Light output is way way better. I picked 5500k bulbs. Also have switchback halos behind my shrouds. Tapping them into power etc takes a bit but all is good and works well. Very bright signal and white lite from the switchback xsb. The mini h1 fits very nice in my titan low beam had to trim the shroud slightly (Apollo 3.0) other than that everything is excellent.”</h6>
	                                        <p>– Micah S Lux</p>
	                                    </div>
	                                    <div class="panel-empty-img" style="background-image: url(img/temp-testimonial3.jpg);"></div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				</div>  	
			</div>
		</div>


		<!-- Buttons
		================================================== -->
		
		<div class="section title header-waypoint" data-animate-down="header-small" data-animate-up="header-large">
	        <div class="container-fluid">
	            <div class="col-xs-12">
	                <h2 class="text-center">Buttons</h2>
	            </div>
	        </div>    
        </div>

		<div class="section gray2">
			<div class="container-fluid">
				<div class="row">
			  	<div class="col-sm-6">
					<div class="bs-component">
					  	<a type="button" href="#" class="btn btn-default">Default</a>
					  	<a type="button" href="#" class="btn btn-primary" style="margin-right: 40px;">Primary</a>
					  	<!-- <a type="button" href="#" class="btn btn-success">Success</a>
					  	<a type="button" href="#" class="btn btn-info">Info</a>
					  	<a type="button" href="#" class="btn btn-warning">Warning</a>
					  	<a type="button" href="#" class="btn btn-danger">Danger</a>
					  	<a type="button" href="#" class="btn btn-link">Link</a> 
					  	<a type="button" href="#" class="btn btn-default disabled">Default Disabled</a>-->
					  	<a type="button" href="#" class="btn btn-primary disabled">Primary Disabled</a>
					  	<a type="button" href="#" class="btn btn-primary btn-sm">Primary Small</a>
					  	<!-- <a type="button" href="#" class="btn btn-success disabled">Success</a>
					  	<a type="button" href="#" class="btn btn-info disabled">Info</a>
					  	<a type="button" href="#" class="btn btn-warning disabled">Warning</a>
					  	<a type="button" href="#" class="btn btn-danger disabled">Danger</a>
					  	<a type="button" href="#" class="btn btn-link disabled">Link</a> -->
					</div>
					<div class="bs-component module-buyersguide">
					  	<a type="button" href="#" class="btn btn-ghost">Ghost</a>
					  	<a type="button" href="#" class="btn btn-dark">Dark</a>
					  	<a type="button" href="#" class="btn btn-empty"><span class="icon icon-cart"></span></a>
					  	<div class="btn-group answered">
                            <button type="button" class="btn btn-guide"><span class="lead">Step 1:</span> Reflector Size // <span class="input">Medium</span></button>
                            <button type="button" class="btn btn-guide edit">// Edit</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-guide"><span class="lead">Step 2:</span> Performance</button>
                            <button type="button" class="btn btn-guide edit">// Edit</button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-guide" disabled="disabled"><span class="lead">Step 3:</span> Beam Pattern</button>
                            <button type="button" class="btn btn-guide edit" disabled="disabled">// Edit</button>
                        </div>
						<a type="button" href="#" class="btn btn-empty btn-xs">// Edit</a>
					</div>
					<p class="bs-component">
						<div type="button" href="#" class="btn btn-primary"><span class="icon icon-phone icon-before"></span> Primary w/ Icon</div>
						<a type="button" href="#" class="btn btn-empty"><span class="icon icon-phone icon-before"></span> Empty w/ Icon</a>
					</p>
					<p class="bs-component">
						<div class="btn-group">
					  		<button type="button" class="btn btn-ghost dropdown-toggle" data-toggle="dropdown">Ghost w/ Drop
					  			<span class="caret"></span>
					  		</button>
					  		<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
					  		</ul>
						</div>
						<div class="btn-group">
					  		<button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Dark w/ Drop
					  			<span class="icon icon-after icon-arrowDown"></span>
					  		</button>
					  		<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
					  		</ul>
						</div>
					</p>
					<!-- <p class="bs-component">	
						<div class="btn-group">
					  		<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success 
					  			<span class="caret"></span>
					  		</button>
					  		<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
					  		</ul>
						</div>
						<div class="btn-group">
					  		<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info 
					  			<span class="caret"></span>
					  		</button>
					  		<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
					  		</ul>
						</div>
						<div class="btn-group">
					  		<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning 
					  			<span class="caret"></span>
					  		</button>
					  		<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
					  		</ul>
						</div>
					</p> -->

					<!-- <div style="margin-bottom: 30px;">
				  		<div class="bs-component">
							<div class="btn-group">
					  			<button type="button" class="btn btn-default">Default</button>
					  			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
					  			<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
					  			</ul>
							</div>
							<div class="btn-group">
					  			<button type="button" class="btn btn-primary">Primary</button>
					  			<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
					  			<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
					  			</ul>
							</div>
							<div class="btn-group">
					  			<button type="button" class="btn btn-success">Success</button>
					  			<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
					  			<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
					  			</ul>
							</div>
							<div class="btn-group">
					  			<button type="button" class="btn btn-info">Info</button>
					  			<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
					  			<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
					  			</ul>
							</div>
							<div class="btn-group">
					  			<button type="button" class="btn btn-warning">Warning</button>
					  			<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
					  			<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
					  			</ul>
							</div>
						</div>
					</div> -->

					<!-- <p class="bs-component">
					  	<button type="button" class="btn btn-primary btn-lg">Large button</button>
					  	<button type="button" class="btn btn-primary">Default button</button>
					  	<button type="button" class="btn btn-primary btn-sm">Small button</button>
					  	<a type="button" href="#" class="btn btn-primary btn-xs">Edit</a>
					</p> -->
			  	</div>
			  	
			  	<div class="col-sm-6">
					<p class="bs-component">
				  		<button type="button" class="btn btn-default btn-block">Block level button</button>
					</p>
					<!-- <div class="bs-component" style="margin-bottom: 15px;">
				  		<div class="btn-group btn-group-justified">
							<a href="#" class="btn btn-default">Left</a>
							<a href="#" class="btn btn-default">Middle</a>
							<a href="#" class="btn btn-default">Right</a>
				  		</div>
					</div> -->

					<!--<div class="bs-component" style="margin-bottom: 15px;">
						<div class="btn-group">
						  	<button type="button" class="btn btn-default">1</button>
						  	<button type="button" class="btn btn-default">2</button>
						  	<button type="button" class="btn btn-default">3</button>
						  	<button type="button" class="btn btn-default">4</button>
						</div>
						 <div class="btn-group">
						  	<button type="button" class="btn btn-default">5</button>
						  	<button type="button" class="btn btn-default">6</button>
						  	<button type="button" class="btn btn-default">7</button>
						</div>
						<div class="btn-group">
						  	<button type="button" class="btn btn-default">1</button>
						  	<button type="button" class="btn btn-default">2</button>
						  	<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Dropdown
							  		<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
							  		<li><a href="#">Dropdown link</a></li>
							  		<li><a href="#">Dropdown link</a></li>
								</ul>
						 	</div>
						</div> 
					</div>-->
					<div class="bs-component">
					  	<div class="btn-group-vertical">
						  	<a type="button" href="#" class="btn btn-default">Button</a>
						  	<a type="button" href="#" class="btn btn-default">Button</a>
						  	<a type="button" href="#" class="btn btn-default">Button</a>
						  	<a type="button" href="#" class="btn btn-default">Button</a>
					  	</div>
					</div>

			  	</div>
			  	</div>
			</div>
		</div>


		<!-- Navs
		================================================== -->
		
		<div class="section title">
			<div class="container-fluid">
            	<div class="col-xs-12">
                	<h2 class="text-center">Sub-Navs</h2>
            	</div>
            </div>
        </div>

		<div class="section gray3">
			<div class="container-fluid">

			<!-- <div class="row">
			  	<div class="col-sm-12" style="margin-bottom: 30px;">
					<a name="navbars"></a> 
					<h2 id="nav-tabs">NavBars</h2>
					<div class="bs-component">
				  		<div class="navbar navbar-default">
							<div class="navbar-header">
					  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
					  			</button>
					  			<a class="navbar-brand" href="#">Brand</a>
							</div>
							<div class="navbar-collapse collapse navbar-responsive-collapse">
					  			<ul class="nav navbar-nav">
									<li class="active"><a href="#">Active</a></li>
									<li><a href="#">Link</a></li>
									<li class="dropdown">
						  				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
						  				<ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li class="dropdown-header">Dropdown header</li>
											<li><a href="#">Separated link</a></li>
											<li><a href="#">One more separated link</a></li>
						  				</ul>
									</li>
					  			</ul>
					  			<form class="navbar-form navbar-left" role="search">
					  			  	<div class="form-group">
					  			    	<input type="text" class="form-control" placeholder="Search">
					  			  	</div>
					  			  	<button type="submit" class="btn btn-default">Submit</button>
					  			</form>
					  			<ul class="nav navbar-nav navbar-right">
									<li><a href="#">Link</a></li>
									<li class="dropdown">
						  				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
						  				<ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
						  				</ul>
									</li>
					  			</ul>
							</div>
				  		</div>
					</div>
					<div class="bs-component">
				  		<div class="navbar navbar-inverse">
							<div class="navbar-header">
					  			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
					  			</button>
					  			<a class="navbar-brand" href="#">Brand</a>
							</div>
							<div class="navbar-collapse collapse navbar-inverse-collapse">
					  			<ul class="nav navbar-nav">
									<li class="active"><a href="#">Active</a></li>
									<li><a href="#">Link</a></li>
									<li class="dropdown">
						  				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
						  				<ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li class="dropdown-header">Dropdown header</li>
											<li><a href="#">Separated link</a></li>
											<li><a href="#">One more separated link</a></li>
						  				</ul>
									</li>
					  			</ul>
					  			<form class="navbar-form navbar-left">
									<input type="text" class="form-control col-sm-8" placeholder="Search">
					  			</form>
					  			<ul class="nav navbar-nav navbar-right">
									<li><a href="#">Link</a></li>
									<li class="dropdown">
						  				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
						  				<ul class="dropdown-menu">
											<li><a href="#">Action</a></li>
											<li><a href="#">Another action</a></li>
											<li><a href="#">Something else here</a></li>
											<li class="divider"></li>
											<li><a href="#">Separated link</a></li>
						  				</ul>
									</li>
					  			</ul>
							</div>
				  		</div>
					</div>
				</div>
			</div> -->		

			<div class="row">
			  	<div class="col-sm-6">
					<a name="breadcrumbs"></a> 
					<h3 id="nav-breadcrumbs">Breadcrumbs</h3>
					<div class="bs-component">
				  		<ul class="breadcrumb">
							<li><a href="#">Home</a></li>
							<li><a href="#">Complete Retrofit Kits</a></li>
							<li class="active">Universal Kits</li>
				  		</ul>
					</div>
			  	</div>
			</div>
			<div class="row">
			  	<div class="col-sm-12">
					<a name="tabs"></a> 
					<h3 id="nav-tabs">Horizontal Tabs</h3>
					<div class="bs-component">
				  		<ul class="nav nav-tabs">
							<li><a href="#favorites" data-toggle="tab"><h3>Favorites</h3></a></li>
							<li class="active"><a href="#catalog" data-toggle="tab"><h3>Catalog</h3></a></li>
							<!-- <li class="disabled"><a>Disabled</a></li>
							<li class="dropdown">
					  			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 
					  				<span class="caret"></span>
					  			</a>
					  			<ul class="dropdown-menu">
									<li><a href="#dropdown1" data-toggle="tab">Action</a></li>
									<li class="divider"></li>
									<li><a href="#dropdown2" data-toggle="tab">Another action</a></li>
					  			</ul>
							</li> -->
				  		</ul>
				  		<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade active in" id="favorites">
					  			<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
							</div>
							<div class="tab-pane fade" id="catalog">
						  		<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
							</div>
							<!-- <div class="tab-pane fade" id="dropdown1">
						  		<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
							</div>
							<div class="tab-pane fade" id="dropdown2">
						  		<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
							</div> -->
				  		</div>
					</div>
			  	</div>
			</div>
			<div class="row">
			  	<div class="col-sm-12">
					<h3 id="nav-tabs">Vertical Tabs</h3>
					<div class="bs-component">
				  		<ul class="nav nav-tabs nav-stacked">
							<li class="active"><a href="#home" data-toggle="tab">Home</a></li>
							<li><a href="#profile" data-toggle="tab">Profile</a></li>
							<li class="disabled"><a>Disabled</a></li>
				  		</ul>
				  		<div id="myTabContent" class="tab-content">
							<div class="tab-pane fade active in" id="home">
					  			<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
							</div>
							<div class="tab-pane fade" id="profile">
						  		<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
							</div>
							<div class="tab-pane fade" id="dropdown1">
						  		<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
							</div>
							<div class="tab-pane fade" id="dropdown2">
						  		<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
							</div>
				  		</div>
					</div>
			  	</div>
			</div>
			<div class="row">
			  	<div class="col-sm-4">
					<a name="pagination"></a> 
					<h3 id="pagination">Pagination</h3>
					<div class="bs-component">
				  		<ul class="pagination">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
				  		</ul>
				  		<!-- <ul class="pagination pagination-lg">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
				  		</ul>
				  		<ul class="pagination pagination-sm">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&raquo;</a></li>
				  		</ul> -->
					</div>
			  	</div>
			  	<!-- <div class="col-sm-4">
					<a name="pills"></a> 
					<h3 id="nav-pills">Pills</h3>
					<div class="bs-component">
				  		<ul class="nav nav-pills">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Profile</a></li>
							<li class="disabled"><a href="#">Disabled</a></li>
							<li class="dropdown">
					  			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 
					  				<span class="caret"></span>
					  			</a>
					  			<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
					  			</ul>
							</li>
				  		</ul>
					</div>
					<br>
					<div class="bs-component">
				  		<ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#">Profile</a></li>
							<li class="disabled"><a href="#">Disabled</a></li>
							<li class="dropdown">
					  			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 
					  				<span class="caret"></span>
					  			</a>
					  			<ul class="dropdown-menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
					  			</ul>
							</li>
				  		</ul>
					</div>
			  	</div> -->
			</div>
			</div>

				<!--<div class="row">
				  	 <div class="col-sm-4">
						<a name="pager"></a> 
						<h3 id="pager">Pager</h3>
						<div class="bs-component">
					  		<ul class="pager">
								<li><a href="#">Prev</a></li>
								<li><a href="#">Next</a></li>
					  		</ul>
					  		<ul class="pager">
								<li class="previous disabled"><a href="#">&larr; Older</a></li>
								<li class="next"><a href="#">Newer &rarr;</a></li>
					  		</ul>
						</div>
				  	</div> 
				</div>-->
		</div>


		<!-- Containers
		================================================== -->
		
		<div class="section title">
			<div class="container-fluid">
            	<div class="col-xs-12">
                	<h2 class="text-center">Containers</h2>
            	</div>
            </div>
        </div>

		<div class="section">
			<div class="container-fluid">				
				<div class="row">
				  	<div class="col-sm-12">
						<a name="panels"></a> 
						<h3>Panels</h3>
				  	</div>
				</div>
				<div class="row">
				  	<div class="col-sm-4">
						<div class="bs-component">
						  	<div class="panel panel-default">
								<div class="panel-body">Basic panel</div>
					  		</div>

					  		<div class="panel panel-default">
								<div class="panel-heading">Panel heading</div>
								<div class="panel-body">Panel content</div>
								<div class="panel-footer">Panel footer</div>
					  		</div>
						</div>
				  	</div>
				  	<div class="col-sm-4">
						<div class="bs-component">
					  		<div class="panel panel-empty">
								<div class="panel-body">Empty panel</div>
					  		</div>

					  		<div class="panel panel-account">
								<div class="panel-heading"><h4 class="panel-title">Panel Account</h4></div>
								<div class="panel-body">
									<ul class="list-group">
			                            <li class="list-group-item row">
			                            	<p class="col-sm-6"><span class="lead">1x Input Trigger:</span></p>
			                            	<p class="col-sm-6"><span class="small">9006 Male</span></p>
			                            </li>
			                            <li class="list-group-item active"><p><span class="lead text-white">Stock Bulb Size:</span> 9006, HB4</p></li>
			                            <li class="list-group-item row">
			                            	<p class="col-sm-6"><span class="lead">1x Input Trigger:</span></p>
			                            	<p class="col-sm-6"><span class="small">9006 Male</span></p>
			                            </li>
			                            <li class="list-group-item active"><p><span class="lead text-white">Bi-Xenon Capable:</span> With <a href="">High Beam Splitters</a></p></li>
			                            <li class="list-group-item row">
			                            	<p class="col-sm-6"><span class="lead">1x Input Trigger:</span></p>
			                            	<p class="col-sm-6"><span class="small">9006 Male</span></p>
			                            </li>
			                            <li class="list-group-item active"><p><span class="lead text-white">Output:</span> 35W</p></li>
			                        </ul>
								</div>
					  		</div>

					  		<!-- <div class="panel panel-success">
								<div class="panel-heading">
						  			<h3 class="panel-title">Panel success</h3>
								</div>
								<div class="panel-body">Panel content</div>
					  		</div>

					  		<div class="panel panel-warning">
								<div class="panel-heading">
						  			<h3 class="panel-title">Panel warning</h3>
								</div>
								<div class="panel-body">Panel content</div>
					  		</div>
						</div>
				  	</div>
				  	<div class="col-sm-4">
						<div class="bs-component">
					  		<div class="panel panel-danger">
								<div class="panel-heading">
						  			<h3 class="panel-title">Panel danger</h3>
								</div>
								<div class="panel-body">Panel content</div>
					  		</div>

					  		<div class="panel panel-info">
								<div class="panel-heading">
						  			<h3 class="panel-title">Panel info</h3>
								</div>
								<div class="panel-body">Panel content</div>
					  		</div> -->
						</div> 
				  	</div> 
				</div>

				<div class="row">
				  	<div class="col-sm-12">
						<a name="wells"></a> 
						<h3>Wells</h3>
				  	</div>
				</div>
				<div class="row">
				  	<div class="col-sm-4">
						<div class="bs-component">
					  		<div class="well">Look, I'm in a well!</div>
						</div>
				  	</div>
					<!-- <div class="col-sm-4">
						<div class="bs-component">
					  		<div class="well well-sm">Look, I'm in a small well!</div>
						</div>
				  	</div>
				  	<div class="col-sm-4">
						<div class="bs-component">
					  		<div class="well well-lg">Look, I'm in a large well!</div>
						</div>
				  	</div> -->
				</div>

				<div class="row">
				  	<div class="col-sm-12">
						<a name="listgroups"></a> 
						<h3>List groups</h3>
				  	</div>
				</div>
				<div class="row">
				  	<div class="col-sm-4">
						<div class="bs-component">
						  	<ul class="list-group">
						  		<a href="#" class="list-group-item active">Cras justo odio</a>
								<li class="list-group-item">
							  		<!-- <span class="badge">14</span> -->
							  		Cras justo odio
								</li>
								<li class="list-group-item">
							  		<!-- <span class="badge">2</span> -->
							  		Dapibus ac facilisis in
								</li>
								<li class="list-group-item">
							  		<!-- <span class="badge">1</span> -->
							  		Morbi leo risus
								</li>
						  	</ul>
						</div>
				  	</div>
				  	<!-- <div class="col-sm-4">
						<div class="bs-component">
						  	<div class="list-group">
								<a href="#" class="list-group-item active">Cras justo odio</a>
								<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
								<a href="#" class="list-group-item">Morbi leo risus</a>
						  	</div>
						</div>
				  	</div> -->
				  	<div class="col-sm-4">
						<div class="bs-component">
					  		<div class="list-group">
								<div class="list-group-item">
						  			<h4 class="list-group-item-heading">List group item heading</h4>
						  			<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
								</div>
								<a href="#" class="list-group-item">
						  			<h4 class="list-group-item-heading">List group item heading</h4>
						  			<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
								</a>
					  		</div>
						</div>
				  	</div>
				</div>

				<div class="row">
				  	<div class="col-sm-12">
						<a name="thumbnails"></a> 
						<h3>Thumbnails</h3>
				  	</div>
				</div>
				<div class="row">
					<div class="panel-heading">Photo Thumbnails</div>
				  	<div class="col-sm-12">
						<div class="col-xs-6 col-md-3">
		        			<a class="thumbnail" data-toggle="modal" data-target="#myThumb">
		          				<img class="media-object" src="img/genericPlaceholderThumbnail.svg" alt="Generic placeholder thumbnail" border="0">
		        			</a>
		      			</div>
		      			<div class="col-xs-6 col-md-3">
		        			<a class="thumbnail" data-toggle="modal" data-target="#myThumb">
		          				<img class="media-object" src="img/genericPlaceholderThumbnail.svg" alt="Generic placeholder thumbnail" border="0">
		        			</a>
		      			</div>
		      			<div class="col-xs-6 col-md-3">
		        			<a class="thumbnail" data-toggle="modal" data-target="#myThumb">
		          				<img class="media-object" src="img/genericPlaceholderThumbnail.svg" alt="Generic placeholder thumbnail" border="0">
		        			</a>
		      			</div>
		      			<div class="col-xs-6 col-md-3">
		        			<a class="thumbnail" data-toggle="modal" data-target="#myThumb">
		          				<img class="media-object" src="img/genericPlaceholderThumbnail.svg" alt="Generic placeholder thumbnail" border="0">
		        			</a>
		      			</div>
			      	</div>	

			      	<div id="myThumb" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myThumbLabel" aria-hidden="true">
					    <div class="modal-dialog">
					      	<div class="modal-content">
					        	<div class="modal-header">
					          		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					          		<h4 class="modal-title" id="myThumbLabel">Modal Heading</h4>
					        	</div>
					        	<div class="modal-body">
					        		<img class="img-responsive" src="http://placehold.it/1200x480" alt="">
					        	</div>
					        	<div class="modal-footer">
					          		<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
					        	</div>
					      	</div>
					    </div>
					</div>
	      		</div>	
	      		<div class="row">
					<div class="col-sm-12">
						<div class="bs-component">
						  	<div class="panel panel-default">
								<div class="panel-heading">Product Thumbnails</div>
								<div class="panel-body">
									<div class="col-sm-6 col-md-4">
									    <div class="thumbnail">
									        <img class="media-object" src="img/genericPlaceholderThumbnail.svg" alt="Generic placeholder thumbnail" border="0">
									        <div class="caption">
									            <h3>Thumbnail label</h3>
									            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
									        </div>
									    </div>
									</div>
									<div class="col-sm-6 col-md-4">
									    <div class="thumbnail">
									        <img class="media-object" src="img/genericPlaceholderThumbnail.svg" alt="Generic placeholder thumbnail" border="0">
									        <div class="caption">
									            <h3>Thumbnail label</h3>
									            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
									        </div>
									    </div>
									</div>
									<div class="col-sm-6 col-md-4">
									    <div class="thumbnail">
									        <img class="media-object" src="img/genericPlaceholderThumbnail.svg" alt="Generic placeholder thumbnail" border="0">
									        <div class="caption">
									            <h3>Thumbnail label</h3>
									            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
									        </div>
									    </div>
									</div>
					      		</div>
				      		</div>
				      	</div>	
				    </div>  		
	      		</div>	


				<!-- <div class="row">
				  	<div class="col-sm-12">
						<a name="mediaobjects"></a> 
						<h3>Media Objects</h3>
				  	</div>
				</div>
				<div class="row">
				  	 <div class="col-sm-6">
						<div class="bs-component">
							<div class="panel panel-default">
								<div class="panel-heading">Default Media Block</div>
								<div class="panel-body">
								  	<div class="media">
								  	    <a class="pull-left" href="#">
								  	    	<img class="media-object" src="img/genericPlaceholderImage.svg" alt="Generic placeholder image" border="0">
								  	    </a>
								  	    <div class="media-body">
								  	        <h4 class="media-heading">Media heading</h4>
								  	        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
								  	        <div class="media">
								  	          	<a class="pull-left" href="#">
								  	            	<img class="media-object" src="img/genericPlaceholderImage.svg" alt="Generic placeholder image" border="0">
								  	          	</a>
								  	          	<div class="media-body">
								  	            	<h4 class="media-heading">Nested media heading</h4>
								  	            	Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
								  	          	</div>
								  	        </div>
								  	    </div>
								  	</div>
								</div>
							</div>		  	
						</div>
				 	</div> 
				 	<div class="col-sm-12">
						<div class="bs-component">
							<div class="panel panel-default">
								<div class="panel-heading">Media List</div>
								<div class="panel-body">
								  	<ul class="media-list">
								  	    <li class="media">
								  	        <a class="pull-left" href="#">
								  	          	<img class="media-object" src="img/genericPlaceholderImage.svg" alt="Generic placeholder image" border="0">
								  	        </a>
								  	        <div class="media-body">
								  	          	<h4 class="media-heading">Media heading</h4>
								  	          	<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
								  	          	
								  	          	<div class="media">
								  	            	<a class="pull-left" href="#">
								  	              		<img class="media-object" src="img/genericPlaceholderImage.svg" alt="Generic placeholder image" border="0">
								  	            	</a>
								  	            	<div class="media-body">
								  	              		<h4 class="media-heading">Nested media heading</h4>
								  	              		Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
								  	            	</div>
								  	          	</div>
								  	          	
								  	          	<div class="media">
								  	            	<a class="pull-left" href="#">
								  	              		<img class="media-object" src="img/genericPlaceholderImage.svg" alt="Generic placeholder image" border="0">
								  	            	</a>
								  	            	<div class="media-body">
								  	              		<h4 class="media-heading">Nested media heading</h4>
								  	              		Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
								  	            	</div>
								  	          	</div>
								  	        </div>
								  	    </li>
								  	    <li class="media">
								  	        <a class="pull-left" href="#">
								  	          	<img class="media-object" src="img/genericPlaceholderImage.svg" alt="Generic placeholder image" border="0">
								  	        </a>
								  	        <div class="media-body">
								  	          	<h4 class="media-heading">Media heading</h4>
								  	          	<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
								  	        </div>
								  	    </li>
								  	    <li class="media">
								  	        <a class="pull-left" href="#">
								  	          	<img class="media-object" src="img/genericPlaceholderImage.svg" alt="Generic placeholder image" border="0">
								  	        </a>
								  	        <div class="media-body">
								  	          	<h4 class="media-heading">Media heading</h4>
								  	          	<p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
								  	        </div>
								  	    </li>
								  	</ul>
								</div>
							</div>		  	
						</div>
				 	</div>
				</div>
			</div> -->
			
		</div>


		<!-- Tables
		================================================== -->
		  
		<!--<a name="tables"></a>   
		<div class="section">
			<div class="row">
			  	<div class="col-sm-12">
					<div class="page-header">
				  		<h2 id="tables">Tables</h2>
					</div>

					<div class="bs-component">
				  		<table class="table table-striped table-hover ">
							<thead>
							  	<tr>
									<th>#</th>
									<th>Column heading</th>
									<th>Column heading</th>
									<th>Column heading</th>
							  	</tr>
							</thead>
							<tbody>
							  	<tr>
									<td>1</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr>
									<td>2</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr class="info">
									<td>3</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr class="success">
									<td>4</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr class="danger">
									<td>5</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr class="warning">
									<td>6</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							  	<tr class="active">
									<td>7</td>
									<td>Column content</td>
									<td>Column content</td>
									<td>Column content</td>
							  	</tr>
							</tbody>
						</table> 
					</div>
			  	</div>
			</div>
		</div> -->


		<!-- Forms
		================================================== -->
		
		<div class="section title">
			<div class="container-fluid">
            	<div class="col-xs-12">
                	<h2 class="text-center">Forms</h2>
            	</div>
            </div>
        </div>

		<div class="section">
			<div class="container-fluid">
				<div class="row">
			  	<div class="col-sm-6">
					<div class="well bs-component">
						<form class="form-horizontal">
							<fieldset>
							  	<legend>Legend</legend>
							  	<div class="form-group">
									<label for="inputEmail" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
								  		<input type="text" class="form-control" id="inputEmail" placeholder="Email">
									</div>
							  	</div>
							  	<div class="form-group">
									<label for="inputPassword" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-10">
								  		<input type="password" class="form-control" id="inputPassword" placeholder="Password">
								  		<div class="checkbox">
											<label>
									  			<input type="checkbox"> Checkbox
											</label>
								  		</div>
									</div>
							  	</div>
							  	<div class="form-group">
									<label for="textArea" class="col-sm-2 control-label">Textarea</label>
									<div class="col-sm-10">
								  		<textarea class="form-control" rows="3" id="textArea"></textarea>
								  		<span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
									</div>
							  	</div>
							  	<div class="form-group">
									<label class="col-sm-2 control-label">Radios</label>
									<div class="col-sm-10">
								  		<div class="radio">
											<label>
									  			<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">Option one is this
											</label>
								  		</div>
								  		<div class="radio">
											<label>
									  			<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Option two can be something else
											</label>
								  		</div>
									</div>
							  	</div>
							  	<div class="form-group">
									<label for="select" class="col-sm-2 control-label">Selects</label>
									<div class="col-sm-10">
									  	<select class="form-control" id="select">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
									  	</select>
								  		<br>
										<select multiple="" class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
							  	</div>
							  	<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
								  		<button class="btn btn-default">Cancel</button>
								  		<button type="submit" class="btn btn-primary">Submit</button>
									</div>
							  	</div>
							</fieldset>
						</form>
					</div>
			  	</div>
			  	<div class="col-sm-4 col-sm-offset-1">

				  	<form class="bs-component">
						<div class="form-group">
						  	<label class="control-label" for="focusedInput">Focused input</label>
						  	<input class="form-control" id="focusedInput" type="text" value="This is focused...">
						</div>

						<div class="form-group">
						  	<label class="control-label" for="disabledInput">Disabled input</label>
						  	<input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
						</div>

						<div class="form-group has-warning">
						  	<label class="control-label" for="inputWarning">Input warning</label>
						  	<input type="text" class="form-control" id="inputWarning">
						</div>

						<div class="form-group has-error">
						  	<label class="control-label" for="inputError">Input error</label>
						  	<input type="text" class="form-control" id="inputError">
						</div>

						<div class="form-group has-success">
						  	<label class="control-label" for="inputSuccess">Input success</label>
						  	<input type="text" class="form-control" id="inputSuccess">
						</div>

						<div class="form-group">
						  	<label class="control-label" for="inputDefault">Default input</label>
						  	<input type="text" class="form-control" id="inputDefault">
						</div>

						<div class="form-group has-suggestions">
						  	<label class="control-label" for="inputSuggestions">Input w/ AutoComplete Suggestions</label>
						  	<input type="text" class="form-control" id="inputSuggestions">
						  	<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
					  		</ul>
						</div>

						<!-- <div class="form-group">
						  	<label class="control-label" for="inputLarge">Large input</label>
						  	<input class="form-control input-lg" type="text" id="inputLarge">
						</div> 

						<div class="form-group">
						  	<label class="control-label" for="inputSmall">Small input</label>
						  	<input class="form-control input-sm" type="text" id="inputSmall">
						</div>-->

						<div class="form-group">
						  	<label class="control-label">Input addons</label>
						  	<div class="input-group">
								<span class="input-group-addon">$</span>
								<input type="text" class="form-control">
								<span class="input-group-btn">
							  		<button class="btn btn-default" type="button">Button</button>
								</span>
						  	</div>
						</div>
				  	</form>

			  	</div>
			  	</div>
			</div>
		</div>

		  

		<!-- Indicators
		================================================== -->
		
		<div class="section title">
			<div class="container-fluid">
            	<div class="col-xs-12">
                	<h2 class="text-center">Indicators</h2>
            	</div>
            </div>
        </div>

		<div class="section">
			<div class="container-fluid">
				<div class="row">
				  	<div class="col-sm-12">
						<a name="alerts"></a> 
						<h3>Alerts</h3>
				  	</div>
				</div>

				<!-- MAGENTO STYLE ALERTS -->
				<ul class="messages"><li class="notice-msg"><ul><li><span>This is just some general info and <a href="#">a link.</a></span></li></ul></li></ul>
				<ul class="messages"><li class="error-msg"><ul><li><span>ERROR! Invalid login or password and <a href="#">a link.</a></span></li></ul></li></ul>
				<ul class="messages"><li class="success-msg"><ul><li><span>SUCCESS! Product ABC has been added to your cart and <a href="#">a link.</a></span></li></ul></li></ul>

				<!-- BOOTSTRAP STYLE ALERTS -->
				<!-- <div class="section half last">
                    <div class="col-xs-12">
                    <div class="row">
                        <div class="alert alert-dismissable alert-info">
                            <div type="button" class="close" data-dismiss="alert">&times;</div>
                           <p><span class="lead">Yo ho ho!</span> This is just some general info.</p>
                        </div>
                    </div>
                    </div>
                </div>
				<div class="section half last">
                    <div class="col-xs-12">
                    <div class="row">
                        <div class="alert alert-dismissable alert-danger">
                            <div type="button" class="close" data-dismiss="alert">&times;</div>
                           <p><span class="lead">Error!</span> Change a few things up and try submitting again.</p>
                        </div>
                    </div>
                    </div>
                </div>
				<div class="section half">
                    <div class="col-xs-12">
                    <div class="row">
                        <div class="alert alert-dismissable alert-success">
                            <div type="button" class="close" data-dismiss="alert">&times;</div>
                            <p><span class="lead">Success!</span> Product ABC has been added to your cart.</p>
                        </div>
                    </div>
                    </div>
                </div> -->
				  	
				<div class="row">
				  	<div class="col-sm-4">
						<a name="labels"></a> 
						<h3>Labels</h3>
						
					  	<div class="label label-new">
					  		<div class="label-inner"><span class="icon icon-new"></span> New!</div>
					  	</div>

					  	<div class="label label-fitment">
					  		<div class="label-inner"><span class="icon icon-fitment"></span> Fitment</div>
					  	</div>

						  	<!-- <span class="label label-default">Default</span>
						  	<span class="label label-primary">Primary</span>
						  	<span class="label label-success">Success</span>
						  	<span class="label label-warning">Warning</span>
						  	<span class="label label-danger">Danger</span>
						  	<span class="label label-info">Info</span> -->
				  	</div>
				  	<div class="col-sm-6 col-sm-offset-2">
						<a name="badges"></a> 
						<h3>Badges</h3>
						<div class="bs-component">
					  		<ul class="nav nav-pills">
								<li class="active"><a href="#">Home <span class="badge">42</span></a></li>
								<li><a href="#">Profile <span class="badge"></span></a></li>
								<li><a href="#">Messages <span class="badge">3</span></a></li>
								<li><a type="button" href="#" class="btn btn-empty"><span class="icon icon-cart"></span><span class="badge">4</span></a></li>
					  		</ul>
						</div>
				  	</div>
				</div>
			</div>
		</div>



		<!-- Progress bars
		================================================== -->
		
		<!-- <a name="progressbars"></a>   	
		<div class="section">
			<div class="row">
			  	<div class="col-sm-12">
					<div class="page-header">
				  		<h2 id="progress">Progress bars</h2>
					</div>

					<h3 id="progress-basic">Basic</h3>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar" style="width: 60%;"></div>
				  		</div>
					</div>

					<h3 id="progress-alternatives">Alternatives</h3>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar progress-bar-info" style="width: 20%"></div>
				  		</div>
				  		<div class="progress progress-striped">
							<div class="progress-bar progress-bar-info" style="width: 20%"></div>
				  		</div>
				  		<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 40%"></div>
				  		</div>
				  		<div class="progress progress-striped">
							<div class="progress-bar progress-bar-success" style="width: 40%"></div>
				  		</div>
				  		<div class="progress">
							<div class="progress-bar progress-bar-warning" style="width: 60%"></div>
				  		</div>
				  		<div class="progress progress-striped">
							<div class="progress-bar progress-bar-warning" style="width: 60%"></div>
				  		</div>
				  		<div class="progress">
							<div class="progress-bar progress-bar-danger" style="width: 80%"></div>
				  		</div>
				  		<div class="progress progress-striped">
							<div class="progress-bar progress-bar-danger" style="width: 80%"></div>
				  		</div>
					</div>

					<h3 id="progress-animated">Animated</h3>
					<div class="bs-component">
				  		<div class="progress progress-striped active">
							<div class="progress-bar" style="width: 45%"></div>
				  		</div>
					</div>

					<h3 id="progress-stacked">Stacked</h3>
					<div class="bs-component">
				  		<div class="progress">
							<div class="progress-bar progress-bar-success" style="width: 35%"></div>
							<div class="progress-bar progress-bar-warning" style="width: 20%"></div>
							<div class="progress-bar progress-bar-danger" style="width: 10%"></div>
				  		</div>
					</div>
			  	</div>
			</div>
		</div> -->

		  

		<!-- Dialogs
		================================================== -->
		
		<div class="section title">
			<div class="container-fluid">
            	<div class="col-xs-12">
                	<h2 class="text-center">Dialogs</h2>
            	</div>
            </div>
        </div>

		<div class="section">
			<div class="container-fluid">
				<div class="row">
			  	<div class="col-sm-6">
					<a name="modals"></a> 
					<h3>Modals</h3>
					<div class="bs-component">
						<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      	<div class="modal-content">
						        	<div class="modal-header">
						          		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          		<h4 class="modal-title" id="myModalLabel">Modal Heading</h4>
						        	</div>
						        	<div class="modal-body">
						          		<h4>Text in a modal</h4>
						          		<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
						          		<h4>Popover in a modal</h4>
						          		<p>This <a href="#" role="button" class="btn btn-default popover-test" title="A Title" data-content="And here's some amazing content. It's very engaging. right?">button</a> should trigger a popover on click.</p>
						          		<h4>Tooltips in a modal</h4>
						          		<p><a href="#" class="tooltip-test" title="Tooltip">This link</a> and <a href="#" class="tooltip-test" title="Tooltip">that link</a> should have tooltips on hover.</p>

						          		<hr>

						          		<h4>Overflowing text to show scroll behavior</h4>
						          		<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
						          		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
						          		<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
						          		<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
						          		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
						          		<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
						          		<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
						          		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
						          		<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
						        	</div>
						        	<div class="modal-footer">
						          		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						          		<button type="button" class="btn btn-primary">Save changes</button>
						        	</div>
						      	</div><!-- /.modal-content -->
						    </div><!-- /.modal-dialog -->
						</div><!-- /.modal -->

						<div class="bs-example" style="padding-bottom: 24px;">
						    <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Launch demo modal</button>
						</div>
					</div>	
			  	</div>

			  	<div class="col-sm-6">
					<a name="popovers"></a> 
					<h3>Popovers</h3>
					<div class="bs-component">
				  		<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Left</button>
				  		<div type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Top</div>
				  		<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Bottom</button>
				  		<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">Right</button>
					</div>
					<!-- <a name="tooltips"></a> 
					<h3>Tooltips</h3>
					<div class="bs-component">
				  		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left">Left</button>
				  		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Top</button>
				  		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Bottom</button>
				  		<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Right</button>
					</div> -->
			  	</div>
			  	</div>
			</div>
		</div>


		<!-- Carousel
		================================================== -->
		
		<div class="section title">
			<div class="container-fluid">
            	<div class="col-xs-12">
                	<h2 class="text-center">Carousel</h2>
            	</div>
            </div>
        </div>

		<div class="section">
			<div class="container-fluid">
				<div class="row">
			    <div id="myCarousel" class="carousel slide" data-ride="carousel">
			      	<!-- Indicators -->
			      	<ol class="carousel-indicators">
				        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				        <li data-target="#myCarousel" data-slide-to="1"></li>
				        <li data-target="#myCarousel" data-slide-to="2"></li>
			      	</ol>
			      	<div class="carousel-inner">
			        	<div class="item active">
			          		<img src="http://placehold.it/1200x480" alt="">
			          		<div class="container">
			            		<div class="carousel-caption">
			              			<h2>Example headline.</h2>
			              			<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
			              			<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
			            		</div>
			          		</div>
			        	</div>
			        	<div class="item">
			          		<img src="http://placehold.it/1200x480" alt="">
			          		<div class="container">
			            		<div class="carousel-caption">
			              			<h2>Another example headline.</h2>
			              			<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			              			<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
			            		</div>
			          		</div>
			        	</div>
			        	<div class="item">
			          		<img src="http://placehold.it/1200x480" alt="">
			          		<div class="container">
			            		<div class="carousel-caption">
			              			<h2>One more for good measure.</h2>
			              			<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
			              			<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
			            		</div>
			          		</div>
			        	</div>
			      	</div>
			      	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			      	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			    </div><!-- /.carousel -->
			    </div>
			</div>
		</div>	    

		<!-- End Primary Page Layout
		==================================================
		==================================================
		================================================== -->


	  	<footer>
			<div class="section title">
				<div class="container-fluid">
	            	<div class="col-xs-12">
	                	<h2 class="text-center">Footer</h2>
	            	</div>
	            </div>
	        </div>

			<div class="section">
				<div class="container-fluid">
					<div class="row">
					  	<div class="col-sm-12">

							<ul class="list-unstyled">
							  	<li class="pull-right"><a href="#top">Back to top</a></li>
							  	<li><a href="index.php">Home</a></li>
							  	<!-- <li><a href="styleguide.php">StyleGuide</a></li> -->

							  	<!-- <li><a href="https://twitter.com/thomashpark">Twitter</a></li>
							  	<li><a href="https://github.com/thomaspark/bootswatch/">GitHub</a></li>
							  	<li><a href="../help/#api">API</a></li>
							  	<li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=F22JEM3Q78JC2">Donate</a></li> -->
							</ul>
						
							<p>Based on <a href="http://getbootstrap.com" rel="nofollow" target="_blank">Bootstrap</a>. With <a href="http://www.google.com/webfonts" rel="nofollow" target="_blank">Google Web Fonts</a>.</p>
				        	<p>&copy; Company 2014</p>
					  	</div>
					</div>
				</div>	  	
			</div>
	  	</footer>


		</div> <!-- /container -->
	</div>
	

	<!-- Javascript [secondary]
	================================================== -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>	
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	
	<!-- For performance reasons, the Tooltip and Popover data-apis are opt-in, meaning you must initialize them yourself. -->
	<script type="text/javascript">
        $('.btn').popover('hide');
        $('.btn').tooltip('hide');

        $(document).ready(function(){
            $('.btn').popover();
            $('.btn').on('click', function (e) {
                $('.btn').not(this).popover('hide');
            });
        });
    </script> 	
	
	<script>
  		$(document).ready(function(){
    		$('.carousel').carousel({
		      	interval: 2000
		    });
  		});
	</script>

	<!-- HEADER/NAV size change based on scroll -->
	<script src="js/waypoints.min.js"></script>
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
    <script src="js/viewport-units-buggyfill.js"></script>
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