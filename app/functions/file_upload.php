<?php 
namespace functions;

// .php
class file_upload
{
	public function save($target_dir, $filename, $maxFileSize)
	{
		$target_file = $target_dir . basename($_FILES[$filename]["name"]);

		$uploadOk = 1;
		
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image		
	    $check = getimagesize($_FILES[$filename]["tmp_name"]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	    }

		// Check file size
		if ($_FILES[$filename]["size"] > $maxFileSize) {
		    $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    return false;
		} else {// if everything is ok, try to upload file
			$newFile = md5(time().rand(500, 1500)).".".$imageFileType;
		    $new_target = $target_dir . $newFile;

		    if (move_uploaded_file($_FILES[$filename]["tmp_name"], $new_target)) {
		       return $new_target;
		    } else {
		       return false;
		    }
		}
	}
}