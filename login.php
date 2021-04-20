<?php include('templates/header.php'); ?>
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
</html>