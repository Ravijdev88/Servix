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
$msg="";
?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Registration Form</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-10 ml-5">
                        <div class="card">
                            <div class="card-body">
                               <form action="" method="post" enctype="multipart/form-data">
                                <?php echo $msg;?>
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>FirstName</label>
                                    <input type="text" name="firstname" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>LastName</label>
                                    <input type="text" name="lastname" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                                <div class="form-group col-lg-12">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Contact</label>
                                    <input type="text" name="contact_no" class="form-control" required>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Upload Image</label>
                                    <input type="file" accept="image/*" name="img" class="form-control"style="padding-bottom: 38px;">
                                </div>
                              </div>
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn loginbtn">Register</button>
                            </div>
                            <div class="alert alert-danger" id="failure" style="display: none; margin-top: 10px;">
                                <strong>Already Exists</strong>This username Already Exits
                            </div>
                            <div class="alert alert-success" id="success" style="display: none; margin-top:10px; ">
                                <strong>Registered!</strong>Successful
                            </div>
                        </form>
                            </div>
                            <!--.card -->
                        </div>
                            <!--/col -->
                    </div>
                </div><!-- .animated -->
            </div><!-- .content -->
        </div><!-- /#right-panel -->
        <!-- Right Panel -->
<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $email = $_POST['email'];
    $contact = $_POST['contact_no'];

    $tm=md5(time());
    $fnm1=$_FILES['img']['name'];
    $dst1="./uploads/".$tm.$fnm1;
    $dst_db1="uploads/".$tm.$fnm1;
    move_uploaded_file($_FILES['img']['tmp_name'], $dst1);

    $count=0;
    $sql_select ="SELECT * FROM registration WHERE username='$username'" or die(mysqli_error($conn));
    $result = mysqli_query($conn,$sql_select);
    $count = mysqli_num_rows($result);
    if($count > 0){
        ?>
        <script type="text/javascript">
            document.getElementById('failure').style.display="block";
            document.getElementById('success').style.display="none";
        </script>
        <?php
    }
    else{
        mysqli_query($conn,"INSERT INTO registration(firstname,lastname,username,password,email,contact_no,img) VALUES('$firstname','$lastname','$username','$password','$email','$contact','$dst_db1')");
        ?>
        <script type="text/javascript">
            document.getElementById('success').style.display="block";
            document.getElementById('failure').style.display="none";
        </script>
        <?php
    }
}
?>
<?php include 'footer.php';?>