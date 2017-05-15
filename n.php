		<?php
// copy image 
		if(isset($_POST['submit']))
		{
		$product_name=$_POST['product_name'];
		$details=$_POST['details'];
		$price=$_POST['price'];
		$product_type=$_POST['product_type'];
		
		//picture coding
		$picture_name=$_FILES['picture']['name'];
		$picture_type=$_FILES['picture']['type'];
		$picture_tmp_name=$_FILES['picture']['tmp_name'];
		$picture_size=$_FILES['picture']['size'];
		 $pic="img/".$picture_name;
		 
		$rat='0';
		$review='0';
$db=mysql_connect("localhost","root","");
      mysql_Select_db("e-commarace",$db);
	  
	  			$query2 ="select id from category where name='$product_type';";
				$data = mysql_query ($query2);
				if(mysql_num_rows($data)>0) 
						{
					while($data2=mysql_fetch_assoc($data))
					{	
						$_SESSION['id']=$data2['id'];
				} 
						}
						$id=$_SESSION['id'];
$db=mysql_connect("localhost","root","");
      mysql_Select_db("e-commarace",$db);
	  //$d="iNSERT INTO admin (name,pass) values ('dd','aa');";
	    //  echo  $daa4 = mysql_query ($d); 

	$query = "INSERT INTO product(cat_id , price , name , description , pic , review , rate) values ('$id','$price','$product_name','$details','$pic','$review','$rat');";   
      $data4 = mysql_query ($query); 
	 
		if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
		{
			if($picture_size<=50000000)
			{
				$pic_name=$picture_name;
				move_uploaded_file($picture_tmp_name,"img/".$pic_name);
				

		}else
		{}
		}else
		{}
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

		</head>
		<body>
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
                    <li >
                        <a href="index.php" >Home</a>
                    </li>
                  
                    <li>
                        <a href="admincat.php">Category admin</a>
                    </li>
					<li  class="active" >
                        <a href="dele.php">Product admin</a>
                    </li>
					 <li>
                        <a href="logout.php">Log out</a>
						<li class="o">
					   <a > Welcome <?php echo $_SESSION['admin'];?></a>
					   </li>
                    </li>
					</ul>
 
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

			<div class="container-fluid" style="margin-top:80px;">
			<div class="col-md-9 content" style="margin-left:10px">
			<div class="panel panel-default">
			<div class="panel-heading" style="background-color:#c4e17f">
			<h1><span class="glyphicon glyphicon-tag"> </span> Product / Add Product  </h1></div><br>
			<div class="panel-body" style="background-color:#E6EEEE;">
				<div class="col-lg-7">
				<div class="well">
				<form action="n.php" method="post" name="form" enctype="multipart/form-data">
				<p>Title</p>
				<input class="input-lg thumbnail form-control" type="text" name="product_name" id="product_name" autofocus style="width:100%" placeholder="Product Name" required>
		<p>Description</p>
		<textarea class="thumbnail form-control" name="details" id="details" style="width:100%; height:100px" placeholder="write here..." required></textarea>
		<p>Add Image</p>
		<div style="background-color:#CCC">
		<input type="file" style="width:100%" name="picture" class="btn thumbnail" id="picture" >
		</div>
		</div>
		<div class="well">
		<h3>Pricing</h3>
		<p>Price</p>
		<div class="input-group">
			  <div class="input-group-addon">$</div>
			  <input type="text" class="form-control" name="price" id="price"  placeholder="0.00" required>
			</div><br>
	
			</div>
				</div>  
				<div class="col-lg-5">
				<div class="well">
		<h3>Category</h3>  
		<p>Category list</p>
		<input type="text" name="product_type" id="product_type" class="form-control" placeholder="Shirt, T-Shirt">
		
		
		</div>          
		</div>

		<div align="center">
			<button type="submit" name="submit" id="submit" class="btn btn-default" style="width:100px; height:60px"> Cancel</button>
			<button type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px"> Add Product</button>
			</div>
				</form>
		 
			</div>
		</div></div></div>
		</body>
		</html>