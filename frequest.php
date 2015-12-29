<meta http-equiv="refresh" content="5">
<html>
<head>
	<title>accept or decline request</title>
	<style type="text/css">
<!-- 
A{text-decoration:none} 
-->
</style>
</head>
<body bgcolor=black text=white align=center alink=white vlink=white link=white>
	<?php
session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 

    $username=$_SESSION['username'];
    $query=mysql_query("SELECT * from $username where status='no'");
    echo "<h2>Pending friend requests</h2><hr><ul>";
    $count=0;

    while ($friend=mysql_fetch_assoc($query)) 
    {   $request=$friend['friendreq'];
        $count++;
        $query1=mysql_query("SELECT * from members where username='$request'");
        $resource=mysql_fetch_assoc($query1);
        $img=$resource['dp'];
    	echo "<li>&nbsp;&nbsp;<img src=$img.jpg height=50 width=50>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$request</li>";
    	echo "<br><a href='accept.php?username=$username&visitor=$request'>ACCEPT &nbsp;&nbsp;<a href='decline.php?username=$username&visitor=$request'> DECLINE<hr>";
    }
if($count==0)
{
    echo "<h2>No friend requests!</h2>";
}
    
    

	?>
</ul>
</body>
</html>