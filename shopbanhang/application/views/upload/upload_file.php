<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset-utf-8"/>

</head>
<body>
	<br><br>
	<h1>Upload file</h1>
	<form method="POST" action="" enctype="multipart/form-data">
		<label>Anhr minh họa: </label>
		<input type="file" id="image" name="image"><br><br>
		<label>Anhr kèm theo: </label>
		<input type="file" id="image_list" name="image_list[]" multiple><br><br>
		<input type="submit" class="button" value="Upload" name="submit">
	</form>
</body>
</html>