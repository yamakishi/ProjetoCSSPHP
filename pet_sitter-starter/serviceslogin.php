<?php
  include './php/connect.php';
  include './php/checkLogin.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Pet Sitter a Animals Category Responsive Web Template | service :: W3layouts</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">
    <section class=" w3l-header-4 header-sticky">
        <header class="absolute-top">
            <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <h1><a class="navbar-brand" href="indexLogin.php"><span class="fa fa-paw mr-2" aria-hidden="true"></span> 
                Pet Sitter
                </a></h1>
                <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa icon-expand fa-bars"></span>
                    <span class="fa icon-close fa-times"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="indexLogin.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html">Sign Out</a>
                        </li>
                    </ul>
                </div>
            </div>

            </nav>
        </div>
        </header>
    </section>

    <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
    <!--bootstrap working-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap working-->
    <!-- disable body scroll which navbar is in active -->
    <script>
    $(function () {
    $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
    })
    });
    </script>
    <!-- disable body scroll which navbar is in active -->

    <!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner editContent">
    <div class="container">   
    <ul class="breadcrumbs-custom-path">
        <li class="right-side propClone"><a href="indexLogin.php" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
        <li class="active editContent">Services</li>
    </ul>
    </div>
    </div>
    </section>
    <!-- breadcrumbs //-->
    <section class="w3l-recent-work-hobbies" id="services"> 
        <div class="recent-work editContent">
            <div class="container">
                <div class="row about-about">
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                    <img src="assets/images/f5.jpg" alt="product" class="img-responsive about-me">
                        <div class="about-grids editContent">
                            <h5><a href="cadastrarPet.php" class="editContent">New Pet</a></h5>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                    <img src="assets/images/f4.jpg" alt="product" class="img-responsive about-me">
                        <div class="about-grids editContent">
                            <h5><a href="#page" class="editContent">Report Pet</a></h5>
                            <table border='1' style='margin-top: 50px; color: black;'>
                <tr>
                    <th>
                        IdAnimal
                    </th>
                    <th>
                        Nome
                    </th>
                    <th>
                        Raça
                    </th>
                    <th>
                        Porte
                    </th>
                    <th>
                        Excluir
                    </th>
                </tr>

                <?php
                $sql = "select * from animal where idCustomer = '$_SESSION[idCustomer]'";
                $query = mysqli_query($con, $sql);
                while($f=  mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $f['idAnimal']?>
                        </td>
                        <td>
                            <?php echo $f['nome']?>
                        </td>
                        <td>
                            <?php echo $f['raca']?>
                        </td>
                        <td>
                            <?php echo $f['porte']?>
                        </td>
                        <td>
                            <a href="./php/delete_animal.php?idAnimal=<?php echo $f['idAnimal'] ?>"> Remover</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                    <img src="assets/images/f3.jpg" alt="product" class="img-responsive about-me">
                        <div class="about-grids editContent">
                            <h5><a href="cadastrarServico.phP" class="editContent">New Services</a></h5>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                    <img src="assets/images/f3.jpg" alt="product" class="img-responsive about-me">
                        <div class="about-grids editContent">
                            <h5><a href="#" class="editContent">Report Services</a></h5>
                            <table border='1' style='margin-top: 50px; color: black;'>
                <tr>
                    <th>
                        IdService
                    </th>
                    <th>
                        Nome Serviço
                    </th>
                    <th>
                        IdEmployeee
                    </th>
                    <th>
                        IdAnimal
                    </th>
                    <th>
                        Excluir
                    </th>
                </tr>

                <?php
                $sql = "select * from service where idCustomer = '$_SESSION[idCustomer]'";
                $query = mysqli_query($con, $sql);
                while($f=  mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $f['idService']?>
                        </td>
                        <td>
                            <?php echo $f['nome']?>
                        </td>
                        <td>
                            <?php echo $f['idEmployee']?>
                        </td>
                        <td>
                            <?php echo $f['idAnimal']?>
                        </td>
                        <td>
                            <a href="./php/delete_service.php?idService=<?php echo $f['idService'] ?>"> Remover</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <div class="bottom-copies text-center">
            <div class="container">
            <p class="copy-footer-29">© 2020 Pet Sitter. All rights reserved | Designed by <a href="https://w3layouts.com">W3layouts</a></p>
        </div>
        </div>
    </section>


    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-eject"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->
    </body>

</html>