<?php
require 'config.php';

$sql="SELECT firstname,lastname,levelid from $usertable where nigger <> 1 and levelid>0 order by levelid desc,time asc";
$recset=mysql_query($sql) or die("There is some technical error");
$records = array();
while($row=mysql_fetch_array($recset))
{
$records[]=$row;
}
//$a=array("objects"=>$records);
echo json_encode($records);
?>
