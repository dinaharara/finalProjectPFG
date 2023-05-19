<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

?>
    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Simple Responsive Admin</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="../../assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="../../assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>


    <style>
        .logout {
            padding-right: 20px;
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
            color: #214761;
            font-size: x-large;
            font-weight: bold;
        }

        .logout:hover {
            text-decoration: none;

        }

        table {
            margin-top: 30px;
            border: 1px solid black;
            text-align: center;
            margin-left: 70px;

        }

        td {
            /* padding: 10px; */
            text-align: center;
            /* width: 495px; */
            height: 200px;
            border: 1px solid #214761;

        }

        th {
            background-color: #214761;
            color: white;
            font-size: larger;
            text-align: center;
            border: 1px solid white;
            width: 300px;
            height: 70px;

        }

        .btn {
            border: 3px solid red;
            color: white;
            background-color: red;
            font-weight: bold;
            border-radius: 15px;
            margin-left: 6px;
            width: 100px;

        }

        .btnn {
            background-color: blue;
            border: 3px solid blue;
            color: white;
            border-radius: 15px;
            font-weight: bold;
            display: inline-block;
            width: 100px;




        }



        .btn:hover {
            color: red;
            background-color: white;
        }

        .btnn:hover {
            color: blue;
            background-color: white;
            text-decoration: none;
        }

        .move {
            width: 200px;
            height: 50px;
            padding: 5px;
            background-color: #214761;
            color: white;
            border: 2px solid #214761;
            border-radius: 15px;
            display: inline-block;
            text-align: center;
            margin-bottom: 20px;
            margin-left: 55px;

        }


        .move:hover {
            text-decoration: none;
            color: white;
            font-size: larger;
        }
    </style>

    <body>
        <div id="wrapper">
            <div class="navbar">
                <h2>AdminPFG</h2>
            </div>
            <a class="logout" href="logout.php">Log Out</a>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="index.php"><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="../../articles.php"><i class="fa fa-edit "></i>Artices</a>
                    </li>
                    <li>
                        <a href="../../events.php"><i class="fa fa-edit "></i>Events</a>
                    </li>
                    <li>
                        <a href="../../videos.php"><i class="fa fa-edit "></i>Videos</a>
                    </li>
                    <li>
                        <a href="addingStories.php"><i class="fa fa-table "></i>Adding Stories</a>
                    </li>
                    <li>
                        <a href="viewpinnedStories.php"><i class="fa fa-edit "></i>View Pinned Stories</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Review</h2>
                    </div>
                    <div class="col-lg-12">
                        <a class="move" href="addingStories.php">Add New Pinned Story</a>
                    </div>

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

                    // SQL QUERY
                    $query = "SELECT * FROM `storiespinned`;";

                    // FETCHING DATA FROM DATABASE
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                        echo  "<table>" . "<tr>" . "<th>" . "id" . "</th>" . "<th>" . "the story" . "</th>" . "<th>" . "actions" . "</th>" . "</tr>";
                        while ($row = $result->fetch_assoc()) {
                            echo  "<tr>" . "<td>" . $row['id'] . "</td>" . "<td>" . $row['theStoryPinned'] . "</td>" . "<td>" . "<a href = 'update.php?id=" . $row['id'] . "' class='btnn'>Update</a>" . "<a href = 'delete.php?id=" . $row['id'] . "' class='btn'>Delete</a>"  . "</td>" . "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "<div class='nothing'> nothing added yet</div>";
                    }




                    $conn->close();

                    ?>
                </div>
            </div>
            <!-- /. ROW  -->


            <!-- /. ROW  -->
        </div>
        </div>
        </div>
        <div class="footer">
            <div class="row">
                <div class="col-lg-12">
                    &copy; 2023 Admin PFG | Design by: Dina Harara
                </div>
            </div>
        </div>
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>
    </body>

    </html>
<?php
} else {
    header("Location: login.php");
    exit();
}
?>