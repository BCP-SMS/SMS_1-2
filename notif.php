<?php
include("php/db_connect.php");

$sql = "UPDATE podms_reports SET status='1'";
$res = mysqli_query($conn, $sql);
if ($res) {
  echo "Success";
} else {
  echo "Failed";
}
  ?>