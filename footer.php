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
<!-- Start of StatCounter Code for Default Guide -->
<script type="text/javascript">
var sc_project=9137131; 
var sc_invisible=1; 
var sc_security="2f55a000"; 
var scJsHost = (("https:" == document.location.protocol) ?
"https://secure." : "http://www.");
document.write("<sc"+"ript type='text/javascript' src='" +
scJsHost+
"statcounter.com/counter/counter.js'></"+"script>");
</script>
<noscript><div class="statcounter"><a title="free web stats"
href="http://statcounter.com/free-web-stats/"
target="_blank"><img class="statcounter"
src="http://c.statcounter.com/9137131/0/2f55a000/1/"
alt="free web stats"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->
<?php wp_footer(); ?>
</body>
</html>