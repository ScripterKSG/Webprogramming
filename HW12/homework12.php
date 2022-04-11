<?php
  // error_reporting(E_ALL);
  // ini_set("display_errors", "on");
   $myFile = "signup.txt";
    $lines = file($myFile);//file in to an array
    $time = array('8:00 am', '9:00 am', '10:00 am', '11:00 am', '12:00 pm',
	    '1:00 pm', '2:00 pm','3:00 pm', '4:00 pm', '5:00 pm'); 

   //override array if necessary
    for ($i = 0; $i < 10; $i++){
   	if(isset($_POST["n" . $i]) && trim($_POST["n" . $i] != "")){
		$lines[$i] = $_POST["n" . $i];
	}
   }

    //trim \n before writing to prevent stacking several \n
    //write newly inputted text to file
  
   $fh = fopen ($myFile, "w") or die("HELLO");
   for ($i = 0; $i < 10; $i++){
	   $lines[$i] = trim($lines[$i]);
	   fwrite ($fh, $lines[$i] . "\n");  
    }
    fclose($fh);

    echo "<form name='myForm' method='POST' action='homework12.php'>";
   //setup table with names/entry fields 
    echo "<table border='2' align='center' width='30%'><br>";
    echo "<caption style='margin-bottom:0.25cm';> <b> Sign-Up Sheet</b> </caption>";
    echo "<tr><th style='width:130px'> Time </th><th> Name </th></tr>";
    for ($i = 0; $i < 10; $i++ ) {
      if(trim($lines[$i]) ==""){
	$n = "n" . $i;	    
        echo "<tr><td>", $time[$i], "</td><td> <input type='text' name='$n'/> </td></tr>";
      }
      else{
        echo "<tr><td>", $time[$i], "</td><td>", $lines[$i] , "</td></tr>";
      }
    }
    echo "</table><br>";
	
    echo "<input id='b1' type ='submit' value='Submit'>";

    echo "</form>";

?>


<style>
	td, th {
		text-align:center;
	}
	#b1 {
		display: block;
   		margin-left: auto;
    		margin-right: auto;
    		font-weight: bold;
	}
</style>
