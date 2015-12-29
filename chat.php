<html>
<head>
	<title>chat</title>
</head>


	<frameset rows="70%,*">

	<?php
 session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username=$_REQUEST['username'];
    $visitor=$_REQUEST['visitor'];
    setcookie("username",$username);
    setcookie("visitor",$visitor);

	
	echo "<frame frameborder=1 name='above' src='chatdisplay.php?username=$username&visitor=$visitor'>";
	echo "<frame frameborder=1 name='below' src='chattext.php'>";
    
	?>
</frameset>

</html>