<?php
$hostname="localhost";
$username="root";
$password="123456789";
$database="db_hotel";

$con=mysql_connect($hostname,$username,$password);
if(! $con)
{
  die('Connection Failed' .mysql_error());
}

mysql_select_db($database,$con);

?>
