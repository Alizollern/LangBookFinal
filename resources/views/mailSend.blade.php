<!DOCTYPE html>
<html>
<head>
	<title>Technical Support</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('packs/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	<div class="left">
		<form action="techSupport" method="POST">
			@csrf
			<div class="form-group">
				<label for="">Name</label>
				<input type="text"  id="name" name="name" placeholder="Enter your name" required="required"/>
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" name="email" placeholder="Enter your email">
			</div>
			<div class="form-group">
				<label for="">Book name</label>
				<input type="text" name="subject" placeholder="Enter book name">
			</div>
			<div class="form-group">
				<textarea name="message" id="sd" cols="50" rows="10"></textarea>
			</div>
			<input type="submit"> 
		</form>
	</div>
</body>
</html>
<style type="text/css">
	* {
  box-sizing: border-box;
}

body {
  background: #333;
}

.centered {
  width: 550px;
  height: 110px;
  margin: auto;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
}

.group {
  width: 100%;
  height: 110px;
  overflow: hidden;
  position: relative;
}

label {
  position: relative;
  top: 40px;
  color: rgba(255, 255, 255, 0.5);
  font: 400 20px Roboto;
  cursor: text;
  transition: 0.25s ease;
}

input {
  display: block;
  padding-left: 200px;
  padding-top: 10px; 
  position: relative;
  top: 40px;
  width: 40%;
  border: none;
  border-radius: 0;
  color: white;
  background: #333;
  font-size: 20px;
  transition: 0.3s ease;
}
input:valid ~ label {
  top: 0;
  font: 700 22px Roboto;
  color: rgba(255, 255, 255, 0.5);
}
input:focus {
  outline: none;
}
input:focus ~ label {
  top: 0;
  font: 700 22px Roboto;
  color: #2196f3;
}
input:focus ~ .bar:before {
  transform: translateX(0);
}
input:-webkit-autofill {
  -webkit-box-shadow: 0 0 0px 1000px #333 inset;
  -webkit-text-fill-color: white !important;
}
#sd{
	display: block;
	position: relative;
	left: 200px;
	position: relative;
	top: 50px;
  width: 40%;
  border: none;
  border-radius: 0;
  color: black;
  background: white;
  font-size: 20px;
  transition: 0.3s ease;
}
::selection {
  background: rgba(33, 150, 243, 0.3);
}
</style>