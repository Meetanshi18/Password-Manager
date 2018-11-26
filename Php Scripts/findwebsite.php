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

            $website = $_POST["website"];
            $sql = "select password from passwords,users where users.userID = passwords.userID and username = $name and website = $website ";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $p = htmlspecialchars($row["website"]);

            echo "<input type=\"text\" name=\"foundPassword\" value = $p>";
?>