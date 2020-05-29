<?php

require_once 'vendor/autoload.php';
require_once 'pdo.php';
require_once 'regular_bruh.php';

session_start();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
    'auto_reload' => true
));

$twig->addGlobal('page_id', $_GET['page_id']);
$twig->addGlobal('user_name', get_user_name($db, $_SESSION['user_id']));
$twig->addGlobal('champ_name', get_champ_name($db, $_GET['page_id']));
$skills = get_champ_skills($db, $_GET['page_id']);
$skins = get_champ_skins($db, $_GET['page_id']);
$comments = get_page_comments($db, $_GET['page_id']);
$comments = regular_bruh($comments);
$champ_desc = array('name' =>get_page_name($db, $_GET['page_id']),'description' => get_champ_desc($db, $_GET['page_id']));

echo $twig->render('champion_page.html',array('skills'=>$skills, 'skins'=>$skins, 'comments' => $comments, 'champ_desc' => $champ_desc));