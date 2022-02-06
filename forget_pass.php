<?php
session_start();
include 'connection.php';
include 'header.php';
?>

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
        <a class="nav-link" href="login.php"><i class="fa fa-users" style="color:#8B0000"></i> Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
    </ul>
  </div>
</nav>
<!-----/NavEnd------>
<div class="container pt-4">
    <div class="row">
        <div class="col-md-12 py-5 mx-auto col-lg-6 col-sm-12">
            <div class="card shadow-lg p-4">
            	<div class="mt-4">
                    <h3 class="text-dark">Forgotten Password</h3>
                    <p class="text-primary">Input your email address</p>
                    <form action="" name="form1" method="post">
	                    <div class="form-group">
	                        <label>Email</label>
	                        <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
	                    </div>
	                    <input  type="submit" name="submit" class="btn btn-flat" value="Submit">
                            <div class="alert alert-danger" id="errormsg" style=" display:none; margin-top:10px;">
                                <strong>Invalid</strong> Please Check your inputs
                            </div>
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $email =$conn->real_escape_string($_POST['email']);
    $sql = mysqli_query($conn, "SELECT email FROM providers WHERE email='$email'");
    if ($sql->num_rows > 0) {
         ?>
        <script type="text/javascript">
           window.location="pass-reset.php";
        </script>
        <?php
    }
    else{
        ?>
        <script type="text/javascript">
            document.getElementById('errormsg').style.display="block";
        </script>
        <?php
    }    
}

?>




















<!------/footer----->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
<script src="sweetalert/sweetalert.min.js"></script>
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