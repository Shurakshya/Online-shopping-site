<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" media="all" href="test.css" />
  <link rel="stylesheet" type="text/css" media="all" href="webshop.css" />
  </head>
  <body>
  
  <?php 
  
 
  
  include("connection.php");
 $updateID= $_GET['updateProID'];
 $query = "SELECT *FROM Product WHERE ProductID = '$updateID' ";
 $result = mysqli_query($conn,$query);
 $row = mysqli_fetch_array($result);
 $productName = $row['ProductName'];
 
 $KeyWord= $row['KeyWord'];
 $ProductQuantity = $row['ProductQuantity'];
 $Price = $row['Price'];
 $Color = $row['Color'];
 $Model = $row['Model'];
 $Description = $row['Description'];
 $ManYear = $row['ManufactureYear'];
 $comName = $row['CompanyName'];
 $CatName = $row['CategoryName'];

 
  
  ?>
 <form class="form-horizontal" role="form" action="details.php" method="GET" enctype="multipart/form-data">
			<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<h2><b> Product Details</b></h2>
		</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2" for="name" required> Name</label>
		<div class="col-sm-5 col-md-3 col-lg-3 col-xs-6">
			<?php echo "<input type='name' name='proName' class='form-control' id='proName' value=' $productName' required>";?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2" for="name" required> ProductID</label>
		<div class="col-sm-5 col-md-3 col-lg-3 col-xs-6">
			<?php echo "<input type='name' name='proID' class='form-control' id='proID' value='$updateID' required>";?>
			</div>
		</div>
		
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2" for="email" > company</label>
			<div class="col-sm-5 col-md-3 col-lg-3 col-xs-6">
			<?php echo "<input type='name' name='company' class='form-control' id='company' value='$comName' required>";?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="pass" >keyword</label>
			<div class="col-sm-5 col-md-3 col-lg-3 col-xs-6">
			<?php echo "<input type='name' name='keyWord' class='form-control' id='keyword' value='$KeyWord' required>"; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="pass" >Category</label>
			<div class="col-sm-5 col-md-3 col-lg-3 col-xs-6">
			<?php echo "<input type='name' name='category' class='form-control' id='category' value='$CatName' required>"; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="pass" >Price</label>
			<div class="col-sm-5 col-md-3 col-lg-3 col-xs-6">
			<?php echo "<input type='name' name='price' class='form-control' id='category' value='$Price' required>"; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="pass" >Color</label>
			<div class="col-sm-5 col-md-3 col-lg-3 col-xs-6">
			<?php echo "<input type='name' name='color' class='form-control' id='color' value=' $Color' required>"; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="pass" >Model</label>
			<div class="col-sm-5 col-md-3 col-lg-3 col-xs-6">
			<?php echo "<input type='name' name='Model' class='form-control' id='Model' value=' $Model' required>"; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="pass" >Manufacture Year</label>
			<div class="col-sm-5 col-md-3 col-lg-3 col-xs-6">
			<?php echo "<input type='name' name='manYear' class='form-control' id='manYear' value=' $ManYear' required>"; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="pass" >Quantity</label>
			<div class="col-sm-5 col-md-3 col-lg-3 col-xs-6">
			<?php echo "<input type='name' name='quantity' class='form-control' id='quantity' value='  $ProductQuantity' required>"; ?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="pass" >Description</label>
			<div class="col-sm-5 col-md-3 col-lg-3 col-xs-6">
			<?php echo "<input type='name' name='desc' class='form-control' id='desc' value='$Description' style ='height:80px'>"; ?>
			</div>
		</div>
		
		
		
	
		
		
		
		
		<hr/>
		<div class="form-group">
		<div class="col-xs-offset-2 col-sm-10" style='float:left'>
		<button type="submit" class="btn btn-default" id="updateProduct" name="updateProduct">UPDATE THIS ITEM</button>
		
		</div>
		
		
		
		
		</div>
	
	</form>
</div>
 <div class ="footer">
            
            <div class="well">
                <h4> ABOUT </h4>
                <p> Online store is among the top company of the town which ensures your happiness. Within the past ten years of establishment, it
                    has flourished around the globe. With the joint venture of three associatives, now Online Store proudly annouces their success and
                    reliabitity among their customers.
                </p>
            </div>
            <div class="row" style="padding:0px; padding-bottom:20px;">
                <div class="col-sm-4">
                    <h3> Contact us </h3><hr>
                        <h4>Get in touch</h4>
                        Tel: +1 (000) 000-0000<br>
                        Email: info@companyname.com

                        <br><h4>Visit our store</h4>
                        Vanhaa Maantie 6<br>
                        Espoo<br>
                        02650<br>
                        <a href="googlemap.html">View on Google Maps </a>
 

                </div>
                <div class="col-sm-4">
                    <h3> Connect with us </h3><hr>
                    <a class="test" href="https://www.facebook.com/shurakshya.kharel" target="_blank"><img src="facebook1.png" alt="fbimage"></a> 
                    <a class="test" href="https://www.instagram.com/shurakshya/"><img src="instagram1.png" alt="instagramicon"></a>
                    <a class="test" href="https://mail.google.com/mail/u/0/#inbox"><img src="mail1.png" alt="gmailimage"></a>
                    
                </div>
                <div class= "col-sm-4">
                    <h3> Recent updates </h3><hr>
                    ngogks
                    nsiodbiosf
                    nsiodbksf
                    nvsl
                </div>              
            </div>
           <p class="small" style="padding:15px;"> All prices are in EURO. &copy; 2015 Online Store.
                    </p>
        </div>


</body>
</html>