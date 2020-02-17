<?php
include "connection.php";
 ?>
<!DOCTYPE html>
<html>
<head>
  <title> Registration Page</title>  
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="Css/index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<script>
      function lettersOnly(input){
       var regex= /[^a-z s]/gi;

       input.value = input.value.replace(regex, "");
      }
    </script>
    <script>
      function digitsOnly(input){
       var regex= /[^0-9]/g;
       input.value = input.value.replace(regex, "");
      }
    </script>
<body style="background-color: #004528">
<div class="RegistrationBox">
  <form method="post">
  <h2>Register Here:</h2>
  <p class="pName">Name:</p>
  <input type="text" name="name" placeholder="Enter your Name" required="" class="inputName" autocomplete="off" autocomplete="off" onkeyup="lettersOnly(this)">
  <p class="pEmail">E-Mail Id:</p>
  <input type="email" name="email" placeholder="Enter your Email-Id" required="" class="inputEmail" autocomplete="off">
  <p class="pMN">Mobile Number:</p>
  <input type="text" name="mobile" placeholder="Enter your 10 digit Mobile Number" required="" class="inputMN" pattern="[0-9]{10}" minlength="10" maxlength="10"autocomplete="off" onkeyup="digitsOnly(this)">
  <p class="pDOB">Date Of Birth:</p>
  <input type="date" name="dob" placeholder="Enter your Date Of Birth" required="" class="inputDOB" autocomplete="off" id='datepicker'>
  <p class="pPC">Pin Code:</p>
  <input type="text" name="pincode" placeholder="Enter your 6 digit Pin Code" required="" class="inputPC" autocomplete="off" pattern="[0-9]{6}" minlength="6" maxlength="6"autocomplete="off" onkeyup="digitsOnly(this)">
  <input class="submitbutton" type="submit" name="Register" value="Register" >

  </form>
</div>
<?php
if (isset($_POST['Register'])) {
mysqli_query($db,"INSERT INTO `users` (`Name`, `E_Mail`, `Mobile`, `DOB`, `Pin`) VALUES ('$_POST[name]', '$_POST[email]', '$_POST[mobile]', '$_POST[dob]', '$_POST[pincode]');");  
 ?>
<script type="text/javascript">
  alert("Account Created");

</script>

 <?php 


}
?>
</body>
</html>