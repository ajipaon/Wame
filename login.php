<?php include('library/autoload.php'); ?>
<?php 
$name = !empty($_POST['username'])? trim($_POST['username']) : null; 
 if(isset($_POST['submit'])) {
   if (!empty($name) && !empty($_POST['pass'])) {
      $data = array(
         'user_name' => $name,
         'user_pas' => $_POST['pass']
      );
     $hasil = $wame->cekLoginUser($data);
      if($hasil == false){
      	echo"username atau password salah";
      }else{
         bikinSession($hasil, $name);
       header("Location:".base_url()."/Wame/user.php");
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
    <title>Login</title>
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
                <h3 class="card-title text-left mb-3 huruf-black">Login</h3>
                <form action="" method="POST">
                  <div class="form-group huruf-black ">
                    <label>Username or email *</label>
                    <input type="text" class="main-form" name="username" placeholder="Username" value="<?= $name ?>">
                  </div>
                  <div class="form-group huruf-black">
                    <label>Password *</label>
                    <input type="password" class="main-form" name="pass" placeholder="Password">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-dark btn-block enter-btn" name="submit">Login</button>
                  </div>
                  <p class="sign-up huruf-black">Don't have an Account?<a href="#"> Sign Up</a></p>
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
	<title>login</title>
</head>
<body>
	<form action="" method="POST">
		<input type="text" name="username" placeholder="username" value="<?= $name ?>"><br>
		<input type="password" name ="pass" placeholder="password"><br>
		<button type="submit" name="submit">Sign in</button>

	</form>
	
</body>
</html> -->

<?php include('templates/footer.php'); ?>