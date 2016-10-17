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
 <th>Test_Category_Id</th>
 <th>Test_Category</th>
 <th>Time</th>
 <th>Created</th>
 <th>Modified</th>
 </tr>

<?php
include_once("db.php");
$rs="select * from test_category";
$result=mysql_query($rs,$con)
 or die(mysql_error());
 
 while($row=mysql_fetch_assoc($result))
 {
 	echo "<tr>";
 	echo "<td>".$row['test_category_id']."</td>";
 	echo "<td>".$row['test_category']."</td>";
 	echo "<td>".$row['time']."</td>";
 	echo "<td>".$row['created']."</td>";
 	echo "<td>".$row['modified']."</td>";
 	echo "</tr>";
 }
mysql_free_result($result);
?>
</table>
</html>