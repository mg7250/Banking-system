<?php
session_start();
require("config.php");
if(isset ($_SESSION['accountno'])){
    $acc=$_SESSION['accountno'];
    $sql="select * from trans where fraccount='$acc'";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
  include("nav.php");
  ?>
  <div class="bs-example" style="margin-top:3vh">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header clearfix"style="padding: 5vh;background-color: bisque">
            <h2>Users transection History</h2>
          </div>
          <table class="table table-hover">
            <?php
while($row1 = mysqli_fetch_assoc($result)) {
?>
            <tr style="padding-block-end: 5vw">
              <th scope="row">
                <?php echo "      the Amount:-".$row1['amount'];
                echo "₹  has been tranferred from your Account to Acoount no:-".$row1['toaccount'];?>
                <br>
              </th>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<?php }
else{
    echo"not found";
} 
?>