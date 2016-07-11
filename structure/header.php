<?php

// Set default variables.
$p = [
	'id'		=> !empty($page['id']) ? $page['id']				: '',
	'title'		=> !empty($page['title']) ? $page['title']			: 'Minecraft Server Hosting',
	'seo_desc'	=> !empty($page['seo_desc']) ? $page['seo_desc']	: 'Start your own Minecraft server today, with NetherBox. Cheap prices, fast servers, best in class hosting.',
	'seo_tags'	=> !empty($page['seo_tags']) ? $page['seo_tags']	: 'minecraft server hosting, minecraft hosting, minecraft server host, minecraft pe hosting',
	'cta_title'	=> !empty($page['cta_title']) ? $page['cta_title']	: '',
	'cta_desc'	=> !empty($page['cta_desc']) ? $page['cta_desc']	: '',

	'header_h1'		=> !empty($page['header_h1']) ? $page['header_h1']	: '',
	'header_h2'		=> !empty($page['header_h2']) ? $page['header_h2']	: '',
	'header_extra'	=> !empty($page['header_extra']) ? $page['header_extra']	: '',
];

$p_cur = basename($_SERVER['PHP_SELF'], '.php');

?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php if ( !empty($p['title']) ) echo $p['title'].' | '; ?>NetherBox</title>
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" href="./assets/css/main.css" type="text/css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700,300%7COpen+Sans:700,300,600,400" type="text/css">
		<link rel="shortcut icon" href="favicon.png">
		<meta name="description" content="<?php echo $p['seo_desc']; ?>">
		<meta name="keywords" content="<?php echo $p['seo_tags']; ?>">
		<script>
		  !function(g,s,q,r,d){r=g[r]=g[r]||function(){(r.q=r.q||[]).push(
		  arguments)};d=s.createElement(q);q=s.getElementsByTagName(q)[0];
		  d.src='//d1l6p2sc9645hc.cloudfront.net/tracker.js';q.parentNode.
		  insertBefore(d,q)}(window,document,'script','_gs');

		  _gs('GSN-571803-S');
		</script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-8521263-41', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>
	<body<?php if ( !empty($p['id']) ) echo ' id="'.$p['id'].'"'; ?>>
		<?php
			if ( !isset($_GET['promo']) && empty($_GET['promo']) )
				include('offer_inline.php');
		?>
		<header id="head"<?php if ( empty($p['header_h1']) ) echo ' class="solo"'; elseif ( $p_cur == 'index' || $p_cur == 'instant' ) echo ' class="extended"'; ?>>
			<div class="wrapper">
				<section class="top">
					<a href="/"><div class="logo">NetherBox</div></a>
					<nav>
						<ul class="responsive">
							<li><a href="#menu"><i class="icn-menu"></i></a></li>
						</ul>
						<ul class="nav">
							<li><a href="/plans<?php if ( $p_cur == 'instant' ) { ?>?promo=instant<?php } ?>"<?php if ( $p_cur == 'plans' ) echo ' class="active"'; ?>>Plans</a></li>
							<li><a href="/dedicated"<?php if ( $p_cur == 'dedicated' ) echo ' class="active"'; ?>>Dedicated</a></li>
							<li><a href="/partners"<?php if ( $p_cur == 'partners' ) echo ' class="active"'; ?>>Partners</a></li>
							<li><a href="/faq"<?php if ( $p_cur == 'faq' ) echo ' class="active"'; ?>>FAQ</a></li>
							<li><a href="/support"<?php if ( $p_cur == 'support' ) echo ' class="active"'; ?>>Support</a></li>
						</ul>
						<ul class="account">
							<li class="social"><a href="http://twitter.com/NetherBox" target="_blank"><i class="icn-twitter"></i></a></li>
							<li class="social"><a href="http://facebook.com/NetherBox" target="_blank"><i class="icn-facebook"></i></a></li>
							<li><a href="https://netherbox.com/billing/"><i class="icn-credit-card"></i> <span>Billing</span></a></li>
							<li><a href="http://mc.netherbox.com"><i class="icn-wrench"></i> <span>Control Panel</span></a></li>
						</ul>
					</nav>
				</section>
<?php if ( $p_cur == 'index' ) { ?>
				<section class="page-title home">
					<div class="title">
						<h1><?php echo $p['header_h1']; ?></h1>
						<?php if ( !empty($p['header_h2']) ) echo '<h2>'.$p['header_h2'].'</h2>'; ?>
						<?php if ( !empty($p['header_extra']) ) echo $p['header_extra']; ?>
<?php if ( $p_cur == 'index' ) { // Instant only code ?>
						<div class="wait">Please wait...</div>
						<div class="loader"></div>
						<div class="the-box" id="the-box">
							<div class="ip"></div>
							<div class="port"></div>
							<div class="timer">
								<span class="timer-inner"></span>
							</div>
							<div class="items">
								<span class="item cmd">Send Command</span>
								<span class="item delete">Delete Server</span>
								<a href="/plans?promo=instant" target="_blank" class="item extend">Upgrade &amp; Extend Server</a>
							</div>
							<div class="cmds">
								<form>
									<input type="text" placeholder="Type a command and hit enter!" />
								</form>
							</div>
						</div>
						<div class="the-error" id="the-error"></div>
<?php } ?>
					</div>
				</section>
<?php } else if ( !empty($p['header_h1']) ) { ?>
				<section class="page-title">
					<div class="title">
						<h1><?php echo $p['header_h1']; ?></h1>
						<?php if ( !empty($p['header_h2']) ) echo '<h2>'.$p['header_h2'].'</h2>'; ?>
					</div>
				</section><?php } ?>
			</div>
		</header>
<?php if ( !empty($p['cta_title']) && !empty($p['cta_desc']) ) { ?>
		<div class="body alt page-title">
			<div class="wrapper">
				<h1><?php echo $p['cta_title']; ?></h1>
				<h2><?php echo $p['cta_desc']; ?></h2>
			</div>
		</div><?php } ?>
		<div class="body<?php if ( $p_cur == '404' ) echo ' page-title'; ?>">
			<div class="wrapper">
