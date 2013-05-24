<script>
	function deposit(){
		//var amount = document.getElementById('amount').innerHTML;
		$.ajax({
			type: 'POST',
			url: 'controllers/deposit.php',
    		data: { 
				'amount': amount,
				'email': email,
				},
			success: function(data) {
				if (data == "true") {
					document.getElementById('success_responce').innerHTML = "Success";
					$.mobile.changePage("#success");
				}
				else {
					document.getElementById('success_responce').innerHTML = "Oops, somthing went wrong. We returned your change.";
					$.mobile.changePage("#success");	
				}
    		}
		});
	}
</script>

<div data-role="page" id="confirm">
	<div data-role="content">
		<div id="amount">
			<!-- calulated from coin counter -->
		</div>
		<a onClick="deposit()" data-role="button">Confirm</a>
		<a href="#ad" data-role="button">Cancle and Return</a>
	</div>
</div>