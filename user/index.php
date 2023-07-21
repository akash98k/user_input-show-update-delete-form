


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
    <div class="container" style="align:center;padding-top:30px;">
        <form method="post" action="insert.php" enctype="multipart/form-data">
            <table class="table table-bordered" style="width:50%; text-align:center;" align="center">
                <tr>
                    <td>First Name:</td>
                    <td>
                        <input type="text" id="firstName" name="first_name" style="width:30;" required>
                        <p id="checkFirstName" style="color: red;">**Please use Alphabets only</p>
                    </td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td>
                        <input type="text" id="lastName" name="last_name" required>
                        <p id="checkLastName" style="color: red;">**Please use Alphabets only</p>
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td>
                        <input type="text" name="email1" id="email1"/>
                        <p id="checkFmailFormat" style="color: red;">enter valid email.</p>
                    </td>
                </tr>


                <tr>
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
                        
                        <!-- Check Password Match -->
                        <div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch" required>
                        <div class="registrationFormAlert" style="color:red;" id="CheckPasswordNotMatch" required>
                    </td>
                </tr>
                    <td>Date of Birth:</td>
                    <td>
                    <select name="day" id="day" required>
                        <option value="">Day</option>
                        <!-- <option value='1'>1</option> -->
                        <?php
                            for ($d=1; $d <= 31; $d++) { 
                                echo "<option value='$d'>$d</option>";
                            }
                        ?>
                    </select>
                    <select name="month" id="month" required>
                        <option value="">Month</option>
                        <option value="01">JAN</option>
                        <option value="02">FEB</option>
                        <option value="03">MAR</option>
                        <option value="04">APR</option>
                        <option value="05">MAY</option>
                        <option value="06">JUNE</option>
                        <option value="07">JULY</option>
                        <option value="08">AUG</option>
                        <option value="09">SEP</option>
                        <option value="10">OCT</option>
                        <option value="11">NOV</option>
                        <option value="12">DEC</option>
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
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" name="gender" value="male" required>Male
                        <input type="radio" name="gender" value="female" required>Female
                        <input type="radio" name="gender" value="other" required>Other
                    </td>
                </tr>
                <tr>
                    <td>Course:</td>
                    <td>
                        <input type="checkbox" name="course[]" id="bca" value="bca">BCA
                        <input type="checkbox" name="course[]" id="bsc" value="bsc">B.Sc
                        <input type="checkbox" name="course[]" id="mca" value="mca">MCA
                        <input type="checkbox" name="course[]" id="msc" value="msc">M.Sc<br>
                        <input type="checkbox" name="checkAll" id="checkAll" value="checkAll">select All
                    </td>
                </tr>
                    <td>Image:</td>
                    <td>
                        <input type="file" name="img" accept="image/*" id="image-upload" required><br>
                        <!-- preview the uploading image -->
                        <img id="image-container" />
                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                    <input type="submit" class="btn btn-info" name="submit" value="Submit">
                    </td>
                </tr>
                <tr>
                    <td colspan=2 align=right>
                        <a href="show.php">
                            <button type="button" class="btn btn-danger">Show All</button>
                        </a>
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
        }else{
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
