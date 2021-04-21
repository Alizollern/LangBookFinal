<!DOCTYPE html>
<html>
<head>
	<title>Word and piece</title>
</head>
<body>
<nav><div class="nav">


    <div class="Registration" onclick="register()">
        <a href="{{ url('login')}}"><p>{{__('nav.registartion')}}</p></a>
    </div>
    <div class="Genre">
        <a><p>{{__('nav.genre')}}</p></a>
    </div>
    <div class="Authors">
       <a><p>{{__('nav.author')}}</p></a>
    </div>
    <div class="Audio_book">
        <a><p>{{__('nav.audiobook')}}</p></a>
    </div>
    <div class="Blog">
        <a><p>{{__('nav.blog')}}</p></a>
    </div>
    <div>
        <a href="{{ url('techSupport')}}"><p>{{__('nav.tech')}}</p></a>
    </div>
	<div class="language">
       	<select  onchange="window.location.href = this.options[this.selectedIndex].value">
        <option>{{__('nav.lang')}}</option>
        <option value="{{url('langs/en')}}"><a href="en">English</a></option>
        <option value="{{url('langs/ru')}}"><a href="ru">Russian</a></option>
        <option value="{{url('langs/kz')}}"><a  href="kz">Kazakh</a></option>
        </select>
	<div>
</div></nav>
<div class="top-center">
	<img src="{{asset('image/Lev.jpg')}}" width="210px" height="230px" style="position: relative; top: 388px; left: 100px;">
	<p style="display: flex; justify-content: center; font-size:30px; color: white; position: relative; top: 100px; background-color: rgb(0,0,0,0.2);" >{{__('book.name')}}</p>
	<form action="view" method="POST">
		@csrf
	<a href="{{url('view/1')}}" class="c-button" style="font-size: 20px" >{{__('book.read')}}</a>
</div>
<div class="description">
	<p>{{__('book.desc')}}</p>
</div>
<style type="text/css">
	.nav{
    display: flex;
    position: absolute;
    right: 0px;
    top: 0px;
}
.nav div{
    margin: 0px 10px 0px 15px;
    font-size: 18px;
}
.language{
    position: relative;
    top: 18px;
}
.top-center{
	position: relative;
	top: 50px;
	width: 100%;
	height: 500px;
	background-image:url({{asset('image/война.jpg')}});
	background-size:cover;
}
.description{
	position: relative;
	top: 28px;
	margin-left: 320px;
	font-size: 20px;
}
.c-button {
  position: absolute;
  right: 0px;
  margin-right: 120px; 
  margin-top: 110px;
  min-width: 100px;
  font-family: inherit;
  appearance: none;
  border: 0;
  border-radius: 5px;
  background: #4676d7;
  color: #fff;
  padding: 8px 16px;
  font-size: 1rem;
  cursor: pointer;
}

.c-button:hover {
  background: #1d49aa;
}

.c-button:focus {
  outline: none;
  box-shadow: 0 0 0 4px #cbd6ee;
}
</style>
</body>
</html>