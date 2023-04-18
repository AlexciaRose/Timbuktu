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
        echo '<link rel="stylesheet" href="Styles/cart.css">';
  ?>

    <title>Timbuktu | Get Started</title>
</head>
<body>
         <!-- NavBar -->    
         <nav class="navbar navbar-expand-lg bg-dark fixed-top">
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



<div class="container box">
    <div class="row">
        <div class="col-8">
           <h2>
            Cart
           </h2> 

           <?php
    require 'connection.php';

     
        $user_id = 301;

        // connect to database
        $conn = Connect();
        $sql = "SELECT products_tbl.name, products_tbl.price, products_tbl.image_url
                FROM cart_tbl
                JOIN products_tbl ON cart_tbl.productID = products_tbl.productID
                WHERE cart_tbl.userID = " . $user_id;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) { 
            $total_price = 0;
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
               

                $prod_name = $row["name"];
                $prod_price = $row["price"];
                $image_path = $row["image_url"];

                $productcart = '<div class="card mb-3" style="max-width: 680px;">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="Images/' . $image_path . '" class="img-fluid" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body position-relative">
                                                <button type="button" class="btn position-absolute top-0 end-0 left-2" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="bi bi-x" style="font-size: 1.5rem;"></i>
                                                </button>
                                                <h5 class="card-title" style="padding-right:20px;">' . $prod_name . '</h5>
                                                <h6 class="card-text">$' . $prod_price . '</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>                               
                                ';

                echo $productcart;
                $total_price += $prod_price;
            }
        } else {
            echo "No results found.";
        }

        $checkout = '</div>
                        <div class="col-4">
                        
                        <div class="card checkout">
                                <div class="card-header">
                                        <strong>Order Summary</strong> 
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text d-flex justify-content-between"> Sub-total  <span>$' . $total_price . '</span></p>
                                        <p class="card-text d-flex justify-content-between">Shipping  <span>Free</span></p>
                                        <p class="card-text d-flex justify-content-between">Tax <span>$0.00</span></p>
                                        <hr>
                                        <h4 class="card-text d-flex justify-content-between">Total <span>$' . $total_price . '</h4>
                                        </hr>
                                        <a href="#" class="btn">Checkout</a>
                                    </div>
                        </div>';
        echo $checkout;

        // close database connection
        $conn->close();
   
?>




        </div>
    </div>
</div>
       





    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>