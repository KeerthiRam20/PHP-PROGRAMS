<?php      
    //initialize a variable of string type  
    $site = "javatpoint";  
    preg_match('/(java)(t)(point)/', $site, $matches, PREG_OFFSET_CAPTURE);  
    //display the matches result  
    print_r($matches);  
	echo"</br>";
	echo "</br>";
	 //initialize a variable of string type  
    $website = "JTP is a best online platform to learn.";  
      
    //case insensitive search for word jtp  
    //The "i" after pattern delimiter indicates case-insensitive search  
    $res = preg_match('/jtp/i', $website, $matches);  
      
    if ($res) {  
        echo "Pattern matched in string.</br>";  
        print_r($matches);  
    } else {  
        echo "Pattern not matched in string.";  
    }  
echo "</br>";
echo "</br>";
 /* The \b indicates the word boundary in the pattern. So, it matches only the distinct 
             word like "web", and words like "coreweb" or " webinar" do not match partially.*/              
    if (preg_match("/\bweb\b/i", "PHP is a web scripting language.")) {  
        echo "A match was found. </br>";  
    } else {  
        echo "A match was not found. </br>";  
    }  
  
    if (preg_match("/\bweb\b/i", "PHP is a website scripting language.")) {  
        echo "A match was found.";  
    } else {  
        echo "A match was not found.";  
    }  
	echo "</br>";
	echo "</br>";
	 // get host name from URL  
    preg_match('@^(?:https://)?([^/]+)@i',  
        "https://www.javatpoint.com/php-tutorial", $matches);  
    $host = $matches[1];  
  
    // get last two segments of host name  
    preg_match('/[^.]+\.[^.]+$/', $host, $matches);  
    echo "Domain name is: {$matches[0]}\n";  
?>  