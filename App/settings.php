<script>
	/*
	 * do something when the page is shown
	 */
	$(document).on("pageshow", "#settings", function() {
		//do something
	});
</script>

<div data-role="page" id="settings">
	<div data-role="header" data-position="fixed">
		<a href="#qr" data-role="button" data-icon="back" data-prefetch>Back</a>
		<h1>Settings</h1>
	</div>

	<div data-role="content">
		<!--<a data-role="button" data-icon="delete">Logout</a>-->
		<a href="#info" data-role="button" data-icon="plus">Info</a>
		<a href="mailto:jaredarosen@gmail.com" data-role="button" data-icon="plus">Contact Us</a>
	</div>
</div>