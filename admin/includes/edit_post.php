<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
	td,tr{
		padding:0px;
		margin:0px;	
	}
	
</style>

<?php 
include_once('connect.php');
if(isset($_GET['edit_post'])){
	$edit_id = $_GET['edit_post'];
	 $select_post = "select * from posts where post_id = '$edit_id'";
	 $run_query = mysqli_query($conn, $select_post);
	//echo "Yup <br/>";
	while($row_post= mysqli_fetch_array($run_query)){
		
		$post_id = $row_post['post_id'];
	    $post_title = $row_post['post_title'];
		$post_cat = $row_post['category_id'];
		$author = $row_post['post_author'];
		$keywords = $row_post['post_keywords'];
 		$image = $row_post['post_image'];
		$content = $row_post['post_content'];
	}
}
?>

<script   src="https://code.jquery.com/jquery-3.1.0.slim.min.js"   integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8="   crossorigin="anonymous"></script>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea'
  		
  		 });</script>

<body>
<form action="index.php?edit_post=<?php echo $edit_id;?>" method="post" enctype="multipart/form-data">
	
	<table width="800" align="center" border="2px">
		
		<tr>
			<td bgcolor="orange" align="center" colspan="6"><h1>Update this Post</h1></td>
			
		</tr>
		<tr>
			<td bgcolor="orange" align="right" >Post Title</td>
			<td><input type="text" name="post_title"  value="<?php echo $post_title;?>" /></td>
		</tr>
		<tr>
			<td bgcolor="orange" align="right"  >Post Category</td>
			<td>
				<select name="cat">
					
					<?php 
						//include_once('connect.php');
						
						$get_cats="select * from categories where cat_id='$post_cat'";
					    $run_cats = mysqli_query($conn, $get_cats);
						while($cats_row=mysqli_fetch_array($run_cats)){
							$cat_id = $cats_row['cat_id'];
							$cat_title= $cats_row['cat_title'];
							echo "<option value='$cat_id'>$cat_title</option>";
						}
						
					$get_more_cats="select * from categories";
					    $run_more_cats = mysqli_query($conn, $get_more_cats);
						while($cats_more_row=mysqli_fetch_array($run_more_cats)){
							$cat_id = $cats__more_row['cat_id'];
							$cat_title= $cats_more_row['cat_title'];
							echo "<option value='$cat_id'>$cat_title</option>";
						}
					?>
				</select>
				
			</td>
		</tr>
		<tr>
			<td bgcolor="orange" align="right">Post Author</td>
			<td><input type="text" name="post_author" size="60"  value="<?php echo $author;?>"/></td>
		</tr>
		<tr>
			<td bgcolor="orange" align="right">Post keywords</td>
			<td><input type="text" name="post_keywords" value="<?php echo $keywords;?>" size="60"/></td>
		</tr>
		<tr>
			<td bgcolor="orange" align="right">Post Image</td>
			<td><input type="file" name="post_image"  size="20"/><img width="60" height="40" src="news_images/<?php echo $image;?>"> </td>
		</tr>
		<tr>
			<td bgcolor="orange" align="right">Post Content</td>
			<td>
				<textarea rows="14" cols="58" name="post_content"><?php echo $content;?>
					
				</textarea>
				
			</td>
		</tr>
		<tr>
			
			<td bgcolor="orange" align="center" colspan="6"><input type="submit" name="update" value="Update Now"/></td>
		</tr>
	</table>
</form>
</body>


<?php 

if(isset($_POST['update'])){
	//$update_id= $_GET['edit_post'];
	$post_title=$_POST['post_title'];
	$post_date=date('m-d-y');
	$post_cat1=$_POST['cat'];
	$post_author=$_POST['post_author'];
	$post_keywords=$_POST['post_keywords'];
	$post_image=$_FILES['post_image']['name'];
	$post_image_tmp=$_FILES['post_image']['tmp_name'];
	//This is for escaping the special characters like ', ? etc when storing in the database.
	$post_content=mysqli_real_escape_string($conn, $_POST['post_content']);
	
	if($post_title=="" OR $post_cat1=="null" OR  $post_author=="" OR $post_image=="" OR $post_content==""){
	
		echo "<script>alert('Please fill the necessary fields');</script>";	
		exit();
	}
	else{
		echo "kiss";
		move_uploaded_file($post_image_tmp, "news_images/$post_image");
		$update_posts = "update posts set category_id='$post_cat1', post_title='$post_title', post_date='$post_date', post_author='$post_author', post_keywords='$post_keywords', post_image='$post_image', post_content='$post_content' where post_id='$edit_id'";
	
		 $run_update = mysqli_query($conn, $update_posts);
		
		
			
			echo "<script> alert('Post has been Updated');</script>";
			echo "<script> window.open('index.php?view_posts', '_self')</script>";
		
	}
	
}

?>