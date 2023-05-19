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

$id = $_GET['id'];
$sql = "SELECT * FROM `storiespinned`  WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$theStoryPinned = $row['theStoryPinned'];

if (isset($_POST['submit'])) {
    $theStoryPinned = $_POST['theStoryPinned'];
    $sql = "UPDATE `storiespinned` set theStoryPinned ='$theStoryPinned' WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:viewpinnedStories.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    textarea {
        width: 700px;
        height: 350px;
        font-size: larger;
        border-radius: none;
        border: 2px solid black;
    }

    .edit {
        margin-top: 80px;
        margin-left: 320px;
        width: 800px;
    }

    button {
        width: 220px;
        height: 42px;
        font-size: large;

        color: white;
        background-color: #214761;
        border: 2px solid #214761;
        border-radius: 15px;
        cursor: pointer;
    }

    h2 {
        color: #214761;
    }
</style>

<body>
    <form method="post">
        <div class="edit">
            <h2>Edit Your Story:</h2>
            <textarea name="theStoryPinned"><?php echo  $theStoryPinned; ?></textarea><br><br>
            <button type="submit" name="submit"> update</button>
        </div>

    </form>
</body>


</html>