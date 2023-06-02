<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <!-- icons  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap");

* {
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.flex-r,
.flex-c {
  justify-content: center;
  align-items: center;
  display: flex;
}
.flex-c {
  flex-direction: column;
}
.flex-r {
  flex-direction: row;
}

.container {
  width: 100%;
  min-height: 100vh;
  padding: 20px 10px;
  background: #b2d2f6;
}

.login-text {
  background-color: #ffffff;
  max-width: 400px;
  min-height: 500px;
  border-radius: 10px;
  padding: 10px 20px;
}

.logo {
  margin-bottom: 20px;
}
.logo span,
.logo span i {
  font-size: 25px;
  color: #0d8aa7;
}

.login-text h1 {
  font-size: 25px;
}
.login-text p {
  font-size: 15px;
  color: #000000b2;
}

form {
  align-items: flex-start !important;
  width: 100%;
  margin-top: 15px;
}

.input-box {
  margin: 10px 0px;
  width: 100%;
}
.label {
  font-size: 16px;
  color: rgb(0, 0, 0);
  margin-bottom: 3px;
}
.input {
  background-color: #f6f6f6;
  padding: 0px 5px;
  border: 2px solid #7bafd4;
  border-radius: 10px;
  overflow: hidden;
  justify-content: flex-start;
}

input {
  border: none;
  outline: none;
  padding: 10px 5px;
  background-color: #f6f6f6;
  flex: 1;
}
.input i {
  color: #7bafd4;
}

.check span {
  color: #000000b2;
  font-size: 15px;
  font-weight: bold;
  margin-left: 5px;
}

.btn {
  color: #ffffff;
  border-radius: 30px;
  padding: 10px 15px;
  background: linear-gradient(122.33deg, #68bed1 30.62%, #1e94e9 100%);
  margin-top: 30px;
  margin-bottom: 10px;
  font-size: 16px;
  transition: all 0.3s linear;
}

.btn:hover {
  transform: translateY(-2px);
}
.extra-line {
  font-size: 15px;
  font-weight: 600;
}
.extra-line a {
  color: #0095b6;
}
.alertbox{
  position: absolute;
  top: 50px;
  /* right:20px; */
  
  
}

</style>
<body>
  <div class=" flex-r container row">
    <div class="flex-r  login-wrapper col-10">
      <div class="login-text">
        <div class="logo">
          <span><i class="fas fa-truck"></i></span>
          <span><strong>N</strong>-Cart</span>
        </div>
        <h1>Sign Up</h1>
        <p>www.nativeart.com  Welcome To Native-Ecart </p>

        <form class="flex-c" action="" method="post">
            <div class="input-box">
                <span class="label">User name</span>
                <div class=" flex-r input">
                  <input type="text" placeholder="name@abc.com" name="uname">
                  <i class="fas fa-user"></i>
                </div>
              </div>

          <div class="input-box">
            <span class="label">E-mail</span>
            <div class=" flex-r input">
              <input type="text" placeholder="name@abc.com" name="uemail">
              <i class="fas fa-at"></i>
            </div>
          </div>

          <div class="input-box">
            <span class="label">mobile</span>
            <div class="flex-r input">
              <input type="tel" placeholder="+91 99999 88888" name="umobile">
              <i class="fas fa-phone"></i>
            </div>
          </div>

          <div class="input-box">
            <span class="label">Password</span>
            <div class="flex-r input">
              <input type="password" placeholder="8+ (a, A, 1, #)" name="upassword">
              <i class="fas fa-unlock"></i>
            </div>
          </div>
          <div class="input-box">
            <span class="label">Confirm Password</span>
            <div class="flex-r input">
              <input type="password" placeholder="Re-Enter above Password" name="ucpassword">
              <i class="fas fa-key"></i>
            </div>
          </div>

          <!-- <div class="check">
            <input type="checkbox" name="" id="">
            <span>I've read and agree with T&C</span>
          </div> -->
          <button class="btn" type="submit" name="submit">Create an Account</button>
         
          <!-- <span class="extra-line">
            <span>Already have an account?</span>
            <a href="#">Sign In</a>
          </span> -->
        </form>

      </div>
    </div>
  </div>
</body>
    
</body>
</html>
<?php 
include "connection.php";

if(isset($_POST['submit'])){


  $name=$_POST['uname'];
$email=$_POST['uemail'];
$mobile=$_POST['umobile'];
$password=$_POST['upassword'];
$cpassword=$_POST['ucpassword'];

$check="SELECT * FROM signup WHERE email='{$email}'";
$res=mysqli_query($conn,$check);

$passcode=password_hash($password,PASSWORD_DEFAULT);


// echo $passcode;


// die();
if(mysqli_num_rows($res)>0){
  echo "<div class='alert alert-warning alertbox' role='alert'>
  Email Already Exists <a href='signup.php' class='alert-link'>Sign-Up </a>With new Email
</div>'";
}
else{
  if($password==$cpassword){

$sql="INSERT INTO signup(username,email,mobile,password) VALUES('$name','$email','$mobile','$passcode')";
$ins=mysqli_query($conn,$sql);
if($ins==true){
  include "success.php";
}
else{
  echo"Failed to signup";
}

  }
  else{
    echo "<div class='alert alert-danger alertbox' role='alert'>
    Enter Same Password 
  </div>'";
  }

}

}



?>