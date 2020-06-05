<?php

require_once 'PHPMailer/PHPMailer.php';
require_once 'PHPMailer/SMTP.php';
require_once 'PHPMailer/Exception.php';

require_once 'pdo.php';

function send_message($user_mail, $msg) {
	$mail = new PHPMailer\PHPMailer\PHPMailer();
	try {
		$mail->isSMTP();
		$mail->CharSet = "UTF-8";
		$mail->SMTPAuth = true;
		$mail->Host = 'ssl://smtp.mail.ru';
		$mail->Username = 'lobruh_mailer@mail.ru';
		$mail->Password = 'stupid_lo_mail';
		$mail->SMTPSecure = 'ssl';
		$mail->Port = 465;
		$mail->setFrom('lobruh_mailer@mail.ru', 'League of BRUH');
		$mail->addAddress($user_mail);
		$mail->isHTML(true);
		$mail->Subject = "Welcome back to LoBRUH";
		$mail->Body = $msg;
		if ($mail->send()) {
			return 1;
		}
	}
	catch (Exception $e) {
		return 0;
	}
}


function send_mail($db, $email, $user_name) {
  	$last5com = get_last_5_comments($db);

  	$msg = '<b>Dear ' . $user_name . '!</b><br>Welcome back to League of BRUH. Feel free to use all useless opportunities of our platform.<br>You are proposed to take a look at last 5 comments on LoL champions pages!<br><br>';
 	foreach ($last5com as $com) {
    $msg .= '&#9675; ' . $com['author_name'] . ' - ' . $com['name'] . '<br>' . '&nbsp;&nbsp;&nbsp;' . $com['time'] . '<br>&nbsp;&nbsp;&nbsp;' . $com['text'] . '<br><br>';
  	} 
  	$msg .= '<b>Not realy yours, w84scaler</b>';
  	send_message($email, $msg);
}