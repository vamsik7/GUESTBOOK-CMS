<?php

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>News Website!</title>
		<link rel="stylesheet" href="styles/styles.css" media="all" />
		<script   src="https://code.jquery.com/jquery-3.1.0.slim.min.js"   integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8="   crossorigin="anonymous"></script>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea' });</script>
	</head>
	<body>
		<h1>Hello World !</h1>
		<div  class="container">
			<div class="head">
                    <a href="index.php"> <img src="images/header1.jpg"/> </a>
			</div>
			<div class="navbar">
				<ul id="menu">
					<?php 
						include_once('includes/connect.php');
						
						$get_cats="select * from categories";
					    $run_cats = mysqli_query($conn, $get_cats);
						while($cats_row=mysqli_fetch_array($run_cats)){
							$cat_id = $cats_row['cat_id'];
							$cat_title= $cats_row['cat_title'];
							echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
						}
						
					?>
				</ul>
				<div>
					<form id="form" method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="search_query" />
						<input type="submit" name="search" value="search Now" />
					</form>
				</div>
			</div>
			<div class="post_area">
				<?php 
				
					if(isset($_GET['post'])){
						$post_id=$_GET['post'];
					
				
					$get_posts= "select * FROM posts where post_id='$post_id'";
					$run_posts= mysqli_query($conn, $get_posts);
					
					while($row_posts=mysqli_fetch_array($run_posts)){
						
						//$post_id = $row_posts['post_id'];
						$post_title = $row_posts['post_title'];
						$post_date = $row_posts['post_date'];
						$post_author = $row_posts['post_author'];
						$post_keywords = $row_posts['post_keywords'];
						$post_image = $row_posts['post_image'];
						$post_content = $row_posts['post_content'];
						
						
						echo "
						
							<h2><a id='l_title'> $post_title</a></h2>
							<span><i>Posted by</i> <b>$post_author</b> &nbsp; on <b>$post_date</b></span> <span style='color:brown;'><b>Comments</b></span>
							<img src='admin/news_images/$post_image' width='400' height-'400'/>
							$post_content;
							<br/>
						";
					}
					}
				?>
				
				<?php 
						if(isset($_GET['post'])){
						$post_id=$_GET['post'];
					
				
					$get_posts= "select * FROM posts where post_id='$post_id'";
					$run_posts= mysqli_query($conn, $get_posts);
					
					$row=mysqli_fetch_array($run_posts);
					$post_new_id=$row['post_id'];
						}
						
						
						
						
						
					$get_comments = "select * from comments where post_id='$post_new_id' AND status='approve'";
					$run_comments = mysqli_query($conn, $get_comments);
					
					while($row=mysqli_fetch_array($run_comments)){
						$comment_name = $row['comment_name'];
						$comment_text= $row['comment_text'];
						
						echo "<h3 style='background:#444; padding-left:10px; color:white;'> $comment_name</h3>
						<p style='background:#ccc; padding:15px; overflow:auto;'>$comment_text<p>";
						
					}	
						
				?>
		
					<div>
					<form method="post" action="details.php?post=<?php echo $post_new_id; ?>">
						<h2>Post a Comment</h2>
						<table width="720px" bgcolor="#aaa">
							<tr>
								<td>Your Name:</td>
								<td><input type="text" name="comment_name" /></td>
							</tr>
							<tr>
								<td>Your Email:</td>
								<td><input type="text" name="email" /></td>
							</tr>
							<tr>
								<td >Your Comment:</td>
								<td><textarea name="zomment" cols="25" rows="9"></textarea></td>
							</tr>
							<tr>
								
								<td ><input float="right" type="submit" name="comment_submit" value="Post Comment"/></td>
							</tr>
						</table>
					</form>
					</div>
					
					
					<?php
							if(isset($_POST['comment_submit'])){
								$comment_name = $_POST['comment_name'];
							   // $comment_email = mysqli_real_escape_string($conn, $_POST['comment_email']);
								 $comment_email = $_POST['email'];
								$comment = mysqli_real_escape_string($conn, $_POST['zomment']);
								$status = "approve";
								$com_post_id=$post_new_id;
								
								if($comment_name=='' OR $comment_email='' OR $comment=''){
									
									echo "<script>alert('Please fill in all blanks!')</script>";
									echo "<script>window.open('details.php?post=com_post_id')</script>";
									exit();
								}else{
									
									$query_comment="insert into comments (post_id,comment_name, comment_email, comment_text, status)
									values ('$com_post_id','$comment_name','$comment_email','$comment','$status')";
									
									$run_query= mysqli_query($conn, $query_comment);
									
									//	echo "<script>alert('Your comment is awaiting approval')</script>";
									echo "<script>window.open('details.php?post=$com_post_id')</script>";
									
								}
							}

					
					?>
			
			
		</div>
			<div class="side_bar">
				
				<?php 
					$get_posts= "select * FROM posts order by 1 desc LIMIT 0,5";
					$run_posts= mysqli_query($conn, $get_posts);
					echo "<div id='s_title'>Recent Posts</div>";
					while($row_posts=mysqli_fetch_array($run_posts)){
						
						$post_id = $row_posts['post_id'];
						$post_title = $row_posts['post_title'];
						
						$post_image = $row_posts['post_image'];
					
						
						
						echo "
						
						<div class='recent_posts'>
							<h2><a  href='details.php?post=$post_id'> $post_title</a></h2>
							
							<img src='admin/news_images/$post_image' width='100' height-'100'/>
					 
					   </div>
						";
						
					}
				
				?>
				
			</div>
			<div class="footer">This is footer</div>
		</div>
	</body>
	
</html>