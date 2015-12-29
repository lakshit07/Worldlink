<html>
<head>
	<title>Sending friend request</title>
</head>
<body bgcolor="black" text="white" align="center">
<?php
session_start();
mysql_connect("127.0.0.1","root","");
mysql_select_db("user");
$username=$_REQUEST['username'];

$visitor=$_REQUEST['visitor'];

mysql_query("INSERT INTO $username (friendreq,status) values ('$visitor','no')");

mysql_query("INSERT INTO $visitor (friendreq,status) values ('$username','no')");


echo "<h2>Friend Request sent</h2>";
?>

</body>
</html>