<?php
include ('connection.php');
include ('testSession.php');


	

          $email= $_POST["email"];
        $password =md5($_POST["password"]);

$query = "SELECT *FROM Authentication WHERE Email = '$email' AND Password = '$password' ";

$select= mysqli_query($conn, $query);



if(mysqli_num_rows($select)){
	$getResult = mysqli_fetch_array($select);
	$_SESSION['userID'] = $getResult['CustomerID'];
	
	header('location:index.php');


	


}else{
	
	echo "Invalide Username or Password <br/> ";
	
	echo "<br/> if you Don't Have Account!!!<br/><br/>  Create an account in just couple of minutes <br/> ";
	
	echo "<a href='registerform.php'><input type='button' name = 'submit' value = 'Create an Account' ><a/>";
	echo "</br> wanna try out Again...</br>
	<a href = 'login.php'> <input type ='button' value='login'></a>";

	
	
}

mysqli_close($conn);

	




?>