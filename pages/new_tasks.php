<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Add a Task</title>

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body class="bg-success">
   
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Final Project</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
     <li><a href="index.php?page=accounts&action=register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="https://web.njit.edu/~pra22/FinalProject/mvc/index.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
  </nav>

<?php
//this is how you print something
//print utility\htmlTable::genarateTableFromMultiArray($data);
?>
<div class="col-sm-offset-4 col-sm-4">
      <h1 align="center"><a href="#">Add a new Task</a></h1>
    </div><br>
<form action="index.php?page=tasks&action=addTask" method="POST">
<div class="container-fluid">
	
	<div class="row">
		<div class="col-sm-offset-4 col-sm-4">
			<div>
				
					<div class= "form-group">
						<label for ="CreateDate"><span class="FieldInfo">Created Date:</span></label>
                        <input class="form-control" type="text" placeholder="Enter Created date" name="createddate">

                        <label for ="DueDate"><span class="FieldInfo">Due Date:</span></label>
                        <input class="form-control" type="text" placeholder="Enter Due Date" name="duedate">
						
                        <label for ="Message"><span class="FieldInfo">Message:</span></label>
                        <input class="form-control" type="text" placeholder="Enter Message" name="message">

                         <div  class="col-sm-offset col-sm-15 select">
                        <label for ="Status"><span class="FieldInfo pull-left">Status:</span></label>
                       <div>
                                                <select name="isdone" class="form-control">
                                                    <option>Done</option>
                                                    <option>Not Done</option>
                                                    
                                                </select>
                                            </div>

                     </div>
					</div>
					
					<div class="col-sm-offset-0">
                    <input class="btn btn-success pull-left" type="submit" name="addtask" value="Add Task" >
                    </div>
                  </form>
                    <div>
                     <form action="index.php?page=tasks&action=oneUser method="POST" >
                     <input class="btn btn-success pull-right" type="submit" name="submit" value="Cancel">
                    </div>
			</div>
		</div>
	</div>
</div>
  </form>  
<script src="js/scripts.js"></script>
</body>
</html>
