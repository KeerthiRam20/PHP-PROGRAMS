<?php 
 $color = array("Blue", "Red", "Black", "Green", "Gray", "White");  
    echo "Arraylist: ";  
    print_r($color);  
    $remove = array_shift($color);  
    echo "</br>Removed element from array is: ";  
    print_r($remove);  
    echo "</br> Updated arraylist: ";  
    print_r($color);  
echo"</br>";
	echo"</br>";
    $numbers = array(25, 12, 65, 37, 95, 38, 12); 
echo " ArrayList: ";	
    $removed = array_shift($numbers);  
    echo "Removed array element is: ". $removed;   
    echo "</br> Update array is: ";  
    print_r($numbers); 
 echo "</br>";
  echo"</br>";
    $car = array("Mercedes", "Creta", "Audi", "Chevrolet", "Skoda");  
    echo "Arraylist: ";  
    print_r($car);  
    $remove = array_pop($car);  
    echo "</br>Removed element from array is: ";  
    print_r($remove);  
    echo "</br> Updated arraylist: ";  
    print_r($car);  
 echo"</br>";
 echo"</br>";
  $pinky = array(45, 76, 23, 91, 82, 39);  
    $removed = array_pop($pinky);  
    echo "Removed array element is: ". $removed;   
    echo "</br> Update array is: ";  
    print_r($pinky);  
?>  