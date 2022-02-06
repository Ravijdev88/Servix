<?php
session_start();
include '../connection.php';
if (!isset($_SESSION["admin"])) {
    ?>
    <script type="text/javascript">
        window.location="index.php"
    </script>
    <?php
}
$id = $_GET['id'];
$res=mysqli_query($conn,"delete from services where id='$id'");
?>
<script type="text/javascript">
	window.location='services.php';
</script>
<?php


?>