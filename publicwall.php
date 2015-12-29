<meta http-equiv="refresh" content="5">
<html>
<head>
	<title>Wall</title>
	 <style type="text/css">
<!-- 
A{text-decoration:none} 
-->
</style>
</head>
<body text=white bgcolor=black align=center alink=white vlink=white link=white>

<?php

    session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username=mysql_real_escape_string($_REQUEST['username']);
    $query=mysql_query("SELECT * FROM $username WHERE post is NOT NULL" );
    $count=0;
    while ($data=mysql_fetch_assoc($query)) 
    {
    	$post=$data['post'];
    	$time=$data['posttime'];
    	$writer=$data['postby'];

        
           echo"<font size=4 face='Comic sans MS'>$post</font><br>At : $time ";
        echo "<br>By :  $writer";
        $count++;
        
        echo "<br><hr>"; 
        
    	
    	
    }
    if($count==0)
    	{echo "It seems to be lonely here";}


    echo "<footer><a href='addpublicpost.php?username=$username'><h3>Post<hr><h3></a></footer>";




?>
</body>
</html>