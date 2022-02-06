<?php
session_start();
include 'connection.php';

if (!isset($_SESSION["user"])) {
    ?>
    <script type="text/javascript">
        window.location="verify.php";
    </script>
    <?php
}else{
	 $email = $_SESSION["user"];
}
?>
<?php
	if (isset($_POST['submit'])) {
		$img = $_POST['image'];
	    $folderPath = "admin/uploads/";
	  
	    $image_parts = explode(";base64,", $img);
	    $image_type_aux = explode("image/", $image_parts[0]);
	    $image_type = $image_type_aux[1];
	  
	    $image_base64 = base64_decode($image_parts[1]);
	    $fileName = uniqid() . '.png';
	  
	    $file = $folderPath . $fileName;
	    file_put_contents($file, $image_base64);
	  $sql = mysqli_query($conn, "UPDATE  provider_request SET capture='$file' WHERE email='$email'") or die(mysqli_error($conn));
	    #print_r($fileName);
	}
?>
<style>
	#results { padding:5px; }

	.btn{
		background-color: #8b0000;
	}
	.images{
		display: flex;
		margin-left: 50px;
	}
</style>
<script type="text/javascript">
	function loadfile(event){
		var output = document.getElementById('preimage');

		output.src=URL.createObjectURL(event.target.files[0]);
	};
</script>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="Author" content="Johnpaul Onuora">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Servix</title>
  <!--link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway"-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <!---font awesome---->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
	<!---google fonts---->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link rel="stylesheet" type="text/css" href="sweetalert/sweetalert.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
</head>
<body>
	<div class="container-fluid">
  <div class="row" style="background:#8b0000;padding: 7px">
    <div class="mr-auto ml-4 text-light">
      <span><small class="ml-2">Home Services</small></span>
    </div>
    <div class="text-light ml-auto">
      <span>
        <span>
        <small><a href="tel:+2348144307244" class="text-light" style="font-size:13px"><i class="fa fa-phone text-light"></i>&nbsp; +(234) 8144307244</small>&nbsp;&nbsp;
        <small class="mr-2"><a href="mailto:mastervaljp@gmail.com" class="text-light"style="font-size:13px"><i class="fab fa-envelope text-light"></i>&nbsp;mastervaljp@gmail.com</small>
          <small class="mr-2"><a href="" class=""style="font-size:12px"><i class="fab fa-facebook-f text-light"></i></a></small>
        <small class="mr-2"><a href="#" class="text-light"><i class="fab fa-twitter"></i></a></small>
        <small class="mr-2"><a href="#"class="text-light"><i class="fab fa-google-plus-g"></i></a></small>
        <small class="mr-2"><a href="#" class="text-light"><i class="fab fa-instagram"></i></a></small>
        <small class="mr-2"><a href="https://wa.me/8144307244" target="_blank" class="text-light"><i class="fab fa-whatsapp"></i></a></small>
        <small class="mr-2"><a href="#" class="text-light"><i class="fab fa-linkedin-in"></i></a></small>
      </span>
    </div>
  </div>
</div>
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
        <a class="nav-link" href="logout.php">Logout <i class="fa fa-sign-out" style="color:#8b0000"></i></a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid py-5">
<?php
$res=mysqli_query($conn,"SELECT * FROM provider_request WHERE email='$email'");
	if (mysqli_num_rows($res) > 0) {
		while($row=mysqli_fetch_assoc($res)){
?>
	<div class="row">
		<div class="col-md-6">
			<h5 class="text-dark">Please capture and fill the form below to verify your Profile</h5>
			<p class="text-primary">Please Ensure that every detail is correct</p>
		</div>
		<div class="col-md-6">
			<img src="<?=$row['image']?>" class="img-fluid" style="float:right; margin-top: -30px; width: 100px; border-radius:50px">
		</div>
	</div>
	<hr class="bg-light">	
<?php }}?>
</div>
<div class="container-fluid py-5" style="background-color:#8b0000; height: 90vh">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="row p-3">
			<div class="col-lg-5 col-md-12 ml-2 mb-2" style="border: 8px solid #fff; margin-right: 50px">
				<div id="my_camera" class="ml-2 mt-2"></div>
				<input type=button value="Take Selfie" class="mb-2" onClick="take_snapshot()" style="color:#8b0000"><br>
				<input type="hidden" name="image" class="image-tag">
			</div>
			<div class="col-lg-5 col-md-12 bg-light">
				<div id="results" class="text-primary  ml-2" style="width:100%; padding-top: 34px"> Your captured image will appear here...</div>
			</div>
			<div class="mt-auto ml-2">
		        <button name="submit" class="btn bg-light" style="color:#8b0000">Submit capture</button>
			</div>
		</div>
	</form>
</div>
<?php
$res1=mysqli_query($conn,"SELECT * FROM provider_request WHERE email='$email'");
	if (mysqli_num_rows($res1) > 0) {
		while($row1=mysqli_fetch_assoc($res1)){
			$capture=$row1['capture'];
		}
	}
?>
<div class="container py-5 mt-5">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-row">
			<div class="form-group col-md-12">
			<img src="<?php echo $capture;?>" class="img-fluid" width="200" height="200">
		</div>
		<div class="form-group col-md-6">
			<label for="Nepa Bill">Upload Nepabill</label>
			<input type="file" accept="image/*" name="nepabill" class="form-control" autofocus required onchange="loadfile(event)"><br>
			<label for="Nepa Bill">Upload Your National Id</label>
			<input type="file" accept="image/*" name="national_id" class="form-control" autofocus required  onchange="" id="imgInp">
			<button type="submit" name="submit1" id="submit1" class="btn text-light mt-4">
			Upload Details
			</button>
		</div>
			
		<div class="col-md-2 images">
			<img id="preimage" class="mr-4" alt="your nepabill" style="width: 295px;">
			<img id="blah" src="#" alt="your national id" class="" style="width: 295px"/>
		</div>
	</form>
</div>
<script type="text/javascript">
	imgInp.onchange = evt => {
		const [file] = imgInp.files
		if (file) {
			blah.src = URL.createObjectURL(file)
		}
	}
</script>
<?php
if (isset($_POST['submit1'])) {
	$tm=md5(time());

	$fnm1=$_FILES['nepabill']['name'];
    $dst1="admin/uploads/".$tm.$fnm1;
    $dst_db1="uploads/".$tm.$fnm1;
    move_uploaded_file($_FILES['nepabill']['tmp_name'], $dst1);

	$fnm2=$_FILES['national_id']['name'];
    $dst2="admin/uploads/".$tm.$fnm2;
    $dst_db2="uploads/".$tm.$fnm2;
    move_uploaded_file($_FILES['national_id']['tmp_name'], $dst2);

    $query=mysqli_query($conn, "UPDATE provider_request SET nepabill='$dst1', national_id ='$dst2' WHERE email ='$email'") or die(mysqli_error($conn));
    if ($query) {
    	$_SESSION["user"]=$email;
    	?>
    	<script type="text/javascript">
    		//alert('Successfull! Your account will be ready within 24hours. Thank you for choosing Servix');
    		window.location="success_v.php";
    	</script>
    	<?php
    }
}

?>
<!-- Configure a few settings and attach camera -->
<script language="JavaScript">
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
  
    Webcam.attach( '#my_camera' );
  
    function take_snapshot() {
        Webcam.snap( function(data_uri) {
            $(".image-tag").val(data_uri);
            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
        } );
    }
</script>

<script src="sweetalert/sweetalert.min.js"></script>
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


