<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();


?>


<style>

.elgg-page-header  {
    height: 			800px;
    margin: 			0 auto 0 auto;;
    width: 				100%;
	border:				1px dashed blue
	background-image: 	url('<?php echo elgg_get_site_url(garphics/top_background.png); ?>mod/cgp_theme/graphics/top_background.png');
	background-repeat:	repeat-x;
	background-color:	#fff;
}

.elgg-inner {
	border:				1px solid black;
	width:100%;
}
</style>


<!-- <h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<?php echo $site_name; ?>
	</a>
</h1>
 -->



	<a name="seitenanfang" id="seitenanfang" accesskey="O"></a>

	<a href="https://www.fu-berlin.de" accesskey="H" title="To the Homepage of the Freie Universit&auml;t Berlin">
			<img src="https://www2.oei.fu-berlin.de/global-politics/cgp_alumni/html/_graphics/fu_logo.gif" class="baseHeaderLogo" width="225" title="To the Homepage of the Freie Universit&auml;t Berlin" height="63" alt="The Logo and Seal of the Freie Universit&auml;t Berlin" />
	</a>
		
		<h2 class="info">
			<?php echo $site_name; ?>
		</h2>

		<div id="baseHeaderNavigation">
			<ul>
			<li style="border-left:1px solid #666666;">
								<a href="https://www2.oei.fu-berlin.de/global-politics/cgp_alumni/html" title="">
									Alumni Homepage
								</a>
				</li>

				<li>
								<a href="http://www.global-politics.org/index.html" title="">
									Center for Global Politics
								</a>
				</li>
					<li>
								<a href="http://www.global-politics.org/staff/index.html" title="">
									Staff
								</a>
					</li>

					<li>
								<a href="http://www.global-politics.org/jobs/index.html" title="Job Announcements">
									Jobs
								</a>
					</li>
					<li>
								<a href="http://www.global-politics.org/press/index.html" title="">
									Press
								</a>
					</li>

					<li>
									<a href="http://www.global-politics.org/contact/index.html" accesskey="9" title="Contact Information (Address, Telephone, Email, ...)">
										Contact
									</a>
					</li>
					<li>
									<a href="http://www.global-politics.org/impressum/index.html" accesskey="1" title="">
										Legal Notice
									</a>
					</li>

		</ul>
	</div>
<br clear="all" />
<!-- Ende Header -->
