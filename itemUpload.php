<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Shopping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" media="all" href="webshop.css" />
  <script
    src="http://maps.googleapis.com/maps/api/js">
</script>
<script>
$(document).ready(function(){

  $(".searching").bind('click', function(e){
    var url =  $(this).attr('href');
    $('#customerSearch').load(url);
    e.preventDefault(); // stop the browser from following the link
});
  }); 

  </script>
</head>

<body>

 <?php
    include('functions.php');


    ?>

<div class="container-fluid">
 <ul class="nav navbar-nav navbar-right">
      
		<?php
        getMenu();
		?>
		
        <li> <a class="searching" href="detailedSearch.php"> Detailed Search </a></li>
      </ul>
        <!-- this class contains search part and our webshop icon -->  
    <div class="jumbotron">
      <div id="customerSearch"></div>
      <div class="container text-right">
        <form class="navbar-form" role="search" action="searchResult.php" method="GET" enctype="multipart/form-data">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search your item" name="srch-term" id="srch-term">
                    <div class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="search">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
              </div>
            </form>
      </div>

        <div class="container text-left" style ="margin-left:0px">
          <a href= "index.php"><img src = "scubic.png" width=350px></a>
		  
        </div>
		 <div class="container text-center" >
         <?php
		 delAccount();
		  ?>
		  <?php
		delProduct();
		  ?>
		   <?php
		delitem();
		  ?>
        </div>
    </div>

        <!-- navbar to indicate the category, product i.e. dropdown menus -->
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
           
    
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
				 <li><a href="nextPage.php"  style="left-margin:30px">All items</a></li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Companies<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                       <?php

getcompany();

                       ?>
                    </ul>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Type</a>
                    <ul class="dropdown-menu">
                         <?php

getCat();

                       ?>                   
					   </ul>
                </li>

                
           </ul>
      </div>
    </nav>

	

    <form class="form-horizontal" role="form" action="newTest.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<h2><b>Product Details </b></h2>
		</div>
		</div>
		
		
		<div class="form-group">
			<label class="control-label col-sm-2" for="Product"> *ProductName</label>
			<div class="col-sm-5">
			<input type="Text" name="ProductName" class="form-control" id="ProductName" >
			</div>
		</div>
	<div class="form-group">
			<label class="control-label col-sm-2" for="Product"> *ProductID</label>
			<div class="col-sm-5">
			<input type="Text" name="ProductID" class="form-control" id="ProductName" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 " for="Company">*Company</label>
			<div class="col-sm-5">
			<input type="Text" name="Company" class="form-control" id="Company">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="SerialNo">keyword</label>
			<div class="col-sm-5">
			<input type="Text" name="KeyWord" class="form-control" id="SerialNo">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 " for="CatName">Category</label>
			<div class="col-sm-5">
			<input type="Text" name="CatName" class="form-control" id="CatName">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="CatName">Price</label>
			<div class="col-sm-5">
			<input type="Text" name="Price" class="form-control" id="Price">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="Color">Color</label>
			<div class="col-sm-5">
			<input type="Text" name="Color" class="form-control" id="Color">
			</div>
		</div>
		
		<hr/>
		
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<h2><b> OTHER DETAILS</b></h2>
		</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2"for="fnm"> Model</label>
			<div class="col-sm-5">
			<input type="text" name="Model" class="form-control" id="Model" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2"for="ManYear">Manufacture Year</label>
			<div class="col-sm-5">
			<input type="text" name="ManYear" class="form-control" id="ManYear" >
			</div>
		</div>
		
			<div class="form-group">
			<label class="control-label col-sm-2"for="Qunatity">Quantity</label>
			<div class="col-sm-5">
			<input type="text" name="Quantity" class="form-control" id="Quantity" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2"for="pno"> Image</label>
			<div class="col-sm-5">
			<input type="file" name="ProductImage" class="form-control" id="Image" >
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2"for="aln1"> Description</label>
			<div class="col-sm-5">
        <textarea class="form-control" rows="5" id="Description" name ="Description"></textarea>
			</div>
		</div>
		

		<div class="form-group">
		<div class="col-xs-offset-2 col-sm-10">
		<button type="submit" class="btn btn-default" id="create">Upload File</button>
		
		</div>
		</div>
	
	</form><br/><br/>
	<?php
	include('footer.html');
	
	
	?>
</div>


</body>
</html>



