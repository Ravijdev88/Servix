<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="Author" content="Johnpaul Onuora">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Servix</title>
  
  <!-- Favicon -->
  <link rel="icon" type="image/sx1.png" href="../images/sx1.png">
  <!--link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway"-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <!---font awesome---->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <!---google fonts---->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
</head>
<body>
  <!-- Preloader -->
<div class="preeloader">
    <div class="preloader-spinner"></div>
</div>
    <!--/ End Preloader -->

<div class="container-fluid">
  <div class="row" style="background:#8b0000;padding: 7px">
    <div class="mr-auto ml-4 text-light">
      <span><small class="ml-2">Home Services</small></span>
    </div>
    <div class="text-light ml-auto">
      <span>
        <small><a href="tel:+2348144307244" class="text-light" style="font-size:13px"><i class="fa fa-phone text-light"></i>&nbsp; +(234) 8144307244</small>&nbsp;&nbsp;
        <small class="mr-2"><a href="mailto:mastervaljp@gmail.com" class="text-light"style="font-size:13px"><i class="far fa-envelope text-light"></i>&nbsp;mastervaljp@gmail.com</small>
          <small class="mr-2"><a href="" class=""style="font-size:12px"><i class="fab fa-facebook-f text-light"></i></a></small>
        <small class="mr-2"><a href="#" class="text-light"><i class="fab fa-twitter"></i></a></small>
        <small class="mr-2"><a href="#"class="text-light"><i class="fab fa-google-plus-g"></i></a></small>
        <small class="mr-2"><a href="#" class="text-light"><i class="fab fa-instagram"></i></a></small>
        <small class="mr-2"><a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a></small>
      </span>
    </div>
  </div>
</div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand ml-3" href="Logout.php" style="color:#8b0000; font-size:25px">Servi<span style="color:#000;">X</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="services.php">View Services</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="booked.php">Booked</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          comments
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="comments.php">View Comments</a>
          <a class="dropdown-item" href="pre_comment.php">Awaiting Comments</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Providers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="reg_pro.php">Registered Providers</a>
          <a class="dropdown-item" href="provider_request.php">Provider Request</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout <i class="fa fa-sign-out" style="color:#8b0000"></i></a>
      </li>
    </ul>
  </div>
</nav>
<style type="text/css">
/*====================================
  Preloader CSS
======================================*/
.preeloader {
    background: rgba(255, 255, 255, 1) none repeat scroll 0 0;
    height: 100%;
    position: fixed;
    width: 100%;
    z-index: 999999;
}
.preloader-spinner {
    -webkit-animation: 1s ease-out 0s normal none infinite running pulsate;
    animation: 1s ease-out 0s normal none infinite running pulsate;
    border: 10px solid #8b0000;
    border-radius: 50%;
    display: block;
    height: 150px;
    left: 50%;
    margin: 0px 0 0 -20px;
    opacity: 0;
    position: fixed;
    top: 50%;
    width: 150px;
    z-index: 10;
}
@-webkit-keyframes pulsate {
    0% {
        opacity: 0;
        -webkit-transform: scale(0.1);
        transform: scale(0.1);
    }

    50% {
        opacity: 1;
    }

    100% {
        opacity: 0;
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }
}
@keyframes pulsate {
    0% {
        opacity: .3;
        -webkit-transform: scale(0.1);
        transform: scale(0.1);
    }

    50% {
        opacity: 1;
    }

    100% {
        opacity: 0;
        -webkit-transform: scale(1.2);
        transform: scale(1.2);
    }
}
/*====================================
  End Preloader CSS
======================================*/


  .btn{
        background-color: #8B0000;
        color: #fff;
        outline: none;
    }
    .btn:hover{
        color:#ffffff;
        background-color: #8B0000;
    }
    .nav-item .nav-link:hover{
      color:  #8b0000;
    }
    a:hover{
      color: #8B0000 !important;
    }
    .dropdown-item:focus{
      background-color: #8B0000 !important;
      color: #fff !important;
    }
</style>


 