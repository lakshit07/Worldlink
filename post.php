<html>
<head>
	<title>Posting</title>
</head>
<body>
<?php
session_start();
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("user"); 
$username=$_SESSION['username'];
$post=$_POST['post'];
date_default_timezone_set("Asia/Kolkata"); 
$time=date("d-m-Y  g.i a",time());

$query="INSERT INTO $username (post,posttime,postby) values ('$post','$time','$username')";

if(!mysql_query($query,$conn))
{
	echo "ERROR : ".mysql_error();
}
else
{   
	header("location:wall.php");
}



?>
</body>
</html>