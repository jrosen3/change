<script>
	$(document).ready(function() {
		var email = "jaredarosen@gmail.com";
		email = encodeURI(email);
		var url = "https://chart.googleapis.com/chart?chld=M|0&chs="+width+"x"+width+"&cht=qr&chl="+email;
		var img = '<img src="'+url+'" width="99%" height="99%">';
		document.getElementById("qr_goes_here").innerHTML = img;
		document.getElementById("email").value = email; //for use in contact.php
	})
</script>

<div data-role="page" id="qr">
	<div data-role="header" data-position="fixed">
		<a href="#settings" data-role="button" data-icon="gear" data-prefetch>Settings</a>
		<a href="#locate" data-role="button" data-icon="plus" data-prefetch>Locate</a>
		<h1>Scan</h1>
	</div>

	<div data-role="content">
		<div id="qr_goes_here"></div> 
	</div>
</div>