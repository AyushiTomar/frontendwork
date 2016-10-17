<?php
include_once('db.php');
$rs="select * from test_category "or die(mysql_error());
$result=mysql_query($rs,$con)
 or die(mysql_error());
echo '<table>
 <tr class="heading">
 <th>Test_Category_Id</th>
 <th>Test_Category</th>
 <th>Time</th>
 <th>Created</th>
 <th>Modified</th>
 </tr>';
 while($row=mysql_fetch_array($result())
 {
 	echo '<tr>';
 	foreach($row as $i)
 	{
 	echo '<th>'.$i.'</th>';
    }

 echo '</tr>';
}echo '</table>';
mysql_free_result($result);

?>