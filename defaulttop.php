<html>
<head>
	<title>Header Message</title>
	<style type="text/css">
<!-- 
A{text-decoration:none} 
-->
</style>
</head>
<body bgcolor="black" text="white" align="right" alink=white vlink=white link=white>
<img src="worldlink.jpg" align="left" onClick="welcome.php" height="71" width="150">
<div align='center'><font size='7' face='WildWest'>Worldlink</font> </div>

	<div align='right' face='Bedrock'><font size='4'>
	<a href="welcome.php" target="_parent">Home</a>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

   <!-- <?php

    session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username=$_SESSION['username'];

    date_default_timezone_set("Asia/Kolkata"); 
    $currtime=time();

    $query=mysql_query("SELECT * from $username where messagetime<'$currtime' and message is not null");

    if(mysql_num_rows($query))
    {
    	echo "<a href='newmessage.php?username=$username&currtime=$currtime' target='rightbottom'>New Message</a>";
    }
    else
    {
    	echo "ERROR : ".mysql_error();
    }


    ?>-->

	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	<a href="logout.php" target="_top">Logout</a>
	
</div>
	</font>
</body>
</html>