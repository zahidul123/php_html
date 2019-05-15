<!DOCTYPE html>
<html>
<head>
	<title>fibonacci</title>
</head>
<body>
  <div style="text-align: center;"><h1>Fibonacci series</h1></div>
  <form method="post">
  	Enter number of series :<input type="text" name="fibonacci">
  	<br><input type="submit">
  </form>
  <?php
  	if (isset($_POST['fibonacci'])) {
  		$last=$_POST['fibonacci'];

  		echo "the answer of fibonacci : 0 1 1 ";
        $temp=1;$res=1;$first=1;
  		for ($i=3; $i<$last ; $i+=1) { 
  			$res=$temp+$first;
  			$first=$temp;
  			$temp=$res;
  			echo $res." ";
  		}
  		
  		$fact=1;
  		for ($i=1; $i <=14; $i++) { 
  			$fact*=$i;
  		}
  		echo "<br>factorial  is : ".$fact;
  	}
  ?>
</body>
</html>