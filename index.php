<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
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
    
    th, td {
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
    .btn-log{
      background:#214761;
      color:#fff;
      border-radius: 10px;
      display:block;
      margin:20px 10px;
      padding:5px 15px ;
    }
    .btn-log:hover{
      color:#fff;
    }
    #wrapper {
    width: 100%;
    display: flex;
    justify-content: space-between;
    /* margin-top:30px; */
}
.social-share {
    width: 60px;
    position: fixed;
    right: 0;
    top: 50%;
    /* margin-top: -90px; */
    transform: translateY(-50%);
}

.social-share a {
    display: block;
    width: 60px;
    height: 60px;
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    margin-bottom: 5px;
    border-radius: 50%;
    font-size: 22px;
    font-family: 'ABC';
}

.social-share a.fb { background: #3b5998; }
.social-share a.tw { background: #1da1f2; }
.social-share a.in { background: #c32aa3; }
    </style>

<body>      
    <div id="wrapper">
        <div class="navbar ">
         <h2>AdminPFG</h2>    
        </div>
        <a class="btn-log my-5" href="logout.php">log out</a>
    </div>

        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a href="index.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="articles.php"><i class="fa fa-edit "></i>Artices</a>
                    </li>
                    <li>
                        <a href="events.php"><i class="fa fa-edit "></i>Events</a>
                    </li>
                    <li>
                        <a href="videos.php"><i class="fa fa-edit "></i>Videos</a>
                    </li>
                    <li>
                        <a href="theStories/theAdmin/addingStories.php"><i class="fa fa-table "></i>Adding Stories</a>
                    </li>
                     <li>
                        <a href="theStories/theAdmin/viewpinnedStories.php"><i class="fa fa-edit "></i>View Pinned Stories</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome Admin ! </strong> 
                        </div>    
                    </div>
                </div>  
                <div class="row text-center pad-top">
                  <div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="addArtic.php" >
                         <i class="fa fa-key fa-5x"></i>
                      <h4>Add Articles</h4>
                      </a>
                      </div>                   
                  </div>                 
                  <div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="addEvents.php" > <i class="fa fa-key fa-5x"></i>
                      <h4>Add Events</h4>
                      </a>
                      </div>
                               
                  </div>
                  <div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="addVideos.php" ><i class="fa fa-key fa-5x"></i>
                      <h4>Add Videos</h4>
                      </a>
                      </div>   
                  </div>
                  <div class="col-lg-3 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="addVideos.php" ><i class="fa fa-key fa-5x"></i>
                      <h4>Add Stories</h4>
                      </a>
                      </div>   
                  </div>
                  <!-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" ><i class="fa fa-users fa-5x"></i>
                      <h4>See Users</h4>
                      </a>
                      </div>
                     
                     
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" ><i class="fa fa-key fa-5x"></i>
                      <h4>Admin </h4>
                      </a>
                      </div>                    
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="blank.html" ><i class="fa fa-comments-o fa-5x"></i>
                      <h4>Support</h4>
                      </a>
                      </div>               
                  </div> -->
              </div>                     
            </div>
         </div>
        <div class="footer">
             <div class="row">
                <div class="col-lg-12" >
                    &copy;  2023 Admin PFG | Design by: Dina Harara
                </div>
              </div>
        </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
<!-- <footer>
        <div class="foot2 space-between text-center">
            <p>
                © Copyright 2023 by PFG
            </p>
            <p>
                Terms & Conditions / Privacy Policy / Sitemap
            </p>
        </div>
        <div class="social-share">
            <a class="fb" href="https://www.facebook.com/Palestinian-Farmers-Guide-100520589712831" target="_blank">F</a>
            <a class="tw" href="https://twitter.com/GuideFarme" target="_blank">T</a>
            <a class="in" href="https://www.instagram.com/palestinian_farmers_guide/?next=%2F" target="_blank">I</a>
        </div>
</footer> -->
</html>

<?php
} else {
    header("Location: login.php");
    exit();
}
?>