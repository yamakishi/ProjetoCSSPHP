<?php
  /* Variables to conect DataBase */
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "petshopTrabalhoFinal";

  // Create connection
  $conn = mysqli_connect($servername, $username);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // Create DataBase
  $sql = "CREATE DATABASE $dbname";

  try {
    if(mysqli_select_db($conn, $dbname)){
      echo "<script>console.log('Database was not created successfully!')</script>";
    } 
  } 
  catch (Exception $e) {
    mysqli_query($conn, $sql);
    echo "<script>console.log('Database create successfully!')</script>";
  }
  mysqli_close($conn);

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Create table "Plano"
  $sql = "
          create table IF NOT EXISTS plano (
            idPlano int NOT NULL auto_increment,
            nome varchar(10) NOT NULL,
            valor float NOT NULL,

            PRIMARY KEY(idPlano)
          );
          ";

  if (mysqli_query($conn, $sql)) {
    echo "<script>console.log('Created table successfully!')</script>";
  } else {
    echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
  }
  mysqli_close($conn);

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Create table "Usuario"
  $sql = "
          create table IF NOT EXISTS cliente (
            idCustomer int NOT NULL auto_increment, 
            nomeCustomer varchar(50), 
            emailCustomer varchar(70),
            telefoneCustomer varchar(20),
            passwordCustomer varchar(20),
            idPlano int,

            PRIMARY KEY(idCustomer, emailCustomer),
            UNIQUE KEY (emailCustomer),

            FOREIGN KEY(idPlano) REFERENCES plano(idPlano)
          );
          ";

  if (mysqli_query($conn, $sql)) {
    echo "<script>console.log('Created table successfully!')</script>";
  } else {
    echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
  }
  mysqli_close($conn);
  
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Create table "Animal"
  $sql = "
          create table IF NOT EXISTS animal (
            idAnimal int NOT NULL auto_increment, 
            nome varchar(50), 
            raca varchar(20),
            porte varchar(20),
            idCustomer int,

            PRIMARY KEY(idAnimal),
            FOREIGN KEY(idCustomer) REFERENCES cliente(idCustomer)
          );
          ";

  if (mysqli_query($conn, $sql)) {
    echo "<script>console.log('Created table successfully!')</script>";
  } else {
    echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
  }
  mysqli_close($conn);

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Create table "Employee"
  $sql = "
          create table IF NOT EXISTS employee (
            idEmployee int NOT NULL auto_increment, 
            nome varchar(50), 
            email varchar(20),

            PRIMARY KEY(idEmployee)
          );
          ";

  if (mysqli_query($conn, $sql)) {
    echo "<script>console.log('Created table successfully!')</script>";
  } else {
    echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
  }
  mysqli_close($conn);

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Create table "Services"
  $sql = "
          create table IF NOT EXISTS service (
            idService int NOT NULL auto_increment, 
            nome varchar(50),
            idCustomer int,
            idEmployee int,
            idAnimal int,

            PRIMARY KEY(idService),
            FOREIGN KEY(idCustomer) REFERENCES cliente(idCustomer),
            FOREIGN KEY(idEmployee) REFERENCES employee(idEmployee),
            FOREIGN KEY(idAnimal) REFERENCES animal(idAnimal)
          );
          ";

  if (mysqli_query($conn, $sql)) {
    echo "<script>console.log('Created table successfully!')</script>";
  } else {
    echo "<script>console.log('Error: " . $sql . "<br>" . mysqli_error($conn) . ")</script>";
  }
  mysqli_close($conn);
  
  include "insertADM.php";
  include "insertPLANO.php";
?>