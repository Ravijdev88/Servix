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
<?php 
if (isset($_REQUEST['action'])) {
?>  
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-dark">Add New Service</h2>
            <hr class="bg-light">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Service Name</label>
                        <input type="text" name="name" placeholder="Enter Service Name" class="form-control" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Service Image</label>
                        <input type="file" name="image" accept="image/*" class="form-control"  required/>
                    </div>
                    <div class="form-group col-md-6">
                        <button type="submit" name="submit" class="btn text-light btn-lg"><i class="fa fa-send"></i> Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php 
}else{
?>                         
<div class="container py-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Service Category</strong>
                    <a href="?action=add" class="btn text-light btn-sm px-2" style="margin-left: 76%"><i class="fa fa-plus"></i>&nbsp;Add New</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col"class="text-center">ID</th>
                                <th scope="col"class="text-center font-weight-bold">Services</th>
                                <th scope="col"class="text-center">Image</th>
                                <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count=1;
                            $res=mysqli_query($conn,"select * from services");
                            while($row=mysqli_fetch_object($res)){
                                ?>
                                <tr>
                                    <td scope="row"><?=$count++;?></td>
                                    <td><?=$row->service_name;?></td>
                                    <td class="text-center"><img src="<?=$row->image;?>" height="50" width="70"></td>
                                    <td class="text-center">
                                    <a href="edit_service.php?id=<?=$row->id;?>" class="btn  text-light bg-primary"><i class="fa fa-edit"></i> Edit</a>
                                    <a href="delete_service.php?id=<?=$row->id;?>" class="btn text-light bg-danger"><i class="fa fa-trash"> Delete</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
}
?>
<?php
if (isset($_POST['submit'])) {
    $service_name = $_POST['name'];

    $tm=md5(time());
    $fnm1=$_FILES['image']['name'];
    $dst1="./uploads/".$tm.$fnm1;
    $dst_db1="uploads/".$tm.$fnm1;
    move_uploaded_file($_FILES['image']['tmp_name'], $dst1);

    mysqli_query($conn,"insert into services(service_name,image) values('$service_name','$dst_db1')") or die(mysqli_error($conn));
    ?>
    <script type="text/javascript">
        alert("Service added Successfully");
        window.location.href='services.php';
    </script>
    <?php
}
?>
<?php include 'footer.php';?>