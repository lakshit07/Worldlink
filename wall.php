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
    $username=$_SESSION['username'];
    $query=mysql_query("SELECT * FROM $username where post is not null");
    $count=0;
    if(mysql_num_rows($query))
     {   while ($data=mysql_fetch_assoc($query)) 
       {
    	$post=$data['post'];
    	$time=$data['posttime'];
    	$writer=$data['postby'];

        
           
        echo"<font size=4 face='Comic sans MS'>$post</font><br>At : $time ";
        
        if(!($writer==$username))
           { echo "<br>By : $writer";}
        
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='delete.php?post=$post'>Delete</a><hr>" ;
        $count++; 
        
      }  
    }
    if($count==0)
    	{echo "It seems to be lonely here";}


    echo "<footer><a href='addpost.php'><h3>Post<hr><h3></a></footer>";




?>
</body>
</html>