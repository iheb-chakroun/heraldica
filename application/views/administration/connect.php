<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
	<title>Connect to admin dashboard</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" />
	<style>
		.container {
			border: 2px solid blue;
			text-align: center;
			height: 350px;
			width: 400px;
		}

		body {
			padding: 70px;
		}

		h1 {
			margin: auto;
		}

		.row {
			height: 90px;
			width: 396px;
			background-color: paleturquoise;
		}
	</style>
</head>
<div class="container">
	<div class="row">
		<h1><i class="fa fa-lock" aria-hidden="true"></i> Login</h1>

	</div><br /><br />


	<form method="post" action="connect/login">
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fas fa-user-tie"></i></span>
			</div>
			<input type="text" name="username" value="<?php echo set_value('username'); ?>" class="form-control" placeholder="username" />
		</div><br />

		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"><i class="fa fa-key icon"></i></span>
			</div>
			<input type="Password" name="password" class="form-control" placeholder="password" />
		</div><br />
		<br />
		<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
		<br />
	</form>
</div>
