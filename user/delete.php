<?php
    include('connect.php');
    $id=$_GET['uid'];
    $qry = "Delete FROM `data` WHERE `id` = $id";
    $run = mysqli_query($conn, $qry);
    if ($run == true) {
        ?><script>
            alert("User deleted successfully..")
            window.open('show.php','_self');
        </script><?php
    }
   ?>
   