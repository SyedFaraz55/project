<?php
session_start();
if(isset($_SESSION['username'])&& $_SESSION['is_login']==true ){
    header('location:dashboard.php');
  }

$class = '';
$message = '';
$role = '';

    if(isset($_POST['submit'])){

        $email = $_POST['email'];
        $password    = $_POST['password'];

        if(validate_user($email,$password)){

        } else {
            $class = 'alert alert-warning';
            $message = 'Something went wrong, Please try again !';
        }


    }
function validate_user($mail,$pass) {
     $email = strip_tags($mail);
     $password = strip_tags($pass);
     $pass_hash = md5($password);

     $dsn =  new PDO('mysql:host=localhost;dbname=register','root','');
     $sql = "SELECT * FROM `members` WHERE `email` = ? ";
     $statement = $dsn->prepare($sql);
     $statement->execute([$email]);
     $result = $statement->fetch();
     if($result['email']==$email && $result['password']==$pass_hash){
        session_start();
        $_SESSION['is_login'] =true;
        $_SESSION['username']=$result['username'];
        header('location:dashboard.php');
       return true;
     }

   }






?>
<?php include 'inc/header.php';?>
<div style="margin-top:60px;"></div>
<div style="background-color:#3B99E0;padding:4px;;" class="container-fluid">
  <h3 style="margin-left:54px;color:white;margin-top:30px;">LOGIN</h3>
  <nav aria-label="breadcrumb" style="margin-left:40px;" >
  <ol class="breadcrumb" style="background-color:#3B99E0;">
    <li class="breadcrumb-item"><a href="index.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><span style="color:white;">Login</span></li>
  </ol>
</nav>
</div>
    <main class="page login-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <!-- <h2 class="text-info" style="margin-top:40px;margin-bottom:-10px;">Log In</h2> -->
                </div>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <div class="<?php echo $class; ?>" role="<?php echo $role; ?>">
                        <?php echo $message; ?>
                        </div>
                    <div class="form-group"><label for="email">Email</label><input class="form-control item" type="text" id="email" name="email"></div>
                    <div class="form-group"><label for="password">Password</label><input class="form-control" type="password" id="password" name="password"></div>
                    <div class="form-group">
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
                    </div><button class="btn btn-primary btn-block" type="submit" name="submit">Log In</button></form>
                    <div style="margin-top:20px"></div>
                    <p style="text-align:center"><a href="#">Forgot Password ? </a>| <a href="signup.php">Register Now</a></p>
            </div>
        </section>
    </main>
    <?php include 'inc/footer.php';?>
</body>

</html>
