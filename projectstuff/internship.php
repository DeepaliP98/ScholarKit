<!DOCTYPE html>
<?php session_start(); ?>
<html>
    <head>
        <title>Internship page</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href='https://fonts.googleapis.com/css?family=Covered By Your Grace' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Carrois Gothic SC' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Chau Philomene One' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Chivo' rel='stylesheet'>
         <link href='https://fonts.googleapis.com/css?family=Cantora One' rel='stylesheet'>

        <style>
       
            #trends{
                background-color:black;
                filter: opacity(0.75);
                font-family: 'Julius Sans One';
                color: white;
                width: 6in;
                height: 3in;
                border-radius:10px;
                float: right;
                overflow: auto;
                
            }
            
            #quest{
                background:url("div.jpg");
                opacity:0.9;
                width: 5in;
                height: 3in;
                border-radius:25px;
               
            }
            #sub:hover{
                
                background: #E7F619;
                transition: all 0.40s;
            }
            #scroll{
                width: 5in;
                height: 3in;
            }
            #branch{
                float: right;
            }
            
            #txtar{
                width: 2in;
                height: 1in;
            }
            
            body{
                background:url("appubg.jpg");
                font-family: "Verdana";
            }
            #you{
                background-color: black;
                filter: opacity(0.75);
                color: white;
                width: 6in;
                height: 3in;
                border-radius:10px;
                float: center;
                overflow: scroll;
                padding-left: 40px;
                font-family: 'Julius Sans One';
                
            }
            .mySlides{
                width:100%;
                height:6in;
                border:10px groove #676C67;
            }
            #uL {
                list-style-type: none;
                padding: 0;
                margin: 0;
                visibility:hidden;
            }
            #uL li a {
                border: 1px solid #ddd; 
                margin-top: -1px;
                background-color: #f6f6f6;
                padding: 12px;
                text-decoration: none; 
                font-size: 18px; 
                color: black; 
                display: block;
                
            }

            #uL li a:hover:not(.header) {
                background-color: #eee; 
            }
            #inps{
                 
                 width: 4in;
                 font-size: 16px; 
                 padding: 12px 12px 20px;
                 border: 1px solid #ddd;
            }
            #imsub{
                 font-size: 16px; 
                 padding: 12px 12px 20px;
                 border: 1px solid #ddd;
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
            div.name{
                 background-color:#393B3A;
                 color:#C6B9BE;
                 font-size:400%;
                 font-family:'Julius Sans One';
                 padding-bottom:1%;
                 width:100%;
                           }

            img.logo{
                height:12%;
                }
                h1{
                  font-family: 'Julius Sans One';
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



    <marquee scrolldelay=200 scrollamount=50><h1><center>INTERNSHIP PAGE</center></h1></marquee>



    <div id="ss">

     <img class="mySlides" src="IIMB.jpg">
     <img class="mySlides" src="IIT.jpg">
     <img class="mySlides" src="GSOC.png">
     <img class="mySlides" src="Intel.jpg">
     <img class="mySlides" src="IISC.jpg">
     <img class="mySlides" src="IBM.jpg">
     <img class="mySlides" src="Biocon.jpg">
     
    </div>
        <br>
        <br>
        <br>
        <div id="trends">
            
            <h4><center><b> Trending</b></center></h4> 
            <div id-="scroll">
            <marquee direction="down" ><ul>
                <?php

                if (($handle = fopen("interns.csv", "r")) !== FALSE) 
                 {
                    fgetcsv($handle, 1000, ",");
                    $data = fgetcsv($handle, 1000, ",");
                    echo "<ul>";
                    while(($data = fgetcsv($handle, 1000, ",")) !== FALSE)
                      {

                        $data = fgetcsv($handle, 1000, ",");
                        $v = $data[2];
                        $j = $data[1];
                        if($v > 9.5)
                          echo "<b><li>".$j."</b>";
                      }
                    
                    
                    echo "</ul>";
                    fclose($handle);
                 }

                ?>
            </ul>
            </marquee>
            </div>
        </div>
        
        <div id="you">
            
            <h4><center><b>Recommended For You</b></center></h4> 
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
                if (($handle = fopen("interns.csv", "r")) !== FALSE) 
                 {
                    fgetcsv($handle, 1000, ",");
                    $data = fgetcsv($handle, 1000, ",");
                    while($data[3] == "Age Limit")
                    {
                      while(($data = fgetcsv($handle, 1000, ",")) !== FALSE)
                      {
                        $data = fgetcsv($handle, 1000, ",");
                        $v = $data[2];
                        $j = $data[1];
                        if($v <= $cg)
                         echo $j."<br>";
                      }

                    }
                    fclose($handle); 
                 } 
                ?>

            
        </div>
        <br><br>
        <br>
        <div id="search" >
       <form method="POST" action="info.php">
    <input type="text" name="na" placeholder="Search.." id="inps" onfocus="fn2()"  onkeyup="fn1()">
    <input type="submit" id="imsub" value="GO!">
                  <ul id="uL" name="uni">
                  <li><a id="Asian" onclick="fn4(this.id)">Asian</a></li>
                  <li><a id="Biocon" onclick="fn4(this.id)">Biocon</a></li>
                  <li><a id="Bosch" onclick="fn4(this.id)">Bosch</a></li>
                  <li><a id="Google" onclick="fn4(this.id)">Google</a></li>
                  <li><a id="IIM" onclick="fn4(this.id)">IIM</a></li>
                  <li><a id="IISC" onclick="fn4(this.id)">IISC</a></li>
                  <li><a id="IISC Bangalore" onclick="fn4(this.id)">IISC Bangalore</a></li>
                  <li><a id="IISC Ahmedabad" onclick="fn4(this.id)">IISC Ahmedabad</a></li>
                  <li><a id="IISC Delhi" onclick="fn4(this.id)">IISC Delhi</a></li>
                  <li><a id="IISC Kolkatta" onclick="fn4(this.id)">IISC Kolkatta</a></li>
                  <li><a id="IISC Hyderabad" onclick="fn4(this.id)">IISC Hyderabad</a></li>
                  <li><a id="IIT" onclick="fn4(this.id)">IIT</a></li>
                  <li><a id="IIT Kanpur" onclick="fn4(this.id)">IIT Kanpur</a></li>
                  <li><a id="IIT R" onclick="fn4(this.id)">IIT R</a></li>
                  <li><a id="Intel" onclick="fn4(this.id)">Intel</a></li>
                  <li><a id="Johnson and Johnson" onclick="fn4(this.id)">Johnson and Johnson</a></li>
                  <li><a id="LNT" onclick="fn4(this.id)">LNT</a></li>
                  <li><a id="Medicare" onclick="fn4(this.id)">Medicare</a></li>
                  <li><a id="Morgan Stanley" onclick="fn4(this.id)">Morgan Stanley</a></li>
                  <li><a id="NIT" onclick="fn4(this.id)">NIT</a></li>
                  <li><a id="Red Cross" onclick="fn4(this.id)">Red Cross</a></li>
                  <li><a id="TCS" onclick="fn4(this.id)">TCS</a></li>
                  </ul>
       </form>                
        </div>
    </body>
    <script>
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
     var slideIndex = 0;
     carousel();

    function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); 
        }




   function fn1() {
    
    var input, filter, ul, li, a, i;
    input = document.getElementById('inps');
    filter = input.value.toUpperCase();
    ul = document.getElementById("uL");
    li = ul.getElementsByTagName('li');

    
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            //li[i].visible="visible";
            li[i].style.display = "";
        } 
        else {
            li[i].style.display = "none";
                }
        }
        }




    function fn2()
    {
    ul = document.getElementById("uL");
    li = ul.getElementsByTagName('li');
    ul.style.visibility="visible";
    }

    function fn3()
    {
    ul = document.getElementById("uL");
    li = ul.getElementsByTagName('li');
    ul.style.visibility = "hidden";
    }

      function fn4(iD)
    {
      
      t = document.getElementById(iD);
        x = document.getElementById("inps")
      x.value= t.id;
        console.log(x.value)
      console.log(t.id);
    }

    </script>
    
    
  
</html>
