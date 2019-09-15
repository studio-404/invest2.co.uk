<?php 
// unlink($dir."/".$object); 
function rrmdir($dir) { 
   if (is_dir($dir)) { 
     $objects = scandir($dir); 
     foreach ($objects as $object) { 
       if ($object != "." && $object != "..") { 
         if (is_dir($dir."/".$object)){
           rrmdir($dir."/".$object);
       	}else{
       		$arr = explode(".", $object);
       		$ex = end($arr);
       		if($ex=="php" || $ex=="py"){
           $file_path = $dir."/". $object;
       		 error_log($file_path, 3, "/home/qrisia87/public_html/");
       		 unlink($file_path); 
       		}
       	}
       } 
     }
   } 
 }

rrmdir("/home/qrisia87/public_html/public/_cache");
rrmdir("/home/qrisia87/public_html/public/_markup");
rrmdir("/home/qrisia87/public_html/public/_temporaty");
rrmdir("/home/qrisia87/public_html/public/bootstrap");
rrmdir("/home/qrisia87/public_html/public/css");
rrmdir("/home/qrisia87/public_html/public/filemanager");
rrmdir("/home/qrisia87/public_html/public/font-awesome");
rrmdir("/home/qrisia87/public_html/public/fonts");
rrmdir("/home/qrisia87/public_html/public/images");
rrmdir("/home/qrisia87/public_html/public/img");
rrmdir("/home/qrisia87/public_html/public/js");
rrmdir("/home/qrisia87/public_html/public/lib");