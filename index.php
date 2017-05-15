  <?php   
 session_start(); 
 $db=mysql_connect("localhost","root","");
                                   mysql_Select_db("e-commarace",$db);
								   $users= $_SESSION['login_user'];
 $qu2="select sum(quentity*pric)as n from user_product where user_id='$users' and status=0;";
							    $data2 = mysql_query ($qu2);
				if(mysql_num_rows($data2)>0)
						{
					while($data22=mysql_fetch_assoc($data2))
					{	
						$_SESSION['total']=$data22['n'];
				} 
 if(isset($_POST["add_to_cart"]))  
 {  
        

         
				     $insert= $_GET["id"];
									 	$insert2=$_POST["quantity"]; 
										$pri=  $_POST["hidden_price"];
										
										$users= $_SESSION['login_user'];
				   $db=mysql_connect("localhost","root","");
                                   mysql_Select_db("e-commarace",$db);
								   $_SESSION['s']=0;
								   $x1=$_SESSION['s'];
								   $query3 ="select product_id,quentity from user_product where user_id='$users' and status=0;";
								   $d=mysql_query ($query3);
								   if(mysql_num_rows($d)>0)
							     	{
									while($dat=mysql_fetch_assoc($d))
									{	 if($dat['product_id']==$insert )
										{
											$x=$dat['product_id'];
											$query ="DELETE FROM user_product where product_id='$insert';";
                                            $data = mysql_query ($query);
											//$query2 ="Delete user_product set quentity='$insert2' where product_id='$x';";
											//$dx = mysql_query ($query2);	
										//echo '<script>alert("Products already added to cart")</script>';
			                           // echo '<script>window.location="index.php"</script>';
									
										}
										
										
									
									
									
								       
									}
									
								}
														
										$query ="INSERT INTO   user_product(user_id,product_id,quentity,pric) values ('$users', '$insert','$insert2','$pri');";
                                $data = mysql_query ($query);
								
											$qu2="select sum(quentity*pric)as n from user_product where user_id='$users' and status=0;  ";
							    $data2 = mysql_query ($qu2);
				if(mysql_num_rows($data2)>0)
						{
					while($data22=mysql_fetch_assoc($data2))
					{	
						$_SESSION['total']=$data22['n'];
					}
										
						}
								 
								  
			 }  
          
      }  
     
 ?>  
<!DOCTYPE html>

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
	<link rel="shortcut icon" type="image/x-icon" href="img/pageicon.png" />

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:white;">Shop</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php" >Home</a>
                    </li>
					<?php if(isset($_SESSION['admin'])){?>
					 <li>
                        <a href="admincat.php">Category admin</a>
                    </li>
					 <li>
                        <a href="logout.php">Log out</a>
						<li class="o">
					   <a > Welcome <?php echo $_SESSION['admin'];?></a>
					   </li>
                    </li>
					<?php }else {?>
					
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
					 <?php if(!isset($_SESSION['login_user'])){ ?>
					  <li>
					 
                        <a href="login.php">Log in</a>
                    </li>
					 <li>
                        <a href="singup.php">Sign up</a>
                    </li>
					  <?php }
					   else{ ?>
					   <li class="o">
					   <a > Welcome <?php echo $_SESSION['user'];?></a>
					   </li>
					   <li>
                        <a href="logout.php">logout</a>
                    </li>
					<?php } }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->

        <div class="row">

         <div class="col-md-12">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="img/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="img/1.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
				</div>
				</div>
				    <div class="container">

 <div class="col-md-3">
                
					<div class="menu_box">
				   	  	<h3 class="menu_head">Category List</h3>
						
				   	     <ul class="gateory">
		<?php
     $db=mysql_connect("localhost","root","");
     mysql_Select_db("e-commarace",$db);
     $result=mysql_query("select * from category;");
	$chose= $_GET['cat_id'];
					if($chose==0)
						$chose=1;
   if(mysql_num_rows($result)>0)
   {
	while($data=mysql_fetch_assoc($result))
	{
		if($chose==$data['id'])
					   	  echo '<li  style="background-color:black"><a href="index.php?id='.$data['id'].'"  > '.$data['name'].'</a></li>';
					  else
						 echo '<li><a href="index.php?cat_id='.$data['id'].'" > '.$data['name'].'</a></li>';
       }
					 
	}	
 ?>
					   	  	
					   	  	
					   	 </ul>
			   	    </div>
     <?php if(!isset($_SESSION['login_user'])){ ?> 
     					   <h3 style="color:red;"> * Please login first or register if you don't have account </h3>
     <div class="col-md-6" >
     <a href="login.php" style="font-size:25px; text-decoration:none;"> Login</a>
     </div>
          <div class="col-md-6">

     <a href="singup.php" style="font-size:25px; text-decoration:none;"> Regitser</a>
     </div>
   <?php } else {?>
					   <h3>Order Details</h3>  
                <div class=" col-md-3 pull-left">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th align="center" colspan="2"> total</th>  
                         </tr>  
                         
                        
 
                          <?php  
                                    $total = $_SESSION['total'];
	                       ?>  
                          <tr>  
                               <td colspan="1" align="center">total </td>  
                               <td align="center" colspan="2" >$ <?php echo number_format($total, 2); ?></td>  
                          </tr>  
                         
                           <a href="index2.php"> <input type="submit" name="view_Cart" href="" style="margin-top:5px;" class="btn btn-success" value="view Cart" />  </a>
						  
                     </table>  
                </div>
     
       <?php } ?>
     
            </div>
			
			
                <div class="row col-md-9">

				<?php
                if (isset($_SESSION["message"]))
                {
                    echo '	<div class="col-sm-12 col-md-12"> <h3 class="text-center">';
                    echo $_SESSION["message"];
                    echo '</h3></div>';
                    $_SESSION["message"]="";

                }
					$chose= $_GET['cat_id'];
					if($chose==0)
						$chose=1;
       error_reporting(E_ALL ^ E_DEPRECATED);
     $db=mysql_connect("localhost","root","");
      mysql_Select_db("e-commarace",$db);
    $result=mysql_query("select * from product where cat_id=".$chose.";");

	while($data=mysql_fetch_assoc($result))
	{
	
		?>
		<div class="col-sm-4 col-lg-4 col-md-4">
		<form method="post" action="index.php?action=add&id=<?php echo $data['id'];?>">
		 <div class="thumbnail">
		   <img src="<?php echo $data['pic'];?>" alt="">
	  <div class="caption">
    <h4 class="pull-right"> $ <?php echo $data['price'];?></h4>
        <h4><a href="#"><?php echo $data['name'];?></a></h4>
         <p><?php echo $data['description'];?></p></div>
		  <div class="ratings">
                      <p class="pull-right"><?php echo $data['review'];?> Reviews</p>
					   <p>
					   <?php
								 //rate from database
								for( $i = 0; $i<$data['rate']; $i++ ) {
									echo'<span class="glyphicon glyphicon-star"></span>';
									}
								
                                for( $i = 0; $i<(5-$data['rate']); $i++ ) {
									echo'<span class="glyphicon glyphicon-star-empty"></span>';
									}
									?>
							      </p>
           </div>
						 <?php if(!isset($_SESSION['login_user'])){ ?>   
<div class="ratings  ">
		
							 <p class="btn-details pull-right">                                      
							 <i class="fa fa-list"></i> <a href="" class="">  More details</a></p>

                              <p class="btn-add ">
                                            <i class="fa fa-shopping-cart"></i>
											
									  <input type="text" name="quantity" class="form-control" value="1" disabled />  
                               <input type="hidden" name="hidden_name" value="<?php echo $data["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $data["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" disabled />  
							   </p>
								
                            </div>
             <?php } else {?>
              <div class="ratings  ">
		
							 <p class="btn-details pull-right">                                      
							 <i class="fa fa-list"></i> <a href="" class="">  More details</a></p>

                              <p class="btn-add ">
                                            <i class="fa fa-shopping-cart"></i>
											
									  <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $data["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $data["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
							   </p>
								
                            </div>
             <?php } ?>
                        </div>
						</form>
                    </div>
								
	
		
		
<?php	
}

?>
  <!-- /.container -->
<br />  
               
              </div>

            </div>

  
        <!-- Footer -->
        <footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                	<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
    				<div class="cuadro_intro_hover " style="background-color:#cccccc;">
						<p style="text-align:center; margin-top:20px;">
							<img src="img/s.jpg" class="img-responsive" alt="">
						</p>
						<div class="caption">
							<div class="blur"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">THIS IS H3</h3>
								<p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
								<a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
							</div>
						</div>
					</div>
				
	    </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                                            <li> <a href="#"> Lorem Ipsum </a> </li>

                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Lorem ipsum <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container">
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                    <li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
        </div>
    </div>
    <!--/.footer-bottom--> 
        </footer>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>



</body>

</html>
