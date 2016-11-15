<?php

include_once('connect.php');
   if(isset($_GET['delete_post'])){
   	
	$delete_id=$_GET['delete_post'];
	
	$delete_post = "delete from posts where post_id ='$delete_id'";
	$run_delete = mysqli_query($conn, $delete_post);
	
	echo "<script>window.open('../index.php?view_posts','_self')</script>";
	
   }
?>