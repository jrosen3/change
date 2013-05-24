<script>
	function send(){
		var email = encodeURI(document.getElementById('email').value);
		$.ajax({
			type: 'POST',
			url: 'controllers/user_controller.php',
    		data: { 
				'email': email
				},
			success: function(data) {
				document.getElementById('user_name').innerHTML = data;
				$.mobile.changePage("#welcome");
				document.getElementById("email_form").reset();
    		}
		});
	}
</script>

<div data-role="page" id="user">
	<div data-role="content">
		<form action="javascript:send()" method="post" id="email_form">
			<input type="email" id="email" placeholder="your@email.com" autofocus value="" />
			<input type="submit" />
		</form>
	</div>
</div>