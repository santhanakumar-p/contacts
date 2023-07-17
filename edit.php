<?php
require_once 'db.php';

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM contact WHERE id = :id");
    $stmt->bindParam(':id', $userId);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact</title>
</head>

<body>
    <h3>Edit Contact</h3>
    <a href="index.php">Back</a>
    <br><br>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
        <div>
            <label for="firstName">First Name</label><br>
            <input type="text" name="first_name" id="firstName" required>
        </div><br><br>
        <div>
            <label for="lastName">Last Name</label><br>
            <input type="text" name="last_name" id="lastName">
        </div><br><br>
        <div>
            <label for="mobileNo">Mobile No</label><br>
            <input type="number" name="mobile_no" id="mobileNo">
        </div><br><br>
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email">
        </div><br><br>
        <div>
            <label for="dob">Date of Birth</label><br>
            <input type="date" name="dob" id="dob">
        </div><br><br>
        <div>
            <button type="submit">Save</button>
            <button type="reset">Clear</button>
        </div>

    </form>
</body>

</html>