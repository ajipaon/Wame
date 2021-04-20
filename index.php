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
		'descripsi' =>  $_POST['desc']
	);
	$hasil = $wame->insertPage($data);
	var_dump($data);
}



?>

<div class="container" stye="border:green;">
  ...fdbhdfgbdfrgdf
</div>

<!--  <main role="main" class="container">
 	<div class="starter-template">
	<form action="" method="post">
	  <input type="text" name="url" placeholder="Masukkan url"><br>
      <input type="text" name="title" placeholder="Masukkan title"><br>
      <input type="text" name="number_phone" placeholder="masukkan nomor telpon"><br>
      <input type="text" name="message" placeholder="masukkan pesan"><br>
      <input type="text" name="desc" placeholder="masukkan description"><br>
      <button type="submit">Create</button>
	</form>
	</div>
  </main> -->
