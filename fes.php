<?php
  include "div/webcounter.php";

  $page_name = "Fes";

  $nombre_visiteurs = visiteur($page_name);
?>

<script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>

<script>
  if(geoplugin_city() == 'Rabat'){
    location.href = "//localhost/TestMMPD/rabat.php";
  }   
          else if(geoplugin_city() == 'Casablanca'){
            location.href = "//localhost/TestMMPD/index.php";

                }else if (geoplugin_city() == 'Fez'){
            location.href = "//localhost/TestMMPD/fes.php";  
                    }else{
                          location.href = "//localhost/TestMMPD/casablancadetails.php"; 
                    }
</script>


<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Fès</title>
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

   <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/casablanca.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Casablanca, Maroc
                      <br> 20000 à 20700</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Marhabaan </span> 
                      <br> Le pôle commercial
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Population | 3,36 millions (2014)</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/fes.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Fes, Maroc
                      <br> 30000</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Marhabaan </span>
                      <br> La capitale culturelle
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Population | 1,224 million (2020)</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/rabat.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Rabat, Maroc
                      <br> 10000 à 10220</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Marhabaan </span> 
                      <br> La capitale du Maroc
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Population | 1 781 740 hab. (2014)</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

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
  <!--/ Nav End /-->

  <!--/ About Start /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           <marquee id="id1">
                <span onmouseover="getElementById('id1').stop();" onmouseout="getElementById('id1').start();">
                <strong> <a href="#inscription"> <?php echo "Vous êtes le ", $nombre_visiteurs, "ème visiteur sur cette page !"; ?> </em></a></strong>
                </span>
            </marquee><br><br>
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">About Fès</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Histoire</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Fès se trouve à un emplacement particulièrement avantageux, au croisement de routes commerciales importantes, au cœur d'une région naturellement généreuse avec des matières premières précieuses pour l'artisanat (pierre, bois, argile). Ceci lui permet de développer une riche culture esthétique issue de la grande tradition de l'art arabo-andalou. Fès se trouve sur la route des caravanes allant de la Méditerranée à l'Afrique subsaharienne en passant par la grande cité commerciale de Sijilmassa (disparue au xviie siècle) dans la région de Tafilalet, ce qui augmente également son attrait économique.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="fesdetails.php" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
           
          </div>
        </div>
        <div class="col-md-6">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex"> 
               <div class="card-box-ico">
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Géographie</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
                Le climat de Fès est méditerranéen, mâtiné de continentalité et subissant les influences atlantiques (160 km à l'ouest à vol d'oiseau). Il est comparable à celui des villes du sud de l'Espagne, Cordoue notamment.
                La ville, située dans la plaine du Saïs, entre le Rif, au nord et le Moyen Atlas au Sud, subit l'effet de versant des montagnes.
              </p>
            </div>
            <div class="card-footer-c">
              <a href="fesdetails.php" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
            
      </div>
    </div>
  </section>
  <br><br>
  <!--/ About End /-->

  <!--/ Photos Start /-->
  <section class="news-grid grid">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
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
        <div class="col-md-4">
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
        <div class="col-md-4">
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
        <div class="col-md-4">
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
        <div class="col-md-4">
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
        <div class="col-md-4">
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

  <!--/ Map Start /-->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-map box">
            <div id="map" class="contact-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52908.37315760668!2d-5.036759900749429!3d34.0240290248457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8b484d445777%3A0x10e6aaaeedd802ef!2zRsOocw!5e0!3m2!1sfr!2sma!4v1602681789550!5m2!1sfr!2sma" width="1100" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </section>
  <!--/ Map End /-->

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
     
        <div class="col-sm-12 col-md-46 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Différentes villes </h3>
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
