<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
	body, html {
		background: #fff url('<?php echo base_url() . "assets/images/skulls.png"; ?>');
		font-family: arial;
	}

	.login_form {
		width: 200px;
		background: #fff url('<?php echo base_url() . "assets/images/stardust.png"; ?>');
		margin: 250px auto 0;
		padding: 10px 10px 10px 10px;
	}

	.login_form input[type=text], .login_form input[type=password] {
		width: 98%;
	}

	.login_form input[type=submit] {
		width: 100%;
		background: none;
		border: none;
		background: #ffebb5;
		padding: 5px 5px 5px 5px;
		border: 1px #e2e2e2 solid;
		border-radius: 3px;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		-o-border-radius: 3px;
		-ms-border-radius: 3px;
	}

	.login_form input[type=submit]:hover {
		background: #f5ce63;
	}

	.login_form h1 {
		padding: 0;
		margin: 0;
		color: #fff;
		text-transform: uppercase;
	}
	</style>
</head>
<body>