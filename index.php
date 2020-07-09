<?php

error_reporting(0);
$msg = "";
if (isset($_POST['submit'])) {
  $to = "fajaras465@gmail.com";
  $subject = "From Portfolio";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $msgBody = 'Name: ' . $name . ' has written you: ' . $message;
  $headers = 'From: ' . $email;
  $secretKey = "6LdW564ZAAAAAL19ToIng7xdrRNO1NWATLgS2zzA";
  $responseKey = $_POST['g-recaptcha-response'];
  $userIP = $_SERVER['REMOTE_ADDR'];

  $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secsecretKey&response=$responseKey&remoteip=$userIP";

  $response = file_get_contents($url);
  $response = json_decode($response);

  if ($response->success) {
    mail($to, $subject, $msgBody, $headers);
    $msg = '<h4 class="text-success">Message Successfully Send</h4>';
  } else {
    $msg =  '<h4 class="text-warning">Invalid Captcha, Please Try Again</h4>';
  }
}


?>


<!DOCTYPE html>
<html lang="en" id="home">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fajar Adi Setyawan</title>

  <!-- Bootstrap css file -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <!-- css file custom -->
  <link rel="stylesheet" href="css/style.css">
  <!-- aos  -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- google font -->
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Fira+Sans&family=Lato&family=Play:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <!-- favicon -->
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

  <!-- font awesome icons -->
  <link rel="stylesheet" href="css/all.css">

  <!-- floating label -->

</head>

<body>

  <!-- Header  -->
  <header class="header_area">
    <div class="main-menu">
      <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #fff;" id="navbar">
        <div class="container">
          <a class="navbar-brand page-scroll" href="#">
            <img src="img/favicon.png" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link page-scroll" href="#home">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#experience">Experience</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#project">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>

      </nav>
    </div>
  </header>

  <!-- end header -->

  <!-- main area -->
  <section class="site-banner" id="banner">
    <main class="site-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-6-md-12 main-title ">
            <h3 class="title-text" data-aos="fade-right">Hello</h3>
            <h2 class="title-text text-uppercase" data-aos="fade-right">I am <span class="txt-primary font-weight-bolder">Fajar Adi
                Setyawan</span></h2>
            <div class="main-button " data-aos="fade-up">
              <div class="d-flex flex-row flex-wrap">
                <button class="btn button-primary pl-4 pr-4 pb-2 pt-2 mr-4 mt-2 text-uppercase shadow" type="button">Hire
                  Me</button>
                <a class="btn button-outline-primary pl-4 pr-4 pb-2 pt-2 mr-4 mt-2 text-uppercase shadow" type="button" href="https://drive.google.com/file/d/1BHxUh8PPBpdcZ_dfmAdCTp2DJVImWGvP/view?usp=sharing" target="_blank" role="button">Get
                  CV</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6-md-12 banner-image " data-aos="fade-left" data-aos-anchor="#example-anchor" data-aos-offset="500">
            <img src="img/aboutmain.png" alt="banner" class="img-main">
          </div>
        </div>
      </div>
    </main>
  </section>

  <!-- end main area -->

  <!-- about area -->
  <section class="about-area" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 about-image" data-aos="fade-down-right">
          <div class="about-image">
            <img src="img/bgmain.png" alt="about-img" class="img-main">
          </div>
        </div>
        <div class="col-lg-6 col-md-12 about-title" data-aos="fade-down">
          <h2 class="text-uppercase text-center">
            Let me <span class="txt-primary">introduce</span> my self
          </h2>
          <div class="paragraph">
            <p class="para text-justify">
              Hello! I am Fajar, a 21 year old Programmer based in
              Jakarta, Indonesia.
              I just learned about IT 1 year ago, but I already have a
              proven track record in designing websites, desktops and
              managing databases. I have strong technical skills as well
              as excellent. I am eager to be challenged in order to grow
              and further improve my IT skills. My greatest passion is in
              life is using my technical know-how to benefit other
            </p>
          </div>
          <a class="btn button-primary pl-4 pr-4 pb-2 pt-2 mr-4 mt-2 text-uppercase shadow" type="button" href="https://drive.google.com/file/d/1BHxUh8PPBpdcZ_dfmAdCTp2DJVImWGvP/view?usp=sharing" target="_blank" role="button" data-aos="fade-up">Download
            cv</a>
        </div>

      </div>
    </div>
  </section>
  <!-- end about area -->


  <!-- experience area -->
  <section class="experience-area" id="experience">
    <h2 class="text-center" data-aos="zoom-in">Experience</h2>
    <hr class="sep-2" data-aos="fade-right">
    <div class="container">
      <div class="row equal">
        <div class="col-lg-6 col-md-12 d-flex" data-aos="fade-right">
          <div class="experience-1 shadow p-3 mb-5 bg-white rounded">
            <h3 class="text-center">PT. Indomeco</h3>
            <img src="img/LogoHorizontal.jpg" alt="" srcset="" class="experience-company-1">
            <span class="badge badge-pill badge-danger ">Electrical Engineering</span>
            <p class="text-justify">Responsible for drawing installed system, executing installation, testing, and
              maintaining engineering system according to construction specifications. <br> <a href="http://indomeco.co.id/" target="_blank" rel="noopener noreferrer" class="text-primary"> PT.
                Indomeco</a></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 d-flex" data-aos="fade-left">
          <div class="experience-2 shadow p-3 mb-5 bg-white rounded">
            <h3 class="text-center">PT. Dwi Mitra Ekatama Mandiri</h3>
            <img src="img/dwimitra logo.png" alt="" srcset="" class="experience-company-2">
            <span class="badge badge-pill badge-danger ">Electrical Engineering</span>
            <p class="text-justify">Design, assessment, implementation mechanical system for data
              center, hospital, emergency building, and several industrial critical
              equipment. Provide High level Design and Detail design for electrical System. <a href="https://dwimitra.co.id/" target="_blank" rel="noopener noreferrer" class="text-primary"><br>PT.
                Dwi Mitra Ekatama Mandiri</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end experience area -->

  <!-- project area -->

  <section id="project" class="project-area">
    <div class="container">
      <div class="project-title" data-aos="zoom-out-up">
        <h3 class="text-uppercase text-center">Recently Done Project</h3>
        <hr class="shine">
      </div>
      <div class="button-group">
        <button class="button text-uppercase active" id="" data-filter=".all" type="button">ALl</button>
        <button class="button text-uppercase" id="" data-filter=".webdev" type="button">Web Developer</button>
        <button class="button text-uppercase" id="" data-filter=".dekstopdev" type="button">Dekstop Apps</button>
        <button class="button text-uppercase" id="" data-filter=".mobiledev" type="button">Moblie Apps</button>
      </div>
      <div class="row grid">
        <div class="col-lg-4 col-md-6 col-sm-12 element-item dekstopdev all mt-3">
          <div class="my-project">
            <div class="img-project">
              <img src="img/project1.PNG" alt="project 1" srcset="" class="img-fluid">
            </div>
            <div class="title">
              <h4 class="text-uppercase">Dekstop Apps</h4>
              <span>Penjualan Baju</span><a href="https://github.com/FajarAdiSetyawan/Dekstop-_Dev-Java-Penjualan_Baju" class="btn button-dark ml-3" role="button" target="_blank"><i class="fab fa-github"></i> Github</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 element-item webdev all mt-3">
          <div class="my-project">
            <div class="img-project">
              <img src="img/project3.PNG" alt="project 2" srcset="" class="img-fluid">
            </div>
            <div class="title">
              <h4 class="text-uppercase">Web Developer</h4>
              <span>Portfolio</span><a href="https://github.com/FajarAdiSetyawan/Web-Developer-Portofolio" class="btn button-dark ml-3" role="button" target="_blank"><i class="fab fa-github"></i>
                Github</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 element-item mobiledev all mt-3">
          <div class="my-project">
            <div class="img-project-3">
              <img src="img/project2.PNG" alt="project 3" srcset="" class="mobiledev-img">
            </div>
            <div class="title">
              <h4 class="text-uppercase">Moblie Apps</h4>
              <span>Movie Cataloge</span><a href="https://github.com/FajarAdiSetyawan/MADE-Final-Submisssion" class="btn button-dark ml-3" role="button" target="_blank"><i class="fab fa-github"></i> Github</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-12 element-item webdev all mt-3">
          <div class="my-project">
            <div class="img-project">
              <img src="img/project4.PNG" alt="project 4" srcset="" class="img-fluid">
            </div>
            <div class="title">
              <h4 class="text-uppercase">Web Developer</h4>
              <span>Daftar Mahasiswa</span><a href="https://github.com/FajarAdiSetyawan/datamahasiswa" class="btn button-dark ml-3" role="button" target="_blank"><i class="fab fa-github"></i> Github</a>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- end project area -->


  <!-- contact area -->
  <section id="contact" class="contact-area">
    <div class="container py-5">
      <div class="title-area mb-5" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <h3 class="text-uppercase text-center">Contact Me</h3>
        <hr class="hr-contact">
      </div>
      <div class="row shadow ">
        <div class="col-lg-6 card p-3 col-left" data-aos="fade-right">
          <div class="row mb-5 mt-5">
            <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2 mt-3">
              <i class="far fa-envelope text-white"></i>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9 col-9">
              <h4 class="text-white">Email</h4>
              <p class="text-white">fajaras465@gmail.com</p>
            </div>
          </div>
          <div class="row mb-5 mt-5">
            <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2 mt-3">
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9 col-9">
              <h4 class="text-white">Phone</h4>
              <p class="text-white">+62 858-8172-9854</p>
            </div>
          </div>
          <div class="row mb-5 mt-5">
            <div class="col-lg-1 offset-1 col-md-2 col-sm-2 col-2 mt-3">
              <i class="fas fa-map-marker-alt text-danger"></i>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-9 col-9">
              <h4 class="text-white">Address</h4>
              <p class="text-white">Pedongkelan Depan Rt 05/13, Cengkareng Timur, Cengkareng, Jakarta Barat
                11370. Indonesia</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-12" data-aos="fade-left">
          <form action="" method="POST" class="contact-me">
            <fieldset class="form-group mb-3">
              <label for="fullname" class="bmd-label-floating">Full Name</label>
              <input type="text" class="form-control" id="fullname" required>
            </fieldset>
            <fieldset class="form-group mb-3">
              <label for="email" class="bmd-label-floating">Email</label>
              <input type="email" class="form-control" id="email" required>
            </fieldset>
            <fieldset class="form-group mb-3">
              <label for="message" class="bmd-label-floating">Message</label>
              <textarea class="form-control" id="message" rows="10" style="resize: none;" required></textarea>
            </fieldset>
            <div class="g-recaptcha" data-sitekey="6LdW564ZAAAAAJxi_w1bXi_OsAQ156R3NoOWypmR">
            </div>
            <button type="submit" name="submit" value="Send Message" class="btn btn-raised btn-success mt-2" data-toggle="modal" data-target="#exampleModal"><i class="far fa-paper-plane mr-2"></i> Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Message</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h4><?= $msg; ?></h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- end contact area -->




  <!-- footer -->

  <div class="footer bg-info">
    <div class="container p-3">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-left">
          <ul class="">
            <li class="nav-link" data-aos="fade-right">
              <i class="far fa-envelope footer-icon text-white"></i>
              <a class="text-white footer-link" href="mailto:fajaras465@gmail.com" target="_blank"> fajaras465</a>
            </li>
            <li class="nav-link" data-aos="fade-right">
              <i class="fas fa-phone-alt footer-icon text-white"></i>
              <a class="text-white footer-link" href="#" target="_blank"> +62 858-8172-9854</a>
            </li>
            <li class="nav-link" data-aos="fade-right">
              <i class="fab fa-github footer-icon text-white"></i>
              <a class="text-white footer-link" href="https://github.com/FajarAdiSetyawan" target="_blank"> Fajar Adi
                Setyawan</a>
            </li>
            <li class="nav-link" data-aos="fade-right">
              <i class="fab fa-linkedin footer-icon text-white"></i>
              <a class="text-white footer-link" href="https://www.linkedin.com/in/fajar-adi-setyawan-5a475714a/" target="_blank"> Fajar
                Adi Setyawan</a>
            </li>
            <li class="nav-link" data-aos="fade-right">
              <i class="fab fa-facebook footer-icon text-white" target="_blank"></i>
              <a class="text-white footer-link" href="#"> Fajar Adi Setyawan</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
          <h5 class="border-bottom text-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom">Quick Links
          </h5>
          <ul class="">
            <li class="text-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <a class="nav-link text-white" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="text-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <a class="nav-link text-white" href="#about">About</a>
            </li>
            <li class="text-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <a class="nav-link text-white" href="#experience">Experience</a>
            </li>
            <li class="text-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <a class="nav-link text-white" href="#project">Project</a>
            </li>
            <li class="text-white" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
              <a class="nav-link text-white" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 d-flex align-items-center justify-content-center">
          <h5 class="text-white" data-aos="fade-left">Fajar Adi Setyawan &copy; 2020 </h5>
        </div>
      </div>
    </div>
  </div>
  <!-- end footer -->




  <!-- jquery file -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap js file -->
  <script src="js/bootstrap.min.js"></script>

  <!-- isotope js file -->
  <script src="vendor/isotope/isotope.min.js"></script>
  <!-- chapca -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- aos -->

  <!-- local -->
  <script src="js/script.js"></script>

  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
  </script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
  </script>
  <script>
    $(document).ready(function() {
      $('body').bootstrapMaterialDesign();
    });
  </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 2000,
    });
  </script>
</body>

</html>