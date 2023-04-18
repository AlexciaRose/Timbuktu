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
        echo '<link rel="stylesheet" href="Styles/prod.css">';
  ?>

    <title>Timbuktu | Products</title>
</head>
<body>
        <!-- NavBar -->    
        <nav class="navbar navbar-expand-lg bg-dark fixed-top">
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
                            <a class="nav-link active" aria-current="page" href="catalogue.php">Catalogue</a>
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
                        <a href="cart.php"><i title="Check Cart" class="bi bi-cart me-4" style="color:white; font-size: 1.5rem;"></i></a>
                    
                        </span>
                        <span>
                       <a href="login.php"><i title="Log In/Create Account" class="bi bi-person-fill me-5" style="color:white; font-size: 1.5rem;"></i></a> 
                        </span>
                    </div>

                </div> 

                <?php include 'modal-search.php'; ?>
                


            </div>
        </nav>


<div class="vw-100 top-info">
    
</div>
       
        <form action="search.php" method="POST" autocomplete="off">
          <div class="mt-5 mb-5">
            <input type="text" class="form-control" id="prod-search" name="prod-search" placeholder="Search Digital Streaming Services">
            <input type="hidden" name="category" value="digtal-streaming-services">
          </div>
        </form>

    <div class="row ms-5 ps-5 prod">
        <div class="col-4 col-md-2 filters">
            
        </div>
        <div class="col-8 products">
            <div class=" row mb-5">

            

            <?php

                
                require 'connection.php';
              
                // connect to database
                $conn = Connect();
                $sql = "SELECT * FROM products_tbl WHERE category = 'digital-streaming-services'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        $prod_id = $row["productID"];
                        $prod_name = $row["name"];
                        $prod_price = $row["price"];
                        $image_path = $row["image_url"];
                        $prod_cat= $row["category"];
                        $user_id = 301;

                        
                        $productcard = '<div class="card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ms-4 mb-3">
                                            <img src="Images/'. $prod_cat .'/' . $image_path . '" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <a class="" href="#" style="text-decoration:none;">
                                                    <h5 class="card-title">' . $prod_name . '</h5>
                                                </a> 
                                                <p class="card-text"> <strong>$' . $prod_price . '</strong></p>
                                                <a href="#" class="btn btn-light">Add to Cart</a>
                                                <a href="cart.php?user_id=<?php echo $user_id; ?>" class="btn2 btn btn-light">Buy Now</a>
                                                </div>
                                        </div>';
                                        
                        echo $productcard;
                    }
                } else {
                    echo "No results found.";
                }

                // close database connection
                $conn->close();
             ?>
                
            </div>
        </div>
    </div>


    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


<script>
    function setProductId(id) {
    document.getElementById('product_id').value = id;
}
</script>

</body>
</html>