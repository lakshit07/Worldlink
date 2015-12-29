<html>
<head>
	<title>Members</title>
</head>
<body bgcolor="white" text="black" align="center">
<h2>
<?php

session_start();


if ($_SESSION['username']||$_SESSION['password']) 
{
	$username=$_SESSION['username'];
	echo "You are logged in as ".$_SESSION['username'];
?>	  
     <br><br>
   
    <img src="loginaccept.png" height=100 width=100>

<br>
   
<?php
	echo "<br><br><a href='logout.php'> Logout </a>";
	echo "<title>$username</title>";
}


else
{
	//header("location:login.php/notify=Oops! Something went wrong!");
     echo "Oops Something went wrong";
}




?>

</h2>
</body>
</html>


