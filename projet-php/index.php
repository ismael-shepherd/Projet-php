<?php
$title = "Notes php";


?><!DOCTYPE html>
<html class="no-js" lang="FR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $title ?? "Notes php" ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- Fonts -->
        <!-- Lato -->
        <link href='http://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- CSS -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="css/responsive.css">
    </head>

    <body id="body">

    	<div id="preloader">
    		<div class="book">
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		</div>
    	</div>

	    <!-- 
	    Header start
	    ==================== -->
	    <div class="navbar-default navbar-fixed-top" id="navigation">
	        <div class="container">
	            <!-- Brand and toggle get grouped for better mobile display -->
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a class="navbar-brand" href="#">
                        <img class="logo-1" src="" alt="PHP">
	                    <img class="logo-2" src="" alt="PHP">
	                </a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <nav class="collapse navbar-collapse" id="navbar">
	                <ul class="nav navbar-nav navbar-right" id="top-nav">
	                    <li class="current"><a href="#body">D??but</a></li>
	                    <li><a href="#about">Variable</a></li>
	                    <li><a href="#service">Test</a></li>
	                    <li><a href="#contact">Test</a></li>
	                </ul>
	            </nav><!-- /.navbar-collapse -->
	        </div><!-- /.container-fluid -->
	    </div>

	    <section id="hero-area">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-6">
	                    <div class="block">
	                        <h1 class="wow fadeInDown">PHP CODE</h1>
	                        <p class="wow fadeInDown" data-wow-delay="0.3s">Note pour retenir simplement le PHP (PHP>=7)</p>
	                        <div class="wow fadeInDown" data-wow-delay="0.3s">
	                        	<a class="btn btn-default btn-home" href="#about" role="button">Commencer</a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            </div><!-- .row close -->
	        </div><!-- .container close -->
	    </section><!-- header close -->



        <!-- 
        About start
        ==================== -->
        <section id="about" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12 wow fadeInLeft">
                    	<div class="sub-heading">
                    		<h3>Les variables PHP</h3>
                    	</div>
                        <div class="block">

                            <p>Il existe plusieurs sortes de variable : <br>
                            <img src="images/vari.png" alt="Variable PHP">
                            </p>

                            <p><mark>Les chaines de caract??res : </mark><br>
                        <img src="images/chaine.png" alt="Chaine de caract??res">
                            </p>

                            <p><mark>Les tableaux en php : </mark><br>
                        <img src="images/chaine.png" alt="Chaine de caract??res">
                            </p>
<?php
// D??clarer un tableau
$tableau = ["Bonjour", 15, true, 58,15];

//Ajouter des valeurs, A la fin (Push)
array_push($tableau, "Fin");
?>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, aspernatur.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="about-slider">
                        	<div class="init-slider">
                        		<div class="about-item">
                        			<img src="images/about/1.jpg" alt="" class="img-responsive">
                        		</div>
                        		<div class="about-item">
                        			<img src="images/about/2.jpg" alt="" class="img-responsive">
                        		</div>
                        		<div class="about-item">
                        			<img src="images/about/3.jpg" alt="" class="img-responsive">
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #about close -->
        <!-- 
        About start
        ==================== -->

        <!-- 
        Service start
        ==================== -->
        <section id="service" class="section">
            <div class="container">
                <div class="row">
                    <div class="heading wow fadeInUp">
                        <h2>Our service</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-android-desktop"></i>   
                                </span>
                            </div>
                            <div class="caption">
                                <h3>Fully Responsive</h3>
                                <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.3s">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-speedometer"></i>   
                                </span>
                            </div>
                            <div class="caption">
                            	<h3>Speed Optimized</h3>
                                <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-ios-infinite-outline"></i>   
                                </span>
                            </div>
                            <div class="caption">
                                <h3>Tons of Feature</h3>
                                <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.9s">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="ion-ios-cloud-outline"></i>   
                                </span>
                            </div>
                            <div class="caption">
                                <h3>Cloud Option</h3>
                                <p>Lorem ipsum dolor sit amet, con-sectetur adipisicing elit, sed do eiusmod tempor incididunt ut</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .container close -->
        </section><!-- #service close -->

        <section id="call-to-action" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow text-center">
                        <div class="block">
                            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter Your Email Address">
                                <button class="btn btn-default btn-submit" type="submit">Get Notified</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- #call-to-action close -->

        <!-- 
        Contact start
        ==================== -->
        

        <section clas="wow fadeInUp">
        	<div class="map-wrapper">
        	</div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <p>Copyright &copy; <a href="http://www.Themefisher.com">Themefisher</a>| All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Js -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="js/jquery.lwtCountdown-1.0.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.nav.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>
        
    </body>
</html>
