<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login Page</title>
    <meta name="description" content="Login Page">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body class="bg-success">

<form action="index.php?page=accounts&action=signup" method="POST">
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
</form>
<h1>
    <?php

    //this how to print some data;
    echo $data['site_name'];

    ?> </h1>

<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>
<form action="index.php?page=accounts&action=login" method="POST">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
        <div>
            
            <div class="form-group">
                <label for="Username"><span class="FieldInfo">UserName:</span></label>
                <input class="form-control" type="text" placeholder="Enter Username" name="uname" id="uname" required><br>
                <label for="Password"><span class="FieldInfo">Password:</span></label>
                <input class="form-control" type="password" placeholder="Enter Password" name="psw" id="psw" required>
                
            </div>
    
            <div class="col-sm-offset-4">
            <input class="btn btn-success" type="submit" name="submit" value="Sign in">
            </div>
        </div>
        </div>
    </div>
</div>
</form>


<div class="container-fluid">
    <div class="col-sm-offset-4 col-sm-4">
        <div>
            <form action="index.php?page=accounts&action=signup" method="POST">
                <div class="form-group col-sm-offset-2">
                  <label for="no account"><span class="FieldInfo">Don't have a account?</span></label><a href="index.php?page=accounts&action=signup"> Register </a>
              </div>
        </div>
    </div>
</div>
</form>

<script src="js/scripts.js"></script>

</body>

</html>