<?php
    include('connect.php');
    $id=$_GET['uid'];
    $qry = "SELECT * FROM `user` WHERE id = $id";
    $run = mysqli_query($conn, $qry);
    $data = mysqli_fetch_assoc($run);
    $courses = $data['course'];
    $courses1 = explode(",", $courses);
   ?>
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
</head>
<body> 
    <div class="container" style="align:center">
        <form method="post" action="update.php?eid=<?php echo $data['id']?>" style="padding-top:4%" enctype="multipart/form-data">
            <table class="table table-bordered" style="width:40%; text-align:center;" align="center">
                <tr>
                    <td>First Name:</td>
                    <td>
                        <input type="text" id="firstName" name="first_name"  value="<?php echo $data['first_name']?>" required>
                        <!-- <p id="checkFirstName" style="color: red;">**Please use Alphabets only</p> -->
                    </td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td>
                        <input type="text" id="lastName" name="last_name" value="<?php echo $data['last_name']?>" required>
                        <!-- <p id="checkLastName" style="color: red;">**Please use Alphabets only</p> -->
                    </td>
                </tr>
                
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="text" name="email1" id="email1" value="<?php echo $data['email']?>"/>
                        <!-- <p id="checkFmailFormat" style="color: red;">enter valid email.</p> -->
                    </td>
                </tr>


                <!-- <tr>
                    <td>Enter Password:</td>
                    <td>
                        <input type="password" id="new_password" name="password" required>
                        <p id="checkPassSize" style="color: red;">**Password must be between 8 to 10 characters.</p>
                        <p id="checkPassUpper" style="color: red;">**Please Enter an Upper Case</p>
                        <p id="checkPassLower" style="color: red;">**Please Enter an Lower Case</p>
                        <p id="checkPassNumeric" style="color: red;">**Please Enter a Number</p>
                        <p id="checkPassSpecial" style="color: red;">**Please Enter a Special character</p>
                        
                    </td>
                </tr>
                <tr>
                    <td>Conform Password:</td>
                    <td>
                        <input type="password" id="new_conform_password" name="conform_password" required>
                        
                        <!- Check Password Match ->
                        <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch" required>
                        <div class="registrationFormAlert" style="color:red;" id="CheckPasswordNotMatch" required>
                    </td> -->
                <tr>
                    <td>previous DOB :</td>
                    <td><?php echo $data['day']."/".$data['month']."/".$data['year']?></td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td>
                    <select name="day" id="day" required>
                        <option value="">Day</option>
                        <!-- <option value='1'>1</option> -->
                        <?php
                            for ($d=1; $d <= 31; $d++) { 
                                if ($data['day'] == '$d') {
                        
                                echo "<option value='$d'  selected>$d</option>";
                                }
                            }
                        ?>
                    </select>
                    <select name="month" id="month" required>
                        <option value="">Month</option>
                        <option value="01"
                        <?php
                        if ($data['month'] == "01") {
                            echo "selected";
                        }
                        ?>
                        >JAN</option>
                        <option value="02"
                        <?php
                        if ($data['month'] == "02") {
                            echo "selected";
                        }
                        ?>
                        >FEB</option>
                        <option value="03"
                        <?php
                        if ($data['month'] == "03") {
                            echo "selected";
                        }
                        ?>
                        >MAR</option>
                        <option value="04"
                        <?php
                        if ($data['month'] == "04") {
                            echo "selected";
                        }
                        ?>
                        >APR</option>
                        <option value="05"
                        <?php
                        if ($data['month'] == "05") {
                            echo "selected";
                        }
                        ?>
                        >MAY</option>
                        <option value="06"
                        <?php
                        if ($data['month'] == "06") {
                            echo "selected";
                        }
                        ?>
                        >JUNE</option>
                        <option value="07"
                        <?php
                        if ($data['month'] == "07") {
                            echo "selected";
                        }
                        ?>
                        >JULY</option>
                        <option value="08"
                        <?php
                        if ($data['month'] == "08") {
                            echo "selected";
                        }
                        ?>
                        >AUG</option>
                        <option value="09"
                        <?php
                        if ($data['month'] == "09") {
                            echo "selected";
                        }
                        ?>
                        >SEP</option>
                        <option value="10"
                        <?php
                        if ($data['month'] == "10") {
                            echo "selected";
                        }
                        ?>
                        >OCT</option>
                        <option value="11"
                        <?php
                        if ($data['month'] == "11") {
                            echo "selected";
                        }
                        ?>
                        >NOV</option>
                        <option value="12"
                        <?php
                        if ($data['month'] == "12") {
                            echo "selected";
                        }
                        ?>
                        >DEC</option>
                    </select>
                    <select name="year" id="year" required>
                        <option value="">Year</option>
                        <!-- <option value='2000'>2000</option> -->
                        <?php
                            for ($y=2000; $y<= 2023 ; $y++) { 
                                echo "<option value='$y'>$y</option>";
                            }
                        ?>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="male" required
                        <?php
                        if ($data['gender']=="male") {
                            echo "checked";
                        }
                        ?>
                        >Male
                        <input type="radio" name="gender" value="female" required
                        <?php
                        if ($data['gender']=="female") {
                            echo "checked";
                        }
                        ?>
                        >Female
                        <input type="radio" name="gender" value="other" required
                        <?php
                        if ($data['gender']=="other") {
                            echo "checked";
                        }
                        ?>
                        >Others
                    </td>
                </tr>
              
                <tr>
                    <td>Course:</td>
                    <td>
                        <input type="checkbox" name="course[]" id="bca" value="bca"
                        <?php
                        if (in_array("bca", $courses1)) {
                            echo "checked";
                        }
                        ?>
                        >BCA
                        <input type="checkbox" name="course[]" id="bsc" value="bsc"
                        <?php
                        if (in_array("bsc", $courses1)) {
                            echo "checked";
                        }
                        ?>
                        >B.Sc
                        <input type="checkbox" name="course[]" id="mca" value="mca"
                        <?php
                        if (in_array("mca", $courses1)) {
                            echo "checked";
                        }
                        ?>
                        >MCA
                        <input type="checkbox" name="course[]" id="msc" value="msc"
                        <?php
                        if (in_array("msc", $courses1)) {
                            echo "checked";
                        }
                        ?>
                        >M.Sc
                        <input type="checkbox" name="checkAll" id="checkAll" value="checkAll">select All<br>
                    </td>
                </tr>

                <tr>
                    <td>Image:</td>
                    <td>
                    <img src="images/<?php echo $data['image']?>" style="height: 50px; width : 50px;" alt="">
                        <input type="file" name="img" accept="image/*" id="image-upload" value="<?php echo $data['image']?>" required>
                        <!-- preview the uploading image -->
                        <img id="image-container" />
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <a href="show.php">
                            <button type="button" class="btn btn-warning" style="margin-right:20px;">Cancel</button>
                        </a>
                        <input type="submit" class="btn btn-success" name="submit" value="Update"><br>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>



<script>
$('#checkFmailFormat').hide();
$('#email1').keyup(function(){
    checkFmailFormat();
});

function checkFmailFormat(){
    let emailValue = $('#email1').val();
    if (emailValue.match(/^\S+@\S+\S+\.\S+\S+$/)) {
        $('#checkFmailFormat').hide();
    }
    else{
        $('#checkFmailFormat').show();
    }
}



document.getElementById('checkAll').onclick = function() {
    var checkboxes = document.getElementsByName('course[]');
    for (var checkbox of checkboxes) {
        checkbox.checked = this.checked;
    }
}


    /* This function will call when page loaded successfully */     
    $(document).ready(function(){
         
         /* This function will call when onchange event fired */         
         $("#image-upload").on("change",function(){
  
           /* Current this object refer to input element */          
           var $input = $(this);
           var reader = new FileReader(); 
           reader.onload = function(){
                 $("#image-container").attr("src", reader.result);
           } 
           reader.readAsDataURL($input[0].files[0]);
         });
          
          
         /* This function will call when upload button clicked */        
         $("#upload-btn").on("click",function(){
             /* file validation logic goes here if required */      
             /* image uploading logic goes here */
             alert("Upload logic need to be write here...");
  
         });
          
         /* This function will call when cancel button clicked */        
         $("#cancel-btn").on("click",function(){
             /* Reset input element */
             $('#image-upload').val("");
   
             echo $id;
             /* Clear image preview container */
             $('#image-container').attr("src","");
         });
          
       });



    //name validation
    $('#checkFirstName').hide();
    $('#checkLastName').hide();

    //FIRST NAME VALIDATION
    $('#firstName').keyup(function(){
        validateFirstName();
    });
    function validateFirstName(){
        let firstNameValue = $('#firstName').val();
        if (firstNameValue.match(/([0-9,!,%,&,@,#,$,^,*,?,_,~])/)) {
            $('#checkFirstName').show();
        }
        else if (firstNameValue.match(/([ ])/)){
            $('#checkFirstName').hide();
        }
        else{
            $('#checkFirstName').hide();
        }
    }
    //LAST NAME VALIDATION
    $('#lastName').keyup(function(){
        validateLastName();
    });
    function validateLastName(){
        let lastNameValue = $('#lastName').val();
        if (lastNameValue.match(/([0-9,!,%,&,@,#,$,^,*,?,_,~])/)) {
            $('#checkLastName').show();
        }else{
            $('#checkLastName').hide();
        }
    }

    
    // VALID PASSWORD
    $('#checkPassSize').hide();
    $('#checkPassUpper').hide();
    $('#checkPassLower').hide();
    $('#checkPassNumeric').hide();
    $('#checkPassSpecial').hide();
    let passwordError = true;
    $('#new_password').keyup(function(){
        validatePassword();
    });

    function validatePassword() {
        let passwordValue = $('#new_password').val();
        if (passwordValue.length == "") {
            $('#checkPassSize').show();
            passwordError = false;
            return false;
        }
    //LENGTH
        if (passwordValue.length < 8 || passwordValue.length >10) {
            $('#checkPassSize').show();
        }
        else{
            $('#checkPassSize').hide();
        }
    //UPPER CASE
        if (passwordValue.match(/([A-Z])/)) {
            $('#checkPassUpper').hide();
        }
        else{
            $('#checkPassUpper').show();
        }
    //LOWER CASE
        if (passwordValue.match(/([a-z])/)) {
            $('#checkPassLower').hide();
        }
        else{
            $('#checkPassLower').show();
        }
    //NUMERIC
        if (passwordValue.match(/([0-9])/)) {
            $('#checkPassNumeric').hide();
        }
        else{
            $('#checkPassNumeric').show();
        }
    //special
        if (passwordValue.match(/([!,%,&,@,#,$,^,*,?,_,~])/)) {
            $('#checkPassSpecial').hide();
        }
        else{
            $('#checkPassSpecial').show();
        }
    }


    // MATCH PASSWORD
    function checkPassword() {
        var password = $("#new_password").val();
        var conform_password = $("#new_conform_password").val();

        if (password != conform_password) {
            $("#CheckPasswordNotMatch").html("password not match");
        }
        else{
            $("#CheckPasswordMatch").html("password match");
        }
    }
    $(document).ready(function () {
        $("#new_conform_password").keyup(checkPassword);
    });


</script>
