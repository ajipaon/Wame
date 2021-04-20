<?php include('templates/header.php'); 
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
</html>