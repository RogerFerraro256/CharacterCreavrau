<?php

require 'connection.php';

$player = $_POST['name_Jogador'];
$character = $_POST['char_Name'];
$race = $_POST['racePlayer'];
$classe = $_POST['classPlayer'];
$alligment = $_POST['alligment'];
$forc =  $_POST['forc'];
$dest = $_POST['dest'];
$const = $_POST['const'];
$intel = $_POST['intel'];
$conhe = $_POST['conhe'];
$car = $_POST['car'];
$char_itens = $_POST['char_itens'];


$sql = "INSERT INTO `rpg`.`player` (`name_Jogador`, `char_Name`, `racePlayer`, `classPlayer`, `char_His`, `alligment`, `forc`, `dest`, `const`, `intel`, `conhe`, `car`, `char_itens`) VALUES ('Roger', 'azaghal', 'anão', 'arqueiro', 'deu o cu e ficou com dor', 'true neutral', '20', '20', '20', '20', '20', '20', 'piroca');"






?>