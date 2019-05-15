<?php

$query=mysqli_query($conn,"select * from php");
 
 while($all_video=mysqli_fetch_array($query))
 
 {
?>
 <p> <?php echo $all_video['subject']; ?>
</p>
 <video width="300" height="200" controls>
 <source src="../videos/phps/<?php echo $all_video['name']; ?>" type="video/mp4">
 </video> 
 <p> <?php echo $all_video['description']; ?>
 </p>
 <?php }  ?>