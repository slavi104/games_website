<?php
require_once "header.php";
?>
<form action="upload_file.php" method="POST" enctype="multipart/form-data">
	<div>
		Article title: <input name='article_title'/>
	</div>
	<div>
		Article content: <textarea name='article_content'></textarea>
	</div>
	
	<label for="file">Filename:</label>
	<input type="file" name="file" id="file"><br>
	<input type="hidden" name="is_avatar" value="0">
	<input type="submit" name="submit" value="Submit">

</form>

