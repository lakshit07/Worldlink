<html>
<head>
	<title>year display</title>
</head>
<body>
	<?php

	date_default_timezone_set("Asia/Kolkata"); 
$year=date("Y",time());
$month=date("M",time());
$date=date("d",time());

echo $date."<br>".$month."<br>".$year;

?>

</body>
</html>