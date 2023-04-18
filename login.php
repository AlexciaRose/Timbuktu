<?php

$conn = new mysqli('localhost', 'root', '', 'timbuktu') or die($conn->connect_error);
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
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid me-5">
                <a class="navbar-brand" href="index.php"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
            </div>
        </nav>


    <div class="head">
        <h1>Log In</h1>
        <p class="mt-3">Don't have an account? <span><a style="color:#FA79DF;" href="register.php">Sign Up</a></span></p>
    </div>    

<div class="row oneform" id="login-form">
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <a href="#" class="btn" tabindex="-1" role="button" type="submit">Log In</a>
</div>
    
<?php



  //defining variables
  $email = "";
  $password = "";
  $emailErr ="";
  $passwordErr = "";

  function test_input($data) { //removes unnecessary characters
    $data = trim($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

   // Validate email
   if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  else {
    $email = test_input($_POST["email"]);
    // Check if email contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$email)) {
      $emailErr = "Please follow the email format";
    }
  }

  // Validate password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } 
  else {
    $password = test_input($_POST["password"]);
    // Check if password length is at least 8 characters
    if (strlen($password) < 8) {
      $passwordErr = "Password must be at least 8 characters";
    }
  }
  if ($emailErr == "" && $passwordErr == ""){
    $_SESSION["email"] = $email;
    header("Location: index.php");
exit();
  }


}

?>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>