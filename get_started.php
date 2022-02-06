<?php
include 'header.php';
include 'connection.php';
$cities = ["Abia","Abuja","Anambara","calabar","Enugu","Ebony", "Lagos","Imo", "Port-harcourt","Uyo"];

?>
<style type="text/css">
  
  .banner{
    position: relative;
    background:linear-gradient(rgba(0, 0, 0, 0.4),rgba( 0,0,0,0.4)),url('images/wcleaner.jpg');
    height: 70vh;
    background-size:cover;
    background-position: center; 
    padding: 100px 0 100px;
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
    
    option:hover{
      background-color: #000 !important;
    }
</style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light ">
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
  <section class="banner mb-2">
    <div class="container mb-0"style="">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12 text-center text-white mb-2">
          <h2>WE FIND SERVICES FOR YOU</h2>
          <p class="" style="opacity: .8">Help around your home is just few clicks away</p>
        </div>
      </div>
      <form action="" method="post">
      <div class="row mx-auto"style="">
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
          $res=mysqli_query($conn,"select * from services");
          if (mysqli_num_rows($res) > 0) {
        ?>
        <div class="form-group col-lg-5 col-md-6 col-sm-12" style="">
            <select class="form-control form-control-lg" name="services" id="profession">
              <option disabled="disabled" selected="selected">Select Service</option>
              <?php
              while($row=mysqli_fetch_assoc($res)){?>
                <option value="<?php echo $row['service_name'];?>"><?php echo $row['service_name'];?></option>
                <?php }}?>
            </select>
        </div>
        <div class="form-group col-lg-2 col-md-6 col-sm-12 mb-4" style="">
          <button type="submit" name="submit" id="search" class="form-control form-control-lg btn btn-lg"><i class="fa fa-search"></i>&nbsp;Search</button>
        </div>
        <p class="ml-3 text-white">Select city and profession..</p>
        </div>
      </form>
      </div>
    </div>
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
<section class="py-4" style="margin-top: 5%">
  <div class="container pl-2">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <img src="<?php echo $row1['image']?>" class="rounded-top" height="250" width="260">
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12">
          <h3 class="text-dark"><?php echo $row1['name'];?></h3>
          <p><strong>Contact</strong> &nbsp;: <?php echo $row1['contact'];?></p>
          <p><strong>Work</strong> &nbsp;: <?php echo $row1['work_type'];?></p>
          <p><strong>Years of experience</strong> &nbsp;: <?php echo $row1['experience'];?></p>
          <p class="mb-4"><strong>Address</strong> &nbsp;: <?php echo $row1['address'];?></p>
          <p class="mb-4" style="cursor: pointer;"><strong>Rated</strong> &nbsp;: <i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning"></i><i class="far fa-star text-warning"></i></p>
      </div>
      <div class="col-md-12 col-lg-4 col-sm-12 mt-5" style="">
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
            <a href="book.php?id=<?php echo $row1['id']?>" class="btn btn-md col-lg-12 col-md-12 col-sm-6 text-light mb-4 font-weight-bold">Book Now</a></td>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 <?php
}
} 
else{
  echo "No record found";
}

include 'footer.php';

?>
