<?php
    function connection(){
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
        $conn = connection();
        $query = $conn->prepare("SELECT * FROM todo");
        $query->execute();
        $result = $query->fetchAll();
        return $result;
    }
?> 