<script>
	$(document).ready(function() {
		var email = "jaredarosen@gmail.com";
		email = encodeURI(email);
		var size = width;
		alert(size);
		var url = "https://chart.googleapis.com/chart?chs="+size+"x"+size+"&cht=qr&chl="+email;
		var img = '<img src="'+url+'">';
		document.getElementById("qr_goes_here").innerHTML = img;
	})
</script>

<div data-role="page" id="qr">
	<div data-role="header" data-position="fixed">
		<a href="#settings" data-role="button" data-icon="gear" data-prefetch>Settings</a>
		<h1>Scan</h1>
	</div>

	<div data-role="content">
		<!--
		Generate and display GR code
		-->
		<div id="qr_goes_here"></div> 
	</div>
</div>