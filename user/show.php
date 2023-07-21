<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <title>form</title>
    <style>
      .text{
        text-align:center;
      }
    </style>
</head>
<body> 
<?php
    include('connect.php');
    $qry = "SELECT * FROM `user`";
    $run = mysqli_query($conn, $qry);?>
    <table class="table" style="width:80%; text-align:center;" align="center" >
    <tr>
      <td style="background-color:none;" colspan=10 align=right><a href="index.php" style="margin-top:5px;"><button type="button" class="btn btn-primary">Enter new user</button></a></td>
    </tr>
        <tr style="background-color:#ebebeb">
        <td><h5>ID</h5></td>
        <td><h5>Name</h5></td>
        <td><h5>Email</h5></td>
        <td><h5>Date of birth</h5></td>
        <td><h5>Gender</h5></td>
        <td><h5>Course</h5></td>
        <td><h5>Image</h5></td>
        <td><h5>Status</h5></td>
        <td><h5>Update one</h5></td>
        <td><h5>Delete one</h5></td>
        </tr>
        <?php while ($data = mysqli_fetch_assoc($run)) {
        ?>
        <tr style="background-color:none;">
            <td class="text"  style="width:5%;"align="center"><h5><?php echo $data['id']?></h5></td>
            <td class="text" align="center"><h5><?php echo $data['first_name']." ".$data['last_name']?></h5></td>
            <td class="text" align="center"><h5><?php echo $data['email']?></h5></td>
            <td class="text" align="center"><h5><?php echo $data['day']."/".$data['month']."/".$data['year']?></h5></td>
            <td class="text" align="center"><h5><?php echo $data['gender']?></h5></td>
            <td class="text" align="center"><h5><?php echo $data['course']?></h5></td>
            <td class="text" align="center"><img src="images/<?php echo $data['image']?>" class="object-fit-cover border rounded" style="height: 50px; width : 50px;" alt=""></td>
            
            <td class="text" style="width:10%;" align="center"><a href="delete.php?uid=<?php echo $data['id']?>">
            <?php
            if ($data['status']==1) {
              echo '<p><a href="status.php?status_id='.$data['id'].'&status=0"><button type="button" class="btn btn-success">Enabel</button></a></td></p>';
            }
            else{
              echo '<p><a href="status.php?status_id='.$data['id'].'&status=1"><button type="button" class="btn btn-danger">Desable</button></a></td></a></p>';
            }
            ?>
           
            <td class="text" style="width:10%;" align="center"><a href="updateform.php?uid=<?php echo $data['id']?>"><button type="button" class="btn btn-primary">Update</button></a></td>
            <td class="text" style="width:10%;" align="center"><a href="delete.php?uid=<?php echo $data['id']?>"><button type="button" class="btn btn-danger">Delete</button></a></td>

        </tr>
        <?php
        }?>
    </table>
    <!-- <script>
		function save(){	 
		  var userPreference;

			if (confirm("Do you want to Delete User?") == true) {
				header("delete.php?uid=<?php echo $data['id']?>");
			} else {
				userPreference = "Save Canceled!";
			}

			document.getElementById("msg").innerHTML = userPreference; 
		}
    </script> -->