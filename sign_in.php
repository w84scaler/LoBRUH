<?php

require_once 'pdo.php';

session_start();

var_dump($_POST['login']);
var_dump($_POST['password']);

if ($_POST['login'] == get_user_login($db,$_POST['password'])){
	$_SESSION['user_id'] = get_user_id($db,$_POST['password']);
	header('Location: http://'.$_SERVER['HTTP_HOST'].'/index.php');
}
else
{
	header('Location: http://'.$_SERVER['HTTP_HOST'].'/sign_in_page.php');
}
