<html>
<head>
	<title>accept or decline request</title>
</head>
<body bgcolor=black text=white align=center>
	<?php
session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 

    $username=$_SESSION['username'];
    $query=mysql_query("SELECT * from $username where status='no'");
    echo "<h2>Pending friend requests...</h2><hr>";

    while ($friend=mysql_fetch_assoc($query)) 
    {   $request=$friend['friendreq'];
        $query1="SELECT * from members where username='$visitor'";
        $resource=mysql_fetch_assoc($query1);
        $img=$resource['dp'];
    	echo "<ul>&nbsp;&nbsp;<img src=$img.jpg height=15 width=15>&nbsp;&nbsp;$request";
    	echo "<br><a href=accept.php?username=$username&visitor=$request>ACCEPT &nbsp;&nbsp;<a href=decline.php?username=$username&visitor=$request> DECLINE";
    }


	?>

</body>
</html>