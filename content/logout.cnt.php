<?php 
session_start();
session_destroy();

//redirect to login page
header('Location: http://127.0.0.1/dd/Project-Weeb_Shop/index.php');

?>