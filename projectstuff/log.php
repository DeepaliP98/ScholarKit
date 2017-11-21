<!-- This Page Verifies login -->
<?php
session_start();
extract($_GET);

$f = file("users.csv");
$c = count($f)-1;
$found = 0 ;
$id = "";
while($c > 0)
{
	if($fname == explode(",",$f[$c])[1] && $lname == explode(",",$f[$c])[2] && $epwd == trim(explode(",",$f[$c])[3]))
	{
		$found = 1 ;$id = explode(",",$f[$c])[0];break ;
	}
	$c = $c - 1 ;
}

if($found == 1)
{
	$_SESSION["current"] = "$id" ;$_SESSION["profiled"] = "not set";
	$f = file("details.csv");$found = 0 ;
	$c = count($f)-1;
	while ($c>0) {
			if(explode(",",$f[$c])[0] === $id)
			{
				$_SESSION["profiled"] = "set";$found = 1 ; break ;
			}
			$c = $c - 1;
		}
		//checked for profiled and continue	
		if($found == 1)
			echo ("<script language='JavaScript'> window.alert('Welcome Back!');window.location.href='home.php';</script>");
		else
			echo ("<script language='JavaScript'> window.alert('Welcome Back!');window.location.href='Profile.php';</script>");
}
else
{
	echo ("<script language='JavaScript'> window.alert('Login unsuccessful');window.location.href='Login.html';</script>");
}
?>