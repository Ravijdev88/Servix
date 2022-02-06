<?php
include 'header.php';
include 'connection.php';
$msg="";
?>
<style type="text/css">
  .btn{
        background-color: #8B0000;
        color: #fff;
        outline: none;
    }
    .btn:hover{
        color:#ffffff;
        background-color: #8B0000;
    }
    a{
    	color: #555;
    	text-decoration: none;
  	}
    a:hover{
      color: #8B0000 !important;
    }
    .text-secondary:focus{
      color: #8B0000 !important;
    }
    h5{
    	font-size: 17px;
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
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>
<!-----/NavEnd------>
<?php
$id=$_GET['id']; 
$res=mysqli_query($conn,"SELECT * FROM providers where id='$id'");
?>
<section class="py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 col-sm-12 mb-4" style="">
				<div class="card" style="box-shadow: 2px 2px 2px rgba(0,0,0,0.2);">
					<?php 
					while($row=mysqli_fetch_array($res)){
						$status='Offline';
						$class="text-success";
						if($row['last_login']==$status){
							$class="text-danger";
						}
					?>
					<img src="<?=$row['image'];?>" class="img-fluid rounded-top" style=" height: 40vh;">
					<h4 class="card-text text-center card-header"> <?=$row['name'];?></h4>
					<div class="card-body" align="justify">
						<h5 class="card-text"><b>Profession:</b> <?=$row['work_type'];?></h5>
						<h5 class="card-text"><b>City:</b> <?=$row['city'];?></h5>
						<h5 class="card-text"><b>Address:</b> <?=$row['address'];?></h5>
						<h5 class="card-text"><b>Status:</b> <span class="<?php echo $class?>"><?=$row['last_login'];?></span></h5>
						<a href="https://wa.me/<?=$row['contact'];?>" target="_blank" class="btn btn-block text-light mt-2 col-md-12 col-lg-12 col-sm-12" style="font-size: 17px;"><i class="fab fa-whatsapp "style="font-size: 20px;"></i> Chat with <?=$row['name'];?></a>
					</div>
				</div>
			</div>
		
			<div class="col-md-6 col-lg-8 col-sm-12" style="">
				<div class="mb-3">
					<h4 class="text-dark text-center"><b style="color:#8B0000">B</b>ook Appointment with <?=$row['name']; ?></h4>
					<hr class="bg-light">
				</div>
				<div class="p-3 shadow-lg" style="">
					<form action="" method="post" class="shadow">
						<div class="alert alert-success" id="success" style="display: none;">
							<strong>Successfull</strong> We will attend to your order shortly Thank you chosing Servi<span style="color: #8b0000;">X</span>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="name">Fullname</label>
								<input type="text" name="name" class="form-control" placeholder="Enter your full name" required/>
							</div>
							<div class="form-group col-md-6">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Example@gmail.com" required/>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="contact">Contact</label>
								<input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
	                        name="contact" type="text" class="form-control" placeholder="Contact" minlength="11"
	                        maxlength="11" required/>
							</div>
							<div class="form-group col-md-6">
								<label for="address">Home Address</label>
								<input type="text" name="address" class="form-control" placeholder="Enter your home address" required/>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="contact">Zip Code</label>
								<input type="text" name="zip_code" class="form-control" placeholder="11206-1117" required/>
							</div>
							<div class="form-group col-md-6">
								<label for="date">Date</label>
								<input type="date" name="date" class="form-control" placeholder="date" required/>
								<p><?php echo $msg;?></p>
							</div>

						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="contact">Days</label>
								<select type="text" name="days" class="form-control" required/>
									<option selected="selected" disabled="disabled">----Select Days------</option>
									<option value="A day">A day</option>
					            	<option value="2">2</option>
					            	<option value="3">3</option>
					            	<option value="4">4</option>
					            	<option value="5">5</option>
					            	<option value="6">6</option>
					            	<option value="7">7</option>
					            	<option value="8">8</option>
					            	<option value="9">9</option>
					            	<option value="10">10</option>
					            	<option value="Month">A Month</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<label for="date">Hours Per Day</label>
								<input type="time" name="hours" class="form-control" placeholder="time" required/>
							</div>
						</div>
						<input type="hidden" name="providers_id" class="form-control" value="<?=$row['id']?>">
						<div class="form-group mt-3">
							<input type="submit" name="book" class="btn btn-md" value="Submit Appointment">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php }?>
<?php 
$id=$_GET['id'];
if (isset($_POST['book'])) {
	$name=$conn->real_escape_string($_POST['name']);
	$email=$conn->real_escape_string($_POST['email']);
	$contact=$conn->real_escape_string($_POST['contact']);
	$address=$conn->real_escape_string($_POST['address']);
	$zip_code=$conn->real_escape_string($_POST['zip_code']);
	$date=$conn->real_escape_string($_POST['date']);
	$providers_id=$conn->real_escape_string($_POST['providers_id']);
	$status ="Pending";

	$sql=mysqli_query($conn,"INSERT INTO booked(providers_id,name,contact,email,address,zip_code,date,status) VALUES('$providers_id','$name','$contact','$email','$address','$zip_code','$date','$status')") or die(mysqli_error($conn));
	if ($sql) {
		?>
		<script type="text/javascript">
			document.getElementById('success').style.display='block';
		</script>
		<?php
	}	
}

?>
<?php include "footer.php"?>