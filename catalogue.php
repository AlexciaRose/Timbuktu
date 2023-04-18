<?php
session_start();


if(isset($_SESSION["username"]) && !empty($_SESSION["username"])) { 
  
  $username = $_SESSION["username"]; 

}else{
  header("Location: index.php");
  exit();  
}

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
        echo '<link rel="stylesheet" href="Styles/log.css">';
  ?>

    <title>Timbuktu | Catalogue</title>
</head>
<body>
        <!-- NavBar -->    
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid me-5">
                <a class="navbar-brand ms-5" href="index.php"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-3" id="navbarText">
                    <div class="container-fluid">
                        <ul class="navbar-nav mb-2 mb-lg-0 w-100 ps-5">
                            <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About Us</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" href="catalogue.php">Catalogue</a>
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
                          <a href="cart.php">
                               <i class="bi bi-cart me-4" style="color:white; font-size: 1.5rem;"></i>
                          </a>
                        </span>
                        <span class="dropdown">
                            <a class="nav-link profile" data-bs-toggle="dropdown"><i class="bi bi-person-fill me-5" style="color:white; font-size: 1.5rem;"></i></a>
                                <ul class="dropdown-menu">
                                <li>Hi, <?php echo $username; ?></li>
                                <li><a class="dropdown-item" href="logout.php"> Logout</a></li>
                                <li><a class="dropdown-item" href="modify.php"> Edit Account </a></li>
                                <li><a class="dropdown-item" href="delete.php"> Delete Account </a></li>
                                </ul>
                        </span>
                    </div>

                </div> 
                
                <?php include 'modal-search.php'; ?>

            </div>
        </nav>

<h2 class="mb-5"> <span style="font-size:25px; font-weight:lighter;">Find What You're Looking For:</span> <br> Browse Our Extensive Range <br> of Products Organized by <span style="color:#FA79DF;">Category.</span></h2>
    
<div class="container mt-5">
    <div class="d-flex justify-content-between">
        <div class="">
            <div class="card mt-3 border-0 me-5" style="width: 35rem;">
                <img src="Images/complog.png" class="card-img-top" alt="..." style="height: 300px;">
                <div class="card-body ps-0">
                    <a href="computers.php"><h5 class="card-title mt-3">Computers and Accessories</h5></a>
                </div>
            </div>
        </div>
        <div class="">
            <div class="card mt-3 ms-5 border-0" style="width: 35rem;">
                <img src="Images/homelog.jpeg" class="card-img-top" alt="..." style="height: 300px;">
                <div class="card-body ps-0">
                    <a href="smartdevices.php"><h5 class="card-title mt-3">Smart Home Devices</h5></a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between mt-5">
        <div class="mt-5">
            <div class="card mt-3 border-0 me-5" style="width: 35rem;">
                <img src="Images/digilog.jpg" class="card-img-top" alt="..." style="height: 300px;">
                <div class="card-body ps-0">
                    <a href="digitalservices.php"><h5 class="card-title mt-3">Digital Streaming Services</h5></a>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="card mt-3 ms-5 border-0" style="width: 35rem;">
                <img src="Images/artilog.png" class="card-img-top" alt="..." style="height: 300px;">
                <div class="card-body ps-0">
                    <a href="aisolutions.php"><h5 class="card-title mt-3">Artificial Intelligence Solutions</h5></a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between mt-5">
        <div class="mt-5">
            <div class="card mt-3 border-0 me-5" style="width: 35rem;">
                <img src="Images/socilog.jpg" class="card-img-top" alt="..." style="height: 300px;">
                <div class="card-body ps-0">
                    <a href="advertisingtools.php"><h5 class="card-title mt-3">Online Advertising Tools</h5></a>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="card mt-3 ms-5 border-0" style="width: 35rem;">
                <img src="Images/cloudlog.jpg" class="card-img-top" alt="..." style="height: 300px;">
                <div class="card-body ps-0">
                    <a href="cloudcomputing.php"><h5 class="card-title mt-3">Cloud Computing Services</h5></a>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 class="mb-5">More products to suit your needs <br> coming soon.</h2>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>

<footer class="text-center text-lg-start bg-light text-muted"> <br>
    <section class="">
      <div class="container text-center text-md-start mt-5">
      
        <div class="row mt-3">
          
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>TIMBUKTU
            </h6>
            <p>
            Timbuktu.com is a new tech company specializing in e-commerce, online ads, cloud computing, digital streaming, and AI. 
            The company strives to deliver innovative solutions using the latest technologies to enhance user experience.
            </p>
          </div>
          
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            
            <h6 class="text-uppercase fw-bold mb-4">
              TABS
            </h6>
            <p>
              <a href="yoga.html" class="text-reset">Catalogue</a>
            </p>
            <p>
              <a href="pilates.html" class="text-reset">Customers</a>
            </p>
            <p>
              <a href="#" class="text-reset"></a>
            </p>
            <p>
              <a href="#" class="text-reset"></a>
            </p>
          </div>
          
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            
            <h6 class="text-uppercase fw-bold mb-4">
              Links
            </h6>
            <p>
              <a href="register.php" class="text-reset">Register</a>
            </p>
            <p>
              <a href="https://www.youtube.com/channel/UCcjrFU8OfjHsRkZu9i8CZJA" class="text-reset">Youtube</a>
            </p>
            <p>
              <a href="mailto:timbuktu.connect@gmail.com" class="text-reset">Send Email</a>
            </p>
            <p>
              <a href="faq.html" class="text-reset">FAQs</a>
            </p>
          </div>
          
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> 4 Coke Dr, Manchester, JA</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              timbuktu.connect@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> +1 (876) 335 9805</p>
            <p><i class="fas fa-print me-3"></i> +1 (876) 547 4266</p>
          </div>
          
        </div>
        
      </div>
    </section>

    <div class="text-center p-4" style="background-color: rgba(201, 201, 201, 0.05);">
      © 2023 Copyright:
      <a class="text-reset fw-bold" href="index.html">Timbuktu</a>
      <p>
    </div>
   
  </footer>
</html>