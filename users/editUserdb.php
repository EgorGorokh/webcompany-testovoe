<?php

require_once '../DataBase.php';

$photo=$_FILES['uploadfile']['name'];
$first_name=$_POST['edit_text_name'];
$last_name=$_POST['edit_text_surname'];
$city=$_POST['edit_selsity'];
$id=$_POST['id'];

$dataBase=new DataBase();
$connect=$dataBase->getConnection();

$dataBase->editUser($connect, $id, $first_name, $last_name, $city, $photo);
