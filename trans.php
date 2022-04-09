<?php
require("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $to=trim($_POST['username']);
    $toaccount=trim($_POST['acctno']);
    $amt=trim($_POST['amt']);
    $password=trim($_POST['password']);
    $sql="select * from users where username='$to' and accountno=$toaccount";
    $result=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($result);
    if($count){
        if($amt>0){
        $row = mysqli_fetch_assoc($result);
        $sql="update users set bal=$row[bal]+$amt where username='$to'";
        mysqli_query($conn,$sql);
            $sql= "select * from users where password='$password'";
            $result=mysqli_query($conn,$sql);
            $count=mysqli_num_rows($result);
            if($count){
            $row=mysqli_fetch_assoc($result);
            $sql="update users set bal=$row[bal]-$amt where password='$password'";
            mysqli_query($conn,$sql);
            $sql="select * from users where password='$password'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
             session_start();
             $_SESSION['bal']=$row['bal'];
            $sql="insert into trans(amount,fraccount,toaccount) values($amt,$row[accountno],'$toaccount')";
                mysqli_query($conn,$sql);
                echo "<script type='text/javascript'>";
                echo "alert('Sucessfully!  Money is tranferred');
                window.location='welcome.php';
                echo </script>";
           
        }
        
    }
    else{
        echo "<script type='text/javascript'>";
         echo "alert('Oops! please Enter valid Amount to be transferred');
         window.location='tranction.php';
         echo </script>";
    }

}
}
?>