<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<?php include(TEMPLATEPATH . '/partials/header_home.php'); ?>
<div id="wrap">
<section id="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="page-single">
		<header>
			<h2 class="page-title serif"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Archives</a></h2>
		<div class="line"></div>
		</header>
		<article class="entry">
			<div class="archive-list col-first one-fourth">
					<h5>Archives by Year</h5>
					<?php wp_get_archives('type=yearly'); ?>
			</div>
			<div class="archive-list one-fourth">
					<h5>Archives by Month</h5>
					<?php wp_get_archives('type=monthly'); ?>
			</div>
			<div class="archive-list one-fourth">
					<h5>Archives by Tag</h5>
					<?php wp_tag_cloud('format=list&smallest=10px&largest=10px', 'number=0'); ?>
			</div>
			<div class="archive-list col-last one-fourth">
					<h5>Archives by Category</h5>
					<?php wp_list_categories('title_li='); ?>
			</div>
		</article><!--entry-->
		<div class="clearfix"></div>
	</section><!--pagesingle-->
	<?php endwhile; ?>
	<?php else : ?>
		<?php include(TEMPLATEPATH . '/partials/error.php'); ?>
	<?php endif; ?>
</section><!--#main-->
<?php get_footer(); ?>
