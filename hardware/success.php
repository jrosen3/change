<script>
	function email_ad(){
		$.ajax({
			type: 'POST',
			url: 'controllers/email_ad.php',
    		data: { 
				'email': email,
				'user_name': user_name,
				},
			success: function(data) {
				$.mobile.changePage("#ad");
    		}
		});
	}
</script>

<div data-role="page" id="success">
	<div data-role="content">
		<div id="success_responce">
			<!-- responce from confirm.php -->
		</div>
		<a onClick="email_ad()" data-role="button">Find out more about //TODO:ad</a>
		<a href="#ad" data-role="button">No Thanks</a>
	</div>
</div>