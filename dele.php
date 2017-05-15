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
 if(isset($_GET["action"])&&isset($_SESSION['admin']))  
 {  
      if($_GET["action"] == "delete")  
      {  
      $id = $_GET['id'];

    $db=mysql_connect("localhost","root","");
            mysql_Select_db("e-commarace",$db);
			$query ="DELETE FROM product where id='$id';";
        $data = mysql_query ($query);	
		
				         header("location: dele.php");

          
      } 
	  
   
  
 }
?>
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
                  
                    <li >
                        <a href="admincat.php">Category admin</a>
                    </li>
					<li class="active">
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


<div class="container" style="margin-top:40px;">
  <h2>CATEGORY LIST</h2>
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th> catagory id</th>
		        <th> catagory name</th>

       <th>   protuct name</th>
	   <th>   protuct image</th>
	   	   <th>   protuct description</th>
	   <th>   protuct price</th>
	   <th>   protuct review</th>
	   <th>   protuct rate</th>

	   <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
      
	  		<?php
     $db=mysql_connect("localhost","root","");
     mysql_Select_db("e-commarace",$db);
     $result=mysql_query("select * from product;");
   if(mysql_num_rows($result)>0) 
   {
	while($data=mysql_fetch_assoc($result))
	{
					   	  echo ' <tr><td>'.$data['id'].'</td>';
						 $g= $data['cat_id'];
						       $result2=mysql_query("select name from category where id='$g';");
 if(mysql_num_rows($result2)>0) 
   {
	while($data2=mysql_fetch_assoc($result2))
	{
		$da4=$data2['name'];
	} 
   } 	echo ' <td>'.$data['cat_id'].'</td>';
   echo ' <td>'.$da4.'</td>';
   
					   	  echo ' <td>'.$data['name'].'</td>';
						 echo ' <td><img src="'.$data['pic'].'" height="50" width="50" alt="">
</td>';

						  echo ' <td>'.$data['description'].'</td>';

					   	  echo ' <td>'.$data['price'].'</td>';
					   	  echo ' <td>'.$data['review'].'</td>';

						  echo ' <td>'.$data['rate'].'</td> 
					
						  <td> 
						   <form method="post" action="dele.php?action=delete&id='.$data['id'].'">

                               <input type="submit" name="delete" style="margin-top:5px;" class="btn btn-success" value="delete" /> 
							   </form>
						  </td>


						  </tr>';

       }
					 
	}	
 ?>
       
     
    </tbody>
  </table>
  </div>
 
				  
						<form method="post" action="n.php">
						
							<div class="col-md-3">
                               <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="New Catgorey" /> 
							   </div>
                        </form>
							   
		
</div>
</body>



</html>