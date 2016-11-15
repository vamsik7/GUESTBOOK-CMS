<?php
   
?>

<head>
	<link rel="stylesheet" href="styles.css" />
</head>
<body>
	<div class="wrapper">
		<a href="index.php"><div  id="header">
			
		</div></a>
		<div class="left"><h3>Manage Content</h3>
			<a href="../index.php">Home</a>
			<a href="index.php?insert_post">Insert New Posts</a>
			<a href="index.php?view_posts">View All Posts</a>
			
			<a href="index.php?view_cats">View All Categories</a>
			<a href="index.php?view_comments">View All Comments</a>
			<a href="index.php?logout">Admin Logout</a>
			
		</div>
		<div class="right">
			
			<?php 

	if(isset($_GET['insert_post'])){
		include_once('includes/insert_post.php');
	}
	if(isset($_GET['view_posts'])){
		include_once('includes/view_post.php');
	}
	if(isset($_GET['edit_post'])){
		include_once('includes/edit_post.php');
	}
	if(isset($_GET['edit_cat'])){
		include_once('includes/edit_cat.php');
	}
	if(isset($_GET['view_cats'])){
		include_once('includes/view_cat.php');
	}
	if(isset($_GET['delete_cat'])){
		include_once('includes/delete_cat.php');
	}
	if(isset($_GET['add_cat'])){
		include_once('includes/view_cat.php');
	}
?>
		</div>
	</div>
</body>

