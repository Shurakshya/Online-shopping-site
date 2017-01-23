<?php
include('connection.php');
session_start();

function getCompany(){ //gets the name of the vehicle companies 
global $conn;
$getCom ="select  distinct CompanyName from Product ";



$resultCom = mysqli_query($conn,$getCom);
while ($rowCom=mysqli_fetch_array($resultCom)){

$comName = $rowCom['CompanyName'];
echo " <li><a href='searchResult.php?comProName=$comName'>$comName</a></li>";

}
}
function getCat(){  //gets the Type of the vehicles 
	global $conn;
	$getCat = "select distinct CategoryName from Product";
	$resultCat = mysqli_query($conn,$getCat);
	while($rowCat=mysqli_fetch_array($resultCat)){
		$catName = $rowCat['CategoryName'];
		echo"<li><a href ='searchResult.php?catProName=$catName'>$catName </a> </li>";

	}
	
	
}	

function getAllPro(){  
     //gets all Items
	global $conn;
	$getTop = "select  *from Product";
	$resultTop = mysqli_query($conn,$getTop);
	$num = mysqli_num_rows($resultTop);
	echo " <p style = 'color:blue;font-weight:bold;font-size:200%;text-align:center;font-family:courier'> $num Items  are Available </p>";
	while($rowTop=mysqli_fetch_array($resultTop)){
		$topName = $rowTop['ProductName'];
		$topPrice = $rowTop['Price'];
		$topImg = $rowTop['Image'];
		$topID  = $rowTop['ProductID'];
		echo"<div class='col-sm-3'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='details.php?proID=$topID'>
					<img src='ProImages/$topImg' alt='Image'  style='width:250px; height:200px; border:1px solid black'></a></div>
                    <div class='panel-footer'>$topName</div>
                    <div class='panel-footer'>£ $topPrice</div>
                </div>
            </div>";

	}
	
	
	
}
 
function getTop(){  
     //gets 4  Top Items
	global $conn;
	if ((!isset($_GET[comProName])) && (!isset($_GET['catProName']))){
	$getTop = "select * from Product order by RAND() LIMIT 4";
	$resultTop = mysqli_query($conn,$getTop);
	$num = mysqli_num_rows($resultTop);
	echo"<p style =' font-size:200%; font-family:courier; font-weight:bold; text-align: center'>Top $num Items </p>";
	while($rowTop=mysqli_fetch_array($resultTop)){
		$topName = $rowTop['ProductName'];
		$topPrice = $rowTop['Price'];
		$topImg = $rowTop['Image'];
		$topID  = $rowTop['ProductID'];
		echo" <div class='col-sm-3' style ='text-align:center ; font-weight:bold'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='details.php?proID=$topID'><img src='ProImages/$topImg'   alt='Image'  style='width:200px; height:200px; border:1px solid black'></a></div>
                    <div class='panel-footer'>$topName</div>
                    <div class='panel-footer'>£ $topPrice</div>
                </div>
            </div>";

	}
	
	}
	
}
function getNew(){       //gets 8 the New Items
	global $conn;

	$getNew = "select * from Product order by ProductID DESC 
	LIMIT 8";
	$resultNew = mysqli_query($conn,$getNew);
	$num = mysqli_num_rows($resultNew);
	echo"<p style =' font-size:200%; font-family:courier; font-weight:bold; text-align:center'>New	$num  items</p>";
	while($rowNew=mysqli_fetch_array($resultNew)){
		$newName = $rowNew['ProductName'];
		$newPrice = $rowNew['Price'];
		$newImg = $rowNew['Image'];
		$newID  = $rowNew['ProductID'];
		 echo"<div class='col-sm-3' style ='text-align:center; font-weight:bold'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='details.php?proID=$newID'><img src='ProImages/$newImg' alt='Image'  style='width:200px; height:200px; border:1px solid black' ></a></div>
                    <div class='panel-footer'>$newName</div>
                    <div class='panel-footer'>£ $newPrice</div>
                </div>
            </div>";

	
	
	
	
}
}



	


	

function search(){    //manually search the items 



global $conn;
if (isset($_GET['search'])){
$value = $_GET['srch-term'];

$searchQuery = "SELECT * FROM Product WHERE KeyWord like '%$value%'";
	$resultSearch = mysqli_query($conn,$searchQuery) or die (mysqli_error($resultSearch));
	if ((mysqli_num_rows($resultSearch))>0){
		$num = mysqli_num_rows($resultSearch);
		
	echo"<p style ='color:blue; font-size:140%; font-family:courier; font-weight:bold; text-align:center'>Showing $num items for <i>$value </i></p>";
		
		
	while($rowSearch=mysqli_fetch_array($resultSearch)){
		$searchName = $rowSearch['ProductName'];
		$searchPrice = $rowSearch['Price'];
		$searchImg = $rowSearch['Image'];
		$searchID = $rowSearch['ProductID'];
	echo" <div class='col-sm-3'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='details.php?proID=$searchID'><img src='ProImages/$searchImg' alt='Image'  style='width:200px; height:200px; border:1px solid black'></a></div>
                    <div class='panel-footer'>$searchName</div>
                    <div class='panel-footer'>£ $searchPrice</div>
                </div>
            </div>";

	
	
	
} 
}else {
	echo"<p style ='color:red; font-size:140%; font-family:courier; font-weight:bold; text-align:center; font-style:italic'>Sorry no items Found </p>";

}
}
}

function detailSearch(){    //can be search in details
	global $conn;
	if (isset($_GET[detailSearch])){
		$proName = $_GET[productName];
		
         $proMaxPrice = $_GET[maxCost];
		$proMinPrice = $_GET[minXCost];
    



	  $searchQuery ="SELECT * FROM Product WHERE KeyWord like '%$proName%' AND
	  (Price Between '$proMinPrice' AND '$proMaxPrice')";
	$resultSearch = mysqli_query($conn,$searchQuery) or die (mysqli_error($resultSearch));
	if ((mysqli_num_rows($resultSearch))>0){
		$num = mysqli_num_rows($resultSearch);
		echo "<p style ='color:blue; font-size:140%; font-family:courier; font-weight:bold; text-align:center'>showing $num items<i>$value  </i> </p></h3>";
	while($rowSearch=mysqli_fetch_array($resultSearch)){
		$searchName = $rowSearch['ProductName'];
		$searchPrice = $rowSearch['Price'];
		$searchImg = $rowSearch['Image'];
		$searchID = $rowSearch['ProductID'];
	echo" <div class='col-sm-3'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='details.php?proID=$searchID'><img src='ProImages/$searchImg' alt='Image'  style='width:200px; height:200px; border:1px solid black'></a></div>
                    <div class='panel-footer'>$searchName</div>
                    <div class='panel-footer'>£ $searchPrice</div>
                </div>
            </div>";

	}
	
	
	
	
} else{
	echo"<p style ='color:red; font-size:140%; font-family:courier; font-weight:bold; text-align:center font-style:italic'>No items Found</p>";
}
	}
}

function GetDetails(){ //gets the details information of the products
	if (isset($_GET['proID'])){
	$proID = $_GET['proID'];
	global $conn;
$getDetail ="select *  from Product where ProductID = '$proID '";
$resultDetail= mysqli_query($conn,$getDetail);
while ($rowDetail=mysqli_fetch_array($resultDetail)){
$ProID= $rowDetail['ProductID'];
$ProName = $rowDetail['ProductName'];
$ProPrice = $rowDetail['Price'];
$ProColor = $rowDetail['Color'];
$ProComName = $rowDetail['CompanyName'];
$ProManYear = $rowDetail['ManufactureYear'];
$ProID = $rowDetail['ProductID'];
$ProQuantity = $rowDetail['ProductQuantity'];
$ProMod =$rowDetail['Model'];
$ProDesc =$rowDetail['Description'];
$ProImg = $rowDetail['Image'];
		echo" 
		<div class='col-sm-3'>
		<p style='font-family:courier; color:blue; font-weight:bold;font-size:140%; text-align:center'>$ProName </p>
                <div class='panel panel-primary' style='font-family:sans-serif ;color:blue'>
                    <div class='panel-body'><a href='#'><img src='ProImages/$ProImg' alt='Image' style='width:600px; height:400px; border:1px solid black'>
					</a></div>
                    <div class='panel-footer'> Product Name:  $ProName</div>
                    <div class='panel-footer'> Price: £ $ProPrice</div>
					 <div class='panel-footer'>Color: $ProColor</div>
					  <div class='panel-footer'> Made By: $ProComName</div>
					   <div class='panel-footer'> Manufactured In: $ProManYear</div>
					    <div class='panel-footer'>Items Left In the store: $ProQuantity</div>
                                      <div class='panel-footer'>Description: $ProDesc</div>
				
				     </div></div>";
                        if (!isset($_SESSION['userID'])){
							echo"<div class='form-group'>
		<div class='col-xs-offset-2 col-sm-10' style='float:left; padding:20px'>
		<p style='color:red'><b> You should be logged in to buy the items </b></p>
		<a href='login.php?'><button class='btn btn-default'>LOGIN</button></a>
		
	   <a href='registerform.php'<button class='btn btn-default' style ='margin-left:20px; ' >REGISTER ACCOUNT</button></a></div>";;
						}else {
						 $userID=$_SESSION['userID'];
						 if (($userID==19)||($userID==27)||($userID==20)){
							echo "<div class='form-group'>
		<div class='col-xs-offset-2 col-sm-10' style='float:left; padding:20px'>
		<a href='details.php?updateProID=$ProID'><button class='btn btn-default' style ='color:red'>UPDATE ITEM</button></a>
		
	   <a href='index.php?delPro=$proID'><button class='btn btn-default' style ='margin-left:20px; color:red' >DELETE ITEM</button></a></div></div>";

		
		
		
		

						 }else{
						 
					  echo"
		<div class='col-xs-offset-2 col-sm-10' style='float:left; padding:20px'>
		<a href ='details.php?buyItem=$ProID'><button class=' btn btn-default' style ='color:red'>Add to cart</button></a></div>";
				
                
          
} 
						
	
} 

	
	
	
	


					 	
	
	
	
	
}	
	
	
} else if (isset($_GET['updateProID'])){
	include("updateItem.php");
}
}

 function getAllComPro(){ //only gets the product respective to the selected companies
	  global $conn;
	if (isset($_GET['comProName'])){
   
	 $proCom = $_GET['comProName'];
	
	$SearchProCom = "SELECT *FROM Product WHERE CompanyName='$proCom'";
	$resultSearchProCom = mysqli_query($conn, $SearchProCom);
	if ((mysqli_num_rows($resultSearchProCom ))>0){
		echo "<p style='font-family:courier; color:blue; font-weight:bold;font-size:140%; text-align:center'> Available products of $proCom </p>";
	while($rowProCom=mysqli_fetch_array($resultSearchProCom)){
	
	
		$newName = $rowProCom['ProductName'];
		$newPrice = $rowProCom['Price'];
		$newImg = $rowProCom['Image'];
		$newID  = $rowProCom['ProductID'];
		echo"<div class='col-sm-3'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='details.php?proID=$newID'><img src='ProImages/$newImg' alt='Image'  style='width:200px; height:200px; border:1px solid black'></a></div>
                    <div class='panel-footer'>$newName</div>
                    <div class='panel-footer'>£ $newPrice</div>
                </div>
            </div>";
			
		
	}

	} else {
		echo"<<p style='font-family:courier; color:red; font-weight:bold;font-size:140%; text-align:center'>>there is no product available under this company</p>";
	}

	
} 
}
function getAllCatPro(){ //gets all the products respective to the category
global $conn;
	if (isset($_GET['catProName'])) {

	$proCat = $_GET['catProName'];
	$SearchProCat = "select *from Product where CategoryName ='$proCat'";
	$resultSearchProCat = mysqli_query($conn, $SearchProCat);
if ((mysqli_num_rows($resultSearchProCat ))>0){	
 echo "<p style='font-family:courier; color:blue; font-weight:bold;font-size:140%; text-align:center'> Available $proCat </p>";

	while($rowProCat=mysqli_fetch_array($resultSearchProCat)){
		$newName = $rowProCat['ProductName'];
		$newPrice = $rowProCat['Price'];
		$newImg = $rowProCat['Image'];
		$newID  = $rowProCat['ProductID'];
		echo"<div class='col-sm-3'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='details.php?proID=$newID'><img src='ProImages/$newImg' alt='Image'  style='width:200px; height:200px; border:1px solid black'></a></div>
                    <div class='panel-footer'>$newName</div>
                    <div class='panel-footer'>£ $newPrice</div>
                </div>
            </div>";
	
	}
	
	
} else {
	echo "<p style='font-family:courier; color:red; font-weight:bold;font-size:140%; text-align:center'>there is no products available under this category</red>";
}
}
}
function getMenu(){
		global $conn;
	if (isset($_SESSION['userID'])){
	
		$ID=$_SESSION['userID'];
		$query = "SELECT CustomerName FROM Customer where CustomerID = '$ID'";
		$result = mysqli_query($conn,$query);
		while ($numResult = mysqli_fetch_array($result)){
			$name=$numResult['CustomerName'];
		echo"<li> <a href='profile.php?ProfileID=$ID'>  $name </a></li>";
		echo"<li> <a href='index.php?signOutID=$ID'> sign Out</a></li>";
		if ($ID==20||$ID==19||$ID==27) {
		echo"<li> <a href='itemUpload.php'> Add items</a></li>
		<li> <a href='customers.php'> customers and orders</a></li>";
		}
		
		
	}
	} else {
		echo "<li> <a href='registerform.php'> Sign up </a></li>";
		echo "<li> <a href='login.php'> login </a></li>";
	}
	
}
 
 function signOut(){
	 if (isset($_GET['signOutID'])){
	 global $conn;
	 
	 unset($_SESSION['userID']);
	 session_destroy();
	 
	 }
	 
 }
 function buyItem(){
	 global $conn;
	 if (isset($_GET['buyItem'])){
		 if (isset($_SESSION['userID'])){
			  $itemID =$_GET['buyItem'];
			$itemCheck ="select *from Product Where productID = '$itemID' ";
			$result = mysqli_query($conn,$itemCheck);
			$ans = mysqli_fetch_array($result);
			$customerID =$_SESSION['userID'];
		     $itemQuantity = $ans['ProductQuantity'];
			 $itemPrice= $ans['Price'];
			 if ( $itemQuantity>0){
			
			
			 $customerID = $_SESSION['userID'];
			mysqli_autocommit($conn, FALSE);
			mysqli_query ($conn,"INSERT INTO OrderDetails (ProductID,CustomerID,TotalPrice,OrderDate)VALUES ('$itemID',' $customerID','$itemPrice','(NOW())')");
			mysqli_query ($conn, "UPDATE Product SET ProductQuantity = ProductQuantity-1 WHERE ProductID =$itemID");
			mysqli_commit($conn);
			if (!mysqli_commit($conn)){
			echo"<script type ='text/javascript'>";
			echo"window.alert('something went wrong!!');";
			echo"window.location.href ='index.php' ";
			echo"</script>";


			}else {
			
			echo"<script type ='text/javascript'>";
			echo"window.alert('you have successfully bought your item');";
			echo"window.location.href ='index.php' ";
			echo"</script>";
			 
			 }
			 
			 }else {
				echo"<script>window.alert('sorry this item is currently not avilable')</script>"; 
			 }
			  }else {
		 echo"<script>window.alert('you should be logged in in order to buy any items')</script>";
	 
	 
	 
	 
 
 }
 }
 }
 function profileDetails(){
	 global $conn;
	 

		 $customerID = $_SESSION['userID'];
		 $query =  "Select *From Customer WHERE CustomerID ='$customerID'";
		 $result = mysqli_query ($conn, $query);
		 $getResult = mysqli_fetch_array($result);
		 $name = $getResult['CustomerName'];
		 $email = $getResult['Email'];
		 $deliveryAddress = $getResult['DeliveryAddress'];
		 $Image= $getResult['Image'];
		 $country =$getResult['Country'];
		 $phoneNumber = $getResult['PhoneNo'];
		 $desc = $getResult["Description"];
		 echo "<p style='font-weight:italic;font-size:200%;color:red'>Hello $name </p></br></br><div class='col-sm-4'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='#'><img src='CustomerImage/$Image' alt='Image' style='width:380px; 
				 border:1px solid black'></a></div>
                    <div class='panel-footer'> Name:  $name</div>
                    <div class='panel-footer'> email:  $email</div>
					 <div class='panel-footer'>Address: $deliveryAddress</div>
					  <div class='panel-footer'> Country: $country</div>
					  <div class='panel-footer'> Phone Number : $phoneNumber</div>
					   <div class='panel-footer'> About : $desc</div>
					  <a href='profile.php?updateInfo=$customerID'><input type='button' 
					  value='update information' style='margin-left:10px;color:blue'> </a>
					 
					
					   
				
                </div>
            </div><div class='col-sm-8'>";?> <?php checkUpdate(); updateInfo(); updateAll(); ?> <?php
			
			echo "</div>"
			;
	 
	 
	 
	 
 }
 function orderDetails(){
	 echo "<h3>Your Orders</h3>";
	 global $conn;
	 if (isset($_SESSION['userID'])){
	 
		$customerID =$_SESSION['userID'];
		$query = "SELECT *from OrderDetails WHERE CustomerID = $customerID";
		$result=mysqli_query($conn,$query);
		while ($loop = mysqli_fetch_array($result)){
		$price =$loop['TotalPrice'];
		$ProductID =$loop['ProductID'];
		$orderDate =$loop['OrderDate'];
		$orderID =$loop['OrderID'];
		
		
		$query2 = "Select *FROM Product WHERE ProductID = '$ProductID'";
		$result2 = mysqli_query($conn,$query2) or die(mysqli_error()); 
	 $getResult2 = mysqli_fetch_array($result2);
		$Image = $getResult2['Image'];
		$ProName = $getResult2['ProductName'];
		$Color= $getResult2['Color'];
		$CompanyName = $getResult2['CompanyName'];
		$CatName = $getResult2['CategoryName'];
		
		
		 echo "<div class='col-sm-3'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='#'><img src='ProImages/$Image' alt='Image' style='width:200px; height:200px; border:1px solid black'></a></div>
                    <div class='panel-footer'> Total Price:  $price</div>
                    <div class='panel-footer'> Name:  $ProName</div>
					 <div class='panel-footer'>CompanyName: $CompanyName</div>
					  <div class='panel-footer'> Category: $CatName</div>
					    <div class='panel-footer'> Color: $Color</div>
						<div class='panel-footer'> <a href='profile.php?delOrderID=$orderID'>
						<button>remove from Basket</button></a>
						</div>
					
					   
				
                </div>
            </div>"
			; 
		
		}
 }
 }
 function delItem(){
	 global $conn;
	 if (isset($_GET[delOrderID])){
		 $orderID = $_GET[delOrderID];
		
		 
		 $query ="DELETE FROM OrderDetails WHERE OrderID = '$orderID'";
		$ans= mysqli_query($conn,$query);
		if ($ans){
			echo "<p style ='font-style:italic;color:green;font-size:150%'> items has been removed </p>";
		}
		 
		 
	 }
	 
	 
	 
	 
 }

function updateInfo(){
	if (isset($_GET[updateInfo])){
		echo "<form class='form-horizontal' role='form' action='profile.php' method='GET' style='padding:center'>

		
		<h5 style=padding-left:100px> Enter your password for confirmation</h5>
		
	
		
		<div class='form-group'>
			<label class='control-label col-sm-2 col-md-2 col-lg-2 col-xs-2 ' for='psw'>Password:</label></br>
			<div class='col-sm-3 col-md-3 col-xs-4'>
			<input type='password' class='form-control' id='pass' name ='password'>
			</div>
		</div>
		<div class='form-group'>
		<div class='col-sm-offset-2 col-sm-10'>
			<button type='submit' class='btn btn-default' name='update'>Submit</button>
		</div>
		</div>
		
		
	</form> ";
		
	}
}
function checkUpdate(){
	if (isset($_GET[update])){
		global $conn; 
		$password = md5($_GET["password"]);
		 $customerID =$_SESSION['userID'];
		$query="Select * From Authentication where  Password =
		'$password' AND CustomerID='$customerID '";
		$result = mysqli_query($conn,$query);
		$row = mysqli_fetch_array($result);
		if ($row>0){
			
			updateProfile();
		}else {
			echo "<i style=color:red;padding-left:160px>incorrect password</i>";
		}
		
	}
	
} 
 function updateProfile(){
	 global $conn;
	 include('update.php');
	 
 }
   function updateAll(){
	  global $conn;
	  $userID= $_SESSION['userID'];
 $query = "SELECT *FROM Customer WHERE CustomerID = '$userID' ";
 $result = mysqli_query($conn,$query);
 $row = mysqli_fetch_array($result);
 
 
	  if (isset($_POST['update'])){
		  $Description = $row['Description']; 
		  $customerName = $_POST["name"];
		  $Email = $_POST["email"];
		  $phone= $_POST["pnum"];
		  $deliveryAddress = $_POST["deliveryaddress"];
		  $country= $_POST["country"];
		  $Password= md5($_POST["password"]);
		 
		   if (isset ($_POST["des"])){
			   $Description = $_POST["des"];
		   }else {
			  $Description = $row['Description']; 
		   }
			mysqli_autocommit($conn, FALSE);
			mysqli_query($conn,"UPDATE Customer SET CustomerName='$customerName',Email='$Email',
			DeliveryAddress='$deliveryAddress',PhoneNo=$phone,Country='$country',Description='$Description' 
			WHERE CustomerID=$userID");
			mysqli_query ($conn, "UPDATE Authentication SET Email='$Email',Password='$Password'
			WHERE 
			CustomerID ='$userID'");
			
			mysqli_commit($conn);
			if (mysqli_commit($conn)){
				echo"your information is updated!!";
			}else {
				echo"Something went wrong.Please try again";
			}
		  
		  
	  }
  }
  function delAccount(){
	  global $conn;
	  if (isset($_GET['delAcc'])){
		  $customerID =$_GET['delAcc'];
		  mysqli_autocommit($conn, FALSE);
		mysqli_query($conn,"DELETE FROM Customer WHERE CustomerID =  $customerID");
		mysqli_query($conn,"DELETE FROM Authentication WHERE CustomerID =  $customerID");
		mysqli_commit($conn);
		if (mysqli_commit($conn)){
				echo"<i style=color:red>your Account is successfully deleted</i>";
				 unset($_SESSION['userID']);
	         session_destroy();
			}
		
		
	  }
  }
  function delProduct(){
	  global $conn;
	  if (isset($_GET['delPro'])){
		  $productID =$_GET['delPro'];
		  
	$query="DELETE FROM Product WHERE ProductID = '$productID'";
		 
	$result=mysqli_query($conn, $query) or die(mysqli_error());
		
		
		if ($result){
				echo"<i style=color:red>Product is successfully deleted</i>";
			
			}
		
		
	  }
  }
  function updateItem(){
	  if (isset($_GET['updateProID'])){
		  include("updateItem.php");
	  }
  }
   
   function updateProduct(){
	    global $conn;
	   if (isset($_GET['updateProduct'])){
     $proName = $_GET['proName'];
      $company = $_GET['company'];
	  $KeyWord = $_GET['keyWord'];
	  $category = $_GET['category'];
	  $price= $_GET['price'];
	  $color = $_GET['color'];
	  $Model = $_GET['Model'];
	  $manYear = $_GET['manYear'];
	  $desc = $_GET['desc'];
	  $quantity = $_GET['quantity'];
	 $proID= $_GET['proID'];
	 $query = "UPDATE Product SET ProductName = '$proName', KeyWord = '$KeyWord' , ProductQuantity='$quantity'
,Price =$price , Model = '$Model' , Color = '$color', ManufactureYear= '$manYear',CompanyName='$company',CategoryName
='$category',Description='$desc' WHERE ProductID= $proID ";
$result = mysqli_query($conn,$query)or die(mysqli_error());
if ($result){
	echo "<i style ='color:green'>Item has been successfully updated</i>";
}
			
			
		
		  
		  
	  }
   }
  function getCustomer(){
	  global $conn;
	  if (isset($_SESSION['userID'])){
		  $userID =$_SESSION['userID'];
		  if (($userID==20)||($userID==27)||($userID==19)){
			  
			  $query2 = "SELECT *FROM Customer WHERE CustomerID IN (20,27,19)";
			  $result2 = mysqli_query($conn,$query2);
			 
			 
			  echo "<div class='row'>";
			   echo "<p style='font-weight:bold;font-size:200%; text-align:center'> Admins</p></br></br>";
			  while($getResult2=mysqli_fetch_array($result2)){
				  $name = $getResult2['CustomerName'];
		 $email = $getResult2['Email'];
		 $deliveryAddress = $getResult2['DeliveryAddress'];
		 $Image= $getResult2['Image'];
		 $country =$getResult['Country'];
		 $phoneNumber = $getResult2['PhoneNo'];
		 $desc = $getResult2["Description"];
		 echo "<div class='col-sm-3'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='#'><img src='CustomerImage/$Image' alt='Image' style='width:250px;height:250px; 
				 border:1px solid black'></a></div>
                    <div class='panel-footer'> Name:  $name</div>
                    <div class='panel-footer'> email:  $email</div>
					 <div class='panel-footer'>Address: $deliveryAddress</div>
					  <div class='panel-footer'> Country: $country</div>
					  <div class='panel-footer'> Phone Number : $phoneNumber</div>
					   <div class='panel-footer'> About : $desc</div>
					   
					   </div></div>";
			  
			  
		  }
		  echo "</div>";
		  $query = "SELECT *FROM Customer WHERE CustomerID NOT IN (20,27,19)";
			  $result = mysqli_query($conn,$query);
			  
			   echo "<div class='row'>";
			   echo "<p style='font-weight:bold;font-size:200%; text-align:center'>All customers</p></br></br>
			  ";
			  while($getResult=mysqli_fetch_array($result)){
				  $name = $getResult['CustomerName'];
				  $customerID =$getResult['CustomerID'];
		 $email = $getResult['Email'];
		 $deliveryAddress = $getResult['DeliveryAddress'];
		 $Image= $getResult['Image'];
		 $country =$getResult['Country'];
		 $phoneNumber = $getResult['PhoneNo'];
		 $desc = $getResult["Description"];
		 echo "<div class='col-sm-3'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='#'><img src='CustomerImage/$Image' alt='Image' style='width:250px;height:250px; 
				 border:1px solid black'></a></div>
                    <div class='panel-footer'> Name:  $name</div>
                    <div class='panel-footer'> email:  $email</div>
					 <div class='panel-footer'>Address: $deliveryAddress</div>
					  <div class='panel-footer'> Country: $country</div>
					  <div class='panel-footer'> Phone Number : $phoneNumber</div>
					   <div class='panel-footer'> About : $desc</div>
					   <div class='panel-footer'><a href='details.php?viewOrder=$customerID & viewName=$name '><input type = button value='view Orders'></a>
					   <a href='customers.php?delCustomerID=$customerID'><input type = button value='Delete Customer'></a></div>
					   </div></div>";
				  
			  }
			  echo "</div>";
	  
  }
  }
  }
  function delCustomer(){
	    global $conn;
	  if (isset($_GET['delCustomerID'])){
		  $customerID =$_GET['delCustomerID'];
		  mysqli_autocommit($conn, FALSE);
		mysqli_query($conn,"DELETE FROM Customer WHERE CustomerID =  $customerID");
		mysqli_query($conn,"DELETE FROM Authentication WHERE CustomerID =  $customerID");
		mysqli_commit($conn);
		if (mysqli_commit($conn)){
				echo"<i style=color:red>This customer has been deleted</i>";
			
			}
		
		
	  }
	  
	  
	  
  }
   
   function viewOrders(){
	 ;
	 global $conn;
	 if (isset($_GET['viewOrder'])){
		 $customerName=$_GET['viewName'];
	 
		$customerID =$_GET['viewOrder'];
		echo"<div class='row' style='text-align:center;font-size:150%;font-weight:bold'>cart of $customerName </div></br>";
		$query = "SELECT *from OrderDetails WHERE CustomerID = $customerID";
		$result=mysqli_query($conn,$query);
		
		
		while ($loop = mysqli_fetch_array($result)){
		$price =$loop['TotalPrice'];
		$ProductID =$loop['ProductID'];
		$orderDate =$loop['OrderDate'];
		$orderID =$loop['OrderID'];
		
		
		$query2 = "Select *FROM Product WHERE ProductID = '$ProductID'";
		$result2 = mysqli_query($conn,$query2) or die(mysqli_error()); 
	 $getResult2 = mysqli_fetch_array($result2);
		$Image = $getResult2['Image'];
		$ProName = $getResult2['ProductName'];
		$Color= $getResult2['Color'];
		$CompanyName = $getResult2['CompanyName'];
		$CatName = $getResult2['CategoryName'];
		
		
		 echo "<div class='col-sm-3'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='#'><img src='ProImages/$Image' alt='Image' style='width:200px; height:200px; border:1px solid black'></a></div>
                    <div class='panel-footer'> Total Price:  $price</div>
                    <div class='panel-footer'> Name:  $ProName</div>
					 <div class='panel-footer'>CompanyName: $CompanyName</div>
					  <div class='panel-footer'> Category: $CatName</div>
					    <div class='panel-footer'> Color: $Color</div>
						<div class='panel-footer'> <a href='index.php?delOrderID=$orderID'>
						<button>remove from Basket</button></a>
						</div>
					
					   
				
                </div>
            </div>"
			; 
		
		}
 }
 }
  
buyItem();
signOut(); 

	
	?>
	