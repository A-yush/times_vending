<?php 

include 'init.php';

if (isset($_FILES['file'])) {
	$file = $_FILES['file'];
	
	// FILE PROPERTIES

	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];

	$MAX_SIZE = 2097152;

	// FINDING FILE EXTENSION

	$file_ext = explode('.', $file_name);
	$file_ext = strtolower(end($file_ext));

	// ALLOWED FILE TYPES
	$allowed  = array('pdf','doc','docx','txt','jpeg','jpg','png'); 
$file_destination="";

	if (in_array($file_ext, $allowed)) {
		
		if ($file_error===0) {
			if ($file_size <= $MAX_SIZE) {
				
				$file_destination = 'uploads/'.$file_name;
				
				if (move_uploaded_file($file_tmp,$file_destination)) {
				?> <div class="alert alert-success"><?php	echo "file uploaded successfully";
				}else{
				?> <div class="alert alert-danger"><?php	echo "failed to upload file";
				}
			}
		}else{
			print_r($file_error);	
		}
	}else{
		die("Please Upload PDF,DOC,DOCX,JPEG,JPG and TXT files only");
	}


	// ADDING FILE TO DATABASE

	$file_name = mysql_real_escape_string($file_name);
	
	

	echo "<br>$file_name";
	 mysqli_query($con,"INSERT INTO pdfs (`name`,`date`,`location`) VALUES ('$file_name', NOW(),'$file_destination')") 
	 								or die ("<br>".mysqli_error($con));
}

?>