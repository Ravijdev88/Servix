<?php
session_start();
include 'header.php';
include '../connection.php';
if (!isset($_SESSION["admin"])) {
    ?>
    <script type="text/javascript">
        window.location="index.php"
    </script>
    <?php
}

$id=$_GET['id'];
$service_name='';
$service_provider='';
$get=mysqli_query($conn,"select * from services where id='$id'");
while ($row=mysqli_fetch_array($get)) {
    $service_name = $row['service_name'];
    $image=$row['image'];
}
?>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-dark">Edit Service</h2>
            <hr class="bg-light">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Service Name</label>
                        <input type="text" name="name" placeholder="Enter Service Name" class="form-control" value="<?=$service_name;?>" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Old Image</label>
                         <img src="<?php echo $image;?>">
                        <input type="file" name="image" accept="image/*" class="form-control"  required/>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="submit" name="submit" class="btn text-light btn-lg"><i class="fa fa-send"></i> Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
if (isset($_POST['submit'])) {
    $service_name = $_POST['name'];

    $tm=md5(time());
    $fnm1=$_FILES['image']['name'];
    $dst1="./uploads/".$tm.$fnm1;
    $dst_db1="uploads/".$tm.$fnm1;
    move_uploaded_file($_FILES['image']['tmp_name'], $dst1);

    $date = date("Y-m-d");

    mysqli_query($conn,"update services set service_name='$service_name',image='$dst_db1' where id='$id'") or die(mysqli_error($conn));
    ?>
    <script type="text/javascript">
        alert("Service Updated Successfully");
        window.location.href='services.php';
    </script>
    <?php
}
?>
<?php include 'footer.php';?>