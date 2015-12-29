<html>
<head>
	<title>Posting</title>
</head>
<body bgcolor=black text=white align=center>
<?php
session_start();
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("user"); 
$username=mysql_real_escape_string($_COOKIE["username"]);
$post=$_POST['post'];
date_default_timezone_set("Asia/Kolkata"); 
$time=date("d-m-Y  g.i a",time());
$writer=$_SESSION['username'];
$query="INSERT INTO $username (post,posttime,postby) values ('$post','$time','$writer')";
if(!mysql_query($query,$conn))
{
	echo "ERROR : ".mysql_error();
}
else
{   echo "<h2>Post successful</h2>";
    
	header("location:publicwall.php?username=$username");
}




?>
</body>
</html>
