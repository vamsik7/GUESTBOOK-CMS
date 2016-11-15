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
		<th>Cat ID</th>
		<th>Category Title</th>
		
		<th>Edit</th>
		<th>Delete</th>
		
	</tr>
	
	<?php 
	
	$get_cats= "select * from categories";
	$run_cats= mysqli_query($conn, $get_cats);
	
	while($row_posts=mysqli_fetch_array($run_cats)){
		
		$cat_id= $row_posts['cat_id'];
		$cat_title = $row_posts['cat_title'];
		
	
	?>
	
	<tr align="center">
		<td><?php echo"$cat_id"; ?></td>
		<td><?php echo"$cat_title"; ?></td>
		
		<td><a href="index.php?edit_cat=<?php echo $cat_id;?>">Edit</a></td>
		<td><a href="index.php?delete_cat=<?php echo $cat_id;?>">Delete</a></td>
	</tr>
	
	
	<?php } ?>
	<form action="index.php?view_cats" method="get">
	<tr>
		<td><input type="text" name="receive"/></td>
		<td colspan="4" ><input type="submit" name="add_cat" value="Add Category" /></td>
	</tr>
	</form>
</table>
<?php
if(isset($_GET['add_cat'])){
	$cat_title = $_GET['receive'];
	$add_cat="insert into categories (cat_title) values ('$cat_title')";
	$run_cat=mysqli_query($conn, $add_cat);
	echo "<script> window.open('index.php?view_cats', '_self')</script>";
}
?>
