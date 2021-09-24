<?php
	include "config.php";

	function update(){
		$conn = connection();
		$id = $_POST['id'];
        $query = $conn->prepare("UPDATE tasks SET taskName = :taskName, description = :description WHERE id = :id");
        $query->bindParam(":taskName", $_POST['taskName']);
        $query->bindParam(":description", $_POST['description']);
        $query->bindParam(":id", $_POST['id']);
        $query->execute();
        
        header( "Location: index.php" );
	}

	update();
?>