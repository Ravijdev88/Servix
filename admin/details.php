<?php
session_start();
include 'header.php';
include '../connection.php';
if (!isset($_SESSION["admin"])) {
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
?>
<section class="jumbotron text-center">
	<?php if(isset($_REQUEST['id'])){
		$id=$_GET['id'];
	    $query1 = mysqli_query($conn, "select * from `provider_request` where id='$id'");
	   	if (mysqli_num_rows($query1) > 0) {
			while($row1=mysqli_fetch_assoc($query1)){
				?>
				<div class="container mb-5">
          <div class="row">
            <div class="col-md-6">
              <h5 align="left">Name: <?=$row1['name'];?></h5>
              <h5 class="" align="left">City: <?=$row1['city']?></h5>
              <h5 align="left">Service Type: <?=$row1['work_type']?></h5>
            </div>
             <div class="col-md-6">
              <img src="..//<?php echo $row1['image'];?>" class="img-fluid" width="150" height="100" alt="image" style="border-radius: 50%;margin-left: 70%;margin-top: -7%">
            </div>
          </div>
        </div>
        <div class="container">
					<div class="row">
						<div class="col-md-4">
							<img src="..//<?php echo $row1['capture'];?>" class="img-fluid" width="300" height="200" alt="captured">
              <p>Captured</p>
						</div>
						<div class="col-md-4">
							<img src="..//<?=$row1['nepabill'];?>" class="img-fluid" width="400" height="200" alt="nepa bill">
              <p>NepaBill</p>
						</div>
						<div class="col-md-4">
							<img src="..//<?=$row1['national_id'];?>" class="img-fluid" width="400" height="200" alt="national id">
              <p>National ID</p>
						</div>
					</div>
          <div class="row py-4">
            <div class="col-md-12">
              <div class="text-center">
                <a href="accept.php?id=<?php echo $row1['id'] ?>" class="btn text-light my-2">Accept</a>
                <a href="reject.php?id=<?php echo $row1['id'] ?>" class="btn text-light my-2">Reject</a><br><br>
                <small class="text-center"><i><?php echo $row1['date'] ?></i></small>
              </div>
            </div>
          </div>
				</div>
			<?php
			}
		}
	}
	?>
</section>

<?php include "footer.php"; ?>