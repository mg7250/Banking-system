<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MG Bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
  include("nav.php");
  ?>
    <div class="container">
        <div class="container1">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/1.png"class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Welcome To Mg Bank</h5>
                      <p>1000000s+ Happy Customers</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>LOAN</h5>
                      <p>Easy Way to get loan</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="img/2.png"class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Acess EveryWhere</h5>
                      <p>Our App provide Acess from Anywhere</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>

    </div>
    <div class="cards row ">
      <div class="card text-white bg-dark mb-3 col-md-6" style="width: 15rem;">
        <img src="img/acount.jpg" height="100vh" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Account Balance</h5>
          <p class="card-text">You can view Your account Balance</p>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop"> Account Balance
</button>
        </div>
      </div>
      <div class="card text-white bg-dark mb-3 col-md-6" style="width: 15rem;">
        <img src="img/download.png" height="100vh" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Customers</h5>
          <p class="card-text">view total users of Bank</p>
          <a class="btn btn-primary"href="cust.php">Users</a>
        </div>
      </div>
      <div class="card text-white bg-dark mb-3 col-md-6" style="width: 15rem;">
        <img src="img/transfer.jpg" height="100vh" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Transfer</h5>
          <p class="card-text"> You can Transfer Money to other Users</p>
          <a class="btn btn-primary" href="tranction.php">Tranfer Money</a>
        </div>
      </div>
    </div>
    <div class="footer">
      <h2>Our services avilable in</h2>
      <div class="location">
        <h6>Delhi</h6>
        <h6>Unitesd kingdom</h6>
        <h6>USA</h6>
        <h6>SingaPore</h6>
        <h6>Dubai</h6>
        </div>
        <p>&copy;Spark-foundation<p>
      </div>

    </div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Account Balance</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php
                  if(isset($_SESSION['bal'])){
                    echo"Your Account Balance is:- <hr>";
                   echo $_SESSION['bal'];
                  }
             ?>
      </div>
 
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>