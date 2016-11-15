<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
	td,tr{
		padding:0px;
		margin:0px;	
	}
	
</style>

<?php 
include_once('connect.php');
if(isset($_GET['edit_cat'])){
	$edit_cat = $_GET['edit_cat'];
	 $select_cat = "select * from categories where cat_id = '$edit_cat'";
	 $run_query = mysqli_query($conn, $select_cat);
	//echo "Yup <br/>";
	while($row_post= mysqli_fetch_array($run_query)){
		
		$cat_id = $row_post['cat_id'];
	    $cat_title = $row_post['cat_title'];
		
	}
}
?>

<script   src="https://code.jquery.com/jquery-3.1.0.slim.min.js"   integrity="sha256-cRpWjoSOw5KcyIOaZNo4i6fZ9tKPhYYb6i5T9RSVJG8="   crossorigin="anonymous"></script>
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea'
  		
  		 });</script>

<body>
<form action="index.php?edit_cat=<?php echo $edit_cat;?>" method="post" enctype="multipart/form-data">
	
	<table width="800" align="center" border="2px">
		
		<tr>
			<td bgcolor="orange" align="center" colspan="6"><h1>Update this Category</h1></td>
			
		</tr>
		<tr>
			<td bgcolor="orange" align="right" >Category Title</td>
			<td><input type="text" name="cat_title"  value="<?php echo $cat_title;?>" /></td>
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
	$cat_title=$_POST['cat_title'];

	
	if($cat_title==""){
	
		echo "<script>alert('Don\'t leave it empty!');</script>";	
		exit();
	}
	else{
		
		
		$update_cat = "update categories set cat_title='$cat_title' where cat_id='$edit_cat'";
	
		 $run_update = mysqli_query($conn, $update_cat);
		
		
			
			echo "<script> alert('Category has been Updated');</script>";
			echo "<script> window.open('index.php?view_cats', '_self')</script>";
		
	}
	
}

?>