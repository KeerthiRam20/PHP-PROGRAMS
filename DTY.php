<?php  
echo "change YYYY/MM/DD TO MM/DD/YYYY ";
 $orgDate = "2019-09-15";  
 echo " $orgDate ";
    $newDate = date("d-m-Y", strtotime($orgDate));  
    echo "New date format is: ".$newDate. " (MM-DD-YYYY)";  
	echo "</br> Change YYYY-MM-DD to MM-DD-YYYY";
	  echo "</br>";
	  echo "</br>";
    $orgDate = "2019-02-26"; 
echo " $orgDate ";	
    $newDate = date("m-d-Y", strtotime($orgDate));  
    echo "New date format is: ".$newDate. " (MM-DD-YYYY)";  
	echo"</br>";
echo "</br> Change DD-MM-YYYY to YYYY-MM-DD";
    $orgDate = "17-07-2012";  
	echo " $orgDate ";
    $newDate = date("Y-m-d", strtotime($orgDate));  
    echo "New date format is: ".$newDate. " (YYYY-MM-DD)";  
 echo "</br>";
echo"</br> Change DD-MM-YYYY to YYYY/MM/DD"; 
    $orgDate = "17-07-2012"; 
echo " $orgDate ";	
    $date = str_replace('-"', '/', $orgDate);  
    $newDate = date("Y/m/d", strtotime($date));  
    echo "New date format is: ".$newDate. " (YYYY/MM/DD)";  
echo "</br>";
echo "</br>Change date time to another format";
  
    $date = "06/13/2019 5:35 PM";  
    //converts date and time to seconds  
    $sec = strtotime($date);  
    //converts seconds into a specific format  
    $newdate = date ("Y/d/m H:i", $sec);  
    //Appends seconds with the time  
    $newdate = $newdate . ":00";  
    // display converted date and time  
    echo "New date time format is: ".$newDate;  
?>  