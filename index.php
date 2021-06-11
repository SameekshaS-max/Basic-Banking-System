<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    
  
      <title>TSF PROJECT Basic Banking System</title>
  </head>

  <body>

   <?php
  include 'navbar.php';
  ?>

    <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1" style="background-color : #e691c1;">
              <div class="col-md">
                <div class="heading text-center my-5">
                  <h1>WELCOME</h1>

                  <h3> TO </h3>
                  <h1>SAMEEKSHA'S BANK</h1>
                  
                </div>
              </div>
            </div>


  
      
              <!-- Activity section -->

                       
                 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/transfer_money.jpg" alt="Make Quick Transactions" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="color : black;">Make Quick Transactions</h3>
        <p style="color : black;">Our super fast system makes transaction experience worth it for aour customers !</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/car_user.jpg" alt="New?" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="color : black;">New to Sam Bank?</h3>
        <p style="color : black;"> Be A User Now</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/car_transaction.jpg" alt="Check History" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="color : black;">Check History</h3>
        <p style="color : black;">Our database uses MySql and our customers can check history..</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


                   
            <section class= "my-5">
                 <div class="py-3">
                    <h2 class = "heading text-center my-3">Our Services</h2>
                 </div>
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user.jpg" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button style="background-color : #e691c1;">Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button style="background-color : #e691c1;">View All Users</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/history.jpg" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button style="background-color : #e691c1;">Transaction History</button></a>
                  </div>
            </div>

            </section> 
            
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Sameeksha Sharma</b> <br> The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
  
  </body>
</html>