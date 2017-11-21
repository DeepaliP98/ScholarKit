<?php
session_start();
extract($_POST);
$_SESSION["nam"] = $nam;
$_SESSION["nam1"] = $nam1;$_SESSION["cp"] = $_POST["cp"];$_SESSION["nam2"]=$nam2;
$_SESSION["bday"] = $_POST["bday"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["ac1"] = $_POST["ac1"];
$_SESSION["acc1"] = $_POST["acc1"];
$_SESSION["ac2"] = $_POST["ac2"];
$_SESSION["acc2"] = $_POST["acc2"];
$_SESSION["ac3"] = $_POST["ac3"];
$_SESSION["acc3"] = $_POST["acc3"];



?>
<html>
<head>
  <style>
 #frame{
    
    opacity:0.9;
    width:10in;
    height:15in;
    background-color:#999D99;
}
#pro{
	width:1in;
	height:1in;
}

#im{
	width:1in;
	height:1in;
	float:left;
}
#pi{
	width:9in;
	height:1in;
	float:right;

}
h2{
	background-color: #908980;
}

  </style>
</head>
<body  bgcolor="#494B49">
<div id="frame">
  <div id="im">
  <img src="icon1.png" id="pro"></div>
  <div id="pi"><br>
   <?php
   echo "<font size='7'>";
   echo "\n<b>".$nam."\n".$_SESSION["nam1"]."</b><br>";
   echo "</font>";
  echo "\n<b>".$_SESSION["cp"]."\n | \n".$_SESSION["nam2"]."\n | \n".$_SESSION["email"]."</b><br>";
  ?></div>

<hr><br>
<!--SUMMARY-->
<div>
   <h2><u>SUMMARY</u></h2>
    <?php
	 $_SESSION["sum"] = $_POST["sum"];
	 echo "<b><p>".$_SESSION["sum"]."</p></b>"."\n";
    ?><br>
</div>
<div>
   <h2><u>PERSONAL INFO</u></h2>
    <?php
	echo "<b>DOB:\n".$_SESSION["bday"]."</b><br><br>";
	echo "<b>Find me also at:</b> <br>";
	echo "<ul>";
	echo "<li><b>".$_SESSION["ac1"].":\n".$_SESSION["acc1"]."</b><br></li>";
	echo "<li><b>".$_SESSION["ac2"].":\n".$_SESSION["acc2"]."</b><br></li>";
	echo "<li><b>".$_SESSION["ac3"].":\n".$_SESSION["acc3"]."</b><br></li>";
	echo "</ul>";
    ?>
</div>

<!--Education-->
<div>
   <h2><u>EDUCATIONAL INFO</u></h2>
    <?php
 	 $_SESSION["uni"] = $_POST["uni"];
	 $_SESSION["day"] = $_POST["day"];
	 $_SESSION["daya"] = $_POST["daya"];
	 $_SESSION["spec"] = $_POST["spec"];
	 $_SESSION["cgpa"] = $_POST["cgpa"];

	 echo "<b><u>UNIVERSITY:</u>"."\n \n".$_SESSION["uni"]."\n \n "."(From:".$_SESSION["day"]."\n"."To:".$_SESSION["daya"].")</b><br><br>";
     echo "<b><u>SPECIALISATIION:</u>"."\n \n".$_SESSION["uni"]."</b><br><br>";
     echo "<b><u>CGPA:</u>"."\n \n".$_SESSION["cgpa"]."</b><br>";
    ?>
</div>
<!--Research-->

<div>
   <h2><u>RESEARCH AND WORK EXPERIANCE</u></h2>
   <ul><li><h4>Work</h4>
    <?php
	 $_SESSION["emp"] = $_POST["emp"];
	 $_SESSION["des"] = $_POST["des"];
	 echo "<b>Previous Employer:"."\n \n".$_SESSION["emp"]."</b>"."<br>";
	 echo "<b>Designation:"."\n \n".$_SESSION["des"]."</b>";
    ?></li>
    <br><br>
    <li><h4>Research</h4>
    <?php
     $_SESSION["res"] = $_POST["res"];
	 $_SESSION["desc"] = $_POST["desc"];
	 echo "<b>Research Domain Name:"."\n \n".$_SESSION["res"]."</b>"."<br>";
	 echo "<b>Project Description: <br>"."\n \n".$_SESSION["desc"]."</b>";
	 ?></li></ul>

</div>

<!--Skills-->
<div>
 <h2>SKILLS AND ABILITIES</h2>
    <ul><li><h4>Management Skills</h4><br>
    <?php
	 $_SESSION["ms1"] = $_POST["ms1"];
	 $_SESSION["ms2"] = $_POST["ms2"];
	 echo "<ul>";
	 echo "<li>".$_SESSION["ms1"]."</li>";
	 echo "<li>".$_SESSION["ms2"]."</li>";
	 echo "</ul>";
    ?></li>
    <li><h4>Communication Skills</h4><br>
    <?php
	 $_SESSION["cs1"] = $_POST["cs1"];
	 $_SESSION["cs2"] = $_POST["cs2"];
	 echo "<ul>";
	 echo "<li>".$_SESSION["cs1"]."</li>";
	 echo "<li>".$_SESSION["cs2"]."</li>";
	 echo "</ul>";
    ?></li>
    <li><h4>Other Skills</h4><br>
    <?php
	 $_SESSION["os1"] = $_POST["os1"];
	 $_SESSION["os2"] = $_POST["os2"];
	 $_SESSION["os3"] = $_POST["os3"];
	 echo "<ul>";
	 echo "<li>".$_SESSION["os1"]."</li>";
	 echo "<li>".$_SESSION["os2"]."</li>";
	 echo "<li>".$_SESSION["os3"]."</li>";
	 echo "</ul>";
    ?></li>


</ul>


</div>

</div>
</body>
</html>