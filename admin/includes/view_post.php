<?php
include_once('connect.php');
?>

<style>
	td{
		border-bottom:2px solid #ddd;
		border-left:2px solid #ddd;
		padding:1px;
	}
</style>

<table width="794" align="center" bgcolor="#ff9">
	
	<tr>
		<td colspan="8"><h3>View All Posts Here !</h3></td>
	</tr>
	<tr>
		<th>Post ID</th>
		<th>Title</th>
		<th>Author</th>
		<th>Image</th>
		<th>Comments</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
	
	<?php 
	
	$get_posts= "select * from posts";
	$run_posts= mysqli_query($conn, $get_posts);
	
	while($row_posts=mysqli_fetch_array($run_posts)){
		
		$post_id= $row_posts['post_id'];
		$post_title= $row_posts['post_title'];
		$post_author= $row_posts['post_author'];
		$post_image= $row_posts['post_image'];
	
	
	?>
	
	<tr align="center">
		<td><?php echo"$post_id"; ?></td>
		<td><?php echo"$post_title"; ?></td>
		<td><?php echo"$post_author"; ?></td>
		<td><img width="30" height="30" src="news_images/<?php echo $post_image; ?>" /></td>
		<td>
			<?php 
			$get_comments = "select * from comments where post_id = '$post_id'";
			$run_comments = mysqli_query($conn, $get_comments);
			$count = mysqli_num_rows($run_comments);
			echo "$count";
			?>
		</td>
		<td><a href="index.php?edit_post=<?php echo $post_id;?>">Edit</a></td>
		<td><a href="includes/delete_post.php?delete_post=<?php echo $post_id;?>">Delete</a></td>
	</tr>
	<?php } ?>
</table>