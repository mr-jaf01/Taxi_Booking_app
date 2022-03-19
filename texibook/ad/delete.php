<?php 
include('db/connect_db.php');
$texid = $_GET['texid'];
$delete = "DELETE FROM texis WHERE texid='$texid'";
if(mysqli_query($conn, $delete)){
    header('location:admin.php?page=viewtexis');
}else{
    echo 'Can not Delete Driver and Texi Info';
}