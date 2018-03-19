<?php require('news/wp-blog-header.php'); ?>
<?php include('language.php');
		$default=($_GET['lang']=='') ? 'fi' : $_GET['lang']; ?>
		
<!doctype html>

<html lang="fi">
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="trunghoang.me">
	<meta name="description" content="Sunrob's official website">
	<meta name="keywords" content="Kuka, SunRob, Robots, aftersale, services">

    <title>SUNROB</title>
	<link rel="shortcut icon" href="img/favicon.ico" />
    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sunrob.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

		<!-- Navigation -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand blackhover" href="#page-top"><img id="logo" src="img/Sunrob.png" alt" "></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right blackhover">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="page-scroll">
							<a href="#about"><?php echo $lang[$default]['about']?></a>
						</li>
						<li class="page-scroll">
							<a href="#robots"><?php echo $lang[$default]['robots']?></a>
						</li>
						<li class="page-scroll">
							<a href="#service"><?php echo $lang[$default]['service']?></a>
						</li>
						<li class="page-scroll">
							<a href="#news"><?php echo $lang[$default]['news']?></a>
						</li>						
						<li class="page-scroll">
							<a href="#contact"><?php echo $lang[$default]['contact']?></a>
						</li>
						<li style="padding-left:15px;margin-top:10px;text-align:center;">							
								<div class="row ">
									<a href="?lang=fi">Suomi</a>
								</div>
								<div class="row">
									<a href="?lang=en">English</a>
								</div>
							
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>

		<!-- Header -->
		<header>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="col-lg-1 col-lg-offset-2 col-xs-1 col-xs-offset-1">
							<img class="imgname" src="img/SunRobBlack.png" alt="">
						</div>   
						<div class="col-lg-6 col-sm-8 col-xs-8">
						<div class="intro-text">
							<span class="name">Sunrob</span>                        
							<span class="skills" ><?php echo $lang[$default]['subtitle']?></span>
						</div>
						
						</div>
					</div>
					
					<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 headerline">	
						<?php
								global $post;
								$args = array( 'posts_per_page' => 3 );
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :	setup_postdata($post);
						?>
						<div class="row">
							<a href="<?php the_permalink() ?>">
								<div class="blogs" style="padding:10px;">
									<h6><?php the_title(); ?></h6>
									<p style="text-align:center;font-size:13px;"><?php the_date(); ?></p>								
								</div>
							</a>
						</div>
					<?php endforeach; ?>
					</div>
					<div class="row page-scroll">
				
								<a href="#about" class="btn btn-circle ">
								<i class="fa fa-angle-double-down "></i>
							 </a>
							</div>
				</div>
				
				
			</div>
		</header>
		
		<!-- About Section -->
		<section id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2>About</h2>						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-lg-offset-1">
						<img class="img-responsive img-centered" src="img/about.jpg" alt=""></img>
						<br />
					</div>
					<div class="col-lg-7">
						<p><?php echo $lang[$default]['aboutInfo']?></p>
					</div>					
				</div>
			</div>
		</section>

		<!-- Robot Section -->
		<section id="robots">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2><?php echo $lang[$default]['robots']?></h2>				
					</div>
				</div>
				<div class="row">
						<div class="col-lg-3 col-xs-6">
							<a href="http://kuka-robotics.com/en/products/industrial_robots/" target="_blank">
									<img class="img-responsive img-centered" style="width:65%;" src="img/product1.jpg" ></img>
									<h3 class="text-center"><?php echo $lang[$default]['robots']?></h3>
							</a>												
						</div>
						<div class="col-lg-3 col-xs-6">
							<a href="http://kuka-robotics.com/en/products/controllers/" target="_blank">
									<img  class="img-responsive img-centered " style="width:65%;"src="img/product2.jpg" ></img>
									<h3 class="text-center"><?php echo $lang[$default]['controllers']?></h3>
							</a>												
						</div>
						<div class="col-lg-3 col-xs-6">
							<a href="http://kuka-robotics.com/en/products/addons/" target="_blank">
									<img  class="img-responsive img-centered" style="width:65%;" src="img/product3.jpg" ></img>
									<h3 class="text-center"><?php echo $lang[$default]['tracks']?></h3>
							</a>												
						</div>
						<div class="col-lg-3 col-xs-6">
							<a href="http://kuka-robotics.com/en/products/software/" target="_blank">
									<img  class="img-responsive img-centered" style="width:65%;" src="img/product4.jpg" ></img>
									<h3 class="text-center"><?php echo $lang[$default]['mobile']?></h3>
							</a>												
						</div>
				</div>
				<div class="row">
					<p><?php echo $lang[$default]['robot-content']?></p>
				</div>
			</div>
		</section>

		<!-- Service Section -->
		<section id="service">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2><?php echo $lang[$default]['service']?></h2>						
					</div>
				</div>
				<div class="row ">
						<div class="col-lg-3 col-sm-6  col-xs-12">							
									<img class="img-responsive img-centered" style="width:60%;" src="img/Robot.png" ></img>
									<h3 class="text-center"><?php echo $lang[$default]['robots']?></h3>
									<p><?php echo $lang[$default]['robots-description']?></p>
						</div>
						<div class="col-lg-3 col-sm-6 col-xs-12">							
									<img class="img-responsive img-centered" style="width:60%;" src="img/Training.png" ></img>
									<h3 class="text-center"><?php echo $lang[$default]['training']?></h3>
									<p><?php echo $lang[$default]['training-description']?></p>
						</div>
						
						<div class="col-lg-3 col-sm-6 col-xs-12">							
									<img class="img-responsive img-centered" style="width:60%;" src="img/maintenance.png" ></img>
									<h3 class="text-center"><?php echo $lang[$default]['maintenance']?></h3>
									<p><?php echo $lang[$default]['maintenance-description']?></p>
						</div>
						<div class="col-lg-3 col-sm-6 col-xs-12">							
									<img class="img-responsive img-centered" style="width:60%;" src="img/Replacement.png" ></img>
									<h3 class="text-center"><?php echo $lang[$default]['replacement']?></h3>
									<p><?php echo $lang[$default]['replacement-description']?></p>
						</div>			
				</div>
			</div>
		</section>
		
		<!-- News Section -->
		<section id="news">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2><?php echo $lang[$default]['news']?></h2>
						<h6 style="text-decoration:underline;"><a href="news">Go to Blog Section</a></h6>						
					</div>
				</div>
				<div class="row">
						<?php
							global $post;
							$args = array( 'posts_per_page' => 3 );
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :	setup_postdata($post);
						?>
					<div class="col-sm-4">
						<a href="<?php the_permalink() ?>">
							<div class="blogs">
								<h4><?php the_title(); ?></h4>
								<p style="text-align:center;"><?php the_date(); ?></p>
								<p><?php the_excerpt(); ?></p>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
				</div>
			</div>
		</section>
		
		<!-- Contact Section -->
		<section id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2><?php echo $lang[$default]['contact']?></h2>						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="col-sm-4 col-xs-4">						         						
							<a href="mailto:sunrob@sunrob.fi">					
									<img src="img/Email.png" class="img-responsive img-centered" style="width:20%;" />	
									<p class="text-center">sunrob@sunrob.fi</p>					
							</a>					
						</div>
						<div class="col-sm-4 col-xs-4">	
							<a href="tel:+358 44 257 94 77">
								<img src="img/Phone.png" class="img-responsive img-centered" style="width:20%;" />
								<p class="text-center">+358 44 257 94 77</p>				
							</a>						
						</div>
						<div class="col-sm-4 col-xs-4">
							<a href="https://www.google.fi/maps/place/Sunrob+Oy/@60.9359389,25.6363038,17z/data=!3m1!4b1!4m2!3m1!1s0x468e27e0a9e32e07:0xcc77548f90f5c836" target="_blank">
								<img src="img/Place.png" class="img-responsive img-centered" style="width:20%;" />
								<p class="text-center">Tupalankatu 9, 15680 Lahti</p>				
							</a>           
						</div>
					</div>
				</div>
				<div class="row mapandform" >
					<div class="col-sm-5">

						<form name="email_form" method="post" action="email_form.php" id="contactForm" novalidate>
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<label>Name</label>
									<input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<label>Email Address</label>
									<input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
									<p class="help-block text-danger"></p>
								</div>
							</div>
							
							<div class="row control-group">
								<div class="form-group col-xs-12 floating-label-form-group controls">
									<label>Message</label>
									<textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
									<p class="help-block text-danger"></p>
								</div>
							</div>
							<br>						
							<div class="row">
								<div class="form-group col-xs-12" style="padding:0;">
									<button type="submit" class="btn btn-success btn-lg ">Send</button>
								</div>
							</div>
						</form>

					</div>

					<div class="col-sm-7">

        					<a href="https://www.google.fi/maps/place/Sunrob+Oy/@60.9359389,25.6363038,17z/data=!3m1!4b1!4m2!3m1!1s0x468e27e0a9e32e07:0xcc77548f90f5c836" target="_blank">
							<div id="googleMap"></div>
							</a>

					</div>
						<!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
						<!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
						
					</div>
				</div>
			
		</section>

		<!-- Footer -->
		<footer class="text-center">
			<div class="footer-above">
				<div class="container">
					<div class="row">
						<p hidden style="display:none">Author: Trung Hoang, website:http://trunghoang.me</p>
					</div>
				</div>
			</div>
			<div class="footer-below">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							 &copy; SUNROB 2015
						</div>
					</div>
				</div>
			</div>
		</footer>

		<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
		<div class="scroll-top page-scroll visible-xs visible-sm">
			<a class="btn btn-primary" href="#page-top">
				<i class="fa fa-chevron-up"></i>
			</a>
		</div>

		<!-- jQuery -->
		<script src="js/jquery.js"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.js"></script>

		<!-- Plugin JavaScript -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="js/classie.js"></script>
		<script src="js/cbpAnimatedHeader.js"></script>

		<!-- Contact Form JavaScript -->
		<script src="js/jqBootstrapValidation.js"></script>
		<script src="js/contact_me.js"></script>

		<!-- Custom Theme JavaScript -->
		<script src="js/sunrob.js"></script>
		
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=false&libraries=places"></script><!--Google MAP API-->
		<script>
		var myLocation = new google.maps.LatLng(60.9359993, 25.6364065);

		function initialize() {

			var mapProp = {

			center:myLocation,

			zoom:15,

			mapTypeId:google.maps.MapTypeId.ROADMAP,

			scrollwheel: false,

			disableDefaultUI:true	};
			  
			 var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

			var marker = new google.maps.Marker({position:myLocation,});

			marker.setMap(map);

			var infoWindow = new google.maps.InfoWindow({

				content:"<b><font color='black' size='3'> Sunrob Oy </font></b><br><font color='black'>Tupalankatu 9<br>15680 Lahti</font>"

			})

			infoWindow.open(map,marker);

			}

		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	
</body>

</html>
