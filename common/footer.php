</div>
</div>
	<div id="footer">
	
		
		    <?php if ( $footerText = get_theme_option('Footer Text') ): ?>
        <p><?php echo $footerText; ?></p>
        <?php endif; ?>
    <?php fire_plugin_hook('public_footer'); ?>
		<ul class="pagination">
	
		</ul>
		<div class="row">
			<div class="footer-menu large-4 columns">
			
			<h4>About</h4>
		<ul class="link-list">
			<li><a href="http://omeka.org" id="omeka-logo" name="omeka-logo">Powered by Omeka</a></li> <li> <a href="http://omeka.org/codex/">Documentation</a></li> <li> <a href="http://omeka.org/forums/">Support Forums</a></li>
		</ul>
		</div>
		<div class="footer-menu large-4 columns">
			<h4>Menu</h4>
			<ul class="link-list"
			<?php
echo public_nav_main();
?></ul>
			</div>
			
			<div class="footer-menu large-4 columns">
		<h4>Credits </h4>
				</div>
	</div>
</div>
</div>
