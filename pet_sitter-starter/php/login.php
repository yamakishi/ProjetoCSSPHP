<?php
  include "connect.php";

  /* Variables to get data */
  $emailUser = $_POST['emailUser'];
  $passwordUser = $_POST['passwordUser'];

  // is set 
  if(isset($_POST['sub'])){
    $sql = "select * from cliente where emailCustomer = '$emailUser' and passwordCustomer = '$passwordUser'";   

    $query = mysqli_query($con, $sql);

    if(mysqli_num_rows($query) > 0){
      if ($emailUser == 'adm@adm.com' and $passwordUser == 'adm'){
        $_SESSION['idCustomer'] = mysqli_fetch_assoc($query)['idCustomer'];
        echo "<script>alert('Login as administrator was successfully !'); window.location='../admin.php';</script>";
      }
      else{
        $_SESSION['idCustomer'] = mysqli_fetch_assoc($query)['idCustomer'];
        echo "<script>alert('Login was successfully!'); window.location='../indexLogin.php';</script>";
      }
    }
    else{
      echo "<script>alert('E-mail or password does not exist'); window.location='../login.html';</script>";
    }
  }
?>