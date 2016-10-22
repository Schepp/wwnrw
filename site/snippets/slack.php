<?php
define('SUBDOMAIN','wwnrw');
define('TOKEN', file_exists(__DIR__ . '/.slack-token') ? file_get_contents(__DIR__ . '/.slack-token') : '');

function sendForm(){
	$email = $_POST['mail'];

	$slackInviteUrl='https://'.SUBDOMAIN.'.slack.com/api/users.admin.invite?t='.time();
	$fields = array(
		'email' => urlencode($email),
		'token' => TOKEN,
		'set_active' => urlencode('true'),
		'_attempts' => '1'
	);

	// url-ify the data for the POST
	$fields_string='';
	foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
	rtrim($fields_string, '&');

	// open connection
	$ch = curl_init();

	// set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $slackInviteUrl);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch,CURLOPT_SSL_VERIFYHOST, false);

	// exec
	$replyRaw = curl_exec($ch);
	$reply=json_decode($replyRaw,true);

	if($reply['ok']==false) {
		echo '<p style="color: #9d3d3d">';
		echo 'Irgendwas ist schief gegangen. Slack sagt: "' . $reply['error'] . '"';
		echo '</p>';
		showForm();
	}
	else {
		echo '<p style="color: #719E6F">';
		echo 'Dein Invite ist erfolgreich beantragt. Du solltest demnächst eine E-Mail in Deinem Posteingang finden.';
		echo '</p>';
	}

	// close connection
	curl_close($ch);
}

function showForm(){

	?>

	<form method="post" autocomplete="on" class="slack-form">
		<label>E-Mail: <input type="text" name="mail" autocomplete="email" style="width: 250px; " <?php echo isset($_POST['mail']) ? 'value="'.$_POST['mail'].'"' : ''; ?> /></label>
		<button type="submit">Anmelden</button>
	</form>

	<?php

}
?>
<article id="slack" class="slack">
	<h2>Die Webworker NRW auf Slack</h2>

	<?php
	$showform = false;
	$error = false;
	if (isset($_POST['mail'])){
		sendForm();
	} else {
		$showform = true;
	}

	if ($showform){
		if ($error){
			?>

			<p style="color: #9d3d3d">Du hast nicht alle erforderlichen Felder ausgefüllt</p>

			<?php
		}

		showForm();
	}
	?>
</article>