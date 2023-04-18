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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <!--Stylesheets -->
  <?php 
       
        echo '<link rel="stylesheet" href="Styles/nav.css">';
        echo '<link rel="stylesheet" href="Styles/index.css">';
  ?>

    <title>Timbuktu | Get Started</title>
</head>
<body>

<?php
if(isset($_SESSION["username"]) && !empty($_SESSION["username"])) { $username = $_SESSION["username"]; 
setcookie("username", $username, time() + 3600, "/");?>

         <!-- NavBar -->    
         <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid me-5">
                <a class="navbar-brand ms-5" href="#"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
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
                                <a class="nav-link" href="#">Contact Us</a>
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
                        <span>
                       <a href="login.php"><i title="Log In/Create Account" class="bi bi-person-fill me-5" style="color:white; font-size: 1.5rem;"></i></a> 
                        </span>
                    </div>

                </div> 
                
                <?php include 'modal-search.php'; ?>

            </div>
        </nav>
        <?php
}

else{?>

<nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid me-5">
                <a class="navbar-brand ms-5" href="#"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-3" id="navbarText">
                    <div class="container-fluid">
                        <ul class="navbar-nav mb-2 mb-lg-0 w-100 ps-5">
                            <li class="nav-item">
                            <a class="nav-link" href="login.php">About Us</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="login.php">Catalogue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Customers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
               
                    <div class="d-flex align-items-center">
                        <span class="me-4">                          
                        </span>
                        <span>
                        <i class="bi bi-cart me-4" style="color:white; font-size: 1.5rem;"></i>
                        </span>
                        <span>
                       <a href="login.php"><i title="Log In/Create Account" class="bi bi-person-fill me-5" style="color:white; font-size: 1.5rem;"></i></a> 
                        </span>
                    </div>

                </div> 
                
                <?php include 'modal-search.php'; ?>

            </div>
        </nav>
        <?php
}?>
 

                <div class="container-one mt-5">
                    <img src="Images/robotarms.png" class="floating-image" alt="Image">
                    <h1 class="heading">INNOVATION MADE <span style="color:#FA79DF;">EASY.</span></h1>
                    <div class="info">
                        <p>From optimizing your online presence to automating your operations, we are your partner for digital growth.</p>
                        <a href="#" class="btn" tabindex="-1" role="button">GET STARTED</a> 
                        <a href="#" class="btn ms-5 btn2" tabindex="-1" role="button">CONTACT US</a>
                    </div>
                    
                </div>

    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>