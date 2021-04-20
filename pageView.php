<?php  require_once('library/autoload.php'); ?>
<?php 

$id = $_GET['id'];
$hasil = $wame->getPage($id);
var_dump($hasil);
//https://api.whatsapp.com/send?phone=628981234567&text=Halo%20mau%20order%20gan

echo urlencode($hasil["pesan"]);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta property="og:url" content="<?= $hasil["web"]?>" />
 	<meta property='og:title' content="<?= $hasil["title"]?>"/>
 	<meta property='og:description' content='<?= $hasil["descripsi"]?>'/>
 	<meta property="og:type" content="website"/>
 	<meta property='og:image' content='<?= base_url('Wame/assets/img/default.jpg')?>'/>
 	<meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
 </head>
 <body>
 <img src="<?= base_url('assets/img/docs.png')?>" alt="">
 </body>
 </html>
 <?php //header("Location: https://api.whatsapp.com/send?phone=".$hasil["nomor_tlp"]."&text=".$hasil['pesan']); ?>
