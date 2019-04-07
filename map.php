<?php
include "include.php";
$data_arr = array(); 
$data = @mysqli("SELECT * FROM loction");
$d=mysql_query($data) or die(mysql_error());
$row=mysql_fetch_array($d);
$data_arr=array();
if($row!=0)
{
    $name= $row['Bus_Id'];
    $longitude= $row['BLongitude'];
    $latitude= $row['BLatitude'];
    //$latlong=$latitude.", ". $longitude;
    
    array_push($data_arr, $longitude, $latitude);
    //echo $data_arr;
    
}
else{
     echo "no";
}
window.localStorage.setItem("$data_arr", JSON.stringify($data_arr));
//echo '<a href="map2.php">map</a>';
?>