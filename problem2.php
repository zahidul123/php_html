<!Doctype Html>
<!DOCTYPE html>
<html>
<head>
	<title>seven strick problem</title>
</head>
<body>
    <h1 align="center">Magic show</h1>
    <form action="problem2.php" method="post">
    	<title>Input value</title>
    	<input type="text" name="number" id="number">
    	<input type="submit" name="submit" value="submit">
    </form>
    <?php
       if (isset($_POST['submit'])) {
       	  $number=$_POST['number'];
       	  $i=0;
       	  $count=0;
          $length=strlen($number);
          
       	  if ($number=='') {
       	  	echo "please enter valid number";
       	  }else{
       	  	while ($length>$i) {
       	  	if ($number[$i]=='1') {
       	  		$count=$count+2;
       	  	}else if ($number[$i]=='2') {
       	  		$count=$count+5;
       	  	}else if ($number[$i]=='3') {
       	  		$count=$count+5;
       	  	}else if ($number[$i]=='4') {
       	  		$count=$count+4;
       	  	}else if ($number[$i]=='5') {
       	  		$count=$count+5;
       	  	}else if ($number[$i]=='6') {
       	  		$count=$count+6;
       	  	} else if ($number[$i]=='7') {
       	  		$count=$count+3;
       	  	}else if ($number[$i]=='8') {
       	  		$count=$count+7;
       	  	}else if ($number[$i]=='9') {
       	  		$count=$count+6;
       	  	}else if ($number[$i]=="0") {
       	  		$count=$count+6;
       	  	}
       	  	$i=$i+1;
       	  }

       	  echo "the number of stick is ".$count;
       	  }
       	}  
    ?>
</body>
</html>