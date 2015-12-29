<html>
<head>
	<title>Worldlink</title>
	<style type="text/css">
<!-- 
A{text-decoration:none} 
-->
</style>
</head>
<body bgcolor=black text=white alink=white vlink=white link=white align=center>
	<?php
    session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username=$_SESSION['username'];
    $query=mysql_query("SELECT * FROM members WHERE username='$username'");
    $image=mysql_fetch_assoc($query);
    echo '<a href="welcome.php" target=_parent><img src='.$image["dp"].'.jpg height=200 width = 175></a>';   
    echo "<br><br><font size=4 face='Lucida Calligraphy'>Welcome <a href='welcome.php' target=_parent> $username</a><br></font>"; 
    mysql_free_result($query);
    ?>
<br><br><br>
<a href="info.php" target="rightbottom">INFO</a>
<br><br><br>
<a href="edit.php" target="rightbottom">Edit your Profile</a>
<br><br><br>
<a href="frequest.php" target="rightbottom">Friend Requests</a>
<br><br><br>
<a href="search.php" target="rightbottom">Find your Friends</a>
<br><br><br>
<a href="friends.php" target="rightbottom">View your Friends</a>
<br><br><br>
<a href="changepass.php" target="rightbottom">Change your Password</a>

</body>
</html>