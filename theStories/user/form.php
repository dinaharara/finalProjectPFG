<!DOCTYPE html>
<html>

<head>
    <title>Stories Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style>
        html,
        body {
            min-height: 100%;
            font-weight: bold;
        }

        body,
        div,
        form,
        input,

        textarea,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: black;
            line-height: 22px;
        }

        h1 {
            position: absolute;
            margin: 0;
            line-height: 42px;
            font-size: 42px;
            color: #fff;
            z-index: 2;
        }

        .testbox {
            margin-top: 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 20px;
        }

        form {
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 25px 0 #255946;
        }

        .banner {
            position: relative;
            height: 160px;
            background-color: #255946;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .banner::after {
            content: "";
            background-color: rgba(0, 0, 0, 0.3);
            position: absolute;
            width: 100%;
            height: 100%;
        }

        input,

        textarea {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input {
            width: calc(100% - 10px);
            padding: 5px;
        }



        textarea {
            width: calc(100% - 12px);
            padding: 5px;
        }

        .view {
            width: 143px;
            padding: 8px;
            border: none;
            border-radius: 5px;
            background: #255946;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-weight: normal;
            text-align: center;
            text-decoration: none;
        }

        .view:hover {
            color: white;
            text-decoration: none;

        }

        .item input:hover,
        .item textarea:hover {
            border: 1px solid transparent;
            box-shadow: 0 0 6px 0 #255946;
            color: black;

        }

        .item {
            position: relative;
            margin: 10px 0;
        }

        .btn-block {
            margin-top: 10px;
            text-align: right;
        }

        button {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #255946;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background: #255946;
        }
    </style>
</head>

<body>
    <div class="testbox">
        <form id="myForm" action="form.php" method="post">
            <div class="banner">
                <h1>Stories Form</h1>
            </div>
            <div class="item">
                <p>Name</p>
                <div class="name-item">
                    <input type="text" required name="name" placeholder="your full name" />


                    <p>Your Story</p>
                    <textarea required name="theStory" rows="8"></textarea>
                </div>

                <button id="submitForm" name="save">Submit</button>
                <a class="view" href="updatedStories.php">View Stories</a>
                <script>
                    $("#submitForm").click(function() {
                        alert("The Form has been Submitted.");
                    });
                </script>
        </form>

    </div>
    <?php
    error_reporting(0);
    ?>
    <?php


    $conn = mysqli_connect("localhost", "root", "", "stories");

    // Check connection
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }

    $date = date("Y/m/d");





    if (isset($_POST['save'])) {
        $name =  $_REQUEST['name'];
        $theStory = $_REQUEST['theStory'];
        $sql = "INSERT INTO story  VALUES (
            NULL,'$name','$theStory','$date')";
    }
    if (mysqli_query($conn, $sql)) {
        echo "";
    } else {
        echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);


    ?>