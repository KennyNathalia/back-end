<?php
	include "config.php";

	function create(){
		$conn = connection();
		$query = $conn->prepare("INSERT INTO todo (list_name) VALUES (:list_name)");
        $query->bindParam(":list_name", $_POST['name']);
        $query->execute();
	}

	create();
	header( "Location: index.php" );
?>