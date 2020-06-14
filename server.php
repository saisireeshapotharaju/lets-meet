 <?php
session_start();

$username="";
$email="";

$errors=array();

$db=mysqli_connect('localhost','root','','letsmeet')or die("could not connect to database");

$name=mysqli_real_escape_string($db,$_POST['name']);
$uname=mysqli_real_escape_string($db,$_POST['uname']);
$email=mysqli_real_escape_string($db,$_POST['email']);
$phn=mysqli_real_escape_string($db,$_POST['phn']);
$psw=mysqli_real_escape_string($db,$_POST['psw']);
$repsw=mysqli_real_escape_string($db,$_POST['repsw']);


if(empty($name))
{
	array_push($errors,"Name is required");
};
if(empty($uname))
{
	array_push($errors,"Username is required");
};
if(empty($email))
{
	array_push($errors,"Email is required");
};
if(empty($phn))
{
	array_push($errors,"Phone Number is required");
};
if(empty($psw))
{
	array_push($errors,"Password is required");
};



$signup_check_query="SELECT*FROM signup WHERE uname='$uname' or email='$email' LIMIT 1";

$results=mysqli_query($db,$signup_check_query);
$signup=mysqli_fetch_assoc($result);

if($signup)
{
   if($signup['uname']===$uname){array_push($errors,"UserName already exists");}
   if($signup['email']===$email){array_push($errors,"Email already exists");}
}

if(count($errors)==0)
{
  $password=md5($psw);
  $query="INSERT INTO signup(name,uname,email,phn,psw) VALUES('$name','$uname','$email','$phn','$psw')";
  mysqli_query($db,$query);
  $_SESSION['username']=$username;
  $_SESSION['Success']="you are now logged in";
  
  header('location:link2.php');
  
} 

if(isset($_POST['login']))
{
	$uname=mysqli_real_escape_string($db,$_POST['uname']);
	$psw=mysqli_real_escape_string($db,$_POST['psw']);
	
	if(empty($uname))
	{
		array_push($errors,"USERNAME IS REQUIRED");
	}
	if(empty($psw))
	{
		array_push($errors,"PASSWORD IS REQUIRED");
	}
	if(count($errors)==0)
	{
		$psw=md5($psw);
		$query="SELECT * FROM signup WHERE uname='$uname'AND psw='$psw' ";
		$results=mysqli_query($db,$query);
		if(mysqli_num_rows($results)){
			$_SESSION['uname']='$uname';
			$_SESSION['Success']="Logged in successfully";
			header('location:link2.php');
		}
		else
		{
			array_push($errors,"Wrong username/password");
		}
		
	}
	
	
}	

?>