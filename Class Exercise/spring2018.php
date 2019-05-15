
<!DOCTYPE html>
<html>
<head>
	<title>ict carnival registration</title>
</head>
<body>
  <h1>Registration or update information </h1>
  <form method="post" action="spring2018.php">
  	First Name:<input type="text" name="fname" placeholder="First name"><br>
  	Last Name:<input type="text" name="lname" placeholder="Last Name"><br>
  	Password :<input type="password" name="pword" placeholder="password"><br>
  	Age :<input type="text" name="age"><br>
  	Address :<input type="textarea" name="address"><br>
  	Phone:<input type="text" name="phone"><br>
  	<input type="submit" name="register" value="Registration" style="float: left;">
  	<input type="submit" name="update" value="Update" style="float: left;">
  </form>

  <?php
   $conn=mysqli_connect("localhost","root",null,"test")or die("database connection failed");
    
   if (isset($_POST['register'])) {
   	$fname=$_POST['fname'];
   	$lname=$_POST['lname'];
   	$password=$_POST['pword'];
   	$phone=$_POST['phone'];
   	$age=$_POST['age'];
   	$address=$_POST['address'];
    $sql="insert into ictcarnivaldiu (fname,lname,age,address,password,phone) values ('$fname','$lname','$age','$address','$password','$phone')";
    if (mysqli_query($conn,$sql)) {
    	echo "registration success";
    }
   }
   if (isset($_POST['update'])) {
   	$fname=$_POST['fname'];
   	$lname=$_POST['lname'];
   	$password=$_POST['pword'];
   	$phone=$_POST['phone'];
   	$age=$_POST['age'];
   	$address=$_POST['address'];
    $sql="update ictcarnivaldiu set fname='$fname',lname='$lname',age='$age',address='$address',password='$password' where phone='$phone'";
    if (mysqli_query($conn,$sql)) {
    	echo "update success";
    }
   }
  ?>
</body>
</html>