<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php
	// Supply a user id and an access token
	$userid = "self";
	$accessToken = "14866104.3532d39.1c449af75e73404896ee8bd3873e387e";
	$count = "-1";

	// Gets our data
	function fetchData($url){
	     $ch = curl_init();
	     curl_setopt($ch, CURLOPT_URL, $url);
	     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	     curl_setopt($ch, CURLOPT_TIMEOUT, 20);
	     $result = curl_exec($ch);
	     curl_close($ch); 
	     return $result;
	}

	// Pulls and parses data.
	$result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}&count={$count}");
	

?>

<script type="text/javascript">


// Creating a new map
function initialize() {
var styles = [
	  {
	    "stylers": [
	      { "visibility": "simplified" },
	      { "hue": "#003bff" }
	    ]
	  }
	];
	// Create a new StyledMapType object, passing it the array of styles,
  	// as well as the name to be displayed on the map type control.
  	var styledMap = new google.maps.StyledMapType(styles,
    	{name: "Styled Map"});
	
    var mapOptions = {
      center: new google.maps.LatLng(41.046217,-97.998047),
      zoom: 5,
      mapTypeControlOptions: {
	      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
	    }
    };

  	// Creating a new map
	var map = new google.maps.Map(document.getElementById("map"),mapOptions);
	  map.mapTypes.set('map_style', styledMap);
	  map.setMapTypeId('map_style');

	// Creating a global infoWindow object that will be reused by all markers
	var infoWindow = new google.maps.InfoWindow();
	
json = [<?php print_r($result) ?>];			


	for (var i = 0, length = json[0].data.length; i < length; i++) {
	  
	  var data = json[0].data[i],
	  latLng = new google.maps.LatLng(data.location.latitude, data.location.longitude); 
	      
	  // Creating a marker and putting it on the map
	  var marker = new google.maps.Marker({
	    position: latLng,
	    map: map,
	    draggable:false,
		icon: '/assets/img/insta_map_icon.png',
	    animation: google.maps.Animation.DROP,
	  });
	  
	// Creating a closure to retain the correct data 
	//Note how I pass the current data in the loop into the closure (marker, data)
	(function(marker, data) {

	  // Attaching a click event to the current marker
	  google.maps.event.addListener(marker, "click", function(e) {
		var infoImage = '<img width="225" src="'+ data.images.low_resolution.url +'"/>';
		
		
		if (data.location.name) {
			var locationName = '<p class="location_name"><strong>'+ data.location.name +'</strong></p>';
		}
		else {
			var locationName = "";
		}
		
		if (data.caption != null) {
			var imageCaption = '<p class="map_caption">'+ data.caption.text +'</p>';
		}
		else {
			var imageCaption = "";
		}
		
		if (data.caption != null) {
			var fancyBoxTitle = data.caption.text;
		}
		else {
			var fancyBoxTitle = "";
		}
		
		var fancyImage = '<a style="display:block;" rel="mapgallery" href="'+ data.images.standard_resolution.url +'" title="'+ fancyBoxTitle +'" class="btn btn-inverse standard_resolution fancybox">Make it BIG!</a>';
		
	    infoWindow.setContent(infoImage + locationName + imageCaption + fancyImage);
	    infoWindow.open(map, marker);
	  });

	})(marker, data);
	}
}





</script>

<div class="fb-like" data-href="http://www.marcsquiredesign.com/instagram-photomap/" data-send="false" data-layout="button_count" data-width="100" data-show-faces="false"></div>
<style>.ig-b- { display: block;}
.ig-b- img { visibility: hidden; }
.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
.ig-b-v-24 { margin:5px 0; width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
.ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }</style>
<a href="http://instagram.com/mtsquire?ref=badge" target="_blank" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a>
<div id="map" style="height:650px; margin-top:10px;"></div>

