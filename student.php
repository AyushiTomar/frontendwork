<?php
include_once("db.php");
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$eml=$_POST['mail'];
$mob=$_POST['mob'];
$pwd=$_POST['pwd'];
$test=$_POST['select'];


$rs="insert into student(fname,lname,email_id,phone_no,password,test_category,created,modified)
values('$fn','$ln','$eml','$mob','pwd','$test',now(),now())";
$result=(mysql_query($rs,$con))or die (mysql_error());
echo "inserted";
/*if($result)
{
?>
<script>
alert("registered successfully");
window.location="login.php";
</script>
<?php
}
else
{
?>
<script>
window.location="student.php";
</script>
<?php }
*/
?>