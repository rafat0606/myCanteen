<!DOCTYPE html>
<head>
	
</head>
<body>

	
	<?php 
	$error="";
	 echo $error;  ?>
	
	<?php echo form_open_multipart('Upload/do_upload');?>
	<input type="file" name="userfile">
	<input type="submit"  value="upload image">
</body>
</html>

