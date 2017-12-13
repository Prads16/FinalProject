<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Registration Page</title>

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
   
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Final Project</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
  </nav>

<?php
//this is how you print something
//print utility\htmlTable::genarateTableFromMultiArray($data);
?>
<form action="index.php?page=accounts&action=register" method="POST">
<div class="container-fluid">
	<div class="col-sm-offset-5">
  <h3>Registration</h3>
   
</div>
	<div class="row">
		<div class="col-sm-offset-4 col-sm-4">
			<div>
				
					<div class= "form-group">
						<label for ="Email"><span class="FieldInfo">Email:</span></label>
                        <input class="form-control" type="text" placeholder="Enter Email" name="email" required>

						<label for ="FirstName"><span class="FieldInfo">First Name:</span></label>
                        <input class="form-control" type="text" placeholder="Enter First Name" name="fname" required>
						
                        <label for ="LastName"><span class="FieldInfo">Last Name:</span></label>
                        <input class="form-control" type="text" placeholder="Enter Last Name" name="lname" required>

                        <label for ="PhoneNumber"><span class="FieldInfo">Phone No.:</span></label>
                        <input class="form-control" type="text" placeholder="Enter Phone number" name="phone" required>

                        <label for ="Birthday"><span class="FieldInfo">Birth Date:</span></label>
                        <input class="form-control" type="text" placeholder="Enter Birth Date" name="bday" required>

                        <label for ="Gender"><span class="FieldInfo">Gender:</span></label>
                        <input class="form-control" type="text" placeholder="Enter Gender" name="gender" required>

                        <label for ="Password"><span class="FieldInfo">Password:</span></label>
                        <input class="form-control" type="password" placeholder="Enter Password" name="password" required>
					</div>
					
					<div class="col-sm-offset-4">
                    <input class="btn btn-success" type="submit" name="submit" value="Register"><a href="index.php">Cancel</a>
                    </div>
			</div>
		</div>
	</div>
</div>
</form>
<script src="js/scripts.js"></script>
</body>
</html>
