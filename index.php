<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "config.php";

$result = mysqli_query($conn, "SELECT * FROM students");

if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Status</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h2>Student Status System</h2>

    <form action="insert.php" method="POST">

        <label>Name</label>
        <input type="text" name="name" required>

        <label>Age</label>
        <input type="number" name="age" min="1" required>

        <button type="submit">Submit</button>

    </form>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>

        <tr>

            <td><?php echo $row['id']; ?></td>

            <td><?php echo htmlspecialchars($row['name']); ?></td>

            <td><?php echo $row['age']; ?></td>

            <td><?php echo $row['status']; ?></td>

            <td>
                <a href="toggle.php?id=<?php echo $row['id']; ?>">
                    <button type="button">Toggle</button>
                </a>
            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>