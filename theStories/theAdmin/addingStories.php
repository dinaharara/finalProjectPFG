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

        .move {
            font-weight: bold;
            width: 120px;
            border: none;
            color: white;
            border-radius: 15px;
            background-color: #214761;
            display: inline-block;
            text-align: center;


        }

        .move:hover {
            text-decoration: none;
            color: white;
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
                        <h2>Adding Pinned Stories</h2>
                    </div>
                </div>
                <hr />
                <form id="myForm" action="addingStories.php" method="post">
                    <div class="row">

                        <div class="col-lg-12 ">
                            <label for="theStoryPinned" class="justEdit">Add the pinned story form here:</label>


                            <br>
                            <br>
                            <textarea required name="theStoryPinned" class="thestyle" rows="8"></textarea>
                            <br>
                            <button class="adding" id="submitForm" name="save">Add</button>
                            <a class="move" href="viewpinnedStories.php">View Stories</a>

                            <style>
                                .adding {
                                    font-weight: bold;
                                    width: 120px;
                                    border: none;
                                    color: white;
                                    border-radius: 15px;
                                    background-color: #214761;

                                    display: inline-block;
                                }

                                .justEdit {
                                    font-size: 20px;
                                }

                                .thestyle {
                                    width: 400px;
                                    height: 300px;
                                    padding: 0px;
                                    padding: 4px;
                                }
                            </style>

                        </div>
                    </div>
                </form>

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
        <?php
        error_reporting(0);
        ?>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "stories");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        if (isset($_POST['save'])) {
            $theStoryPinned =  $_REQUEST['theStoryPinned'];

            $sql = "INSERT INTO storiespinned  VALUES (
            NULL,'$theStoryPinned')";
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
    </body>

    </html>
<?php
} else {
    header("Location: login.php");
    exit();
}
?>