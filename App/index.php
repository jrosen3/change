<?php include "header.php" ?>

	<body ontouchmove="BlockMove(event);">

		<div data-role="page" id="qr">
			<div data-role="header" data-position="fixed">
				<a href="#settings" data-role="button" data-icon="gear" data-prefetch>Settings</a>
				<h1>Scan</h1>
			</div>

			<div data-role="content">
				<!--
				Generate and display GR code
				-->
			</div>
		</div>

		<div data-role="page" id="settings">
			<div data-role="header" data-position="fixed">
				<a href="#qr" data-role="button" data-icon="back" data-prefetch>Back</a>
				<h1>Settings</h1>
			</div>

			<div data-role="content">
				<!--
				Logout button
				Map
				-->
			</div>
		</div>
	</body>
</html>