<?php
session_start();
include 'connection.php';
include 'header.php';
?>
<script>
function confirmInput() {
    fname = document.forms[0].fname.value;
    alert("Hello " + fname + "! You will now be redirected to self verification page");
}
</script>

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
        <a class="nav-link" href="#about">Get Started</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout <i class="fa fa-sign-out" style="color:#8B0000"></i></a>
      </li>
    </ul>
  </div>
</nav>
<!-----/NavEnd------>
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-12 py-5 mx-auto col-lg-6 col-sm-12">
                    <div class="">
                        <div class="text-center mt-4">
                            <h2 class="text-dark"><b style="color:#8B0000">V</b>erification Form</h2>
                            <p><b style="color:#8B0000">*</b>
                            <b class="text-secondary">Enter the email and password you submitted to verify your account</b></p>
                        </div>
                        <div class="cad-body px-2 py-2">
                            <div class="login-form">
                                <?php $res=mysqli_query($conn,"SELECT * FROM provider_request");
                                while($row=mysqli_fetch_array($res)){
                                    ?>
                                <form onsubmit="confirmInput()" action="" name="form1" method="post">

                                <?php }?>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" id="fname" name="email" class="form-control" placeholder="Enter your mail address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="**********" required>
                                    </div>
                                    <input  type="submit" name="login" class="btn btn-md btn-block mb-4" value="Login">
                                    <div class="alert alert-danger" id="errormsg" style=" display:none; margin-top:10px;">
                                        <strong>Invalid</strong> Please Check your inputs
                                    </div>
                                    <div class="alert alert-danger" id="logged" style=" display:none; margin-top:10px;">
                                        it's looks like you're not a member. Please Signup 
                                    </div>
                                    <p>Learn more about our</p>
                                    <p class="btn col-md-6"><i class="fa fa-lock text-white"></i> Privacy & Security policies</p>
                                    <p class="mt-2">Not a member?<a href="register.php" style="text-decoration: none"> Signup now</a></p>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
if (isset($_POST['login'])) {
    $email =$conn->real_escape_string($_POST['email']);
    $password =$conn->real_escape_string($_POST['password']);
    $sql = mysqli_query($conn, "SELECT email, password FROM provider_request WHERE email='$email'");
    if ($sql->num_rows > 0) {
      $row = $sql->fetch_array();
      if (password_verify($password, $row['password'])) {
          $_SESSION["user"] = $email;
        ?>
        <script type="text/javascript">
           window.location="verification.php";
        </script>
        <?php
      }else{
        ?>
        <script type="text/javascript">
            document.getElementById('errormsg').style.display="block";
        </script>
        <?php
      }    
    }else{
      ?>
        <script type="text/javascript">
            document.getElementById('logged').style.display="block";
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
