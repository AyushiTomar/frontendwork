<?php
include_once("db.php");
 $qno=1;

 

  if(isset($_POST['next'])){
  $qno+=1;
  }

  $q="select * from `questions` where `question_no`='$qno' ";
 
 $result=mysql_query($q,$con);

 if ($result) {

while($row=mysql_fetch_array($result)){ 
$qno = $row['question_no'];
$question = $row['question'];
$opt1 = $row['opt1'];
$opt2 = $row['opt2'];
$opt3 = $row['opt3'];
$opt4 = $row['opt4'];

echo "".$row['question']."<br>";
  echo "<input type = 'radio' name='radio' value='Option1'>";
       
        echo "".$row['opt1']."<br>";
        echo "<input type = 'radio' name='radio' value='Option2'>";
      
       echo "".$row['opt2']."<br>";
        echo "<input type = 'radio' name='radio' value='Option3'>";
        
        echo "".$row['opt3']."<br>";
       echo "<input type = 'radio' name='radio' value='Option4'>";
      echo "".$row['opt4']."<br>";
     
    echo "<tr><td align = 'center'><input type ='submit' name = 'next' value =go>";

        
      }
    ?>

