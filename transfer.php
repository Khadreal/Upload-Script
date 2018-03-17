<?php
set_time_limit(0); //Unlimited max execution time
 
$path = 'folder/store.zip'; //The Folder you are saving the upload file to and the name 
$url = 'http://example.com/site.zip'; //Url where you will be downloading from
$newfname = $path;
echo 'Starting Download!<br>';
$file = fopen ($url, "rb");
if($file) {
	$newf = fopen ($newfname, "wb");
	if($newf)
		while(!feof($file)) {
			fwrite($newf, fread($file, 1024 * 8 ), 1024 * 8 );
			echo '1 MB File Chunk Written!<br>';
		}
}
if($file) {
	fclose($file);
}
if($newf) {
	fclose($newf);
}
echo 'Finished!';
?>
