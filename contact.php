<?php
include 'connection.php';
?>
<?php include 'header.php';?>
 <style type="text/css">
  
 	.banner{
    position: relative;
    background:linear-gradient(rgba(0, 0, 0, 0.5),rgba( 0,0,0,0.5)),url('images/contactus1.jpg');
    height: 50vh;
    background-size:cover;
    background-position: center; 
    padding: 80px 0 100px;
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
    h5{
    	
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
        <a class="nav-link" href="about-us.php">About Us</a>
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
    <div class="container mb-0" style="">
      <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
          <h2 class="text-white"> Contact Us</h2>
        <ol class="breadcrumb text-white" style="margin-left: -17px">
          <li class="breadcrumb-item "><a href="index.php" class="text-light" style="text-decoration: none;">Servi<span style="color: #8B0000">X</span> &nbsp;</a> </li>
          <li class="breadcrumb-item" style="opacity: .7;">&nbsp; Contact us</li>
          <p class="col-md-12 col-lg-10 col-sm-12 mt-3" style="margin-left: -17px">We are always here to help. if you have requirements / queries about our services, fill up the contact form below and we'll do our best to reply within 24 hours Alternatively simpily pickup the phone and give us a call.</p>
        </ol>
        </div>
      </div>
    </div>
</section>
<?php
  use PHPMailer\PHPMailer\PHPMailer;
  #use PHPMailerPHPMailerException;

  require 'vendor/phpmailer/phpmailer/src/Exception.php';
  require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
  require 'vendor/phpmailer/phpmailer/src/SMTP.php';

  // Create object of PHPMailer class
  $mail = new PHPMailer();

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $contact = $conn->real_escape_string($_POST['contact']);
    $location= $conn->real_escape_string($_POST['location']);
    $subject = $conn->real_escape_string($_POST['subject']);
    $message = $conn->real_escape_string($_POST['message']);

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'johnpaulebubeval23@gmail.com';
      // Gmail Password
      $mail->Password = 'valeno2468000';
      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;

      // Email ID from which you want to send the email
      $mail->setFrom($email,$name,$contact);
      // Recipient Email ID where you want to receive emails
      $mail->addAddress('valentineebube20@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

      $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Thank you! for contacting us, We will get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert text-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>	
<section class="bg-light py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h3 class="text-dark mb-3"><b style="color: #8B0000">S</b>end us a message</h3>
				<form action="" method="post">
					<?= $output; ?>
					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="text" name="name" class="form-control" placeholder="Fullname *" required/>
						</div>
						<div class="form-group col-md-6">
							<input type="email" name="email" class="form-control" placeholder="Email Address *" required/>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="text" name="contact" class="form-control" placeholder="Phone Number *" required/>
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="location" class="form-control" placeholder="Location *" required/>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<input type="text" name="subject" class="form-control" placeholder="Subject *" required/>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<textarea type="text" name="message" class="form-control" placeholder="Message" rows="3"></textarea>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<button type="submit" name="submit" class="btn"><i class="fa fa-send"></i> Send Message</button>
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-4">
				<h3 class="text-dark mb-3"><b style="color: #8B0000">F</b>ind us</h3>
				<h5>Call Us / WhatsApp</h5>
				<p><a href="tel:+2348144307244"class="text-secondary"><i class="far fa-phone-alt text-success"></i>&nbsp; +(234) 8144307244, +(234) 9034463650</a><br></p>
				<h5>Email / Website</h5>
				<p>
					<a href="mailto:mastervaljp@gamil.com"class="text-secondary"><i class="far fa-envelope text-danger"></i>&nbsp; mastervaljp@gmail.com</a><br>
					<a href="index.php" class="text-secondary"><i class="far fa-globe text-primary"></i>&nbsp; Servix.com</a>
				</p>
				<h5>Working hours</h5>
				<p>Mon - Sat : 9am - 6pm(GMT)</p>
				<h5>Address</h5>
				<p>
					N0 108 Ndoki Road Aba, Abia State Nigeria
				</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container-fluid">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3974.0229197068165!2d7.375833013748989!3d5.099995296298611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10429ecb476e42f3%3A0x73ef6778d033eab8!2s108%20Ndoki%20Rd%2C%20Aba!5e0!3m2!1sen!2sng!4v1624725287933!5m2!1sen!2sng" width="100%" height="400px" style="border:0;" frameborder="0">
		</iframe>
	</div>
</section>

<?php include 'footer.php';?>