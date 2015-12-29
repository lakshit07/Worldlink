<html>
<head>
	<title>Worldcheck</title>
  <style type="text/css">
<!-- 
A{text-decoration:none} 
-->
</style>
</head>
<body text='white' bgcolor='black' align='center' alink='white' vlink='white' link='white'>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";
session_start();
// Create connection
$conn = mysql_connect($servername, $username, $password, $dbname);
// Check connection
mysql_select_db("user");

$username=mysql_real_escape_string($_POST['username']);

$email=mysql_real_escape_string($_POST['email']);

$password1=$_POST['password1'];
$password2=$_POST['password2'];
$dob=mysql_real_escape_string($_POST['date']);
$mob=mysql_real_escape_string($_POST['month']);
$yob=mysql_real_escape_string($_POST['year']);
$birth=$dob." - ".$mob."-".$yob;
$gender=mysql_real_escape_string($_POST['sex']);
$pp=mysql_real_escape_string($_POST['pp']);

date_default_timezone_set("Asia/Kolkata"); 
$year=date("Y",time());
$month=date("M",time());
$date=date("d",time());


if(!($username&&$email&&$password1&&$password2&&$dob&&$mob&&$yob&&$gender&&$pp))
{
	echo "<h2>Enter all the details</h2>";
	echo "<br><br><br><a href='register.php'>Back</a>";

}
else if(!($password1==$password2))
{
	echo "<h2>Passwords don't match</h2>";
	echo "<br><br><br><a href='register.php'>Back</a>";

}
else if ($yob<1900) {
  echo "<h2>Please enter the correct year of birth!</h2>";
  echo "<br><br><br><a href='register.php'>Back</a>";
}

else if ($yob>($year-18))
 {
  echo "<h2>You are underage. Sorry but you can't join Worldlink!</h2>";
  echo "<br><br><br><a href='register.php'>Back</a>";
}

else if($yob>$year)
{
echo "<h2>We are yet not yet advanced to travel time!</h2>";
echo "<br><br><br><a href='register.php'>Back</a>";

}

else if ($username&&$email&&$password1&&$password2&&$dob&&$mob&&$yob&&$gender&&$pp)
{
	
//$hashtext=hash("sha256",'$username.$password1');
//$code=substr($hashtext,rand(1,50),5);
//$_SESSION['hashcode']=$code;
//$mail="Welcome to Worldlink. Your security code for registration is $code";
//$header="FROM : Worldlink";
//mail($email,'REGISTRATION CODE',$mail,$header);
//header("location:entercode.php");

$table="CREATE TABLE $username
        (
        post varchar(5000),
        posttime varchar(30),
        postby varchar(100),
        friend varchar(100),
        friendreq varchar(100),
        status varchar(20),
        message varchar(1000),
        messageat varchar(30),
        messagetime BIGINT,
        messageto varchar(100),
        messagefrom varchar(100))";

if(!mysql_query($table))
{
  if(mysql_error()=="Table '$username' already exists")
  {
    die("<h2>Oops! Username already exists, please choose a different username</h2><br><br><a href='register.php'><h3>back</h3></a>");

  }
  else
  {
    die("ERROR : ".mysql_error());
  }
}
 
  
  $sql = "INSERT into  members (username, email, password, birthday, gender,dp)
VALUES ('$username','$email','$password1','$birth','$gender','$pp')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }




 
echo "<h2>Welcome to Worldlink!</h2><br><br>";

echo"<br><br><a href='authenticate.php?username=$username&password=$password1'>Lets go!</a>";

}


?>


</body>
</html>