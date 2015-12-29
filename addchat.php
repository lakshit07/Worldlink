<html>
<head>
	<title>adding chat to mysql</title>
</head>
<body>

	<?php
	 session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username = $_COOKIE['username'];
    $visitor = $_COOKIE['visitor'];
    $message=$_REQUEST['message'];

    date_default_timezone_set("Asia/Kolkata"); 
    $time=date("d-m-Y  g:i:s a",time());
    $abtime=time();

   
   $query1=mysql_query("INSERT INTO $username(message,messageat,messagefrom,messageto,messagetime) values ('$message','$time','$visitor','$username','$abtime')");

   	if(!$query1)
   	{
   		echo "ERROR : ".mysql_error();
   	}

   	$query2=mysql_query("INSERT INTO $visitor(message,messageat,messagefrom,messageto,messagetime) values ('$message','$time','$visitor','$username','$abtime')");

   	if(!$query2)
   	{
   		echo "ERROR : ".mysql_error();
   	}
    header("location:chattext.php");

    ?>

</body>
</html>