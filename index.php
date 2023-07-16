<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
</head>

<body>
    <h3>User List</h3>
    <a href="create.php">create</a>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>S.No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>DoB</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?=
            require_once 'db.php';

            $stmt = $conn->query("SELECT * FROM Contact");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<tr>';
                echo '<td>' . $row['id'] . '</td>';
                echo '<td>' . $row['first_name'] . '</td>';
                echo '<td>' . $row['last_name'] . '</td>';
                echo '<td>' . $row['mobile_no'] . '</td>';
                echo '<td>' . $row['email'] . '</td>';
                echo '<td>' . $row['dob'] . '</td>';
                echo '<td>' . $row['created_at'] . '</td>';
                echo '<td><a href="edit.php?id=' . $row['id'] . '">Edit</a> | <a href="destroy.php?id=' . $row['id'] . '">Delete</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>S.No</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile No</th>
                <th>Email</th>
                <th>DoB</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</body>

</html>