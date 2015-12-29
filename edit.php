<html>
<head>
	<title>Edit Profile</title>
</head>
<body bgcolor=black text=white align=center>
	<?php
	session_start();
	mysql_connect("127.0.0.1","root","");
    mysql_select_db("user"); 
    $username=$_SESSION['username'];
    $query=mysql_query("SELECT * FROM members WHERE username='$username'");
    $data=mysql_fetch_assoc($query);

 echo "<h3><u>Your current information-</u><br><br>";

 echo "Username : ".$data["username"];
 echo "<br><br>Email ID : ".$data['email'];
 echo  "<br><br>Date of Birth : ".$data['birthday']; 
 echo " <br><br>Gender : ".$data['gender']."</h3>";

 ?>

<hr><u><h3>Enter new information- </u></h3>
<br>
<form method='POST' action='add.php'>
New Email ID : <input type=text name=nemail><br><br>
New Birthdate :&nbsp;&nbsp;<select name='date' size='1' value='date'> 
                                                  <option disabled>Date</option>
                                                  <option value='1'> 1
                                                  <option value='2'> 2
                                                  <option value='3'> 3
                                                  <option value='4'> 4
                                                  <option value='5'> 5
                                                  <option value='6'> 6
                                                  <option value='7'> 7
                                                  <option value='8'> 8
                                                  <option value='9'> 9
                                                  <option value='10'> 10
                                                  <option value='11'> 11
                                                  <option value='12'> 12
                                                  <option value='13'> 13
                                                  <option value='14'> 14
                                                  <option value='15'> 15
                                                  <option value='16'> 16
                                                  <option value='17'> 17
                                                  <option value='18'> 18
                                                  <option value='19'> 19
                                                  <option value='20'> 20
                                                  <option value='21'> 21
                                                  <option value='22'> 22
                                                  <option value='23'> 23
                                                  <option value='24'> 24
                                                  <option value='25'> 25
                                                  <option value='26'> 26
                                                  <option value='27'> 27
                                                  <option value='28'> 28
                                                  <option value='29'> 29
                                                  <option value='30'> 30
                                                  <option value='31'> 31	
                                                  </select>
            &nbsp;&nbsp;&nbsp;
            <select name='month' size='1' value='month'>
            	                                   <option disabled>Month</option>
                                                   <option value='january'> January
                                                   <option value='february'> February
                                                   <option value='march'> March
                                                   <option value='april'> April
                                                   <option value='may'> May
                                                   <option value='june'> June
                                                   <option value='july'> July
                                                   <option value='august'> August
                                                   <option value='september'> September
                                                   <option value='october'> October
                                                   <option value='november'> November
                                                   	<option value='december'> December
                                                   	</select>
           &nbsp;&nbsp;&nbsp;
            <input type='text' name='year' maxlength='4' placeholder='year'>

<br><br>Choose your new avatar : 


  <input type='radio' name='pp' value='male1'><img src='male1.jpg'height=50 width=50>
  <input type='radio' name='pp' value='male2'><img src='male2.jpg'height=50 width=50>
  <input type='radio' name='pp' value='male3'><img src='male3.jpg'height=50 width=50>
  <input type='radio' name='pp' value='male4'><img src='male4.jpg'height=50 width=50>
  <br>

  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type='radio' name='pp' value='female1'><img src='female1.jpg'height=50 width=50>
  <input type='radio' name='pp' value='female2'><img src='female2.jpg'height=50 width=50>
  <input type='radio' name='pp' value='female3'><img src='female3.jpg'height=50 width=50>
  <input type='radio' name='pp' value='female4'><img src='female4.jpg'height=50 width=50>
         


      
     <br><br><br>
      <input align='center'type="submit" value="CHANGE"> &nbsp;&nbsp;&nbsp;
      <input align='center' type="reset"  value="RESET">             



</form>


</body>
</html>