<?php
session_start();
include 'connection.php';
include 'header.php';
if (!isset($_SESSION["user"])) {
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}else{
	 $email = $_SESSION["user"];
}

?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand ml-3" href="Logout.php" style="color:#8b0000; font-size:25px">Servi<span style="color:#000;">X</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-5">
      <li class="nav-item">
        <a class="nav-link" href="profile.php">View Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?booked=services">View Booked Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout <i class="fa fa-sign-out" style="color:#8b0000"></i></a>
      </li>
    </ul>
  </div>
</nav>
<!-----/NavEnd------>
<?php
if (isset($_REQUEST['booked'])) {
	$res=mysqli_query($conn,"SELECT * FROM providers WHERE email='$email'");
	if (mysqli_num_rows($res) > 0) {
	?>
	<div class="container py-4">
		<div class="row">
			<div class="col-md-10">
				<div class="">
					<h4 class="text-dark"><? ?> <span style="color: #8b0000;">B</span>ooked Services</h4>
					<p class="text-dark mt-4">These are orders Within Your Location <small class="text-primary">Please Do well to attend to The these Orders in time thank You</small></p>
				</div>
			</div>
			<?php 
			while($row=mysqli_fetch_assoc($res)){
			?>
			<div class="col-md-2">
				<div>
					<img src="<?php echo $row['image'];?>" class="img-fluid" style="width: 70px; border-radius:70%; margin-top: -5px;">
				</div>
			</div>
		</div>
		<hr class="bg-light">
	</div>
<div class="container mb-5">
	<div class="row">
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>S/N</th>
						<th>Name</th>
						<th>Contact</th>
						<th>Email</th>
						<th>Address</th>
						<th>Zip Code</th>
						<th>Date</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$count=1;
					$sql=mysqli_query($conn,"SELECT * FROM booked WHERE providers_id='{$row['id']}'");
					if (mysqli_num_rows($sql) > 0) {
						while ($row1=mysqli_fetch_assoc($sql)) {
							$status='Accepted';
							$class="btn bg-danger text-light";
							if($row1['status']==$status){
								$class="btn bg-success text-light";
							}
					?>
					<tr><td><?php echo $count++;?></td>
						<td><?php echo $row1['name'];?></td>
						<td><?php echo $row1['contact'];?></td>
						<td><?php echo $row1['email'];?></td>
						<td><?php echo $row1['address'];?></td>
						<td><?php echo $row1['zip_code'];?></td>
						<td><?php echo $row1['date'];?></td>
						<td><a href="profile_change.php?status=<?php echo $row1['id'];?>" class="<?php echo $class;?>" style="border-radius:10px; background-color: #8b0000; text-decoration: none"><?php echo $row1['status'];?></a>
					</tr>
				<?php }}}}?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php
}else{
	$res1=mysqli_query($conn,"SELECT * FROM providers WHERE email='$email'");
	if (mysqli_num_rows($res1) > 0) {
?>
	<div class="container py-5">
			<?php
			while($row2=mysqli_fetch_assoc($res1)){
			?>
				<div class="row">
					<div class="col-md-7">
						<h4 class="text-dark col-md-6"><?=$row2['name'];?> <b style="color: #8b0000;">P</b>rofile</h4>
					</div>
					<div class="col-md-5">
						<span class="ml-5" style="float: right;">Status: <a href="#" class="btn btn-success bg-transparent text-success" style="border-radius: 5%;">
							<?php 
								echo $row2['status'];
								
								?>
						</a></span>
					</div>
				</div>
				<hr class="bg-light">
		<div class="row">
			
			<div class="col-md-6 col-sm-12 col-lg-4">
				<div>
					<img src="<?php echo $row2['image'];?>" class="img-fluid rounded-top" style="height:50vh; width: 90%">
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="mb-5">
					<p><b>Name :</b> <?php echo $row2['name'];?></p>
					<p><b>Contact :</b> <?php echo $row2['contact'];?></p>
					<p><b>Email :</b> <?php echo $row2['email'];?></p>
					<p><b>City :</b> <?php echo $row2['city'];?></p>
					<p><b>Addres :</b> <?php echo $row2['address'];?></p>
					<p><b>Years of Experience :</b> <?php echo $row2['experience'];?></p>
					<p><b>Work / Profession :</b> <?php echo $row2['work_type'];?></p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<p><b><?= $row2['id_name'];?></b></p>
				<img src="<?php echo $row2['id_pic'];?>" alt="downloaded" class="rounded-top" height="200" width="400">
				<a href="edit_reg.php?id=<?php echo $row2['id'];?>" class="btn text-light mt-4 col-lg-6 col-md-12 col-sm-12 btn-block"><i class="fa fa-edit text-light"></i> Edit Profile</a>
			</div>
		</div>
	</div>
<?php }}}?>

	
</script>



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
