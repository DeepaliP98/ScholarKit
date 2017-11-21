<!-- This page logs you out-->
<?php
session_start();
session_unset();
echo ("<script language='JavaScript'> window.alert('Logout Successful!');window.location.href='home.php';</script>");
?>