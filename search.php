
<html>

<style >
table,th,td
{
	margin:auto;
	border :1px solid black;
	border-collapse:collapse;
	height:30px;
	width:1000px;
	text_align:center;
}
td
{

	padding-left:60px;

}
th
{
	background:brown;
	color:white;
}
.width
{
	width:1000px;
}

</style>
<table>
 <tr>
 <th>student_id</th>
 <th>first_name</th>
 <th>Last_name</th>
 <th>Email_id</th>
 <th>Phone_no</th>
 <th>Passsword</th>
 <th>Test_category</th>
 <th>Created</th>
 <th>Modified</th>

 </tr>

<?php
include_once("db.php");
$id=$_POST['id'];
$rs="select * from student where student_id='$id'";
$result=mysql_query($rs,$con) or die (mysql_error());
   if(mysql_num_rows($result))
{
 while($row=mysql_fetch_array($result))
 {

 	echo "<tr>";
 	echo "<td>".$row['student_id']."</td>";
 	echo "<td>".$row['fname']."</td>";
 	echo "<td>".$row['lname']."</td>";
 	echo "<td>".$row['email_id']."</td>";
 	echo "<td>".$row['phone_no']."</td>";
 	echo "<td>".$row['password']."</td>";
 	echo "<td>".$row['test_category']."</td>";
    echo "<td>".$row['created']."</td>";
    echo "<td>".$row['modified']."</td>";
 	echo "</tr>";
 }}
 else
 {
 	echo "No data for this id";
 }

mysql_free_result($result);

?>