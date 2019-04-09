<?php
include 'include.php';
  $userAnswer = $_POST['']; 
  $sql="SELECT * FROM 'distance' where did='1'" ;
  $result=mysql_query($sql);
  $row=mysql_fetch_array($result);
  // for first row only and suppose table having data
  echo json_encode($row);  // pass array in json_encode  
?>