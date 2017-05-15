<?php
session_start();

$db=mysql_connect("localhost","root","");
mysql_Select_db("e-commarace",$db);
$users=$_SESSION['login_user'] ;
$query ="DELETE FROM user_product  where user_id='$users' and status=0;";
$data = mysql_query ($query);

session_destroy();

header("Location: index.php");
?>