<?php

$mysqli = new mysqli("localhost", "root", "phpmybruh", "huita");
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$mysqli->prepare("SELECT * FROM `blya` WHERE `id` = 4");

var_dump($result);