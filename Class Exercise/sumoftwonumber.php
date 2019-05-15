<!DOCTYPE html>
<html>
<head>
	<title>try it</title>
</head>
<body>
      <div class="heading" style="text-align: center;">
      	<h1>sum of two number</h1>
      </div>
      <div class="design">
      	 <form action="sumoftwonumber.php" method="post">
      	 	Enter mnumber one:<input type="text" name="number1" placeholder="Frist number">
      	 	<br>
      	 	Enter number two:<input type="text" name="number2" placeholder="second number"><br>
      	 	<input type="submit" name="sum">
      	 </form>
      </div>
      <div>
      	<h3>sum : <?php
      				if ($_SERVER['REQUEST_METHOD']=='POST') {
      						$numb1=$_POST['number1'];
      						$numb2=$_POST['number2'];
      						echo $numb1+$numb2;
      				}
      	?></h3>
      </div>
</body>
</html>