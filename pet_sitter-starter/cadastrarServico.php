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

    <title>New Service - PetShop GG</title>
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
          <a href="serviceslogin.php" class="h1"><b>Register new Service</b></a>
        </div>
        <form name="quickForm" action="./php/registerService.php" method="post" enctype="multipart/form-data">
        <div class="input-group mb-3">
            <select name="nomeServico">
              <optgroup label="Serviços">
                <option value="Hygiene">Hygiene</option>
                <option value="Brushing">Brushing</option>
                <option value="Clipping Fur">Clipping Fur</option>
                <option selected value="nun">Selecione um serviço acima:</option>
              </optgroup>
            </select>
              <div class="input-group-append">
                <div class="input-group-text">
                  <ion-icon name="aperture-outline"></ion-icon>
                </div>
              </div>
          </div>
          <div class="input-group mb-3">
            <select name="idAnimalService">
              <optgroup label="Animal(is)">
                <?php
                  $sq="select * from animal where idCustomer = $_SESSION[idCustomer]";
                  $qu=mysqli_query($con,$sq);
                  while($f = mysqli_fetch_assoc($qu)){
                    ?>
                    <option value = "<?php echo $f['idAnimal']?>"><?php echo $f['nome']?></option>
                    <?php
                  }
                ?>
                <option selected value="nun">Selecione um animal acima:</option>
              </optgroup>
            </select>
              <div class="input-group-append">
                <div class="input-group-text">
                  <ion-icon name="fish-outline"></ion-icon>
                </div>
              </div>
          </div>
          <div class="input-group mb-3">
            <select name="idFuncionarioService">
              <optgroup label="Funcionário(s)">
                <?php
                  $sq="select * from employee";
                  $qu=mysqli_query($con,$sq);
                  while($f = mysqli_fetch_assoc($qu)){
                    ?>
                    <option value = "<?php echo $f['idEmployee']?>">
                      <?php echo $f['nome']?>
                    </option>
                    <?php
                  }
                ?>
                <option selected value="nun">Selecione um(a) funcionário(a) acima:</option>
              </optgroup>
            </select>
              <div class="input-group-append">
                <div class="input-group-text">
                  <ion-icon name="accessibility-outline"></ion-icon>
                </div>
              </div>
          </div>
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
