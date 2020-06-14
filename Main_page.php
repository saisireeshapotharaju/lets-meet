<html>
<style>
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 50%;
  width:120px;
  height:120px;
}
img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
.bg-img {
  background-image: url("bg.jpg");
  min-height: 110%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
.container {
  position: absolute;
  margin: 20px;
  width: auto;
}

.navbar {
  overflow: hidden;
  background-color: #555;
}

.navbar a {
  float: left;
  color: #f2f2f2;
  text-align: center-left;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

</style>
<body>
<div class="bg-img">
<a target="_self" href="Main_page.html">
<img src="logo.jpg" ></a></br>
  <div class="container">
    <div class="navbar">
      <a href="link1.php" target="_right_">SpotLight</a>
      <a href="link3.php" target="_left_">SignUp</a>
      <a href="link4.php" target="_right_">Login</a>
    </div>
  </div>
<img src="welcome.gif" alt="Welcome" style="width:500px;height:100;border-radius: 8px;"</a>
</div>

</body>
</html>