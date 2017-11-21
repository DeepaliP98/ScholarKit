<!DOCTYPE html>
<!-- This page alows editing of the profile-->
<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='https://fonts.googleapis.com/css?family=Covered By Your Grace' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Carrois Gothic SC' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Chau Philomene One' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>

    </head>
    <style type="text/css">


         *{
        margin:0;
        padding: 0;
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

li.nav a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
//header
li.nav a:hover {
    background-color: #111;
}
#title{
width:100%;
height:10%;
background-color:#900C3F;
position:relative;
padding:1%;
opacity:0.6;
}
div.name{margin: 0;
     position:relative;
     background-color:#393B3A;
     color:#fff;
     font-size:400%;
     font-family:'Julius Sans One';
     //padding-bottom:3%;
     width:100%;
               }
.logo
{
    width: 80px;
    height: 80px;
    }
            form {
                border: 3px solid #f1f1f1;
                width: 40%;
                margin-left: 30%;
                margin-top: 2%;
                margin-bottom: 2%;
                background-color: black;
                //opacity: 0.6;
                filter: opacity(0.69);
                border-radius: 10px;
                padding: 5%;
            }

            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
                border-radius: 20px;
                font-size: 15px;
                outline: none;
            }

            h3{
              font-size: 25px;
              padding: 10px 18px;
              background-color: black;
              color: white;
              font-family: 'Julius Sans One';
            }

            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }
            
            #nxt {
                font-size: 20px;
                width: auto;
                padding: 10px 18px;
                background-color: black;
                color: white;
                border-radius: 20px;
                margin-left: 43%;
            }

            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }
            body{
                background: url("abtus.jpg");
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                   display: block;
                   float: none;
                }
                .cancelbtn {
                   width: 100%;
                }
            }
            #err{
                padding-left: 20px;
                border:none;
                color:red;
                background-color: black;
                filter: opacity(0.69);
                font-family:'Julius Sans One';
            }
            #cpwd{
              font-size: 20px;
              width: auto;
              padding: 10px 18px;
              background-color: black;
              color: white;
              border-radius: 20px;
              margin-left: 35%;
            }

            #gender{
              font-size: 20px;
              width: auto;
              padding: 10px 18px;
              background-color: black;
              color: white;
              border-radius: 20px;
              float: left;
            }
            #grad{
              font-size: 20px;
              width: auto;
              padding: 10px 18px;
              background-color: black;
              color: white;
              border-radius: 20px;
              float: right;
            }
            #caste{
              font-size: 20px;
              width: auto;
              padding: 10px 18px;
              background-color: black;
              color: white;
              border-radius: 20px;
              float: left;
            }
            #add{
              font-size: 20px;
              width: auto;
              padding: 10px 18px;
              background-color: black;
              color: white;
              border-radius: 20px;
              margin-left: 35%;
              margin-top: 3%;
            }
            #sub{
              font-size: 20px;
              width: auto;
              padding: 10px 18px;
              background-color: black;
              color: white;
              border-radius: 20px;
                margin-left: 43%;
                margin-top: 3%;
            }
            iframe{
              width: 100%;
              border-radius: 10px;
            }
    </style>
    <body>
               <div class="name"><img src="logo.png" class="logo"></img>Scholarkit</div>
<ul id="list_bar">
  <li class="nav"><a  href="home.php">Home</a></li>
  <li class="nav"><a  href="scorlarship.php"> Scholarships</a></li>
  <li class="nav"><a  href="internship.php"> Internships</a></li>
  <li class="nav"><a  href="Profile.php"> Profile</a></li>
  <li class="nav"><a href="emo.html">Contact us</a></li>
  <li class="nav"><a  href="about us.html">About us</a></li>
</ul>

    	<div id = "Details">
            <form action="veriP.php">
            <h3>Account Details</h3>
			<input type="text" name="fname" id="fname" placeholder="First name" disabled="disabled">
            <br/>
            <input type="text" name="lname" id="lname" placeholder="Last name" disabled="disabled">
            <br/>
            <input type="button" id = "cpwd" value="change password" >
            <br/>
            <h3>Personal Details</h3>
            <input type="text" name="age" id ="age" placeholder="Age"  required="required">
            <br/>
            Gender :
			<select name = "gender" id = "gender">
            	<option>Male</option>
            	<option>Female</option>
            	<option>Other</option>
			</select>

			Graduation :
            <select name = "grad" id = "grad">
            	<option>Post Graduate</option>
            	<option>Under Graduate</option>
			</select>
			<br/>
			<input type="text" name="cgpa" id ="cgpa" placeholder="CGPA"  required="required">
            <br/>
            Caste :
            <select name = "caste" id = "caste">
            	<option>General</option>
            	<option>SC</option>
            	<option>ST</option>
            	<option>OBC</option>
			</select>
			<br/>
			<input type="text" name="uni" id ="uni" placeholder="Current University" required="required">
            <br/>
            <input type="text" name="course" id ="course" placeholder="Current Course of Study" required="required">
            <br/>

            <h3>Qualifications</h3>

            <div id = "qualifications">
            	<iframe src="Q.php" id = "youriframe"></iframe>
            </div>

			<input type="button" id = "add" value="Add Qualification" >
			<br/>
			<input type="Submit" value="Done" id = "sub" action = "GET">
            </form>
        </div>
    </body>
    <script>
    	//add stuff for case when profiled is set
    	//only open a new window for password change
    	// add all the qualififcations through js

    	window.addEventListener("beforeunload", function(e){
   		return ("Leaving this page will log you out. \nAre you sure you wish to continue?");
		}, false);


    	if(<?echo isset($_SESSION['current'])?'true':'false'; ?>)
    	{
    		var outer = document.getElementById("Details");
    		var fname = document.getElementById("fname");
    		var lname = document.getElementById("lname");
    				var pwd = document.getElementById("cpwd");
    		var age = document.getElementById("age");
    		var gender = document.getElementById("gender");
    		var grad = document.getElementById("grad");
    		var cgpa = document.getElementById("cgpa");
    		var caste = document.getElementById("caste");
    		var cor = document.getElementById("course")
    		var uni = document.getElementById("uni");
    				var add = document.getElementById("add");
    		var data = "<?php
    					$t = file("users.csv");
    					echo trim($t[intval( isset($_SESSION['current']) ? $_SESSION["current"] :"1")]);
    					 ?>";
    		console.log(data);
    		data = data.split(",");
    		var id = data[0];

    		fname.setAttribute("value",data[1]);
    		lname.setAttribute("value",data[2]);

    		var obj = {
	    		addQ: function(e)
	    		{
	    			MyWindow=window.open('Qual.html','MyWindow', 'toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=no,resizable=no,width=600,height=400,left=20,top=20');

	    		},
	    		no_num: function(e)
            	{
	                var ch = e.key ;
	                if((ch<='Z'&&ch>='A')||(ch<='z'&&ch>='a')||(ch === ' '))
	                {
	                    e.target.nextSibling.innerHTML = "";
	                }
	                else
	                {
	                    e.preventDefault();
	                }
            	},
            	changePwd: function(e)
            	{
            		var old = prompt("Enter Old Password : ");
            		if(old === data[3])
            		{

            			MyWindow=window.open('chPwd.html','MyWindow', 'toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=no,resizable=no,width=600,height=400,left=20,top=20');
            		}
            		else
            		{
            			alert("Wrong Password Entered!");
            		}
            	}
    		};

    		pwd.setAttribute("onclick","obj.changePwd(event)");
    		add.setAttribute("onclick","obj.addQ(event)");
    		uni.setAttribute("keypress","obj.no_num(event)");
    		cor.setAttribute("keypress","obj.no_num(event)");

    		if(<?php echo isset($_SESSION['profiled']) ? ($_SESSION['profiled'] == "not set"? 'true' : 'false') :'false'; ?>)
    		{
    			//do nothing and let form work normally
    		}
    		else
    		{
    			//display details
    			var dat = "<?php
    				$f = file("details.csv");
    				$id = isset($_SESSION["current"])?$_SESSION["current"]:1 ;
					$c = count($f)-1;
					$d = "";
					while($c > 0)
						{
							if(explode(",", $f[$c])[0]==$id)
							{
								$d = ($f[$c]);
								break;
							}
							$c=$c-1;
						}
					echo trim($d);
	    			?>";
	    		dat = dat.split(",");
	    		age.value = dat[1];
	    		gender.value = dat[2];
	    		grad.value = dat[3];
	    		cgpa.value = dat[4];
	    		caste.value = dat[5];
	    		uni.value = dat[6];
	    		cor.value = dat[7];
    		}
    	}
    	else
    	{
    		window.alert('You are not logged in!');
    		window.location.href='SignUpPage.html';
    	}


    </script>
</html>
