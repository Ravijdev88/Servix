<?php
include 'header.php';
include 'connection.php';
if (!isset($_GET['id'])) {
  ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
$cities = ["Abia","Abuja","Anambara","calabar","Enugu","Ebony", "Lagos","Imo", "Port-harcourt","Uyo"];
?>
<style type="text/css">
  .baner{
    position: relative; 

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
    .btn:focus{
      border: 1px solid #8B0000;
    }
    a{
      color: #555;
      text-decoration: none;
    }
    a:hover{
      color: #8B0000 !important;
    }
    .dropdown-menu.dropdown-item{
      background-color: #8B0000 !important;
    }
    .img-fluid {
      /*-webkit-filter: blur(3px); /* Safari 6.0 - 9.0 */
     /* filter: blur(3px);*/
     background-color: linear-gradient(rgba(0, 0, 0, 0.7))
    }
    .my-image{
      position: relative;
    }
    @media only screen and (min-width: 360px) {
      .my-text{
        margin-top: -110%;
      }
    }
     @media only screen and (min-width: 500px) {
      .my-text{
        margin-top: -75%;
        margin-bottom: -15%;
      }
      .providers{
        padding: 0em 0em 1em 1.5em;
      }
    }
     @media only screen and (min-width: 507px) {
      .my-text{
        margin-top: -70%;
      }
    }
    @media only screen and (min-width: 530px) {
      .my-text{
        margin-bottom: 4%;
      }
    }
    @media only screen and (min-width: 607px) {
      .my-text{
        margin-top: -65%;
      }
    }
     @media only screen and (min-width: 768px) {
      .my-text{
        margin-top: -45%;
        margin-bottom: 0%;
      }
      .my-image{
        height: 40vh;
      }
    }
     @media only screen and (min-width: 992px) {
      .my-text{
        margin-top: -33%;
      }
    }
     @media only screen and (min-width: 1200px) {
      .my-text{
        margin-top: -26%;
      }
    }
    @media only screen and (min-width: 1220px) {
      .my-text{
        margin-top: -10%;
      }
    }
    @media only screen and (min-width: 1320px) {
      .my-text{
        margin-top: 4%;
        margin-bottom: -4%;
      }
    }

</style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        <a class="nav-link" href="index.php#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#team">Our Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#testimonials">Testimonials</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php"><i class="fa fa-users" style="color:#8B0000"></i> Login</a>
      </li>
    </ul>
  </div>
</nav>
<!-----/NavEnd------>
<?php
$id=$_GET['id']; 
$res2=mysqli_query($conn,"select * from services where id='$id'");
if (mysqli_num_rows($res2) > 0) {
  while($row2 = mysqli_fetch_assoc($res2)){
  ?>
  <section class="baner" style="">
    <div class="" style="margin-bottom: 12%">

      <img src="admin/<?php echo $row2['image'];?>" class="img-fluid my-image" width="100%" style="height: 80vh; ">

      <div class="container"style="margin-top: -26%;">
        <div class="my-text">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 text-center text-white">
            <h2>WE FIND SERVICES FOR YOU</h2>
            <p class="" style="opacity: .9">Help around your home is just few clicks away</p>
          </div>
        </div>

        <form action="" method="post">

          <div class="row mx-auto">
            <div class="form-group col-lg-5 col-md-6 col-sm-12">
            <select class="form-control form-control-lg" name="city" id="city">
                <option value="none" selected="selected" disabled="disabled">-- Select City --</option>
                <?php foreach ($cities as $city) : ?>
                <option value="<?= $city ?>"> <?= $city ?>
                </option>
                <?php endforeach; ?>
            </select>
          </div>
          <?php
          $id=$_GET['id']; 
            $res=mysqli_query($conn,"select service_name from services where id='$id'");
            if (mysqli_num_rows($res) > 0) {
          ?>
          <div class="form-group col-lg-5 col-md-6 col-sm-12">
              <select class="form-control form-control-lg" name="services" id="profession">
                <?php
                while($row=mysqli_fetch_assoc($res)){?>
                  <option value="<?php echo $row['service_name'];?>"><?php echo $row['service_name'];?></option>
                  <?php }}?>
              </select>
          </div>
          <div class="form-group col-lg-2 col-md-6 col-sm-12">
            <button type="submit" name="submit" id="search" class="form-control btn btn-lg"><i class="fa fa-search"></i>&nbsp;Search</button>
          </div>
          <p class="ml-3 text-white">Select your city..</p>
          </div>
        </form>
      </div>

      </div>
    </div>
  </div>
<?php 
}}
?>
  </div>
</section>
<?php 
if (isset($_POST['submit'])){
   if (isset($_POST['city']) && isset($_POST['services'])) {
      $city = $_POST['city'];
      $services = $_POST['services'];
    } 
}
?>
<?php
error_reporting(0);
$city = $_POST['city'];
$services = $_POST['services'];
$sql =mysqli_query($conn,"SELECT * FROM `providers` WHERE city='$city' AND work_type='$services'");
if (mysqli_num_rows($sql) > 0) {
while ($row1=mysqli_fetch_assoc($sql)) { 
$status='Offline';
$class="text-success";
if($row1['last_login']==$status){
  $class="text-danger";
}    
?>
<section class="py-5">
  <div class="container" style="">

    <div class="providers">

    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="<?php echo $row1['image']?>" class="rounded-top" height="250" width="260">
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
          <h3 class="text-dark"><?php echo $row1['name'];?></h3>
          <p> <b style="width: 40px;font-weight:bold;">. </b> <strong>Contact</strong> &nbsp;: <?php echo $row1['contact'];?></p>
          <p> <b style="width: 40px;font-weight:bold;">. </b> <strong>Work</strong> &nbsp;: <?php echo $row1['work_type'];?></p>
          <p> <b style="width: 40px;font-weight:bold;">. </b> <strong>Years of experience</strong> &nbsp;: <?php echo $row1['experience'];?></p>
          <p class="mb-4"> <b style="width: 40px;font-weight:bold;">. </b> <strong>Address</strong> &nbsp;: <?php echo $row1['address'];?></p>
          <p class="mb-4" style="cursor: pointer;"> <b style="width: 40px;font-weight:bold;">. </b> <strong>Rated</strong> &nbsp;: <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning"></i></p>
      </div>

      <div class="col-md-6 col-lg-4 col-sm-12 mt-5" style="">
        <div class="row">

          <div class="col-md-2 col-lg-1 col-sm-6">
            <h6 class=""><i class="far fa-badge-check fa-2x text-success"></i></h6>
          </div>

          <div class="col-md-6 col-lg-6 col-sm-6">
            <img src="images/verified.jpg"height="150" width="150" class="img-fluid " style="border-radius: 50%">
          </div>

          <div class="col-md-4 col-lg-5 col-sm-12">
            <p class="font-weight-bold text-center">Status: <span class="<?php echo $class?>"><?php echo $row1['last_login'];?></span></p>
          </div>
        </div>

        <div class="row mt-3">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <a href="book.php?id=<?php echo $row1['id']?>" class="btn btn-md col-lg-12 col-md-12 col-sm-6 text-light font-weight-bold">Book Now</a></td>
          </div>
        </div>

      </div>
    </div>
  </div>
  </div>
</section>
 <?php
}
} else{
    echo "No record found";
  }
?>
<div class="container-fluid" style="background-color: #8b0000" style="margin-top: 15%">
  <div class="row py-4">
    <div class="text-white col-md-8 col-lg-8 col-sm-6">
      <p class="text-center pt-3" style="font-size: 18px">2000+ People trusted Servix! Be one of them today </p>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <a href="get_started.php" class="btn ml-3" style="background-color: #efefef; color:#8b0000">Get Started</a>
    </div>
  </div>
</div>
<!------footer----->
<section class="py-5 bg-light">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 col-lg-3 col-sm-12">
        <a href="index.php" style="color:#8B0000;font-size: 27px">Servi<span style="color:#000">X</span></a>
        <p align="justify-left" class="text-muted" style="letter-spacing: .5px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.sed do eiusmod
        tempor incididunt ut.</p>
        <small class="mr-2"><a href="" class=""style="font-size:12px"><i class="fab fa-facebook-f"></i></a></small>
        <small class="mr-2"><a href="#" class=""><i class="fab fa-twitter"></i></a></small>
        <small class="mr-2"><a href="#"class=""><i class="fab fa-google-plus-g"></i></a></small>
        <small class="mr-2"><a href="#" class=""><i class="fab fa-instagram"></i></a></small>
        <small class="mr-2"><a href="#" class=""><i class="fab fa-linkedin-in"></i></a></small>
      </div>
      <div class="col-md-3 col-lg-3 col-sm-12">
        <h5 class="mb-4 text-dark">Quick Links</h5>
        <a href="#"class="">Home</a><br>
        <a href="#"class="">Support</a><br>
        <a href="#"class="">Privacy & Policy</a><br>
        <a href="#"class="">Terms & Conditions</a><br>
        <a href="#"class="">Services</a>
      </div>
      <div class="col-md-3 col-lg-3 col-sm-12">
        <h5 class="mb-4 text-dark">Our Services</h5>
        <a href="#"class="">Maid Services</a><br>
        <a href="#"class="">Cleaning Services</a><br>
        <a href="#"class="">Home Tutors</a><br>
        <a href="#"class="">Personal Driver</a><br>
        <a href="#"class="">Security Guards</a><br>
        <a href="#"class="">Chef Services</a><br>
        <a href="#"class="">Hot Tar Roofing Services</a><br>
        <a href="#"class="">Painter Services</a>
      </div>
      <div class="col-md-3 col-lg-3 col-sm-12">
        <h5 class="mb-4 text-dark">Our Services</h5>
        <a href="tel:+2348144307244" class="" style="font-size: 15px"><i class="fa fa-phone"></i>&nbsp; +(234) 8144307244</a><br>
        <a href="mailto:mastervaljp@gmail.com" class=""style="font-size: 15px"><i class="fa fa-envelope"></i>&nbsp;mastervaljp@gmail.com</a><br>
        <a href="contact.php" class="btn mt-4 px-3 text-light" style="font-size:14px">SEND US A MESSAGE</a>
      </div>
    </div>
  </div>
  <div class="container-fluid mt-5" style="margin-bottom: -20px">
    <div class="col-sm-12 col-lg-12 col-md-12">
      <hr class="bg-light">
     <div class="text-center">
      <small class="text-secondary mr-5 col-sm-12" style="font-weight: 700">Copyright 2021 Servi<span style="color:#8B0000">X</span>.All Rights Reserved</small>
      <small class="mr-2"><a href="" class=""><i class="fa fa-facebook text-secondary"></i></a></small>
        <small class="mr-2"><a href="#" class=""><i class="fa fa-twitter"></i></a></small>
        <small class="mr-2"><a href="#"class=""><i class="fa fa-google-plus"></i></a></small>
        <small class="mr-2"><a href="#" class=""><i class="fa fa-instagram"></i></a></small>
        <small class="mr-2"><a href="#" class=""><i class="fa fa-linkedin"></i></a></small>
     </div> 
    </div>
  </div>
</section>
<!------/footer----->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

<!-- Jquery JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Modernizr JS -->
    <script src="js/modernizr.min.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/scrollup.js"></script>
    <!-- FacnyBox JS -->
    <script src="js/jquery-fancybox.min.js"></script>
    <!-- Cube Portfolio JS -->
    <script src="js/cubeportfolio.min.js"></script>
    <!-- Slick Slider JS -->
    <script src="js/owl-carousel.min.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Magnipic Popup JS -->
    <script src="js/magnific-popup.min.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>
</html>