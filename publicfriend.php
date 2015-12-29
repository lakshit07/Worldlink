<meta http-equiv="refresh" content="5">
<html>
<head>
	<title>View friends</title>

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
    $username=mysql_real_escape_string($_REQUEST['username']);
    echo "<h2>Friend List</h2><hr><ul>";

    $query=mysql_query("SELECT * from $username where friend is not null");


   while($friend=mysql_fetch_assoc($query))
   {
   	$fr=$friend['friend'];
   	$query1=mysql_query("SELECT * from members where username='$fr'");
   	$resource=mysql_fetch_assoc($query1);
   	$pic=$resource['dp'];
    echo "<li><img src=$pic.jpg height=30 width=30>&nbsp;&nbsp;<a target='left' href='publicoption.php?username=$fr'>$fr</a></li>";
   }


echo "<br><hr>"




	?>

</body>
</html>