<html>
<head>
	<title>Display new message from</title>
</head>
<body>
	<ul>
  <?php
	session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 

    $username=$_REQUEST['username'];
    $currtime=$_REQUEST['currtime'];

    $query=mysql_query("SELECT DISTINCT messagefrom from $username where messagetime>$currtime");
     
    while($resource=mysql_fetch_assoc($query))
    {
       $messagefrom=$resource['messagefrom'];
      // echo "<li><a href='chat.php?username=$messagefrom&visitor=$username'>$messagefrom</a></li>";
       echo $messagefrom.$username;
    }

    ?>
<hr>
</ul>
</body>
</html>
