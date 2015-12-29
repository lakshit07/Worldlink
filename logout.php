
<html>
<head>
	<title>Logout</title>
	<style type="text/css">
<!-- 
A{text-decoration:none} 
-->
</style>
</head>
<body bgcolor="black" text="white" alink=white vlink=white link=white align="center">
<h2>

<?php
session_start();

if($_SESSION['username']||$_SESSION['password'])
{session_destroy();
 
//header("location:login.php/notify=You are logged out");

echo "You are logged out";
}



?>

</h2>


<br><br>
<img src="tick.png" height=150 width=150>

<br><br><a href="login.php"><h3>Login again?</h3></a>

</body>
</html>

