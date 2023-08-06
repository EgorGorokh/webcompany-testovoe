<?php

$sort_name= $_POST['sort_name'];
$sort_order_by_2= $_POST['sort_order_by_2'];


setcookie("sort_name", $sort_name, time()+3600);
setcookie("sort_order_by_2", $sort_order_by_2, time()+3600);
header('Location: users.php');
?>