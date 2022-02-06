<?php
session_start();
include 'connection.php';
include 'header.php';
if (!isset($_SESSION["user"])) {
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}else{
	 $email = $_SESSION["user"];
   $id=$_GET['id'];
  $name="";
  $email="";
  $contact="";
  $password="";
  $old_city="";
  $address="";
  $experience="";
  $id_proof="";
  $work_type="";
  $res=mysqli_query($conn,"SELECT * FROM providers WHERE id='$id'");
  while ($row=mysqli_fetch_assoc($res)) {
    $name=$row['name'];
    $email=$row['email'];
    $contact=$row['contact'];
    $password=$row['password'];
    $old_city=$row['city'];
    $address=$row['address'];
    $experience=$row['experience'];
    $id_proof=$row['id_proof'];
    $id_pic=$row['id_pic'];
    $work_type=$row['work_type'];
    $image=$row['image'];
    $cities = ["Lagos", "Abia","Enugu","Port-harcourt"];
  }
}
?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand ml-3" href="#Home" style="color:#8b0000; font-size:25px">Servi<span style="color:#000;">X</span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="profile.php">View Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?booked=services">View Booked Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout <i class="fa fa-sign-out" style="color:#8b0000"></i></a>
      </li>
    </ul>
  </div>
</nav>
<!-----/NavEnd------>
<section class="py-5">
  <div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="mb-4">
        <h4 class="text-dark"><?= $name;?> <b style="color: #8b0000;">P</b>rofile Details</h4>
        <div class="ml-auto col-md-1">
          <img src="<?= $image;?>" class="img-fluid" style="width: 70px; border-radius:70%; margin-top: -75px;">
        </div>
        <hr class="bg-light">
      </div>
      <div class="p-3 shadow-lg">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="alert alert-danger" id="error" style="display: none">
          Invaild Details
        </div>
        <div class="form-row">
              <!-- Grid column -->
              <div class="col-md-6">
                <!-- Material input -->
                <div class="md-form form-group">
                  <label for="name">Fullname</label>
                  <input type="text" name="name" class="form-control" value="<?= $name;?>">
                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6">
                <!-- Material input -->
                <div class="md-form form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" value="<?= $email;?>">
                </div>
              </div>
              <!-- Grid column -->
          </div>
          <!-- Grid row -->
          <div class="form-row">
              <!-- Grid column -->
              <div class="col-md-12">
                <!-- Material input -->
                <div class="md-form form-group">
                  <label for="contact">Contact</label>
                  <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                        name="contact" type="text" class="form-control" value="<?= $contact;?>" minlength="11"
                        maxlength="11">
                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column >
              <div class="col-md-6">
               
                <label for="password">Change Password</label>
                <div class="md-form form-group input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock" style="color:#8b0000"></i></span>
                  </div>
                  <input type="password" name="password" class="form-control" value="<?= $password;?>">
                </div>
              </div>
              <-- Grid column -->
          </div>
          <!-- Grid row -->
          <div class="form-row">
              <!-- Grid column -->
              <div class="col-md-6">
                <!-- Material input -->
                <div class="md-form form-group">
                  <label for="city">City</label>
                  <select class="form-control" name="city"  id="city">
                      <option value="<?= $old_city;?>" selected="selected"><?= $old_city;?></option>
                      <?php foreach ($cities as $city) : ?>
                      <option value="<?= $city ?>"> <?= $city ?></option>
                      <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6">
                <!-- Material input -->
                <div class="md-form form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" class="form-control" value="<?= $address;?>" >
                </div>
              </div>
              <!-- Grid column -->
          </div>
          <!-- Grid row -->
          <div class="form-row">
              <!-- Grid column -->
              <div class="col-md-6">
                <!-- Material input -->
                <div class="md-form form-group">
                  <label for="experience">Update Your Experience</label>
                  <select type="text" name="experience" class="form-control">
                    <option value="<?= $experience;?>" selected="selected"><?= $experience;?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                  </select>
                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6">
                <!-- Material input -->
                <div class="md-form form-group">
                  <label for="id_proof">Identification(ID) Proof</label>
                  <select type="text" name="id_proof" class="form-control">
                    <option value="<?= $id_proof;?>"selected="selected"><?= $id_proof;?></option>
                    <option value="personal Id">Personal work id</option>
                    <option value="Driving License">Driving License</option>
                    <option value="National id">National ID</option>
                  </select>
                </div>
              </div>
              <!-- Grid column -->
          </div>
          <!-- Grid row -->
          <div class="form-row">
              <!-- Grid column -->
              <div class="col-md-6">
                <!-- Material input -->
                <div class="md-form form-group">
                  <label for="work">Change Work Type</label>
                  <select type="text" name="work_type" class="form-control">
                     <option value="<?= $work_type;?>" selected="selected"><?= $work_type;?></option>
                    <?php
                     $res=mysqli_query($conn,"select service_name from services");
                            while($row=mysqli_fetch_assoc($res)){
                    ?>
                    <option value="<?=$row['service_name'];?>"><?=$row['service_name'];?></option>
                    <?php }?>
                    <option value="others">Others</option>
                  </select>
                </div>
              </div>
                <div class="col-md-6">
                 <div class="md-form form-group">
                    <label for="others">Others <b style="color: #8b0000">*</b> Please Specify Below</label>
                    <input type="text" class="form-control" name="others" placeholder="Please Enter your work type here">
                  </div>
              </div>
              <!-- Grid column -->
          </div>
          <!-- Grid row -->
          <div class="form-row">
                <!-- Material input -->
              <div class="form-group col-md-6">
                <label for="id_pic">Change Selected ID Proof</label><br>
                <img src="<?= $id_pic;?>" class="img-fluid" height="100" width="155">
                <input type="file" accept="image/*" name="id_pic" class="form-control">
              </div>
            <div class="form-group col-md-6">
              <label for="others">Change Profile Image</label><br>
               <img src="<?= $image;?>" class="img-fluid" height="40" width="100">
              <input type="file" accept="image/*" class="form-control" name="image">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" name="register" class="btn btn-md col-md-3 mt-2"> Update Profile</button>
          </div>
      </form>
      </div>
    </div>
  </div>
</div>
</section>
<?php
if (isset($_POST['register'])) {

  $name=$conn->real_escape_string($_POST['name']);
  $email=$conn->real_escape_string($_POST['email']);
  $contact=$conn->real_escape_string($_POST['contact']);
  $city=$conn->real_escape_string($_POST['city']);
  $address=$conn->real_escape_string($_POST['address']);
  $experience=$conn->real_escape_string($_POST['experience']);
  $id_proof=$conn->real_escape_string($_POST['id_proof']);
  
  $tm=md5(time());

    $fnm1=$_FILES['id_pic']['name'];
    $dst1="./uploads/".$tm.$fnm1;
    $dst_db1="uploads/".$tm.$fnm1;
    move_uploaded_file($_FILES['id_pic']['tmp_name'], $dst1);

    $work_type=$conn->real_escape_string($_POST['work_type']);
    $others=$conn->real_escape_string($_POST['others']);

    $fnm2=$_FILES['image']['name'];
    $dst2="./uploads/".$tm.$fnm2;
    $dst_db2="uploads/".$tm.$fnm2;
    move_uploaded_file($_FILES['image']['tmp_name'], $dst2);

    $res=mysqli_query($conn,"UPDATE providers SET name='$name',contact='$contact',email='$email', city='$city', address='$address',experience='$experience',id_proof='$id_proof',id_pic='$dst1',work_type='$work_type',others='$others',image='$dst2' WHERE id='$id'") or die(mysqli_error($conn));
    if ($res) {
      ?>
      <script type="text/javascript">
        alert('Updated Successfully!! Your profile is Updated Successfully');
        window.location.href="profile.php";
      </script>
      <?php
    }else{
      ?>
      <script type="text/javascript">
        document.getElementById('error').style.display='block';
      </script>
      <?php
    }
}
?>
<?php include 'footer.php';?>