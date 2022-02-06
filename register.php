<?php
include 'connection.php';
include 'header.php';
$cities = ["Abia","Abuja","Anambara","calabar","Enugu","Ebony", "Lagos","Imo", "Port-harcourt","Uyo"];
error_reporting(0);
?>
<script type="text/javascript">
	function loadfile(event){
		var output = document.getElementById('preimage');

		output.src=URL.createObjectURL(event.target.files[0]);
	};
</script>

  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand ml-3" href="index.php" style="color:#8b0000; font-size:25px">Servi<span style="color:#000;">X</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: #8b0000">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php"><i class="fa fa-users" style="color:#8B0000"></i> Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-5">
      <li class="nav-item active">
        <a class="nav-link btn bg-light px-4" href="get_started.php" style="border-radius: 50px;color: #8B0000; box-shadow: 2px 2px 2px rgba(0,0,0,0.2)">Book Now</a>
      </li>
    </ul>
  </div>
</nav>
<!-----/NavEnd------>
<section class="py-5">
	<div class="container">
	<div class="row ">
		<!--div class="col-lg-4 col-md-4 col-sm-12" style="background: url(images/servix.jpg)center/cover no-repeat;">
			
		</div-->
		<div class="col-lg-10 col-md-10 col-sm-12 justify-content-center">
			<div class="card shadow-lg p-5">
			<div class="mb-3 bline" style="border-bottom: 1px solid #efefef;">
        <h3 class="text-dark">Registration <b style="color: #8b0000;">F</b>orm</h3>
        <div class="ml-auto col-md-1">
          <img src="<?= $image;?>" id="preimage" class="img-fluid" style="width: 100px; height: auto; border-radius:50%; margin-top: -65px;">
        </div>
      </div>
				<small class="text-primary mb-4">Please Ensure that the details are correct</small>
			
			<div class="alert alert-danger" id="errorm" style="display: none;">
			This mail address has already been registered
			</div>
			<div class="alert alert-danger" id="terms_error" style="display: none;">
			please evaluate our terms and conditions and check before submiting your deatils
			</div>
			<div class="alert alert-danger" id="error" style="display: none">
					Invaild Details
				</div>
			<div class="p-0 shadow-lg">
				<form action="" method="post" enctype="multipart/form-data">
				<div class="form-row">
			        <!-- Grid column -->
			        <div class="col-md-6">
			          <!-- Material input -->
			          <div class="md-form form-group">
			            <label for="name">Fullname</label>
			            <input type="text" name="name" class="form-control" placeholder="Enter your fullname" value="<?php echo $name;?>" required>
			          </div>
			        </div>
			        <!-- Grid column -->

			        <!-- Grid column -->
			        <div class="col-md-6">
			          <!-- Material input -->
			          <div class="md-form form-group">
			            <label for="email">Email</label>
			            <input type="email" name="email" class="form-control" placeholder="Example@email/gmail.com" value="<?php echo $email;?>" required>
			          </div>
			        </div>
			        <!-- Grid column -->
			    </div>
			    <!-- Grid row -->
			    <div class="form-row">
			        <!-- Grid column -->
			        <div class="col-md-6">
			          <!-- Material input -->
			          <div class="md-form form-group">
			            <label for="contact">Contact</label>
			            <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact" type="text" class="form-control" placeholder="Enter your mobile Number" value="<?php echo $contact;?>" minlength="11"
                        maxlength="11" required>
			          </div>
			        </div>
			        <!-- Grid column -->

			        <!-- Grid column -->
			        <div class="col-md-6">
			          <!-- Material input -->
			          <label for="password">Create Password</label>
			          <div class="md-form form-group input-group">
			          	<div class="input-group-prepend">
			          		<span class="input-group-text"><i class="fa fa-lock" style="color:#8b0000"></i></span>
			          	</div>
			            <input type="password" name="password" class="form-control" placeholder="**********" required>
			          </div>
			        </div>
			        <!-- Grid column -->
			    </div>
			    <!-- Grid row -->
			    <div class="form-row">
			        <!-- Grid column -->
			        <div class="col-md-6">
			          <!-- Material input -->
			          <div class="md-form form-group">
			            <label for="city">City</label>
			            <select class="form-control" name="city"  id="city">
              				<option value="none" disabled="disabled" selected="selected">-- Select City --</option>
              				<?php foreach ($cities as $city) : ?>
              				<option value="<?= $city ?>"> <?= $city ?></option>
              				<?php endforeach; ?>
          				</select>
			          </div>
			        </div>
			        <!-- Grid column -->

			        <!-- Grid column -->
			        <div class="col-md-6">
			          <!-- Material input -->
			          <div class="md-form form-group">
			            <label for="address">Address</label>
			            <input type="text" name="address" class="form-control" placeholder="Enter your home address" value="<?php echo $address;?>" required>
			          </div>
			        </div>
			        <!-- Grid column -->
			    </div>
			    <!-- Grid row -->
			    <div class="form-row">
			        <!-- Grid column -->
			        <div class="col-md-6">
			          <!-- Material input -->
			          <div class="md-form form-group">
			            <label for="experience">Experience</label>
			            <select type="text" name="experience" class="form-control"required>
			            	<option value="none" disabled="disabled" selected="selected">-- Years of Exprience --</option>
			            	<option value="1">1</option>
			            	<option value="2">2</option>
			            	<option value="3">3</option>
			            	<option value="4">4</option>
			            	<option value="5">5</option>
			            	<option value="6">6</option>
			            	<option value="7">7</option>
			            	<option value="8">8</option>
			            	<option value="9">9</option>
			            	<option value="10">10</option>
			            	<option value="More than 10">More Than 10</option>
			            </select>
			          </div>
			        </div>
			        <!-- Grid column -->

			        <!-- Grid column -->
			        <div class="col-md-6">
			          <!-- Material input -->
			          <div class="md-form form-group">
			            <label for="work">Work Type</label>
			            <select type="text" name="work_type" class="form-control" required>
			            	<option value="none" disabled="disabled" selected="selected">--Select Work Type--</option>
			            	<?php
			            	 $res=mysqli_query($conn,"select service_name from services");
                            while($row=mysqli_fetch_assoc($res)){
			            	?>
			            	<option value="<?=$row['service_name'];?>"><?=$row['service_name'];?></option>
			            	<?php }?>
			            	<option value="others">Others</option>
			            </select>
			          </div>
			        </div>
			    </div>
			    <!-- Grid row -->
			    <div class="form-row">
			        <!-- Grid column -->
			        <div class="form-group col-md-6">
			    		<label for="others">Others <b style="color: #8b0000">*</b> Please input Below</label>
			    		<input type="text" class="form-control" name="others" placeholder="Please Enter your work type here">
			    	</div>
			    	<div class="form-group col-md-6">
			    		<label for="others"> Upload Your Image</label>&nbsp;&nbsp;
			    		<input type="file" accept="image/*" class="form-control" name="image" required onchange="loadfile(event)">
			    	</div>
			    </div>
			    <!-- Grid row -->
			    <div class="form-row">
			        <!-- Grid column -->
			        <div class="col-md-12">
			          <!-- Material input -->
			          <div class="md-form form-group">
			            <label for="details">Tell us something about you</label>
			            <textarea type="text" name="details" class="form-control" placeholder="Enter details about here..." value="<?php echo $details;?>" rows="3" required></textarea>
			          </div>
			        </div>
			        <input type="hidden" name="status" class="form-control" value="Unverified" style="color:red;">
			        <!-- Grid column -->
			    </div>
			    <!-- Grid row -->
			    <div class="form-group">
			    	<button type="submit" name="register" class="btn btn-block mt-2 col-md-4"> Register</button>
			    	<br>
			    	<p><b style="color:#8b0000">*</b><b> Please verify and confirm the details entered, by checking the box below</b></p>

			    	<input type="checkbox" name="terms" style=""> I agree to Servi<span style="color:#8b0000">X</span><a href="" style="text-decoration: none">&nbsp;Terms and condition</a> 
			    	<p style="width:50%">I have checked all the details carefully. I understand that once submitted, these details cannot be cahnged and entering the wrong details may result in the application being rejected.</p>
			    	 <p class=" mt-3">Already a member?<a href="login.php" style="text-decoration: none;color:#8b0000;"> Sign in</a></p>
			    </div>
			</form>
			</div>
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
$msg="";
if (isset($_POST['register'])) {

	$name=$conn->real_escape_string($_POST['name']);
	$email=$conn->real_escape_string($_POST['email']);
	$contact=$conn->real_escape_string($_POST['contact']);
	$password=$conn->real_escape_string($_POST['password']);
	$city=$conn->real_escape_string($_POST['city']);
	$address=$conn->real_escape_string($_POST['address']);
	$experience=$conn->real_escape_string($_POST['experience']);
		

	$work_type=$conn->real_escape_string($_POST['work_type']);
	$others=$conn->real_escape_string($_POST['others']);

	$tm=md5(time());
	$fnm2=$_FILES['image']['name'];
    $dst2="admin/uploads/".$tm.$fnm2;
    $dst_db2="uploads/".$tm.$fnm2;
    move_uploaded_file($_FILES['image']['tmp_name'], $dst2);

  $details=$conn->real_escape_string($_POST['details']);
	$terms=$conn->real_escape_string($_POST['terms']);
  $date=date('d-m-Y');
	
	$status=$conn->real_escape_string($_POST['status']);
	$message = "$name would like to request an account.";


  if (empty($terms)) {
  	?>
  	<script type="text/javascript">
  		document.getElementById('terms_error').style.display="block";
  	</script>
  	<?php
  }else{
    $sql=mysqli_query($conn, "SELECT email FROM provider_request WHERE email='$email'");
    if (mysqli_num_rows($sql) > 0) {
    	?>
    	<script type="text/javascript">
    		document.getElementById('errorm').style.display="block";
    	</script>
    	<?php
    }else{
    	$hash=password_hash($password, PASSWORD_BCRYPT);

    	$res=mysqli_query($conn,"INSERT INTO provider_request (name,contact,email,password,city,address,experience,work_type,others,image,details,message, date,status) VALUES('$name','$contact','$email','$hash','$city','$address','$experience','$work_type','$others','$dst2','$details','$message','$date','$status')") or die(mysqli_error($conn));
	    if ($res) {
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
		      $mail->setFrom('servix@gmail.com');
		      // Recipient Email ID where you want to receive emails
		      $mail->addAddress($email);

		      $mail->isHTML(true);
		      $mail->Subject = 'Account Verification';
		      $mail->Body = "<h3 class='text-dark'>Thank you $name for choosing to work with us. click on the link below to verify your account <br><br> <a href='localhost/sx/verify.php' class='btn btn-primary'> Verify</a></h3>";

		      $mail->send();
		      ?>
	    		<script type="text/javascript">
	    			window.location="success.php";
	    		</script>
	    		<?php 
		    } catch (Exception $e) {
		      ?>
	    		<script type="text/javascript">
	    			document.getElementById('error').style.display='block';
	    		</script>
	    	<?php
		    }
	    	/*?>
	    	<script type="text/javascript">
	    		window.location="success.php";
	    	</script>
	    	<?php*/
	    }else{
	    	?>
	    	<script type="text/javascript">
	    		document.getElementById('error').style.display='block';
	    	</script>
	    	<?php
	    }
    }
  }    
}

?>

<?php include 'footer.php';?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>