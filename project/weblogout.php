<?php 
session_start();
session_unset();
session_destroy();


// unset($_SESSION['firstname']);

header("location: webfront.php");
exit;
 ?>