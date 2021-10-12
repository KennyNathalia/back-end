<?php
	include "config.php";

	function ascending(){
		$conn = connection();
        $query = $conn->prepare("SELECT * FROM tasks ORDER BY duration ASC");
        $query->execute();
        header( "Location: index.php" );
	}
	
	ascending();
?>