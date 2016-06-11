<?php
	$title = "Jose and Famous People"; 
	include_once('header.php'); 
	include_once('header_bottom.php'); 
?>


<section class="contents col-sm-8 pull-right">
<!-- Contents Starts -->

    <h1>Jose Sanchez has met many famous people over the years.</h1>
	<p>Our legal team is a great asset to our bilingual law firm. </p>
    
    <article class="col-sm-6">
    	<img src="<?= $baseurl; ?>images/people1.jpg" alt="Jose has met many famour people" class="img-responsive" /><br />
        <p class="small">Jose and Emilio Estefan (Music Producer) in Laguna Beach</p>
    </article>
    <article class="col-sm-6">
    	<img src="<?= $baseurl; ?>images/people2.jpg" alt="Jose has met many famour people" class="img-responsive" /><br />
        <p class="small">Jose and Jeff Valdez (Founder of SiTV Network) in Laguna Beach</p>
    </article>
    <div class="clearfix"></div>
    <article class="col-sm-6">
    	<img src="<?= $baseurl; ?>images/people3.jpg" alt="Jose has met many famour people" class="img-responsive" /><br />
        <p class="small">Jose and Henry Cisneros (Ex-Mayor of San Antonio) in Laguna Beach</p>
    </article>
    <article class="col-sm-6">
    	<img src="<?= $baseurl; ?>images/people4.jpg" alt="Jose has met many famour people" class="img-responsive" /><br />
        <p class="small">Jose and Emilio Estefan (Music Producer) in Laguna Beach</p>
    </article>
    <div class="clearfix"></div>
    
<!-- Contents Ends -->
</section>

<aside class="col-sm-4 pull-left">
<!-- Aside Starts -->
	<br />
	<img src="<?= $baseurl; ?>images/i-default.jpg" alt="Jose and Famous People" class="img-responsive left-img" />
	<br />
	
    <?php include_once('sidebar.php'); ?> 

<!-- Aside Ends -->
</aside>

<?php include_once('footer.php'); ?>