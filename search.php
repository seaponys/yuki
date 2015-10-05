<?php get_header(); ?>
<?php include(TEMPLATEPATH . '/template_header_home.php'); ?>
<div id="wrap">
	<header class="section-title">
		<h3>&mdash; Search Results for <span>&ldquo;<?php the_search_query(); ?>&rdquo;</span></h3> 
	</header>
<section id="main-loop">
	<?php get_template_part('loop'); ?>
</section><!--#main-->
<?php get_footer(); ?>
