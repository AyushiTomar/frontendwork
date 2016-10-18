<?php
include_once("db.php");
$cookie_name="loggedin";
$user=$_POST['name'];
$pwd=$_POST['pwd'];


$rs="select * from login where user_name='$user' and password='$pwd'";
$result=mysql_query($rs,$con) or die (mysql_error());
$row=mysql_fetch_array($result);
if($row['user_name']==$user && $row['password']==$pwd)
{
	echo "login suucess";
	echo "<br/>";
	echo '<a href="logout.php">logout</a>';
}
else
{
	echo "incorrect user_name and password ";
}
?>