<html>
<head>
    <title>Authentication</title>
</head>
<body bgcolor="black" text="white" align="center" alink=white vlink=white link=white>
<h2>
<?php

session_start();


    $username=mysql_real_escape_string($_REQUEST['username']);
    $password=mysql_real_escape_string($_REQUEST['password']);

    if($username&&$password)
    {
         $connect=mysql_connect("127.0.0.1","root","");
      
         mysql_select_db("user");
 
         $login=mysql_query("SELECT * FROM members WHERE username='$username'");

       
        while($log=mysql_fetch_assoc($login))
         
        {    $dbusername=$log['username'];
            $dbpassword=$log['password'];
           
           if (($username==$dbusername)&&($password==$dbpassword)) 
         {
            $_SESSION['username']=$dbusername;
            $_SESSION['password']=$dbpassword;
            header("location:welcome.php");
         }

        }
         
         
             //header("location:login.php/notify=Incorrect username or password");
             echo "Wrong Username or Password"; 
             

    }
    else
    {
        //header("location:login.php/notify=All fields required");
          echo "ALL fields Required";
           
    }




?>
<br><br>

<img src="failed.jpg" height=150 width=150>
</h2>
 <h4><br><br><br><br><a href='login.php'>Click here to try again</a></h4>



</body>
</html>
