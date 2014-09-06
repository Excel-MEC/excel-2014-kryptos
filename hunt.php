<?php
date_default_timezone_set('Asia/Calcutta');
$dest = mktime(20,00,00,9,14,2013); 
//echo $dest;echo "<br>";
$date = new DateTime();
//echo $date->getTimestamp();echo "<br>";
//echo TIME();echo "<br>";
$dif=$dest-TIME();

if($dif<=0)
{
  ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Kryptos</title>
		<meta charset="utf-8">
                <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon"/>
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
		<script type="text/javascript" src="js/jquery-1.6.js" ></script>
	
	</head>
		<body id="page1" style="background:blue;" >
		
   <div id="logindiv" style="position:absolute;left:30%;top:48%;">
	 	<form action="loginverify.php" method="POST">
	 		username:<input type="text" name="username"></input>
	 		Password:<input type="password" name="password"></input>
	 		<button type="submit">submit</button>
	 	</form>
	 </div>
	</body>
</html>
<?php
}

else
 echo "Sorry Buddy your clock is too fast... We will unlock in ".$dif."Seconds";
?>