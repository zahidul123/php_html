<?php
  $dbname='test';
  $username='root';
  $password=null;
  $host='localhost';
  $con=mysqli_connect($host,$username,$password,$dbname)or die('opps it is not connected !!!!');

  if (isset($_POST['login'])) {
  	$name=$_POST['name'];
  	$email=$_POST['email'];
  	$pass=$_POST['password'];
  	$query="select * from registrations where username='$name'and email='$email'and password='$pass'";
  	$result=mysqli_query($con,$query);
  	if ($result) {
  		echo "login success";
  	}
  }elseif (isset($_POST['Registration'])) {
  	$name=$_POST['name'];
  	$email=$_POST['email'];
  	$pass=$_POST['password'];
  	$sql = "insert into registrations (username,password,email) VALUES ('$name','$pass','$email')";
				
		if(mysqli_query($con,$sql)){
			echo "Successfully Registered";
		}else{
			echo $sql;

		}
   
     
    }
  }
?>