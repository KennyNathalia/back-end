<?php
	include "config.php";

	function delete(){
		//delete the selected list
		$conn = connection();
		$id = $_GET['id'];
        $stmt = $conn->prepare("DELETE FROM todo WHERE id = :id ");
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        
        header( "Location: index.php" );
	}

	delete();
?>