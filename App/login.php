<?php include "header.php" ?>
	<!-- body opened in header.php -->
		<script src="https://www.paypalobjects.com/js/external/api.js"></script>
		<script>
			paypal.use( ["login"], function(login) {
				login.render ({
					"appid": "d3428641e41208c246d07b2e5f3cc7a5",
					"authend": "sandbox",
					"scopes": "profile email address https://uri.paypal.com/services/paypalattributes",
					"containerid": "paypal",
					"locale": "en-us",
					"returnurl": "http://my.domain.here/return.php" //index.php
				});
			});
		</script>

		<div data-role="page" id="login">
			<div data-role="header" data-position="fixed">
				<h1>Login</h1>
			</div>

			<div data-role="content">
				<div id="paypal"></div>
			</div>
		</div>
	</body>
</html>