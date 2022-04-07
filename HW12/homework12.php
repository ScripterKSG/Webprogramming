<?php
    $myFile = "signup.txt";
    $lines = file($myFile);//file in to an array
    $time = array('8:00 am', '9:00 am', '10:00 am', '11:00 am', '12:00 pm',
     '1:00 pm', '2:00 pm','3:00 pm', '4:00 pm', '5:00 pm');

    for ($i = 0; $i < max(count($lines), 10); $i++ ) {
      if($name ==""){
        echo "<tr><td>". $time[$i] "</td><td> <input type='text' name=$i/> </td></tr>"
      }
      else{
        echo "<tr><td>". $time[$i] "</td><td> $lines[$i] </td></tr>"
      }
  }

?>