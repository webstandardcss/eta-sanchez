<?php
	$title = "Attorney Sanchez Law Firm"; 
	include_once('header.php'); 
	include_once('banner.php'); 
	include_once('header_bottom.php'); 
?>
<style type="text/css">
.logo {
	margin-bottom: -48px;
}
.navbar {
	margin-top: 0;
	margin-bottom: 15px;
}
</style>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<section class="col-sm-8">
<!-- Slider Starts -->

	<article class="slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">        
            
                <div class="item active">
                    <img src="<?= $baseurl; ?>images/slide1.jpg" alt="Attorney Sanchez" />
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.attorneysanchez.com/Jose-Sanchez.php"><img src="<?= $baseurl; ?>images/slide_2.jpg" alt="Attorney Sanchez"  /></a>
                    <div class="carousel-caption">
                    </div>
                </div>
				<div class="item">
                    <a href="http://en.calameo.com/read/00052319002023971c31e"><img src="<?= $baseurl; ?>images/Banner slides_3.jpg" alt="Attorney Sanchez" target="_blank"/></a>
                    <div class="carousel-caption">
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
    </article>
	
    <article class="videos">
    	<h2>Videos de YouTube</h2>		
		<iframe width="100%" height="360" src="https://www.youtube.com/embed/videoseries?list=PLpoW6bbdEPDBqWYvE4lh4VVdJ13JbjfL6" frameborder="0" allowfullscreen></iframe>				
		<h2>Programas de Radio</h2>				<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/152557324&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>		
    </article>
    
<!-- Slider Ends -->
</section>

<section class="sidebar col-sm-4">
<!-- Sidebar Starts -->

	<article class="newsletter bluebox">
    	<h3>Subscribete a nuestro bolet&iacute;n de noticias </h3>
 <p class="small">Por favor, rellene los campos abajo si le gustar&iacute;a estar al d&iacute;a con nuestro bolet&iacute;n de noticias. </p>
            
        <div id="mce-responses" class="clear">
		<div class="alert alert-danger response" id="mce-error-response" style="display:none"></div>
		<div class="alert alert-success response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_95b8f671fd152cc59d6020983_ac68cf5c49" tabindex="-1" value=""></div>

<form action="//Attorneysanchez.us13.list-manage.com/subscribe/post?u=3e31527cf78a6aca1e32566b7&amp;id=5c36bd459e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        	<ul>
        		<li>
        			Nombre <span>*</span>
        			<input type="text" value="" class="form-control" placeholder="Name" required name="FNAME" id="mce-FNAME">
        		</li>
                <li>
                	Correo electr&oacute;nico  <span>*</span>
                    <input type="email" value="" placeholder="Email" name="EMAIL" class="form-control required email" id="mce-EMAIL">
                </li>
                <li>
                	<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-info">
                </li>
        	</ul>
        </form>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
        
        <a href="https://twitter.com/josesanchezlaw" target="_blank" class="social-link">
        	<span class="icon square"><i class="fa fa-twitter"></i></span>
            S&iacute;guenos en Twitter
        </a>
        <a href="https://www.facebook.com/#!/pages/Jose-Sanchez-Law-Firm-PC/157425859156?v=info" target="_blank" class="social-link">
        	<span class="icon square"><i class="fa fa-facebook"></i></span>
            Hazte Fan en Facebook
        </a>
        <div class="clearfix"></div>
    </article>
    <script type="text/javascript">
    function randomnum()
    {
	    var number1 = 5;
	    var number2 = 50;
	    var randomnum = (parseInt(number2) - parseInt(number1)) + 1;
	    var rand1 = Math.floor(Math.random()*randomnum)+parseInt(number1);
	    var rand2 = Math.floor(Math.random()*randomnum)+parseInt(number1);
	    $(".rand1").html(rand1);
	    $(".rand2").html(rand2);
    }
    	$(document).ready(function(e) {	
    		randomnum();		
			$("#contact_form").submit(function(){
				var total=parseInt($('.rand1').html())+parseInt($('.rand2').html());
				var total1=$('#cap').val();
				if(total!=total1)
				{
					alert("Wrong sum Entered");
					randomnum();
					return false;
				}
				
				$('#loader').show();
				var data = {
					"action": "test"
				};
				data = $(this).serialize() + "&" + $.param(data);
				$.ajax({
					type: "POST",
					dataType: "json",
					url: "send2.php", 
					data: data,
					success: function(data) {
						$('#loader').hide();
						$(".return").html(
							data["json"]
						);
					},
					error: function(){
						$('#loader').hide();
						$('.return').html('<div class="alert alert-warning"><strong>Something went wrong!</strong></div>');
					}
				});
				return false;
			});
        });

    </script>
    <div class="return"></div>
    <article class="contact-box">
    	<h3><a href="#">Como te podemos ayudar?</a></h3>
        <form action="#" id="contact_form">
        	<ul>
        		<li>
                	Nombre <span>*</span>
                    <input type="text" name="name" class="form-control" placeholder="Name" required />
                </li>
        		<li>
                	Correo electr&oacute;nico <span>*</span>
                    <input type="email" name="email" class="form-control" placeholder="Email" required />
                </li>
        		<li>
                	Numero de tel&eacute;fono
                    <input type="text" name="phone" class="form-control" placeholder="Phone" required />
                </li>
        		<li>
                	Una descripci&oacute;n breve de tu problema legal 
                    <textarea name="Message" class="form-control" id="" cols="30" rows="5"></textarea>
                </li>
                <li>
                	<span class="rand1"></span> +
                	<span class="rand2"></span> = <input type="text" id="cap" name="cap" class="form-control" required />
                </li>
                <li>
                	<input type="submit" value="Send" class="btn btn-info" />
                </li>
        	</ul>
        </form>
    </article>
    
    <article class="each-social">
    	<h3>Testimonios</h3>
        
        <div class="each-post">
        	<img src="<?= $baseurl; ?>images/blogimg.png" class="border-img" alt="" />
            <p><strong>Rocio: Despu&eacute;s de una larga agon&iacute;a que pas&eacute; al recibir una orden de deportaci&oacute;n... </strong></p>
            <a href="testimonio-rocio-ramos.php" class="btn btn-info btn-grey">Ver Testimonio completo</a>
            <div class="clearfix"></div>
        </div>
        
    </article>


<!-- Sidebar Ends -->
</section>

<div class="clearfix"></div>

<section class="socialmedia">
<!-- Social Media Contens Starts -->
	
	<article class="each-social col-sm-4">
    <!-- Each Social Box Starts -->
    
    	<h5 class="heading-bg"><a href="http://attorneysanchez.com/news">Articulos recientes - Blog</a></h5>

<?php
require('../news/wp-blog-header.php');
?>

<?php
$posts = get_posts('numberposts=3&order=DESC&orderby=post_title');
foreach ($posts as $post) : setup_postdata( $post ); ?>
        <div class="each-post">
                <img src="<?= $baseurl; ?>images/blogimg.png" class="border-img" alt="" />
                <small><?php the_date(); echo "<br />"; ?></small>
                <h4><?php the_title(); ?></h4>
                <p class="small"><?php the_excerpt(); ?></p>
                <div class="clearfix"></div>
        </div>
<?php
endforeach;
?>
    
    <!-- Each Social Box Ends -->
    </article>
	
	<article class="each-social col-sm-4">
    <!-- Each Social Box Starts -->
    
    	<h5 class="heading-bg"><a href="#">Facebook</a></h5>
        <div class="fb-page" data-href="https://www.facebook.com/pages/Jos&#xe9;-S&#xe1;nchez-Law-Firm-PC/157425859156" data-width="300" data-height="400" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Jos&#xe9;-S&#xe1;nchez-Law-Firm-PC/157425859156"><a href="https://www.facebook.com/pages/Jos&#xe9;-S&#xe1;nchez-Law-Firm-PC/157425859156">José Sánchez Law Firm, PC</a></blockquote></div></div>
    
    <!-- Each Social Box Ends -->
    </article>
	
	<article class="each-social col-sm-4">
    <!-- Each Social Box Starts -->
    
    	<h5 class="heading-bg"><a href="#">Twitter</a></h5>
        <a class="twitter-timeline" href="https://twitter.com/josesanchezlaw" data-widget-id="601046232526508033">Tweets by @josesanchezlaw</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    
    <!-- Each Social Box Ends -->
    </article>

<!-- Social Media Contens Ends -->
</section>

<?php include_once('footer.php'); ?>
