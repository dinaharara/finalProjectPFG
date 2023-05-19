<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Events</title>
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
    .word-limit {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
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
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <button class="add-article-button"><a  style="color: white;" class="text-light" href="addEvents.php">Add New Events</a>
                    </button>
                    </div>
                </div>              
                <table style="width:100%">
                    <thead>
                      <tr class="word-wrap">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Google Map Link</th>
                        <th>Speaker</th>
                        <th>StartTime</th>
                        <th>EndTime</th>
                        <th>Date</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      $sql = "SELECT * FROM `events`";
                      $result = mysqli_query($con,$sql);
                      if($result){
                        while($row=mysqli_fetch_assoc($result)){
                          $id=$row['id'];
                          $name=$row['Name'];
                          $description=$row['Description'];
                          $link=$row['link'];
                          $speaker=$row['speaker'];
                          $starttime=$row['starttime'];
                          $endtime=$row['endtime'];
                          $date=$row['date'];

                          echo'
                          <tr>
                        <td scope="row">'.$id.'</td>
                        <td scope="row">'.$name.'</td>
                        <td scope="row">'.$description.'</td>
                        <td scope="row">'.$link.'</td>
                        <td scope="row">'.$speaker.'</td>
                        <td scope="row">'.$starttime.'</td>
                        <td scope="row">'.$endtime.'</td>
                        <td scope="row">'.$date.'</td>
                        <td class="actions">
                          <button class="update"><a href="updateEvents.php?updatEventeid='.$id.'"style="color: white;">Update</a></button>
                          <button class="delete"><a href="daleteEvents.php?deleteeventsid='.$id.'" style="color: white;">Delete</a></button>
                        </td>
                          </tr>
                          ';
                        }
                      }
                      ?>
                     
                    </tbody>
                  </table>    
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
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
<script>
  var cell = document.getElementById('cell');
  var maxWords = 5; // Set the maximum number of words

  var words = cell.textContent.split(' ');
  var limitedWords = words.slice(0, maxWords).join(' ');
  
  cell.textContent = limitedWords;
</script>
    
</html>