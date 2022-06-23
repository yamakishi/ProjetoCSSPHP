<?php
  include "connect.php";
  include "checkLogin.php";

  /* Variables to get data */
  $namePet = $_POST['namePet'];
  $racaPet = $_POST['racaPet'];
  $portePet = $_POST['portePet'];

  if($namePet == "" or $racaPet == "" or $portePet == ""){
    echo "<script>alert('There are empty fields.'); window.location='../cadastrarPet.php';</script>";
  }
  else{
    $sqlverify = "select * from animal where nome = '$namePet' and raca = '$racaPet' and porte = '$portePet' and idCustomer = '$_SESSION[idCustomer]';";
    $result = mysqli_query($con, $sqlverify);
  
    if(mysqli_num_rows($result) != 0) {
      echo "<script>alert('Unfortunately! Exists something incorrectly.'); window.location='../cadastrarPet.php';</script>";
    }
    else {
      // Insert into table "Animal" with variables $_POST
      $sql = "INSERT INTO animal (nome, raca, porte, idCustomer)
              VALUES ('$namePet','$racaPet','$portePet','$_SESSION[idCustomer]')"; 
      mysqli_query($con, $sql);
      echo "<script>alert('Congratulations! You recorded your pet in our website.'); window.location='../cadastrarPet.php';</script>";
    }
  }
?>