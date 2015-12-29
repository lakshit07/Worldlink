<html>
<head>
	<title>finding friend</title>
	<style type="text/css">
<!-- 
A{text-decoration:none} 
-->
</style>
</head>
<body bgcolor="black" text=white alink=white vlink=white link=white>
	<h3>
<?php

session_start();
mysql_connect("127.0.0.1","root","");
mysql_select_db("user"); 
$fuser=$_POST['finduser'];
$finduser=htmlspecialchars($fuser);
$query=mysql_query("SELECT * from members where username LIKE '%$finduser%'");
echo  "<div align'center'>Search result for $finduser</div><br><br><ul>";
$count=0;
while($user=mysql_fetch_assoc($query))
{   $count++;
	$pic=$user['dp'];
	$name=$user['username'];
	$pass=$user['password'];
	echo "<li><img src=$pic.jpg height=20 width=20>&nbsp;&nbsp;<a target='left' href='publicoption.php?username=$name'>$name</a></li>";
}

if($count==0)
{
	die("Could not find anyone with this username. Click <a href='search.php'><u>here</u></a> to try again!<br><hr>");
}

echo "</ul><hr>";
?>
</h3>
</body>
</html>