<?php
session_start();
if($_SESSION['login_status']==false)
{
header("location:login.html");
}
echo "welcome";
?>