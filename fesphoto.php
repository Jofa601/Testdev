<?php
  include "div/webcounter.php";

  $page_name = "Fesphoto";

  $nombre_visiteurs = visiteur($page_name);
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fès Photos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/myfavicon.png" rel="icon">
  <link href="img/myfavicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

 
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Needs</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>Hotels</option>
                <option>Car Rent</option>
                <option>Restaurants</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>All City</option>
                <option>Casablanca</option>
                <option>Fès</option>
                <option>Rabat</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.php">Round1<span class="color-b">Entretien</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
         
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Casablanca
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="casablancadetails.php">Presentation</a>
              <a class="dropdown-item" href="casablancaphoto.php">Photos</a>
              <a class="dropdown-item" href="casablancamap.php">Map</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="fes.php" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Fès
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="fesdetails.php">Presentation</a>
              <a class="dropdown-item" href="fesphoto.php">Photos</a>
              <a class="dropdown-item" href="fesmap.php">Map</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="rabat.php" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Rabat
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="rabatdetails.php">Presentation</a>
              <a class="dropdown-item" href="rabatphoto.php">Photos</a>
              <a class="dropdown-item" href="rabatmap.php">Map</a>
            </div>
          </li>
        </ul>
      </div>
      <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
    </div>
  </nav>
  <br><br><br><br><br><br>
  <!--/ Nav End /-->

  <!--/ Photos Start /-->

  <section class="news-grid grid">
    <div class="container">
      <div class="row">    
        <div class="col-md-12">
           <marquee id="id1">
                <span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">
                <strong> <a href="#inscription"> <?php echo "Vous êtes le ", $nombre_visiteurs, "ème visiteur sur cette page !"; ?> </em></a></strong>
                </span>
            </marquee><br><br>

                  <h1 class="title-2">
                    <center><a href="#">DES PHOTOS DE FES </a></center>
                  </h1>
        </div>
        <br><br><br><br>
    
        <div class="col-md-6">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/f1.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Ruelle de Fès </a>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/f2.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">La Vue de Fès
                      </a>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/f3.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Fès hôtel </a>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/f4.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Marinid Tombs </a>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/f5.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html"> Fès exotique </a>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/f6.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Medina Fès </a>
                  </h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </section>
  <br><br>
  <!--/ Photos End /-->

  <!--/ footer Star /-->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Round 1 2020</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Site Web de reference pour se deplacer dans les differentes villes du Maroc
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> +212 123 456 789 </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> contact@example.com</li>
              </ul>
            </div>
          </div>
        </div>
       
        <div class="col-sm-12 col-md-6 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Differentes villes </h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="index.php">Casablanca</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="fes.php">Fès</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="rabat.php">Rabat</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="index.php">Home</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">TestRound1</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            Designed by <a href="">Mr.SJF</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
