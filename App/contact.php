<script>
	function send()
	{
		var email = encodeURI(document.getElementById('email').value);
		var body = encodeURI(document.getElementById('body').value);
		$.ajax({
			type: 'POST',
			url: 'contact_controller.php',
    		data: { 
				'email': email,
				'body': body
				},
			success: function(data) {
				if(data == "true")
				{
					document.getElementById('responce').innerHTML = "Thank you for your feedback";
					$.mobile.changePage("#qr");
					document.getElementById("contact_form").reset();
				}
				else
				{
					document.getElementById('responce').innerHTML = "An error occured, please try again later";	
				}
    		}
		});
	}
</script>

<div data-role="page" id="contact">
	<div data-role="header" data-position="fixed">
		<a href="#settings" data-role="button" data-icon="delete" data-prefetch>Cancle</a>
		<h1>Contact</h1>
	</div>
	
	<form action="javascript:send()" method="post" id="contact_form">
		<input type="email" name="email" id="email" value="">
		<input type="text" name="body" id="body" placeholder="Thank you for your feedback" value="">
		<input type="submit" name ="submit" value="Send">
	</form>
	<div id="responce"></div>
</div>