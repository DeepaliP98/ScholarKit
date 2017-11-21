<?php

extract($_GET);
session_start();

$f = file_get_contents("users.csv");
$f1 = file("users.csv");
$ids = intval($_SESSION["current"]);
//use f1 to avoid unwanted erroes

$s = str_replace(trim(explode(",", $f1[$ids])[3]),$epwd, $f);
$f = fopen("users.csv", "w+");
fwrite($f, $s);

echo "<script>alert('Password Changed!');window.close();</script>";
?>