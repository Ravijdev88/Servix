<?php
session_start();
include 'connection.php';
$last_login ="";
if (isset($_SESSION["user"])) {
	$email = $_SESSION["user"];
}
$last_login = "Offline";
$res = mysqli_query($conn,"UPDATE providers SET last_login ='$last_login' WHERE email ='$email' ");
if ($res) {
	session_destroy();
	?>
	<script type="text/javascript">
		window.location="login.php";
	</script>
	<?php 
}

?>