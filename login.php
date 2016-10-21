<?php
include_once("db.php");
session_start();
$user=$_POST['name'];
$pwd=$_POST['pwd'];

$user=stripcslashes($user);
$pwd=stripcslashes($pwd);
$user=mysql_real_escape_string($user);
$pwd=mysql_real_escape_string($pwd);


$rs="select * from login where user_name='$user' and password='$pwd'";
$result=mysql_query($rs,$con) or die (mysql_error());
$row=mysql_fetch_array($result);
if($row['user_name']==$user && $row['password']==$pwd)
{
	header('location:dash.php');
	$_SESSION['login_status']=true;
	echo "<br/>";
	echo '<a href="logout.php">logout</a>';
	
}
else
{
	echo "incorrect user_name and password ";
}
?>