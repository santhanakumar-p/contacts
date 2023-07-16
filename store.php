<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    require_once 'db.php';


    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $mobileNo = $_POST['mobile_no'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];

    try{
        $stmt = $conn->prepare("INSERT INTO contact (first_name, last_name, mobile_no, email,dob)
                                VALUES(:first_name, :last_name, :mobile_no, :email, :dob)");

        $stmt->bindParam(':first_name', $firstName);
        $stmt->bindParam(':last_name', $lastName);
        $stmt->bindParam(':mobile_no', $mobileNo);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':dob', $dob);

        $stmt->execute();

        header('Location: index.php');
        exit();
    }catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }

}