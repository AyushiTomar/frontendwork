<?php /* Template Name: tmp_add_test_category_update*/ ?>
<?php
get_header();
include_once("connection.php");
 ?>
 <div id="primary" class="content-area boxed">
 <form id = "frm_add_test_category" action="" method="post">
 <div id = "main_container">
<form id = "frm_add_test_category" action="" method="post">
	<div id = "main_container">
<?php

if(isset($_POST['search']))
{
	
	$id=$_POST['test_category_id'];

	$rs="select test_category_id,test_category,no_of_questions,time,test_secrete_code,instructions_for_test from test_category where test_category_id='$id'" ;
   $result=mysqli_query($conn,$rs)or die(mysqli_error($conn));
   
   while($row=mysqli_fetch_array($result))
{

$id=$row['test_category_id'];	
$cate=$row['test_category'];
$question=$row['no_of_questions'];
$time=$row['time'];
$code=$row['test_secrete_code'];
$inst=$row['instructions_for_test'];
}
  
}
elseif(isset($_POST['update']))
{
$id1=$_POST['test_category_id'];	
$cate1=$_POST['category'];
$question1=$_POST['questions'];
$time1=$_POST['time'];
$code1=$_POST['code'];
$inst1=$_POST['instructions'];
$rs="update test_category set test_category='$cate1',no_of_questions='$question1',time='$time',test_secrete_code='$code1',instructions_for_test='$inst1'";
$result=mysqli_query($rs,$conn)or die(mysqli_error($conn));
//$rs="insert into test_category(test_category_id,test_category,no_of_questions,time,test_secrete_code,instructions_for_test)
//values('$id1','$cate1','$question1','$time1','$code1','$inst1') where test_category_id='$id'";
//$result=(mysqli_query($rs,$conn))or die (mysqli_error($conn));


}
echo "<form  method='post' action=''><br><br>";
echo "test_category_id<input type='number' name='test_category_id' value= '$id'><br><br>";
echo" test-category<input type='text' name='category' value='$cate'><br><br>";

echo "no of ques<input type='number' name='question' value= '$question'><br><br>";
echo "time<input type='text' name='time' value= ' $time'><br><br>";
echo "code<input type='text'name='code' value= '$code' ><br><br>";
echo "instructions<input type='text'name='instructions' value= '$inst' ><br><br>";
echo"<input type='submit' name= 'search' value='find'>&nbsp;";
echo"<input type='submit' name= 'reset' value='reset'>&nbsp;";
echo"<input type='submit' name= 'update' value='update'>";
echo "</form>";




?>

</form>
</div>
</form>
</div>
<?php get_footer(); ?>