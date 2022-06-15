<?php    
// defines the for loop   
for ($a = 0; $a < 10; $a++) {  
  if ($a == 7) {  
    break; /* Break the loop when condition is true. */  
  }  
  echo "Number: $a <br>";  
}  
echo " Terminate the loop at $a number";  
echo "</br>";
echo "</br>";
// defines the for loop   
for ($q = 0; $q < 7; $q++) {  
  if ($q == 5) {  
  echo " Skipped number is $q <br>"; // prints the skipped number.  
    continue; /* It skips the defined statement if the condition is true. */  
  
  }  
  echo "Number is: $q <br>";  
}  
?>  
