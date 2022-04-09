
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="welcome.php"><img src="img/Mg Bank Logo.png" height="40vh" width="40vh" alt="not sown"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cust.php">View Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tranction.php">Transfer money</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tranhis.php">Transaction History</a>
                    </li>
                    <li class="out">
                      <a class="btn btn-outline-primary" href="logout.php">Logout</a>
                  </li>
                  <li class="nav-iteam">
                  <div style="font-size: 150%; color:rgb(230, 173, 98);font-family: 'Lobster', cursive; padding-left:2vw;">
              <?php
                  if(isset($_SESSION['name'])){
                    echo"Hi_";
                   echo $_SESSION['name'];
                  }
             ?>
            </ul>
            </div>
        </div>
</nav>