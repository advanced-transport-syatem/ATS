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
  
<p id="user"></p>


	<script>
    // Initialize the platform object:
    var platform = new H.service.Platform({
    'app_id': 'bkFUDmFh3em4ykblw08r',
    'app_code': 'Ne-DYt8_hilpAXbKOUNFfg'
    });
		router = platform.getRoutingService();

var calculateRouteParams = {
    'waypoint0': 'geo!52.5,13.4',
    'waypoint1': 'geo!52.5,13.45',
    'mode': 'fastest;car;traffic:disabled'
  },
  onResult = function(result) {
	  var route = (result.response.route[0]);
	  document.getElementById("output");
output.innerHTML = JSON.stringify(route.summary.distance);
	  var dist = JSON.stringify(route.summary.distance);
    alert(dist)
    //var obj = JSON.parse(dist);
  },
  onError = function(error) {
     console.log(error);
  };
router.calculateRoute(calculateRouteParams, onResult, onError);

//Use dataType:"json" for json data


	</script>
	<div id="output"></div>

</body>
</html>
