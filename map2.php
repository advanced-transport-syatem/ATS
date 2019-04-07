<!doctype html>

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
  <?php
    var cart = JSON.parse(window.localStorage.getItem("$data_arr"));
    //$data_arr1 = geocode();
 
    // if able to geocode the address
    if($data_arr1){
         
        $latitude = $data_arr1[0];
        $longitude = $data_arr1[1];
        //$formatted_address = $data_arr[2];
    }              
    ?>
 
	<script>
    // Initialize the platform object:
    var platform = new H.service.Platform({
    'app_id': 'bkFUDmFh3em4ykblw08r',
    'app_code': 'Ne-DYt8_hilpAXbKOUNFfg'
    });
		router = platform.getRoutingService();

var calculateRouteParams = {
    'waypoint0': '<?php echo $latitude; ?>',
    'waypoint1': '<?php echo $longitude; ?>',
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
