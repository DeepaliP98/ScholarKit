<!-- This page adds the qualification to the csv file-->
<?php

extract($_GET);
session_start();
$f = fopen("qualifications.csv","a+");
$id = $_SESSION["current"];
fwrite($f,implode(",", array("\n".$id,$exam,$rank,$grade,$per)));
echo "<script>alert('Qualification Added!');window.close();</script>";
?>