<?php

  session_start();

  unset($_SESSION['idCustomer']);

  header('location:login.html');

?>