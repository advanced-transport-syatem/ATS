<?php
include 'include.php';
  $userAnswer = $_POST['']; 
  $sql="SELECT * FROM 'distance' where did='1'" ;
  $result=mysql_query($sql);
  $row=mysql_fetch_array($result);
  // for first row only and suppose table having data
  // pass array in json_encode  
?>

// Store on previous page
sessionStorage.setItem("yourArray", JSON.stringify(yourArray));

// Restore on following page
var yourArray = JSON.parse(sessionStorage.getItem("yourArray"));


<?php echo "$data_arr[0],$data_arr[1]"; ?>