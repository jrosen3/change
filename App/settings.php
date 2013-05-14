<script>
	/*
	 * Displays the weather when the page is shown
	 */
	$(document).on("pageshow", "#settings", function() {
		fetchLocation(function(position) {
			var lat = position.coords.latitude;
    		var lon = position.coords.longitude;
    		var userLocation = lat + ', ' + lon;
			//alert(userLocation);
		});
	});

	/*
	 * Error function, referenced by fetchLocation
	 */
	function locationError(error) {
		console.log("Error fetching location.");
		console.log(error);
	};

	/*
	 * Fetches the current location and returns a
	 * position object to the callback, or reports error.
	 */
	function fetchLocation(callback) {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(callback, locationError);
		} else {
			console.log("Browser does not support geolocation");
		}
	};
</script>

<div data-role="page" id="settings">
	<div data-role="header" data-position="fixed">
		<a href="#qr" data-role="button" data-icon="back" data-prefetch>Back</a>
		<h1>Settings</h1>
	</div>

	<div data-role="content">
		<a data-role="button" data-icon="delete" data-prefetch>Logout</a>
		<!--
		Logout button
		Map
		-->
	</div>
</div>