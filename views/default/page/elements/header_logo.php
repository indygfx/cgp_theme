<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>


<!-- LOGO HERE? -->
<!-- eg: <img src="<?php echo $vars['url']; ?>mod/cgp_theme/graphics/logo.gif" /> -->


<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<?php echo $site_name; ?>
	</a>
</h1>






