<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Library</title>
    <style type="text/css">
body{
background-color: rgba(193, 191, 191, 0.22);
}
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
.upper-center{
    display: flex;
}
.popular-book{
    width: 10%;
    height: 20%;
    margin: 80px 6px 10px 10px;
}
#most{
    position: relative;
    top: 50px;
    display: flex;
    justify-content: center;
}
.content{
    display: flex;
    margin: 20px 10px 10px 70px;
    
}
.right-content{
    width: 80%;
    height: 150px;
    background-color: rgba(255, 255, 255, 0.78);
}
.all-content{
    background-color: rgba(255, 255, 255, 0.76);
    width: 65%;
    margin-left: 80px;
}

ul{
    display: flex;
    justify-content: center;
    list-style: none;
}
li{
    margin-right: 5px;
}
.footer{
    position: relative;
    right: 22px;
    top: 20px;
    width: 102%;
    height: 300px;
    background-color: #110004;

}
.genre-name{
display:block;
float:left;
margin:0 8px 8px 0;
padding:0 10px;
height:24px;
line-height:24px;
color:#212529;
color:var(--text-primary);
background-color:#e7edf3;
background-color:var(--tag-bg);
white-space:nowrap;
border-radius:2px;
text-decoration:none;
}
.genre-name:hover{
    color:#212529;
    color:var(--text-primary);
    color:#f77519;
    text-decoration:none;
}
.language{
    position: relative;
    top: 18px;
}
</style>
<script src="../js/registration.js"></script>
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
	<div class="review">
        <a href="{{ url('review')}}"><p>{{__('nav.review')}}</p></a>
    </div>
    <div>
        <a href="{{ url('techSupport')}}"><p>{{__('nav.tech')}}</p></a>
    </div>
	<div class="language">
        <select  onchange="window.location.href = this.options[this.selectedIndex].value">
        <option>{{__('nav.lang')}}</option>
        <option value="{{url('lang/en')}}"><a href="en">English</a></option>
        <option value="{{url('lang/ru')}}"><a href="ru">Russian</a></option>
        <option value="{{url('lang/kz')}}"><a  href="kz">Kazakh</a></option>
        </select>
	<div>
</div></nav>

<h3 id="most">{{__('nav.most_popular')}}</h3>
<hr>
<div class="upper-center">

    <div class="popular-book">
        <img src="{{asset('image/World.jpg')}}" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="{{asset('image/World.jpg')}}" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="{{asset('image/World.jpg')}}" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="{{asset('image/World.jpg')}}" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="{{asset('image/World.jpg')}}" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="{{asset('image/World.jpg')}}" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="{{asset('image/World.jpg')}}" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="{{asset('image/World.jpg')}}" width="150px" height="150px">
    </div>
    <div class="popular-book">
        <img src="{{asset('image/World.jpg')}}" width="150px" height="150px">
    </div>
</div>
<hr>
<div class="container">
    <div class = "right-container" style="position: absolute; right: 30px;width:25%; background-color:white; height: auto;">
        <p style="position: relative; left:10px; ">Жанры</p>
        <a class="genre-name">Романтика</a>
        <a class="genre-name">Боевик</a>
        <a class="genre-name">Арт</a>
        <a class="genre-name">Готика</a>
        <a class="genre-name">Детектив</a>
        <a class="genre-name">Драма</a>
        <a class="genre-name">Биографический</a>
        <a class="genre-name">Комедия</a>
        <a class="genre-name">Научная фантастика</a>
        <a class="genre-name">Мистика</a>
        <a class="genre-name">Игра</a>
        <a class="genre-name">Повседневность</a>
        <a class="genre-name">Постапокалипсиз</a>
        <a class="genre-name">Трагедия</a>
    </div>
<div class = "all-content">
<h2 style="display:flex; justify-content: center; position: relative;">{{__('nav.last_update')}}</h2>
<div class="center">
    <div class="content">
        <div class="left-content">
            <a href="{{ url('book/1')}}"><img src="{{asset('image/World.jpg')}}" width="120px" height="120px"></a>
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center; font-size:20px;">{{__('nav.name_book1')}}</p>
            <p style="position: relative;left: 50px; color: #5B534F"> {{__('nav.desc1')}}</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="{{asset('image/World.jpg')}}" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="{{asset('image/World.jpg')}}" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="{{asset('image/World.jpg')}}" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="{{asset('image/World.jpg')}}" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="{{asset('image/World.jpg')}}" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="  display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="{{asset('image/World.jpg')}}" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="{{asset('image/World.jpg')}}" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="{{asset('image/World.jpg')}}" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
    <div class="content">
        <div class="left-content">
            <img src="{{asset('image/World.jpg')}}" width="120px" height="120px">
        </div>
        <div class="right-content">
            <p style="display: flex; justify-content: center">Name of book</p>
        </div>
    </div>
</div>
</div>
</div>
<div class="list" >
<ul>
    <a><li>1</li></a>
    <a><li>2</li></a>
    <a><li>3</li></a>
    <a><li>4</li></a>
    <a><li>5</li></a>
    <a><li>6</li></a>
    <a><li>7</li></a>
       <li>...</li>
    <a><li>12</li></a>
</ul>
</div>
<div class="footer">
<p style="position: relative;left: 20px;color: white;">About Company: </p>
<p style="position: relative;left: 20px;color: white;">I'm alone it's all :)</p>

</div>

</body>
</html>