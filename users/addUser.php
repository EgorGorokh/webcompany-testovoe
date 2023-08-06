<?php

require_once '../DataBase.php';

$name=$_POST['ins_name'];
$surname=$_POST['ins_surname'];
$city=$_POST['selsity'];
$fileName=$_FILES['uploadfile']['name'];

$dataBase=new DataBase();
$connect=$dataBase->getConnection();

$uploaddir = 'testWebCompany/images/';
$uploadfile = $uploaddir . $_FILES['uploadfile']['name'];

function make_upload($file)
{
    $name = $file['name'];
    copy($file['tmp_name'], '../images/' . $name);
}

if(isset($_FILES['uploadfile'])) {
    make_upload($_FILES['uploadfile']);
}


$dataBase->addUser($connect, $name, $surname, $city, $fileName);
