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
                    <img src="images/slide1.jpg" alt="Attorney Sanchez" />
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <a href="http://www.attorneysanchez.com/Jose-Sanchez.php"><img src="images/slide_2.jpg" alt="Attorney Sanchez" /></a>
                    <div class="carousel-caption">
                    </div>
                </div>
				<div class="item">
                    <a href="http://en.calameo.com/read/00052319002023971c31e"><img src="images/Banner slides_3.jpg" alt="Attorney Sanchez" /></a>
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
    	<h2>Youtube Videos</h2>		<iframe width="640" height="360" src="https://www.youtube.com/embed/videoseries?list=PLpoW6bbdEPDA8Z_n1bA2l7qTFN-noXQfw" frameborder="0" allowfullscreen></iframe>				<h2>Radio Programs</h2>				<iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/152557324&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>		
    </article>
    
<!-- Slider Ends -->
</section>

<section class="sidebar col-sm-4">
<!-- Sidebar Starts -->

	<article class="newsletter bluebox">
    	<h3>Sign up for our newsletter</h3>
        <p class="small">Please fill the fields below if you would like to stay up to date with our newsletter. </p>
        
        <form action="#">
        	<ul>
        		<li>
        			Name <span>*</span>
        			<input type="text" name="name" class="form-control" placeholder="Name" required />
        		</li>
                <li>
                	Email <span>*</span>
                    <input type="email" name="email" class="form-control" placeholder="Email" required />
                </li>
                <li>
                	<input type="submit" value="Subscribe" class="btn btn-info" />
                </li>
        	</ul>
        </form>
        
        <a href="https://twitter.com/josesanchezlaw" target="_blank" class="social-link">
        	<span class="icon square"><i class="fa fa-twitter"></i></span>
            Follow Us on Twitter
        </a>
        <a href="https://www.facebook.com/#!/pages/Jose-Sanchez-Law-Firm-PC/157425859156?v=info" target="_blank" class="social-link">
        	<span class="icon square"><i class="fa fa-facebook"></i></span>
            Like us on Facebook
        </a>
        <div class="clearfix"></div>
    </article>
    
    <article class="contact-box">
    	<h3><a href="#">How can we help you?</a></h3>
        <form action="#">
        	<ul>
        		<li>
                	Name <span>*</span>
                    <input type="text" name="name" class="form-control" placeholder="Name" required />
                </li>
        		<li>
                	Email <span>*</span>
                    <input type="email" name="email" class="form-control" placeholder="Email" required />
                </li>
        		<li>
                	Phone Number
                    <input type="text" name="phone" class="form-control" placeholder="Phone" required />
                </li>
        		<li>
                	Brief description of your legal issue 
                    <textarea name="Message" class="form-control" id="" cols="30" rows="5"></textarea>
                </li>
                <li>
                	<input type="submit" value="Send" class="btn btn-info" />
                </li>
        	</ul>
        </form>
    </article>
    
    <article class="each-social">
    	<h3>Testimonials</h3>
        
        <div class="each-post">
        	<img src="images/blogimg.png" class="border-img" alt="" />
            <p><strong>Rocio M. Ramos: After experiencing the agony of receiving an order of deportation... </strong></p>
            <a href="testimony-rocio-ramos.php" class="btn btn-info btn-grey">View Testimonial</a>
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
    
    	<h5 class="heading-bg"><a href="#">Recent Posts - Blog</a></h5>
        <div class="each-post">
        	<img src="images/blogimg.png" class="border-img" alt="" />
            <h4>Best Lawyer</h4>
            <p class="small">Detail of the blog post here. It could be of several words.</p>
            <div class="clearfix"></div>
        </div>
        <div class="each-post">
        	<img src="images/blogimg.png" class="border-img" alt="" />
            <h4>Best Lawyer</h4>
            <p class="small">Detail of the blog post here. It could be of several words.</p>
            <div class="clearfix"></div>
        </div>
        <div class="each-post">
        	<img src="images/blogimg.png" class="border-img" alt="" />
            <h4>Best Lawyer</h4>
            <p class="small">Detail of the blog post here. It could be of several words.</p>
            <div class="clearfix"></div>
        </div>
    
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