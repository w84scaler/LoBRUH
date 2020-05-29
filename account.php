<?php

require_once 'vendor/autoload.php';
require_once 'pdo.php';
require_once 'regular_bruh.php';

session_start();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));

$twig->addGlobal('user_name', get_user_name($db, $_SESSION['user_id']));
$comments = get_user_comments($db, $_SESSION['user_id']);
$comments = regular_bruh($comments);

echo $twig->render('account.html',array('comments' => $comments));