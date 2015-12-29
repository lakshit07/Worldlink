<html>
<head>
	<title>Update information</title>
</head>
<body bgcolor="black" text="white" align="center">
<?php


session_start();
mysql_connect("localhost","root","","user");
mysql_select_db("user");
$username=mysql_real_escape_string($_SESSION['username']);

$dob=$_POST['date'];
$mob=$_POST['month'];


if($_POST['nemail']==NULL)
{
	$email=$_SESSION['email'];
}
else
{
	$email=$_POST['nemail'];
}
if($_POST['year']==NULL)
{
	$yob=$_SESSION['year'];
	$birth=$dob." - ".$mob."-".$yob;
}
else
{
	$yob=$_POST['year'];
    $birth=$dob." - ".$mob."-".$yob;

}
if($_POST['pp']==NULL)
{
	$dp=$_SESSION['dp'];
}
else
{
	$dp=$_POST['pp'];
}


$query="UPDATE members SET email='$email',birthday='$birth',dp='$dp' where username='$username'";

if(!mysql_query($query))
{
	die('Error: ' . mysql_error());
}

echo "Changes updated";
?>

</body>
</html>