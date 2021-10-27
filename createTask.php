<?php
	include "config.php";

	function create(){
		//creates a task
		$conn = connection();
		$query = $conn->prepare("INSERT INTO tasks (taskName, description, status, duration, list_id) VALUES (:taskName, :description, :status, :duration, :list_id)");
        $query->bindParam(":taskName", $_POST['name']);
        $query->bindParam(":description", $_POST['description']);
        $query->bindParam(":status", $_POST['color']);
        $query->bindParam(":duration", $_POST['duration']);
        $query->bindParam(":list_id", $_POST['id']);
        
        $query->execute();
	}

	create();
	header( "Location: index.php" );
?>