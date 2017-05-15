
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

			<?php
					
       error_reporting(E_ALL ^ E_DEPRECATED);
     $db=mysql_connect("localhost","root","");
      mysql_Select_db("e-commarace",$db);
		if(isset($_POST['x']))
		{
			$firstname = $_POST['fname']; 
			$lastname = $_POST['lname'];
			$email = $_POST['email']; 
			$password = $_POST['pass'];
			$address = $_POST['address'];
			$age = $_POST['age'];
			$card = $_POST['card'];
			$query = "INSERT INTO user (firstname,lastname,password,email,address,age,credcard) VALUES 
			('$firstname','$lastname','$password','$email','$address','$age','$card')";
			$data = mysql_query ($query);

			         header("location: login.php");

		}
	


?>
 
<body>

    <!-- Navigation -->
	
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:white;">Shop</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse  navbar-right" id="bs-example-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php" >Home</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
					 <li>
                        <a href="login.php">Log in</a>
                    </li>
					 <li  class="active">
                        <a href="singup.php">Sign up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	

<div id="fullscreen_bg" class="fullscreen_bg">
          <div class="row col-md-9">
	
 <div class="form-signin">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center">
                        SIGN UP</h3>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input type="text" class="form-control" name="fname" placeholder="First Name" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control" name="lname" placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                            <input type="text" class="form-control" name="email" placeholder="Email" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="text" class="form-control" name="pass" placeholder="Password" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                            <input type="text" class="form-control" name="address" placeholder="Address" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                            <input type="text" class="form-control" name="age" placeholder="Age" />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
                            <input type="text" class="form-control" name="card" placeholder="Credit card" />
                        </div>
                    </div>
                    
                    
                </div>
                <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="x">Sign Up</button>
            </div>
			
			</form>
            </div>
        </div>
    </div>
</div>
</div>
	
</div>
	

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
  
</body>
<html>