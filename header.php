<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/bootstrap-theme.css" />
<link rel="stylesheet" href="css/main-style.css" />
<link rel="stylesheet" href="css/media.css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/npm.js"></script>
<script type="text/javascript" src="scripts/soundcloud.player.api.js"></script>
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

<title><?php echo $title; ?></title>
</head>

<body>
<div id="loader">
	<div class="loader-img">
		<img src="images/loader.gif" alt="">
	</div>
</div>
<header>
<!-- Header Starts -->
	<div class="header-bg"></div>
	<section class="header-contents container">
    <!-- Header Contents Starts -->
    
    	<article class="logo col-sm-8">
        <!-- Logo Starts -->
        	<a href="index.php"><img src="images/logo.png" alt="Attorney Sanchez" class="img-responsive" /></a>
        <!-- Logo Ends -->
        </article>
        
        <article class="phone col-sm-3">
            <a href="tel:903-758-8700">903-758-8700</a>			<a href="tel:1-866-726-2439">1-866-SANCHEZ</a>
        </article>
        <article class="language col-sm-1 col-xs-12">
            <a href="http://miabogadosanchez.com/"><center>En Espanol</center></a>
        </article>
        
        <div class="clearfix"></div>
    

