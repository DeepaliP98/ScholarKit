<?php
session_start();
?>


<html>
<head>
   <link href='https://fonts.googleapis.com/css?family=Covered By Your Grace' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Carrois Gothic SC' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Chau Philomene One' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>
	<style>
      body{
      	background-image: url("appubg.jpg");
      	height:300%;
         width:100%;


      }
      #sub{
      	width:1in;
      	height:0.5in;
      }
      #res{
      	width:1in;
      	height:0.5in;
      }
      #d1{
         padding-left: 10px;
         padding-top: 10px;
         border-radius: 10px;
         font-family: 'Julius Sans One';
      	height:16in;
      	width:10in;
      	background-image:url("div.jpg");
      	opacity:0.9;
         border-radius:25px;
      }

      .txt{
      	width:3in;

      }
      #address{
      	width:3in;
      	height:1in;
      }
      #summu{
      	width:3in;
      	height:1in;
      }
      #desc
      {
      	width:3in;
      	height:1in;
      }
      *{font-family: 'Julius Sans One';}

	</style>
</head>
<body>

<div class="bg">
<h1><center>RESUME BUILDER</center></h1><hr>
<br><br><br>
<center><div id="d1">
<h2><center>LETS BUILD</center></h2><HR>
   
<font size="4" color="#393B3B">
<form align="left" method="POST" action="preview2.php">
   <div align="left" id="pi"><h3>PERSONAL INFO</h3>
	<label>First Name:</label><input class="txt" type="text" name="nam" placeholder="Enter your name"></input>
	<label>Last Name:</label><input class="txt" type="text" name="nam1" placeholder="Enter your last name"></input><br><br>
	<label>Current Profession</label>

   <select name="cp">
     <!-- <option value="" disabled="disabled">choose</option>-->
   	<option value="Student">Student</option>
   	<option value="Graduate">Graduate</option>
   	<option value="PHD Student">PHD Student</option>
   	<option value="Other">other</option>

   </select>
	<label>Contact Number:</label><input class="txt" type="tel" name="nam2" placeholder="Enter your number"></input><br><br>
   <label>Date Of Birth:</label><input class="dt" type="date" name="bday"></input><br>
   <label>Email:</label><input class="txt" type="text" name="email" placeholder="Enter your email id"></input><br><br>
   <label>Other accounts</label>

   <select name="ac1">
     <!-- <option value="" disabled="disabled">choose</option>-->
   	<option value="Linkedin" selected="selected">Linkedin</option>
   	<option value="Twitter">Twitter</option>
   	<option value="GitHub">Github</option>
   	<option value="Stack Overflow">Stackoverflow</option>
   	<option value="Other">other</option>

   </select>
   <input class="txt" type="text" name="acc1" placeholder="username/acc id"></input><br>
   Any others?
   <select name="ac2">
     <!-- <option value="" disabled="disabled">choose</option>-->
   	<option value="Linkedin" selected="selected">Linkedin</option>
      <option value="Twitter">Twitter</option>
      <option value="GitHub">Github</option>
      <option value="Stack Overflow">Stackoverflow</option>
      <option value="Other">other</option>

   </select>
   
   <input class="txt" type="text" name="acc2" placeholder="username/acc id"></input><br>
   Others?
   <select name="ac3">
     <!-- <option value="" disabled="disabled">choose</option>-->
   	<option value="Linkedin" selected="selected">Linkedin</option>
      <option value="Twitter">Twitter</option>
      <option value="GitHub">Github</option>
      <option value="Stack Overflow">Stackoverflow</option>
      <option value="Other">other</option>

   </select>
   <input class="txt" type="text" name="acc3" placeholder="username/acc id"></input><br>
   </div>
  
   <div id="summ"><h3>SUMMARY</h3><textarea name="sum" id="summu" maxlength ="120" placeholder="Tell us about yourself in about 100 words"></textarea></div>

   <div align="left" id="edu"><h3>EDUCATIONAL INFO</h3>

   <label>University</label><input class="txt" type="text" name="uni"></input>
   <label>From</label><input class="dt" type="date" name="day"></input>
   <label>To*</label><input class="dt" type="date" name="daya"></input><br><br>
   
   <label>Specialisation</label><input class="txt" type="text" name="spec"></input><br><br>

   <label>CGPA</label>
   <input class="rad" type="radio" name="cgpa" value="5-7" checked="checked">5-7
   <input class="rad" type="radio" name="cgpa" value="7-8.5">7-8.5
   <input class="rad" type="radio" name="cgpa" value="8.5-10">8.5-10
   </div>

   <div align="left" id="raw"><h3>RESEARCH AND WORK EXPERIANCE</h3>
   <ul>
   <li>
   Work<br>
   <label>Previous Employer</label><input class="txt" type="text" name="emp"></input>
   <label>Designation</label><input class="txt" type="text" name="des"></input><br></li>
   <li>
   Research
   <label>Domain Name</label><input class="txt" type="text" name="res"></input><br><br>
   <textarea id="desc" name="desc" maxlength="70" placeholder="Describe your project"></textarea></li>
   </ul>
   </div>
   
   <div id="saa" align="left"><h3>SKILLS AND ABILITIES</h3>
   <ul>
   <li>
   Management skills:<ul><li> <input class="txt" type="text" name="ms1"></li>
   <li> <input class="txt" type="text" name="ms2"></li>
   </ul>
   </li><br><br>

   <li>
   Communication skills:<ul><li> <input class="txt" type="text" name="cs1"></li>
   <li> <input class="txt" type="text" name="cs2"></li>
   </ul>
   </li><br><br>

   Other skills:<ul><li> <input class="txt" type="text" name="os1"></li>
   <li> <input class="txt" type="text" name="os2"></li>
   <li> <input class="txt" type="text" name="os3"></li>
   </ul>
   </li>
   </ul>
   </div>
   <br>
   <br>
   <div align="center"><input id="sub" type="submit" name="sub" value="SUBMIT"/>
   <input id="res" type="reset" name="res" value="RESET"/></div>

</form>
</font>
</div></center>
</div>
</body>
<script>











</script>









</html>