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
    $visitor=$_SESSION['username'];
    $username=($_REQUEST['username']);

    $query=mysql_query("SELECT * FROM members WHERE username='$username'");
    $image=mysql_fetch_assoc($query);
    echo'<img src='.$image["dp"].'.jpg height=200 width = 175 alt="Please choose an avatar in your profile">';   
    echo "<br><br><font size=4 face='Lucida Calligraphy'>$username</font><br>"; 
    mysql_free_result($query);
    
echo "<br><br><br>";
echo "<a href='publicinfo.php?username=$username' target='rightbottom'>INFO</a>";
echo "<br><br><br><a href='publicwall.php?username=$username' target='rightbottom'>Wall</a>";
echo "<br><br><br><a href='publicfriend.php?username=$username' target='rightbottom'>View friends of $username</a>";
$query1=mysql_query("SELECT * FROM $username where friendreq='$visitor'");

if (mysql_num_rows($query1)) 
{
    $friend=mysql_fetch_assoc($query1);
    $status=$friend['status'];
     

      if($status=='yes')
        
        {
     echo "<br><br><br><a href='chat.php?username=$username&visitor=$visitor' target='rightbottom'>Send message</a>";
    echo "<br><br><br>You are friends with $username";
   
        }

       else if($status=='decline')
      {
    echo "<br><br><br>Your request has been declined!";
      }

        else if($status=='no')
      {
    echo "<br><br><br>Friend Request Pending...";
      }
}
else
{
    echo "<br><br><br><a href='sendreq.php?visitor=$visitor&username=$username' target='rightbottom'>Send Friend Request</a>";
}
?>
</body>
</html>