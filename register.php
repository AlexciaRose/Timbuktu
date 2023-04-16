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
        echo '<link rel="stylesheet" href="Styles/forms.css">';
  ?>

    <title>Timbuktu | Sign Up</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid me-5">
                <a class="navbar-brand" href="index.php"><span style="color:#FA79DF;">TIM</span>BUKTU</a>
            </div>
        </nav>


    <div class="head">
        <h1>Sign Up</h1>
        <p class="mt-3">Already have an account? <span><a style="color:#FA79DF;" href="login.php">Log In</a></span></p>
    </div>    

<form class="row oneform" id="signup-form">
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Username">
        <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email</label>
    </div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Password">
        <label for="floatingPassword">Password Confirmation</label>
    </div>
    <a href="#" class="btn" tabindex="-1" role="button" type="submit">Sign Up</a>
</form>
    
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


</body>
</html>