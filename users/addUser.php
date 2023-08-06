<?php


require_once '../DataBase.php';





$name=$_POST['ins_name'];
$surname=$_POST['ins_surname'];
$city=$_POST['selsity'];
$fileName=$_FILES['uploadfile']['name'];

$dataBase=new DataBase();
$connect=$dataBase->getConnection();




$uploaddir = '../images/';
$uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);


if (move_uploaded_file($_FILES['uploadfile']['name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}




$dataBase->addUser($connect, $name,$surname,$city, $fileName);