<?php
	$your_name = "";
	$your_email = "";
	$your_message = "";

	$name_error = "";
	$email_error = "";
	$message_error = "";
	$success = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if ( empty( $_POST["your_name"] ) ) {
			$name_error = "You must provide your name so I know who to reply to.";
		} else {
			$your_name = sanitize_text_field( $_POST["your_name"] );
		}

		if ( empty( $_POST["your_email"] ) ) {
			$email_error = "You must provide an email so that I can reply.";
		} else {
			 $your_email = sanitize_email( $_POST[ "your_email" ] );
		}

		if ( empty ( $_POST[ "your_message" ] ) ) {
			$message_error = "There's little point sending a message without saying anything.";
		} else {
			$your_message = sanitize_text_field( $_POST["your_message"] );
		}

		if ( $name_error == "" && $email_error == "" && $message_error == "" ) {
			$to = "query@everydaypublishing.com.au";
			$subject = "Everyday Publishing Contact Form";
			$message = $your_message;
			$from = 'From: '. $your_name .' <'. $your_email .'>';
			$headers = array('Content-Type: text/html; charset=UTF-8', $from );
			$attachments = array();

			wp_mail( $to, $subject, $message, $headers, $attachments );

			$your_name = "";
			$your_email = "";
			$your_message = "";

			$name_error = "";
			$email_error = "";
			$message_error = "";

			$success = "Thanks for writing, we'll reply as soon as we can.";
		}

	}

	get_header ();
	echo '<section>';
	if ( $name_error != "" ) echo '<blockquote class="ep-red"><small>'. $name_error .'</small></blockquote>';
	if ( $email_error != "" ) echo '<blockquote class="ep-red"><small>'. $email_error .'</small></blockquote>';
	if ( $message_error != "" ) echo '<blockquote class="ep-red"><small>'. $message_error .'</small></blockquote>';
	if ( $success != "" ) echo '<blockquote class="ep-green"><small>'. $success .'</small></blockquote>';
	echo '</section>';

	echo '
	<main>
		<form method="post" action="">
			<label for="your_name">Name:</label>
			<input type="text" name="your_name" value="'. $your_name .'">

			<label for="your_email">Email:</label>
			<input type="text" name="your_email" value="'. $your_email .'">

			<label for="your_message">Message:</label>
			<textarea name="your_message" rows="2">'. $your_message .'</textarea>

			<p class="form-submit"><input type="submit" name="submit" value="Send"></p>

		</form>
	</main>
	';

	get_footer ();
