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

if (isset($_POST['username']))
{
	$pass = $_POST["password"];
}
else echo "Can't leave password empty";

if (isset($_POST['username']))
{
	$email = $_POST["email"];
}
else echo "Can't leave Email empty";

// -----------------------------------------------------------------------------------------------------
$sql = "Select * from users where username = '$name' and masterpassword='$pass'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
?>