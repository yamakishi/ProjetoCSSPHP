<?php
  include "connect.php";

  $id = $_GET['idService'];

  $sqlService = "delete from service where idService = $id";
  mysqli_query($con, $sqlService);
  
  header('location:../serviceslogin.php');
?>