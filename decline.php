<html>
<head>
	<title>Accepting friend request</title>
</head>  			
<body>
<?php
session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username=$_REQUEST['username'];
    $visitor=$_REQUEST['visitor'];
    
    	 mysql_query("UPDATE $username SET status='decline' WHERE friendreq='$visitor'");
    
    header("location:frequest.php");


?>


</body>
</html>