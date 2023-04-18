<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!--Stylesheets -->
  <?php 
       
        echo '<link rel="stylesheet" href="Styles/nav.css">';
        echo '<link rel="stylesheet" href="Styles/forms.css">';
  ?>

    <title>Timbuktu | Log In</title>
</head>
<body>


   <?php



      //defining variables
      $emailErr ="";
      $passwordErr = "";
      $pattern ="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
      $Err = "";

      function test_input($data) { //removes unnecessary characters
        $data = trim($data);
        return $data;
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {

     // $email = $_POST["useremail"];
     // $password = $_POST["userpassword"];

      // Validate email
      if (empty($_POST["useremail"])) {
        $emailErr = "Email is required";
      } 
      else {
        $email = test_input($_POST["useremail"]);
        // Check if email contains only letters and whitespace
        if (!preg_match ($pattern,$email)) {
          $emailErr = "Please follow the correct email format";
        }
      }

      // Validate password
      if (empty($_POST["userpassword"])) {
        $passwordErr = "Password is required";
      } 
      else {
        $password = test_input($_POST["userpassword"]);
        // Check if password length is at least 8 characters
        if (strlen($password) < 8) {
          $passwordErr = "Password must be at least 8 characters";
        }
      }

      if ($emailErr == "" && $passwordErr == ""){


        require 'connection.php';
        $conn = Connect();

        $sql = "SELECT * FROM user_tbl WHERE u_email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()){
          $hashed_password = $row["u_password"];
          $username = $row["u_name"];

          if (!password_verify($password, $hashed_password)) {
            //login failed
           $Err = '<center><h2 class="error" style="color:white;">Invalid Username or Password. <span><a style="color:#FA79DF;" href="login.php">Try Again</a></span></h2></center>';
            echo $Err;
        } 
        }

        } else{
              $Err = '<center><h2 class="error" style="color:white;">Account not Found. <span><a style="color:#FA79DF;" href="register.php">Sign Up</a></span></h2></center>';
              echo $Err;
        }

        if($Err == ""){
            //login successful
            session_start();
            $_SESSION['username'] = $username;
            header("Location: index.php");
            exit();  
              
        }

        
        $stmt->close();
        $conn->close();
        
    exit();
      }

    }

    ?>  


        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid me-5">
                <a class="navbar-brand" href="index.php"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
            </div>
        </nav>

        
          <div class="head">
                  <h1>Log In</h1>
                  <p class="mt-3">Don't have an account? <span><a style="color:#FA79DF;" href="register.php">Sign Up</a></span></p> 
              </div>  
                
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
          <div class="row oneform" id="login-form">
              <div class="form-floating mb-3">
                  <input type="email" class="form-control" name="useremail" id="useremail" placeholder="name@example.com">
                  <label for="useremail">Email</label>
                  <?php if (isset($emailErr)) { ?>
                     <span class="error" style="font-size:10px; color:red;"><?php echo $emailErr; ?></span>
                  <?php } ?>
              </div>
              <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Password">
                  <label for="userpassword">Password</label>
                  <?php if (isset($passwordErr)) { ?>
                    <span class="error" style="font-size:10px; color:red;"><?php echo $passwordErr; ?></span>
                  <?php } ?>
              </div>
              <input type="submit" tabindex="-1" role="button" class="btn" tabindex="-1" value="Log In">
          </div>

        </form>
    
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>