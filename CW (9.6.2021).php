<? php
      if (isset($_POST['upload'])){
  	   $file_name = $_FILES['file'] ['name'];
  	   $file_type = $_FILES['file'] ['type'];
  	   $file_size = $_FILES['file'] ['size'];
  	   $file_tem_loc = $_FILES['file'] ['tmp_name'];
  	   $file_store = "upload/".$file_name;
  	   
  	   if
  	    (move_uploaded_file($file_tem_loc, $file_store)) {
  	   	echo "Files are uploaded"
  	   }
  }

?>


<!DOCTYPE html>
<html>
	<head>
		<title> Uploading File </title>
	</head>
	<body>
		<form action="?" method="POST" enctype="multipart/form-data">
			<label>Uploading files</label>
			<p><input type="file" name="file"/></p>
			<p><input type="submit" name="upload" value="Upload Image"> </p>

		</form>
	</body>
</html>