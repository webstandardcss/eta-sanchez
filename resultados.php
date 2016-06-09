<?php
	$title = "Results"; 
	include_once('header.php'); 
	include_once('header_bottom_results.php'); 
?>

<section class="notable-header">
<!-- Notable Header Starts -->

	<h1>Results</h1>
	<p class="text-center">I am attorney Jose Sanchez. I have spent most of my life in Longview, and I am committed to helping East Texas residents and small businesses resolve their legal issues. My priorities as a lawyer are to work hard for my clients and do everything I can to help them find a positive resolution to their legal problems.</p>
	
<!-- Notable Header Ends -->
</section>

<?php include_once('result_slider.php'); ?>

<section class="notable-results">
<div class="container">
<div class="row">
<!-- Notable Results Starts -->

	<h3>More results</h3>

	<article class="each-column">
	<!-- Each Column Starts -->				
		<div class="each-result">			
			<p>Rocio M. ramos recibe su permiso de trabajo y residencia.</p>			
			<a href="testimonio-rocio-ramos.php">+ M&aacute;s</a>		
		</div>
	
		<div class="each-result">
			<p>1.6 Million Settlement For Victim in Car Accident</p>
			<a href="results_details.php">+ M&aacute;s</a>
		</div>
	
		<div class="each-result">
			<p>$180, 000 Settlement For Victim in Car Accident</p>
			<a href="results_details.php">+ M&aacute;s</a>
		</div>
	
	<!-- Each Column Ends -->
	</article>

	<article class="each-column pad">
	<!-- Each Column Starts -->
	
		<div class="each-result">
			<p>$90,000 Settlement For Victim in Car Accident</p>
			<a href="#">+ M&aacute;s</a>
		</div>
	
		<div class="each-result">
			<p>$70, 000 Settlement in a Slip in Fall Accident</p>
			<a href="#">+ M&aacute;s</a>
		</div>
	
		<div class="each-result">
			<p>$60,000 Settlement For Victim in Work Accident</p>
			<a href="#">+ M&aacute;s</a>
		</div>
	
	<!-- Each Column Ends -->
	</article>

	<article class="each-column">
	<!-- Each Column Starts -->
	
		<div class="each-result">
			<p>$60,000 Settlement For Victim in Work Accident</p>
			<a href="results_details.php">+ M&aacute;s</a>
		</div>
	
		<div class="each-result">
			<p>1.6 Million Settlement For Victim in Car Accident</p>
			<a href="#">+ M&aacute;s</a>
		</div>
	
		<div class="each-result">
			<p>1 Million Settlement For Victim in Car Accident</p>
			<a href="#">+ M&aacute;s</a>
		</div>
	
	<!-- Each Column Ends -->
	</article>
	
	<div class="clearfix"></div>

<!-- Notable Results Ends -->
</div>
</div>
</section>

<section class="main_contents container">
<div class="row">
<!-- Main Container Starts -->

<section class="contents col-sm-8 hide">
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

<aside class="col-sm-4 hide">
<!-- Aside Starts -->
	<br />
	<img src="images/i-default.jpg" alt="Practice Areas" class="img-responsive left-img" />
	<br />
	
    <?php include_once('sidebar.php'); ?> 

<!-- Aside Ends -->
</aside>

<?php include_once('footer.php'); ?>