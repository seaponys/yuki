<?php get_header(); ?>
<?php include(TEMPLATEPATH . '/partials/header-inner.php'); ?>
<div id="wrap">
<section id="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="page-single">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog-image' ); } ?>
		<header>
			<h2 class="page-title serif">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
					<?php the_title(); ?>
					</a>
			</h2>
		<div class="line"></div>
		</header>
		<article class="entry">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog-image' ); } ?>
			<?php the_content('Read more on "'.the_title('', '', false).'" <span class="icon">&#9656;</span>'); ?>
		</article><!--entry-->
<?php comments_template(); ?>
	</section><!--page-single-->

<?php endwhile; else: ?>
	<?php include(TEMPLATEPATH . '/partials/error.php'); ?>
<?php endif; ?>

</section><!--#main-->
<?php get_footer(); ?>
