<?php
session_start();
require 'connection.php';
$conn = Connect();

        $username = $useremail= "";
        $emailErr = $usernameErr = "";
        $pattern ="/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

        function test_input($data) { //removes unnecessary characters
        $data = trim($data);
        return $data;
        }

        

        if(isset($_SESSION["username"]) && !empty($_SESSION["username"]) ) 
        {


        $username = $_SESSION["username"];
        

        //get db info
        $sql = "SELECT * FROM user_tbl WHERE u_name = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();


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
          
            
          
          
            if ($emailErr == "" && $usernameErr == "" ){
          
              
              $username = $conn->real_escape_string($_POST['username']);
              $useremail = $conn->real_escape_string($_POST['useremail']);
              
             
          
              //Prepare the SQL query to insert a new record into the table
                 
              $stmt = $conn->prepare("UPDATE user_tbl SET u_name = ?, u_email = ? WHERE userID = ?");
              $stmt->bind_param("ssi", $username, $useremail, $user["userID"]);
              
          
              // Execute the statement
              if ($stmt->execute() === TRUE) {
                $_SESSION["username"] = $username;
                header("Location: index.php");
          
              } else {
                  echo "Error modifying record: " . $conn->error;
              }
          
             
             
              
          
          exit();
            }
          
          
          }



        $stmt->close();
        $conn->close();

        }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timbuktu | Delete Account</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!--Stylesheets -->
  <?php 
       
        echo '<link rel="stylesheet" href="Styles/nav.css">';
        echo '<link rel="stylesheet" href="Styles/forms.css">';
  ?>
</head>
<body>


<!-- NavBar -->    
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid me-5">
                <a class="navbar-brand ms-5" href="index.php"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-3" id="navbarText">
                    <div class="container-fluid">
                        <ul class="navbar-nav mb-2 mb-lg-0 w-100 ps-5">
                            <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="catalogue.php">Catalogue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Customers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
               
                    <div class="d-flex align-items-center">
                        <span class="me-4">
                            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#searchModal">
                                 <i class="bi bi-search" style="color:white; font-size: 1.2rem;"></i>
                            </a>                           
                        </span>
                        <span>
                        <i class="bi bi-cart me-4" style="color:white; font-size: 1.5rem;"></i>
                        </span>
                        <span class="dropdown">
                            <a class="nav-link profile" href=""# data-bs-toggle="dropdown"><i class="bi bi-person-fill me-5" style="color:white; font-size: 1.5rem;"></i></a>
                                <ul class="dropdown-menu">
                                <li>Hi,  <?php echo $username; ?></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                <li><a class="dropdown-item" href="#">Edit Account </a></li>
                                <li><a class="dropdown-item" href="delete.php">Delete Account </a></li>
                                </ul>
                        </span>
                    </div>

                </div> 
                
                <?php include 'modal-search.php'; ?>

            </div>
        </nav>


        <div class="head">
                <h1>Edit Account</h1>
                
            </div> 
        <form class="row oneform" id="signup-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['u_name']; ?>">
                <label for="username" >Updated Username</label>
                <?php if (isset($usernameErr)) { ?>
                        <span class="error" style="font-size:10px; color:red;"><?php echo $usernameErr; ?></span>
                <?php } ?>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="useremail" name="useremail" value="<?php echo $user['u_email']; ?>">
                <label for="useremail">Updated Email</label>
                <?php if (isset($emailErr)) { ?>
                        <span class="error" style="font-size:10px; color:red;"><?php echo $emailErr; ?></span>
                <?php } ?>
            </div>
            
            <input type="submit" role="button" class="btn" tabindex="-1" value="Update">
            
        </form>


</body>
</html>


