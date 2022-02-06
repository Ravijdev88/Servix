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
		<div class="mb-5 col-md-4">
			<h4 class="text-dark">Registered <b style="color: #8b0000;">P</b>roviders</h4>
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
 	$query = "SELECT * FROM `providers` WHERE CONCAT(`id`, `name`,`name`, `image`,`contact`,`email`,`city`,`address`,`experience`,`id_pic`,`work_type`,`last_login`) LIKE '%".$valuetosearch."%'";
	$search_result = filterTable($query);
 }
 else{
	$query = "SELECT * FROM `providers`";
	$search_result = filterTable($query);
 } 
 function filterTable($query){
 	$conn = mysqli_connect('localhost','root','','sx');
	
	$filter_result = mysqli_query($conn, $query);
	return $filter_result;
 }
		?>
		<div class="table-responsive">
			<table class="table table-bordered" id="myTable">
				<thead>
					<tr class="header">
						<th>ID</th>
						<th>Name</th>
						<th>Image</th>
						<th>Contact</th>
						<th>Email</th>
						<th>City</th>
						<th>Address</th>
						<th>EXP</th>
						<th>ID Pic</th>
						<th>Work</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$count=1;
						while ($row=mysqli_fetch_array($search_result)) {
						$status='Offline';
						$class="bg-success";
						if($row['last_login']==$status){
							$class="bg-danger";
						}
					?>
					<tr><td><?php echo $count++;?></td>
						<td><?php echo $row['name'];?></td>
						<td><img src="../<?php echo $row['image'];?>" height="100" width="100"></td>
						<td><?php echo $row['contact'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['city'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['experience'];?></td>
						<td><img src="../<?php echo $row['id_pic'];?>"height="100" width="100"></td>
						<td><?php echo $row['work_type'];?></td>
						<td><button type="button" class="btn <?php echo $class?>"><?php echo $row['last_login'];?></button></td>
						<td><a href="delete_pro.php?id=<?php echo $row['id'];?>" class="btn bg-danger text-light">Delete</a></td>
					</tr>
				<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
/*function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}*/
</script>









<?php include 'footer.php';?>
