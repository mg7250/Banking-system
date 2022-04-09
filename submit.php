<?php
require_once "config.php";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$username=trim($_POST['username']);
$password=trim($_POST['password']);
$sql="select * from users where username='$username' and password='$password'";
$result=mysqli_query($conn,$sql);
$count= mysqli_num_rows($result);

if($count){
    while($row = mysqli_fetch_assoc($result)){
    session_start();
    $_SESSION['accountno']=$row['accountno'];
    $_SESSION['name']=$row['name'];
    $_SESSION['bal']=$row['bal'];
}
    header("location: welcome.php");
}
else{
    echo "<script type='text/javascript'>";
    echo "alert('Oops! please Enter valid username  or password ');
    window.location='index.php';
    echo </script>";
}
mysqli_close($conn);
}
?>
