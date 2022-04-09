<?php
require("config.php");
session_start();
$sql="select * from users";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);
if($count){
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
  <div class="bs-example">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header clearfix">
            <h2 class="pull-left">Users List</h2>
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Account_no</th>
                <th scope="col">branch</th>
              </tr>
            </thead>
            <tbody>
              <?php
while($row1 = mysqli_fetch_assoc($result)) {
?> 
              <tr>
                <th scope="row">
                  <?php echo $row1['id'];?>
                </th>
                <td>
                  <?php echo $row1["username"]; ?>
                </td>
                <td>
                  <?php echo $row1["accountno"]; ?>
                </td>
                <td>
                  <?php echo $row1["branch"]; ?>
                </td>
              </tr>
                <?php
          }
        ?>
              </tr>
            </tbody>
          </table>
          <?php
          }
 else{
   echo " No recordes Found";
  }
 ?>
        </div>
      </div>
    </div>
  </div>

</body>

</html>