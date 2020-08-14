<?php
	if(!isset($_SESSION)) { session_start(); }
	session_unset();
	// header('Location: ../index.php');
	if(!isset($_SESSION['js_id'])){
		header('Location: ../index.php');
	}

?>