<?php include('server.php') ?>
<html>
<head>
<style>
body
 {
 font-family: Arial, Helvetica, sans-serif;
 color:white;
 }
form 
{
border: 2px solid #000000;
}
.bg-img {
  background-image: url("bg.jpg");
  min-height: 110%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
input[type=text], input[type=password],input[type=email],input[type=phn],input[type=re-password] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #fff;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align:left;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

</style>
</head>
<body>
<div class="bg-img">
<h2 text-color:>SignUp Form</h2>
<form action="link3.php" method="post">
<?php include('errors.php') ?>
  <div class="imgcontainer">

    <img src="ava.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="name"><b>Name:</b></label></br>
    <input type="text" placeholder="Enter Name" name="name" required>
	
	<label for="uname"><b></br>Username:</b></label></br>
    <input type="text" placeholder="Enter Username" name="uname" required>
	
	<label for="Email"><b></br>Email-Id:</b></label></br>
    <input type="email" placeholder="Enter Email-Id" name="email" required>
	
	<label for="Phn"><b></br>Phone Number:</b></label></br>
    <input type="phn" placeholder="Enter Phone Number" name="phn" required>
  
    <label for="psw"><b></br>Password:</b></label></br>
    <input type="password" placeholder="Enter Password" name="psw" required></br>
	
	 <label for="psw"><b></br>Re-enter Password:</b></label></br>
    <input type="re-password" placeholder="Enter Password" name="repsw" required></br>
        
    <button type="submit">signup</button></br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#ffffff">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw" style="color:black" >Forgot <a href="#">password?</a></span>
  </div>
</form>
</div>
</body>
</html>
