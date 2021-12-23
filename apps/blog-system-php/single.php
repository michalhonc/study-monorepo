<?php 
	
	session_start();
	$selected_category = $_GET['title']; // Get 'Table'
	$_SESSION['selected_category'] = $_GET['title'];
?>