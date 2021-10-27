<?php
	function sortFilter($list_id){
		$conn = connection();
        //duration ascending filter
        if($_POST['sort'] == "ASC"){
            $query = $conn->prepare("SELECT * FROM `todo` LEFT JOIN tasks ON `tasks`.`list_id` = `todo`.`id` WHERE `todo`.`id` = :list_id ORDER BY `tasks`.`duration` ASC");
        }
        //duration descending filter
        else if($_POST['sort'] == "DESC"){
            $query = $conn->prepare("SELECT * FROM `todo` LEFT JOIN tasks ON `tasks`.`list_id` = `todo`.`id` WHERE `todo`.`id` = :list_id ORDER BY `tasks`.`duration` DESC");
        }
        //only shows the green color tasks
        else if($_POST['sort'] == "COLOR GREEN"){
            $query = $conn->prepare("SELECT * FROM `todo` LEFT JOIN tasks ON `tasks`.`list_id` = `todo`.`id` WHERE `todo`.`id` = :list_id AND `tasks`.`status` = 'green' ORDER BY `tasks`.`status` ASC");
        }
        //only shows the orange color tasks
        else if($_POST['sort'] == "COLOR ORANGE"){
            $query = $conn->prepare("SELECT * FROM `todo` LEFT JOIN tasks ON `tasks`.`list_id` = `todo`.`id` WHERE `todo`.`id` = :list_id AND `tasks`.`status` = 'orange' ORDER BY `tasks`.`status` DESC");
        }
        //only shows the red color tasks
        else{
            $query = $conn->prepare("SELECT * FROM `todo` LEFT JOIN tasks ON `tasks`.`list_id` = `todo`.`id` WHERE `todo`.`id` = :list_id AND `tasks`.`status` = 'red' ORDER BY `tasks`.`status` DESC");
        }
        $query->bindParam(':list_id', $list_id);
        $query->execute();
        $sortedList = $query->fetchAll();
        return $sortedList;
	}


?>