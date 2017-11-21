<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<title></title>
	<style type="text/css">
body{
	background-image: url("appubg.jpg");
	margin: 0;
}
#list_bar{
    position:relative;
    list-style-type: none;
    margin-top:0;
    width:100%;
    padding:0;
    color:#C6B9BE;
    overflow: hidden;
    font-family:'Julius Sans One';
    background-color: #393B3A;
}

li.nav{
    float: left;
    font-family:'Julius Sans One';
    color:#C6B9BE;
}

li.nav a{
    display: block;
    color: white;
    text-align: center;
    
    padding: 14px 16px;
    text-decoration: none;
}
li.nav img{
    display: block;
    color: white;
    text-align: center;
    padding-left: 5px;
    text-decoration: none;
}
//header
li.nav a:hover {
    background-color: #111;
}
li.nav img:hover {
    filter: brightness(40);
}
#title{
width:100%;
height:7%;
background-color:#900C3F;
position:absolute;
padding:0.5%;
opacity:0.6;
}
div.name{margin: 0;
     position:relative;
     background-color:#393B3A;
     color:#C6B9BE;
     font-size:400%;
     font-family:'Julius Sans One';
     padding-bottom:1%;
     width:100%;
               }
img.logo{height:7%;
    }
li.nav a:hover {
    background-color: #111;
}
li.nav img:hover {
    filter: invert(70%);
}
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: absolute; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0;
    color: white;
    filter:opacity(0.92);
    background-color:#393B3A;
    font-family:'Julius Sans One';
    left: 0;
    margin-top: 13.7%; 
    overflow-x: scroll;
    padding-top: 50px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
    color: white;
}
.sidenav div{

    text-decoration:;
    font-size: 17px;
    color: #818181;
    display: block;
    transition: 0.3s
}
iframe{
    margin-top: 40px; 
}
#iden{
    position: absolute;
    margin-left: 90%;
    margin-bottom: 90%;
    float:right;}

#peep{
    height: 50px;
    margin-left: 120px;
    padding-bottom: 20px;
}
#ss{
    position: absolute;
    width:700px;
    height:433px;
    background-size: 700px 433px;
    background-image: url("pic1.jpg");
    animation: slide 10s infinite;
    border-radius: 7px;
    filter: opacity(0.8);
    margin-left: 2%;
    margin-right: 0px;
     }
@keyframes slide{
       0% {background-image:url("pic1.jpg");  }
    25%  {background-image:url("pic2.jpg");  background-size: 700px 433px;}
    50%  {background-image:url("pic3.jpg");  background-size: 700px 433px;}
    75%  {background-image:url("pic4.jpg");  background-size: 700px 433px;}
    100% {background-image:url("pic1.jpg");  background-size: 700px 433px;}
}

#mySidenav{
    z-index: 100;
}
#main{
    color: white;
    border-radius: 7px;
    background-color: black;
    filter: opacity(0.65);
    position: absolute;
    margin-left: 60%;
    padding: 4%;
    font-family: 'Julius Sans One';
}
#main a{
    color: white;
}
	


h1{
    font-family: 'Julius Sans One';
    font-size: 25px; 
}
</style>
</head>
<body>
	<div class="name"><img src="logo.png" width="100" height="100" class="logo"></img>Scholarkit</div>
<ul id="list_bar">
    <li class="nav" id = "side"><img src="menu.png"></li>
  <li class="nav"><a  href="home.php">Home</a></li>
  <li class="nav"><a  href="scorlarship.php"> Scholarships</a></li>
  <li class="nav"><a  href="internship.php"> Internships</a></li>
  <li class="nav"><a  href="Profile.php"> Profile</a></li>
  <li class="nav"><a href="emo.html">Contact us</a></li>
  <li class="nav"><a  href="about us.html">About us</a></li>
  <li class="nav"><a href="SignUpPage.html">Sign Up</a></li>
  <li class="nav"><a href="Login.html">Log In</a></li>
</ul>
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" id = "close" onclick="closeNav()">&times;</a>
</div>
<div id = "iden">
        
        
    </div>
 <div id="ss"></div>

	<div id = "main">
       <h1> WELCOME TO SCHOLARKIT!!</h1><br/><br/>
       With us you can avail the scholarships and internships you deserve.<br/>
       Our Extensive database provides you with the latest opputtunities available to students.<br/>
       Use the Internships and Scholarships tabs to avail there resources or click on the links below to know where you stand.

        <br/><br/><br/>
<ul>
    <li> <a href="#news"> SAT Test Simulator </a><br/></li>
      <li><a href="#news"> GRE Mock Test </a><br/></li>
      <li><a href="#news"> Morgan Stanley Aptitude Test </a><br/></li>
      <li><a href="#news"> IISC Internship Test </a><br/></li>
      <li><a href="#news"> IIT JEE Mock Test </a><br/></li>
  </ul>

  <a href="resume_home2.php"> BUILD YOUR RESUME HERE !</a>

    </div>
</body>

<script type="text/javascript">
		var side = document.getElementById("side");
		var close = document.getElementById("close");
		function openNav(e) {
    		var s = document.getElementById("mySidenav");
    		s.style.width = "320px";
    		//s.removeAttribute("overflow-x");
		}

		function closeNav(e) {
			//s.setAttribute("overflow-x","hidden");
    		document.getElementById("mySidenav").style.width = "0";
		}

		side.addEventListener("click",openNav,false);
		close.addEventListener("click",closeNav,false);

		var su = document.querySelector("a[href = 'SignUpPage.html']");
        var lgi = document.querySelector("a[href = 'Login.html']");

		var idn = document.getElementById("mySidenav");
    	if( <?php echo isset($_SESSION['current'])?'true':'false'; ?> )
    	{
    		su.parentNode.innerHTML = "<a href='Logout.php'>Log Out</a>";
            lgi.parentNode.parentNode.removeChild(lgi.parentNode);
    		if( <?php echo isset($_SESSION['profiled']) ? ($_SESSION['profiled'] == "not set"? 'true' : 'false') :'false'; ?> )
    		{
    			var disp = document.createElement("p");
    			disp.innerHTML = "Your Profile hasn't been set. Click below to set your profile" ;
    			var lin = document.createElement("a");
    			a.setAttribute("href","Profile.php");
    			idn.appendChild(disp);
    			idn.appendChild(lin);
    		}
    		else
    		{
                var pic = document.createElement("img");
                pic.src = "default-user.png";pic.id = "peep";
    			var data = "<?php 
    					$t = file("users.csv"); 
    					echo isset($_SESSION['current'])? trim($t[intval($_SESSION["current"])]) :'false';
    					 ?>";
    			console.log(data);
    			data = data.split(",");
    			var id = data[0];
			
    			//display details
    			var dat = "<?php  
    				$f = file("details.csv");
    				$id = isset($_SESSION['current'])?$_SESSION["current"]:"1"; 
					$c = count($f)-1; 
					$d = ""; 
					while($c > 0)
						{ 
							if($f[$c][0]==$id)
							{
								$d = ($f[$c]);
								break;
							}
							$c=$c-1;
						}
					echo trim($d);
	    			 ?>";
	    		console.log(dat);
	    		dat = dat.split(",");
	    		var disp = document.createElement("div");
    			disp.innerHTML = "Name : "+data[1]+" "+data[2]+"<br/>Age : "+dat[1]+"<br/>Gender : "+dat[2]+"<br/>"+dat[3]+" with CGPA "+dat[4]+"<br/>Caste : "+dat[5]+"<br/>Currently in "+dat[6]+" studying "+dat[7]+"\n" ;
                idn.appendChild(pic);
    			idn.appendChild(disp);
    			var qual = document.createElement("iframe");
    			qual.setAttribute("src","Q.php");
				idn.appendChild(qual);
	 		}
    	}
    	else
    	{
    		//let SignUp and Login remain
    		var disp = document.createElement("p");
    		disp.innerHTML = "You are not logged in." ;
    		idn.appendChild(disp);
    	}
    	idn.appendChild(document.createElement("br"));


</script>
</html>