<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
     <div class="slideshow-container">
        <div class="mySlides fade" action="#" method="post" id="image">
             <?php
     $dbname='test';
     $username='root';
     $password=null;
     $host='localhost';
     $con=mysqli_connect($host,$username,$password,$dbname)or die('opps it is not connected !!!!');
     if (isset($_POST['image'])) {
      $sql='select image from registrations ';
      $execute=mysqli_query($con,$sql);
      while (mysql_num_rows($execute)) {
        $img=row['image'];
        echo "<img src='$img'>";
      }
     }
      ?>
        </div>  
     </div>
     <table>
     	<form action="database.php" method="post">
     		<tr>
     			<td>Username : </td>
     			<td><input type="text" name="name"></td>
     		</tr>
     		<tr>
     			<td>Email : </td>
     			<td><input type="email" name="email"></td>
     		</tr>

     		<tr>
     			<td>password : </td>
     			<td><input type="password" name="password"></td>
     		</tr>

     		<tr>
     			<td><input type="submit" name='login' value="login"></td>
     			<td><input type="submit" name="Registration" value="Registration"></td>
     		</tr>
     	</form>
     </table>
</body>
</html>