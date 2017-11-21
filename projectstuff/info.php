<?php
session_start();
extract($_POST);
$_SESSION["na"] = $_POST["na"];
//echo $_SESSION["na"] ;

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
      	margin:0;
      	background:url("appubg.jpg");
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
                height:50px;
                width:50px;
                }

            #show{
                
                width: 6in;
                height: 10in;
                border-radius:25px;
                float: center;
                
            }
            td,th{
            	/*position: absolute;*/
            	background:url("div.jpg");
                opacity:0.9;
                border-bottom: 2px solid black ;
    			border:2px solid black;
                text-align: center;
                padding:12px 12px 12px 12px;
            }





	</style>


</head>
<body>
    <div class="name"><img src="logo.png" width="100" height="100" class="logo"></img>Scholarkit</div>
    <ul id="list_bar">
      <li><a class="nav" href="home.php">Home</a></li>
      <li><a class="nav" href="scorlarship.php"> Scholarships</a></li>
      <li><a class="nav" href="internship.php"> Internships</a></li>
      <li><a class="nav" href="Profile.php"> Profile</a></li>
      <li><a class="nav" href="emo.html">Contact us</a></li>
      <li><a class="nav" href="about us.html">About us</a></li>
    </ul>

<br><br><br>
    <center><div id="show"><b><center>
    <?php
         $name = $_SESSION["na"];
         if (($handle = fopen("interns.csv", "r")) !== FALSE) 
                 {  
                 	
                 	echo "<br><br><table>";
                 	echo "<tr><th>Name</th><th>CGPA Cut Off</th><th>Age Limit</th><th>Branch/Domain</th>";
                    fgetcsv($handle, 1000, ",");
                    $data = fgetcsv($handle, 1000, ",");
                    while($data[3] == "Age Limit")
                    {
                      while(($data = fgetcsv($handle, 1000, ",")) !== FALSE)
                      {
                        $data = fgetcsv($handle, 1000, ",");
					     //echo $data[1];
					     while(preg_match("/^$name/",$data[1]) == 1)
					     {
					     	
					     	echo "<tr><td>".$data[1]."</td>\n";
					     	echo "<td>".$data[2]."</td>\n \n";
					     	echo "<td>".$data[3]."</td>\n \n";
					     	echo "<td>".$data[6]."</td>\n \n";
					     	echo "</tr>";

					     	$data = fgetcsv($handle, 1000, ",");

					     }
					 }
					}
					echo "</table>";
				}



    ?>
    </center></b>
    </div></center>

</body>
<script>
  
</script>

</html>