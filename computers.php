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
        echo '<link rel="stylesheet" href="Styles/index.css">';
  ?>

    <title>Timbuktu | Get Started</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid me-5">
                <a class="navbar-brand" href="#"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ms-5" id="navbarText">
                    <div class="container-fluid">
                        <ul class="navbar-nav mb-2 mb-lg-0 w-100 justify-content-evenly px-5">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">ABOUT US</a>
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


    
        <?php

            require 'connection.php';
            // connect to database
            $conn = Connect();

            // query to select image path from database
            $sql = "SELECT image_url FROM products_tbl WHERE productID = 1";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    // get image path from database
                    $image_path = $row["image_url"];
                    
                    // display image
                    echo "<img src='$image_path' alt='Product Image'>";
                }
            } else {
                echo "No results found.";
            }

            // close database connection
            $conn->close();
        ?>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>