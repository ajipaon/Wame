<?php include('library/autoload.php'); 
$email = !empty($_POST['email'])? trim($_POST['email']) : null; 
$name = !empty($_POST['name'])? trim($_POST['name']) : null; 
$pass = !empty($_POST['password'])? trim($_POST['password']) : null; 
if(isset($_POST['submit'])){

  if(!empty($email) && !empty($name) && !empty($pass)){
    if($wame->cekUserNameTerdafter($name) === 0 && $wame->cekUserEmailTerdafter($email) === 0){

   $pass2 = hash_pass($pass);
   $data = array(
 	'user_id'   => generate_UserID(),
 	'user_name' => $name,
 	'user_email'=> $email,
 	'user_pass' => $pass2
   );
    $login =  $wame->registerUser($data);
    } else{
    	echo"username atau email sudah terdaftar";
    }
    
  }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="main-border col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-center mb-3 huruf-black">Register</h3>
                <form>
                  <div class="form-group huruf-black">
                    <label>Username</label>
                    <input type="text" class="main-form p_input">
                  </div>
                  <div class="form-group huruf-black">
                    <label>Email</label>
                    <input type="email" class="main-form p_input">
                  </div>
                  <div class="form-group huruf-black">
                    <label>Password</label>
                    <input type="password" class="main-form p_input">
                  </div>
                  <div class="text-center ">
                    <button type="submit" class="btn btn-dark btn-block enter-btn">Create Account</button>
                  </div>
                  <p class="sign-up text-center huruf-black">Already have an Account?<a href="#" > Sign In</a></p>
                  <p class="terms huruf-black">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Regristration</title>
</head>
<body>
	<form action="" method="POST" >
	<div display="block">
		<input type="text" name="name" placeholder="username" value="<?= $name ?>" > <br>
		<input type="email" name="email" placeholder="email" value="<?= $email ?>">
		<br>
		<input type="password" name="password" placeholder="password">
		<br>
		<button type="submit" name="submit">Sign up</button>
	</div>
	</form>
</body>
</html> -->