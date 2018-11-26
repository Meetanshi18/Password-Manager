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

        if (isset($_POST['email']))
        {
            $email = $_POST["email"];
        }
        else echo "Can't leave Email empty";

        

        // -----------------------------------------------------------------------------------------------------
        
    ?>

    <!-- ----------------------------------HTML HTML HTML HTML------------------------------------------------------------------ -->

        <!-- ################################################################################################ -->
            <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <div id="logo" class="fl_left"> 
                <h1><a href="../index.html">Password Manager</a></h1>
                </div>
                <nav id="mainav" class="fl_right"> 
                <ul class="clear">
                    <li><a href="../index.php">Home</a></li>
                </ul>
                </nav>
            </header>
            </div>

        <!-- ################################################################################################ -->
            <div class="wrapper bgded overlay gradient">
            <div id="breadcrumb" class="hoc clear">
                <h6 class="heading">Workspace</h6>
                <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Workspace</a></li>
                
                </ul>
            </div>
            </div>


        <!-- ################################################################################################ -->
        <div class="main--viewPass">
            

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
<div class="main--signup-login">
  <div class="main--signup">
    <div class="main--login--heading">
      Login to add password
  </div>
  <div class="main--signup--form">
          <form action="add.php" method="POST" name="login-form" target="_blank">
              <label for="username">Name : </label>
              <input type="text" name="username"><br>

              <label for="email">Email : </label>
              <input type="text" name="email"><br>

              <label for="masterpass">MasterPassword : </label>
              <input type="password" name="masterpass"><br>

              <label for="website">Website : </label>
              <input type="text" name="website"><br>

              <label for="password">Password : </label>
              <input type="password" name="password">

              <button type="submit">Add</button>
          </form>
      </div>                  
  </div>
  <div class="main--login">
      <div class="main--login--heading">
          Login to update password
      </div>
      <div class="main--signup--form">
              <form action="update.php" method="POST" name="login-form" target="_blank">
                <label for="username">Name : </label>
                <input type="text" name="username"><br>
  
                <label for="email">Email : </label>
                <input type="text" name="email"><br>
  
                <label for="masterpass">MasterPassword : </label>
                <input type="password" name="masterpass"><br>
  
                <label for="website">Website : </label>
                <input type="text" name="website"><br>
  
                <label for="password">Password : </label>
                <input type="password" name="password">
  
                <button type="submit">Update</button>
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

    </body>
</html>