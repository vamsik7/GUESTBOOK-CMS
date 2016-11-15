<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
	td,tr{
		padding:0px;
		margin:0px;	
	}
	
</style>

<script   src="https://code.jquery.com/jquery-3.1.0.slim.min.js"   integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8="   crossorigin="anonymous"></script>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea'
  		
  		 });</script>

<body>
<form action="index.php?insert_post" method="post" enctype="multipart/form-data">
	
	<table width="800" align="center" border="2px">
		
		<tr>
			<td bgcolor="orange" align="center" colspan="6"><h1>Insert New Post</h1></td>
			
		</tr>
		<tr>
			<td bgcolor="orange" align="right">Post Title</td>
			<td><input type="text" name="post_title" /></td>
		</tr>
		<tr>
			<td bgcolor="orange" align="right">Post Category</td>
			<td>
				<select name="cat">
					<option value="null">Select a Category</option>
					<?php 
						include_once('connect.php');
						
						$get_cats="select * from categories";
					    $run_cats = mysqli_query($conn, $get_cats);
						while($cats_row=mysqli_fetch_array($run_cats)){
							$cat_id = $cats_row['cat_id'];
							$cat_title= $cats_row['cat_title'];
							echo "<option value='$cat_id'>$cat_title</option>";
						}
						
					
					?>
				</select>
				
			</td>
		</tr>
		<tr>
			<td bgcolor="orange" align="right">Post Author</td>
			<td><input type="text" name="post_author" size="60"/></td>
		</tr>
		<tr>
			<td bgcolor="orange" align="right">Post keywords</td>
			<td><input type="text" name="post_keywords" size="60"/></td>
		</tr>
		<tr>
			<td bgcolor="orange" align="right">Post Image</td>
			<td><input type="file" name="post_image" size="50"/></td>
		</tr>
		<tr>
			<td bgcolor="orange" align="right">Post Content</td>
			<td>
				<textarea rows="14" cols="58" name="post_content">
					
				</textarea>
				
			</td>
		</tr>
		<tr>
			
			<td bgcolor="orange" align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"/></td>
		</tr>
	</table>
</form>
</body>


<?php 

if(isset($_POST['submit'])){
	
	$post_title=$_POST['post_title'];
	$post_date=date('m-d-y');
	$post_cat=$_POST['cat'];
	$post_author=$_POST['post_author'];
	$post_keywords=$_POST['post_keywords'];
	$post_image=$_FILES['post_image']['name'];
	$post_image_tmp=$_FILES['post_image']['tmp_name'];
	//This is for escaping the special characters like ', ? etc when storing in the database.
	$post_content=mysqli_real_escape_string($conn, $_POST['post_content']);
	
	if($post_title=="" OR $post_cat=="null" OR  $post_author=="" OR $post_image=="" OR $post_content==""){
	
		echo "<script>alert('Please fill the necessary fields');</script>";	
		exit();
	}
	else{
		
		move_uploaded_file($post_image_tmp, "news_images/$post_image");
		$insert_posts = "insert into posts (category_id,post_title,post_date,post_author,post_keywords,post_image,post_content)
		 values ('$post_cat','$post_title','$post_date','$post_author','$post_keywords','$post_image','$post_content') ";
	
		$run_posts = mysqli_query($conn, $insert_posts);
		
		
			
			echo "<script> alert('Post has been Published');</script>";
			echo "<script> window.open('index.php?insert_post', '_self')</script>";
		
	}
	
}

?>