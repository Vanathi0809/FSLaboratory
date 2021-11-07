<?php
$dbhost='localhost';
$dbname='student';
$dbuname='root';
$dbpword='';
$mysqli=mysqli_connect($dbhost,$dbuname,$dbpword,$dbname);
$output=array();
$res=mysqli_query($mysqli,"select * from StudentDetails");
while($result=mysqli_fetch_array($res))
{
$output[]=$result;
}
echo json_encode($output);
?>