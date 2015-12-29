<html>
<head>
	<title>Confirmation of password change</title>
</head>
<body text=white bgcolor=black align=center>


<?php


session_start();

$opass1=mysql_real_escape_string($_POST['opass']);
$npass1=mysql_real_escape_string($_POST['npass1']);
$npass2=mysql_real_escape_string($_POST['npass2']);


mysql_connect("127.0.0.1","root","");      
mysql_select_db("user");
$user=$_SESSION['username'];
$realpass=$_SESSION['password'];


if(!($npass2==$npass1))
{
	die("<h1>New passwords do not match</h1>");
}

if(!($realpass==$opass1))
{
	die( "<h1>Invalid access</h1>");
}
else
{
	$query="UPDATE members set password='$npass1' where username='$user'";
	if(!mysql_query($query))
{
	die('Error: ' . mysql_error());
}
else{
	echo "<h1>Your password has been changed successfully</h1>";
}
}

?>

</body>
</html>