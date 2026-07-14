<?php

include "config.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT status FROM students WHERE id = $id");

if (!$result) {
    die(mysqli_error($conn));
}

$row = mysqli_fetch_assoc($result);

$newStatus = ($row['status'] == 0) ? 1 : 0;

mysqli_query($conn, "UPDATE students SET status = $newStatus WHERE id = $id");

header("Location: index.php");
exit();

?>