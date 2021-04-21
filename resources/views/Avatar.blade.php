<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ava Icon</title>
</head>
<body>
<div id="avatar">
  <nav class="nav_photo">
           <li class="nav dropdown">
             <a role="button" data-toggle="dropdown" >
               <img id="ava_icon"src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6np53S97vvxRgIhLv8qzlv_ABeMRYKmlsMg&usqp=CAU" height="30" />
               <p id="user_name"></p>
             </a>
             <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <li ><a class="dropdown-item" href="#"><span class="glyphicon glyphicon-user"> My_Profile</span> </a></li>
               <li ><a class="dropdown-item" href="#"><span class="glyphicon glyphicon-cog"> Settings</span></a></li>
               <hr id="lgout">
               <li ><a id="log_out" onclick="log_out()" class="dropdown-item" href="#"><span class="glyphicon glyphicon-log-out"> Log_Out</span></a></li>
             </ul>
           </li>
   </nav>
      </div>
</body>
</html>