<?php  
    $date = 'May 29, 2020';  
    $pattern = '/(\w+) (\d+), (\d+)/i';  
    $replacement = '${1} 5,$3';  
          
    //display the result returned by preg_replace  
    echo preg_replace($pattern, $replacement, $date);  
	echo "</br>";
	echo "</br>";
	$str = 'Camila    Cabello   is    a   Hollywood    singer.';  
    $str = preg_replace('/\s+/', ' ', $str);  
    echo $str;  
	echo "</br>";
	echo "</br>";
	//declare a string  
    $string = 'The slow black bear runs away from the zoo.';  
    $patterns = array();  
    echo " The slow black bear runs away from the zoo. ";
    //pattern to search in subject string  
    $patterns[0] = '/slow/';  
    $patterns[1] = '/black/';  
    $patterns[2] = '/bear/';  
      
    //replacement value to replace with pattern in the given search string  
    $replacements = array();  
    $replacements[2] = 'fox';  
    $replacements[1] = 'brown';  
    $replacements[0] = 'quick';  
      
    //apply preg_replace function  
    $newstr = preg_replace($patterns, $replacements, $string);  
    echo "<b>String after replacement:</b> " .$newstr; 
	

?> 