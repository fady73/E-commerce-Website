<html lang="en">
<?php
// Start the session
session_start();
?>
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
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		
			$usernm = $_POST['usern']; 
			$password = $_POST['pass'];
			
			$query = "select id from user where password='$password' AND firstname='$usernm'";
       $queryadmin="select id from admin where pass='$password'AND name='$usernm'";
			   $result = mysql_query($query,$db);
       $result2 = mysql_query($queryadmin,$db);
      $count = mysql_num_rows($result);
      $count2 = mysql_num_rows($result2);
      // If result matched $myusername and $mypassword, table row must be 1 row
		 $_SESSION['user']=$usernm;
      if($count == 1) {
		  while($data=mysql_fetch_assoc($result))
	{
         $_SESSION['login_user'] = $data['id'];
	}
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
		 
      }
	  
           if($count2 == 1) {
		
          $_SESSION['admin']=$usernm;
         header("location: admincat.php");
      }
   }

			
		
	


?>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:white;">Shop</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse " id="bs-example-navbar-1">
     <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php" >Home</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
					 <li class="active">
                        <a href="login.php">Log in</a>
                    </li>
					 <li  >
                        <a href="singup.php">Sign up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
<div id="fullscreen_bg" class="fullscreen_bg">
 <div class="form-signin">
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    	 <h3 class="text-center">
                        SIGN IN</h3> 
        <div class="form-group">                
        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                            </span>
                            <input type="text" class="form-control" name="usern" placeholder="username" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input type="password" class="form-control" name="pass" placeholder="Password" />
                        </div>    </div>

		<button class="btn btn-md btn-primary btn-block" name="x2" type="submit">
			Sign In
		</button>
         <button id="login_register_btn" type="button" class="btn btn-link" >Register</button>
	</form>
     </div>
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