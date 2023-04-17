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
        echo '<link rel="stylesheet" href="Styles/log.css">';
  ?>

    <title>Timbuktu | Catalogue</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-dark fixed-top">
            <div class="container-fluid me-5">
                <a class="navbar-brand" href="index.php"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-5" id="navbarText">
                    <div class="container-fluid">
                        <ul class="navbar-nav mb-2 mb-lg-0 w-100 justify-content-evenly px-5">
                            <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT US</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="catalogue.php">CATALOGUE</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">CUSTOMERS</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">PRICING</a>
                            </li>
                        </ul>
                    </div>
               
                        <span class="nav-item">
                            <a style="color:white;" class="nav-link" href="register.php">REGISTER</a>
                        </span>
                </div> 
                
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
                    <a href=""><h5 class="card-title mt-3">Smart Home Devices</h5></a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between mt-5">
        <div class="mt-5">
            <div class="card mt-3 border-0 me-5" style="width: 35rem;">
                <img src="Images/digilog.jpg" class="card-img-top" alt="..." style="height: 300px;">
                <div class="card-body ps-0">
                    <a href=""><h5 class="card-title mt-3">Digital Streaming Services</h5></a>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="card mt-3 ms-5 border-0" style="width: 35rem;">
                <img src="Images/artilog.png" class="card-img-top" alt="..." style="height: 300px;">
                <div class="card-body ps-0">
                    <a href=""><h5 class="card-title mt-3">Artificial Intelligence Solutions</h5></a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between mt-5">
        <div class="mt-5">
            <div class="card mt-3 border-0 me-5" style="width: 35rem;">
                <img src="Images/socilog.jpg" class="card-img-top" alt="..." style="height: 300px;">
                <div class="card-body ps-0">
                    <a href=""><h5 class="card-title mt-3">Online Advertising Tools</h5></a>
                </div>
            </div>
        </div>
        <div class="mt-5">
            <div class="card mt-3 ms-5 border-0" style="width: 35rem;">
                <img src="Images/cloudlog.jpg" class="card-img-top" alt="..." style="height: 300px;">
                <div class="card-body ps-0">
                    <a href=""><h5 class="card-title mt-3">Cloud Computing Services</h5></a>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 class="mb-5">More products to suit your needs <br> coming soon.</h2>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>