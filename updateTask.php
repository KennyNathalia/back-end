<?php
	include "config.php";

	function update(){
		//updates the tasks
		$conn = connection();
		$id = $_POST['id'];
        $query = $conn->prepare("UPDATE tasks SET taskName = :taskName, description = :description, duration = :duration, status = :status WHERE id = :id");
        $query->bindParam(":taskName", $_POST['taskName']);
        $query->bindParam(":description", $_POST['description']);
        $query->bindParam(":duration", $_POST['duration']);
        $query->bindParam(":status", $_POST['color']);
        $query->bindParam(":id", $_POST['id']);
        $query->execute();
        
        header( "Location: index.php" );
	}
	
	update();
?>