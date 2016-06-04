<?php

$page = [
	'id'		=>	'plans',
	'title'		=>	'Plans',
	'seo_desc'	=>	'Start your own Minecraft server today, with NetherBox. Cheap prices, fast servers, best in class hosting.',
	'seo_tags'	=>	'minecraft server hosting, minecraft hosting, minecraft server host, minecraft pe hosting',
	//'cta_title'	=>	'Minecraft Plans',
	//'cta_desc'	=>	'Deploy &amp; Play In Just Minutes',

	'header_h1'		=> 'Minecraft Hosting Plans',
	'header_h2' 	=> 'Deploy &amp; Play In Minutes',
];

require_once('structure/header.php');

?>
<div id="order">
<div class="header">
	<div class="progress">
		<div class="part configure">
			<p>Configure Server</p>
			<div class="bar"><div class="complete"></div></div>
			<div class="overlay"><span><i class="icn-checkmark"></i></span></div>
		</div>
		<div class="part checkout">
			<p>Checkout</p>
			<div class="bar"><div class="complete"></div></div>
			<div class="overlay"><span><i class="icn-checkmark"></i></span></div>
		</div>
	</div>
	<div class="loginbar">Logged in as <span>Customer</span></div>
</div>
<div id="plans" class="step" data-step="0">
	<section class="helper">
		<div class="cta">
			<h3>Need Help Choosing?</h3>
			<p>Enter your Minecraft username to get started!</p>
		</div>
		<div class="input">
			<form id="helper">
				<input type="text" name="username" placeholder="Steve" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" maxlength="16" />
				<input type="submit" class="submit" value="Continue" />
			</form>
		</div>
	</section>
	<div class="plans">
		<div class="plan dirt" data-plan="dirt">
			<div class="icon"></div>
			<p class="price"><span class="orig">$2.50 Monthly</span></p>
			<p class="ram">256MB RAM</p>
			<h3>Dirt Plan</h3>
			<p>5 Players</p>
			<button class="bttn" onClick="selectPlan('dirt')">Choose Plan</button>
		</div>
		<div class="plan gravel" data-plan="gravel">
			<div class="icon"></div>
			<p class="price"><span class="orig">$5.00 Monthly</span></p>
			<p class="ram">512MB RAM</p>
			<h3>Gravel Plan</h3>
			<p>10 Players</p>
			<button class="bttn" onClick="selectPlan('gravel')">Choose Plan</button>
		</div>
		<div class="plan nether" data-plan="nether">
			<div class="icon"></div>
			<p class="price"><span class="orig">$10.00 Monthly</span></p>
			<p class="ram">1GB RAM</p>
			<h3>Netherrack Plan</h3>
			<p>20 Players</p>
			<button class="bttn" onClick="selectPlan('nether')">Choose Plan</button>
		</div>
		<div class="plan quartz" data-plan="quartz">
			<div class="icon"></div>
			<p class="price"><span class="orig">$20.00 Monthly</span></p>
			<p class="ram">2GB RAM</p>
			<h3>Quartz Plan</h3>
			<p>40 Players</p>
			<button class="bttn" onClick="selectPlan('quartz')">Choose Plan</button>
		</div>
		<div class="plan glowstone" data-plan="glowstone">
			<div class="icon"></div>
			<p class="price"><span class="orig">$30.00 Monthly</span></p>
			<p class="ram">3GB RAM</p>
			<h3>Glowstone Plan</h3>
			<p>60 Players</p>
			<button class="bttn" onClick="selectPlan('glowstone')">Choose Plan</button>
		</div>
		<div class="plan obsidian" data-plan="obsidian">
			<p class="price"><span class="orig">$40.00 Monthly</span></p>
			<div class="icon"></div>
			<p class="ram">4GB RAM</p>
			<h3>Obsidian Plan</h3>
			<p>80 Players</p>
			<button class="bttn" onClick="selectPlan('obsidian')">Choose Plan</button>
		</div>
		<div class="plan lava" data-plan="lava">
			<div class="icon"></div>
			<p class="price"><span class="orig">$60.00 Monthly</span></p>
			<p class="ram">6GB RAM</p>
			<h3>Lava Plan</h3>
			<p>150 Players</p>
			<button class="bttn" onClick="selectPlan('lava')">Choose Plan</button>
		</div>
		<div class="plan beacon" data-plan="beacon">
			<div class="icon"></div>
			<p class="price"><span class="orig">$80.00 Monthly</span></p>
			<p class="ram">8GB RAM</p>
			<h3>Beacon Plan</h3>
			<p>200 Players</p>
			<button class="bttn" onClick="selectPlan('beacon')">Choose Plan</button>
		</div>
	</div>
	<div class="features">
		<article>
			<i class="icn-power"></i>
			<h4>Instant Setup</h4>
			<p>Within just minutes of ordering, your server will be online and ready to go!</p>
		</article>
		<article>
			<i class="icn-power-cord"></i>
			<h4>Plugin Installer</h4>
			<p>Our control panel has a plugin installer, no hard work required.</p>
		</article>
		<article>
			<i class="icn-wrench"></i>
			<h4>Control Panel</h4>
			<p>Quickly and easily edit &amp; manage your servers from our control panel.</p>
		</article>
		<article>
			<i class="icn-drive"></i>
			<h4>Backup Support</h4>
			<p>Don't worry about losing your maps! Each server has easy backups.</p>
		</article>
	</div>
</div>
<div id="username" class="step" data-step="1">
	<div class="title">
		<h3 class="parent">Enter your Minecraft username</h3>
		<h4>We use this to give you operator status on the server.</h4>
	</div>
	<div class="username-input">
		<input type="text" name="username" id="usr" placeholder="Steve" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" maxlength="16" />
		<p class="username-error">Invalid username!</p>
		<div class="dontknow"><input type="checkbox" name="dontknow" value="1" id="dontknow" /> <label for="dontknow">I don't know</label></div>
	</div>
	<div class="next"><button class="bttn">Next Step</button></div><div class="back"><button class="bttn">Back</button></div>
</div>
<div id="platform" class="step" data-step="2">
	<div class="title"><h3>Choose your platform</h3></div>
	<div class="select select-2">
		<a href="#select" data-platform="desktop">
			<img src="/assets/img/order/type_classic.png" alt="Standard Minecraft" class="icon" />
			<p>Desktop</p>
		</a>
		<a href="#select" data-platform="mobile">
			<img src="/assets/img/order/type_pocket.png" alt="Minecraft Pocket Edition" class="icon" />
			<p>Pocket Edition</p>
		</a>
	</div>
	<div class="next"><button class="bttn disabled" disabled="disabled">Next Step</button></div><div class="back"><button class="bttn">Back</button></div>
</div>
<div id="gametype" class="step" data-step="3">
	<div class="title"><h3>Choose your gametype</h3></div>
	<div id="select-desktop" class="select select-3 hidden">
		<a href="#select" data-gametype="classic" class="selected">
			<img src="/assets/img/order/type_classic.png" alt="Classic Minecraft" class="icon" />
			<p>Classic Minecraft <span class="default">Default</span></p>
		</a>
		<a href="#select" data-gametype="bukkit">
			<img src="/assets/img/order/type_bukkit.png" alt="Bukkit" class="icon" />
			<p>Bukkit</p>
		</a>
		<a href="#select" data-gametype="spigot">
			<img src="/assets/img/order/type_spigot.png" alt="Spigot" class="icon" />
			<p>Spigot</p>
		</a>
	</div>
	<div id="select-mobile" class="select select-3 hidden">
		<a href="#select" data-gametype="genisys" class="selected">
			<img src="/assets/img/order/type_genisys.png" alt="Genisys" class="icon" />
			<p>Genisys <span class="default">Default</span></p>
		</a>
		<a href="#select" data-gametype="imagical">
			<img src="/assets/img/order/type_imagical.png" alt="ImagicalMine" class="icon" />
			<p>ImagicalMine</p>
		</a>
		<a href="#select" data-gametype="pocketmine">
			<img src="/assets/img/order/type_pocketmine.png" alt="PocketMine" class="icon" />
			<p>PocketMine</p>
		</a>
	</div>
	<div class="next"><button class="bttn">Next Step</button></div><div class="back"><button class="bttn">Back</button></div>
</div>
<div id="location" class="step" data-step="4">
	<div class="title">
		<h3 class="parent">Choose a server location</h3>
		<h4>Hover over a location for detailed info and test servers.</h4>
	</div>
	<div class="map">
		<div class="marker dallas green" data-location="dallas">
			<div class="info">
				<b>Dallas, USA</b>
				<span class="test-servers"><span>Try our test servers!</span>PC: <b>dal.pc.nether.co</b><br>PE: <b>dal.pe.nether.co</b></span>
			</div>
		</div>
		<div class="marker la green" data-location="la">
			<div class="info">
				<b>Los Angeles, USA</b>
				<span class="test-servers"><span>Try our test servers!</span>PC: <b>la.pc.nether.co</b><br>PE: <b>la.pe.nether.co</b></span>
			</div>
		</div>
		<div class="marker ashburn green" data-location="ashburn">
			<div class="info">
				<b>Ashburn, USA</b>
				<span class="test-servers"><span>Try our test servers!</span>PC: <b>ash.pc.nether.co</b><br>PE: <b>ash.pe.nether.co</b></span>
			</div>
		</div>
		<div class="marker amsterdam green" data-location="amsterdam">
			<div class="info">
				<b>Amsterdam, NL</b>
				<span class="test-servers"><span>Try our test servers!</span>PC: <b>ams.pc.nether.co</b><br>PE: <b>ams.pe.nether.co</b></span>
			</div>
		</div>
	</div>
	<div class="select select-4">
		<a href="#select" data-location="la" class="la"><p>Los Angeles <span class="extra">United States</span></p></a>
		<a href="#select" data-location="dallas" class="dallas" class="selected"><p>Dallas <span class="extra">United States - MOST POPULAR</span></p></a>
		<a href="#select" data-location="ashburn" class="ashburn"><p>Ashburn <span class="extra">United States</span></p></a>
		<a href="#select" data-location="amsterdam" class="amsterdam"><p>Amsterdam <span class="extra">Netherlands</span></p></a>
	</div>
	<div class="next"><button class="bttn disabled" disabled="disabled">Next Step</button></div><div class="back"><button class="bttn">Back</button></div>
</div>
<div id="players" class="step" data-step="5">
	<div class="title"><h3>How many players do you expect?</h3></div>
	<div class="select select-8">
		<a href="#select" data-players="5"><p>5</p></a>
		<a href="#select" data-players="10"><p>10</p></a>
		<a href="#select" data-players="20"><p>20</p></a>
		<a href="#select" data-players="40"><p>40</p></a>
		<a href="#select" data-players="60"><p>60</p></a>
		<a href="#select" data-players="80"><p>80</p></a>
		<a href="#select" data-players="150"><p>150</p></a>
		<a href="#select" data-players="200"><p>200</p></a>
		<a href="#select" data-players="idk" class="idk"><p>I don't know</p></a>
	</div>
	<p class="confirm count">You expect to have <b>0 to <span></span></b> players on your server.</p>
	<p class="confirm unknown">That's alright! We'll find you the perfect server.</p>
	<div class="next"><button class="bttn disabled" disabled="disabled">Next Step</button></div><div class="back"><button class="bttn">Back</button></div>
</div>
<div id="recommended" class="step" data-step="6">
	<div class="title suggested">
		<h3 class="parent">Lets pick out a plan for you!</h3>
		<h4>We recommend this plan for your server:</h4>
	</div>
	<div class="plans full suggest"></div>
	<div class="title">
		<h3 class="parent">All Available Plans</h3>
		<h4>These are the other plans available:</h4>
	</div>
	<div class="plans full">
		<div class="plan dirt" data-plan="dirt">
			<div class="icon"></div>
			<div class="info">
				<h3>Dirt</h3>
				<p>5 Players, 256MB RAM, <span class="p"><span class="price original">$2.50 Monthly</span></span></p>
			</div>
			<a href="#select" class="bttn order" data-plan="dirt">Choose Plan</a>
		</div>
		<div class="plan gravel" data-plan="gravel">
			<div class="icon"></div>
			<div class="info">
				<h3>Gravel</h3>
				<p>10 Players, 512MB RAM, <span class="p"><span class="price original">$5.00 Monthly</span></span></p>
			</div>
			<a href="#select" class="bttn order" data-plan="gravel">Choose Plan</a>
		</div>
		<div class="plan nether" data-plan="nether">
			<div class="icon"></div>
			<div class="info">
				<h3>Netherrack</h3>
				<p>20 Players, 1GB RAM, <span class="p"><span class="price original">$10.00 Monthly</span></span></p>
			</div>
			<a href="#select" class="bttn order" data-plan="nether">Choose Plan</a>
		</div>
		<div class="plan quartz" data-plan="quartz">
			<div class="icon"></div>
			<div class="info">
				<h3>Quartz</h3>
				<p>40 Players, 2GB RAM, <span class="p"><span class="price original">$20.00 Monthly</span></span></p>
			</div>
			<a href="#select" class="bttn order" data-plan="quartz">Choose Plan</a>
		</div>
		<div class="plan glowstone" data-plan="glowstone">
			<div class="icon"></div>
			<div class="info">
				<h3>Glowstone</h3>
				<p>60 Players, 3GB RAM, <span class="p"><span class="price original">$30.00 Monthly</span></span></p>
			</div>
			<a href="#select" class="bttn order" data-plan="glowstone">Choose Plan</a>
		</div>
		<div class="plan obsidian" data-plan="obsidian">
			<div class="icon"></div>
			<div class="info">
				<h3>Obsidian</h3>
				<p>80 Players, 4GB RAM, <span class="p"><span class="price original">$40.00 Monthly</span></span></p>
			</div>
			<a href="#select" class="bttn order" data-plan="obsidian">Choose Plan</a>
		</div>
		<div class="plan lava" data-plan="lava">
			<div class="icon"></div>
			<div class="info">
				<h3>Lava</h3>
				<p>150 Players, 6GB RAM, <span class="p"><span class="price original">$60.00 Monthly</span></span></p>
			</div>
			<a href="#select" class="bttn order" data-plan="lava">Choose Plan</a>
		</div>
		<div class="plan beacon" data-plan="beacon">
			<div class="icon"></div>
			<div class="info">
				<h3>Beacon</h3>
				<p>200 Players, 8GB RAM, <span class="p"><span class="price original">$80.00 Monthly</span></span></p>
			</div>
			<a href="#select" class="bttn order" data-plan="beacon">Choose Plan</a>
		</div>
	</div>
	<div class="back"><button class="bttn">Back</button></div>
</div>
<div id="config" class="step" data-step="7">
	<div class="title">
		<h3 class="parent">Unlimited Player Slots</h3>
		<h4>Do you want unlimited player slots?</h4>
	</div>
	<div id="select-unlimited" class="select select-1 optional">
		<a href="#select" data-selected="false"><p>
			Add Unlimited Slots <span class="extra">+$2.00 Per Month</span>
			<span class="details">This will remove the player limit on your server.</span>
		</p></a>
	</div>
	<div class="sep"></div>
	<div class="title">
		<h3 class="parent">Connection</h3>
		<h4>How will players connect to your server?</h4>
	</div>
	<div id="select-connect" class="select select-2">
		<a href="#select" data-connection="ip" class="selected"><p>
			IP &amp; Port <span class="extra">Free</span>
			<span class="details">Get an IP address that includes a port.<br>For example, players will type <b>192.168.1.1:25555</b> to connect.<br>Great for small servers.</span>
		</p></a>
		<a href="#select" data-connection="dedicated"><p>
			Dedicated IP <span class="extra">+$2.50 Per Month</span>
			<span class="details">Get an IP address without a port.<br>For example, players will type <b>132.354.173.1</b> to connect.<br>Great for large communities.</span>
		</p></a>
	</div>
	<div class="next"><button class="bttn">Next Step</button></div><div class="back"><button class="bttn">Back</button></div>
</div>
<div id="addons" class="step" data-step="8">
	<div class="title">
		<h3 class="parent">Extend Your Server With Addons</h3>
		<h4>These are optional for your server.</h4>
	</div>
	<div id="select-support" class="select select-1 optional">
		<a href="#select" data-selected="false"><p>
			<i class="icn-bubbles"></i>
			Premium Support <span class="extra">$5.00 Per Month</span>
			<span class="details">Our team will provide minor-plugin specific support for configuration and errors, along with map installations. This includes help with YML errors, MySQL setup, and other forms of troubleshooting.</span>
		</p></a>
	</div>
	<br>
	<div id="select-plugin" class="select select-1 optional">
		<a href="#select" data-selected="false"><p>
			<i class="icn-power-cord"></i>
			Plugin Setup <span class="extra">$20.00 One Time</span>
			<span class="details">We'll setup plugins and configure the plugins to your needs.</span>
		</p></a>
	</div>
	<div class="next"><button class="bttn">Next Step</button></div><div class="back"><button class="bttn">Back</button></div>
</div>
<div id="auth" class="step" data-step="9">
	<div class="title"><h3>Login or Create an Account</h3></div>
	<div id="tab-container" class="tabs">
		<ul class="top-tabs">
			<li><a href="#register">New Customer</a></li>
			<li><a href="#login">Existing Customer</a></li>
		</ul>
		<div class="tab-container">
			<div id="register">
				<h5>Create a new NetherBox account</h5>
				<div class="form-container">
				<form id="register">
				    <div class="error">Please correct any problems and submit the form again.</div>
				    <div class="input half"><input type="text" name="firstname" placeholder="First Name" /></div>
				    <div class="input half last"><input type="text" name="lastname" placeholder="Last Name" /></div>
				    <div class="input"><input type="text" name="email" placeholder="Email Address" /></div>
					<div class="sep"></div>
				    <div class="input half"><input type="password" name="password1" placeholder="Password" /></div>
				    <div class="input half last"><input type="password" name="password2" placeholder="Repeat Password" /></div>
					<div class="sep"></div>
				    <div class="input half"><select name="securityqid">
				        <option value=1>What is the name of your first teacher?</option>
				        <option value=2>What&#039;s your mothers maiden name?</option>
				    </select></div>
				    <div class="input half last"><input type="text" name="securityqans" placeholder="Security Question Answer" /></div>
					<div class="sep"></div>
				    <div class="input"><input type="text" name="phonenumber" placeholder="Phone Number" /></div>
				    <div class="input"><input type="text" name="address1" placeholder="Address" /></div>
				    <div class="input half"><select name="country" id="country"><option value="AF">Afghanistan</option><option value="AX">Aland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AS">American Samoa</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia</option><option value="BA">Bosnia And Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, Democratic Republic</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Cote D'Ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curacao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GU">Guam</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island & Mcdonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic Of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle Of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KR">Korea</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libyan Arab Jamahiriya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MH">Marshall Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="FM">Micronesia, Federated States Of</option><option value="MD">Moldova</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="AN">Netherlands Antilles</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="MP">Northern Mariana Islands</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PW">Palau</option><option value="PS">Palestine, State of</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="PR">Puerto Rico</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthelemy</option><option value="SH">Saint Helena</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And Sandwich Isl.</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania</option><option value="TH">Thailand</option><option value="TL">Timor-Leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="US" selected="selected">United States</option><option value="UM">United States Outlying Islands</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="VI">Virgin Islands, U.S.</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select></div>
					<div class="input half last"><input type="text" name="state" id="state" value="" placeholder="State" /></div>
					<div class="input half"><input type="text" name="city" placeholder="City" /></div>
				    <div class="input half last"><input type="text" name="postcode" placeholder="Postal Code" /></div>
				    <div class="input tos"><div class="agree"><input type="checkbox" name="accept" value="1" id="agree" /> <label for="agree"><span>I have read and agree to the <a href="https://netherbox.com/tos" target="_blank">Terms of Service</a></span></label></div></div>
					<div class="form-submit"><input type="submit" name="submit" value="Create Account" class="submit" /></div>
				</form>
				</div>
			</div>
			<div id="login">
				<h5>Log into your existing NetherBox account</h5>
				<div class="form-container">
					<form id="login">
					    <div class="error"></div>
					    <div class="input"><input type="text" name="email" placeholder="Email Address" /></div>
						<div class="input"><input type="password" name="password" placeholder="Password" /></div>
						<div class="forgot"><a href="https://netherbox.com/billing/pwreset.php" target="_blank">Forgot your password?</a></div>
						<input type="submit" name="submit" value="Login" class="submit" />
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="back"><button class="bttn">Back</button></div>
</div>
<div id="cart" class="step" data-step="10">
	<div class="title"><h3>Your Cart</h3></div>
	<div id="tab-container" class="tabs">
		<div class="tab-container">
			<div id="summary">
				<div class="details">
					<h5>Your Hosting Plan</h5>
					<table id="plan-details">
						<tbody>
							<tr id="plan-info">
								<td class="item">
									<b>Plan:</b> Minecraft <span class="platform"></span> - <span class="plan"></span><br>
									<b>RAM:</b> <span class="ram"></span><br>
									<b>Gametype:</b> <span class="gametype"></span><br>
									<b>Location:</b> <span class="location"></span><br>
								</td>
								<td class="price">$<span class="price-plan"></span> <span class="cycle">Monthly</span></td>
							</tr>
							<tr class="addon addon-slots cycled"><td class="item"><b>Addon:</b> Unlimited Slots</td><td class="price">$<span class="toggle">2.00</span> <span class="cycle">Monthly</span></td></tr>
							<tr class="addon addon-dedicated cycled"><td class="item"><b>Addon:</b> Dedicated IP</td><td class="price">$<span class="toggle">2.50</span> <span class="cycle">Monthly</span></td></tr>
							<tr class="addon addon-support"><td class="item"><b>Addon:</b> Premium Support</td><td class="price">$5.00 Monthly</td></tr>
							<tr class="addon addon-setup"><td class="item"><b>Addon:</b> Plugin Setup</td><td class="price">$20.00 One Time</td></tr>
						</tbody>
					</table>
				</div>
				<div class="details cycle-info">
					<h5>Choose Billing Cycle</h5>
					<table>
						<tbody>
							<tr><td>
								<input type="radio" name="billingcycle" id="cyclemonthly" value="monthly" checked />
								<label for="cyclemonthly">$<span class="price-monthly"></span> USD Monthly</label>
							</td></tr>
							<tr><td>
								<input type="radio" name="billingcycle" id="cycleyearly" value="yearly" />
								<label for="cycleyearly">$<span class="price-yearly"></span> USD Annually - <b class="free">Get 2 months FREE!</b></label>
							</td></tr>
						</tbody>
					</table>
				</div>
				<div class="details">
					<h5>Order Summary</h5>
					<table class="plan-summary">
						<tbody>
							<tr class="term-setup hidden">
								<td>One Time Fee</td>
								<td><b>$<span class="fee-setup">20.00</span> USD</b></td>
							</tr>
							<tr class="term-monthly">
								<td>Recurring Monthly Fee</td>
								<td><b>$<span class="fee-monthly"></span> USD</b></td>
							</tr>
							<tr class="term-yearly hidden">
								<td>Recurring Annual Fee</td>
								<td><b>$<span class="fee-yearly"></span> USD</b></td>
							</tr>
						</tbody>
					</table>
					<table class="plan-summary">
						<tbody>
							<tr class="term-subtotal">
								<td>Subtotal</td>
								<td><b>$<span class="fee-subtotal"></span> USD</b></td>
							</tr>
							<tr class="term-promo hidden">
								<td><span class="promo-percent"></span>% Promotion Discount</td>
								<td><b>-$<span class="fee-discount"></span> USD</b></td>
							</tr>
						</tbody>
					</table>
					<table class="plan-summary">
						<tbody>
							<tr class="term-due">
								<td><b>Total Due Today</b></td>
								<td><b>$<span class="fee-today"></span> USD</b></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="details coupon-input">
					<h5>Promo Code</h5>
					<p class="promo-status">test</p>
					<form id="coupon-input">
						<input type="text" name="coupon" id="coupon" />
						<input type="button" class="bttn plain" value="Apply Coupon" id="applyCoupon" />
					</form>
					<div class="coupon">
						<p></p>
						<input type="button" class="bttn plain" value="Remove Coupon" id="removeCoupon" />
					</div>
				</div>
			</div>
			<div class="next"><button class="bttn">Continue</button></div><div class="back"><button class="bttn">Back</button></div>
		</div>
	</div>
</div>
<div id="checkout" class="step" data-step="11">
	<div class="title"><h3>Checkout</h3></div>
	<div id="tab-container" class="tabs">
		<div class="tab-container">
			<div id="summary">
				<div id="order-summary">
					<div class="loginbar"></div>
					<div class="error"></div>
					<div class="details">
						<h5>Choose Payment Method</h5>
						<table>
							<tbody>
								<tr><td><input type="radio" name="paymentmethod" id="paypal" value="paypal" checked /> <label for="paypal">PayPal</label></td></tr>
								<tr><td><input type="radio" name="paymentmethod" id="cc" value="cc" disabled /> <label for="cc">Credit Card - <b style="color:red">Temporarily Unavailable</b></label></td></tr>
							</tbody>
						</table>
						<div class="payment-form" id="paypal">
							<h5>Pay With PayPal</h5>
							<p>You will be redirected to the PayPal website to pay.</p>
						</div>
						<div class="payment-form" id="cc">
							<h5>Credit Card Details</h5>
							<div class="card-wrapper"></div>
							<div class="cc-container">
								<form>
		                            <div class="cc-row">
										<div class="input"><input placeholder="Card number" type="text" name="number" class="cc-num"></div>
		                            	<div class="input"><input placeholder="Full name" type="text" name="name" class="cc-name"></div>
									</div>
									<div class="cc-row mini">
			                            <div class="input"><input placeholder="MM/YY" type="text" name="expiry" class="cc-expiry"></div>
			                            <div class="input"><input placeholder="CVC" type="text" name="cvc" class="cc-cvc"></div>
									</div>
	                			</form>
							</div>
							<div class="warning">Warning: Using a credit or debit card without permission from the card holder is a federal offense and is punishable by law.</div>
						</div>
					</div>
					<div class="details">
						<h5>Payment Summary</h5>
						<table class="plan-summary">
							<tbody>
								<tr class="term-monthly">
									<td>Recurring Monthly Fee</td>
									<td><b>$<span class="fee-monthly"></span> USD</b></td>
								</tr>
								<tr class="term-yearly hidden">
									<td>Recurring Annual Fee</td>
									<td><b>$<span class="fee-yearly"></span> USD</b></td>
								</tr>
							</tbody>
						</table>
						<table class="plan-summary">
							<tbody>
								<tr class="term-due">
									<td>Total Due Today</td>
									<td><b>$<span class="fee-total"></span> USD</b></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="next"><button class="bttn checkout">Checkout</button></div><div class="back"><button class="bttn">Back</button></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="paypalredirect" class="step">
	<div class="title">
		<h3 class="parent">Pay With PayPal</h3>
	</div>
	<div class="payment-form solo">
		<h5>Use the button below to pay for your order with PayPal</h5>
		<div id="paypal-buttons"></div>
	</div>
</div>
<div id="fraud" class="step">
	<div class="icon-fail"></div>
	<p>Your order has been detected as fraud by our billing system. No charges have been made.</p>
	<p>Please <a href="https://netherbox.com/support" target="_blank">contact our support department</a> to resolve this if you believe this is an error.</p>
</div>
<div id="success" class="step">
	<div class="icon-success"></div>
	<p>Thank you, your order <b>#<span id="order-id"></span></b> has been completed!</p>
	<p>Your Minecraft server has been setup and you will be emailed your login information.</p>
</div>
</div>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<?php require_once('structure/footer.php'); ?>
