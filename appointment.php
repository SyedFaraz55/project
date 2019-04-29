<?php

if(isset($_POST['submit'])) {

  $first = strip_tags($_POST['fname']);
  $last = strip_tags($_POST['lname']);
  $address = strip_tags($_POST['address']);
  $contact = strip_tags($_POST['contact']);
  $city = strip_tags($_POST['city']);
  $dob = strip_tags($_POST['dob']);
  $zip = strip_tags($_POST['zip']);
  $email = strip_tags($_POST['email']);
  $state = strip_tags($_POST['state']);
  $pd = strip_tags($_POST['pd']);
  $pt = strip_tags($_POST['pt']);
  $aq = strip_tags($_POST['aq']);

  $to = 'syedmohi04@gmail.com'; // note the comma

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
    <p><b>'Email:</b> {$email}'</p>
    <p><b>'Contact:</b> {$contact}'</p>
    <p><b>'Address:</b> {$address}'</p>
    <p><b>'City:</b> {$city}'</p>
    <p><b>'Date Of Birth:</b> {$dob}'</p>
    <p><b>'Zip:</b> {$zip}'</p>
    <p><b>'State:</b> {$state}'</p>
    <p><b>'Prefered Time:</b> {$pt}'</p>
    <p><b>'Prefered Day:</b> {$pd}'</p>
    <p><b>'Additional Question:</b> {$aq}'</p>
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
<div style="background-color:#3B99E0;padding:4px;" class="container-fluid">
  <h3 style="margin-left:54px;color:white;margin-top:30px;">APPOINTMENT</h3>
  <nav aria-label="breadcrumb" style="margin-left:40px;" >
  <ol class="breadcrumb" style="background-color:#3B99E0;">
    <li class="breadcrumb-item"><a href="index.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><span style="color:white;">Appointment</span></li>
  </ol>
</nav>
</div>
    <main class="page registration-page">
        <section class="clean-block ">
            <div class="container ">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                    <div style="margin-top:40px"></div>
                <h2 class="text-info">Request an Appointment</h2>
                <small>Please provide the following information and we will contact you to schedule your appointment.   </small>
                <div style="margin-top:40px"></div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="First Name" name="fname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Last Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Last Name" name="lname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" placeholder="City" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
      <option value="Select">Select</option>
	<option value="Alabama">Alabama</option>
	<option value="Alaska">Alaska</option>
	<option value="Arizona">Arizona</option>
	<option value="Arkansas">Arkansas</option>
	<option value="California">California</option>
	<option value="Colorado">Colorado</option>
	<option value="Connecticut">Connecticut</option>
	<option value="Delaware">Delaware</option>
	<option value="District Of Columbia">District Of Columbia</option>
	<option value="Florida">Florida</option>
	<option value="Georgia">Georgia</option>
	<option value="Hawaii">Hawaii</option>
	<option value="Idaho">Idaho</option>
	<option value="Illinois">Illinois</option>
	<option value="Indiana">Indiana</option>
	<option value="Iowa">Iowa</option>
	<option value="Kansas">Kansas</option>
	<option value="Kentucky">Kentucky</option>
	<option value="Louisiana">Louisiana</option>
	<option value="Maine">Maine</option>
	<option value="Maryland">Maryland</option>
	<option value="Massachusetts">Massachusetts</option>
	<option value="Michigan">Michigan</option>
	<option value="Minnesota">Minnesota</option>
	<option value="Mississippi">Mississippi</option>
	<option value="Missouri">Missouri</option>
	<option value="Montana">Montana</option>
	<option value="Nebraska">Nebraska</option>
	<option value="Nevada">Nevada</option>
	<option value="New Hampshire">New Hampshire</option>
	<option value="New Jersey">New Jersey</option>
	<option value="New Mexico">New Mexico</option>
	<option value="New York">New York</option>
	<option value="North Carolina">North Carolina</option>
	<option value="North Dakota">North Dakota</option>
	<option value="Ohio">Ohio</option>
	<option value="Oklahoma">Oklahoma</option>
	<option value="Oregon">Oregon</option>
	<option value="Pennsylvania">Pennsylvania</option>
	<option value="Rhode Island">Rhode Island</option>
	<option value="South Carolina">South Carolina</option>
	<option value="South Dakota">South Dakota</option>
	<option value="Tennessee">Tennessee</option>
	<option value="Texas">Texas</option>
	<option value="Utah">Utah</option>
	<option value="Vermont">Vermont</option>
	<option value="Virginia">Virginia</option>
	<option value="Washington">Washington</option>
	<option value="West Virginia">West Virginia</option>
	<option value="Wisconsin">Wisconsin</option>
	<option value="Wyoming">Wyoming</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" placeholder="Zip" name="zip">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Contact No</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Contact No" name="contact">
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="someone@example.com" name="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Country</label>

      <select id="inputState" class="form-control" name="opt2">
      <option value="	Select">	Select</option>
	<option value="	USA ">	United State Of America</option>
	<option value="Other ">Other </option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputEmail4">Date Of Birth</label>
      <input type="date" class="form-control" id="inputEmail4" name="dob">
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Prefered Day(s)</label>
      <select id="inputState" class="form-control" name="pd">
        <option selected>Choose...</option>
        <option value="Any">Any</option>
        <option value="Mon">Mon</option>
        <option value="Tue">Tue</option>
        <option value="Wed">Wed</option>
        <option value="Thu">Thu</option>
        <option value="Fri">Fri</option>
        <option value="Sat">Sat</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState">Preferred Time(s) </label>
      <select id="inputState" class="form-control" name="pt">
        <option selected>Choose...</option>
        <option value="Any">Any</option>
        <option value="Morning Hours(Before 11 AM)">Morning Hours(Before 11 AM)</option>
        <option value="Morning Hours(11 AM - 3 PM)">Morning Hours(11 AM - 3 PM)</option>
        <option value="Afternoon(3PM - 5 PM)">Afternoon(3PM - 5 PM)</option>
        <option value="Evening(5PM - 7 PM - When Available)">Evening(5PM - 7 PM - When Available)</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Additional Questions</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="aq"></textarea>
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
            </div>
        </section>
    </main>
    <div class="container">

    </div>
<?php include 'inc/footer.php';?>
</body>

</html>
