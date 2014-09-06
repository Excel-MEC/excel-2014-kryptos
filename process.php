 <?php
if (isset($_POST['hup']))
echo $_POST['hup']." - ".preg_replace('/\s+|[^a-zA-Z1234567890запускдвигтеля\']/', '', strtolower($_POST['hup']));
echo "<br/>";
echo md5(preg_replace('/\s+|[^a-zA-Z1234567890\']/', '', strtolower($_POST['hup'])));
?>
<form sction="md5.php" method="POST">
<input type="text" name="hup">
<button type="submit">convert to md5</button>
	</form>