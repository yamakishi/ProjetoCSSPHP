<?php
  include "connect.php";
  include "checkLogin.php";

  /* Variables to get data */
  $nameEmployee = $_POST['nameEmployee'];
  $emailEmployee = $_POST['emailEmployee'];

  if($nameEmployee == "" or $emailEmployee == ""){
    echo "<script>alert('There are empty fields.'); window.location='../cadastrarFuncionario.php';</script>";
  }
  else{
    $sqlverify = "select * from employee where nome = '$nameEmployee' and email = '$emailEmployee';";
    $result = mysqli_query($con, $sqlverify);
  
    if(mysqli_num_rows($result) != 0) {
      echo "<script>alert('Unfortunately! Exists something incorrectly.'); window.location='../cadastrarFuncionario.php';</script>";
    }
    else {
      // Insert into table "Funcionário" with variables $_POST
      $sql = "INSERT INTO employee (nome, email)
              VALUES ('$nameEmployee','$emailEmployee')"; 
      mysqli_query($con, $sql);
      echo "<script>alert('Congratulations! You recorded new employee in our website.'); window.location='../cadastrarFuncionario.php';</script>";
    }
  }
?>