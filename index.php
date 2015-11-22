<?php
	require('setup/setupfiles.php');

	$uploads_dir = getcwd() . DIRECTORY_SEPARATOR . 'uploads';

	if(isset($_FILES['thefile'])){
      $errors= array();
      $file_name = $_FILES['thefile']['name'];
      $file_size =$_FILES['thefile']['size'];
      $file_tmp =$_FILES['thefile']['tmp_name'];
      $file_type=$_FILES['thefile']['type'];
      $tmp_name = $_FILES['thefile']["tmp_name"];
      
      if($file_size > 2097152){
         $errors[]='File size must be less than 2 MB';
      }
      if(empty($errors)==true){
         move_uploaded_file($tmp_name, "$uploads_dir/$file_name");
         echo "Success";
      }
      else{
         print_r($errors);
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php printText($SITENAME); ?></title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="thefile" />
	<input type="submit"/>
</form>

</body>
</html>