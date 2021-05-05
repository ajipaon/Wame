<?php include('templates/header.php');


if (is_login()) {
 $user = json_decode($_COOKIE['user']);

 
} else {
	 header("Location:".base_url("/Wame"));
}?>





<?php
include('templates/footer.php');