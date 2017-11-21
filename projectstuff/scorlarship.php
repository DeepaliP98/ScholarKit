<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
    	   <link href='https://fonts.googleapis.com/css?family=Covered By Your Grace' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Carrois Gothic SC' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Chau Philomene One' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>

        <title>Scholarship</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <style>

            body{
                background-image: url("appubg.jpg");
                font-family: Verdana;
                margin: 0;
            }
            #opener{vertical-align:top;
                    font-family:'Carrois Gothic SC';
                     }
            #you{
                background:url("div.jpg");
                opacity:0.9;
                width: 5in;
                height: 3in;
                border-radius:25px;
                
                
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

            #list_bar li {
                float: left;
                color:#C6B9BE;
            }

            #list_bar li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            #list_bar li a:hover {
                background-color: #111;
            }

            #list_bar li span {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            #list_bar li span:hover {
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

            img.logo{
                height:80px;
                width:80px;
                }
            
            table{

            	position: absolute;
                border: none;
                border-collapse: collapse;
                text-align: left;

            }

            #into{
            	position: absolute;
              background-color:#474545;
            	filter:opacity(0.8);
            	font-family:'Chivo';
            	text-decoration: blink;
            	width:700px;
            	min-height:500px;
            	padding: 10px;
            	margin-left: 10px;
            	border-radius:3px;
              size: auto;
              overflow: scroll;
            }
            th,tr{padding:10px;
                  font-size:20px;
                  margin-left: 10px;
              } 
             #hello{
             	position: absolute;
             	margin-left:730px;
             	animation: show2 10s infinite;
             } 
             
             @keyframes show2{
    from {transform:rotate(360deg);}
    to {transform:rotate(0deg);}
                }
             @keyframes show1{
    from {transform:rotate(0deg);}
    to {transform:rotate(360deg);}
                }

             #hello1{
             	position:absolute;
             	margin-left:730px;
             	animation: show1 8s infinite;
             } 
             #spot{
             	    position: absolute;
             	    font-family:'Chivo';
             	    margin-left:450px;
             	    margin-top: 120px;
             	    font-size:20px;
             }
            div[class*="info"]{position:absolute;
            	                font-size: 20px;
                                float:right; 
                                 margin-top:200px;
                                 margin-left:900px;
                                 filter:opacity(0);
                                  }

            
        </style>
    </head>
    <body>
    <div class="name"><img src="logo.png" class="logo"></img>Scholarkit</div>
    <ul id="list_bar">
      <li><a class="nav" href="home.php">Home</a></li>
      <li><a class="nav" href="scorlarship.php"> Scholarships</a></li>
      <li><a class="nav" href="internship.php"> Internships</a></li>
      <li><a class="nav" href="Profile.php"> Profile</a></li>
      <li><a class="nav" href="emo.html">Contact us</a></li>
      <li><a class="nav" href="about us.html">About us</a></li>
    </ul>
<h2 id="opener"><img src="savings.png"></img>Some scholarships according to your CGPA</h2><hr>


<br>
    <br><div id="into">
       
      
            
      <?php
        $id = isset($_SESSION["current"])? $_SESSION["current"]: -1;
        $pr = isset($_SESSION["profiled"])?$_SESSION["profiled"] == "set"?'set':'not set':'not set';
        $cg = 12 ;
        if($pr == 'set')
        {
            $f = file("details.csv");
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
            if($c!=0)
          {$cg = explode(",", $d)[4];}
        }

        if (($handle = fopen("scholarships.csv", "r")) !== FALSE) 
         {
            echo "<table>" ;
            echo "<tr><th>SCHOLARSHIP NAME<hr></tr>";
            fgetcsv($handle, 1000, ",");
            $data = fgetcsv($handle, 1000, ",");
            $i=0;
            while($data[3] == "Age Limit")
            {
              while(($data = fgetcsv($handle, 1000, ",")) !== FALSE)
              {
                $data = fgetcsv($handle, 1000, ",");
                $v = $data[2];
                $u=$data[3];
                $z=$data[4];
                $j = $data[1];
                $f = $data[6];
                $ru=$data[5];
                $rt=$data[7];

                if($v <= $cg)
                {
                	$i=$i+1;
                    echo "<tr><td class='info".$i."''>".$j."</td></tr>";
                    $a[$i]="<u>Amount:</u>".$f."</br>"."<u>Age limit:</u>".$u."</br>"."<u>Category:</u>".$z."</br>"."<u>Branch:</u>".$ru."</br>"."<u>Gender:".$rt."</br>";
                }
                }
            }
            echo "</table></div>";
            for($k=1;$k<=$i;$k++)
            {
            	echo "<div class='info".$k."''>".$a[$k]."</div>";
            }
            fclose($handle); 
         } 
        ?>
              <canvas id="hello" width="500" height="500" >
</canvas>
  <canvas id="hello1" width="500" height="500" >
</canvas>
            </div>
     <div id="spot">
<pre id="spot">Hover over name for
        more details</pre></div>
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

    	var a=document.querySelectorAll("td[class*='info']");
    	var ic=a[0].style.color;
    	var spot=document.getElementById("spot");
    	for(var b=0;b<a.length;b++)
    	{
    		a[b].addEventListener("mouseover",clicko,false);
    		a[b].addEventListener("mouseout",blipo,false);
    	}
    	function clicko()
    	{
    		this.style.color="#969393";
    		var k=this.className;
    		var b="div."+k;
    		var du=document.querySelectorAll(b);
    		spot.style.filter="opacity(0)";
    		du[0].style.filter="opacity(1)";
    	}
    	function blipo()
    	{
           this.style.color=ic;
           var k=this.className;
    	   var b="div."+k;
    	   var du=document.querySelectorAll(b);
    	   spot.style.filter="opacity(1)";
    	   du[0].style.filter="opacity(0)";
    	}
  var c = document.getElementById("hello");
  var ctx = c.getContext("2d");
  ctx.lineWidth=10;
ctx.beginPath();
ctx.strokeStyle="#969393";
ctx.arc(250,250,205, 0.7466* Math.PI, 1.41333* Math.PI);
ctx.stroke();
ctx.beginPath();
ctx.arc(250,250,179,1.42733* Math.PI,2.1333*Math.PI);
ctx.stroke();
ctx.beginPath();
ctx.arc(250,250,205,2.14733* Math.PI,0.72333*Math.PI);
ctx.stroke();
var d= document.getElementById("hello1");
  var ctx1 = d.getContext("2d");
  ctx1.lineWidth=10;
ctx1.beginPath();
ctx1.arc(250,250,190, 0, 0.66* Math.PI);
ctx1.stroke();
ctx1.beginPath();
ctx1.arc(250,250,220,0.68* Math.PI,1.33*Math.PI);
ctx1.stroke();
ctx1.beginPath();
ctx1.arc(250,250,190,1.35* Math.PI,1.97*Math.PI);
ctx1.stroke();
     var slideIndex = 0;
     carousel();

   


    </script>
</html>
