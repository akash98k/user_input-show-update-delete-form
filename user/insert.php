<?php
if (isset($_POST['submit'])) {
    include('connect.php');

    //NAME JOINED
    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    // $name = $fname." ".$lname;

    //EMAIL
    $email = $_POST['email1'];

    //PASSWORD HASHED
    $password = $_POST['password'];
    $enc_pass = password_hash($password, PASSWORD_BCRYPT);

    //DATE
    $day=$_POST['day'];
    $month=$_POST['month'];
    $year=$_POST['year'];
    // $date =$day."/".$month."/".$year;

    //GRNDER
    $gender=$_POST['gender'];

    //ALL COURSE
    $acourse=$_POST['course'];
    $course=implode(",",$acourse);


    $imgName = $_FILES['img']['name'];
    $tmpImgName = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmpImgName,"images/".$imgName);

    $status = 1;


    $qry = "INSERT INTO `user`(`first_name`, `last_name`, `email`, `password`, `day`, `month`, `year`, `gender`, `course`, `image`, `status`) VALUES('$fname', '$lname', '$email', '$enc_pass', '$day', '$month', '$year', '$gender', '$course', '$imgName', '')";
    echo $qry;

    $run = mysqli_query($conn, $qry);
        echo $qry;
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
}
?>
<!-- <a href="/Akash_Khanra/show.php">show</a> -->
    
