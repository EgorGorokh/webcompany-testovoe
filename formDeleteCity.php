<?php

require_once 'DataBase.php';



$id=$_POST['id'];


$dataBase=new DataBase();
$connect=$dataBase->getConnection();

$dataBase->deleteCity($connect, $id);

?>