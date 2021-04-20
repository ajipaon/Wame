<?php include('templates/header.php');


if (is_login()) {
 $user = json_decode($_COOKIE['user']);

 var_dump($user);
echo $user->2['id'];
	echo "anda login";
	# code...
} else {
	echo "anda tidak login";
}


 ?>