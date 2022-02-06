<?php
include 'connection.php';
include 'header.php';
?>
<style type="text/css">
  
    .banner{
    position: relative;
    background:linear-gradient(rgba(0, 0, 0, 0.5),rgba( 0,0,0,0.5)),url('images/aboutus.jpg');
    height: 50vh;
    background-size:cover;
    background-position: center; 
    padding: 150px 0 140px;
  }
  .breadcrumb{
    background: transparent;
  }
    .breadcrumb-item{
      font-size: 25px;
      font-weight: 500;
    }
  .btn{
        background-color: #8B0000;
        color: #fff;
        outline: none;
    }
    .btn:hover{
        color:#ffffff;
        background-color: #8B0000;
    }
    a:hover{
      color: #8B0000 !important;
    }
    .dropdown-menu.dropdown-item{
      background-color: #8B0000 !important;
    }
    .nav-item .active {
      color:#8B0000;
    }
    .section{
      position: relative;
    }
    .section::before{
      content:"";
      position: absolute;
      width: 200px;
      height: 200px;
      background: #fadadd;
      border-radius: 50%;
      top: 7%;
      left: 0px;
      z-index: -1;
    }
    .vision-sec{
      position: relative;
    }
    .vision-sec::before{
      content:"";
      position: absolute;
      width: 200px;
      height: 200px;
      background: #fadadd;
      border-radius: 50%;
      top: 10%;
      right: 0;
      z-index: -1;
    }
    .vision{
      margin-top: 8%;
      float: right;
    }
    .vision-head{
      font-weight: bold;
      position: relative;
    }
    
    .vision-image{
      width: 100%;
      height: 50vh;
      position: center;
    }
    .mission{
      margin-top: 8%;
    }
    .mission-head{
      font-weight: bold;
    }
     @media only screen and (max-width: 500px){
      .vision-sec::before{
        top: 60%;
      }
      .section::before{
        top: 2%;
      }
      .mission{
        margin-top: 4%;
        margin-bottom: 5%;
      }
    }
     @media only screen and (max-width: 767px){
      .vision-sec::before{
        top: 59%;
      }
      .mission{
        margin-top: 5%;
        margin-bottom: 5%;
      }
    }
    @media only screen and (min-width: 500px) {
      .about-link{
        margin-top: -15%;
      }
    }
    @media only screen and (min-width: 992px) {
      .about-link{
        margin-top: -8%;
      }
    }
    @media only screen and (min-width: 1370px) {
      .about-link{
        margin-top: -4%;
      }
    }
</style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand ml-3" href="index.php" style="color:#8b0000; font-size:25px">Servi<span style="color:#000;">X</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color:#8B0000">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#team">Our Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#testimonials">Testimonials</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php"><i class="fa fa-users" style="color:#8B0000"></i> Login</a>
      </li>
    </ul>
     <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link btn bg-light px-4" href="get_started.php" style="border-radius: 50px;color: #8B0000; box-shadow: 2px 2px 2px rgba(0,0,0,0.2)">Book Now</a>
      </li>
    </ul>
  </div>
</nav>
<!-----/NavEnd------>
  <section class="banner">
    <div class="container" style="">
      <div class="about-link">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
          <h2 class="text-white">About Us</h2>
        <ol class="breadcrumb text-light" style="margin-left: -17px">
          <li class="breadcrumb-item "><a href="index.php" class="text-light" style="text-decoration: none;">Servi<span style="color: #8B0000">X</span> &nbsp;</a> </li>
          <li class="breadcrumb-item" style="opacity: .7;"index.php>&nbsp; About us</li>
        </ol>
        </div>
      </div>
    </div>
    </div>
</section>

<section class="bg-light py-5">

  <div class="container">

    <div class="row text-center">
      <div class="head-text'">
        <h2 class="text-dark" style="font-weight: 500;"><b style="color: #8b0000; font-size: 45px;">W</b>hat we do</h2>
        <p class="text-left" align="justify">Servix is a group formed with the aim to help people lessen there burden of domestic and office work problems with providing the best quality and reliable services to help them complete there day to day work issues in due time ........
        Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
      </div>
      
    </div>

  </div>
</section>
<section class="py-5 section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="mission">
          <h2 class="text-dark mission-head">Mission</h2>
          <p class="mission-text"> Provide solutions and sid to every home with domestic and office work and lessen the burden of the search for quality and competent service providers.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <!--video src="" controls="true" class="mission-video"></video-->
        <img src="images/contactus.jpg" class="img-fluid rounded-top vision-image">
      </div>
    </div>
  </div>
</section>
<section class="py-5 vision-sec">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <img src="images/contactus.jpg" class="img-fluid rounded-top vision-image">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="vision">
          <h2 class="text-dark vision-head">Vision</h2>
          <p class="vision-text"> To become the leading home service providers with competent and quality employees to satisfy our growing population with quality domestic and office work solutions.</p>
        </div>
      </div>
    </div>
  </div>
</section>























<?php include 'footer.php';?>