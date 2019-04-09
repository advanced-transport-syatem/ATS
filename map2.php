<!doctype html>
<<<<<<< HEAD:map2.php
<html>
=======

>>>>>>> 0062794e6f4b377a1d9398637994e6f2ed0fdb7e:map2.php
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
<<<<<<< HEAD:map2.php
  
<p id="user"></p>


=======
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
 
>>>>>>> 0062794e6f4b377a1d9398637994e6f2ed0fdb7e:map2.php
	<script>
    // Initialize the platform object:
    var platform = new H.service.Platform({
    'app_id': 'bkFUDmFh3em4ykblw08r',
    'app_code': 'Ne-DYt8_hilpAXbKOUNFfg'
    });
		router = platform.getRoutingService();

var calculateRouteParams = {
<<<<<<< HEAD:map2.php
    'waypoint0': 'geo!52.5,13.4',
    'waypoint1': 'geo!52.5,13.45',
=======
    'waypoint0': '<?php echo $latitude; ?>',
    'waypoint1': '<?php echo $longitude; ?>',
>>>>>>> 0062794e6f4b377a1d9398637994e6f2ed0fdb7e:map2.php
    'mode': 'fastest;car;traffic:disabled'
  },
  onResult = function(result) {
	  var route = (result.response.route[0]);
	  document.getElementById("output");
output.innerHTML = JSON.stringify(route.summary.distance);
	  var dist = JSON.stringify(route.summary.distance);
<<<<<<< HEAD:map2.php
    alert(dist)
    //var obj = JSON.parse(dist);
=======
	  alert(dist)
>>>>>>> 0062794e6f4b377a1d9398637994e6f2ed0fdb7e:map2.php
  },
  onError = function(error) {
     console.log(error);
  };
router.calculateRoute(calculateRouteParams, onResult, onError);
<<<<<<< HEAD:map2.php

//Use dataType:"json" for json data


	</script>
	<div id="output"></div>

=======
	</script>
	<div id="output"></div>
	
>>>>>>> 0062794e6f4b377a1d9398637994e6f2ed0fdb7e:map2.php
</body>
</html>
