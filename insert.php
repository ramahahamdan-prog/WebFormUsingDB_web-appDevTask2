<?php

include "config.php";

$name = $_POST['name'];
$age = $_POST['age'];

$sql = "INSERT INTO students (name, age) VALUES ('$name', '$age')";

if (!mysqli_query($conn, $sql)) {
    die("Insert Error: " . mysqli_error($conn));
}

header("Location: index.php");
exit();

?>