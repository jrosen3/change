<script>
	/*
	 * do something when the page is shown
	 */
	$(document).on("pageshow", "#settings", function() {
		// locate user and show machines
	});
</script>

<div data-role="page" id="locate">
	<div data-role="header" data-position="fixed">
		<a href="#qr" data-role="button" data-icon="back" data-prefetch>Back</a>
		<h1>Locate</h1>
	</div>
	
	<div data-role="content">
		<div id="map-canvas">
			<!-- put map here -->
		</div>
	</div>
</div>