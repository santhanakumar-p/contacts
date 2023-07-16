<?php

require_once 'db.php';

if(isset($_GET['id'])){

    $userId = $_GET['id'];

    try{
        $stmt = $conn->prepare("DELETE FROM contact WHERE id = :id");
        $stmt->bindParam(':id', $userId);

        $stmt->execute();

        header('Location: index.php');
        exit();
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
