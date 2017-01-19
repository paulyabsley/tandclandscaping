<?php

class Mail
{
	
	private function __construct() {}

	private function __clone() {}

	/**
	 * Send email
	 * @param string $name
	 * @param string $email
	 * @param string $subject
	 * @param string $body
	 * @return boolean
	 */
	public static function send($name, $email, $subject, $body)
	{
		require dirname(dirname(__FILE__)) . '/vendor/PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer();
		$mail->isSMTP();
		// $mail->SMTPDebug = 2;
		$mail->SMTPDebug = 0;
		$mail->Debugoutput = 'html';
		$mail->Host = Config::SMTP_HOST;
		$mail->Username = Config::SMTP_USER;
		$mail->Password = Config::SMTP_PASS;
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->SMTPAuth = true;
		$mail->setFrom('tandclandscapingtaunton@gmail.com', 'tandclandscaping.co.uk');
		$mail->isHTML(true);
		$mail->addAddress($email, $name);
		$mail->Subject = $subject;
		$mail->Body = $body;
		if (!$mail->send()) {
			error_log($mail->ErrorInfo);
			return $mail->ErrorInfo;
			return false;
		} else {
			return true;
		}
	}

}