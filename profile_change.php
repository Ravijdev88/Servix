<?php
session_start();
include 'header.php';
include 'connection.php';
?>
<?php
$id = $_GET['status'];
#$msg ="Accepted";
if (isset($_REQUEST['status'])) {
	$accept = "Accepted";
	$date = date('d-m-Y');
	$smt = mysqli_query($conn,"UPDATE booked SET status ='$accept', date='$date' WHERE id ='$id'");
	if($smt){
		echo "Accepted";
		?>
		<script>
			window.location='profile.php';
		</script>
		<?php
	}
}
?>