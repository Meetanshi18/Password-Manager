<!DOCTYPE html>
<html>
    <head>
        <title>Trealop | Pages | Full Width</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="../layout/styles/layout1.css" rel="stylesheet" type="text/css" media="all">
        
    </head>
    <body>

    <!-- ---------------------------------------------------PHP PHP PHP PHP ------------------------------------------------------ -->
    <?php

        $username="root";
        $password="";


        $conn = new mysqli("localhost",$username,$password);

        if($conn->connect_error){
            echo $conn->connect_error;
        }


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

        echo $name.$pass;

        // -----------------------------------------------------------------------------------------------------
        
    ?>

    <!-- ----------------------------------HTML HTML HTML HTML------------------------------------------------------------------ -->

        <!-- ################################################################################################ -->
            <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left"> 
                <h1><a href="../index.html">Trealop</a></h1>
                </div>
                <nav id="mainav" class="fl_right"> 
                <ul class="clear">
                    <li><a href="../index.html">Home</a></li>
                </ul>
                </nav>
            </header>
            </div>

        <!-- ################################################################################################ -->
            <div class="wrapper bgded overlay gradient" style="background-image:url('../images/demo/backgrounds/01.png');">
            <div id="breadcrumb" class="hoc clear">
                <h6 class="heading">Full Width</h6>
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Ipsum</a></li>
                <li><a href="#">Dolor</a></li>
                </ul>
            </div>
            </div>

        <!-- ################################################################################################ -->
        <div class="main--generatePass">
        <div class="main--generatePass--heading">
            Generate Your Own Password
        </div>
        <div class="main--generatePass--content">
            <div class="main--generatePass--content--left">
                <form>
                    <label for="noc">Number of Characters</label>
                    <input type="text" name="noc" id="noc"><br>

                    <label for="digits">Digits ? </label>
                    <input type="checkbox" name="digits" id="digits"><br>

                    <label for="speChars">Special Characters(!#$%&'()*+,-./:;=?@[^_`{|}~)</label>
                    <input type="checkbox" name="speChars" id="speChars"><br>

                    <button type="submit" id="createPassBtn">Generate!</button>

                </form>
            </div>
            <div class="main--generatePass--content--right">
                <label>Your Password</label>
                <input type="text" id="your--pass">
                <div>
                    To generate some other password, click on generate button again.
                </div>
            </div>                    
        </div>  
        </div>

        <!-- ################################################################################################ -->
        <div class="main--viewPass">
            <div class="main--viewPass--heading">
                <span>VIEW YOUR PASSWORDS</span>
            </div>

            <div class="main--viewPass--findPass">
                <form method="POST" action ="<?php /*echo $_SERVER['PHP_SELF'];*/?>">
                    Website
                    <input  type="text" name="website" id="website">
                    <button type="submit" id="password--findBtn">FIND!</button>
                    Your Password
                    <?php/*
                    $website = $_POST["website"];
                    $sql = "select password from passwords,users where users.userID = passwords.userID and username = $name and website = $website ";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                        $p = htmlspecialchars($row["website"]);
                    }
                    
                    echo "<input type=\"text\" name=\"foundPassword\" value = ".$p." ?>>";*/
                    ?> 

                    
                </form>
            </div> 

            <h1>Your Passwords Table</h1>
            <div class="scrollable">
                <table>
                <thead>
                    <tr>
                    <th>Website</th>
                    <th>Password</th>
                    <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                echo $name.$pass;

                    $sql = "SELECT website,password,createdAt FROM passwords, users WHERE users.userID = passwords.userID and users.username = '$name' and users.masterpass = '$pass'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        
                        while($row = $result->fetch_assoc()) {

                            echo "<tr><td>".$row["website"]."</td><td>".$row["password"]."</td><td>".$row["createdAt"]."</td></tr>";
                        }
                        
                    } else {
                        echo "0 results";
                    }
                ?>
                </tbody>
                </table>
            </div>
            

        </div>

        <!-- ################################################################################################ -->
        <div class="main--generatePass">
        <div class="main--generatePass--heading">
            Add another Password
        </div>
        <div class="main--generatePass--content">
            <div class="main--generatePass--content--left">
                <form method = "POST" action = "addpassword.php">
                    <label>Your username</label>
                    <input type="text"  id="username"><br>

                    <label for="digits">Your Master Password</label>
                    <input type="text" id="masterpassword"><br>

                    <label>Website Name</label>
                    <input type="text" id="website"><br>

                    
                    
                    <label>Your Password</label>
                    <input type="text" id="yourpass">
                    
                    <button type="submit" id="createPassBtn">Add!!</button>

                </form>
            </div>
                                
        </div>  
        </div>
        

        <!-- ################################################################################################ -->
        <footer>
        <div class="footer--heading">
            CONTACT US
        </div>
        <div class="footer--contactdetails">
            <ul>
                <li>Contact No : 9247103610</li>
                <li>Email for queries : bshs@djdk.com</li>
                <li>Feedback
                    <textarea rows="4"></textarea>
                </li> 
                                
            </ul>
            
        </div>
        <div class="submit--feedbackBtn">
            <button>SUBMIT</button>
        </div>
        </footer>
        
        
        
        <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>

    




    <!-- JAVASCRIPTS -->
        <script src="../layout/scripts/jquery.min.js"></script>
        <script src="../layout/scripts/jquery.backtotop.js"></script>
        <script src="../layout/scripts/jquery.mobilemenu.js"></script>
        <script src="../Scripts/full-width.js"></script>
    </body>
</html>