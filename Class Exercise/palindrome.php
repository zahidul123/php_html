<!DOCTYPE html>
<html>
<head>
	<title>show if it is palindrome </title>
</head>
<body>
   <h1>palindrome number checking</h1>
   <table>
   		<form action="palindrome.php" method="post">
   			<tr>
   			<td>input string</td>
   			<td><input type="text" name="anystring" placeholder="word"></td>
   			</tr>
   			<tr><td><input type="submit"></td></tr>
   		</form>
   		<tr>
   			<td>Result</td>
   			<td>
   				<?php
   				if (isset($_POST['anystring'])) {
   					$getvalue=$_POST['anystring'];
   					$revvalue=strrev($getvalue);
   					if ($getvalue==$revvalue) {
   						echo $revvalue;
   						echo "  this is palindrome ";
   					}else{
   						echo "this is not palindrome ";
   					}
   				}

   				?>
   			</td>
   		</tr>
   </table>
</body>
</html>