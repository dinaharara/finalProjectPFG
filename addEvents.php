<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $description = $_POST['description'];
  $link = $_POST['link'];
  $speaker = $_POST['speaker'];
  $starttime = $_POST['starttime'];
  $endtime = $_POST['endtime'];
  $date = $_POST['date'];

  $sql = "INSERT INTO `events` (name, description, link, speaker, starttime, endtime, date)
          VALUES (?, ?, ?, ?, ?, ?, ?)";
  
  // Using prepared statements to prevent SQL injection
  $stmt = mysqli_prepare($con, $sql);
  mysqli_stmt_bind_param($stmt, "sssssss", $name, $description, $link, $speaker, $starttime, $endtime, $date);
  
  $result = mysqli_stmt_execute($stmt);
  
  if($result)
  header('location:events.php');
  else
  die(mysqli_error($con));
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Events</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>


<style>

    .add-article-button {
        background-color: #214761;
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
    </style>

<body>      
    <div id="wrapper">
        <div class="navbar ">
         <h2>AdminPFG</h2>    
        </div>
        <a class="btn-log my-5" href="logout.php">log out</a>
    </div>

        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li >
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                </div>              
                <form method="post">
                  <div class="form-group">
                    <label for="validationServer01">Name</label>
                    <input type="text" class="form-control" placeholder="Enter name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="validationServer01">Description</label>
                    <input name="description" type="text" class="form-control" id="exampleInputPassword1" placeholder="Description">
                  </div>
                  <div class="form-group">
                    <label for="validationServer01">Link</label>
                    <input name="link" type="text" class="form-control" placeholder="Link">
                  </div>
                  <div class="form-group">
                    <label for="validationServer01">Speaker</label>
                    <input name="speaker" type="text" class="form-control" placeholder="speaker">
                  </div>
                  <div class="form-group">
                    <label for="validationServer01">Start time</label>
                    <input name="starttime" type="time" class="form-control" placeholder="starttime">
                  </div>
                  <div class="form-group">
                    <label for="validationServer01">End time</label>
                    <input name="endtime" type="time" class="form-control" placeholder="endtime">
                  </div>
                  <div class="form-group">
                    <label for="validationServer01">date</label>
                    <input name="date" type="date" class="form-control" placeholder="date">
                  </div>                
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>               
                <hr/>       
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
</html>