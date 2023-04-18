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

    <title>Timbuktu | Sign Up</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid me-5">
                <a class="navbar-brand" href="index.php"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
            </div>
        </nav>



        <?php
  //defining variables
  $username = $password = $useremail= $password_confirm = "";
  $emailErr = $usernameErr = $passwordErr =  $passwordConfirmErr = "";
  $pattern ="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

  function test_input($data) { //removes unnecessary characters
    $data = trim($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {


  
  //Validate email
  if (empty($_POST["useremail"])) {
    $emailErr = "Email is required";
  } 
  else {
    $useremail = test_input($_POST["useremail"]);
    if(!preg_match ($pattern, $useremail)){
      $emailErr = "Invalid email format";
    }
  }

   // Validate username
   if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } 
  else {
    $username = test_input($_POST["username"]);
    // Check if username contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";
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

  //Match passwords
$password_confirm = test_input($_POST["password_confirm"]);
if (empty($password_confirm)) {
  $passwordConfirmErr = "Please confirm your password";
} 
elseif ($password != $password_confirm) {
  $passwordConfirmErr = "Passwords do not match";
}



  if ($firstNameErr == "" && $lastNameErr == "" && $emailErr == "" && $usernameErr == "" && $passwordErr == "" && $passwordConfirmErr == "" ){

    require 'connection.php';
    $conn = Connect();
    $firstName = $conn->real_escape_string($_POST['firstName']);
    $lastName = $conn->real_escape_string($_POST['lastName']);
    $username = $conn->real_escape_string($_POST['username']);
    $useremail = $conn->real_escape_string($_POST['useremail']);
    $password = $conn->real_escape_string($_POST['userpassword']);
   
    $query = "INSERT into user_tbl (username , useremail , userpassword) VALUES('" . $u_name . "','" . $u_email . "','" . $u_password . "')";
                                                   
    $success = $conn->query($query);          


    //Password hashing using salt
    function hash_password($password) {
      $salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
      $hashed_password = password_hash($password, PASSWORD_BCRYPT, ['salt' => $salt]);
      return $hashed_password;
  }

  // Prepare the SQL query
      $sql = "UPDATE user_tbl SET username=?, useremail=?, userpassword=? WHERE id=?";
      $stmt = mysqli_prepare($conn, $sql);

      // Bind parameters
      mysqli_stmt_bind_param($stmt, "sssssi", $username, $useremail, $hashed_password, $id);

      // Execute the statement
      if (mysqli_stmt_execute($stmt)) {
          echo "Record updated successfully";
      } else {
          echo "Error updating record: " . mysqli_error($conn);
      }

// Close the statement and database connection
mysqli_stmt_close($stmt);

    if (!$success){
        die("Couldn't enter data: ".$conn->error);
    }
    
    echo "Thank You for Contacting Us"; 
    
    
    //sets session variable
    $_SESSION["username"] = $username;
    header("Location: index.php");



    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
      // Get the ID of the record to delete from the form
      $user_id = $_POST['user_id'];

      // Prepare the SQL query to delete a record from the table
      $sql = "DELETE FROM user_tbl WHERE id = ?";

      $stmt = $conn->prepare($sql);
      $stmt->bind_param("i", $user_id);

      if ($stmt->execute() === TRUE) {
          echo "Record deleted successfully";
      } else {
          echo "Error deleting record: " . $conn->error;
      }

      $stmt->close();
    }

  }

      // Check if the form has been submitted
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          
        // Get the values from the form
        $username = $_POST['username'];
        $useremail = $_POST['useremail'];
        $password = $_POST['userpassword'];

        // Prepare the SQL query to insert a new record into the table
       
        $stmt = $conn->prepare("INSERT INTO user_tbl (username, useremail, userpassword) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $useremail, $password);
        // Execute the statement
        if ($stmt->execute() === TRUE) {
            echo "New record added successfully";
        } else {
            echo "Error adding record: " . $conn->error;
        }

        // Close the insert statement
        $stmt->close();

        
      

    $conn->close();
    

exit();
  }


} ?>

        
<?php
  //defining variables
  $username = $password = $email= $password_confirm = "";
  $emailErr = $usernameErr = $passwordErr =  $passwordConfirmErr = "";

  $pattern ="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

  function test_input($data) { //removes unnecessary characters
    $data = trim($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {


  //Validate email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } 
  else {
    $email = test_input($_POST["email"]);
    if(!preg_match ($pattern, $email)){
      $emailErr = "Invalid email format";
    }
  }

   // Validate username
   if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } 
  else {
    $username = test_input($_POST["username"]);
    // Check if username contains only letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only letters and white space allowed";
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

  //Match passwords
$password_confirm = test_input($_POST["password_confirm"]);
if (empty($password_confirm)) {
  $passwordConfirmErr = "Please confirm your password";
} 
elseif ($password != $password_confirm) {
  $passwordConfirmErr = "Passwords do not match";
}

  if ($emailErr == "" && $usernameErr == "" && $passwordErr == "" && $passwordConfirmErr == "" ){

    require 'connection.php';
    $conn = Connect();
    $username = $conn->real_escape_string($_POST['u_name']);
    $useremail = $conn->real_escape_string($_POST['u_email']);
    $password = $conn->real_escape_string($_POST['userpassword']);
   
    $query = "INSERT into user_table (u_name,u_email,userpassword) VALUES('" . $username . "','" . $useremail . "','" . $password . "')";
                                                   
    $success = $conn->query($query);          
    
    if (!$success){
        die("Couldn't enter data: ".$conn->error);
    }
    
    echo "Thank You for Contacting Us"; 
    
    
    //sets session variable
    $_SESSION["username"] = $username;
    header("Location: index.php");

    $conn->close();
    

exit();
  }


} ?>

    <div class="head">
        <h1>Sign Up</h1>
        <p class="mt-3">Already have an account? <span><a style="color:#FA79DF;" href="login.php">Log In</a></span></p>
    </div>    

<form class="row oneform" id="signup-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Username">
        <label for="floatingInput">Username</label>
        <?php if (isset($usernameErr)) { ?>
                          <span class="error" style="font-size:10px; color:red;"><?php echo $usernameErr; ?></span>
         <?php } ?>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
        <?php if (isset($emailErr)) { ?>
                          <span class="error" style="font-size:10px; color:red;"><?php echo $emailErr; ?></span>
        <?php } ?>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
        <?php if (isset($passwordErr)) { ?>
                          <span class="error" style="font-size:10px; color:red;"><?php echo $passwordErr; ?></span>
        <?php } ?>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Password">
        <label for="floatingPassword">Password Confirmation</label>
        <?php if (isset($passwordConfirmErr)) { ?>
                          <span class="error" style="font-size:10px; color:red;"><?php echo $passwordConfirmErr; ?></span>
        <?php } ?>
    </div>
    <a href="index.php" class="btn" tabindex="-1" role="button" type="submit">Sign Up</a>
</form>
    
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>