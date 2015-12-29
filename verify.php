<html>
<head>
	<title>Verification</title>
</head>
<body>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
// Check connection
mysql_select_db("user");

$ocode=$_SESSION['hashcode'];
$ecode=mysql_real_escape_string($_POST['encode']);

if($ocode==$ecode)

{


$sql = "INSERT into  members (username, email, password, birthday, gender,dp)
VALUES ('$username','$email','$password1','$birth','$gender','$pp')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }


$table="CREATE TABLE $username
        (
        post varchar(5000),
        posttime varchar(30),
        postlike INT,
        friend varchar(100),
        friendreq varchar(100),
        message varchar(1000),
        messagefrom varchar(100))";

 if (!mysql_query($table,$conn))
  {
  die('Error: ' . mysql_error());
  }

echo "<h2>Welcome to Worldlink!</h2><br><br>";

echo"<br><br><a href='login.php'> Click here to login</a>";



}



?>

</body>
</html>