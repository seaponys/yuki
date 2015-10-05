<?php /* Homepage Header
*/ ?>
<header id="home">
	<div class="title col-first one-fourth">
		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
			<h1 class="header serif italic"><?php bloginfo('name'); ?></h1>
		</a>
	</div>
	<div class="col-last three-fourth">
		<div class="description col-first one-third">	
			<?php bloginfo('description'); ?>
		</div>
		<div class="one-third">	
			<div class="header-menu col-first">	
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu-A' ) ); ?>
			</div>
			<div class="header-menu col-last">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu-B' ) ); ?>
			</div>
		</div>
		<div class="col-last one-third">	
			<?php get_search_form(); ?>
		</div>
	</div>
</header><!--#header-->

