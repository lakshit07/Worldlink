<meta http-equiv="refresh" content="2">
<html>
<head>
	<title>display chat</title>
</head>
<body bgcolor="black" text="white" align="center">

	<?php
	 session_start();  
    mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 

    $username=$_REQUEST['username'];
    $visitor=$_REQUEST['visitor'];
    $count=0;

    $query=mysql_query("SELECT * from $username where (messagefrom='$visitor' and messageto='$username')or (messagefrom='$username' and messageto='$visitor')");

    while($chat=mysql_fetch_assoc($query))
    {   
        if($chat['messagefrom']==$username)
            { echo "<div align='left'><font face='Comic sans MS'>";
              echo $chat['message']."<br><br></font>";
    	      echo $chat['messagefrom']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$chat['messageat'];
    	      echo "</div>";
    	      $count++;
            }

        elseif($chat['messagefrom']==$visitor)
        {
            echo "<div align='right'><font face='Comic sans MS'>";
              echo $chat['message']."<br><br></font>";
              echo $chat['messagefrom']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$chat['messageat'];
              echo "</div>";
              $count++;
        }    
    }

    if($count==0)
    {
    	echo "<h2>You have no chat history with $username</h2>";
    }




    ?>

</body>
</html>