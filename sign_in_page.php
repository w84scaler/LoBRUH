<?php

require_once 'vendor/autoload.php';

session_start();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));

echo $twig->render('sign_in_page.html');