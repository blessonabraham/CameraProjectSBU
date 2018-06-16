
	
	
	<?php include_once('header.php'); ?>
	
	
	
	
	<br/>
	<br/>
	<br/><br/>
	

	<center>
	
	
		
	<?php
if($_FILES["zip_file"]["name"]) {
	$filename = $_FILES["zip_file"]["name"];
	$source = $_FILES["zip_file"]["tmp_name"];
	$type = $_FILES["zip_file"]["type"];
	
	$name = explode(".", $filename);
	$accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
	foreach($accepted_types as $mime_type) {
		if($mime_type == $type) {
			$okay = true;
			break;
		} 
	}
	
	$continue = strtolower($name[1]) == 'zip' ? true : false;
	if(!$continue) {
		$message = "The file you are trying to upload is not a .zip file. Please try again.";
	}

	$target_path = "userfiles/".$filename;  // change this to the correct site path
	if(move_uploaded_file($source, $target_path)) {
		$zip = new ZipArchive();
		$x = $zip->open($target_path);
		if ($x === true) {
			$zip->extractTo("userfiles/"); // change this to the correct site path
			$zip->close();
	
			unlink($target_path);
		}
		$message = "<span style=\"      font-size: 70px;  \" class=\"glyphicon glyphicon-ok-circle\"></span><br><h4>Your .zip file was uploaded and unpacked.</h4>";
	} else {	
		$message = "There was a problem with the upload. Please try again.";
	}
}
?>

<?php if($message) echo "<p>$message</p>"; ?>


	
	
	<br/>
	<br/>
	
	
	
	  <a href="dashboard.php" class="btn btn-info btn-lg" role="button">Back to Home</a>

	
	
	
		</center>

	
	<br/>
	<br/>
		
	<br/>
	<br/>
	
	
	
	
	
  	

		 </div>
	

  </body>
  
  	<?php include_once('footer.php'); ?>

  
</html>
