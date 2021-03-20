<?php
echo <<< _END
	<html><head><title>PHP UPLOADER</title></head><body>
	<form method='post' action='uploader.php' enctype='multipart/form-data'>
	Select file: <input type='file' name='filename' size='10'>
	<input type='submit' value='Upload'>
	</form>
_END;

if($_FILES){
	$name = $_FILES['filename']['name'];
	move_uploaded_file($_FILES['filename']['tmp_name'], "/var/www/html/" . $name);
	echo "<p>Uploaded file successfully!</p>" ;
}
else
{
	echo "<p>Error!</p>";
}
echo "</body></html>";
?>
