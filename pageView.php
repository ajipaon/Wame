<?php  require_once('library/autoload.php'); ?>
<?php 

$id = $_GET['id'];


$hasil = $wame->getPage($id);
var_dump($hasil);
//changeTitle($hasil["title"]);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta property="og:url" content="www.google.com" />
 	<meta property='og:title' content="al-qur'an murah"/>
 	<meta property='og:description' content='segera beli barangnya'/>
 	<meta property="og:type" content="website"/>
 	<meta property='og:image' content='<?= base_url('assets/img/default.jpg')?>'/>
 	<meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" />
 </head>
 <body>
 <img src="<?= base_url('assets/img/docs.png')?>" alt="">
 </body>
 </html>