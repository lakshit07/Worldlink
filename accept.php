<html>
<head>
	<title>Accepting friend request</title>
</head>  			
<body>
<?php
session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username=($_REQUEST['username']);
    $visitor=($_REQUEST['visitor']);
    
    
    
    if(mysql_num_rows(mysql_query("SELECT * FROM $visitor")))
    {
    $query2=mysql_query("UPDATE $visitor SET friend='$username',status='yes' where friendreq='$username'");
    }
    else
    {
    mysql_query("INSERT INTO $visitor(friend,friendreq,status) values ('$username','$username','yes')");
    }

    

     if(mysql_num_rows(mysql_query("SELECT * FROM $username")))
     {
        $query=mysql_query("UPDATE $username SET status='yes',friend='$visitor' WHERE friendreq='$visitor'");
     }
    
   else
   {
    mysql_query("INSERT INTO $username(friend,friendreq,status) values ('$visitor','$visitor','yes')");
   } 


   header("location:frequest.php");


?>


</body>
</html>