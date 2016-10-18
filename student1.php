
<!Doctype>
<html>
<form action="example.php" method="post">
Student_id<input type="text" name="id"><br/><br/>
First Name:<input type="text" name="fname"><br/><br/>
last Name:<input type="text" name="lname"><br/><br/>
Email:<input type="email" name="mail"><br/><br/>
Phone_no:<input type="number" name="mob"><br/><br/>
password:<input type="password" name="pwd"><br/><br/>
select test category:<select name="select" id="test">
<option id="0">select your test</option>
<?php
include_once("db.php");
//include_once("student.php");
$rs="select * from test_category";
$result=mysql_query($rs,$con) or die(mysql_error());
while($row=mysql_fetch_array($result)){
?>
<option id="<?php echo $row['test_category_id'];?>"><?php echo $row['test_category']?></option>
<?php } ?>
</select>

<input type="submit" value="submit" name="insert"/>
<input type="reset" value="reset"/>
<input type="submit" name="search" value="search"/>
</form>
</html>