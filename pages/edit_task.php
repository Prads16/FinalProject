<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<title>Edit Task</title>
		<meta name="description" content="The HTML5 Herald">
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
				<h1 align="center"><a href="#">Edit Task</a></h1>
				<div class = "row" style = "margin-top: 30px;">
				</div><br>
			</div>
			<div class="col-sm-offset-4 col-sm-4">
			<form action="index.php?page=tasks&action=update&id=<?php echo $data->id; ?>" method="post">
				<label for ="CreateDate"><span class="FieldInfo">Created Date:</span></label>
	            <input class="form-control" type="text" name="createddate" id='createddate' value="<?php echo $data->createddate; ?>"><br>

	            <label for ="owneremail"><span class="FieldInfo">Owner email:</span></label>
	            <input class="form-control" type="text" name="owneremail" id='owneremail' value="<?php echo $data->owneremail; ?>"><br>

	            <label for ="ownerid"><span class="FieldInfo">Owner Id:</span></label>
	            <input class="form-control" type="text" name="ownerid" id='ownerid' value="<?php echo $data->ownerid; ?>"><br>

	            <label for ="duedate"><span class="FieldInfo">Due Date:</span></label>
	            <input class="form-control" type="text" name="duedate" id='duedate' value="<?php echo $data->duedate; ?>"><br>

	            <label for ="message"><span class="FieldInfo">Message:</span></label>
	            <input class="form-control" type="text" name="message" id='message' value="<?php echo $data->message; ?>"><br>

				<input class="btn btn-success" align="center" type="submit" name="save" value="Save changes" >
			</form>
			</div>
			<script src="js/scripts.js"></script>
		</body>
	</html>

	