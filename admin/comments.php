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
		<h4 class="text-dark">Comments <b style="color: #8b0000;">b</b>y Viewers</h4>
		<hr class="bg-light">
		</div>
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Contact</th>
						<th>Email</th>
						<th>Location</th>
						<th>Comments <i class="fa fa-book" style="color:#8b0000"></i></th>
						<th>Date</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$count=1;
					$sql=mysqli_query($conn,"SELECT * FROM comments");
					if (mysqli_num_rows($sql) > 0) {
						while ($row=mysqli_fetch_assoc($sql)) {
					?>
					<tr><td><?php echo $count++;?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['contact'];?></td>
						<td><?php echo $row['email'];?></td>
						<td><?php echo $row['location'];?></td>
						<td><?php echo $row['note'];?></td>
						<td style="width: 130px;"><?php echo $row['date'];?></td>
						<td><a href="delete_com.php?id=<?php echo $row['id'];?>" class="btn text-light bg-danger" style="border-radius: 10px;">Delete <i class="fa fa-trash"></i></a>
						</td>
					</tr>
				<?php }}?>
				</tbody>
			</table>
		</div>
	</div>
</div>










<?php include 'footer.php';?>
