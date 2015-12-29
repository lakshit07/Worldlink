<html>
<head>
	<title>Adding post</title>
</head>
<body bgcolor=black text=white align=center>
<form method=POST action=publicpost.php?username=	
	<?php 
	session_start();mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username=mysql_real_escape_string($_REQUEST['username']);
    echo $username.">";
    setcookie("username",$username);
    ?>
	<textarea name=post rows=10 cols=150 placeholder="your text goes here"></textarea>
	<br><br><br>
	<input type="submit" value="POST!">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Reset"><br><br><br>
	<hr>
</form>	

	
</body>
</html>