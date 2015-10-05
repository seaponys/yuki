<?php get_header(); ?>
<?php include(TEMPLATEPATH . '/partials/header_inner.php'); ?>
<div id="wrap">
<section id="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<aside class="col-first one-fifth">
		<ul class="post-meta">
				<li><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><span class="icon">&#128340;</span><?php the_time('j F Y'); ?></a></li>
				<li><?php comments_popup_link('<span class="icon">&#59160;</span> 0 comments', '<span class="icon">&#59160;</span> 1 comment', '<span class="icon">&#59160;</span> % comments'); ?></li>
				<li><span class="icon">&#57349;</span><?php the_category(', '); ?></li>
				<?php edit_post_link('<li><span class="icon">&#9998;</span>Edit this post</li>', '', ''); ?>
		</ul>
		<?php the_tags('<ul class="tags"><li>','</li><li>','</li></ul>'); ?>
	</aside>
	<div class="col-last four-fifth">
		<section class="post-single col-first two-third">
			<header>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'blog-image' ); } ?>
					<h2 class="post-title serif"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="line"></div>
			</header>
			<article class="entry">
				<?php the_content('Read more on "'.the_title('', '', false).'" <span class="icon">&#9656;</span>'); ?>
			</article><!--entry-->
			<?php comments_template(); ?>
		</section><!--post-single-->

		<nav class="post-links col-last one-third">
			<?php previous_post_link('%link','Older',FALSE); ?>
			<?php next_post_link('%link', 'Newer', FALSE); ?>
		</nav>
	</div>
<?php endwhile; else: ?>
	<?php include(TEMPLATEPATH . '/partials/error.php'); ?>
<?php endif; ?>
</section><!--#main-->
<?php get_footer(); ?>
