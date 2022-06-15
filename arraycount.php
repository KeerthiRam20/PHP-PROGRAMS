<?php  
//ARRAY count using count
    $ele = array("Ryan", "Ahana", "Ritvik", "Amaya");  
    $no_of_ele = count($ele);  
    echo "Number of elements present in the array: ".$no_of_ele; 
	echo"</br>";
	//ARRAY USING SIZEOF
	echo "using sizeof method";
	 $ele = array(14, 89, 26, 90, 36, 48, 67, 75);  
    $no_of_ele = sizeof($ele);  
    echo " Number of elements present in the array: ".$no_of_ele;  
	echo"</br>";
	//combining both
	echo "USING BOTH METHOD TO COUNT THE ARRAY SIZE";
	echo"</br>";
	$snacks = array('drinks' => array('cold coffee', 'traffic jam', 'Espresso',  
    'Americano'), 'bevrage' => array('spring rolls', 'nuddles'));  
    echo count($snacks, 1);  
    echo "</br>";  
    echo sizeof($snacks, 1);      
?>  