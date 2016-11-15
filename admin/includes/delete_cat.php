<?php
include_once('connect.php');
if(isset($_GET['delete_cat'])){
	
	$delete_id=$_GET['delete_cat'];
	
	$get_posts= "delete from posts where category_id='$delete_id'";
	$run_posts = mysqli_query($conn, $get_posts);
	
	$get_cat= "delete from categories where cat_id='$delete_id'";
	$run_cat=mysqli_query($conn, $get_cat);
	
	echo "<script>window.open('index.php?view_cats','_self');</script?";
}
?>