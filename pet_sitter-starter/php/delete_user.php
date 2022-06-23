<?php
  include "connect.php";

  $id = $_GET['idCustomer'];

  $sqlAnimal = "delete from animal where idCustomer = $id";
  mysqli_query($con, $sqlAnimal);
  
  $sql = "delete from cliente where idCustomer = $id";
  mysqli_query($con, $sql);

  header('location:../admin.php');
?>