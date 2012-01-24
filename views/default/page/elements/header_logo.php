<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>

<!-- Anfang Identity-wrapper -->
<div id="headerIdentityWrapper">
		
	<!-- Anfang Header -->
	<div id="baseHeader">
		<a name="seitenanfang" id="seitenanfang" accesskey="O"></a>

		<a href="https://www.fu-berlin.de" accesskey="H" title="To the Homepage of the Freie Universit&auml;t Berlin">
			<img src="https://www2.oei.fu-berlin.de/global-politics/cgp_alumni/html/_graphics/fu_logo.gif" class="baseHeaderLogo" width="225" title="To the Homepage of the Freie Universit&auml;t Berlin" height="63" alt="The Logo and Seal of the Freie Universit&auml;t Berlin" />
		</a>
		
		<h2 class="info">
			Center for Global Politics
		</h2>

		<hr class="divider" />

		<p class="skip">

			<em>
				Jump directly to:
			</em>
			<a href="#inhalt">
				Contents
			</a>		
		</p>

		<hr class="divider" />

		<h2 class="info">

			Service Navigation 
		</h2>

		<div id="baseHeaderNavigation">
			<ul>
			<li style="border-left:1px solid #666666;">
								<a href="<?php echo $site_url; ?>" title="">
									Alumni Homepage
								</a>
				</li>

				<li>
								<a href="http://www.global-politics.org/index.html" title="Webpage of the Center for Global Politics">
									Center for Global Politics
								</a>
				</li>
					<li>
								<a href="http://www.global-politics.org/staff/index.html" title="Our Team">
									Staff
								</a>
					</li>

					<li>
								<a href="http://www.global-politics.org/jobs/index.html" title="Job Announcements">
									Jobs
								</a>
					</li>
					<li>
								<a href="http://www.global-politics.org/press/index.html" title="Public relations">
									Press
								</a>
					</li>

					<li>
									<a href="http://www.global-politics.org/contact/index.html" accesskey="9" title="Contact Information (Address, Telephone, Email, ...)">
										Contact
									</a>
					</li>
					<li>
									<a href="http://www.global-politics.org/impressum/index.html" accesskey="1" title="Inprint">
										Legal Notice
									</a>
					</li>

		</ul>
		</div>
	</div>
	<hr class="divider" />
	<!-- Ende Header -->
						
</div><!-- /headerIdentityWrapper -->





