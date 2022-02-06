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
<div class="container py-5 my-2">
	<div class="row">
		<div class="mb-4">
			<h4 class="text-dark">Booked <b style="color: #8b0000;">S</b>ervices</h4>
			<hr class="bg-light">
		</div>
		<div class="col-md-4 ml-auto  mb-4 mt-5">
			<form action="" method="post" class="example row">
				<input type="text" id="myInput" name="valuetosearch"  class="form-control form-control-lg col-md-10" placeholder="Search for names..">
				<button type="submit" name="search" class="btn col-md-2"><i class="fa fa-search"></i></button>
			</form>
		</div>
<?php
if (isset($_POST['search'])) {
 	$valuetosearch = $_POST['valuetosearch'];
 	$query = "SELECT * FROM `booked` WHERE CONCAT(`id`, `name`,`contact`,`email`,`address`,`zip_code`,`providers_id`,`date`) LIKE '%".$valuetosearch."%'";
	$search_result = filterTable($query);
 }
 else{
	$query = "SELECT * FROM `booked`";
	$search_result = filterTable($query);
 } 
 function filterTable($query){
 	$conn = mysqli_connect('localhost','root','','sx');
	
	$filter_result = mysqli_query($conn, $query);
	return $filter_result;
 }
?>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Contact</th>
						<th>Email</th>
						<th>Address</th>
						<th>Zip Code</th>
						<th>Provider_ID</th>
						<th>Date</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$count=1;
						while ($row=mysqli_fetch_array($search_result)) {
							$status='Accepted';
							$class="btn bg-danger text-light";
							if($row['status']==$status){
								$class="btn bg-success text-light";
							}
					?>
					<tr><td><?php echo $count++;?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['contact'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['zip_code'];?></td>
						<td><?php echo $row['providers_id'];?></td>
						<td><?php echo $row['date'];?></td>
						<td><a href="#" class="<?php echo $class;?>" style="border-radius: 10px;"><?php echo $row['status'];?></a></td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>










<?php include 'footer.php';?>
