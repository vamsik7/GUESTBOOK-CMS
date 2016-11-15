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
                    <a href="index.php"><img src="images/header1.jpg" /></a>
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
				<a style="color:white" href="admin/index.php">Admin</a>
				<div>
					<form id="form" method="get" action="results.php" enctype="multipart/form-data">
						<input type="text" name="search_query" />
						<input type="submit" name="search" value="search Now" />
					</form>
				</div>
			</div>
			
			
			<div class="post_area">
				
				<?php 
				if(!isset($_GET['cat'])){
					$get_posts= "select * FROM posts order by rand() LIMIT 0,5";
					$run_posts= mysqli_query($conn, $get_posts);
					
					while($row_posts=mysqli_fetch_array($run_posts)){
						
						$post_id = $row_posts['post_id'];
						$post_title = $row_posts['post_title'];
						$post_date = $row_posts['post_date'];
						$post_author = $row_posts['post_author'];
						$post_keywords = $row_posts['post_keywords'];
						$post_image = $row_posts['post_image'];
						$post_content = substr($row_posts['post_content'],0,200);
						
						
						echo "
						
							<h2><a id='l_title' href='details.php?post=$post_id'> $post_title</a></h2>
							<span><i>Posted by</i> <b>$post_author</b> &nbsp; on <b>$post_date</b></span> <span style='color:brown;'><b>Comments</b></span>
							<img src='admin/news_images/$post_image' width='100' height-'100'/>
							<div>$post_content <a id='rmlink' style='float:right;' href='details.php?post=$post_id'>Read More</a></div><br/>
						";
					}
					}
					
					if(isset($_GET['cat'])){
							
						$cat_id=$_GET['cat'];
							$get_posts= "select * FROM posts where category_id='$cat_id' LIMIT 0,5";
					$run_posts= mysqli_query($conn, $get_posts);
					
					while($row_posts=mysqli_fetch_array($run_posts)){
						
						$post_id = $row_posts['post_id'];
						$post_title = $row_posts['post_title'];
						$post_date = $row_posts['post_date'];
						$post_author = $row_posts['post_author'];
						$post_keywords = $row_posts['post_keywords'];
						$post_image = $row_posts['post_image'];
						$post_content = substr($row_posts['post_content'],0,200);
						
						
						echo "
						
							<h2><a id='l_title' href='details.php?post=$post_id'> $post_title</a></h2>
							<span><i>Posted by</i> <b>$post_author</b> &nbsp; on <b>$post_date</b></span> <span style='color:brown;'><b>Comments</b></span>
							<img src='admin/news_images/$post_image' width='100' height-'100'/>
							<div>$post_content <a id='rmlink' style='float:right;' href='details.php?post=$post_id'>Read More</a></div><br/>
						";
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
			<div class="footer"><h3 style="paddding:20px; text-align:center">All rights reserved &copy; - vamsi.com</h3></div>
		</div>
	</body>
	
</html>