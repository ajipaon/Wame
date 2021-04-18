<?php include('templates/header.php');


if(isset($_POST['title'])){

	// echo $_POST['title'];
	 $number = $_POST['number_phone'];
	
	// var_dump($wame->generateID());
	$data = array(

		'id'        => $wame->generateID(),
		'title'     =>  $_POST['title'],
		'nomor_tlp' =>   $number,
		'pesan'     =>  $_POST['message'],
		'web'       =>  $_POST['url'],
		'descripsi'      =>  $_POST['desc']
	);
	$hasil = $wame->insertPage($data);
	var_dump($data);
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
	  <input type="text" name="url" placeholder="Masukkan url">
      <input type="text" name="title" placeholder="Masukkan title">
      <input type="text" name="number_phone" placeholder="masukkan nomor telpon">
      <input type="text" name="message" placeholder="masukkan pesan">
      <input type="text" name="desc" placeholder="masukkan description">
      <button type="submit">Create</button>


	</form>


</body>
</html>