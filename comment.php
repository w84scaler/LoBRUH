<?php

require_once 'pdo.php';

session_start();

put_comment($db, $_POST['text'], $_SESSION['user_id'], $_GET['page_id'], date("Y-m-d H:i:s"));

header('Location: http://'.$_SERVER['HTTP_HOST'].'/champion_page.php?page_id='.$_GET['page_id']);