<?php 

$filter=$_POST['selsity_2'];

setcookie("filter", $filter, time()+3600);
header('Location: users.php');