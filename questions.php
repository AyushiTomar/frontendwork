<?php
include_once("db.php");
$id=$_POST['id'];
$number=$_POST['number'];
$question=$_POST['question'];
$ans1=$_POST['ans1'];
$ans2=$_POST['ans2'];
$ans3=$_POST['ans3'];
$ans4=$_POST['ans4'];
$ans5=$_POST['ans5'];
$correct=$_POST['correct'];
$marks=$_POST['marks'];
$type=$_POST['type'];

$rs="insert into question(test_category_id,question,ans1,ans2,ans3,ans4,ans5,correct_ans,marks,question_type,created,modified)
values('$id','$question','$ans1','$ans2','ans3','$ans4','$ans5','$correct','$marks','$type',now(),now())";
$result=(mysql_query($rs,$con))or die (mysql_error());
if($result){
    echo "Your quiz has been saved";
} else {
    echo '<h1>System Error</h1>';
}



