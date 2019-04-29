<?php

  if(isset($_POST['submit'])){
    $first = strip_tags($_POST['fname']);
    $last = strip_tags($_POST['lname']);
    $email = strip_tags($_POST['email']);
    $sub = strip_tags($_POST['subject']);
    $enq = strip_tags($_POST['enquiry']);
    // Multiple recipients
$to = 'syedmohi04@gmail.com'; // note the comma

// Subject mosesch115@gmail.com pass- columbia116
$subject = $sub;

// Message
$message = "
<html>
<head>
  <title>Enquiry</title>
</head>
<body>
  <h3 style='background-color:coral;color:white;padding:14px;'>Enquiry Details</h3>
  <p><b>'Subject:</b> {$sub}'</p>
  <p><b>'First Name:</b> {$first}'</p>
  <p><b>'Last Name:</b> {$last}'</p>
  <p><b>'Email:</b> {$email}'</p>
  <p><b>'Enquiry:</b> {$enq}'</p>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

// Additional headers
$headers[] = 'To: <syedmohi04@gmail.com>';
$headers[] = 'From: smohi6069 <smohi6069@gmail.com>';


// Mail it
if(mail($to,$subject,$message, implode("\r\n", $headers))) {
  header('location:thanks.php');
}
}

 ?>
<?php include 'inc/header.php';?>
<div style="margin-top:60px;"></div>
<div style="background-color:#3B99E0;padding:20px;;" class="container-fluid">
  <h3 style="margin-left:54px;color:white;margin-top:20px;">CONTACT US</h3>
  <nav aria-label="breadcrumb" style="margin-left:40px;" >
  <ol class="breadcrumb" style="background-color:#3B99E0;">
    <li class="breadcrumb-item"><a href="index.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><span style="color:white;">Contact Us</span></li>
  </ol>
</nav>
</div>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container-fluid">
                <div class="block-heading">
                    <!-- <h2 class="text-info">Contact Us</h2> -->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <form style="margin-top:-30px;" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group"><label>First Name</label><input class="form-control" type="text" name="fname" required></div>
                            <div class="form-group"><label>Last Name</label><input class="form-control" type="text" name="lname" required></div>
                            <div class="form-group"><label>Email</label><input class="form-control" type="email" name="email" required></div>
                            <div class="form-group"><label>Subject</label><input class="form-control" type="text" name="subject" required></div>
                            <div class="form-group"><label>Enquiry</label><textarea class="form-control" name="enquiry"></textarea></div>
                            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="submit">Submit</button></div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97864.96104526179!2d-74.98617389132161!3d39.95749137578736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c1358348cce9f5%3A0xfa02e26f02ceb97b!2sMt+Laurel+Township%2C+NJ%2C+USA!5e0!3m2!1sen!2sin!4v1555833135415!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div style="margin-top:20px"></div>
                        <p><b>Contact Info</b></p>
                        <p>

                            <b>Email:</b>info@pocconsults.com <br>

                            <b>Phone:</b> 856-448-7350 & 856-448-7351 <br>

                            Mount Laurel, NJ

                            USA
                            </p>
                    </div>
                </div>

            </div>
        </section>
    </main>
  <?php include 'inc/footer.php';?>
</body>

</html>
