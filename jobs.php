<?php

// Config
$captcha_public_key	= '6LcIPhwTAAAAAPKZBpnwZJk5nW0CtaB3Q_dJ1RB9';
$captcha_secret_key	= '6LcIPhwTAAAAADzE9-MCdbh5pbpbTqtcgNWWU7jI';

$sender_email		= 'jobs@netherbox.com';
$reciever_email		= 'shiv@cubemotion.com';

// Form submitted
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

	$form_inputs = ['firstname', 'lastname', 'email', 'phone', 'hear', 'why', 'info'];
	$inputs = [];

	// Max length verification on inputs
	$strip = ['firstname' => 50, 'lastname' => 50, 'email' => 100, 'phone' => 20];

	// Grab input values
	foreach ( $form_inputs as $i ) {

		if ( array_key_exists($i, $strip) )
			$inputs[$i] = substr(filter_input(INPUT_POST, $i), 0, $strip[$i]);
		else
			$inputs[$i] = filter_input(INPUT_POST, $i);

	}

	$errors = [];

	if ( empty($inputs['firstname']) )
		$errors[] = 'Your first name was missing.';
	if ( empty($inputs['lastname']) )
		$errors[] = 'Your last name was missing.';

	if ( empty($inputs['email']) )
		$errors[] = 'Your email was missing.';
	else if ( filter_var($inputs['email'], FILTER_VALIDATE_EMAIL) == false )
		$errors[] = 'Please enter a valid email.';

	if ( empty($inputs['phone']) )
		$errors[] = 'Your phone number was missing.';

	// Question input validation
	$question_inputs = ['hear', 'why', 'info'];
	$questions = [
		'hear' => 'How did you hear about NetherBox?',
		'why' => 'Why do you think you\'d be a good NetherBox team asset?',
		'info' => 'Add a cover letter or anything else you want here.',
	];

	foreach ( $question_inputs as $q ) {

		if ( empty($inputs[$q]) )
			$errors[] = 'Please answer "'.$questions[$q].'"';
		else if ( strlen($inputs[$q]) > 500 )
			$errors[] = '"'.$questions[$q].'" must be under 500 characters.';

	}

	$maxsize = 5242880; // 5MB

	if (empty($_FILES['cv']['name']))
		$errors[] = 'Please upload a resume / CV file.';
	else if ( $_FILES['cv']['type'] !== 'application/pdf')
		$errors[] = 'Resume / CV must be a PDF file.';
	else if (($_FILES['cv']['size'] >= $maxsize) || ($_FILES['cv']['size'] == 0))
	    $errors[] = 'Resume / CV file too large. File must be less than 5MB.';

	// Check reCAPTCHA
	require('src/autoload.php');
	$recaptcha = new \ReCaptcha\ReCaptcha($captcha_secret_key);

	$resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
	if (!$resp->isSuccess())
	    $errors[] = 'Please complete the reCAPTCHA.';

	if ( empty($errors) ) {

		require_once 'src/Mandrill.php';

		try {

		$mandrill = new Mandrill('iDcgCC0GtJZpoTS49edczg');

		$html = '
<!DOCTYPE html>
<html style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
<head>
<meta name="viewport" content="width=device-width">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Job Application</title>
</head>
<body bgcolor="#f6f6f6" style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; -webkit-font-smoothing: antialiased; height: 100%; -webkit-text-size-adjust: none; width: 100% !important; margin: 0; padding: 0;">
<table class="body-wrap" bgcolor="#f6f6f6" style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 20px;"><tr style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
<td style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>
    <td class="container" bgcolor="#FFFFFF" style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; clear: both !important; display: block !important; max-width: 800px !important; Margin: 0 auto; padding: 20px; border: 1px solid #f0f0f0;">
      <div class="content" style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; display: block; max-width: 800px; margin: 0 auto; padding: 0;">
      <table style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; width: 100%; margin: 0; padding: 0;"><tr style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
<td style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;">
            <h1 style="font-family: \'Helvetica Neue\', Helvetica, Arial, \'Lucida Grande\', sans-serif; font-size: 36px; line-height: 1.2em; color: #111111; font-weight: 200; margin: 0 0 15px 0; padding: 0;">Job Application</h1>
            <p style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 20px 0; padding: 0;">This is an automatic email generated by the application form on the jobs page.</p>
			<p style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;"><b>Position</b><br>'.filter_input(INPUT_POST, 'job_name').'</p>
			<p style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;"><b>First Name</b><br>'.$inputs['firstname'].'</p>
			<p style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;"><b>Last Name</b><br>'.$inputs['lastname'].'</p>
			<p style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;"><b>Email</b><br>'.$inputs['email'].'</p>
			<p style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;"><b>Phone</b><br>'.$inputs['phone'].'</p>
			<p style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;"><b>Resume/CV</b><br>Attached to this email</p>
			<p style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;"><b>How did you hear about NetherBox?</b><br>'.nl2br($inputs['hear']).'</p>
			<p style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;"><b>Why do you think you\'d be a good NetherBox team asset?</b><br>'.nl2br($inputs['why']).'</p>
			<p style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 0 0 10px; padding: 0;"><b>Add a cover letter or anything else you want here.</b><br>'.nl2br($inputs['info']).'</p>
            <p style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 1.6em; font-weight: normal; margin: 30px 0 0 0; padding: 0;">Job application submitted from <b>'.$_SERVER['REMOTE_ADDR'].'</b></p>
          </td>
        </tr></table>
</div>
    </td>
    <td style="font-family: \'Helvetica Neue\', \'Helvetica\', Helvetica, Arial, sans-serif; font-size: 100%; line-height: 1.6em; margin: 0; padding: 0;"></td>
  </tr></table>
</body>
</html>';

		$message = [
			'html'			=> $html,
			'subject'		=> 'Job Application: '. filter_input(INPUT_POST, 'job_name'),
			'from_email'	=> $sender_email,
			'from_name'		=> 'NetherBox Jobs',
			'to'			=> [
				['email' => $reciever_email, 'type' => 'to', 'name' => 'NetherBox']
			],
			'headers'		=> ['Reply-To' => $inputs['email']],
			'important'		=> true,
			'attachments' => array(
	            array(
	                'type' => 'application/pdf',
	                'name' => $inputs['firstname'].'-'.$inputs['lastname'].'-cv.pdf',
	                'content' => base64_encode(file_get_contents($_FILES['cv']['tmp_name']))
	            )
	        ),
		];

		$result = $mandrill->messages->send($message);

		$success = true;
		$errors[] = 'Thanks for submitting your application! Our team will review your application and get back to you soon. Good luck!';

	} catch(Mandrill_Error $e) {
		$errors[] = 'There was a problem sending your application to our staff. Please try sending your application in a few minutes. If you\'re unable to send your application through this form please <a href="https://netherbox.com/support">contact our team</a>.';
	}

	}

}

$page = [
	'id'		=>	'jobs',
	'title'		=>	'Jobs',
	'seo_desc'	=>	'',
	'seo_tags'	=>	'',
	'cta_title'	=>	'Work With Us',
	'cta_desc'	=>	'Join our team of dedicated professionals'
];

require_once('structure/header.php');

?>
<div class="departments">
	<section>
		<h4><span>Open Positions</span></h4>
		<article data-position="Minecraft Support Specialist">
			<p><a href="#details" class="toggle">Minecraft Support Specialist</a><!--<a href="#details" class="bttn toggle">View Details</a>--></p>
			<div class="details" style="display:block;">
				<p>Part-Time - From Home</p>
				<p>NetherBox is looking for an experienced Minecraft Support Specialist to work alongside our team and appropriately handle hundreds of tickets submitted by clients per month.</p>
				<h5>Responsibilities &amp; Requirements</h5>
				<ul>
					<li>Must be 18 years old (no exceptions.)</li>
					<li>Helpful, nice, and kind attitude &amp; personality.</li>
					<li>Strong understanding and familiarity with English.</li>
					<li>Help provide support in an increasingly paced environment where hundreds of tickets are submitted per month.</li>
					<li>Work alongside your co-workers and management team to provide quick and efficient support.</li>
					<li>Provide detailed status updates to management/co-workers when and if needed.</li>
					<li>Be able to easily adapt in an permanently-changing industry.</li>
					<li>Able to easily communicate via Slack and/or Skype.</li>
				</ul>
				<h5>Brownie Points (Helpful Attributes)</h5>
				<ul class="nobottom">
					<li>Previous experience in utilizing Multicraft.</li>
					<li>Previous experience with administration utilizing WHMCS.</li>
					<li>Previous experience and knowledge with Slack integrations and Trello boards.</li>
					<li>Previous experience with Minecraft hosting support.</li>
				</ul>
				<div class="apply">
					<div class="applyText"<?php if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) echo ' style="display: none"'; ?>>
						<p>Think you're the right fit?</p>
						<a href="#apply" class="bttn showForm">Apply For This Position</a>
					</div>
					<form action="" enctype="multipart/form-data" method="POST"<?php if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) echo ' style="display: block"'; ?>>
						<input type="hidden" name="job_name" value="Minecraft Support Specialist">
						<h3>Submit Your Application</h3>
						<?php
							$good = (isset($success)) ? ' good' : '';

							if (!empty($errors) ) {

								echo '<div class="error'. $good .'">';

								if ( empty($good) ) echo '<p>Please correct the following problems in your application</p>';

								echo '<ul>';
								foreach ( $errors as $e ) echo '<li>'.$e.'</li>';
								echo '</ul></div>';

							}
						?>
<?php if (empty($good)) { ?>
						<ul>
							<li>
								<label for="firstname">First Name</label>
								<div class="input"><input type="text" name="firstname" id="firstname" placeholder="John" maxlength="50" value="<?php echo ( !empty($inputs['firstname']) ) ? $inputs['firstname'] : '' ?>"></div>
							</li>
							<li>
								<label for="lastname">Last Name</label>
								<div class="input"><input type="text" name="lastname" id="lastname" placeholder="Doe" maxlength="50" value="<?php echo ( !empty($inputs['lastname']) ) ? $inputs['lastname'] : '' ?>"></div>
							</li>
							<li>
								<label for="email">Email</label>
								<div class="input"><input type="text" name="email" id="email" placeholder="johndoe@gmail.com" maxlength="100" value="<?php echo ( !empty($inputs['email']) ) ? $inputs['email'] : '' ?>"></div>
							</li>
							<li>
								<label for="phone">Phone</label>
								<div class="input"><input type="text" name="phone" id="phone" placeholder="111-111-1111" maxlength="20" value="<?php echo ( !empty($inputs['phone']) ) ? $inputs['phone'] : '' ?>"></div>
							</li>
							<li>
								<label for="cv">Resume/CV</label>
								<div class="input"><input type="file" name="cv" id="cv" class="file"><span>Please submit a file in PDF format.</span></div>
							</li>
							<li class="full">
								<div class="input"><textarea id="hear" name="hear" placeholder="How did you hear about NetherBox?"><?php echo ( !empty($inputs['hear']) ) ? $inputs['hear'] : '' ?></textarea></div>
							</li>
							<li class="full">
								<div class="input"><textarea id="why" name="why" placeholder="Why do you think you’d be a good NetherBox team asset?"><?php echo ( !empty($inputs['why']) ) ? $inputs['why'] : '' ?></textarea></div>
							</li>
							<li class="full">
								<div class="input"><textarea id="info" name="info" placeholder="Add a cover letter or anything else you want here."><?php echo ( !empty($inputs['info']) ) ? $inputs['info'] : '' ?></textarea></div>
							</li>
						</ul>
						<script src="https://www.google.com/recaptcha/api.js" async defer></script>
						<div class="captcha"><div class="g-recaptcha" data-sitekey="<?php echo $captcha_public_key; ?>"></div></div>
						<div class="submit">
							<input type="submit" value="Submit Application">
						</div>
<?php } ?>
					</form>
				</div>
			</div>
		</article>
	</section>
</div>
<?php require_once('structure/footer.php'); ?>
