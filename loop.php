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
	<nav class="pagination-index clearfix">
		<?php
			global $wp_query;
			$big = 99999999;
			echo paginate_links(array(
		        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
		        'format' => '?paged=%#%',
		        'total' => $wp_query->max_num_pages,
		        'current' => max(1, get_query_var('paged')),
		        'show_all' => false,
		        'end_size' => 2,
		        'mid_size' => 3,
		        'prev_next' => true,
		        'prev_text' => 'Newer entries',
		        'next_text' => 'Older entries',
		        'type' => 'list'
		    ));
		?>
	</nav>
<?php else : ?>
	<header class="section-title">
		<h3>404 &mdash; Not Found</h3> 
		<p class="oops">Sorry, but the requested resource was not found on this site.</p>
	</header>	
<?php endif; ?>