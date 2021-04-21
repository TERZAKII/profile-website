<!DOCTYPE html>
<html>
<head>
<style>
body{
    margin:0;
    padding: 0;
    background-color: yellow;
}

a{
text-decoration: none;
color:white;
font-size:25px;
font-weight:900;
max-width: 200px;
}
li{
display:block;
}
ul{
display:flex;
justify-content: space-around;
}
.iu{
    position:absolute;
}
#iu{
    width: 750px;
    height: auto;

}
.ux{
    position:relative;
    float:right;
    text-align: center;
    left: 250px;
    margin-top: -30px;
}
#ux{
    position:relative;
    float:right;
    left: -50px;
    max-width: 500px;
}

</style>
<title>Task_1</title>

</head>
<body style="background-color:yellow">
@extends('layout')
@section('content')
<div class = "pp" style="background-color:brown;padding:15px">
<ul>
<li><a href="{{ Route('word')}}"><img alt="SK" src="https://www.vippng.com/png/full/32-322319_sk-gaming-sk-gaming-logo-png.png" width="30" height="30"></a></li>
<li><a href="{{ Route('main')}}" >{{ __("Home Page")}}</a></li>
<li><a href="{{ Route('aboutMe')}}">{{ __('lang.About Me')}}</a></li>
<li><a href="#">{{ __('lang.Services')}}</a></li>
<li><a href="#">{{ __('lang.Course Shedule')}}</a></li>
<li><a href="{{ Route('contactUs')}}">{{ __('lang.Contact')}}</a></li>
</ul>
</div>


<div class="body">
    <h1 style="text-align:center;font-size:50px">{{ __('lang.My Portfolio')}}</h1>
    <div class="iu">
    <img id="iu" src="https://webitfactory.io/wp-content/uploads/2019/11/ui-ux.png" alt="">
    <p id ="ux"style="font-size:22px;">{{ __('lang.Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam mollitia atque, repellendus, sed nostrum enim quam ab officiis pariatur perferendis, blanditiis deserunt quaerat iusto inventore nulla? Enim sint laborum eum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam mollitia atque, repellendus, sed nostrum enim quam ab officiis pariatur perferendis, blanditiis deserunt quaerat iusto inventore nulla? Enim sint laborum eum!Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam mollitia atque, repellendus, sed nostrum enim quam ab officiis pariatur perferendis, blanditiis deserunt quaerat iusto inventore nulla? Enim sint laborum eum!')}}</p>
    <h1 class ="ux">{{ __('lang.UI/UX Design')}}</h1>
    </div>
    <div class="arch">
    <img src="" alt="">
    </div>
    
</div>
@endsection
</body>
</html>