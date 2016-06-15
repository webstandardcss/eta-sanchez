<?php
	$title = "Resultados"; 
	include_once('header.php'); 
	include_once('header_bottom_results.php'); 
?>

<section class="notable-header">
<!-- Notable Header Starts -->

	<h1>Resultados</h1>
	<p class="text-center">Soy el abogado Jos&eacute; S&aacute;nchez. He pasado la mayor parte de mi vida en Longview y me comprometo a ayudar a los residentes del este de Texas y peque&ntilde;os negocios a la resoluci&oacute;n sus asuntos legales. Mis prioridades como abogado son trabajar duro para mis clientes y hacer todo lo que pueda para ayudarlos a encontrar una resoluci&oacute;n positiva a sus problemas legales.</p>
	
<!-- Notable Header Ends -->
</section>

<?php include_once('result_slider.php'); ?>

<section class="notable-results">
<div class="container">
<div class="row">
<!-- Notable Results Starts -->

	<h3>M&aacute;s Resultados</h3>

	<article class="each-column">
	<!-- Each Column Starts -->				
			
		<div class="each-result">
			<p>Jos&eacute; S&aacute;nchez logra acuerdo en demanda por Accidente y Muerte en Auto. Caso por $1.6 Millones</p>
			<a href="results-jose-settles-death-car-wreck-case.php">+ More</a>
		</div>
	
		<div class="each-result">
			<p>Jos&eacute; S&aacute;nchez logr&oacute; un acuerdo en contra del Condado de Smith en el caso de la muerte de un interno por $1.25 Millones de dolares.</p>
			<a href="results-jose-settles-negligence-case.php">+ More</a>
		</div>
	
		<div class="each-result">
			<p>Jos&eacute; S&aacute;nchez alcanz&oacute; un acuerdo en un caso de Negligencia en contra de Contratistas por $1.6 Millones.</p>
			<a href="results-jose-settles-negligence-case-2.php">+ More</a>
		</div>
	
	<!-- Each Column Ends -->
	</article>

	<article class="each-column pad">
	<!-- Each Column Starts -->
	
		<div class="each-result">
			<p>Jos&eacute; S&aacute;nchez Logra un Acuerdo en el caso por Lesiones de Un pasajero en un Auto por $180,000</p>
			<a href="results-jose-settles-passenger-injury-case.php">+ More</a>
		</div>
	
		<div class="each-result">
			<p>Jos&eacute; S&aacute;nchez Establece un acuerdo en el Caso de Muerte de un Empleado por $1 Mill&oacute;n</p>
			<a href="results-jose-settles-employee-death-case.php">+ More</a>
		</div>
	
		<div class="each-result">
			<p>Jos&eacute; S&aacute;nchez llega a un acuerdo legal en el caso de una muerte en Camioneta por $350,000</p>
			<a href="results-jose-settles-truck-death-case.php">+ More</a>
		</div>
	
	<!-- Each Column Ends -->
	</article>

	<article class="each-column">
	<!-- Each Column Starts -->
	
		<div class="each-result">
			<p>1.6 Million Settlement For Victim in Car Accident</p>
			<a href="#">+ More</a>
		</div>
	
		<div class="each-result">
			<p>1 Million Settlement For Victim in Car Accident</p>
			<a href="#">+ More</a>
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
	<img src="<?= $baseurl; ?>images/i-default.jpg" alt="Practice Areas" class="img-responsive left-img" />
	<br />
	
    <?php include_once('sidebar.php'); ?> 

<!-- Aside Ends -->
</aside>

<?php include_once('footer.php'); ?>