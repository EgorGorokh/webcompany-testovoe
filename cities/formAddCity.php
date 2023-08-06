<?php

require_once '../DataBase.php';

$name=$_POST['instextcity'];
$indexOfSort=$_POST['instextrangir'];

$dataBase=new DataBase();
$connect=$dataBase->getConnection();

$dataBase->addCity($connect, $name, $indexOfSort);
