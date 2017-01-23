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
 $userID= $_SESSION['userID'];
 $query = "SELECT *FROM Customer WHERE CustomerID = '$userID' ";
 $result = mysqli_query($conn,$query);
 $row = mysqli_fetch_array($result);
 $customerName = $row['CustomerName'];
 $Email= $row['Email'];
 $DeliveryAddress = $row['DeliveryAddress'];
 $PhoneNo = $row['PhoneNo'];
 $Image = $row['Image']['name'];
 $Description = $row['Description'];
 $Country = $row['Country'];
  $query2 = "SELECT *FROM Authentication WHERE CustomerID = '$userID' ";
 $result2 = mysqli_query($conn,$query);
 $row2 = mysqli_fetch_array($result);
 $password = $row2["Password"];
  
  ?>
  <form method="post" action="profile.php" name = "register"  onsubmit = "return test()" class="form-horizontal" role="form" enctype="multipart/form-data">
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<h2><b> PERSONAL DETAILS</b></h2>
		</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2" for="name" required> *Name</label>
			<div class="col-sm-6 col-md-6 col-lg-6 col-xs-">
			<?php echo "<input type='name' name='name' class='form-control' id='name' value='$customerName' required>";?>
			</div>
		</div>
		
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2" for="email" > *Email address</label>
			<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
			<?php echo "<input type='name' name='email' class='form-control' id='email' value='$Email' required>";?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 " for="pass" >*Password</label>
			<div class="col-sm-6 col-md-6 col-xs-6">
			<?php echo "<input type='password' name='password' class='form-control' id='pass' value='$password' required>"; ?><p  style = "color:red"><i id = "errpass"></i></p>
			</div>
		</div>
		
		
	
		
		
		
		<hr/>
		
		<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
		<h2><b> SHIPPING DETAILS</b></h2>
		</div>
		</div>
		
	
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="pno" > *Phone Number</label>
			<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
			<?php echo"<input type='text' name='pnum' class='form-control' id='pho' value='$PhoneNo' required>" ;?>
			</div>
		</div>
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="aln1" > *Delivery Address </label>
			<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
			<?php echo"<input type='text' name='deliveryaddress' class='form-control' id='aln1' value='$DeliveryAddress' required >"; ?>
			</div>
		</div>
		
		
		
		<div class="form-group">
			<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="cntry" > country</label>
			
			<div class="col-xs-6 col-sw-6 col-lg-6" >
			<select class="form-control" name="country"id="cntry" required>
				<?php echo"<option>$Country</option>"; ?>
				<option>Finland</option>
				<option>Nepal</option>
				<option>US</option>
				<option>Germany</option>
				<option>Norway</option>
				<option>Uk</option>
				<option>Canada</option>
				
			
			</select>			
			</div>
		</div>
		
		
		
		
			<div class ="form-group">
		<label class="control-label col-sm-2 col-lg-2 col-md-2 col-xs-2"for="desc" > Description</label>
		<div class="col-sm-6 col-md-6 col-lg-6 col-xs-6">
		<?php echo"<textarea class='form-control' name='des'  rows='4' id='desc' value ='$Description'></textarea>"; ?>
		</div>
		</div>
		
		<hr/>
		<div class="form-group">
		<div class="col-xs-offset-2 col-sm-10" style='float:left'>
		<button type="submit" class="btn btn-default" id="update" name="update">UPDATE MY ACCOUNT</button>
		<?php
		$userID = $_SESSION["userID"];
		echo"<a href='index.php?delAcc=$userID'><button class='btn btn-default' id='delete' name='delete'>DEACTIVE MY ACCOUNT</button></a>";?>
		</div>
		
		
		
		
		</div>
		

		
	
	</form>
	</body></html>

