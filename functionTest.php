 <?php
     include ('connection.php');
	 function getAllComPro(){ //only gets the product respective to the selected companies
	  global $conn;
	if (isset($_GET['comProName'])){
   
	 $proCom = $_GET['comProName'];
	
	$SearchProCom = "SELECT *FROM Product WHERE CompanyName='$proCom'";
	$resultSearchProCom = mysqli_query($conn, $SearchProCom);
	if ((mysqli_num_rows($resultSearchProCom ))>0){
	while($rowProCom=mysqli_fetch_array($resultSearchProCom)){
	
	
		$newName = $rowProCom['ProductName'];
		$newPrice = $rowProCom['Price'];
		$newImg = $rowProCom['image'];
		$newID  = $rowProCom['ProductID'];
		echo"<div class='col-sm-3'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='details.php?proID=$newID'><img src='$newImg' alt='Image'  style='width:200px; height:200px; border:1px solid black'></a></div>
                    <div class='panel-footer'>$newName</div>
                    <div class='panel-footer'>£ $newPrice</div>
                </div>
            </div>";
			
		
	}

	} else {
		echo"there is no product available under this company";
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

	while($rowProCat=mysqli_fetch_array($resultSearchProCat)){
		$newName = $rowProCat['ProductName'];
		$newPrice = $rowProCat['Price'];
		$newImg = $rowProCat['image'];
		$newID  = $rowProCat['ProductID'];
		echo"<div class='col-sm-3'>
                <div class='panel panel-primary'>
                    <div class='panel-body'><a href='details.php?proID=$newID'><img src='$newImg' alt='Image'  style='width:200px; height:200px; border:1px solid black'></a></div>
                    <div class='panel-footer'>$newName</div>
                    <div class='panel-footer'>£ $newPrice</div>
                </div>
            </div>";
	
	}
	
	
} else {
	echo "there is no products available under this category";
}
}
}
getAllCatPro();
getAllComPro();

 
   ?>