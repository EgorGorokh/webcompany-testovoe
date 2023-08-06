<?php

$search=$_POST['ins_sh_name'];

setcookie("search", $search, time()+3600);
header('Location: search.php');
