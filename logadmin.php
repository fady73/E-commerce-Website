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
	 
 session_start();

       error_reporting(E_ALL ^ E_DEPRECATED);
     $db=mysql_connect("localhost","root","");
      mysql_Select_db("e-commarace",$db);
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
		
		
			$usernm = $_POST['usern']; 
			$password = $_POST['pass'];
			
       $queryadmin="select id from admin where pass='$password'AND name='$usernm'";
       $result2 = mysql_query($queryadmin,$db);
      $count2 = mysql_num_rows($result2);
      // If result matched $myusername and $mypassword, table row must be 1 row
		$_SESSION['admin']=$usernm;
           if($count2 == 1) {
		
        
         header("location: admincat.php");
      }
   }

			
		
	


?>
<body>

    <!-- Navigation -->
  
	
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