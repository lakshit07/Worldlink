<html>
<head>
	<title>Information</title>
    <style type="text/css">
<!-- 
A{text-decoration:none} 
-->
</style>
</head>
<body bgcolor="black" text="white" align="center">

<?php
    session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username=$_REQUEST['username'];
    $query=mysql_query("SELECT * FROM members WHERE username='$username'");
    $data=mysql_fetch_assoc($query);
    echo " <h1><b>PROFILE</b></h1>";

  echo "<hr size='30 noshade'><br>";
 echo '<br><h3>'; 
 echo "Username : ".$data["username"];
 echo "<br><br>Email ID : ".$data['email'];
 echo  "<br><br>Date of Birth : ".$data['birthday']; 
 echo " <br><br>Gender : ".$data['gender'];

mysql_free_result($query);
    ?>
</h3>

</body>
</html>