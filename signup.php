<?php
session_start();
if(isset($_SESSION['username'])&& $_SESSION['is_login']==true ){
  header('location:dashboard.php');
}

$class = '';
$message = '';
$role = '';

if(isset($_POST['submit'])){
$cname = strip_tags($_POST['cname']);
$web = strip_tags($_POST['weburl']);
$address = strip_tags($_POST['address']);
$city = strip_tags($_POST['city']);
$state = strip_tags($_POST['state']);
$zip = strip_tags($_POST['zip']);
$cntname = strip_tags($_POST['cntname']);
$email = strip_tags($_POST['email']);
$telephone = strip_tags($_POST['telephone']);
$operator = strip_tags($_POST['operator']);
$jt= strip_tags($_POST['jobtitle']);
$opt2 = strip_tags($_POST['opt2']);
$cmnts = strip_tags($_POST['aq']);





  //   if($pass!=$cpass) {
  //   $class = 'alert alert-danger';
  //   $message = "Password doesn't Match";
  //   $role = 'alert';
  // }
    $dsn =  new PDO('mysql:host=localhost;dbname=members','root','');
    $sql = "SELECT * FROM `members` WHERE `email` = ? ";
    $statement = $dsn->prepare($sql);
    $statement->execute([$email]);
    $result = $statement->fetch();
    if($result['email'] == $email){
        $class = 'alert alert-warning';
        $message = 'User with these email already exits !';
        $role = 'alert';
    } else {
      $pass_hash = md5($pass);
                 $statement2 = $dsn->prepare("INSERT INTO `members`(`company`, `url`, `address`, `city`, `state`, `zip`, `name`, `email`, `telephone`, `operator`, `job title`, `opt2`, `comment`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?);");
                 $statement2->execute([$cname,$web,$address,$city,$state,$zip,$cntname,$email,$telephone,$operator,$jt,$opt2,$cmnts]);
                 if($statement2->rowCount()>0){
                   // header('location:login.html');
                   $class = 'alert alert-success';
                   $message = 'Member Registration Successfull !';
                   $role = 'alert';
                 } else {
                   $arr = $statement2->errorInfo();
                   echo $arr[2];
                 }
           }


}

 ?>

 <?php include 'inc/header.php';?>
     <main class="page registration-page">
         <section class="clean-block ">
             <div class="container ">
               <div style="margin-top:20px;"></div>
               <div class="<?php echo $class; ?>" role="<?php echo $role; ?>">
                    <?php echo $message; ?>
                  </div>
                 <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                     <div style="margin-top:20px"></div>
                 <h2 class="text-info">POC Consults Member Registration</h2>
                 <p>Fill In Your Details</p>
                 <div style="margin-top:40px"></div>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputEmail4">Company Name</label>
       <input type="text" class="form-control" id="inputEmail4" placeholder="Company Name" name="cname" required>
     </div>
     <div class="form-group col-md-6">
       <label for="inputEmail4">Website Url</label>
       <input type="url" class="form-control" id="inputEmail4" placeholder="http://www.example.com" name="weburl" required>
     </div>
   </div>
   <div class="form-group">
     <label for="inputAddress">Address</label>
     <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" required>
   </div>
   <div class="form-row">
     <div class="form-group col-md-6">
       <label for="inputCity">City</label>
       <input type="text" class="form-control" id="inputCity" placeholder="City" name="city" required>
     </div>
     <div class="form-group col-md-4">
       <label for="inputState">State</label>
       <select id="inputState" class="form-control" name="state" required>
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
       <input type="text" class="form-control" id="inputZip" placeholder="Zip" name="zip" required>
     </div>

     <div class="form-group col-md-6">
       <label for="inputEmail4">Contact Name</label>
       <input type="text" class="form-control" id="inputEmail4" placeholder="Contact Name" name="cntname" required>
     </div>
     <div class="form-group col-md-6">
       <label for="inputEmail4">Email</label>
       <input type="email" class="form-control" id="inputEmail4" placeholder="someone@example.com" name="email" required>
     </div>
     <div class="form-group col-md-6">
       <label for="inputEmail4">Telephone No</label>
       <input type="text" class="form-control" id="inputEmail4" name="telephone" placeholder="Ex:123-456-7890" required>
     </div>
     <div class="form-group col-md-6">
       <label for="inputState">Choose Operator</label>
       <select id="inputState" class="form-control" name="operator" required>
       <option value="	Select">	Select</option>
       <option value="Select">Select</option>
		<option value="@message.alltel.com">Alltel</option>
		<option value="@txt.att.net">AT&amp;T</option>
		<option value="@messaging.nextel.com">Nextel</option>
		<option value="@messaging.sprintpcs.com">Sprint</option>
		<option value="@tms.suncom.com">SunCom</option>
		<option value="@tmomail.net">T-mobile</option>
		<option value="@voicestream.net">VoiceStream</option>
		<option value="@vtext.com">Verizon</option>
		<option value="@airtelap.com">Airtel</option>
		<option value="@ideacellular.net">Idea</option>
		<option value="@aircel.co.in">Aircel</option>
       </select>
     </div>
     <div class="form-group col-md-6">
       <label for="inputEmail4">Job Title</label>
       <input type="text" class="form-control" id="inputEmail4" name="jobtitle" placeholder="Job Title" required>
     </div>
     <div class="form-group col-md-6">
       <label for="inputState">How did you find our site?</label>
       <select id="inputState" class="form-control" name="opt2" required>
         <option selected>Choose...</option>
         <option value="Recommendation">Recommendation</option>
		<option value="Another Hotel">Another Hotel</option>
		<option value="Friend">Friend</option>
		<option value="Yahoo">Yahoo</option>
		<option value="Google">Google</option>
		<option value="Other">Other</option>
       </select>
     </div>
   </div>
   <div class="form-group">
     <label for="exampleFormControlTextarea1">Comments / Requests:</label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="aq"></textarea>
   </div>
   <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck" required>
      <label class="form-check-label" for="gridCheck">
         I agree with and will abide by the POC Consults Code of Conduct. I am in full and complete compliance with the QA standards as stated in the POC Consults Peer Review Affidavit. I acknowledge that the information contained above is true and correct, that liability insurance and a current business license will be maintained, and that I will comply with all the requirements of membership in the POC Consults
      </label>
    </div>
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
