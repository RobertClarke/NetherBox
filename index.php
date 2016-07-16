<?php

$page = [
	'id'		=>	'home',
	'title'		=>  'Instant Free Minecraft Server Hosting',
	'seo_desc'	=>	'Start your own free Minecraft server today, with NetherBox. Cheap prices, fast servers, best in class server hosting.',
	'seo_tags'	=>	'minecraft server hosting, minecraft hosting, minecraft server host, minecraft pe hosting',
	'cta_title'	=>	'',
	'cta_desc'	=>	'',

	'header_h1'		=> 'High Performance Minecraft Server Hosting',
	'header_h2'		=> 'Play with your friends on a <b>free</b> and <b>private</b> Minecraft server for 24 hours, on us.',
	'header_extra'	=> '',

	// These versions are for the "start trial" buttons in the header
	'version_pc'	=> '1.1.0',
	'version_pe'	=> '0.15.0',
];

require_once('structure/header.php');

?>
<article class="features-check">
	<div class="extend-promo">
		<div class="section">
			<div class="text">
				<p>Tweet about us (<strong>+6 FREE hours</strong>)</p>
			</div>
			<a href="#tweet" class="bttn twitter button" id="twitter_t">Tweet</a>
		</div>
		<div class="section">
			<div class="text">
				<p>Follow us on Twitter (<strong>+6 FREE hours</strong>)</p>
			</div>
			<a href="#follow" class="bttn twitter button" id="twitter_f">Follow Us</a>
		</div>
		<div class="section full" id="login">
			<div class="display-text">
				<div class="text">
					<p>Register a FREE NetherBox account (or login) (<strong>+6 FREE hours</strong>)</p>
				</div>
				<a href="#login" class="bttn twitter button" id="extend_register">Register / Login</a>
			</div>
			<div id="tab-container" class="tabs">
				<ul class="top-tabs">
					<li><a href="#register">New Customer</a></li>
					<li><a href="#login">Existing Customer</a></li>
				</ul>
				<div class="tab-container">
					<div id="register">
						<h5>Create a new NetherBox account</h5>
						<div class="form-container">
						<form id="register-instant">
						    <div class="error">Please correct any problems and submit the form again.</div>
						    <div class="input half"><input type="text" name="firstname" placeholder="First Name" /></div>
						    <div class="input half last"><input type="text" name="lastname" placeholder="Last Name" /></div>
						    <div class="input"><input type="text" name="email" placeholder="Email Address" /></div>
							<div class="sep"></div>
						    <div class="input half"><input type="password" name="password1" placeholder="Password" /></div>
						    <div class="input half last"><input type="password" name="password2" placeholder="Repeat Password" /></div>
							<div class="sep"></div>
						    <!--<div class="input half"><select name="securityqid">
						        <option value=1>What is the name of your first teacher?</option>
						        <option value=2>What&#039;s your mothers maiden name?</option>
						    </select></div>
						    <div class="input half last"><input type="text" name="securityqans" placeholder="Security Question Answer" /></div>
							<div class="sep"></div>-->
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
							<form id="login-instant">
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
		</div>
	</div>
	<header><h3>Server Features</h3></header>
	<p class="sub">Paid servers come with loads of cool features!</p>
	<ul class="feature-list">
		<li>99.9% Uptime</li>
		<li>24/7 Support</li>
		<li>Instant Setup</li>
		<li>1 Gbps Network</li>
		<li>MCPE Compatible</li>
		<li>Plugin Support</li>
		<li>Free FTP &amp; MySQL</li>
		<li>Unlimited Bandwidth</li>
		<li>SSD Drives</li>
	</ul>
</article>
<div class="sep"></div>
<article class="get-started">
	<p>Enter Minecraft name to get started!</p>
	<div class="input">
		<form action="/plans" method="GET">
			<input type="text" name="username" id="username" value="" placeholder="Steve">
			<input type="submit" value="Create My Server" id="submit">
		</form>
	</div>
</article>
<div class="sep"></div>
<article class="faq-instant">
	<header><h4>Trial Server FAQ</h4></header>
	<section class="faq">
		<article>
			<header><h3>What's the catch?</h3></header>
			<p>The server gets destroyed after 24 hours, or 1 hour of inactivity. <strong>Customers with paid servers do not get affected by this restriction.</strong></p>
		</article>
		<article>
			<header><h3>Useful Commands</h3></header>
			<p><b>restart</b> to restart the server.<br><b>op [player]</b> to OP a player so they can run commands in-game.<br><b>say [message]</b> broadcasts a message to your server.</p>
		</article>
		<article>
			<header><h3>How can I extend my servers time?</h3></header>
			<p>If you’re looking for a permanent server, check out our paid <a href="https://netherbox.com/plans?promo=instant" target="_blank">Minecraft Server Hosting</a> plans, which start at just $3.00 per month. Use promo code <b>INSTANT</b> to recieve <b>50% OFF</b> your first month!</p>
		</article>
		<article>
			<header><h3>How can I add plugins?</h3></header>
			<p>Plugins are only supported on our paid Minecraft server plans.</p>
		</article>
		<article>
			<header><h3>Server specs?</h3></header>
			<p>Each Minecraft server is hosted on the <a href="https://netherbox.com/plans?promo=instant" target="_blank">NetherBox Gravel</a> plan with 512MB RAM and 10 player slots.</p>
		</article>
	</section>
	<div class="sep"></div>
</article>
<article class="gametypes">
	<header><h3>Gametypes </h3></header>
	<p>We support these Minecraft gametypes.</p>
	<div>
		<p>Desktop Mineraft</p>
		<span class="classic"><div class="info">Classic</div></span>
		<span class="bukkit"><div class="info">Bukkit</div></span>
		<span class="spigot"><div class="info">Spigot</div></span>
	</div>
	<div>
		<p>Minecraft PE (Pocket Edition)</p>
		<span class="pocketmine half"><div class="info">PocketMine</div></span>
		<span class="genisys half"><div class="info">Genisys</div></span>
	</div>
</article>
<div class="sep"></div>
<article class="locations">
	<header><h3>Server Locations</h3></header>
	<p>Click on a location for info and test servers.</p>
	<div class="map">
		<div class="marker dallas">
			<div class="info">
				<b>Dallas, USA</b>
				<span class="test-servers"><span>Try our test servers!</span>PC: <b>dal.pc.nether.co</b><br>PE: <b>dal.pe.nether.co</b></span>
			</div>
		</div>
		<div class="marker la">
			<div class="info">
				<b>Los Angeles, USA</b>
				<span class="test-servers"><span>Try our test servers!</span>PC: <b>la.pc.nether.co</b><br>PE: <b>la.pe.nether.co</b></span>
			</div>
		</div>
		<div class="marker ashburn">
			<div class="info">
				<b>Ashburn, USA</b>
				<span class="test-servers"><span>Try our test servers!</span>PC: <b>ash.pc.nether.co</b><br>PE: <b>ash.pe.nether.co</b></span>
			</div>
		</div>
		<div class="marker amsterdam">
			<div class="info">
				<b>Amsterdam, NL</b>
				<span class="test-servers"><span>Try our test servers!</span>PC: <b>ams.pc.nether.co</b><br>PE: <b>ams.pe.nether.co</b></span>
			</div>
		</div>
	</div>
</article>
<div class="sep"></div>
<div class="features-3">
	<article>
		<i class="icn-heart"></i>
		<h4>Dedicated Team</h4>
		<p>Our dedicated team understands the need for fast and reliable service when it comes to your minecraft server hosting. We're here to provide top notch service and support, and we're always happy to answer any questions you might have.</p>
	</article>
	<article>
		<i class="icn-bubbles"></i>
		<h4>Friendly Support</h4>
		<p>If you ever have any questions or issues with any of our hosting solutions, just let us know! Our team is ready to answer and resolve any questions and issues you might have. If you're not a customer and have any questions, we'll be happy to answer them!</p>
	</article>
	<article>
		<i class="icn-stats-dots"></i>
		<h4>Always Improving</h4>
		<p>We believe there's no such thing as a "perfect" minecraft hosting company. That's why we're constantly working on improving our services and control panel to ensure that every customer is receiving the best service for the money they pay.</p>
	</article>
</div>
</div></div><div class="body server-bg"><div class="wrapper">
<h3>High Performance Servers</h3>
<h4>Enterprise Grade Hardware, High Performance Server Hosting</h4>
<div class="features">
	<article>
		<i class="icn-rocket"></i>
		<h4>Powerful Hardware</h4>
		<p>The servers we use to host Minecraft servers are configured with hand picked enterprise grade hardware to make them run as efficiently and reliably as possible.</p>
	</article>
	<article>
		<i class="icn-drive"></i>
		<h4>Solid State Drives</h4>
		<p>Every server we build are equipped with high speed solid state drives (SSDs). This allows for not only fast performing servers, but also reduces lag for players.</p>
	</article>
	<article>
		<i class="icn-cloud-upload"></i>
		<h4>Gigabit Network</h4>
		<p>Stop worrying about lag! Every server in our network is connected to a gigabit network (1gbps). Our high speed network reduces lag and lets you enjoy the game.</p>
	</article>
	<article>
		<i class="icn-earth"></i>
		<h4>Great Location</h4>
		<p>Located in secure, state-of-the-art datacenters, our servers are not only secured but also provide a great connection to you and other players.</p>
	</article>
</div>
</div></div><div class="body"><div class="wrapper">
<div class="cta">
	<h3>Our Mission</h3>
	<h5>NetherBox is run by the very finest in the Minecraft server hosting industry. We have a strong passion to develop the Minecraft community, by providing inexpensive servers with premium service. We are firm believers that good business stems from a good product, and we work tirelessly to ensure each and every level of our service leads the industry standard.</h5>
</div>
<div class="sep"></div>
<div class="cta">
	<h3 class="spaced">Our Partners</h3>
	<div class="partners small">
		<a href="http://mcpehub.com" target="_blank">
			<img src="/assets/img/partners/mcpehub.png" alt="MCPEHub" />
			<p>MCPEHub</p>
		</a>
		<a href="http://www.youtube.com/user/nexypl" target="_blank">
			<img src="/assets/img/partners/nexy.png" alt="Nexy" />
			<p>Nexy</p>
		</a>
		<a href="http://www.youtube.com/user/JackFrostMiner" target="_blank">
			<img src="/assets/img/partners/jackfrostminer.png" alt="JackFrostMiner" />
			<p>JackFrostMiner</p>
		</a>
		<a href="http://www.youtube.com/user/AceCraftGaming" target="_blank">
			<img src="/assets/img/partners/ace.png" alt="AceCraftGaming" />
			<p>AceCraftGaming</p>
		</a>
	</div>
</div>
<div class="sep"></div>
<div class="ready">
	<p>Ready To Order a Server?</p>
	<a href="/plans" class="bttn">Check Out Plans</a>
</div>
<?php require_once('structure/footer.php'); ?>
