<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "stories";

// CREATE CONNECTION
$conn = new mysqli(
    $servername,
    $username,
    $password,
    $databasename
);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `storiespinned`  WHERE id = '$id'";
    $result = $conn->query($sql);
    if ($result) {
        header('location:viewpinnedStories.php');
    } else {
        die(mysqli_error($conn));
    }
}
