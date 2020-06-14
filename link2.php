<?php

session_start();

if(isset($_SESSION['uname']))
{
         $_SESSION['msg']="You must log in first to view this page";
         header("location :link4.php");
}

if(isset($_GET['logout']))
{
session_destroy();
unset($_SESSION['uname']);
header("location :link4.php");
}

?>

<html>
<head>
<style>
.bg-img {
  background-image: url("bg.jpg");
  min-height: 110%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.text {
  color: #f1f1f1;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align:center;
}


</style>
<body>
<div class="bg-img">
<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FKolkata&amp;src=c2lyaXNoYTAzMzdAZ21haWwuY29t&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZW4uaW5kaWFuI2hvbGlkYXlAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%237986CB" 
style="border:solid 1px #777" width="400" height="400" frameborder="0" scrolling="no"></iframe>
<div class="text">
<h1>WELCOME!</h1>

<?php
if(isset($_SESSION['success'])): ?>

<div>
<h3>
   <?php
       echo $_SESSION['success'];
       unset($_SESSION['success']);
    ?>
</h3>
<?php endif ?>


<?php if(isset($_SESSION['uname'])): ?>

<h3>Good day<strong><?php echo $_SESSION['uname']; ?></strong></h3>
<button><a href="link2.php?logout='1'"></a></button>

<?php endif ?>

<h1>Enter your details</h1>
<form action="/action_page.php">
  <p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>

  <br>  
  <p>Please select your subject:</p>
  <input type="radio" id="javascript" name="javascript" value="javascript">
  <label for="javascript">Javascript</label><br>
  <input type="radio" id="Php" name="Php" value="Php">
  <label for="Php">Php</label><br>
  <input type="radio" id="Html" name="Html" value="Html">
  <label for="Html">Html</label>

  <br>  

  <p>Please select your slot:</p>
  <input type="radio" id="A-Slot" name="A-Slot" value="10">
  <label for="A-Slot">9am - 10am</label><br>
  <input type="radio" id="B-Slot" name="B-Slot" value="11">
  <label for="B-Slot">10am - 11am</label><br>  
  <input type="radio" id="C-Slot" name="C-Slot" value="12">
  <label for="C-Slot">11am - 12pm</label><br><br>
  <input type="submit" value="Submit">
</form>

</div>
</div>
</body>
</html>
