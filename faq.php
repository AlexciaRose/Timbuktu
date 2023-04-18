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
<html>
  <head>
    <meta charset="utf-8">
    <title>Timbuktu FAQ</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="Styles/nav.css">


    <style type="text/css">
     body{
        background: #211F21;
        padding-top: 20px;
        font-family: monospace;
      }
      .header{
        border-radius: 20px 20px 0px 0px;
        padding: 10px 0px;
        background: #FA79DF;
        color: #fff;
        width: 100%;
        display: flex;
        align-content: center;
        justify-content: center;
      }
      .faq-item{
        margin-bottom: 40px;
        margin-top: 40px;
      }
      .faq-body{
        display: none;
        margin-top: 30px;
      }
      .faq-wrapper{
        width: 75%;
        margin: 0 auto;
      }
      .faq-inner{
        padding: 30px;
        background: aliceblue;
      }
      .faq-plus{
        float: right;
        font-size: 1.4em;
        line-height: 1em;
        cursor: pointer;
      }
      hr{
        background-color: #9b9b9b;
      }
    </style>
  </head>

  <body>


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
                          <li></li>
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




<br> <br> <br>


    <div class="container">
      <div class="row">
        <div class="faq-wrapper">
          <div class="header">
            <h1>FAQs</h1>
          </div>
          <div class="faq-inner">
            <div class="faq-item">
               <h1>Payment</h1><br> 
              <h3>
                What payment methods do you accept?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                We accept all major credit cards and debit cards however we do not accept Paypal or any other online wallets at the moment (Cashapp, Paypal etc.).</div>
            </div>
            <hr>
            <div class="faq-item">
               <h1>Shipping</h1><br>>
              <h3>
                Do you offer free shipping?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
              Yes, we offer free standard shipping on all orders within Jamaica.</div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                How long does it take to process and ship an order?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                We aim to process and ship all orders within 2-4 business days. Delivery times vary depending on the shipping method selected and the destination.</div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                Do you offer international shipping? 
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                Yes, we offer international shipping to select countries. Shipping rates and delivery times vary depending on the destination of your orders.</div>
            </div>
            <hr>
             <h1>Returns an Warranty</h1><br>
            <div class="faq-item">
              <h3>
                What is your return policy? 
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                We offer a 30-day return policy on all products. If you are not satisfied with your purchase, you may return it for a an exchange no refunds are available at the moment.</div>
            </div>
            <div class="faq-item">
              <h3>
               What is your warranty policy?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                We offer a one-year warranty on all products. If a product is defective or malfunctions within one year of purchase, we will replace it free of charge.</div>
            </div>
            <hr>
             <h1>Technical Support</h1><br>
            <div class="faq-item">
              <h3>
                Do you offer technical support for your products?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                Yes, we offer technical support for all products purchased from our website. You can contact our support team via email on our contact us page.</div>
            <hr>
             <h1>Product Information</h1><br>
            <div class="faq-item">
              <h3>
                Are your products new or refurbished?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                We only sell new products. The aim is to offer you the best quality for your money and to get products delivered to you within reasonable time.</div>
            <hr>
             <h1>Order Management</h1><br>
            <div class="faq-item">
              <h3>
                Can I cancel my order?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                Yes, you can cancel your order before it has been shipped. To cancel an order, please contact our customer service team.</div>
            </div>
            <hr>
            <div class="faq-item">
              <h3>
                Can I track my order?
                <span class="faq-plus">&plus;</span>
              </h3>
              <div class="faq-body">
                Yes, you can track your order using the tracking number provided in your shipping confirmation email.</div>
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      $(".faq-plus").on('click',function(){
        $(this).parent().parent().find('.faq-body').slideToggle();
      });
    </script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  </body>

</html>