<?php
    if(!isset($_SESSION['idCustomer'])){
        header('location:login.html');
    }
?>