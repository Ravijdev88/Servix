<?php
session_start();
include '../connection.php';
include 'header.php';

?>
<style type="text/css">
    .btn{
        background-color: #8B0000;
        color: #fff;
        outline: none;
    }
    .btn:hover{
        color:#ffffff;
    }
</style>
</head>
<?php
if (isset($_POST['login'])) {
    $username =$conn->real_escape_string($_POST['username']);
    $password =$conn->real_escape_string(md5($_POST['password']));
    $rest="SELECT * FROM admin WHERE username='$username' AND password ='$password'";
    $res = mysqli_query($conn,$rest);
    $count = mysqli_num_rows($res);
    if ($count == 0) {
        ?>
        <script type="text/javascript">
            document.getElementById('errormsg').style.display="block";
        </script>
        <?php
    }else{
        if (!empty($_POST['remember'])) {
              setcookie("member_login",$_POST['username'],time()+ (10 * 365 * 24 * 60 * 60));
              setcookie("member_password",$_POST['password'],time()+ (10 * 365 * 24 * 60 * 60));
            }else{
                if (isset($_COOKIE['member_login'])) {
                setcookie ("member_login","");
                }

                if (isset($_COOKIE['member_password'])) {
                setcookie ("member_password","");
                }
            }
            header('Location: index.php');
        $_SESSION["admin"]=$username;
        ?>
        <script type="text/javascript">
           window.location="services.php";
        </script>
        <?php
    }

}

?>

    <div class="">
        <div class="container">
            <div class="row">
                <div class="col-md-8 py-5 mx-auto col-lg-8 col-sm-12">
                    <div class="login-content card p-4">
                        <div class="login-logo text-white">
                            <h2 class="text-dark"> Admin Login</h2>
                        </div>
                        <div class="login-form">
                            <form action="" name="form1" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" value="<?php if(isset($_COOKIE['member_login'])){ echo $_COOKIE['member_login']; } ?>" class="form-control" placeholder="Enter Username" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" value="<?php if(isset($_COOKIE['member_password'])){ echo $_COOKIE['member_password']; } ?>" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember"<?php if (isset($_COOKIE['member_login'])) { ?> Checked <?php } ?>/>
                                    <label for="remember-me">Remember me</label>
                                </div>
                                <button type="submit" name="login" class="btn btn-flat m-b-30 btn-block m-t-30">Sign in</button>
                                <div class="alert alert-danger" id="errormsg" style=" display:none; margin-top:10px;">
                                    <strong>Invalid</strong> Invalid username or password
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'footer.php'?>