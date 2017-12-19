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
        <form action="index.php?page=accounts&action=login" method="POST">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#">Web Systems Development-Final Project</a>
                    </div>
                </div>
            </nav>
           <div class = "container" style = "margin-top: 90px;">
                 <h1 align="center"><a href="#">To-do Application Login</a></h1>
                <div class = "row" style = "margin-top: 30px;">
                </div><br>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-4">
                        <div class="form-group">
                           
                            <label for = "Username"><span class="FieldInfo">Username:</span></label>
                            <input class="form-control" type="text" placeholder="Enter Username" name="email" id="email" required>
                            <label for = "Password"><span class="FieldInfo">Password"</span></label>
                            <input class="form-control" type="password" placeholder="Enter Password" name="password" id="password" required>
                            
                        </div>
                        <div class="col-sm-offset-4 col-sm-4">
                            <input class="btn btn-success" type="submit" name="login" value="Login">
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="form-group col-sm-offset-5">
            <label for="no account"><span class="FieldInfo">Don't have a account?</span></label><a href="index.php?page=accounts&action=register"> Register </a>
        </div>
        <script src="js/scripts.js"></script>
    </body>
</html>