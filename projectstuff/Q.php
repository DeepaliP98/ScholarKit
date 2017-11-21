<!DOCTYPE html>
<!-- This Page Shows A Table of all the qualifications-->
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html>
<head>
	<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
	<link href='https://fonts.googleapis.com/css?family=Julius Sans One' rel='stylesheet'>
         
</head>
<style type="text/css">
body{
                background-color: silver;
            }
	#qs{
		text-align: left;
		margin:0 auto;
}
th{
	font-family: 'Julius Sans One';
}
td{
	white-space:nowrap;
}
</style>
<body>
<table id = "qs" border="0" cellspacing="10" >
	<tr>
		<th>Exam Name</th>
		<th>Rank</th>
		<th>Grade</th>
		<th>Percentage</th>
	</tr>
</table>
</body>
<script type="text/javascript">
	var d = document.getElementById("qs");

	var data = "<?php session_start(); 
				$id = $_SESSION["current"] ; 
				$f = file('qualifications.csv'); 
				$c = count($f)-1; 
				$d = ""; 
				while($c > 0)
					{ 
						if(explode(",", trim($f[$c]))[0]==$id)
						{
							$d = $d."-".trim($f[$c]);
						}
						$c=$c-1;
					}
				echo trim($d); 
					?>";
	data = data.split("-");
	var i = 1 ;
	if(data.length >0)
	{
		while(i < data.length)
		{
			var arr = data[i].split(",");
			var l = "<tr><td>"+arr[1]+"</td><td>"+arr[2]+"</td><td>"+arr[3]+"</td><td>"+arr[4]+"</td></tr>";
			d.innerHTML+=l;
			i=i+1;
		}
	}
</script>
</html>