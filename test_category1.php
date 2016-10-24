<?php
include_once("db.php");

$cate=$_POST['cate'];
$question=$_POST['ques'];
$time=$_POST['time'];
$code=$_POST['code'];
$inst=$_POST['inst'];

if(empty($cate))
{
	die("please enter testcategory");
}
if(empty($question))
{
	die("please enter question");
}
if(empty($time))
{
	die("please select time");
}

if(empty($code))
{
	die("please enter test secrete code");
}
if(empty($inst))
{
	die("please enter instructions for test");
}


$rs="insert into test_category (test_category,no_of_questions,time,test_secrete_code,instructions_for_test ,created,modified) values ('$cate','$question','$time','$code','$inst',now(),now())";
$result=mysql_query($rs,$con)  or die(mysql_error());
if($result)
{
	header('location:add_ques.php');
}
else
{
  echo "error";
}
?>