<?php include('templates/header.php');


if(isset($_POST['title'])){

	echo $_POST['title'];
	echo $_POST['number_phone'];
	echo $_POST['message'];
	var_dump($wame->generateID());
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Welcome - this is whatsapp link </title>
</head>
<body>
	<form action="" method="post">
		
      <input type="text" name="title" placeholder="Masukkan title">
      <input type="text" name="number_phone" placeholder="masukkan nomor telpon">
      <input type="text" name="message" placeholder="masukkan pesan">
      <button type="submit">Create</button>


	</form>


</body>
</html>