<?php

    $id=$_GET['eid'];
    include('connect.php');

    //NAME JOINED
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    // $name = $fname." ".$lname;

    //EMAIL
    $email = $_POST['email1'];

    //PASSWORD HASHED
    // $password = $_POST['password'];
    // $enc_pass = password_hash($password, PASSWORD_BCRYPT);

    //DATE
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    // $date =$day."/".$month."/".$year;

    //GRNDER
    $gender=$_POST['gender'];

    //ALL COURSE
    $acourse=$_POST['course'];
    echo $acourse;?><br><?php
    // echo $id;
    $coursess=implode(",",$acourse);


    $imgName = $_FILES['img']['name'];
    $tmpImgName = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmpImgName,"images/".$imgName);


    $qry = "UPDATE `data` SET `first_name`='$fname', `last_name`='$lname', `email`='$email', `day`='$day', `month`='$month', `year`='$year', `gender`='$gender', `course`='$coursess', `image`='$imgName' WHERE `id`= $id";

    echo $qry;

    $run = mysqli_query($conn, $qry);
        if ($run == true) {
            ?><script>
                alert('data inserted');
            </script><?php
        header('location:show.php');
        }else {
            ?><script>
            alert('data not inserted');
        </script><?php
        }
?>
<!-- <a href="/Akash_Khanra/show.php">show</a> -->
    
