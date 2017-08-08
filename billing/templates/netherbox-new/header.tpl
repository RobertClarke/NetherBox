<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} &#x7C; {$companyname}</title>
		<meta http-equiv="content-type" content="text/html; charset={$charset}" />
		<meta name="viewport" content="width=device-width,initial-scale=1">
		{if $systemurl}<base href="{$systemurl}" />{/if}
		
		<link rel="stylesheet" href="templates/{$template}/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="templates/{$template}/css/whmcs.css" type="text/css">
		<link rel="stylesheet" href="templates/{$template}/css/flex.css" type="text/css">
		<link rel="stylesheet" href="templates/{$template}/css/flex.custom.css" type="text/css">
		<link rel="stylesheet" href="templates/{$template}/css/jquery.selectBoxIt.css" type="text/css">

		<link href="/billing/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="/billing/assets/css/font-awesome.min.css" rel="stylesheet">
		
		<!--[if lte IE 9]>
		<link href="templates/{$template}/css/flex-ie.css" rel="stylesheet" />
		<![endif]-->
		
		<link rel="stylesheet" href="templates/{$template}/css/netherbox.css" type="text/css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700,300%7COpen+Sans:700,300,600,400" type="text/css">
		<link rel="shortcut icon" href="https://netherbox.com/favicon.png">
		
		<script src="/billing/assets/js/jquery.min.js"></script>
		<script src="templates/{$template}/js/jquery-ui.min.js"></script>
		<script src="templates/{$template}/js/jquery.selectBoxIt.min.js"></script>
		<script src="templates/{$template}/js/whmcs.js"></script>
		<script src="templates/{$template}/js/bootstrap.min.js"></script>
		<script src="templates/{$template}/js/netherbox.js"></script>

		<script type="text/javascript">

$(function() {

	// ~~~ RESPONSIVE NAV ~~~
	var pull = $('.nav-new ul.responsive a');
	var menu = $('.nav-new ul.nav-new');

	$(pull).on('click', function(e) {
		e.preventDefault();
		menu.fadeToggle(200);
		pull.toggleClass('active');
	});

	$(window).resize(function(){
		var w = $(window).width();
		if(w > 540 && menu.is(':hidden')) {
			menu.removeAttr('style');
		}
	});

});

		</script>
		
		{if $livehelpjs}{$livehelpjs}{/if}
		
		{$headoutput}
		
		{literal}

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

		{/literal}

	</head>
	<body>
		
		{$headeroutput}
		<header id="head" class="solo">
			<div class="wrapper">
				<section class="top">
					<a href="https://netherbox.com"><div class="logo">NetherBox</div></a>
					<div class="nav-new">
						<ul class="responsive">
							<li><a href="#menu"><i class="icn-menu"></i></a></li>
						</ul>
						<ul class="nav-new">
							<li><a href="https://netherbox.com/plans">Plans</a></li>
							<li><a href="https://netherbox.com/dedicated">Dedicated</a></li>
							<li><a href="https://netherbox.com/partners">Partners</a></li>
							<li><a href="https://netherbox.com/faq">FAQ</a></li>
							<li><a href="https://netherbox.com/support">Support</a></li>
						</ul>
						<ul class="account">
							<li><a href="https://netherbox.com/billing/" class="active"><i class="icn-credit-card"></i> <span>Billing</span></a></li>
							<li><a href="http://mc.netherbox.com"><i class="icn-wrench"></i> <span>Control Panel</span></a></li>
						</ul>
					</div>
				</section>
			</div>
		</header>
		
		<div id="whmcswrap">

<div class="navbar whmcscontainer">

  <h2 style="display: none;">{$LANG.quicknav}</h2>
  <a class="quick-nav-btn" data-toggle="collapse" data-target=".nav-collapse"></a>
  <div class="clear"></div>
  
  <div class="nav-collapse collapse">
    <ul class="nav">
      <li><a href="{if $loggedin}clientarea{else}index{/if}.php">{$LANG.hometitle}</a></li>
    </ul>
    {if $loggedin}
    <ul class="nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{$LANG.navservices}&nbsp;<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="clientarea.php?action=products">{$LANG.clientareanavservices}</a></li>
          {if $condlinks.pmaddon}<li><a href="index.php?m=project_management">{$LANG.clientareaprojects}</a></li>{/if}
          <li><a href="cart.php">{$LANG.navservicesorder}</a></li>
          <li><a href="cart.php?gid=addons">{$LANG.clientareaviewaddons}</a></li>
        </ul>
      </li>
    </ul>
    
    {if $condlinks.domainreg || $condlinks.domaintrans}
    <ul class="nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{$LANG.navdomains}&nbsp;<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="clientarea.php?action=domains">{$LANG.clientareanavdomains}</a></li>
          <li><a href="cart.php?gid=renewals">{$LANG.navrenewdomains}</a></li>
          {if $condlinks.domainreg}<li><a href="cart.php?a=add&domain=register">{$LANG.navregisterdomain}</a></li>{/if}
          {if $condlinks.domaintrans}<li><a href="cart.php?a=add&domain=transfer">{$LANG.navtransferdomain}</a></li>{/if}
	  	  <li><a href="domainchecker.php">{$LANG.navwhoislookup}</a></li>
        </ul>
      </li>
    </ul>
    {/if}
    <ul class="nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{$LANG.navbilling}&nbsp;<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="clientarea.php?action=invoices">{$LANG.invoices}</a></li>
          <li><a href="clientarea.php?action=quotes">{$LANG.quotestitle}</a></li>
          {if $condlinks.addfunds}<li><a href="clientarea.php?action=addfunds">{$LANG.addfunds}</a></li>{/if}
          {if $condlinks.masspay}<li><a href="clientarea.php?action=masspay&all=true">{$LANG.masspaytitle}</a></li>{/if}
          {if $condlinks.updatecc}<li><a href="clientarea.php?action=creditcard">{$LANG.navmanagecc}</a></li>{/if}
        </ul>
      </li>
    </ul>
    <ul class="nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{$LANG.navsupport}&nbsp;<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="supporttickets.php">{$LANG.navtickets}</a></li>
          <li><a href="knowledgebase.php">{$LANG.knowledgebasetitle}</a></li>
          <li><a href="downloads.php">{$LANG.downloadstitle}</a></li>
          <li><a href="serverstatus.php">{$LANG.networkstatustitle}</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav">
      <li><a href="submitticket.php">{$LANG.navopenticket}</a></li>
    </ul>
    <ul class="nav">
      <li><a href="affiliates.php">{$LANG.affiliatestitle}</a></li>
    </ul>
    {else}
    <ul class="nav">
      <li><a href="announcements.php">{$LANG.announcementstitle}</a></li>
    </ul>
    <ul class="nav">
      <li><a href="knowledgebase.php">{$LANG.knowledgebasetitle}</a></li>
    </ul>
    <ul class="nav">
      <li><a href="serverstatus.php">{$LANG.networkstatustitle}</a></li>
    </ul>
    <ul class="nav">
      <li><a href="affiliates.php">{$LANG.affiliatestitle}</a></li>
    </ul>
    <ul class="nav">
      <li><a href="contact.php">{$LANG.contactus}</a></li>
    </ul>
    {/if}
    
    
    <ul class="nav right">
	    {if $loggedin}
	    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{$LANG.hello}, {$loggedinuser.firstname}!&nbsp;<b class="caret"></b></a>
	    	<ul class="dropdown-menu">
		<li><a href="clientarea.php?action=details">{$LANG.editaccountdetails}</a></li>
		{if $condlinks.updatecc}<li><a href="clientarea.php?action=creditcard">{$LANG.navmanagecc}</a></li>{/if}
		<li><a href="clientarea.php?action=contacts">{$LANG.clientareanavcontacts}</a></li>
		{if $condlinks.addfunds}<li><a href="clientarea.php?action=addfunds">{$LANG.addfunds}</a></li>{/if}
		<li><a href="clientarea.php?action=emails">{$LANG.navemailssent}</a></li>
		<li><a href="clientarea.php?action=changepw">{$LANG.clientareanavchangepw}</a></li>
		<li><a href="logout.php">{$LANG.logouttitle}</a></li>
	    	</ul>
	    </li>
	    
	    
	    {else}
	    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{$LANG.account}&nbsp;<b class="caret"></b></a>
	    	<ul class="dropdown-menu">
		    	<li><a href="clientarea.php">{$LANG.login}</a></li>
				<li><a href="register.php">{$LANG.register}</a></li>
				<li><a href="pwreset.php">{$LANG.forgotpw}</a></li>
	    	</ul>
	    </li>
	    {/if}
    </ul>
    
    <div class="clear"></div>
  </div>
  
</div>

<div id="whmcscontent">

  <div class="whmcscontainer contentpadded">
    
    {if $pagetitle eq $LANG.carttitle}<div id="whmcsorderfrm">{/if}
