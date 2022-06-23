<?php
  include "connect.php";

  $id = $_GET['idEmployee'];

  $sqlEmployee = "delete from service where idEmployee = $id";
  mysqli_query($con, $sqlEmployee);

  $sqlEmployee = "delete from employee where idEmployee = $id";
  mysqli_query($con, $sqlEmployee);
  
  header('location:../admin.php');
?>