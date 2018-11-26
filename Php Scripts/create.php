<?php

$username="root";
$password="";


$conn = new mysqli("localhost",$username,$password);

if($conn->connect_error){
	echo $conn->connect_error;
}


// $sql = "Create database PasswordManager";
// if($conn->query($sql)===true){
// 	echo "Database created successfully<br>";
// }
// else
// 	echo $conn->error;

$sql = "Use PasswordManager";
if($conn->query($sql)===true){
	echo "Using Password Manager database<br>";
}
else
	echo $conn->error;


// -----------------------------------------------------------------------------------------------------
if (isset($_POST['username'])){
	$name = $_POST["username"];
}
else echo "Can't leave Name empty";

if (isset($_POST['password']))
{
	$pass = $_POST["password"];
}
else echo "Can't leave password empty";

if (isset($_POST['email']))
{
	$email = $_POST["email"];
}
else echo "Can't leave Email empty";



$sql="Insert into users(username,masterpass,email,no_of_pass_added) values('$name', '$pass', '$email', 0);";
if($conn->query($sql)===TRUE)
{
	echo "Updated in main records<br>";
}
else {
	echo $conn->error."<br>";
}

?>