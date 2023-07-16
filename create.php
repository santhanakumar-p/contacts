<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Contacts</title>
</head>

<body>
    <h3>Create Contact</h3>
    <a href="index.php">Back</a>
    <form action="store.php" method="POST">
        <div>
            <label for="firstName">First Name</label><br>
            <input type="text" name="first_name" id="firstName" require>
        </div><br><br>
        <div>
            <label for="lastName">Last Name</label><br>
            <input type="text" name="last_name" id="lastName">
        </div><br><br>
        <div>
            <label for="mobileNo">Mobile No</label><br>
            <input type="text" name="mobile_no" id="mobileNo">
        </div><br><br>
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email">
        </div><br><br>
        <div>
            <label for="DoB">Date of Birth</label><br>
            <input type="date" name="dob" id="DoB">
        </div><br><br>
        <div>
            <button type="submit">Save</button>
            <button type="reset">Clear</button>
        </div>

    </form>
</body>

</html>