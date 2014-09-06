<?php

$host="localhost";
$db_username="root";
$db_password=""; 
$db_name="kryptos_table"; 

$connection=mysql_connect("$host", "$db_username","$db_password")or die(mysql_error()); 
$db=mysql_select_db("$db_name",$connection)or die(mysql_error());
	
$usertable="usertable";

$sql="SELECT * from $usertable where nigger <> '1'order by levelid desc,time asc";
$recset=mysql_query($sql) or die("There is some technical error");
$records = array();
while($row=mysql_fetch_array($recset))
{
$records[]=$row;
}
//$a=array("objects"=>$records);
echo json_encode($records);
?>
