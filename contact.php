<?php
session_start();


if(isset($_SESSION["username"]) && !empty($_SESSION["username"])) { 
  
  $username = $_SESSION["username"]; 

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
        echo '<link rel="stylesheet" href="Styles/forms.css">';
  ?>

    <title>Timbuktu | Contact Us</title>
</head>
<body>


<!-- NavBar -->    
<nav class="navbar navbar-expand-lg">
            <div class="container-fluid me-5">
                <a class="navbar-brand" href="index.php"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
            </div>
        </nav>
    

<div class="head">
                  <h1>Contact Us</h1>
              </div>  
                
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
          <div class="row oneform" id="contact-form">
              <div class="form-floating mb-3">
                  <input type="email" class="form-control" name="useremail" id="useremail" placeholder="name@example.com">
                  <label for="useremail">Email</label>
              </div>
              <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Password">
                  <label for="message">Subject</label>
              </div>
              <div class="form-floating mb-3">
                  <textarea class="form-control" id="message" name="message" placeholder="Password">
                    </textarea>
                  <label for="message">Message</label>
              </div>
              <input type="submit" tabindex="-1" role="button" class="btn" tabindex="-1" value="Send Message">
          </div>

        </form>


</body>
</html>