<?php
include "include.php";
$data_arr = array(); 
$data ="SELECT * FROM location";
$d=mysql_query($data) or die(mysql_error());
$row=mysql_fetch_array($d);


if($row != 0)
{
    
    //$name= $row['Bus_Id'];
    $b_id=$row['B_Id'];
    $blongitude= $row['BLongitude'];
    $blatitude= $row['BLatitude'];
    $longitude= $row['Longitude'];
    $latitude= $row['Latitude'];
    //$latlong=$latitude.", ". $longitude;
    
    //array_push($data_arr, $longitude, $latitude);
    //echo $data_arr;
   
    $data_arr=array($blatitude,$blongitude);
    $des_arr=array($latitude,$longitude);
    
    $markers = json_encode( $data_arr );
    
}
else{
print_r(no);
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>map2.html</title>
<meta name="viewport" content="initial-scale=1.0, 
    width=device-width" />
    <script src="http://js.api.here.com/v3/3.0/mapsjs-core.js" 
    type="text/javascript" charset="utf-8"></script>
    <script src="http://js.api.here.com/v3/3.0/mapsjs-service.js" 
    type="text/javascript" charset="utf-8"></script>
	
	</head>

<body>
	<script>
     //console.log(ar);
    // alert(ar)
    // Initialize the platform object:
    var platform = new H.service.Platform({
    'app_id': 'bkFUDmFh3em4ykblw08r',
    'app_code': 'Ne-DYt8_hilpAXbKOUNFfg'
    });
		router = platform.getRoutingService();
    var waypoint0=[];
    var waypoint1=[];
    var waypoint0=<?php echo '["' . implode('", "', $data_arr) . '"]'  ?>;
    var waypoint1=<?php echo '["' . implode('", "', $des_arr) . '"]' ?>;
var calculateRouteParams = {
    waypoint0,waypoint1,
    'mode': 'fastest;car;traffic:disabled'
  },
  onResult = function(result) {
	  var route = (result.response.route[0]);
	  document.getElementById("output");
output.innerHTML = JSON.stringify(route.summary.distance);
	  var dist = JSON.stringify(route.summary.distance);
	  alert(dist)
	  
	  
	  
  },
  onError = function(error) {
     console.log(error);
  };
    
router.calculateRoute(calculateRouteParams, onResult, onError);
	</script>
	<div id="output"></div>
	
</body>
</html>
