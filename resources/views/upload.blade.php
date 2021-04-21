<html>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
		@csrf
		<input type="file" name="book"> <br><br>
		<button type="submit">Upload File</button>
	</form>
</body>
</html>