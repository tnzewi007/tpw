<?php
session_start();
if (isset($_SESSION['name'])){
	unset($_SESSION['name']);
	session_destroy();
	echo "<script>window.location.href='admin.php'</script>";
}
//echo "<script>window.location.href='adminlogin.php'</script>"; 
?>