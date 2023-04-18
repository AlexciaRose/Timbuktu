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
                            <a class="nav-link" href="aboutus.php">About Us</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="catalogue.php">Catalogue</a>
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
                            <a class="nav-link profile" data-bs-toggle="dropdown"><i class="bi bi-person-fill me-5" style="color:white; font-size: 1.5rem;"></i></a>
                                <ul class="dropdown-menu">
                                <li>Hi,  <?php echo $username; ?></li>
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

        <div class="container-one mt-5">
                    <img src="Images/robotarms.png" class="floating-image" alt="Image">
                    <h1 class="heading">INNOVATION MADE <span style="color:#FA79DF;">EASY.</span></h1>
                    <div class="info">
                        <p>From optimizing your online presence to automating your operations, we are your partner for digital growth.</p>
                        <a href="catalogue.php" class="btn" tabindex="-1" role="button">GET STARTED</a> 
                        <a href="contact.php" class="btn ms-5 btn2" tabindex="-1" role="button">CONTACT US</a>
                    </div>
                    
                </div>

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container mb-4">
      <div class="row">
        <div class="col-md-6 text">
          <h3 style="color:white;" >E-COMMERCE</h3>
          <p style="color:white;"> Timbuktu.com's e-commerce solutions enable businesses to set up and manage online stores with ease. Their cloud-based platform offers 
            a range of features, including secure payment gateways, inventory management, and order fulfillment. Their e-commerce platform is designed 
            to drive sales and maximize customer satisfaction. </p>
          <a href="catalogue.php">
          <button class="btn btn-outline-light btn-lg" style="color:white;">DO MORE</button>
        </a>
        </div>
        <div class="col-md-6">
            
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="Images\Shopcartabtus.jpg" alt="" height="350" width="550">

        </div>
      </div>
    </div>


<br> <br> <br>
    <div class="container mb-4">
      <div class="row">
      <div class="col-md-6">
            
            <img src="Images\CCabt.jpg" alt="" height="350" width="550">
  
          </div>


        <div class="col-md-6 text">
          <h3 style="color:white;">CLOUD COMPUTING</h3>
          <p style="color:white;"> Timbuktu.com offers cloud computing services that enable businesses to store, access and manage their data and applications easily and 
            securely. The cloud computing platform is built with cutting-edge technologies, providing businesses with high performance, 
            reliability, and scalability. </p>
          <a href="catalogue.php">
          <button class="btn btn-outline-light btn-lg" style="color:white;">DO MORE</button>
        </a>
        </div>
        
      </div>
    </div>


<br><br>
<div class="container mb-4">
      <div class="row">
        <div class="col-md-6 text">
          <h3 style="color:white;">AI TECHNOLOGY</h3>
          <p style="color:white;"> Timbuktu.com leverages AI to deliver targeted advertising solutions that enhance user engagement and provide personalized experiences. 
            Their AI technology enables businesses to optimize their ad campaigns and stay ahead of the competition in the digital landscape. </p>
          <a href="catalogue.php">
          <button class="btn btn-outline-light btn-lg" style="color:white;">DO MORE</button>
        </a>
        </div>
        <div class="col-md-6">
            
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="Images\aiGIF.gif" alt="" height="350" width="550">

        </div>
      </div>
    </div>

<br> <br> <br>
    <div class="container mb-4">
      <div class="row">
      <div class="col-md-6">
            
            <img src="Images\digimar.jpg" alt="" height="350" width="550">
  
          </div>
        <div class="col-md-6 text">
          <h3 style="color:white;">DIGITAL STREAMING</h3>
          <p style="color:white;"> Timbuktu.com's digital streaming service offers an extensive collection of movies, TV shows, 
            and music from around the world. Their streaming platform is built on the latest technologies, 
            delivering high-quality content with seamless streaming experience for users on any device. </p>
          <a href="catalogue.php">
          <button class="btn btn-outline-light btn-lg" style="color:white;">DO MORE</button>
        </a>
        </div>
        
      </div>
    </div>
<br><br>
    <div class="container mb-4">
      <div class="row">
        <div class="col-md-6 text">
          <h3 style="color:white;">ONLINE ADVERTISING</h3>
          <p style="color:white;"> Timbuktu.com's online advertising solutions leverage advanced AI and machine learning technologies to deliver 
            targeted ads that maximize user engagement and conversions. Their online advertising platform offers flexible 
            pricing plans and real-time performance analytics, enabling businesses to optimize their ad campaigns and maximize ROI. </p>
          <a href="catalogue.php">
            <button class="btn btn-outline-light btn-lg" style="color:white;">DO MORE</button>
        </a>
        </div>
        <div class="col-md-6">
            
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="Images\onliadver.jpg" alt="" height="350" width="550">

        </div>
      </div>
    </div>



        <?php
}

else{?>

<nav class="navbar navbar-expand-lg">
            <div class="container-fluid me-5">
                <a class="navbar-brand ms-5" href="#"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-3" id="navbarText">
                    <div class="container-fluid">
                        <ul class="navbar-nav mb-2 mb-lg-0 w-100 ps-5">
                            <li class="nav-item">
                               <a class="nav-link" href="login.php">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="login.php">About Us</a>
                            </li>
                            <li class="nav-item">
                               <a class="nav-link" href="login.php">Catalogue</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
               
                    <div class="d-flex align-items-center">
                        <span class="me-4">                          
                        </span>
                        <span>
                       <a href="login.php"><i title="Log In/Create Account" class="bi bi-person-fill me-5" style="color:white; font-size: 1.5rem;"></i></a> 
                        </span>
                    </div>

                </div> 
                
                <?php include 'modal-search.php'; ?>

            </div>
        </nav>


    
        <div class="container-one mt-5">
                    <img src="Images/robotarms.png" class="floating-image" alt="Image">
                    <h1 class="heading">INNOVATION MADE <span style="color:#FA79DF;">EASY.</span></h1>
                    <div class="info">
                        <p>From optimizing your online presence to automating your operations, we are your partner for digital growth.</p>
                        <a href="catalogue.php" class="btn" tabindex="-1" role="button">GET STARTED</a> 
                        <a href="contact.php" class="btn ms-5 btn2" tabindex="-1" role="button">CONTACT US</a>
                    </div>
                    
                </div>

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container mb-4">
      <div class="row">
        <div class="col-md-6 text">
          <h3 style="color:white;" >E-COMMERCE</h3>
          <p style="color:white;"> Timbuktu.com's e-commerce solutions enable businesses to set up and manage online stores with ease. Their cloud-based platform offers 
            a range of features, including secure payment gateways, inventory management, and order fulfillment. Their e-commerce platform is designed 
            to drive sales and maximize customer satisfaction. </p>
          <a href="register.php">
          <button class="btn btn-outline-light btn-lg" style="color:white;">JOIN TIMBUKTU</button>
        </a>
        </div>
        <div class="col-md-6">
            
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="Images\Shopcartabtus.jpg" alt="" height="350" width="550">

        </div>
      </div>
    </div>


<br> <br> <br>
    <div class="container mb-4">
      <div class="row">
      <div class="col-md-6">
            
            <img src="Images\CCabt.jpg" alt="" height="350" width="550">
  
          </div>


        <div class="col-md-6 text">
          <h3 style="color:white;">CLOUD COMPUTING</h3>
          <p style="color:white;"> Timbuktu.com offers cloud computing services that enable businesses to store, access and manage their data and applications easily and 
            securely. The cloud computing platform is built with cutting-edge technologies, providing businesses with high performance, 
            reliability, and scalability. </p>
          <a href="register.php">
          <button class="btn btn-outline-light btn-lg" style="color:white;">JOIN TIMBUKTU</button>
        </a>
        </div>
        
      </div>
    </div>


<br><br>
<div class="container mb-4">
      <div class="row">
        <div class="col-md-6 text">
          <h3 style="color:white;">AI TECHNOLOGY</h3>
          <p style="color:white;"> Timbuktu.com leverages AI to deliver targeted advertising solutions that enhance user engagement and provide personalized experiences. 
            Their AI technology enables businesses to optimize their ad campaigns and stay ahead of the competition in the digital landscape. </p>
          <a href="register.php">
          <button class="btn btn-outline-light btn-lg" style="color:white;">JOIN TIMBUKTU</button>
        </a>
        </div>
        <div class="col-md-6">
            
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="Images\aiGIF.gif" alt="" height="350" width="550">

        </div>
      </div>
    </div>

<br> <br> <br>
    <div class="container mb-4">
      <div class="row">
      <div class="col-md-6">
            
            <img src="Images\digimar.jpg" alt="" height="350" width="550">
  
          </div>


        <div class="col-md-6 text">
          <h3 style="color:white;">DIGITAL STREAMING</h3>
          <p style="color:white;"> Timbuktu.com's digital streaming service offers an extensive collection of movies, TV shows, 
            and music from around the world. Their streaming platform is built on the latest technologies, 
            delivering high-quality content with seamless streaming experience for users on any device. </p>
          <a href="register.php">
          <button class="btn btn-outline-light btn-lg" style="color:white;">JOIN TIMBUKTU</button>
        </a>
        </div>
        
      </div>
    </div>
<br><br>
    <div class="container mb-4">
      <div class="row">
        <div class="col-md-6 text">
          <h3 style="color:white;">ONLINE ADVERTISING</h3>
          <p style="color:white;"> Timbuktu.com's online advertising solutions leverage advanced AI and machine learning technologies to deliver 
            targeted ads that maximize user engagement and conversions. Their online advertising platform offers flexible 
            pricing plans and real-time performance analytics, enabling businesses to optimize their ad campaigns and maximize ROI. </p>
          <a href="register.php">
            <button class="btn btn-outline-light btn-lg" style="color:white;">JOIN TIMBUKTU</button>
        </a>
        </div>
        <div class="col-md-6">
            
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="Images\onliadver.jpg" alt="" height="350" width="550">

        </div>
      </div>
    </div>







        <?php
}?>
 





</body>





<br> <br>



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