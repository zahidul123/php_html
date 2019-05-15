<?php

$query=mysqli_query($conn,"select * from java");
 
 while($all_video=mysqli_fetch_array($query))
 
 {
?>
 <p> <?php echo $all_video['subject']; ?>
</p>
 <video width="300" height="200" controls>
 <source src="../videos/java/<?php echo $all_video['name']; ?>" type="video/mp4">
 </video> 
 <p> <?php echo $all_video['description']; ?>
 </p>
 <?php }  ?>