<?php
include 'connect.php';
if(isset($_GET['deleteeventsid'])){
    $id=$_GET['deleteeventsid'];
    $sql="delete from `events` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:events.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}
?>