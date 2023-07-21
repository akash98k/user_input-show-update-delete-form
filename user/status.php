<?php
include('connect.php');
$id=$_GET['status_id'];
$status = $_GET['status'];
echo $status;
// if ($status == 1) {
//     $qry = "UPDATE `data` set `status`=$status where id=$id";
// }
$qry = "UPDATE `user` set `status`=$status where id=$id";
mysqli_query($conn, $qry);
header('location:show.php');
?>