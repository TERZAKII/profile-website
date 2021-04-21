<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="Project.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src=Project.js></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQrMlEGdWE7eJ03sAt8JLVXEFvrEXqLYU&callback=initMap&libraries=&v=weekly"
    type="text/javascript"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>  
      .dropdown-menu{
      min-width:10px;}
      
    </style>
</head>
<body >

                                                <!--  -->
  <div class="nav navs">
    <label class="label11" for="toggle">&#9776;</label>
  </div>
  <input type="checkbox" id="toggle">
  
                                                <!-- Header -->

<div class = "header">
    <div id="header" onclick="reload()" ><img id="img_main" src="https://icons-for-free.com/iconfiles/png/512/computer+device+iphone+laptop+logo+mobile+smartphone+icon-1320193176076905675.png"/></div>
    <div id="header" onclick="overview()" onmouseover="big(this)" onmouseout="small(this)">{{__('lang.Overview')}}</div>
    <div id="header" onclick="best()" onmouseover="big(this)" onmouseout="small(this)">{{__('lang.Best of Best')}}</div>
    <div id="header" onclick="video()" onmouseover="big(this)" onmouseout="small(this)">{{__('lang.Video')}}</div>
    <div id="header" onclick="accessories()" onmouseover="big(this)" onmouseout="small(this)">{{__('lang.Accessories')}}</div>
    <div id="header" onclick="aboutUs()" onmouseover="big(this)" onmouseout="small(this)">{{__('lang.About Us')}}</div>
    <div id="header" onclick="contactUs()" onmouseover="big(this)" onmouseout="small(this)">{{__('lang.Contact Us')}} </div>
    <div id="app">
@php $locale = session()->get('locale');
@endphp
        <a id="language" onmouseover="big(this)" onmouseout="small(this)" href="en">EN</a>
        <a id="language" onmouseover="big(this)" onmouseout="small(this)" href="kz">KZ</a>
        <a id="language" onmouseover="big(this)" onmouseout="small(this)" href="ru">RU</a>
        </div>
</div>

                                         <!-- Login button -->
   <button  onclick="logIn()" id="sign_in_button" class="btn btn-outline-dark">{{__('lang.Log In')}}</button>   

                                              <!-- Ava Icon -->

  <div id="avatar">
  <nav class="nav_photo">
           <li class="nav dropdown">
             <a role="button" data-toggle="dropdown" >
               <img id="ava_icon"src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT6np53S97vvxRgIhLv8qzlv_ABeMRYKmlsMg&usqp=CAU" height="30" />
               <p id="user_name"></p>
             </a>
             <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <li ><a class="dropdown-item" href="#"><span class="glyphicon glyphicon-user"> {{__('lang.My_Profile')}}</span> </a></li>
               <li ><a class="dropdown-item" href="#"><span class="glyphicon glyphicon-cog"> {{__('lang.Settings')}}</span></a></li>
               <hr id="lgout">
               <li ><a id="log_out" onclick="log_out()" class="dropdown-item" href="#"><span class="glyphicon glyphicon-log-out"> {{__('lang.Log_Out')}}</span></a></li>
             </ul>
           </li>
   </nav>
      </div>
      
                                              <!-- AddtoCart  Icon-->

      <div class="addtocard" ><img onclick="cart()" id="card" src="add_shopping_cart_white_192x192.png" alt="">
      </div>
                                              <!-- Add to Cart-->
<div class="form_cart">
  <div class="form-content_cart">
  <button onclick="checkout()" id="cartBtn" class="btn btn-lg btn-danger">Checkout</button>
    <img onclick="Close_cart()" id="close_icon" src="pict--close-button---hover-toolbar-control-elements---vector-stencils-library.png--diagram-flowchart-example.png" alt="close icon">
    <div id="totalmark">
      <span ></span>
    </div>
  </div>
</div>
                                                      <!-- Checkout -->
  <div class="form_checkout">
  <div class="form-content_checkout">
  <form method="POST" action="/upload" enctype="multipart/form-data">
  @csrf
  <img onclick="Close_cart()" id="close_icon" src="pict--close-button---hover-toolbar-control-elements---vector-stencils-library.png--diagram-flowchart-example.png" alt="close icon">
    <input class="form-control" type="text" name="name" placeholder="Name" aria-label="default input example">
    <input class="form-control" type="text" name="surname" placeholder="Surname" aria-label="default input example">
    <input class="form-control" type="phone" name="telephone" placeholder="Phone number" aria-label="default input example">
    <select class="form-select" name="city" aria-label="Default select example">
      <option selected>Select your city</option>
      <option value="1">Nur-Sultan</option>
      <option value="2">Almaty</option>
      <option value="3">Shymkent</option>
      <option value="4">Aktobe</option>
      <option value="4">Turkistan</option>
    </select>
    <input class="form-control" type="text" name="street" placeholder="Street" aria-label="default input example">
    <div class="mb-3">
      <label for="formFile" class="form-label">Choose your check:</label>
      <input class="form-control" name="file"  type="file" id="formFile">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Comments</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button onclick="sendMessage()" class="btn btn-primary" type="submit">Send</button>
  </form>
  </div>
</div>
                                                <!--Login form-->

<div class="form">
<form action="Login.php" method="posts">
  <div class="form-content">
    <div class="dspl">
    <img onclick="Close()" id="close_icon" src="https://www.freeiconspng.com/thumbs/close-icon/red-close-icon-26.png" alt="close icon">
    <div class="left">
      <img id="signUp" src="signup-image.jpg" alt="sign_up" > 
    <p id="creater" onclick="goToRegister(this)"><ins>{{__('lang.Create an Account')}}</ins></p>
    </div>
     <div id="right">
      <p id="lgIn">{{__('lang.Sign Up')}}</p>
      <br>

      <div class="prof">
      <span id="profile" class="	glyphicon glyphicon-user"></span><input class="input " type="text" name="Username" id="_username" placeholder="Your Name" required></div>
      <div class="pass_1">
        <span id="pass1" class="	glyphicon glyphicon-envelope"></span><input class="input" type="email" name="Email" id="_email" placeholder="Your Email" required></div>
      <div class="prof">
      <span id="profile" class="	glyphicon glyphicon-lock"></span><input class="input" type="password" name="Password" id="_password" placeholder="Password" required></div>
      <div class="pass_2">
        <span id="pass2" class="	glyphicon glyphicon-earphone"></span><input class="input" type="telephone" name="telephone" id="telephone" placeholder="Telephone" required></div>
      <div class="remember">
          <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
          <label for="remember-me" class="label-agree-term"><span><span>{{__('lang.Remember me')}}</span></span></label>
      </div>

    <button onclick="SignIn(_username.value)" id="log_in" class="btn btn-success">{{__('lang.Log In')}}</button>
    <p id="ssss" onclick="goToRegister(this)"><ins>{{__('lang.Create an Account')}}</ins></p>
  </div>
  </div>
</div>
</form>
</div>

                                                  <!--Main-->

<div class="main_bet">
  <img id="b_image" src="Form-Background.jpg" alt="">
  <div class="paa">
    <button onclick="order()" class="order">{{__('lang.Order')}}</button>
</div>
  
</div>
                                          <!-- After Add To Card -->
<div class="form_carts">
  <div class="form-content_carts">
    <h1>{{__('lang.Your Order Added')}}</h1>
    <div class="forbtn">
    <button type="button" onclick="Close_carts()" class="btn btn-danger btn">{{__('lang.Continue')}}</button>
    <button type="button" onclick="cart()" class="btn btn-danger btn">{{__('lang.To Basket')}}</button>
    </div>
  </div>
</div>
                                                <!--Order Form-->

 <div class="form_order">
   <div class="form-content_order">
    <img onclick="Close_order()" id="close_icon" src="https://www.freeiconspng.com/thumbs/close-icon/red-close-icon-26.png" alt="close icon">
    <img onclick="BackToOrder1()" id="back_icon1" src="https://image.flaticon.com/icons/png/512/190/190238.png" alt="">
    <img onclick="BackToOrder2()" id="back_icon2" src="https://icon-library.com/images/back_1150397_4806.png" alt="">
    <h1 id="choosebrand">{{__('lang.Choose Your Brand')}}</h1>
    <div class="laptops">
      <!-- Macbook -->
      <div class="laptop">
        <img onclick="macbook()" onmouseover="displayTextNone(getElementById('m'))" onmouseout="displayTextShow(getElementById('m'))" id="laptopImg" src="https://cdn.mos.cms.futurecdn.net/GfinEMFXnT42BFxAcDc2rA.jpg" alt="">
        <div class="laptopWord">
          <b id="m">Macbook</b>
        </div>
      </div>
      <!-- Acer -->
      <div class="laptop">
        <img onclick="acer()"  onmouseover="displayTextNone(getElementById('ac'))" onmouseout="displayTextShow(getElementById('ac'))"  id="laptopImg" src="https://cdn.pocket-lint.com/r/s/1200x/assets/images/150583-laptops-review-hands-on-acer-spin-3-review-2020-image1-ck0rlscqtl.jpg" alt="">
        <div class="laptopWord">
          <b id="ac">Acer</b>
        </div>
      </div>
<!-- Asus -->
        <div class="laptop">
        <img  onclick="asus()"  onmouseover="displayTextNone(getElementById('as'))" onmouseout="displayTextShow(getElementById('as'))" id="laptopImg" src="https://bestlaptopsworld.com/wp-content/uploads/2018/08/Asus-Laptops.jpg" alt="">
          <div class="laptopWord">
          <b id="as">Asus</b>
          </div>
        </div>
<!-- Lenovo -->
          <div class="laptop">
          <img onclick="lenovo()"   onmouseover="displayTextNone(getElementById('l'))" onmouseout="displayTextShow(getElementById('l'))" id="laptopImg" src="https://techtestreport.com/wp-content/uploads/2020/07/Lenovo-X1-Carbon-5-1024x576.jpeg" alt="">
            <div class="laptopWord">
            <b id="l">Lenovo</b>
            </div>
          </div>
<!-- Dell -->
          <div class="laptop">
          <img onclick="dell()"onmouseover="displayTextNone(getElementById('d'))" onmouseout="displayTextShow(getElementById('d'))"  id="laptopImg" src="https://o.aolcdn.com/images/dims?quality=95&image_uri=https%3A%2F%2Fs.yimg.com%2Fuu%2Fapi%2Fres%2F1.2%2F.r2pXJiqJqO7HIKpLdOgCw--%7EB%2FaD0xMTE1O3c9MTYwMDthcHBpZD15dGFjaHlvbg--%2Fhttps%3A%2F%2Fo.aolcdn.com%2Fimages%2Fdims%3Fcrop%3D1600%252C1115%252C0%252C0%26quality%3D85%26format%3Djpg%26resize%3D1600%252C1115%26image_uri%3Dhttps%253A%252F%252Fs.yimg.com%252Fos%252Fcreatr-uploaded-images%252F2019-10%252F139eb770-ea9b-11e9-b67b-421533a30451%26client%3Da1acac3e1b3290917d92%26signature%3D3c4beef2c53c01c497fe27695bbf2bdd2c1af5f1&client=amp-blogside-v2&signature=d8911588744942975745cd83a19f6e0e10d494d2" alt="">
          <div class="laptopWord">
          <b id="d">Dell</b>
        </div>
      </div>
<!-- HP -->
    <div class="laptop">
      <img  onclick="hp()" onmouseover="displayTextNone(getElementById('h'))" onmouseout="displayTextShow(getElementById('h'))"  id="laptopImg" src="https://www.myfixguide.com/wp-content/uploads/2018/11/Hp-Elitebook745-G5-Disassembly-1.jpg" alt="">
        <div class="laptopWord">
        <b id="h">HP</b>
          </div>
        </div>
      </div>

<!-- After choosing Brand -->
    <!-- Macbook -->
    <div class="macbook">
      <div class="laptopName1">
        <img  onmouseover="displayTextNone(getElementById('m1'))" onmouseout="displayTextShow(getElementById('m1'))"  onclick="macbookAir()" id="laptopNameImg1" src="https://www.vippng.com/png/detail/159-1598519_apple-macbook-air-macbook-air-mre82-2018.png" alt="">
        <div class="laptopNameWord">
          <b  id="m1">Macbook Air</b>
        </div>
      </div>
      <div class="laptopName1">
        <img  onclick="macbookPro()"  onmouseover="displayTextNone(getElementById('m2'))" onmouseout="displayTextShow(getElementById('m2'))"   id="laptopNameImg1" src="https://i.gadgets360cdn.com/products/laptops/large/1546455476_635_apple_macbook-pro-a1278.jpg" alt="">
        <div class="laptopNameWord">
          <b  id="m2">Macbook Pro</b>
        </div>
      </div>
    </div>
    <!-- Acer -->
    <div class="acer">
      <div class="laptopName">
        <img  onclick="acerNitro()"  onmouseover="displayTextNone(getElementById('ac1'))" onmouseout="displayTextShow(getElementById('ac1'))"   id="laptopNameImg" src="https://static.acer.com/up/Resource/Acer/Laptops/Nitro_7/Images/20190507/Acer-Nitro-7-AN715-51-main.png" alt="">
        <div class="laptopNameWord">
          <b   id="ac1">Acer Nitro</b>
        </div>
      </div>
      <div class="laptopName">
        <img  onclick="acerSwift()"  onmouseover="displayTextNone(getElementById('ac3'))" onmouseout="displayTextShow(getElementById('ac3'))"   id="laptopNameImg" src="https://m.media-amazon.com/images/I/71r+jfdzwRL.jpg" alt="">
        <div class="laptopNameWord">
          <b   id="ac3">Acer Swift</b>
        </div>
      </div>
      <div class="laptopName">
        <img  onclick="acerPredator()"  onmouseover="displayTextNone(getElementById('ac2'))" onmouseout="displayTextShow(getElementById('ac2'))"   id="laptopNameImg" src="https://static.acer.com/up/Resource/Acer/Laptops/Predator_15/Image/20150908/Preator-15-main.png" alt="">
        <div class="laptopNameWord">
          <b  id="ac2">Acer Predator</b>
        </div>
      </div>
      <div class="laptopName">
        <img  onclick="acerAspire()" onmouseover="displayTextNone(getElementById('ac4'))" onmouseout="displayTextShow(getElementById('ac4'))"  id="laptopNameImg" src="https://static.acer.com/up/Resource/Acer/Laptops/Aspire_3/images/20190820/Acer-Aspire-3-A315-22-22G-34-main.png" alt="">
        <div class="laptopNameWord">
          <b  id="ac4">Acer Aspire</b>
        </div>
      </div>
    </div>
    <!-- Asus -->
    <div class="asus">
      <div class="laptopName">
        <img  onclick="asusZenbook()" onmouseover="displayTextNone(getElementById('as1'))" onmouseout="displayTextShow(getElementById('acas14'))"  id="laptopNameImg" src="https://www.ourshopee.com/ourshopee-img/ourshopee_products/thump/395411408web-07.jpg" alt="">
        <div class="laptopNameWord">
          <b   id="as1">Asus Zenbook</b>
        </div>
      </div>
      <div class="laptopName">
        <img onclick="asusVivobook()"onmouseover="displayTextNone(getElementById('as2'))" onmouseout="displayTextShow(getElementById('as2'))"  id="laptopNameImg" src="https://www.did.ie/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/4/m413da-ek007t_1.jpg" alt="">
        <div class="laptopNameWord">
          <b    id="as2">Asus Vivobook</b>
        </div>
      </div>
      <div class="laptopName">
        <img onclick="asusROG()"  onmouseover="displayTextNone(getElementById('as4'))" onmouseout="displayTextShow(getElementById('as4'))"  id="laptopNameImg" src="https://www.techtra-solutions.com/wp-content/uploads/2019/12/ROG-Strix-G-G531gd-GTX1050.png" alt="">
        <div class="laptopNameWord">
          <b   id="as4">Asus ROG</b>
        </div>
      </div>
      <div class="laptopName">
        <img onclick="asusChromebook()" onmouseover="displayTextNone(getElementById('as3'))" onmouseout="displayTextShow(getElementById('as3'))" id="laptopNameImg" src="https://www.expert.ie/media/catalog/product/cache/943253416458ce4d538fd5884dd2f446/a/s/asus_chromebook_c523na-br0067_display.png" alt="">
        <div class="laptopNameWord">
          <b   id="as3">Asus Chromebook</b>
        </div>
      </div>  
    </div>
    <!-- Lenovo -->
    <div class="lenovo">
      <div class="laptopName2">
        <img   onclick="lenovoLegion()"  onmouseover="displayTextNone(getElementById('l3'))" onmouseout="displayTextShow(getElementById('l3'))"  id="laptopNameImg2" src="https://thegoodguys.sirv.com/products/50062119/50062119_582535.PNG?scale.height=505&scale.width=773&canvas.height=505&canvas.width=773&canvas.opacity=0&q=90" alt="">
        <div class="laptopNameWord">
          <b id="l3">Lenovo Legion</b>
        </div>
      </div>
      <div class="laptopName2">
        <img  onclick="lenovoYoga()"   onmouseover="displayTextNone(getElementById('l2'))" onmouseout="displayTextShow(getElementById('l2'))"  id="laptopNameImg2" src="https://intellitech.co.ke/wp-content/uploads/2020/10/lenovo-thinkbook-13s-na-hero__80812_zoom.png" alt="">
        <div class="laptopNameWord">
          <b id="l2">Lenovo Yoga</b>
        </div>
      </div>
      <div class="laptopName2">
        <img  onclick="lenovoIdeaPad()"   onmouseover="displayTextNone(getElementById('l1'))" onmouseout="displayTextShow(getElementById('l1'))"  id="laptopNameImg2" src="https://thegoodguys.sirv.com/products/50071380/50071380_708541.PNG?scale.height=505&scale.width=773&canvas.height=505&canvas.width=773&canvas.opacity=0&q=90" alt="">
        <div class="laptopNameWord">
          <b  id="l1">Lenovo IdeaPad</b>
        </div>
      </div>
      <div class="laptopName2">
        <img  onclick="lenovoThinkPad()"  onmouseover="displayTextNone(getElementById('l4'))" onmouseout="displayTextShow(getElementById('l4'))"  id="laptopNameImg2" src="https://www.lenovo.com/medias/lenovo-laptop-thinkpad-l15-intel-hero.png?context=bWFzdGVyfHJvb3R8MzA3NzI5fGltYWdlL3BuZ3xoN2MvaDRjLzEwODIyNzM1Mjk4NTkwLnBuZ3wyYzE0YjFmNTFjYzkwMmJmZDU5ZTVlZDU0MzJhMjE4ZWRiMWMxZTJhZjBjMWZhZDg4ZDViMTU3MDViOTQxNGJj" alt="">
        <div class="laptopNameWord">
          <b   id="l4">Lenovo ThinkPad</b>
        </div>
      </div>
    </div>
    <!-- Dell -->
    <div class="dell">
      <div class="laptopName2">
        <img  onclick="dellXPS()"  onmouseover="displayTextNone(getElementById('d1'))" onmouseout="displayTextShow(getElementById('d1'))"   id="laptopNameImg2" src="https://m.media-amazon.com/images/I/91WgL3IbNIL.jpg" alt="">
        <div class="laptopNameWord">
          <b   id="d1">Dell XPS</b>
        </div>
      </div>
      <div class="laptopName2">
        <img  onclick="dellVostro()" onmouseover="displayTextNone(getElementById('d2'))" onmouseout="displayTextShow(getElementById('d2'))"   id="laptopNameImg2" src="https://i.dell.com/sites/imagecontent/products/PublishingImages/vostro-14-5471-laptop/1539_PDP_Vostro_Laptop_14_5470_02.jpg" alt="">
        <div class="laptopNameWord">
          <b    id="d2">Dell Vostro</b>
        </div>
      </div>
      <div class="laptopName2">
        <img  onclick="dellLatitude()"  onmouseover="displayTextNone(getElementById('d3'))" onmouseout="displayTextShow(getElementById('d3'))"   id="laptopNameImg2" src="https://images-na.ssl-images-amazon.com/images/I/71%2B%2BjSGKTSL._AC_SL1500_.jpg" alt="">
        <div class="laptopNameWord">
          <b    id="d3">Dell Latitude</b>
        </div>
      </div>
      <div class="laptopName2">
        <img  onclick="dellGSeries()"  onmouseover="displayTextNone(getElementById('d4'))" onmouseout="displayTextShow(getElementById('d4'))"   id="laptopNameImg2" src="https://images-na.ssl-images-amazon.com/images/I/71d538GEyxL._AC_SL1500_.jpg" alt="">
        <div class="laptopNameWord">
          <b id="d4">Dell G Series</b>
        </div>
      </div>
    </div>
    <!-- hp -->
    <div class="hp">
      <div class="laptopName">
        <img  onclick="hpSpectre()"  onmouseover="displayTextNone(getElementById('h1'))" onmouseout="displayTextShow(getElementById('h1'))"   id="laptopNameImg" src="https://images-na.ssl-images-amazon.com/images/I/81KPk6ZeglL._SL1500_.jpg" alt="">
        <div class="laptopNameWord">
          <b id="h1">HP Spectre</b>
        </div>
      </div>
      <div class="laptopName">
        <img   onclick="hpPavilion()" onmouseover="displayTextNone(getElementById('h2'))" onmouseout="displayTextShow(getElementById('h2'))"  id="laptopNameImg" src="https://images-na.ssl-images-amazon.com/images/I/81Cxu5r4O%2BL._SL1500_.jpg" alt="">
        <div class="laptopNameWord">
          <b id="h2">HP Pavilion</b>
        </div>
      </div>
      <div class="laptopName">
        <img onclick="hpEnvy()"  onmouseover="displayTextNone(getElementById('h3'))" onmouseout="displayTextShow(getElementById('h3'))"  id="laptopNameImg" src="https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c06074418.png" alt="">
        <div class="laptopNameWord">
          <b  id="h3">HP Envy</b>
        </div>
      </div>
      <div class="laptopName">
        <img onclick="hpElitebook()" onmouseover="displayTextNone(getElementById('h4'))" onmouseout="displayTextShow(getElementById('h4'))"   id="laptopNameImg" src="https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c06614804.png?imwidth=278&imdensity=1" alt="">
        <div class="laptopNameWord">
          <b id="h4">HP Elitebook</b>
        </div>
      </div>
    </div>

<!-- After choosing brands, after than choosing type  -->
<div class="macType">
    <div class="macbookAir">
      <div class="forblockcost">
        <img id="brandPng1" src="https://www.vippng.com/png/detail/159-1598519_apple-macbook-air-macbook-air-mre82-2018.png"  alt="">
        <p id="z1">$1897.99</p>
      </div>
      <div class="macbookAirWords">
          <h1>Apple MacBook Air</h1>
          <hr>
          <h4>{{__('lang.Description')}}</h4>
            <p>Display diagonal: 13 inch</p>
            <p>Processor Series: Intel Core i7</p>
            <p>Processor model: 1038NG7</p>
            <p>The amount of RAM: 8GB</p>
            <p>The volume of SSD drive: 512GB</p>
            <p>Operating System: Mac OS</p>
      </div>
      <button type="buttons" onclick="AddToCart(z1.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
<div class="macbookPro">
  <div class="forblockcost">
    <img id="brandPng1"  src="https://i.gadgets360cdn.com/products/laptops/large/1546455476_635_apple_macbook-pro-a1278.jpg" alt="">
    <p id="z2">$1984.99</p>
  </div>
    <div class="macbookAirWords">
      <h1>Apple MacBook Pro 13 </h1>
      <hr>
      <p>{{__('lang.Description')}}</p>
        <p>Display diagonal: 13.3 inch</p>
        <p>Processor Series: Intel Core i5</p>
        <p>Processor model: 1038NG7</p>
        <p>The amount of RAM: 16GB</p>
        <p>The volume of SSD drive: 1TB</p>
        <p>Operating System: Mac OS</p>
    </div>
    <button type="buttons" onclick="AddToCart(z2.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>

</div>
</div>


<div class="acerType">
  <div class="acerNitro">
    <div class="forblockcost">
      <img id="brandPng2"  src="https://static.acer.com/up/Resource/Acer/Laptops/Nitro_7/Images/20190507/Acer-Nitro-7-AN715-51-main.png" alt="">
      <p id="z3">$938.99</p>
    </div>
    <div class="macbookAirWords">
      <h1>Acer Nitro 5</h1>
      <hr>
      <p>{{__('lang.Description')}}</p>
        <p>Display diagonal: 15.6 inch</p>
        <p>Processor Series: Intel Core i5</p>
        <p>Processor model: 9300H</p>
        <p>The amount of RAM: 8GB</p>
        <p>The volume of SSD drive: 512GB</p>
        <p>Operating System: Linux</p>
    </div>
    <button type="buttons" onclick="AddToCart(z3.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="acerSwift">
    <div class="forblockcost">
    <img id="brandPng2"  src="https://m.media-amazon.com/images/I/71r+jfdzwRL.jpg" alt="">
    <p id="z4">$808.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Acer Swift 3</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i3</p>
          <p>Processor model: 1005G1</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z4.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="acerPredator">
    <div class="forblockcost">
    <img  id="brandPng2" src="https://static.acer.com/up/Resource/Acer/Laptops/Predator_15/Image/20150908/Preator-15-main.png" alt="">
    <p id="z5">$2091.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Acer Predator Helios 500</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10750H</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z5.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="acerAspire">
    <div class="forblockcost">
    <img id="brandPng2"  src="https://static.acer.com/up/Resource/Acer/Laptops/Aspire_3/images/20190820/Acer-Aspire-3-A315-22-22G-34-main.png" alt="">
    <p id="z6">$1045.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Acer Aspire 5</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 9750H</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z6.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
</div>


<div class="asusType">
  <div class="asusZenbook">
    <div class="forblockcost">
    <img  id="brandPng2" src="https://www.ourshopee.com/ourshopee-img/ourshopee_products/thump/395411408web-07.jpg" alt="">
    <p id="z7">$1212.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Asus Zenbook 15</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 1035G1</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z7.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="asusVivobook">
    <div class="forblockcost">
    <img id="brandPng2"  src="https://www.did.ie/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/4/m413da-ek007t_1.jpg" alt="">
    <p id="z8">$1521.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Asus Vivobook S403F</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10510U</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Endless OS</p>
      </div>
      <button type="buttons" onclick="AddToCart(z8.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="asusROG">
    <div class="forblockcost">
    <img  id="brandPng2" src="https://www.techtra-solutions.com/wp-content/uploads/2019/12/ROG-Strix-G-G531gd-GTX1050.png" alt="">
    <p id="z9">$1022.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Asus ROG Strix</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 10300H</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z9.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="asusChromebook">
    <div class="forblockcost">
    <img  id="brandPng2" src="https://www.expert.ie/media/catalog/product/cache/943253416458ce4d538fd5884dd2f446/a/s/asus_chromebook_c523na-br0067_display.png" alt="">
    <p  id="z10">$644.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Asus Chromebook Flip</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i3</p>
          <p>Processor model: 1115G4</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z10.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
</div>


<div class="lenovoType">
  <div class="lenovoLegion">
    <div class="forblockcost">
    <img  id="brandPng1" src="https://thegoodguys.sirv.com/products/50062119/50062119_582535.PNG?scale.height=505&scale.width=773&canvas.height=505&canvas.width=773&canvas.opacity=0&q=90" alt="">
    <p id="z11">$2377.99</p>
    </div>  
    <div class="macbookAirWords">
        <h1>Lenovo Legion Y7000</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10750H</p>
          <p>The amount of RAM: 32GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z11.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="lenovoYoga">
    <div class="forblockcost">
    <img  id="brandPng1" src="https://intellitech.co.ke/wp-content/uploads/2020/10/lenovo-thinkbook-13s-na-hero__80812_zoom.png" alt="">
    <p id="z12">$1589.99</p>
    </div>  
    <div class="macbookAirWords">
        <h1>Lenovo Yoga 930</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 1035G4</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z12.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="lenovoIdeaPad">
    <div class="forblockcost">
    <img id="brandPng1" src="https://thegoodguys.sirv.com/products/50071380/50071380_708541.PNG?scale.height=505&scale.width=773&canvas.height=505&canvas.width=773&canvas.opacity=0&q=90" alt="">
    <p id="z13">$974.99</p>
    </div>  
    <div class="macbookAirWords">
        <h1>Lenovo IdeaPad S340</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10750H</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: DOS</p>
      </div>
      <button type="buttons" onclick="AddToCart(z13.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="lenovoThinkPad">
    <div class="forblockcost">
    <img  id="brandPng1" src="https://www.lenovo.com/medias/lenovo-laptop-thinkpad-l15-intel-hero.png?context=bWFzdGVyfHJvb3R8MzA3NzI5fGltYWdlL3BuZ3xoN2MvaDRjLzEwODIyNzM1Mjk4NTkwLnBuZ3wyYzE0YjFmNTFjYzkwMmJmZDU5ZTVlZDU0MzJhMjE4ZWRiMWMxZTJhZjBjMWZhZDg4ZDViMTU3MDViOTQxNGJj" alt="">
    <p id="z14">$988.99</p>
    </div>  
    <div class="macbookAirWords">
        <h1>Lenovo ThinkPad X1 Carbon</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 8265U</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 256GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z14.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
</div>


<div class="dellType">
  <div class="dellXPS">
    <div class="forblockcost">
    <img id="brandPng1"  src="https://m.media-amazon.com/images/I/91WgL3IbNIL.jpg" alt="">
    <p id="z15">$2119.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Dell XPS 15</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 13.3 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 1065G7</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z15.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="dellVostro">
    <div class="forblockcost">
    <img id="brandPng1"  src="https://i.dell.com/sites/imagecontent/products/PublishingImages/vostro-14-5471-laptop/1539_PDP_Vostro_Laptop_14_5470_02.jpg" alt="">
    <p id="z16">$889.99</p>
    </div>  
    <div class="macbookAirWords">
        <h1>Dell Vostro 5501</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 10210U</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 256GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z16.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="dellLatitude">
    <div class="forblockcost">
    <img  id="brandPng1" src="https://images-na.ssl-images-amazon.com/images/I/71%2B%2BjSGKTSL._AC_SL1500_.jpg" alt="">
    <p id="z17">$2020.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Dell Latitude E7440</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 13.3 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 10310U</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z17.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="dellGSeries">
    <div class="forblockcost">
    <img  id="brandPng1" src="https://images-na.ssl-images-amazon.com/images/I/71d538GEyxL._AC_SL1500_.jpg" alt="">
    <p id="z18">$2644.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Dell G Series</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 17.3 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10750H</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z18.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
</div>


<div class="hpType">
  <div class="hpSpectre">
    <div class="forblockcost">
    <img id="brandPng2"  src="https://images-na.ssl-images-amazon.com/images/I/81KPk6ZeglL._SL1500_.jpg" alt="">
    <p id="z19">$1419.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>HP Spectre X360</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 13.3 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 1035G4</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z19.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="hpPavilion">
    <div class="forblockcost">
    <img  id="brandPng2" src=" https://images-na.ssl-images-amazon.com/images/I/81Cxu5r4O%2BL._SL1500_.jpg" alt="">
    <p id="z20">$1259.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>HP Pavilion 15</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 16.1 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10750H</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z20.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="hpEnvy">
    <div class="forblockcost">
    <img  id="brandPng2" src="https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c06074418.png" alt="">
    <p id="z21">$1229.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>HP Envy 17</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 1065G7</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z21.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  <div class="hpElitebook">
    <div class="forblockcost">
    <img  id="brandPng2"   src="https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c06614804.png?imwidth=278&imdensity=1" alt="">
    <p id="z22">$1537.99</p>
    </div> 
      <div class="macbookAirWords">
        <h1>HP Elitebook 840 G7</h1>
        <hr>
        <p>{{__('lang.Description')}}</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 10210U</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z22.textContent)" class="cartbtn btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
</div> 


  </div>
 </div>

  

                                                <!--About Us-->

<img id="about_" src="about-us.png" alt="">
  <p id="aboutUswords1">{{__('lang.This website is focused to help people in buying the best laptop within their budget. It is managed by a team of passionate laptop professionals who undergoes a lot of research and laptop testing every day to compile the list of best laptops in different price ranges and create in-depth laptop buying guides for various requirements of people.')}} <br><br> {{__('lang.Whether you’re looking for a laptop within a specific budget or for any particular task, our well-researched and regularly updated laptop buying guides will direct you in the right direction and help you to make an informed purchase of your next laptop.')}}</p>
  <h1 id="aboutUswords2">{{__('lang.How We Pick Laptops?')}}</h1><br>
  <p id="aboutUswords3">{{__('lang.Every laptop that we test passes through a long list of our quality checking guidelines before we recommend it in our laptop buying guides.')}} <br><br>{{__('lang.The laptops suggested to you undergoes a host of CPU and GPU benchmarking tests, battery life tests, data transfer speed tests of internal storage drives, tests for brightness-level and color-accuracy of the display, keyboard and trackpad tests and many other tests to check the durability and build quality of chassis.')}} <br> <br>{{__('lang.Apart from these tests, we make sure that all the laptops suggested on our website comes from trustworthy manufacturers, and you get at least one year of warranty with it.')}}</p>
  <h1 id="aboutUswords4">{{__('lang.From Where to Buy Laptops?')}}</h1><br>
  <p id="aboutUswords5">{{__('lang.To simplify your buying experience, we provide links to the best laptop deals in our laptop buying guides. We compare the prices of each laptop model that we recommend on the laptop manufacturers’ web stores and other leading laptop shopping websites such as Amazon, New Egg, Best Buy, Walmart, and more.')}} <br><br> {{__('lang.Moreover, we update all the laptop buying guides regularly, so all buying guides here at Laptop Under Budget are always up to date with the latest laptop models and links to purchase our recommended laptops at best possible rates.')}} <br><br>{{__('lang.So, you can confidently purchase from our recommended retailers without worrying about anything.')}} <br> <br> {{__('lang.Note: If you make a purchase through the links on our site, we might earn a little commission. While that’s the best way to support this site as most of the laptops we test are purchased with that money. But, we want to let our readers know that our laptop recommendations never get manipulated by our partnerships with laptop retailers. In fact, our editorial team is never made aware of any such partnerships, and it works completely independent from our sales & marketing team.')}} <br><br>{{__('lang.We strive to create the quality laptop buying guides with honest and unbiased opinions from the day we started this website back in 2016, and may that’s why we are still in business and loved by our readers. This site receives over 200,000 visitors every month, and our laptop buying guides help a lot of people every day to buy the best laptop for their needs.')}}</p>
  <h1 id="aboutUswords6">{{__('lang.Need Personal Assistance to Buy Laptop?')}}</h1><br>
  <p id="aboutUswords7">{{__('lang.If you are a non-technical person, then it could be very difficult for you to find the best laptop for yourself. Rest easy, because we are here to help you with that. You can send all your laptop-related questions, requirements and budget to us through a form on the Get Expert Advice page, and our team will assist you in finding the best laptop for yourself.')}}</p><br>
                                           
                                                <!-- Best Of Best -->

<div class="best">
  <div class="best1">
    <img  id="bestImg" src="https://t.ipadizate.es/2020/04/Macbook-Pro-13-1.jpg" alt="">
    <!-- a0a089692ab564162b61338bd274c967.jpg -->
    <div class="bestWords">
      <h1>Apple MacBook Air (M1, 2020)</h1>
      <p>{{__('lang.The new Apple MacBook Air (M1, 2020) isnt just the best laptop Apple has ever made, its the best laptop money can buy right now. This is the first time a MacBook has topped our best laptops list, but the MacBook Air is worthy of this spot. Thanks to the revolutionary ARM-based Apple M1 chip that powers the new MacBook Air, this is a stunning achievement: a thin and light laptop that offers great performance, even with 4K video editing, while also offering incredible battery life. Easily managing over 11 hours on a single charge, this is a laptop you can easily carry around with you at work or school, and its price is incredibly competitive compared to Windows 10 rivals like the Dell XPS 15.')}}</p>
      <div class="forclass">  
      <i id="for" class="fa fa-plus-circle"> {{__('lang.FOR')}}</i>
      <div class="plusFor">
        <p>{{__('lang.Silent to use')}}</p>
        <p>{{__('lang.Amazing battery life')}}</p>
        <p>{{__('lang.Very fast performance')}}</p>
        <p>{{__('lang.Luxe design')}}</p>
      </div>
      </div>
    </div>
  </div>


<br><br>

  <div class="best2">
    <img  id="bestImg" src="hp-spectre-x360-13-2020-different-modes.webp" alt="">
    <div class="bestWords">
      <h1>HP Spectre x360 (2020)</h1>
      <p>{{__('lang.The HP Spectre x360 2-in-1 laptop has had a big refresh for 2020, and the boost in specs, with 10th-generation Intel Core processors and Intel Iris Plus graphics, along with the impeccable 2-in-1 design and pristine gem-cut chassis, means that the new version has a well-deserved spot towards the top of our best laptops list.')}}<br>{{__('lang.The HP Spectre x360 is now more powerful and feature-rich than ever. Just when you think this premium line couldn’t possibly get any better, HP takes it to a whole new level in 2020. This latest addition to line brings in key updates and new features while also bringing back all the features we already know and love.')}}</p>
      <div class="forclass">
      <i id="for" class="fa fa-plus-circle"> {{__('lang.FOR')}}</i>
      <div class="plusFor">
        <p>{{__('lang.Stylish and high-quality finish')}}</p>
        <p>{{__('lang.Great all-around performance')}}</p>
        <p>{{__('lang.Long battery life')}}</p>
        <p>{{__('lang.Webcam and MicroSD slot')}}</p>
        <p>{{__('lang.Excellent value')}}</p>
      </div>
    </div>
    </div>
  </div>
  <br><br>


  <div class="best3">
    <img id="bestImg" src="Dell-XPS-15-17-featured.jpg" alt="">
    <div class="bestWords">
      <h1>Dell XPS 13 (2020) </h1>
      <p>{{__('lang.The Dell XPS 13 (2020) with Intel Evo is a gorgeous little machine that offers excellent performance, battery life, and more. It comes at the expense of ports, sound quality, and price, but none of these are enough for us to not highly recommend this laptop to anyone in the market for an ultrabook.The latest Dell XPS 13 keeps all the things we loved about this year’s previous model, such as a smaller frame, four-sided InfinityEdge bezels and a larger keyboard.')}}</p>
      <div class="plus">
        <div class="forclass">  
        <i id="for" class="fa fa-plus-circle"> {{__('lang.FOR')}}</i>
        <div class="plusFor">
          <p>{{__('lang.Stunning design')}}</p>
          <p>{{__('lang.Gorgeous 16:10 display')}}</p>
          <p>{{__('lang.Excellent battery life')}}</p>
          <p>{{__('lang.Decent amount of power')}}</p>
        </div>
        </div>
      </div>
    </div>
  </div>
  
  <br><br>

<div class="best4">
  <img  id="bestImg" src="Acer-Swift-3-23-scaled-e1600784687679.jpg" alt="">
  <!-- porsche-design-feature_960x582.png -->
  <div class="bestWords">
    <h1>Acer Swift 3 (2020)</h1>
    <p>{{__('lang.Beyond the Acer Swift 3s modest exterior, youll find an excellent laptop that boasts plenty of power for work and study. The Swift 3 (not to be confused with the Switch 3 another laptop from Acer) is an inexpensive laptop; however, that plain chassis is all-aluminum and packed with beefy components.')}} <br>{{__('lang.This laptop is incredible to use as well, with its roomy trackpad as well as its backlit keyboard that offers a comfortable typing experience with decent travel. If youre going to be writing a lot – whether you’re traveling or at the office, this is one of the best budget laptops 2020 has on offer.')}}</p>
    <div class="forclass">
    <i id="for" class="fa fa-plus-circle"> {{__('lang.FOR')}}</i>
    <div class="plusFor">
      <p>{{__('lang.Herculean performance')}}</p>
      <p>{{__('lang.A beastly multitasker')}}</p>
      <p>{{__('lang.Superb keyboard and trackpad')}}</p>
      <p>{{__('lang.Very reasonably priced')}}</p>
    </div>
  </div>
  </div>
</div>
<br><br>

<div class="best5">
  <img  id="bestImg" src="asus-rog-zephyrus-g14-is-now-available-with-a-hidden-led-display-on-its-lid.jpg" alt="">
  <div class="bestWords">
    <h1>Asus ROG Zephyrus G14 (2020)</h1>
    <p>{{__('lang.Asus is stepping up its game when it comes to gaming laptops. Case in point, the Asus ROG Zephyrus G14. Powered by AMDs new powerful Ryzen 9-4900HS processor, the laptop is a powerful multitasker. Top that off with a lightning-fast SSD, a bright, 14-inch, 120Hz display, a comfortable keyboard and strong speakers packed into a gorgeous milky-white magnesium alloy chassis, and the ROG Zephyrus G14 is a near-perfect gaming laptop.')}}<br>{{__('lang.But where the Zephyrus G14 really shines is its battery life. The top-rated laptop lasted 11 hours and 32 minutes on our Laptop Mag Battery test, making it the longest-lasting gaming laptop ever.')}}</p>
    <div class="forclass">
    <i id="for" class="fa fa-plus-circle"> {{__('lang.FOR')}}</i>
    <div class="plusFor">
      <p>{{__('lang.Best battery life in a gaming laptop')}}</p>
      <p>{{__('lang.Killer AMD and Nvidia performance')}}</p>
      <p>{{__('lang.Thin and light')}}</p>
      <p>{{__('lang.QLED display')}}</p>
    </div>
  </div>
  </div>
</div>


</div>
                                                <!-- Overview -->
  <img id="overview_img" src="af24c65158c098d9c89619fce57399ee-logo-large.png" alt="">
  <div class="overview_">
    <h3 id="over_words">{{__('lang.A laptop is a small, portable personal computer with a "clamshell" form factor, typically having a thin LCD or LED computer screen mounted on the inside of the upper lid of the clamshell and an alphanumeric keyboard on the inside of the lower lid. The clamshell is opened up to use the computer. Laptops are folded shut for transportation, and thus are suitable for mobile use. Its name comes from lap, as it was deemed to be placed on a persons lap when being used.')}}</h3>
    <img id="over_" src="laptops-lowres-2x1--1024x512.jpg" alt="">
  </div>
                                                  <!-- Videos -->

<div class="videos">
  <!-- 1 -->
  <div class="videos1">
    <iframe id="vid" src="https://www.youtube.com/embed/jCYoCa3--Sk"></iframe>
    <div class="videoWords">
      <h1>
        Dell XPS 15 Laptop 2020
      </h1>
      <br>
      <div class="pVideoWords">
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/processor-blk.svg" width="30px" alt=""><p id="vw"> 10th Generation Intel® Core i7-9750H </p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/laptop-blk.svg" width="30px" alt=""><p id="vw"> Windows 10 Home English</p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/videocard-blk.svg" width="30px" alt=""><p id="vw"> NVIDIA GeForce GTX 1650 Ti (4GB GDDR6)</p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/memory-blk.svg" width="30px" alt=""><p id="vw"> 32GB, DDR4-2633 МHz</p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/harddrive-blk.svg" width="30px" alt=""><p id="vw"> 1TB M.2 PCIe NVMe Solid State Drive</p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/color-blk.svg" width="30px" alt=""><p id="vw"> Intel UHD Graphics 630, Soft Touch, Color:Grey,Black </p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/ports-blk.svg" width="30px" alt=""><p id="vw"> Ports & Slots</p>
        </div>
      </div>
    </div>
  </div>
  <br><br>
<!-- 2 -->

  <div class="videos2">
    <iframe id="vid" src="https://www.youtube.com/embed/0HUDsXQ5O2M"></iframe>
    <div class="videoWords">
      <h1>
        Acer Nitro 5 Laptop 2020 
      </h1>
      <br>
      <div class="pVideoWords">
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/processor-blk.svg" width="30px" alt=""><p id="vw"> 10th Generation Intel® Core™ i7-10750H</p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/laptop-blk.svg" width="30px" alt=""><p id="vw"> Windows 10 Home, 64-bit, English</p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/videocard-blk.svg" width="30px" alt=""><p id="vw"> NVIDIA® GeForce RTX™ Graphics</p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/memory-blk.svg" width="30px" alt=""><p id="vw"> 32GB, onboard, DDR4-2933MHz</p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/harddrive-blk.svg" width="30px" alt=""><p id="vw"> 1TB PCIe NVMe SSD</p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/color-blk.svg" width="30px" alt=""><p id="vw"> LCD Back Cover - Black</p>
        </div>
        <div class="videoImg">
          <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/ports-blk.svg" width="30px" alt=""><p id="vw"> Ports & Slots</p>
        </div>
      </div>
    </div>
  </div>
  <br><br>
<!-- 3 -->

<div class="videos3">
  <iframe id="vid" src="https://www.youtube.com/embed/kwlOAeFLKH0"></iframe>
  <div class="videoWords">
    <h1>
      ASUS TUF Gaming Laptop 2020
    </h1>
    <br>
    <div class="pVideoWords">
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/processor-blk.svg" width="30px" alt=""><p id="vw"> AMD Ryzen 7 3750H </p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/laptop-blk.svg" width="30px" alt=""><p id="vw"> Windows 10 Home English</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/videocard-blk.svg" width="30px" alt=""><p id="vw"> NVIDIA GeForce GTX 1650 Ti (6GB GDDR6)</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/memory-blk.svg" width="30px" alt=""><p id="vw"> 8GB DDR4-2400 МHz</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/harddrive-blk.svg" width="30px" alt=""><p id="vw"> 512GB Solid State Drive</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/color-blk.svg" width="30px" alt=""><p id="vw"> Asus Aura RGB, Overstroke, Hyperfan </p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/ports-blk.svg" width="30px" alt=""><p id="vw"> Ports & Slots</p>
      </div>
    </div>
  </div>
</div>
<br><br>
<!-- 4 -->

<div class="videos4">
  <iframe id="vid" src="https://www.youtube.com/embed/VNvRJRYYM4Q"></iframe>
  <div class="videoWords">
    <h1>
      Dell Inspiron 15 Laptop 2020
    </h1>
    <br>
    <div class="pVideoWords">
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/processor-blk.svg" width="30px" alt=""><p id="vw"> 10th Generation Intel® Core™ i7-10750H</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/laptop-blk.svg" width="30px" alt=""><p id="vw"> Windows 10 Pro (64bit) English</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/videocard-blk.svg" width="30px" alt=""><p id="vw"> NVIDIA® GeForce GTX® 1650 Ti 4GB GDDR6</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/memory-blk.svg" width="30px" alt=""><p id="vw"> 8GB, onboard, DDR4, 2933MHz</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/harddrive-blk.svg" width="30px" alt=""><p id="vw"> 512GB M.2 PCIe NVMe Solid State Drive</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/color-blk.svg" width="30px" alt=""><p id="vw"> LCD Back Cover - Silver</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/ports-blk.svg" width="30px" alt=""><p id="vw"> Ports & Slots</p>
      </div>
    </div>
  </div>
</div>
<br><br>

<!-- 5 -->
<div class="videos5">
  <iframe id="vid" src="https://www.youtube.com/embed/E1m_c9ltFOk"></iframe>
  <div class="videoWords">
    <h1>
      Macbook Pro 16 Laptop 2020
    </h1>
    <br>
    <div class="pVideoWords">
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/processor-blk.svg" width="30px" alt=""><p id="vw"> 10th Generation Intel® Core i7 or i9 processor </p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/laptop-blk.svg" width="30px" alt=""><p id="vw"> MAC OS English</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/videocard-blk.svg" width="30px" alt=""><p id="vw"> AMD Radeon Pro 5000M series graphics</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/memory-blk.svg" width="30px" alt=""><p id="vw"> 16GB, DDR4-2400 МHz</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/harddrive-blk.svg" width="30px" alt=""><p id="vw"> 8TB Solid State Drive</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/color-blk.svg" width="30px" alt=""><p id="vw">  SSD Space Gray/Silver/Gold</p>
      </div>
      <div class="videoImg">
        <img src="https://afcs.dellcdn.com/csb/configux/bundles/1.0.5.21077/images/ports-blk.svg" width="30px" alt=""><p id="vw"> Ports & Slots</p>
      </div>
    </div>
  </div>
</div>
</div>

                                                <!-- Accessories -->

  <!-- 1 , 1  Mishka-->
<div class="accessories">
  <div class="acces">
    <img id="mousePic" src="61oQp1kJbQL._AC_SL1500_.jpg" alt="">
    <div class="word card-body text-center">
      <p id="word1">{{__('lang.PICTEK Gaming Mouse with Wired 7200 DPI, Programmable, Ergonomic Game USB Computer')}}</p>
      <p id="p1"> $29.99 </p>
      <button type="buttons" onclick="AddToCart(p1.textContent)" id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
    </div>
  </div>
  <br><br>
  <br><br>
  <!-- 1 , 2 Mishka -->
  <div class="acces">
    <img id="mousePic" src="pc-mouse-png-image-5a3567e2f2f615.1000006415134494429952.jpg" alt="">
    <div class="word card-body text-center">
      <p>{{__('lang.Razer Basilisk Ultimate HyperSpeed Wireless Gaming Mouse w/ Charging Dock')}} </p>
      <p id="p2"> $18.99</p>
      <button type="buttons" onclick="AddToCart(p2.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
    </div>
  </div>
  <br><br>
  <br><br>
  <!-- 1 , 3 Mishka-->
  <div class="acces">
    <img id="mousePic" src="https://m.media-amazon.com/images/I/61H-DBquQoL._AC_SS450_.jpg" alt="">
    <div class="word card-body text-center">
      <p>{{__('lang.PICTEK RGB Chroma Backlit Gaming Mouse Wired, Comfortable Grip Ergonomic Optical PC Computer')}}</p>
      <p id="p3"> $68.99</p>
      <button type="buttons" onclick="AddToCart(p3.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
    </div>
  </div>
  <br><br>
  <br><br>
  
   <!--2, 1 Klavitura-->
   <div class="acces">
    <img id="mousePic" src="713xhiKF2rL._AC_SL1500_.jpg" alt="">
    <div class="word card-body text-center">
      <p>{{__('lang.SteelSeries Apex 7 TKL Compact Mechanical Gaming Keyboard – OLED Smart')}}</p>
      <p id="p4"> $229.99</p>
      <button type="buttons" onclick="AddToCart(p4.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
    </div>
  </div>
  <br><br>
  <br><br>
  <!-- 2 , 2  Klavitura-->
  <div class="acces">
    <img id="mousePic" src="717EYS4LWvL._AC_SL1500_.jpg" alt="">
    <div class="word card-body text-center">
      <p>{{__('lang.Redragon K552 Mechanical, RGB, LED, Rainbow, Backlit Wired Gaming Keyboard with Red Switches')}}</p>
      <p id="p5"> $167.99</p>
      <button type="buttons" onclick="AddToCart(p5.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
    </div>
  </div>
  <br><br>
  <br><br>
  <!-- 3 , 1 Sumka-->
  <div class="acces">
    <img id="mousePic" src="51IXmKd8AeL._AC_SL1000_.jpg" alt="">
    <div class="word card-body text-center">
      <p>{{__('lang.Herschel Leather,Vaschy Casual Water-resistant, Little America Laptop Backpack with Material Polyester')}}</p>
      <p id="p6"> $193.99</p>
      <button type="buttons" onclick="AddToCart(p6.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
    </div>
  </div>
    <br><br>
    <br><br>
  <!-- 3 , 2 Sumka-->
  <div class="acces">
    <img id="mousePic" src="915z7HsGdTL._AC_UX569_.jpg" alt="">
    <div class="word card-body text-center">
      <p>{{__('lang.Voova Laptop Sleeve Bag 17-17.3 Inch Carrying Case and 360° Protective Computer Bag Compatible')}}</p>
      <p id="p7"> $34.99</p>
      <button type="buttons" onclick="AddToCart(p7.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
    </div>
  </div>
    <br><br>
    <br><br>
  <!-- 3 , 3 Sumka-->
  <div class="acces">
    <img id="mousePic" src=" 710WwA5iVKL._AC_SL1180_.jpg" alt="">
    <div class="word card-body text-center">
      <p>{{__('lang.2020 Hot sale custom logo computer bag laptop hand shoulder bag 15.6in carry case')}} </p>
      <p id="p8"> $50.99</p>
      <button type="buttons" onclick="AddToCart(p8.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
    </div>
  </div>
    <br><br>
    <br><br>
 
  
  <!-- 4 , 1 Kovrik-->
  <div class="acces">
  <img id="mousePic" src="71eWiz54b1L._AC_SL1500_.jpg" alt="">
  <div class="word card-body text-center">
    <p>{{__('lang.RGB Gaming Mouse Pad, UtechSmart Large Extended Soft Led Mouse Pad 14 Lighting')}}</p>
    <p id="p9">	$17.99 </p>
    <button type="buttons" onclick="AddToCart(p9.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
  </div>
  </div>
  <br><br>
  <br><br>
  <!-- 4 , 2 Kovrik-->
  <div class="acces">
    <img id="mousePic" src="915igZ7HGFL._AC_SL1500_.jpg" alt="">
    <div class="word card-body text-center">
      <p>{{__('lang.RUNMUS Gaming Headset PC Headset with 7.1 Surround Sound, PS4 Headset with Stitched Edges, Long XXL Mousepad')}}</p>
      <p id="p10">	$21.99 </p>
      <button type="buttons" onclick="AddToCart(p10.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
    </div>
  </div>
    <br><br>
    <br><br>
   
    <!-- 5,1 Naushnik-->
    <div class="acces">
      <img id="mousePic" src="61-K-2-0w1L._AC_SL1305_.jpg" alt="">
      <div class="word card-body text-center">
        <p>{{__('lang.RUNMUS Gaming Headset PC Headset with 7.1 Surround Sound, PS4 Headset and RGB Light')}}</p>
        <p id="p11"> $179.99</p>
        <button type="buttons" onclick="AddToCart(p11.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
      </div>
    </div>
      <br><br>
      <br><br>
      <!-- 5,2 Naushnik-->
      <div class="acces">
        <img id="mousePic" src="71ScZAeWMRL._AC_SL1500_.jpg" alt="">
        <div class="word card-body text-center">
          <p>{{__('lang.SteelSeries Arctis Pro + GameDAC Wired Gaming Headset-Certified Hi-Res Audio-Dedicated DAC')}}</p>
          <p id="p12"> $125.99</p>
          <button type="buttons" onclick="AddToCart(p12.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
        </div>
      </div>
        <br><br>
        <br><br>
        <!-- 6,1 Videokarta-->
    <div class="acces">
      <img id="mousePic" src="81PA6JIv8pL._AC_SL1500_.jpg" class="card-img-top" alt="">
      <div class="word card-body text-center">
        <p>{{__('lang.Havit5 Fans Laptop Cooling Pad for 14-17 Inch Laptop, Cooler Pad with LED Light, Dual USB 2.0 Ports')}}</p>
        <p  id="p13"> $29.99</p>
        <button type="buttons" onclick="AddToCart(p13.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
      </div>
    </div>
      <br><br>
      <br><br>
      <!-- 6,2 Videokarta-->
      <div class="acces">
        <img id="mousePic" src="81Epul96ujL._AC_SL1500_.jpg" class="card-img-top" alt="">
        <div class="word card-body text-center">
          <p>{{__('lang.Laptop Cooling Pad, Gaming Laptop Cooler Stand with 4 Silent Big Fans for Notebook')}}</p>
          <p id="p14"> $30.99</p>
          <button type="buttons" onclick="AddToCart(p14.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
        </div>
      </div>
        <br><br>
        <br><br>
        <!-- 6 , 3 Videokarta-->
        <div class="acces">
          <img id="mousePic" src="81saz3XJWuL._AC_SL1500_.jpg" class="card-img-top" alt="">
          <div class="word card-body text-center">
            <p>{{__('lang.ICE COOREL RGB Laptop Cooling Pad for 15.6-17.3 Inch, LCD Screen and Rainbow Lights Laptop')}}</p>
            <p id="p15">	$38.99 </p>
            <button type="buttons" onclick="AddToCart(p15.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
        </div>
        </div>
          <br><br>
          <br><br>
          <!-- 7,1 USB-->
          <div class="acces">
            <img id="mousePic" src="d312904d0cae29aa209dd8e0145636f4bf691114_16416218939422.jpg" alt="">
            <div class="word card-body text-center">
              <p>{{__('lang.HP, USB 2.0 A-B, 1,8m Blue Max Current-900mA, transfer data at up to 5 Gbit/s, port with "SS",')}} </p>
              <p id="p16"> $3.99</p>
              <button type="buttons" onclick="AddToCart(p16.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
            </div>
          </div>
            <br><br>
            <br><br>
            <!-- 8,1 Adapter-->
            <div class="acces">
              <img id="mousePic" src="7e6c1312dd4ed0403bf6fa62b2ba8436a435c4be_229657_1.jpg" alt="">
              <div class="word card-body text-center">
                <p>{{__('lang.Adapter USB Hub ORICO to 4*USB 3.0, Some modify power attributes, Black (W8PH4-U3-BK-BP)')}}</p>
                <p id="p17"> $11.99</p>
                <button type="buttons" onclick="AddToCart(p17.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
              </div>
            </div>
              <br><br>
          <br><br>
          <!-- 9,1  Fleshka-->
        <div class="acces">
          <img id="mousePic" src="9ffe73aeaee148983d0e3b1dd9ca6ce5e600c81b_12058300612638.jpg" alt="">
          <div class="word card-body text-center">
            <p>{{__('lang.USB Flash Drive 32GB Transcend JetFlash 700 (TS32GJF700), Gen 1 TS128GJF910')}}</p>
            <p id="p18"> $14.99</p>
            <button type="buttons"  onclick="AddToCart(p18.textContent)" id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
          </div>
  </div>
          <br><br>
          <br><br>
          <!-- 10,1  HDMI-->
          <div class="acces">
            <img id="mousePic" src="c06149458.png" alt="">
            <div class="word card-body text-center">
              <p>{{__('lang.Premium High Speed HDMI cable with Ethernet (3 feet), version 2.0, 4K Ultra HD video and HDR')}}</p>
              <p  id="p19"> $14.99</p>
              <button type="buttons" onclick="AddToCart(p19.textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
            </div>
    </div>
            <br><br>
            <br><br>
          <!-- 11,1  Power bank,USB-->
          <div class="acces">
            <img id="mousePic" src="88bee1c9-460d-404e-b5c7-3d8aaac5c26d.jpg" alt="">
            <div class="word card-body text-center">
              <p>{{__('lang.HP USB-C Universal Dock - Docking station, USB-C, GigE - 90 Watt - Smart, Buy - United States')}}</p>
              <p  id="p20"> $14.99</p>
              <button type="buttons" onclick="AddToCart(p20 .textContent)"  id="footer_btn" class="btns btn-danger btn">{{__('lang.Add to Cart')}}</button>
            </div>
    </div>
            <br><br>
            <br><br>

</div>

                                                <!-- Follow us -->

<div class="follow_us">
    <h1 class="flw">{{__('lang.Follow us!')}}</h1>
    <br>
    <a href ="https://twitter.com/login?lang=en"target="_blank"><img  id="suret" src ="data:image/png;base64,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"></a>
    <a href = "https://www.facebook.com/" target="_blank"><img id="suret"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRXHPKFhyhXAM7hRP_kFAhkBve8H4WJgtJnGw&usqp=CAU"></a>
    <a href = "https://www.instagram.com/"target="_blank"><img id="suret"  src = "data:image/jpeg;base64,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"> </a>
    <a href ="https://www.youtube.com/" target="_blank"><img  id="suret" src="https://icons-for-free.com/iconfiles/png/512/youtube+icon-1320192250492566023.png"></a>
    <a href ="https://mail.google.com/mail/u/0/#inbox"target="_blank"><img  id="suret" src="data:image/png;base64,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" ></a>
    <a href = "https://vk.com/" target="_blank"><img  id="suret" src = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwqCYJHQuWnQLrWCDMoAsOSKN9UEMuEP3aNw&usqp=CAU"></a>
  </div>
  <br> <br>

                                                <!-- Contact Us -->
    <div class="contact_us">
  <!--Map-->
  
  <div class="contactUsWords">
    <br>
    <h1 class="c-us">
      {{__('lang.Contact Us')}}
    </h1> 
    <br>
    <p ><img src="unnamed.png" width="32px" alt="" >  {{__('lang.DirectShop , st. Satbayeva, 47/1, Almaty 050057')}}</p>
    <p><strong><span class="glyphicon glyphicon-envelope" style="font-size:32px"></span> </strong> 190103348@stu.sdu.edu.kz</p>
    <p> <i class="fa fa-whatsapp" style="font-size:42px"></i>  +7 707 741 45 67</p>
    <div id="phone">
      <div id="spans">
        <span class="glyphicon glyphicon-earphone" ></span>
      </div>
    <div id="phoneNumbers">
    <p> +7 (776) 003 40 39</p>
    <p> +7 (727) 214 10 10</p>
    </div>
  </div>
  </div>
  <div id="map">
  </div>

</div>

</body>
</html>