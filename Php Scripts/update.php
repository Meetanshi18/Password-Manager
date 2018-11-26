<!DOCTYPE html>
<html>
    <head>
        <title>Trealop | Pages | Full Width</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
        
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
        $conn->query($sql);

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

        if (isset($_POST['masterpass']))
        {
            $masterpass = $_POST["masterpass"];
        }
        else echo "Can't leave password empty";

        if (isset($_POST['website']))
        {
            $website = $_POST["website"];
        }
        else echo "Can't leave password empty";

        if (isset($_POST['email']))
        {
            $email = $_POST["email"];
        }
        else echo "Can't leave Email empty";

        
        

            $sq = "SELECT userID from users where username = '$name' and masterpass= '$masterpass'";
            $result = $conn->query($sq);
            
            if ($result->num_rows > 0) {
                                  
                while($row = $result->fetch_assoc()) {

                    $userID =  $row["userID"];
                }
                
            }


           
            

        
    

        // -----------------------------------------------------------------------------------------------------
        
    ?>

    <!-- ----------------------------------HTML HTML HTML HTML------------------------------------------------------------------ -->

        <!-- ################################################################################################ -->
            <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left"> 
                <h1><a href="../index.php">Password Manager</a></h1>
                </div>
                <nav id="mainav" class="fl_right"> 
                <ul class="clear">
                    <li><a href="../index.php">Home</a></li>
                </ul>
                </nav>
            </header>
            </div>

        <!-- ################################################################################################ -->
            <div class="wrapper bgded overlay gradient" >
            <div id="breadcrumb" class="hoc clear">
                <h6 class="heading">Full Width</h6>
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Workspace</a></li>
                <li><a href="#">Password Updated(Close this tab)</a></li>
                </ul>
            </div>
            </div>

        
        <?php
        $sql = "update passwords set password='$pass' where website='$website' and userID ='$userID'";
        $conn->query($sql);

        ?>
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

    </body>
</html>