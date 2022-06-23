<?php
  $con = mysqli_connect("localhost","root","","petshopTrabalhoFinal");

  $sqlverifyCommon = "select * from plano where nome = 'common';";
  $resultCommon = mysqli_query($con, $sqlverifyCommon);
  
  if(mysqli_num_rows($resultCommon) == 0) {
    $sqlInsertCommon = "INSERT INTO plano (nome, valor)
                VALUES ('common', 25.00)"; 
    mysqli_query($con, $sqlInsertCommon);
  }

  $sqlverifyPremium = "select * from plano where nome = 'premium';";
  $resultPremium = mysqli_query($con, $sqlverifyPremium);
  
  if(mysqli_num_rows($resultPremium) == 0) {
    $sqlInsertPremium = "INSERT INTO plano (nome, valor)
                VALUES ('premium', 50.00)"; 
    mysqli_query($con, $sqlInsertPremium);
  }
  mysqli_close($con);
?>