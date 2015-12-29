<html>
<head>
	<title>like increment</title>
</head>
<body bgcolor=black text=white align=center>

<?php

session_start();  
    $conn=mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username=mysql_real_escape_string($_REQUEST['username']);
    $post=$_SESSION['post'];
    $query=mysql_query("SELECT * FROM $username WHERE post=$post");
    $data=mysql_fetch_assoc($query);
    $likecounter=$data['postlike'];
    $likecounter++;
    $query="UPDATE $username Set postlike=$likecounter";

    if(!mysql_query($query,$conn))
    {
    	echo "ERROR : ".mysql_error();
    }    
  else
  {  
  	header("location:publicwall.php");
  }


?>


</body>
</html>