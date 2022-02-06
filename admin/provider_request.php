<?php
session_start();
include"header.php";
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
        <div class="container">
            <?php
                $query = mysqli_query($conn, "select * from `provider_request`");
               	if (mysqli_num_rows($query) > 0) {
					while($row=mysqli_fetch_assoc($query)){
                    ?>
                    <h1 class="jumbotron-heading"><?php echo $row['email'] ?></h1>
                     <p class="lead text-muted"><?php echo $row['message'] ?></p>
                     <p>
                        <a href="details.php?id=<?php echo $row['id'] ?>"class="btn  my-2 text-light" style="outline: none;">View Details</a>
                        <a href="accept.php?id=<?php echo $row['id'] ?>" class="btn  my-2 text-light" style="outline: none;">Accept</a>
                        <a href="reject.php?id=<?php echo $row['id'] ?>" class="btn  my-2 text-light" style="outline: none;">Reject</a>
                      </p>
                    <small><i><?php echo $row['date'] ?></i></small>
            	<?php }}
            ?>
        </div>
      </section>
<?php include "footer.php"; ?>
