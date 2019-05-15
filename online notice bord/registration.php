<?php 
require('connection.php');
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'>This user already exists</font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;

//hobbies
$hob=implode(",",$hob);

//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$gen','$hob','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'>Registration successfull !!</font>";

}
}




?>
<h2>Registration Form</h2>
		<form method="post" enctype="multipart/form-data" style="background-image: url('images/reg.jpeg');background-repeat: no-repeat;height: 100%;width:100%;background-size: cover;padding-top: 20px;text-decoration: none;">
	<table class="table table-bordered" style="border-collapse: collapse; border: none;">
	     <Tr>
		   <Td colspan="2"><?php echo @$err;?></Td>
	    </Tr>
				
				<tr>
					<td style="color:#FFFFFF">Enter Your name</td>
					<Td><input  type="text"  class="form-control" name="n" required/></td>
				</tr>
				<tr>
					<td style="color:#FFFFFF">Enter Your email </td>
					<Td><input type="email"  class="form-control" name="e" required/></td>
				</tr>
				
				<tr>
					<td style="color:#FFFFFF">Enter Your Password </td>
					<Td><input type="password"  class="form-control" name="p" required/></td>
				</tr>
				
				<tr>
					<td style="color:#FFFFFF">Enter Your Mobile </td>
					<Td><input  class="form-control" type="number" name="mob" required/></td>
				</tr>
				
				<tr>
					<td style="color:#FFFFFF">Select Your Gender</td>
					<Td>
				<span style="color:#FFFFFF;padding-left: 5px;">Male </span> <input type="radio" name="gen" value="m" required/>
				<span style="color:#FFFFFF;padding-left: 5px;">Female </span><input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				<tr>
					<td style="color:#FFFFFF">Choose Your hobbies</td>
					<Td>
					<span style="color:#FFFFFF;padding-left: 5px;">Reading </span><input value="reading" type="checkbox" name="hob[]"/>
					<span style="color:#FFFFFF;padding-left: 5px;">Singing </span><input value="singin" type="checkbox" name="hob[]"/>
					
					<span style="color:#FFFFFF;padding-left: 5px;">Playing </span><input value="playing" type="checkbox" name="hob[]"/>
					</td>
				</tr>
				
				
				<tr>
					<td style="color:#FFFFFF">Upload  Your Image </td>
					<Td><input class="form-control" type="file" name="img" required/></td>
				</tr>
				
				<tr>
					<td style="color:#FFFFFF">Enter Your DOB</td>
					<Td>
					<select name="yy" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select name="mm" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select name="dd" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
<Td colspan="2" align="center">
<input type="submit" class="btn btn-success" value="Save" name="save"/>
<input type="reset" class="btn btn-success" value="Reset"/>
				
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>