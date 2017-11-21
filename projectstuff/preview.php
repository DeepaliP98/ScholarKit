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
    height:11in;
    background-color:#999D99;

 }

 .pi{
 	width:3in;
 	height:11in;
 	border-right:2px solid;
 	background-color:#999D99;
 	float:left;
 }
 #summary{
 	width:6.5in;
 	height:1in;
 	background-color:#999D99;
 

 }
  #reawe{
 	width:6.5in;
 	height:3in;
 	background-color:#999D99;
 

 }
  #saab{
 	width:6.5in;
 	height:1in;
 	background-color:#999D99;
 

 } 
 #Edu{
 	width:6.5in;
 	height:2in;
 	background-color:#999D99;
 

 }
 #pro{
 	width:0.5in;
 	height:0.5in;
 }
 #summary, #Edu,#reawe,#saab{
 	float:left;
 }
 h3{
 	background:#626962;
 }


  </style>
</head>

<body bgcolor="#494B49">
<div id="frame">

<!--PERSONAL INFO -->
<div class="pi">
  <center><img id="pro" src="icon1.png" /></center>
<font family="Verdana">
<?php  

echo "<b>Name:".$nam."\n".$_SESSION["nam1"]."</b><br>";
if($_SESSION["cp"] == "Other")
{
  echo " ";
}
else
{
echo "<b>".$_SESSION["cp"]."</b><br>";
}
echo "<b>".$_SESSION["nam2"]."</b><br>";
echo "<b>DOB:\n".$_SESSION["bday"]."</b><br>";
echo "<b>Email ID:\n".$_SESSION["email"]."</b><br><br>";
echo "<b>".$_SESSION["ac1"].":\n".$_SESSION["acc1"]."</b><br>";
echo "<b>".$_SESSION["ac2"].":\n".$_SESSION["acc2"]."</b><br>";
echo "<b>".$_SESSION["ac3"].":\n".$_SESSION["acc3"]."</b><br>";
?>
</font>
</div>

<!--OTHER SIDE-->
  <div id="summary">
    <h3>SUMMARY</h3>
    <?php
	 $_SESSION["sum"] = $_POST["sum"];
	 echo "<b><p>".$_SESSION["sum"]."</p></b>"."\n";
    ?>
  </div>
  <div id="Edu">
    <h3>EDUCATION</h3>
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
  <!--RAW-->
   <div id="reawe">
    <h3>RESEARCH AND WORK EXPERIANCE</h3>
    <ul><li><h4>Work</h4><br>
    <?php
	 $_SESSION["emp"] = $_POST["emp"];
	 $_SESSION["des"] = $_POST["des"];
	 echo "<b>Previous Employer:"."\n \n".$_SESSION["emp"]."</b>"."<br>";
	 echo "<b>Designation:"."\n \n".$_SESSION["des"]."</b>"."<br>";
    ?></li>
    <br><br>
    <li><h4>Research</h4><br>
    <?php
     $_SESSION["res"] = $_POST["res"];
	 $_SESSION["desc"] = $_POST["desc"];
	 echo "<b>Research Domain Name:"."\n \n".$_SESSION["res"]."</b>"."<br>";
	 echo "<b>Project Description: <br>"."\n \n".$_SESSION["desc"]."</b>"."<br>";
	 ?></li></ul>

   </div><br>
 <!--SKILLS-->
 <div id="saab">
    <h3>SKILLS AND ABILITIES</h3>
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