<?php


include('connection.php');



include('testSession.php');


$email = $_POST['email'];

$password = md5($_POST["password"]);

$customername = $_POST["name"];

$phonenumber = $_POST["pnum"];

$deliveryadd = $_POST["deliveryaddress"];

$country =  $_POST["country"];

$image = $_FILES['image']['name'];

$imageTemp = $_FILES['image']['tmp_name'];

$descript = $_POST["desc"];
move_uploaded_file($imageTemp,"CustomerImage/$image");



	


	
		
	$qry="SELECT * FROM Customer WHERE CustomerID = '$userid' ";
	
	$rslt = mysqli_query($conn, $qry);
	
	
	if(mysqli_num_rows($rslt)){
		
		echo "Sorry This Customer already exist. Try out with new customer details";
		
	}
	else{
	
	
	
	
	
	
	
	 $sqli = "INSERT INTO Customer(CustomerName, Email, DeliveryAddress, phoneNo, Image, Description, Country)
	VALUES('$customername','$email', '$deliveryadd', '$phonenumber', '$image', '$descript','$country')";

	
	
	$sql= mysqli_query($conn, $sqli) or die(mysqli_connect_error());
	
	
	
	if(!$sql){
		
		echo"failed to register please try again";
	}
	else{
		$sqli2 ="INSERT INTO Authentication(Email,Password)VALUES('$email','$password')";
		$sql2= mysqli_query($conn, $sqli2);
		if ($sql2){
		
		echo "Registration was successful";
		
		
		echo"<br><a href='login.php'><input type='submit' name='submit' value=' Login Here'></a>";
		
		
	} else {
		echo"something went wrong!!";
	}
	
	}
	}
mysqli_close($conn);

?>