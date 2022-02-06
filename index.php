<?php
include 'connection.php';
include 'header.php';
?>
<link rel="stylesheet" href="style.css">
<style type="text/css">
  .head{
    color: #2E2751;
    font-size: 50px;
    font-weight: bold;
    line-height: 65px;
    margin-bottom: 20px;
    padding-bottom: 20px;
    position: relative;
  }
  .head::before{
     content: "";
    position: absolute;
    left: 0;
    width: 50px;
    height: 6px;
    background: #8b0000;
    bottom: -3px;
  }
  .sxname{
    background-color: #3fa723;
    width: 100px;
    padding: 5px 10px 5px 10px;
    border-radius: 5px;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
  }
  .sxname-p{
    background-color: #9c0000;
    width: 79px;
    font-weight: 600;
    font-size: 13px;
    border-radius: 5px;
    color: white;
    text-transform: uppercase;
  }
  .icon{
    float: right;
    margin-top: -3%;
    background: #efefef;
    border-radius: 52%;
    color: #8B0000;
    font-size: 20px; 
  }
  .description{
    margin-top: 20%;
  }
  .proname{
    color: #fff;
  }
  .procity{
    color: #fff;
    opacity: .9;
  }
  .featured{
    margin-bottom: 20px;
  }
  .fee{
    width: 105%;
    padding: 10px;
  }
  .hover-opacity{
    opacity: 0.88;
  }
  .hover-opacity:hover{
    opacity: 1;
    cursor: pointer;
  }

  /* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    padding: 8px;
    margin-right: -20px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 100%;
    overflow: hidden;
    background-color: #efefef;
    color: dimgrey;
    text-align: center;
    border-radius: 6px;
    padding: 8px 10px;
    position: absolute;
    z-index: 1;
    bottom:105%;
    left: 27%;
    margin-left: -100px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}

/*popup one style*/
.popupone {
    position: relative;
    display: inline-block;
    cursor: pointer;
    background-color: #8b0000;
    padding: 8px;
    z-index: 1;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    box-shadow: 20px 0px 20px 0px rgba(0, 0, 0, .2);
}
.popupone:hover{
  -ms-transform: scale(1.1); /* IE 9 */
  -webkit-transform: scale(1.1); /* Safari 3-8 */
  transform: scale(1.1); 
}

/* The actual popup */
.popupone .popuptextone {
    visibility: hidden;
    width: 100%;
    overflow: hidden;
    background-color: #efefef;
    color: dimgrey;
    text-align: center;
    border-radius: 6px;
    padding: 8px 10px;
    position: absolute;
    z-index: 1;
    bottom:105%;
    left: 36%;
    margin-left: -105px;
}

/* Popup arrow */
.popupone .popuptextone::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popupone .showone {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeInone 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeInone {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeInone {
    from {opacity: 0;}
    to {opacity:1 ;}
}

/* end of popupone notificationsone*/

/*popup two style*/
.popuptwo {
    position: relative;
    display: inline-block;
    cursor: pointer;
    padding: 8x;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popuptwo .popuptexttwo {
    visibility: hidden;
    width: 100%;
    overflow: hidden;
    background-color: #efefef;
    color: dimgrey;
    text-align: center;
    border-radius: 6px;
    padding: 8px 10px;
    position: absolute;
    z-index: 1;
    bottom:105%;
    left: 33%;
    margin-left: -85px;
}

/* Popup arrow */
.popuptwo .popuptexttwo::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popuptwo .showtwo {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIntwo 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIntwo {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIntwo {
    from {opacity: 0;}
    to {opacity:1 ;}
}

/* end of popuptwo notifications*/

/* end of popup notifications*/
.zoom {
    transition: transform .2s;
    padding: 13px;
    width: 100%;
    height: 250px;
    margin: 0 auto;
}
.zoom:hover {
    -ms-transform: scale(1.1); /* IE 9 */
    -webkit-transform: scale(1.1); /* Safari 3-8 */
    transform: scale(1.1); 
}
.zoom1 {
    transition: transform .2s;
    padding: 0px;
    margin: 0 auto;
}

.zoom1:hover {
    -ms-transform: scale(1.1); /* IE 9 */
    -webkit-transform: scale(1.1); /* Safari 3-8 */
    transform: scale(1.1); 
}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #fff;
  margin-top: -40px;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
  transition: .10s ease;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -50px;
  padding: 20px 140px 0px 140px;
  color: #efefef;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  color: #8b0000;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #fff;
    margin-top: -22px;
    margin-bottom: 30px;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
  z-index: 99999;
}

/* Add a background color to the active dot/circle */
 .dot:hover {
  background-color: #8b0000;
}

/* Add an italic font style to all quotes */
q {font-style: italic;}

/* Add a blue color to the author */
.author {color: cornflowerblue;}

</style>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand ml-3" href="#Home" style="color:#8b0000; font-size:25px">Servi<span style="color:#000;">X</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color:#8B0000">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#team">Our Team</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#testimonials">Testimonials</a>
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
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-10 col-sm-12">
          <h1 class="text-light head">LET'S SERVIX YOU</h1>
          <h5 class="text-light">More than 400+ People are using Servi<span style="color:#8b0000;">X</span></h5>
            <p class="text-light">Providing solutions to search for home work issues.<br>
            Help around your home is onclick away...</p>
            <a href="get_started.php" class="btn p-2 text-light px-4 font-weight-bold" style="">Get Started</a>
          <a href="#about" class=" p-2 px-4 text-light font-weight-bold btn bg-transparent" style="font-size:15px; border:2px solid #efefef;">About Us...</a>
        </div>
      </div>
    </div>
</section>

<section class="bg-light pb-4 pt-0">
  <div class="container" style="">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-12 card py-5 text-center popup" onclick="myFunction()">
        <span class="popuptext" id="myPopup">Chose the service you are looking for from our services provided below or navigate to get started to select a provider</span>
        <span><i class="fal fa-file-signature fa-3x mb-4" style="color:#8B0000"></i></span>
        <h4 class="text-dark">Describe your Task</h4>
        <small class="text-muted mb-3">This helps us determine which tasker are best for you</small>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 card py-5 text-center popupone" onclick="myFunctionone()">
        <span class="popuptextone" id="myPopupone">Chose from the list of providers within your location and navigate to book there services as well as contact them and chat with them </span>
          <span class="text-white"><i class="fal fa-user-hard-hat fa-3x mb-4" style="color:#fff"></i></span>
          <h4 class="text-white">Find a Tasker</h4>
          <small class="mb-5 text-light">This helps us determine which tasker are best for you</small>
      </div>
      <div class="col-md-4 col-lg-4 col-sm-12 card py-5 text-center popuptwo" onclick="myFunctiontwo()">
        <span class="popuptexttwo" id="myPopuptwo">When there services are booked a mail will be sent to you immediately on when to attend to you thanks</span>
        <span><i class="fal fa-user-hard-hat fa-3x mb-4" style="color:#8B0000"></i></span>
        <h4 class="text-dark">Live Smarter</h4>
        <small class="text-muted mb-3"></span>This helps us determine which tasker are best for you</small>
      </div>
    </div>
  </div>
</section>

<!-------/home------->

<!------About Us---->
<section id="about" class="py-5">
  <div class="container">
    <!--div class="mb-5 mt-4">
     <h2 class="" style="color:#000"><b style="color:#8B0000;font-size: 45px">A</b>bout Servi<span style="color:#8B0000;">X</span></a> </h2>
    </div-->
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-12 about-column">
        <div class="mb-4">
          <h2 class="text-center" style="color:#000"><b style="color:#8B0000;font-size: 45px">A</b>bout Servi<span style="color:#8B0000;">X</span></a> </h2>
        </div>
        <p class="text-dark about-text pr-4" style="font-weight: 400; line-height: 30px;"> 
          ServiX is a group established to aid the growing population with home and office domestic work. 
        The need and idea of servix came to mind during a programming class at <a href="https://connakfoundation.org" target="_blank" style="color:#8b0000;">Connak foundation</a> Nigeria. A blessed group helping youths to achieve there dreams. Thanks for there coach and direction it all worth it. click on the link below to more about us and waht we do.
        </p>
        <a href="about-us.php" target="_blank" class="btn text-light col-lg-3 col-md-6 col-sm-12 mt-3 mb-4">Read more</a>
      </div>
      <div class="col-md-6 col-lg-6 col-sm-12">
        <img src="images/aboutus.jpg" alt="aboutus" class="img-fluid about-img rounded-top" style="height: 60vh">
      </div>
    </div>
  </div>
</section>
<!-------/About------>

<!------Our Services---->
<section class="py-5 bg-light" id="services">
  <?php
    $sql = "SELECT * FROM services ORDER BY id ASC LIMIT 9";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
    ?>
  <div class="mb-5 mt-4 text-center">
    <h2 class="">Our <b style="color:#8B0000;font-size: 45px">S</b>ervices</h2>
    <p class="text-muted"> Feel free to explore our services and book your desired service</p>
  </div>
  <div class="container">
    <div class="row">
      <?php while ($row = mysqli_fetch_array($result)) {
        #$image = $row['service_image'];
        ?>
      <div class="col-md-6 col-lg-3 col-sm-12 mb-4">
        <div class="card" style=" box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);">
          <img src="admin/<?php echo $row['image'];?>"class="img-fluid rounded-top hover-opacity" style="height: 30vh">
          <div class="card-body text-center">  
            <b style="font-size:15px; "><?php echo $row['service_name'];?></b>
            <p class="card-text">
            </p>
            <a href="explore.php?id=<?php echo $row['id'];?>" target="_blank" class="btn text-light btn-block btn-sm">Explore&nbsp;<i class="fa fa-eye"></i></a>
          </div>
        </div>
      </div>
    <?php }}?>
    </div>
  </div>
</section>
<!------/Our Services---->

<!------Our providers---->
<section class="py-5" id="providers">
  <div class="container">
    <div class="mb-5 mt-4 text-center">
     <h2 class="" style="color:#000"><b style="color:#8B0000;font-size: 45px">F</b>eatured Provider<span style="color:#8B0000;">s</span></a> </h2>
     <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 col-sm-12 featured">
        <div style="background:linear-gradient(rgba(0, 0, 0, 0.3),rgba( 0,0,0,0.3)),url(images/wchef2.png); background-size: cover; position: relative; background-position: center;" class="rounded-top fee zoom">
          <div class="row p-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <h6 class="sxname-p p-2">Chef SX</h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <i class="far fa-badge-check icon"></i>
            </div>
          </div>
          <div class="row p-2">
            <div class="col-md-12 col-lg-12 col-sm-12 description">
              <h6 class="sxname">Featured</h6>
              <h5 class="proname">Miss Chiwendu</h5>
              <p class="procity"><i class="fas fa-map-marker-alt text-warning" style="color:#8b0000;"></i> Ikwo,Ebony State</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 col-sm-12 featured">
        <div style="background:linear-gradient(rgba(0, 0, 0, 0.2),rgba( 0,0,0,0.2)),url(images/mplumber.jpg); background-size: cover; position: relative; background-position: center;" class="rounded-top fee zoom">
          <div class="row p-2">
            <div class="col-lg-8 col-md-8 col-sm-8">
              <h6 class="sxname-p p-2">Plumber</h6>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <i class="far fa-badge-check icon"></i>
            </div>
          </div>
          <div class="row p-2">
            <div class="col-md-12 col-lg-12 col-sm-12 description">
              <h6 class="sxname">Featured</h6>
              <h5 class="proname">Mathew Hayden</h5>
              <p class="procity"><i class="fas fa-map-marker-alt text-warning" style="color:#8b0000;"></i> Ikom,Calabar States</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 col-sm-12 featured">
        <div style="background:linear-gradient(rgba(0, 0, 0, 0.2),rgba( 0,0,0,0.2)),url(images/uber.jpg); background-size: cover; position: relative; background-position: center;" class="rounded-top fee zoom">
          <div class="row p-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <h6 class="sxname-p p-2 text-center">Driver</h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <i class="far fa-badge-check icon"></i>
            </div>
          </div>
          <div class="row p-2">
            <div class="col-md-12 col-lg-12 col-sm-12 description">
              <h6 class="sxname">Featured</h6>
              <h5 class="proname">Timothy Ade</h5>
              <p class="procity"><i class="fas fa-map-marker-alt text-warning" style="color:#8b0000;"></i> VI, Lagos State</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 col-sm-12 featured">
        <div style="background:linear-gradient(rgba(0, 0, 0, 0.2),rgba(0,0,0,0.2)),url(images/hot-tar.jpg)no-repeat; background-size: cover; position: relative; background-position: center;" class="rounded-top fee zoom">
          <div class="row p-2">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <h6 class="sxname-p p-2">Hot Tar</h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <i class="far fa-badge-check icon"></i>
            </div>
          </div>
          <div class="row p-2">
            <div class="col-md-12 col-lg-12 col-sm-12 description">
              <h6 class="sxname">Featured</h6>
              <h5 class="proname">Christian Okafor</h5>
              <p class="procity"><i class="fas fa-map-marker-alt text-warning" style="color:#8b0000;"></i> Aba, Abia State</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!------/Our providers---->

<!------Our Team ------->
<section id="team" class="py-5 bg-light" id="testimonials">
  <div class="ml-5 mb-5 mt-4 text-center">
    <h2 class=""><b style="color:#8B0000;font-size: 45px" >O</b>ur Team</h2>
    <p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
  </div>
<div class="container py-2">
  <div class="row">
    <div class="col-md-6 col-lg-3 col-sm-12">
      <div>
        <img src="images/val.png" alt="member image" class="img-fluid rounded-top zoom1" style="height:40vh; width: 100%">
      </div>
      <h4 class="font-weight-bold mt-4 text-center">Johnpaul Onuora</h4>
      <p class="text-muted text-center">Founder & CEO</p>
    </div>
    <div class="col-md-6 col-lg-3 col-sm-12">
      <div>
        <img src="images/frank.jpg" alt="member image" class="img-fluid rounded-top zoom1" style="height:40vh; width: 100%">
      </div>
      <h4 class="font-weight-bold mt-4 text-center">Franklyn Onuora</h4>
      <p class="text-muted text-center">On Site Manager</p>
    </div>
    <div class="col-md-6 col-lg-3 col-sm-12">
      <div>
        <img src="images/woman.jpg" alt="member image" class="img-fluid rounded-top zoom1" style="height:40vh; width: 100%">
      </div>
      <h4 class="font-weight-bold mt-4 text-center">Nonye Christy</h4>
      <p class="text-muted text-center">Customer Relationship Manager</p>
    </div>
     <div class="col-md-6 col-lg-3 col-sm-12">
      <div>
        <img src="images/ari.png" alt="member image" class="img-fluid rounded-top zoom1" style="height:40vh; width: 100%">
      </div>
      <h4 class="font-weight-bold mt-4 text-center">Okoye Arinze</h4>
      <p class="text-muted text-center text-center">Database Manager</p>
    </div>
    <div class="py-5 text-center mx-auto">
      <a href="about-us.php" class="btn text-light">Learn More About US &nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
    </div>
  </div>
</div>
</section>
<!-------/our team------->

<!-----Testimonials----->
<section class="py-5" id="testimonials">
  <div class="mt-2 text-center">
    <h2 class=""><b style="color:#8B0000;font-size: 45px" >H</b>appy Customers</h2>
    <p class="text-muted mb-5">Below are some beneficiaries of servix, happy to share there experiences</p>
    </div>

    <div class="slideshow-container">
<?php
$smtt=mysqli_query($conn,"SELECT * FROM comments");
if (mysqli_num_rows($smtt) > 0) {
    while($row4=mysqli_fetch_assoc($smtt)){

?>
      <div class="mySlides">
        <q class=""><?php echo $row4['note'];?></q><br>
        <img src="<?php echo $row4['image']?>" alt="" class="rounded-circle border mt-3" width="85" height="85">
        <p class="author"><?php echo $row4['name'];?></p>
        <p style="margin-top: -15px"><i><?php echo $row4['location'];?></i></p>
      </div>
 <?php } }?>
      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
 

      <div class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
</section>
<script type="text/javascript">
  function loadfile(event){
    var output = document.getElementById('preimage');

    output.src=URL.createObjectURL(event.target.files[0]);
  };
</script>
<!------/Testimonial----->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-lg-4 col-sm-12"  style="/*background: url(images/comment.jpg)center/cover no-repeat;">
        <img src="images/comment.jpg" class="img-fluid rounded-top" style="height: 60vh; width: 100%;">
      </div>
      <div class="col-md-8 col-lg-8 col-sm-12">
        <h3 class="text-dark"><b style="color:#8B0000;">T</b>ell us your experience</h3>
        <div class="ml-auto col-md-2" style="margin-top: -50px">
          <img src="images/noimage.jpg" id="preimage" class="img-fluid" style="width: 70px; height: auto; border-radius:50%;">
        </div>
        <div>
        <hr class="bg-light">
        <h5 class="text-secondary mb-4">Leave a comment</h5>
          <form action="" method="post" enctype="multipart/form-data">
            <div class="alert alert-success" id="msg" style=" display:none; margin-top:10px;">
              <strong>Successfull</strong> Thanks for sharing your view with Servi<b style="color:#8B0000">X</b>
            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Your name" required/>
                <label>Full Name</label>
              </div>
              <div class="form-group col-md-4">
                <input type="email" name="email" class="form-control" placeholder="Your Mail" required/>
                <label>Email</label>
              </div>
              <div class="form-group col-md-4">
                <input type="file" accept="image/*" class="form-control" name="image" onchange="loadfile(event)"/>
                <label>Upload Image <span style="color:red;">(optional)</span></label>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                  name="contact" type="text" class="form-control" placeholder="Contact" minlength="11" maxlength="11" required/>
                  <label for="contact">Contact</label>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="location" class="form-control" placeholder="Your Location" required/>
                <label for="address">Location</label>
              </div>
            </div>
            <div class="form-group">
              <textarea type="text" name="note" rows="3" class="form-control"placeholder="Your text" required/></textarea>
            </div>
            <div class="form-group mt-3">
              <button class="btn btn-md btn" type="submit" name="comment">Leave a Comment</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
if (isset($_POST['comment'])) {
  $name=$conn->real_escape_string($_POST['name']);
  $email=$conn->real_escape_string($_POST['email']);
  $contact=$conn->real_escape_string($_POST['contact']);

  $tm=md5(time());
  $fnm2=$_FILES['image']['name'];
    $dst2="admin/uploads/".$tm.$fnm2;
    $dst_db2="uploads/".$tm.$fnm2;
    move_uploaded_file($_FILES['image']['tmp_name'], $dst2);

  $location=$conn->real_escape_string($_POST['location']);
  $note=$conn->real_escape_string($_POST['note']);
  $date=date('D-M-Y');

  $res= mysqli_query($conn,"INSERT INTO pre_comment (name,email,contact,image,location,note,date) VALUES('$name','$email','$contact','$dst2','$location','$note','$date')") or die(mysqli_error($conn));
  if ($res) {
    ?>
    <script type="text/javascript">
      document.getElementById('msg').style.display="block";
    </script>
    <?php
    #header('refresh:2; url=index.php');
  }
}

?>
<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
function myFunctionone() {
    var popup = document.getElementById("myPopupone");
    popup.classList.toggle("showone");
}
function myFunctiontwo() {
    var popup = document.getElementById("myPopuptwo");
    popup.classList.toggle("showtwo");
}
</script>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>



















<?php include 'footer.php';?>
