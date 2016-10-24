
<?php

$quer=" SELECT * FROM questions ORDER BY RAND() ";
 $query=mysql_query($quer,$con) or die(mysql_error());
 
while($row = mysql_fetch_array($query))
  {
  $questionId = $row['question_no']; //primary key of question table
  $na= $row['question'];
  $opt1= $row['opt1'];
  $opt2= $row['opt2'];
 $opt3= $row['opt3'];
$opt4= $row['opt4'];

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

     

