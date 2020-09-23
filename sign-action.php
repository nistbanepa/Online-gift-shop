<?php
include("dbconnection.php");
session_start();


$name = $_POST['name'];
$password = $_POST['password'];

$sql = "select  name,password,email  from users where name='".$name."'  and password='".$password."'";

$result = $conn->query($sql);


if ($result->num_rows > 0){

	$result = $result-> fetch_assoc();

	$_SESSION['name'] = $result['name'];
	$_SESSION['email'] = $result['email'];
	 header("Location: item.php");
}
else{

	$_SESSION["login_error"] = " Login Failed !!<br>  Please Try Again !!! ";
	header("Location:homepage.php");
}

$conn->close();
?>