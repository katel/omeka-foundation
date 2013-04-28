	<div id="footer">
		    <?php if ( $footerText = get_theme_option('Footer Text') ): ?>
        <p><?php echo $footerText; ?></p>
        <?php endif; ?>
    <?php fire_plugin_hook('public_footer'); ?>
		<ul class="pagination">
	
		</ul>
		<div class="row">
		<ul class="link-list twelve columns">
			<li><a href="http://omeka.org" id="omeka-logo" name="omeka-logo">Powered by Omeka</a></li> <li> <a href="http://omeka.org/codex/">Documentation</a></li> <li> <a href="http://omeka.org/forums/">Support Forums</a></li>
		</ul>
	</div>
</div>
</div>
