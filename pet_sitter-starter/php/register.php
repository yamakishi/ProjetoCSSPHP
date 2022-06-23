<?php
  include "connect.php";

    /* Variables to get data */
    $fullnameUser = $_POST['fullnameUser'];
    $emailUser = $_POST['emailUser'];
    $telephoneUser = $_POST['telephoneUser'];
    $passwordUser = $_POST['passwordUser'];
    $typePlan = $_POST['radioPlan'];

    if($typePlan == 'common'){$typePlan = 1;}
    else{$typePlan = 2;}

    if($fullnameUser == "" or $emailUser == "" or $telephoneUser == "" or $passwordUser == ""){
      echo "<script>alert('There are empty fields.'); window.location='../register.html';</script>";
    }
    else{
      $sqlverify = "select * from cliente where emailCustomer = '$emailUser';";
      $result = mysqli_query($con, $sqlverify);
  
      if(mysqli_num_rows($result) != 0) {
        echo "<script>alert('Unfortunately! Exists something incorrectly.'); window.location='../register.html';</script>";
      }
      else {
        // Insert into table "Pessoa" with variables $_POST
        $sql = "INSERT INTO cliente (nomeCustomer, emailCustomer, telefoneCustomer, passwordCustomer, idPlano)
                VALUES ('$fullnameUser','$emailUser','$telephoneUser','$passwordUser', $typePlan)"; 
        mysqli_query($con, $sql);
        echo "<script>alert('Congratulations! Now you have a account in our website.'); window.location='../login.html';</script>";
      }
    }
?>