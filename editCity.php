<?php

require_once 'DataBase.php';



$name=$_POST['edit_text_city'];
$oldName=$_POST['oldName'];
$indexOfSort=$_POST['edit_text_rangir'];
$id=$_POST['id'];


$dataBase=new DataBase();
$connect=$dataBase->getConnection();

if($name!=$oldName){
    $dataBase->editAllCityName($connect,$name, $oldName);
}


$dataBase->editCity($connect,$id, $name, $indexOfSort);

?>