<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="http://attorneysanchez.com/css/bootstrap.css" />
<link rel="stylesheet" href="http://attorneysanchez.com/css/bootstrap-theme.css" />
<link rel="stylesheet" href="http://attorneysanchez.com/css/main-style.css" />
<link rel="stylesheet" href="http://attorneysanchez.com/css/media.css" />

<script type="text/javascript" src="http://attorneysanchez.com/js/jquery.js"></script>
<script type="text/javascript" src="http://attorneysanchez.com/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://attorneysanchez.com/js/npm.js"></script>
<script type="text/javascript" src="http://attorneysanchez.com/scripts/soundcloud.player.api.js"></script>
<script type="text/javascript">
	$(document).ready(function(e) {
		// Main Slider Attributes
		$('.carousel').carousel({
			pause: false
		});
	});
   soundcloud.addEventListener('onPlayerReady', function(player, data) {
     player.api_play();
   });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-74143423-1', 'auto');
  ga('send', 'pageview');

</script>

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<?php wp_head(); ?>
</head>

<body>
<div id="loader">
	<div class="loader-img">
		<img src="http://attorneysanchez.com/images/loader.gif" alt="">
	</div>
</div>
<header>
<!-- Header Starts -->
	<div class="header-bg"></div>
	<section class="header-contents container">
    <!-- Header Contents Starts -->
    
    	<article class="logo col-sm-8">
        <!-- Logo Starts -->
        	<a href="index.php"><img src="http://attorneysanchez.com/images/logo.png" alt="Attorney Sanchez" class="img-responsive" /></a>
        <!-- Logo Ends -->
        </article>
        
        <article class="phone col-sm-3">
            <a href="tel:903-758-8700">903-758-8700</a>			<a href="tel:1-866-726-2439">1-866-SANCHEZ</a>
        </article>
        <article class="language col-sm-1 col-xs-12">
            <a href="http://miabogadosanchez.com/"><center>En Espanol</center></a>
        </article>
        
        <div class="clearfix"></div>
    
		<nav class="navbar container">
        <!-- Nav Starts -->
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="navbar-nav">
                        <li>
                            <a href="/index.php">Home</a>
                        </li>
                        <li>
                            <a href="/contactus.php">Contact</a>
                        </li>
                        <li>
                            <a href="/Attorneys-Profiles.php">Attorney</a>
                        </li>
                        <li class="dropdown">
                            <a  href="/Practice-areas.php">Practice Areas</a>
                            <!--<ul class="dropdown-menu" role="menu">class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                        	<li><a href="PracticeAreas/Personal-Injury.php">Personal Injury Overview</a></li>
                        	<li><a href="PracticeAreas/Back-Spinal-Cord-Injuries.php">Back and Spinal Cord Injuries</a></li>
                        	<li><a href="PracticeAreas/Burn-Injuries.php">Burn Injuries</a></li>
                        	<li><a href="PracticeAreas/Car-Accidents.php">Car Accidents</a></li>
                        	<li><a href="PracticeAreas/Catastrophic-Injuries.php">Catastrophic Injuries</a></li>
                        	<li><a href="PracticeAreas/Construction-Industrial-Accidents.php">Construction/Industrial Accidents</a></li>
                        	<li><a href="PracticeAreas/Dog-Bites.php">Dog Bites</a></li>
                        	<li><a href="PracticeAreas/Drunk-Driver-Accidents.php">Drunk Driver Accidents</a></li>
                        	<li><a href="PracticeAreas/Motorcycle-Accidents.php">Motorcycle Accidents</a></li>
                        	<li><a href="PracticeAreas/Oil-Field-Accidents.php">Oil Field Accidents</a></li>
                        	<li><a href="PracticeAreas/Pedestrian-Bicycle-Accidents.php">Pedestrian Bicycle Accidents</a></li>
                        	<li><a href="PracticeAreas/Product-Liability.php">Product Liability</a></li>
                        	<li><a href="PracticeAreas/Railroad-Accidents-FELA.php">Railroad Accidents/FELA</a></li>
                        	<li><a href="PracticeAreas/Traumatic-Brain-Injuries.php">Traumatic Brain Injuries</a></li>
                        	<li><a href="PracticeAreas/Truck-Accidents.php">Truck Accidents</a></li>
                        	<li><a href="PracticeAreas/Wrongful-Death.php">Wrongful Death</a></li>
                        </ul>-->
                        </li>
                         <li>
                            <a href="/community.php">Community</a>
                        </li>
                        <li>
                            <a href="/results.php">Results</a>
                        </li>
                        <li>
                            <a href="/Jose-in-the-News.php">Jose In The News</a>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
            	$(document).ready(function(e) {
                    $(".sr").click(function() {
						$(this).addClass("clicked");
						$(this).removeClass("sr");
						$(".form-search").fadeIn();	
						return false;
					});
                    $(".clicked").click(function() {
						$(this).addClass("sr");
						$(this).removeClass("clicked");
						$(".form-search").fadeOut();
						return false;	
					});
                });
            </script>
            <!--<a href="#" class="search sr"><i class="fa fa-search"></i></a>
            <form action="#" class="form-search">
            	<input type="text" placeholder="search" name="search" class="input-search" />
            </form>-->
            
        <!-- Nav Ends -->
        </nav>
    
    <!-- Header Contents Ends -->
    </section>

<!-- Header Ends -->
</header>

<section class="main_contents container">
<div class="row">
<!-- Main Container Starts -->
