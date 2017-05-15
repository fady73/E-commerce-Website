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
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
      $id = $_GET['id'];

    $db=mysql_connect("localhost","root","");
            mysql_Select_db("e-commarace",$db);
			$query ="DELETE FROM category where id='$id';";
        $data = mysql_query ($query);	
		
				         header("location: admincat.php");

          
      } 
 if($_GET["action"] == "update")  
      {  
      $id = $_GET['id'];
		$q=$_POST["gname"];
    $db=mysql_connect("localhost","root","");
            mysql_Select_db("e-commarace",$db);
			if($_POST["gname"]=="")
		{
			
					         header("location: admincat.php");

		}
		else{
			$query ="update category set name='$q' where id='$id';";
        $data = mysql_query ($query);

					         header("location: admincat.php");
		}
          
      }	  
   
  if($_GET["action"] == "add")  
      {  
  $name1 = $_POST['id']; 

$name = $_POST['gnameadd']; 
		if($_POST['gnameadd']=="")
		{
			
					         header("location: admincat.php");

		}
		else{
    $db=mysql_connect("localhost","root","");
      mysql_Select_db("e-commarace",$db);
	$query = "INSERT INTO category  VALUES (' $name1 ','$name')";   
     $data = mysql_query ($query);

		         header("location: admincat.php");
		}
          
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
                  
                    <li class="active">
                        <a href="admincat.php">Category admin</a>
                    </li>
					<li >
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
        <th> Name</th>
       <th>  Update category name</th>
	   <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
      
	  		<?php
     $db=mysql_connect("localhost","root","");
     mysql_Select_db("e-commarace",$db);
     $result=mysql_query("select * from category;");
   if(mysql_num_rows($result)>0) 
   {
	while($data=mysql_fetch_assoc($result))
	{
					   	  echo ' <tr><td>'.$data['id'].'</td>';

						  echo ' <td>'.$data['name'].'</td> 
						  <td> 
						   <form method="post" action="admincat.php?action=update&id='.$data['id'].'">
		                       <div class="col-md-3">  
							   <input type="text" name="gname" class="form-control" /> 
							   </div> 
 		                      
                               <input type="submit" name="update" style="margin-top:5px;" class="btn btn-success" value="update" />
							   
							   </form>
						  </td>
						  <td> 
						   <form method="post" action="admincat.php?action=delete&id='.$data['id'].'">

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
 
				  
						<form method="post" action="admincat.php?action=add">
						<div class="col-md-2"> 
							   Enter category id
								</div>
		                       <div class="col-md-2"> 
							    <input type="text" name="id" class="form-control" /> 
								</div>
								<div class="col-md-3"> 
							   Enter category Name <span style="color:red">*</span>
								</div>
								<div class="col-md-2"> 
							   <input type="text" name="gnameadd" class="form-control" /> 
							   </div> 
							<div class="col-md-3">
                               <input type="submit" name="add" style="margin-top:5px;" class="btn btn-success" value="New Catgorey" /> 
							   </div>
							   </form>
							   
		
</div>
</body>



</html>