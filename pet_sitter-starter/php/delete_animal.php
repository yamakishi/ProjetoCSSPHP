<?php
  include "connect.php";

  $idAnimal = $_GET['idAnimal'];

  $sql = "delete from service where idCustomer = $_SESSION[idCustomer] and idAnimal = $idAnimal";
  mysqli_query($con, $sql);

  $sql = "delete from animal where idCustomer = $_SESSION[idCustomer] and idAnimal = $idAnimal";
  mysqli_query($con, $sql);

  header('location:../serviceslogin.php');
?>