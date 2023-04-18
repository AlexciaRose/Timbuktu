
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
        echo '<link rel="stylesheet" href="Styles/prod.css">';
  ?>

    <title>Timbuktu | Search Results</title>
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
                            <a class="nav-link" href="aboutus.php">About Us</a>
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


<div class="vw-100 top-info" style="background-image: url(Images/aiGif.gif);">
    
</div>
       
        

    <div class="row ms-5 ps-5 prod">
        <div class="col-4 col-md-2 filters">
            
        </div>
        <div class="col-8 products">
            <div class=" row mb-5">

           
            
            <?php

                require 'connection.php';

                // connect to database
                $conn = Connect();

                // Get the search parameters from the form data
                $search = $_POST['prod-search'];
                $category = $_POST['category'];
                $category2 = $_POST['category2'];

                // Construct the SQL query based on the search parameters
                $sql = "SELECT * FROM products_tbl WHERE name LIKE '%$search%' OR keywords LIKE '%$search%'";


                if (!empty($category) && empty($category2)) {
                    $sql .= " AND category = '$category'";
                } elseif (empty($category) && !empty($category2)) {
                    $sql .= " AND category = '$category2'";
                } elseif (!empty($category) && !empty($category2)) {
                    $sql .= " AND (category = '$category' OR category = '$category2')";
                } elseif (empty($category) && empty($category2)) {
                    $sql .= " AND (category = 'Computers' OR category = 'Accessories' OR category = 'smart-home-devices' OR category = 'artificial-intelligence-solutions' OR category = 'digital-streaming-services')";

                }



                // Execute the SQL query
                $result = mysqli_query($conn, $sql);

                $sql2 = "SELECT userID FROM user_tbl WHERE u_name = ?";
                $stmt = $conn->prepare($sql2);
                $stmt->bind_param("s", $username);
                $stmt->execute();
                $result2 = $stmt->get_result();
                
                $result = $conn->query($sql);

                 if ($result2->num_rows > 0) {
                    $row2 = $result2->fetch_assoc();
                    $user_id = $row2["userID"];
                
                }

                // Display the search results
                if (mysqli_num_rows($result) > 0) {
                    $heading = '<h2 class="mb-5"> <span style="font-size:25px; font-weight:lighter; color:pink;">Found What You Were Looking For?</span> <br> '.$search.' </span></h2>';
                    echo $heading;
                    while ($row = mysqli_fetch_assoc($result)) {
                        
                        $prod_id = $row["productID"];
                        $prod_name = $row["name"];
                        $prod_price = $row["price"];
                        $prod_cat= $row["category"];
                        $image_path = $row["image_url"];


                        $productcard = '<div class="card col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 ms-4 mb-3">
                                            <img src="Images/'. $prod_cat .'/' . $image_path . '" class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <a class="" href="#" style="text-decoration:none;">
                                                    <h5 class="card-title">' . $prod_name . '</h5>
                                                </a> 
                                                <p class="card-text"> <strong>$' . $prod_price . '</strong></p>
                                                <a href="http://localhost/Timbuktu/add.php?prod_id='.$prod_id.'" class="btn btn-light">Add to Cart</a>
                                        </div>
                                        </div>';

                    
                    echo $productcard;
                    }
                        } else {
                            $noresults = '<h2 class="mb-5"> <span style="font-size:25px; font-weight:lighter; color:pink;">We Did Not Find What You Were Looking For:</span> <br> '.$search.' </span></h2>';
                            echo $noresults;
                        }
                         // close database connection
                     $conn->close();
                ?>


                
            </div>
        </div>
    </div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>


