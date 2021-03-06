<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    


<!-- bootstrap-->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<style>

body{
    overflow-x: hidden;
}

.dropbtn {
    color: #0d6efd;
  height: 30px;
  background-color: white;
  padding: 0px;
  font-size: 16px;
  border: none;
  position: relative;
  left: 10px;
  top: 5.6px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {color: #343a40;}


   
    @media (min-width: 576px) { 
        .flex-xs-column{
            size: 70%;
            display: flex;
            flex-direction: column;
        }
    }

</style>
    <title>Vrion In Peace</title>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow p-3 mb-5 bg-white rounded" data-aos="fade-down" data-aos-duration="1500">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
    <img src="img/VIP BULET.png" class="rounded-circle" width="30" height="30" style="margin-right: 10px; padding: 0;">
    VrionInPeace.</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item hoverable">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item hoverable">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item hoverable">
          <a class="nav-link text-warning" href="#works">Works</a>
        </li>
        <li class="dropdown nav-item hoverable">
  <button class="dropbtn">Contact</button>
  <div class="dropdown-content rounded">
    <a href="https://www.youtube.com/channel/UCfXKDovNBS7zODjCQRhh1Gw">YouTube</a>
    <a href="https://www.instagram.com/vri.on/">Instagram</a>
    <a href="#">Contact</a>
  </div>
</li>
      </ul>
    </div>
  </div>
</nav>


</header>

<main>

<div id="home">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/banner-1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Website Development Services.</h1>
        <p class="text-primary">We Develop your Dream Website.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner-2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Creativity Above Others</h1>
        <p class="text-warning">We make Videos. Photos. Logos.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/banner-3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Work in Team</h1>
        <p class="text-primary">Solidarity Inside</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<br>

<div class="d-flex flex-row bd-highlight" style="line-height: 0; position:relative; top: 50px;">
    <h4 class="text-warning bd-highlight"> <strong>OUR PARTNERS</strong>  </h4>
    <a href="https://peerlee.github.io/" style="padding: 0; margin: 0; position: relative; top: -50px"><img src="img/p asli.png" alt="logo" width="115" height="115"class="logo1 bd-highlight" style="margin: 0; padding: 0;"></a>
    <a href="#" style="padding: 0; margin: 0; position: relative; top: -25px"><img src="img/lOGO MITG NEW.png" alt="logo" width="70" height="70"class="logo2 bd-highlight rounded-circle" style="margin: 0; padding: 0;"></a>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="position: relative; top: -60px;" ></div>
</div>

<div class="container-fluid">



</div>
<hr>




<div class="about .container-fluid p-3 mb-2 bg-light text-dark" id="about" >

   
    <h2 class="text-center" data-aos="zoom-out-up" data-aos-duration="700">About.</h2>
    <h5 class="text-center text-warning" data-aos="zoom-out-up" data-aos-duration="1100">details</h5>
<br>
<br>
<br>
    <div class="d-flex flex-lg-row flex-md-column align-items-md-center flex-sm-column align-items-sm-center flex-xs-column align-items-xs-center" id="aboutText" >
  <div class="flex-shrink-0" id="imagethum">
    <img src="img/banner5.jpg" alt="thum" class="rounded" data-aos="zoom-out-right" data-aos-duration="1200" width="400" height="200">
  </div>
  <div class="flex-grow-1 ms-3 text-justify" style="font-size: 20px; text-align: justify;" id="text" data-aos="fade-left" data-aos-duration="1000">
    Hello, We Are <strong>Vrion In Peace</strong> We create any content that can fulfill the desires of many people, such as making <strong>videos on YouTube</strong> ,<strong>creating websites</strong>  by creating trusted and professional website creation services, <strong>creating logos with</strong> many variations and unique and professional styles.
    <br>
    <br>
    
    <button type="button" class="btn btn-info btn-lg"><a href="about.php" style="text-decoration:  none; color: white;">Read More</a></button>
  </div>
</div>
    

<br>
<br>
<br>



</div>


<div class="works" id="works">
    <br>
    <br>
<h2 class="text-center">Works.</h2>
    <h5 class="text-center text-warning">Projects</h5>
    <br>
    <br>


    <div class="d-flex justify-content-around flex-lg-row flex-md-column align-items-md-center flex-sm-column align-items-sm-center flex-xs-column align-items-xs-center" id="images">
    <img src="img/I.png" alt="" class="img-thumbnail" width="400" height="400">
    <img src="img/M.png" alt="" class="img-thumbnail" width="400" height="400">
    <img src="img/P.png" alt="" class="img-thumbnail" width="400" height="400">

    </div>
    <br>
    <br>
    <br>
    <hr>
    <br>
    
    <br>
    <br>
    <div class="embed-responsive embed-responsive-16by9 container-fluid d-flex justify-content-around flex-lg-row flex-md-column align-items-md-center flex-sm-column align-items-sm-center flex-xs-column align-items-xs-center" id="video">
    <iframe width="400" height="210" src="https://www.youtube.com/embed/8S9MycKrM4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border: 5px solid #ffc107;"></iframe>
        <iframe width="400" height="210" src="https://www.youtube.com/embed/8bFqRHze1sM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border: 5px solid #ffc107;"></iframe>
</div>
<br>
<br>
<br>
<hr>


</div>


</main>

<footer>
            <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Vrion In Peace
          </h6>
          <p>
            Thank you for your support folow us on social media here
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Projects
          </h6>
          <p>
            <a href="#!" class="text-reset">Website Development</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Videos Creator</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Photo Editor</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Content Creator</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Link Social Media
          </h6>
          <p>
            <a href="https://www.youtube.com/channel/UCfXKDovNBS7zODjCQRhh1Gw" class="text-reset">YouTube</a>
          </p>
          <p>
            <a href="https://www.instagram.com/vri.on/" class="text-reset">Instagram</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Whatsapp</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> Bogor, Indonesia</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            vri.on@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> +62 896-8936-8514</p>
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    ?? 2021 Copyright:
    <a class="text-reset fw-bold" href="peerlee.github.io">Muhamad Firli Ismail</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

</footer>


    

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="js/script.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>