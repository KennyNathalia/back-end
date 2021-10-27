<?php
	include "config.php";

	function delete(){
		//deletes the selected task
		$conn = connection();
		$id = $_GET['id'];
        $stmt = $conn->prepare("DELETE FROM tasks WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        
        header( "Location: index.php" );
	}

	delete();
?>