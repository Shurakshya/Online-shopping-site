<?php


include('connection.php');

$proName =$_POST['ProductName'];
$proCompany =$_POST['Company'];
$proKey=$_POST['KeyWord'];
$proCat =$_POST['CatName'];
$proCol =$_POST['Color'];
$proModel =$_POST['Model'];
$proManYear =$_POST['ManYear'];
$proQuantity =$_POST['Quantity'];
$proDesc =$_POST['Description'];
$proPrice =$_POST['Price'];
$proID =$_POST['ProductID'];
$proImg =$_FILES['ProductImage']['name'];
$proImgTemp =$_FILES['ProductImage']['tmp_name'];
move_uploaded_file($proImgTemp,"ProImages/$proImg" );

$insertProduct = "insert into Product(ProductName,ProductID,CompanyName,CategoryName,Color,Model,Price
,ManufactureYear,ProductQuantity,Description,Image,KeyWord) VALUES('$proName','$proID','$proCompany','$proCat',
'$proCol' ,'$proModel','$proPrice','$proManYear','$proQuantity','$proDesc','$proImg','$proKey')";

 $checkInsert = mysqli_query($conn,$insertProduct) ;
 if ($checkInsert){
 echo"<script>alert('product added successfully')</script>";
  echo"<script>windows.open('_self')</script>";
header('location:itemUpload.php');
 
 
 } else {
  echo"<script>alert('There was problem on addeding the items, try again!!!')</script>";
 echo"<script>windows.open('_self')</script>";
  header('location:itemUpload.php');
}
?>