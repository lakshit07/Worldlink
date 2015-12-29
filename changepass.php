<html>
<head>
	<title>Password change</title>
</head>
<body bgcolor='black' text='white' align='center' >
	<h2>Change your Password</h2>
        <hr size='30 noshade'>

	<form action='cp.php' method='POST'>        
        <h3><br><br>
		Enter existing password : <input type='password' name='opass' placeholder="old password">
		<br><br><br>
		Enter new password : <input type='password' name='npass1' placeholder="new password">
		<br><br><br>
		Re-enter new password : <input type='password' name='npass2' placeholder="new password">
		<br><br><br>
		<input type='submit' value='Change'>
		&nbsp;&nbsp;&nbsp;&nbsp; 
		<input type='reset' value='Reset'>
	
    </h3>
</form>	

</body>
</html>