<?php
	function sortDuration($sort){
		$conn = connection();
        if($_POST['sort'] == "ASC"){
            $query = $conn->prepare("SELECT * FROM `todo` LEFT JOIN tasks ON `tasks`.`list_id` = `todo`.`id` ORDER BY `tasks`.`duration` ASC");
        }else{
            $query = $conn->prepare("SELECT * FROM `todo` LEFT JOIN tasks ON `tasks`.`list_id` = `todo`.`id` ORDER BY `tasks`.`duration` DESC");
        }
        $query->bindParam(':sort', $_POST['sort']);
        $query->execute();
        $sortedList = $query->fetchAll();
        return $sortedList;
	}

	function sortColor($sort){
		$conn = connection();
        if($_POST['sort'] == "ASC"){
            $query = $conn->prepare("SELECT * FROM `todo` LEFT JOIN tasks ON `tasks`.`list_id` = `todo`.`id` ORDER BY `tasks`.`status` ASC");
        }else{
            $query = $conn->prepare("SELECT * FROM `todo` LEFT JOIN tasks ON `tasks`.`list_id` = `todo`.`id` ORDER BY `tasks`.`status` DESC");
        }
        $query->bindParam(":sort", $_POST['sort']);
        $query->execute();
        $sortedList = $query->fetchAll();
        return $sortedList;
	}

?>