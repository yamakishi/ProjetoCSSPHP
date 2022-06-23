<?php
  include "connect.php";
  include "checkLogin.php";

  /* Variables to get data */
  $nomeServico = $_POST['nomeServico'];
  $idEmployee = $_POST['idFuncionarioService'];
  $idAnimal = $_POST['idAnimalService'];

  if($idEmployee == "nun"){
    echo "<script>alert('Choose a employee! $nameService'); window.location='../cadastrarServico.php';</script>";
  }
  elseif($nomeServico == "nun"){
    echo "<script>alert('Choose a Service!'); window.location='../cadastrarServico.php';</script>";
  }
  elseif($idAnimal == "nun"){
    echo "<script>alert('Choose an animal!'); window.location='../cadastrarServico.php';</script>";
  }
  else{
    $sqlverify = "select * from service where nome = '$nomeServico' and idEmployee = '$idEmployee' and idCustomer = '$_SESSION[idCustomer]';";
    $result = mysqli_query($con, $sqlverify);
  
    if(mysqli_num_rows($result) != 0) {
      echo "<script>alert('Unfortunately! Exists service with that data.'); window.location='../cadastrarServico.php';</script>";
    }
    else {
      // Insert into table "Service" with variables $_POST
      $sql = "INSERT INTO service (idAnimal, idCustomer, idEmployee, nome)
              VALUES ('$idAnimal','$_SESSION[idCustomer]','$idEmployee','$nomeServico')"; 
      mysqli_query($con, $sql);
      echo "<script>alert('Congratulations! You recorded a new service for you pet in our website.'); window.location='../cadastrarServico.php';</script>";
    }
  }
?>