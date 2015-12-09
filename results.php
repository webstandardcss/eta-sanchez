<?php
	$title = "Notable Results"; 
	include_once('header.php'); 
	include_once('header_bottom_results.php'); 
?>



<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider1.jpg" alt="Chania">
	  <div class="slider-contents">
		NOTABLE RESULTS
		<h2>It Weighs Less Than A Nickel</h2>
		<a href="#">+ More</a>
	  </div>
    </div>

    <div class="item">
      <img src="images/slider2.jpg" alt="Chania">
	  <div class="slider-contents">
		NOTABLE RESULTS
		<h2>It Weighs Less Than A Nickel</h2>
		<a href="#">+ More</a>
	  </div>
    </div>

    <div class="item">
      <img src="images/slider3.jpg" alt="Flower">
	  <div class="slider-contents">
		NOTABLE RESULTS
		<h2>It Weighs Less Than A Nickel</h2>
		<a href="#">+ More</a>
	  </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="main_contents container">
<div class="row">
<!-- Main Container Starts -->

<section class="contents col-sm-8">
<!-- Contents Starts -->

    <h1><?php echo $title ?></h1>
    <h4><a href="#"><?php echo $title ?></a></h4>
   <?php if(0) { /* start comment html
    <h4><a href="Civil-Litigation.php">Civil Litigation</a></h4>
    <p>Civil LitigationProtecting Your Interests When you do not speak English, you can feel like a target for companies or people to take advantage of. Whether you are facing a contract dispute or a denial of an insurance claim, you need an experienced
      <a href="Civil-Litigation.php">
        <strong>...</strong>
      </a>
    </p>
    /* end comment html */ } ?>

<!-- Contents Ends -->
</section>

<aside class="col-sm-4">
<!-- Aside Starts -->
	<br />
	<img src="images/i-default.jpg" alt="Practice Areas" class="img-responsive left-img" />
	<br />
	
    <?php include_once('sidebar.php'); ?> 

<!-- Aside Ends -->
</aside>

<?php include_once('footer.php'); ?>