<?php
	include "config.php";

	function update(){
		//update the lists
		$conn = connection();
		//$id = $_POST['id'];
        $query = $conn->prepare("UPDATE todo SET list_name = :list_name WHERE id = :id");
        $query->bindParam(":list_name", $_POST['list_name']);
        $query->bindParam(":id", $_POST['id']);
        $query->execute();
        
        header( "Location: index.php" );
	}

	update();
?>