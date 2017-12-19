<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>My Profile</title>
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
<?php
//this is how you print something  $data contains the record that was selected on the table.
//print_r($data);
?>
<h1 align="center"><a href="#">My Profile</a></h1>
<div class="container-fluid">
                <div class="row">
                    <div class="col-sm-offset-4 col-sm-4">
                        <div>
                            <div class= "form-group">
                                <form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

                                <label for ="firstname"><span class="FieldInfo">First name:</span></label>
                                <input class="form-control" type="text" name="fname" value="<?php echo $data->fname; ?>"><br>

                                <label for ="lastname"><span class="FieldInfo">Last name:</span></label>
                                <input class="form-control" type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
                                
                                <label for ="phone"><span class="FieldInfo">Phone:</span></label>
                                <input class="form-control" type="text" name="phone" value="<?php echo $data->phone; ?>"><br>

                                 <label for ="email"><span class="FieldInfo">Email:</span></label>
                                <input class="form-control" type="text" name="email" value="<?php echo $data->email; ?>"><br>

                                <label for ="birthday"><span class="FieldInfo">Birthday:</span></label>
                                <input class="form-control" type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>

                                <label for ="gender"><span class="FieldInfo">Gender:</span></label>
                                <input class="form-control" type="text" name="gender" value="<?php echo $data->gender; ?>"><br>

                            
                                <input class="btn btn-success pull-left" type="submit" value="Update changes">
                            
                                </form>


   



<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post">
    <button class="btn btn-danger pull-right" type="submit" form="form1" value="delete">Delete</button>
</form>
</div>
</div>
</div>
</div>


<script src="js/scripts.js"></script>
</body>
</html>