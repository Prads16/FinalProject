<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>My Tasks</title>
		<meta name="description" content="My Tasks">
		<meta name="author" content="SitePoint">
		<link rel="stylesheet" href="css/styles.css?v=1.0">
		<!--[if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
		<![endif]-->
	</head>
	<body class="bg-success">
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">To do Application</a>
				</div>
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<form action="index.php?page=accounts&action=logout" method="post" style="float:right;">
							<li><span class="glyphicon glyphicon-log-in"></span><button class="btn btn-link navbar-btn" type="submit">Logout</button></li>
						</form>
						
						<form action="index.php?page=accounts&action=profile" method="post" style="float:right;">
							<li><span class="glyphicon glyphicon-user"></span><button class="btn btn-link navbar-btn" type="submit">My Profile</button></li>
						</form>
					</li>
				</ul>
			</div>
		</nav>
		<div class = "container" style = "margin-top: 90px;">
			<center><h1> To do List </h1></center>
			<div class = "row" style = "margin-top: 30px;">
				
				
			</form>
			<div class="col-sm-offset-0">
				<form action="index.php?page=tasks&action=create" method="POST">
					<input class="btn btn-success pull-left" type="submit" value="Create task">
				</div>
				
				
				
			</div><br>
			<?php
			print utility\htmlTable::genarateTableFromMultiArray($data);
			?>
		</div>
		
		
		<hr><br>
		<!-- Modal -->
	</div>
</div>
</body>
<script src="js/scripts.js"></script>
</body>
</html>