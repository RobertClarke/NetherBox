<?php

$page = [
	'id'		=>	'legal',
	'title'		=>	'Get Support',
	'seo_desc'	=>	'',
	'seo_tags'	=>	'',
	'cta_title'	=>	'Get Support',
	'cta_desc'	=>	'Please Choose a Department Below'
];

require_once('structure/header.php');

?>
<div class="departments">
	<section>
		<h4><span>If you are <u>NOT</u> a client</span></h4>
		<article>
			<p><a href="https://billing.netherbox.com/submitticket.php?step=2&amp;deptid=1">Pre-Sales Questions</a></p>
			<a href="https://billing.netherbox.com/submitticket.php?step=2&amp;deptid=1" class="bttn">Select</a>
		</article>
	</section>
	<section>
		<h4><span>If you are an <u>EXISTING</u> client</span></h4>
		<article>
			<p><a href="https://billing.netherbox.com/submitticket.php?step=2&amp;deptid=2">General Support</a></p>
			<a href="https://billing.netherbox.com/submitticket.php?step=2&amp;deptid=2" class="bttn">Select</a>
		</article>
		<article>
			<p><a href="https://billing.netherbox.com/submitticket.php?step=2&amp;deptid=3">Billing</a></p>
			<a href="https://billing.netherbox.com/submitticket.php?step=2&amp;deptid=3" class="bttn">Select</a>
		</article>
		<article>
			<p><a href="https://billing.netherbox.com/submitticket.php?step=2&amp;deptid=4">Plugins</a></p>
			<a href="https://billing.netherbox.com/submitticket.php?step=2&amp;deptid=4" class="bttn">Select</a>
		</article>
		<article>
			<p><a href="https://billing.netherbox.com/submitticket.php?step=2&amp;deptid=5">Plugin Setup</a></p>
			<a href="https://billing.netherbox.com/submitticket.php?step=2&amp;deptid=5" class="bttn">Select</a>
		</article>
	</section>
</div>
<?php require_once('structure/footer.php'); ?>