	<nav id="footer" class="clearfix">
		<div id="footer-one" class="col-first one-fifth">
			<?php dynamic_sidebar('footer-one'); ?>
		</div><!-- /footer-one -->
		<div id="footer-two" class="one-fifth">
			<?php dynamic_sidebar('footer-two'); ?>
		</div><!-- /footer-two -->
		<div id="footer-three" class="one-fifth">
			<?php dynamic_sidebar('footer-three'); ?>
		</div><!-- /footer-three -->
		<div id="footer-four" class="one-fifth">
			<?php dynamic_sidebar('footer-four'); ?>
		</div><!-- /footer-four -->
		<div id="footer-five" class="col-last one-fifth">
			<?php dynamic_sidebar('footer-five'); ?>
		</div><!-- /footer-five -->
	</nav><!--#footer-->
	<div id="credit">
		&copy;<?= date('Y'); ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>. Powered by <a href="http://wordpress.org">WordPress</a>.
	</div>
</div><!--#wrap-->
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-latest.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
