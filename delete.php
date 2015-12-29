<html>
<head>
	<title>Deleting post</title>
</head>
<body bgcolor="black" text="white" align="center">
	<?php
session_start();  
    $conn=mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username=$_SESSION['username'];
    $post=$_REQUEST['post'];
    $query=mysql_query("DELETE FROM $username WHERE post='$post'");

    if(!$query)
    {
    	echo "You don't have the access";
    	echo "<br>ERROR : ".mysql_error();
    }    
   
   else
   {

   	header("location:wall.php");
   }





	?>
</body>
</html>