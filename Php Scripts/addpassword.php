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
if (isset($_POST["username"])){
	$name = $_POST["username"];
}
else echo "Can't leave Name empty";

if (isset($_POST["masterpassword"]))
{
	$masterpass = $_POST["masterpassword"];
}
else echo "Can't leave password empty";

if (isset($_POST["website"]))
{
	$website = $_POST["website"];
}
else echo "Can't leave website empty";

if (isset($_POST["yourpass"]))
{
	$pass = $_POST["yourpass"];
}
else echo "Can't leave yourpass empty";

// -----------------------------------------------------------------------------------------------------
$sq = "SELECT userID from users where username = $name and masterpass= $masterpass";
$result = $conn->query($sq);
if ($result->num_rows > 0) {
                        
    while($row = $result->fetch_assoc()) {

        $userID = $row["userID"];
    }
    
}


$sql = "INSERT into passwords(userID,website,password,createdAt) values($userID, $website,$pass,SYSDATE)";
if($conn->query($sql)===true){
	echo "Password Added<br>";
}
else
	echo $conn->error;


?>