<!-- This Page Updates all the deyails on details.csv and sets profiled to true-->
<?php 
session_start();
extract($_GET);

//checking occurs from below, hence newly updated value of details can be appended and used
$f = fopen("details.csv", "a+");
fwrite($f,implode(",",array("\n".$_SESSION["current"],$age,$gender,$grad,$cgpa,$caste,$uni,$course)));
$_SESSION["profiled"] = "set";
echo ("<script language='JavaScript'> window.alert('Changes Saved!');window.location.href='home.php';</script>");

//code to enter details.csv and redirect to homepage
?>