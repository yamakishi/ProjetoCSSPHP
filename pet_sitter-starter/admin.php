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

    <title>Pet Sitter - ADMIN</title>

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
            <h1><a class="navbar-brand" href="admin.php"><span class="fa fa-paw mr-2" aria-hidden="true"></span> 
            Pet Shop GG
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
                        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="logout.php">Sign Out</a>
                    </li>
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

<section class="w3l-hero-headers-9">
  <div class="slide header11" data-selector="header11">
    <div class="container">
        <div class="banner-text ">
          <h5 class=" ">Dashboard Customer</h5>
          <!-- COLOCAR DASHBOARD AQUI! -->
          <p>Common Customers</p>
          <!--  -->
          <p>Premium Customers</p>
        </div>
      </div>
  </div>
</section>
  
<section class="w3l-hero-headers-9">
  <div class="slide header11" data-selector="header11">
    <div class="container">
        <div class="banner-text ">
          <h5 class=" " style="margin-top: 50px;">Report Customers</h5>
          <table border='1' style='margin-top: 50px; color: white;'>
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Username
                </th>
                <th>
                    Email
                </th>
                <th>
                    Password
                </th>
                <th>
                    Excluir
                </th>
            </tr>

            <?php
            $sq="select * from cliente";
            $qu=mysqli_query($con,$sq);
            while($f=  mysqli_fetch_assoc($qu)){
                ?>
                <tr>
                    <td>
                        <?php echo $f['idCustomer']?>
                    </td>
                    <td>
                        <?php echo $f['nomeCustomer']?>
                    </td>
                    <td>
                        <?php echo $f['emailCustomer']?>
                    </td>
                    <td>
                        <?php echo $f['passwordCustomer']?>
                    </td>
                    <td>
                        <a href="./php/delete_user.php?idUser=<?php echo $f['idCustomer']?>"> Remover</a>
                    </td>
                </tr>
                <?php
            }
            ?>
          </table>
        </div>
      </div>
      
  </div>
</section>

<section class="w3l-hero-headers-9">
  <div class="slide header11" data-selector="header11">
    <div class="container">
        <div class="banner-text ">
          <a href="cadastrarFuncionario.php" style="font-size: 100">Register Employee</a>
        </div>
      </div>
  </div>
</section>

<section class="w3l-hero-headers-9">
  <div class="slide header11" data-selector="header11">
    <div class="container">
        <div class="banner-text ">
          <h5 class=" " style="margin-top: 50px;">Report Employee</h5>
          <table border='1' style='margin-top: 50px; color: white;'>
            <tr>
                <th>
                    IdEmployee
                </th>
                <th>
                    Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Excluir
                </th>
            </tr>

            <?php
            $sq="select * from employee";
            $qu=mysqli_query($con,$sq);
            while($f=  mysqli_fetch_assoc($qu)){
                ?>
                <tr>
                    <td>
                        <?php echo $f['idEmployee']?>
                    </td>
                    <td>
                        <?php echo $f['nome']?>
                    </td>
                    <td>
                        <?php echo $f['email']?>
                    </td>
                    <td>
                        <a href="./php/delete_employee.php?idEmployee=<?php echo $f['idEmployee']?>"> Remover</a>
                    </td>
                </tr>
                <?php
            }
            ?>
          </table>
        </div>
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