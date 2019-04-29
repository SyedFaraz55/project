<?php

if(isset($_POST['submit'])) {

  $first = strip_tags($_POST['fname']);
  $last = strip_tags($_POST['lname']);
  $address = strip_tags($_POST['address']);
  $contact = strip_tags($_POST['contact']);
  $city = strip_tags($_POST['city']);
  $dob = strip_tags($_POST['dob']);
  $msg = strip_tags($_POST['enquiry']);

  $to = 'mosesch115@gmail.com,shallom.jarisinc@gmail.com'; // note the comma

  // Subject mosesch115@gmail.com pass- columbia116
  $subject = 'Appointment Request';

  // Message
  $message = "
  <html>
  <head>
    <title>Enquiry</title>
  </head>
  <body>
    <h3 style='background-color:coral;color:white;padding:14px;'>Appointment Request Details</h3>

    <p><b>'First Name:</b> {$first}'</p>
    <p><b>'Last Name:</b> {$last}'</p>
    <p><b>'Address:</b> {$address}'</p>
    <p><b>'City:</b> {$city}'</p>
    <p><b>'Date Of Birth:</b> {$dob}'</p>
    <p><b>'Message:</b> {$message}'</p>
  </body>
  </html>
  ";

  // To send HTML mail, the Content-type header must be set
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';

  // Additional headers
  $headers[] = 'To: <mosesch115@gmail.com>';
  $headers[] = 'From: smohi6069 <smohi6069@gmail.com>';


  // Mail it
  if(mail($to,$subject,$message, implode("\r\n", $headers))) {
    header('location:thanks.php');
  }


}



 ?>
<?php include 'inc/header.php';?>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Request an Appointment</h2>
                </div>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">First Name</label>
                              <input type="text" name="fname" class="form-control" id="inputEmail4" placeholder="First Name" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Last Name</label>
                              <input type="text" name="lname" class="form-control" id="inputPassword4" placeholder="Last Name" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress">Address</label>
                            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St" required>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress2">Contact</label>
                            <input type="text" name="contact" class="form-control" id="inputAddress2" placeholder="Contact" required>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">City</label>
                              <input type="text" name="city" class="form-control" id="inputCity" placeholder="City" required>
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputState">Date Of Birth</label>
                              <input type="date" name="dob" value="" class="form-control" required>
                            </div>
                            <div class="form-group col-md-12">
                              <label for="inputState">Additional Question</label>
                            <textarea name="enquiry" rows="8"  class="form-control" name="aq"></textarea>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                      </form>
            </div>
        </section>
    </main>
    <?php include 'inc/footer.php';?>
</body>

</html>
