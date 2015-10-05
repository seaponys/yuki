<div id="array">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
		<article class="post-box">
			<a href="<?php the_permalink() ?>" rel="bookmark"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'grid-thumb' ); } ?></a>
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<aside class="post-meta">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_time('j F Y'); ?></a> &nbsp;/&nbsp;<?php comments_popup_link(' No comments', '1 comment', '% comments'); ?>
			</aside>
			<section class="excerpt">
				<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_excerpt(); ?></a>
			</section>
		</article>
<?php endwhile; ?>
	</div><!--#array-->
	<?php include(TEMPLATEPATH . '/partials/pagination.php'); ?>
<?php else : ?>
	<?php include(TEMPLATEPATH . '/partials/error.php'); ?>
<?php endif; ?>
