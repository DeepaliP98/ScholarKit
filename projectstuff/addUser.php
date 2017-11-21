<!-- This page adds user details to csv and sends to profiling -->
<?php 

extract($_GET);

$f = file("users.csv");
$a = fopen("users.csv","a+");
$c = count($f)-1;$found = 0 ;
while($c > 0)
{
	if($fname == explode(",",$f[$c])[1] && $lname == explode(",",$f[$c])[2])
	{
		$found = 1 ;
	}
	$c = $c - 1 ;
}

if($found == 1)
{
	echo ("<script language='JavaScript'> window.alert('Sorry! This username already exists');window.location.href='SignUpPage.html';</script>");
}
else
{
	session_start();
	$s = $f[count($f)-1] ;
	//echo "$s";
	$u = explode(",", $s);
	$no =  ($u[0]+1) ;
	$arr = array("\n".$no,$fname,$lname,$epwd);
	$en = implode(",",$arr);
	//echo $en ;
	fwrite($a, $en);
	$_SESSION["current"] = "$no";
	$_SESSION["profiled"] = "not set";
	echo ("<script language='JavaScript'> window.alert('Welcome $fname $lname!');window.location.href='Profile.php';</script>");
}
?>