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
    .add-article-button {
      background-color: #4CAF50;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin: 20px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin-bottom: 20px;
    }

    th,
    td {
      text-align: left;
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
      font-weight: bold;
    }

    tr:hover {
      background-color: #f5f5f5;
    }

    .actions {
      white-space: nowrap;
    }

    .actions button {
      margin-right: 5px;
    }

    .actions button.update {
      border: 0;
      background-color: #4CAF50;
      color: white;
    }

    .actions button.delete {
      border: 0;
      background-color: #f44336;
      color: white;
    }

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