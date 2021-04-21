<!DOCTYPE html>
<html>
<head>
	<title>Read Book</title>
</head>
<body>
	@foreach($data as $data)
	{{$data->name}}
	
	<iframe src="/{{$data->image}}" width="95%" height="900px"></iframe>
	@endforeach
</body>
</html>