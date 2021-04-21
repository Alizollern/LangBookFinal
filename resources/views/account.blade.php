<!DOCTYPE html>
<html>
<head>
	<title>Account</title>
</head>
<body style="background-color: ">
	@foreach($data as $data)
	<div>
		<nav>
		<div class="nav" style="display: flex; justify-content: center;">
			<a style="font-size: 30px; color: red;">EXIT</a>
		</div>
		<div class="icon" style="position: relative; top: 50px;">
		<img src="{{asset('image/loginicon.png')}}" width="120px" height="120px"> 
		</div>
		<nav>
		<p style="font-size: 20px; position: relative;left: 130px;bottom: 100px"> Your name is: {{ $data->name}}</p>
		<p style="font-size: 20px;position: relative;left: 130px;bottom: 100px">Your email is: {{$data->email}}</p>
		<form action="store" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="file" name="book"> <br><br>
			<button type="submit">Upload File</button>
		</form>
	</div>
	@endforeach
		<form action="store" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="file" name="book"> <br><br>
			<button type="submit">Upload File</button>
		</form>
</body>
</html>