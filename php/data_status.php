<?php  
 //Database connectivity  
 include_once ("db_connect.php");
 //Get Update id and status  
 if (isset($_GET['id']) && isset($_GET['status'])) {  
      $id=$_GET['id'];  
      $status=$_GET['status'];  
      mysqli_query($conn, "UPDATE `podms_reports` SET `status`='$status' WHERE id='$id'");  
      header("location:../reports.php");  
 
 }  
 ?> 