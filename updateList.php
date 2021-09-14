<?php
	include "config.php";

	function update($name, $id){
		$conn = openDatabaseConnection();
		$id = $_POST['id'];
        $query = $conn->prepare("UPDATE todo SET list_name = :list_name WHERE id = :id");
        $query->bindParam(":name", $name);
        $query->bindParam(":id", $id);
        $query->execute();
        
        //header( "Location: index.php" );
	}

	update();
?>