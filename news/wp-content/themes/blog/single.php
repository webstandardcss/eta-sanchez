<?php get_header(); ?>  


<section class="contents col-sm-8">
<!-- Contents Starts -->	<?php while ( have_posts() ) : the_post(); ?>		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>		<?php the_content(); ?>	<?php endwhile; ?>  
<!-- Contents Ends -->
</section>

<aside class="col-sm-4">
<!-- Aside Starts -->
	<br />
	<img src="http://attorneysanchez.com/images/i-default.jpg" alt="Practice Areas" class="img-responsive left-img" />
	<br />
	
    <?php get_sidebar(); ?> 

<!-- Aside Ends -->
</aside>
<?php get_footer(); ?>