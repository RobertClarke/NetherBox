<?php

$page = [
	'id'		=>	'faq',
	'title'		=>	'Frequently Asked Questions',
	'seo_desc'	=>	'',
	'seo_tags'	=>	'',
	'cta_title'	=>	'Frequently Asked Questions',
	'cta_desc'	=>	'Get Your Questions Answered'
];

require_once('structure/header.php');

?>
<section class="faq">
	<article>
		<header><h3>Where are your servers located?</h3></header>
		<p>Our servers are located in Tier-1 datacenters in both Dallas, Texas and Los Angeles, California. We utilize Tier-1 datacenters to provide our customers with the uptime and redundancy they deserve.</p>
	</article>
	<article>
		<header><h3>What are the specs of your servers?</h3></header>
		<p>Each of our hand-built nodes contain E3-1231v3 CPUs with 32GB of ECC RAM, pure redundant SSD storage, and duplex 1gbit ports.</p>
	</article>
	<article>
		<header><h3>How long does it take to setup my server?</h3></header>
		<p>Your server will be deployed instantly by our automated systems after we receive payment. If you have paid and it seems your server isn't setup, contact our support and they would be happy to help out.</p>
	</article>
	<article>
		<header><h3>What control panel do you utilize?</h3></header>
		<p>We utilize the commonly-known Multicraft Control Panel. The Multicraft Panel allows you to control all aspects of your server within a matter of a few clicks.</p>
	</article>
	<article>
		<header><h3>Will you provide a subdomain for my server?</h3></header>
		<p>Yes. We will provide a free subdomain on request. Contact our support and they would be happy to assist you.</p>
	</article>
	<article>
		<header><h3>Am I able to upgrade/downgrade my server?</h3></header>
		<p>Yes. You can upgrade/downgrade your server whenever you would like from the client area. If you're having trouble, our support would be happy to assist.</p>
	</article>
	<article>
		<header><h3>Do you provide a MySQL Database?</h3></header>
		<p>We do! Once logged into the control panel, click on Advanced then MySQL Database. From there you should be able to create, delete, and manage MySQL databases.</p>
	</article>
</section>
<div class="sep"></div>
<div class="ready">
	<p>Didn't Find An Answer?</p>
	<a href="/support" class="bttn">Contact Our Team</a>
</div>
<?php require_once('structure/footer.php'); ?>
