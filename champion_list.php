<?php

require_once 'vendor/autoload.php';
require_once 'pdo.php';

session_start();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));

$champions = get_champ_list($db);
if ($_GET['search'] != '') {
	$search = array();
	foreach ($champions as $champion) {
		if (strripos($champion['name'], $_GET['search']) !== FALSE) {
			$search[] = $champion;
		}
	}
	$champions = $search;
}

$twig->addGlobal('user_name', get_user_name($db, $_SESSION['user_id']));
$twig->addGlobal('form_text', $_GET['search']);
echo $twig->render('champion_list.html',array('champions'=>$champions));