<?php 
extract($_POST);
if(isset($add))
{

	if( $sub=="" || $description=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		$maxsize = 6242880; // 6MB
		$target_dir ="../videos/cprog/";
		$name = $_FILES['video']['name'];
        $target_file = $target_dir . $_FILES["video"]["name"];
        // Select file type
       $videoFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
         // Valid file extensions
       $extensions_arr = array("mp4","avi","3gp","mov","mpeg");

       // Check extension
       if( in_array($videoFileType,$extensions_arr) ){
 
          // Check file size
          if(($_FILES['video']['size'] >= $maxsize) || ($_FILES["video"]["size"] == 0)) {
            echo "File too large. File must be less than 6MB.";
          }else{
            // Upload
            if(move_uploaded_file($_FILES['video']['tmp_name'],$target_file)){
              // Insert record
              $query = "INSERT INTO cprog (name,location,subject,description) VALUES('".$name."','".$target_file."','$sub','$description')";

              mysqli_query($conn,$query);
             $err="<font color='green'>Notice added Successfully</font>";
            }
          }

       }else{
          echo "Invalid file extension.";
       }
		
			
	}
}

?>
<h2>Add New Matarials</h2>
<form method="post" enctype="multipart/form-data">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter chapter</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">Enter video</div>
		<div class="col-sm-5">
		<input type="file" name="video" class="form-control"></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
	
	<div class="row">
		<div class="col-sm-4">video description</div>
		<div class="col-sm-5">
		<textarea name="description" class="form-control"></textarea></div>
		</div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Notice" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	