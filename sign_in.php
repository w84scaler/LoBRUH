<?php

require_once 'pdo.php';
require_once 'mailer.php';

session_start();

if ($_POST['login'] == get_user_login($db,$_POST['password'])){
	$_SESSION['user_id'] = get_user_id($db,$_POST['password']);
	send_mail($db, get_user_email($db, $_SESSION['user_id']), get_user_name($db,$_SESSION['user_id']));
	header('Location: http://'.$_SERVER['HTTP_HOST'].'/index.php');
}
else
{
	header('Location: http://'.$_SERVER['HTTP_HOST'].'/sign_in_page.php');
}
