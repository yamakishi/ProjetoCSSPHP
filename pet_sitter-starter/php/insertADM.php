<?php
  $con = mysqli_connect("localhost","root","","petshopTrabalhoFinal");

  $sqlverify = "select * from cliente where emailCustomer = 'adm@adm.com';";
  $result = mysqli_query($con, $sqlverify);
  
  if(mysqli_num_rows($result) == 0) {
    $sqlInsertAdm = "INSERT INTO cliente (nomeCustomer, emailCustomer, passwordCustomer)
                VALUES ('adm','adm@adm.com','adm')"; 
    mysqli_query($con, $sqlInsertAdm);
  }
  mysqli_close($con);
?>