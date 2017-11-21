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
  body {
  margin: 0;
}
    body{
                background-image: url("appubg.jpg");
                font-family: Verdana;
                margin: 0;
            }
  .flip-container {
        margin: 100px;
        perspective: 1000;
        display: inline-block;
        
    }
    .flip-container:hover .card {
        transform: rotateY(180deg);
    }
    .card, .front, .back {
        width: 4in;
        height: 6in;

    }
    .card {
        transition: 0.8s;
        transform-style: preserve-3d;
        position: relative;
    }
    .front, .back {
        backface-visibility: hidden;
        position: absolute;

    }
    .front {
        z-index: 1;
        transform: rotateY(180deg);
        background: url("div.jpg") no-repeat;
        filter: opacity(0.8);
        background-color: black ;
    }
    .back {
        z-index: 2; /* back side, placed above front */
        transform: rotateY(0deg);
        background: url("div.jpg") no-repeat;
        filter: opacity(0.6);
        background-color: black ;
    }

    #d1{
    	float:right;
    	margin-top: 0;
    }

    #d2{
    	float:left;
    	margin-top: 0;
    }
    img.t{
    	width:3in;
    	height:4in;
    }

    #list_bar{
    list-style-type: none;
    overflow: hidden;
    background-color: #393B3A;
    font-family:'Julius Sans One';
    color:#C6B9BE;
    margin:0;
    padding:0;
}

li {
    float: left;
    color:#C6B9BE;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
div.name{
     background-color:#393B3A;
     color:#C6B9BE;
     font-size:400%;
     font-family:'Julius Sans One';
     padding-bottom:1%;
     width:100%;
               }

img.logo{height:12%;
    }
  </style>
</head>
<body>
<div class="bg">
<div class="name"><img src="logo.png" class="logo"></img>Scholarkit</div>
<ul id="list_bar">
  <li><a class="nav" href="home.php">Home</a></li>
      <li><a class="nav" href="scorlarship.php"> Scholarships</a></li>
      <li><a class="nav" href="internship.php"> Internships</a></li>
      <li><a class="nav" href="Profile.php"> Profile</a></li>
      <li><a class="nav" href="emo.html">Contact us</a></li>
      <li><a class="nav" href="about us.html">About us</a></li>
</ul>

<br>

<h1><center>RESUME BUILDER</center></h1>
<br><br><br>

 <div class="flip-container" id="d1">
        <div class="card">
            <div class="front"><br><br><br><br>
            	<center>
            	<a href="resume.php"><img class="t"src="temp2.jpg"></a></center>
            </div>

            <div class="back"><br><br><br><br><br><br><br><br>
             <center><h2> <b>TEMPLATE 2</b></h2></center>
            </div>
        </div>
    </div>

 <div class="flip-container" id="d2">
        <div class="card">
            <div class="front"><br><br><br><br>
            	<center>
            	<a href="resume2.php"><img class="t" src="temp1.jpg"></a></center>
            </div>

            <div class="back"><br><br><br><br><br><br><br><br>
             <center><h2> <b>TEMPLATE 1</b></h2></center>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript">
	if(<?php echo isset($_SESSION["current"])?'true':'false';?>)
       {
          if(<?php echo isset($_SESSION["profiled"])?'true':'false';?>)
          {
            //continue
          }
          else
          {
            window.alert('Your Profile is not set!');
            window.location.href='Profile.php';
          }
       }
       else
       {
        window.alert('You are not logged in!');
        window.location.href='SignUpPage.html';
       }
</script>
</html>