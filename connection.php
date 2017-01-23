<?php
$serverName = 'mysql12.000webhost.com';
$username =getenv(user);
$password =getenv(password);
$db = getenv(dbname);

$conn = mysqli_connect($serverName,$username,$password,$db)
or die("Error " . mysqli_connect_error());

?>