<?php

$host = "sql103.infinityfree.com";
$user = "if0_42395389";
$password = "123RamaWork456";
$database = "if0_42395389_task_2";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>