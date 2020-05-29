<?php

require_once 'vendor/autoload.php';
require_once 'pdo.php';

session_start();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));

$twig->addGlobal('user_name', get_user_name($db, $_SESSION['user_id']));

$id = rand(1,2);
$skin_id = rand(1,get_skins_amount($db, $id)-1);
$random_champ = array('id' => $id, 'name' => get_champ_name($db, $id), 'head' => get_page_name($db, $id), 'skin_id' => $skin_id, 'skin_name' => get_skin_name($db, $id, $skin_id));

echo $twig->render('main_lobruh.html',array('random_champ'=>$random_champ));