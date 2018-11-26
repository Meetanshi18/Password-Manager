<!DOCTYPE html>
<html>
<head>
  <title>Trealop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      
      <h1><a href="index.html">Password Manager</a></h1>
      
    </div>
    
  </header>
</div>

<!-- ################################################################################################ -->
<div class="wrapper bgded overlay gradient">
  <div id="pageintro" class="hoc clear"> 
    
    <article>
      
      <h3 class="heading">Remembering passwords just got easy!</h3>
      <p>Secure, Store, Create</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn" href="#">***************</a></li>
        </ul>
      </footer>
    </article>
    
  </div>
</div>

<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <section id="introblocks">
      <div class="sectiontitle">
        <h6 class="heading">What all can we do?</h6>        
      </div>
      <ul class="nospace group">
        <li class="one_third first">          
            <h6 class="heading">Store</h6>
            <p>Remembering different passwords for different websites can be one tough task. You can store all your passwords here which will be accessible to you only.</p>            
        </li>
        <li class="one_third">          
            <h6 class="heading">Create</h6>
            <p>It is sometimes hard to create passwords without dictionary words and a minimum number of character requirement so we suggest you randomly generated password options according to your requirement.</p>          </article>
        </li>
        <li class="one_third">          
            <h6 class="heading">Update</h6>
            <p>Updating password of a particular website in our database can be done on the click of a button.</p>
        </li>
      </ul>
    </section>    
    <div class="clear"></div>
  </main>
</div>

<!-- ################################################################################################ -->
<div class="main--signup-login">
  <div class="main--signup">
      <div class="main--signup--heading">
          Sign Up!
      </div>
      <div class="main--signup--form">
          
          <form action="Php Scripts/create.php" method="POST" name="signup-form" target="_blank"> 
              
                  <label for="username">Name : </label>
                  <input type="text" name="username"><br>
              
                  <label for="email">Email : </label>
                  <input type="text" name="email"><br>
              
                  <label for="password">Password : </label>
                  <input type="password" name="password">

                  <button type="submit">Sign Up</button>
              
          </form>
      
      </div>                     
  </div>
  <div class="main--login">
      <div class="main--login--heading">
          Login into Workspace
      </div>
      <div class="main--signup--form">
              <form action="Php Scripts/view.php" method="POST" name="login-form" target="_blank">
                  <label for="username">Name : </label>
                  <input type="text" name="username"><br>

                  <label for="email">Email : </label>
                  <input type="text" name="email"><br>

                  <label for="password">Password : </label>
                  <input type="password" name="password">

                  <button type="submit">Login</button>
              </form>
          </div>
  </div>
</div>

<div class="main--frequentwebsites">
<?php



        $username="root";
        $password="";


        $conn = new mysqli("localhost",$username,$password);

        if($conn->connect_error){
            echo $conn->connect_error;
        }


        $sql = "Use PasswordManager";
        $conn->query($sql);

        $sql = "Select website,count(website) as 'frequency' from passwords group by website order by count(website) desc limit 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                        
            while($row = $result->fetch_assoc()) {

                echo "The most frequently added website by users is: ".$row["website"].", ".$row["frequency"]." times in total.";
            }
                        
        }
    

?>

</div>


</main>
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


<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>


<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<script src="Scripts/passgenerator.js"></script>
</body>
</html>