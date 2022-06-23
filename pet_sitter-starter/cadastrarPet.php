<?php
  include "./php/connect.php";
  include "./php/checkLogin.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>New Pet - PetShop GG</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <style>
      body .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
    </style>

  <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />

  </head>
  <body>
    <div class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="serviceslogin.php" class="h1"><b>Register your pet</b></a>
        </div>
        <form name="quickForm" action="./php/registerPet.php" method="post" enctype="multipart/form-data">
          <div class="input-group mb-3">
            <input name="namePet" type="text" class="form-control" placeholder="Nome Pet">
            <div class="input-group-append">
              <div class="input-group-text">
                <ion-icon name="accessibility-outline"></ion-icon>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input name="racaPet" type="text" class="form-control" placeholder="Raça Pet">
            <div class="input-group-append">
              <div class="input-group-text">
                <ion-icon name="mail-outline"></ion-icon>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input name="portePet" type="text" class="form-control" placeholder="Porte Pet">
            <div class="input-group-append">
              <div class="input-group-text">
                <ion-icon name="call-outline"></ion-icon>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">
                Register
              </button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="mb-0">
          <a href="serviceslogin.php" class="text-center">Back</a>
        </p>
      </div>

      </div>
    </div>

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Admin LTE -->
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  </body>
</html>
