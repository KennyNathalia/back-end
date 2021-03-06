<?php
    function connection(){
        //database connection
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        $database = "todo_list";


        try {
            $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
            }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
        return $conn;

    }

    function lists(){
        //gets all lists from the database
        $conn = connection();
        $query = $conn->prepare("SELECT * FROM todo");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }

    //pakt list by id voor de update
    function listById($id){
        $conn = connection();
        $query = $conn->prepare("SELECT * FROM todo WHERE id = :id");
        $query->execute([":id"=>$id]);
        return $query->fetch();
    }


    //pakt task by id voor de update
    function taskById($id){ 
        $conn = connection(); 
        $query = $conn->prepare("SELECT * FROM tasks WHERE id = :id"); 
        $query->execute([":id"=>$id]); 
        return $query->fetch(); 
    } 


    function taskByListId($id){
        //pakt de tasks by list_id zodat de de taken in de juiste lijsten komen
        $conn = connection();
        $query = $conn->prepare("SELECT * FROM tasks WHERE list_id = :list_id");
        $query->bindParam(":list_id", $id);
        $query->execute();
        $tasks = $query->fetchAll();
        return $tasks;
    }
?> 