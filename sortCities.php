<?php



$sort_sity= $_POST['sort_sity'];
$sort_order_by= $_POST['sort_order_by'];


setcookie("sort_sity", $sort_sity, time()+3600);
setcookie("sort_order_by", $sort_order_by, time()+3600);
header('Location: cities.php');
?>