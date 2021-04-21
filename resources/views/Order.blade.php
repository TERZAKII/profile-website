<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
</head>
<body>
    
 <div class="form_order">
   <div class="form-content_order">
    <img onclick="Close_order()" id="close_icon" src="https://www.freeiconspng.com/thumbs/close-icon/red-close-icon-26.png" alt="close icon">
    <img onclick="BackToOrder1()" id="back_icon1" src="https://image.flaticon.com/icons/png/512/190/190238.png" alt="">
    <img onclick="BackToOrder2()" id="back_icon2" src="https://icon-library.com/images/back_1150397_4806.png" alt="">
    <h1 id="choosebrand">Choose Your Brand</h1>
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
          <h4>Description</h4>
            <p>Display diagonal: 13 inch</p>
            <p>Processor Series: Intel Core i7</p>
            <p>Processor model: 1038NG7</p>
            <p>The amount of RAM: 8GB</p>
            <p>The volume of SSD drive: 512GB</p>
            <p>Operating System: Mac OS</p>
      </div>
      <button type="buttons" onclick="AddToCart(z1.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
<div class="macbookPro">
  <div class="forblockcost">
    <img id="brandPng1"  src="https://i.gadgets360cdn.com/products/laptops/large/1546455476_635_apple_macbook-pro-a1278.jpg" alt="">
    <p id="z2">$1984.99</p>
  </div>
    <div class="macbookAirWords">
      <h1>Apple MacBook Pro 13 </h1>
      <hr>
      <p>Description</p>
        <p>Display diagonal: 13.3 inch</p>
        <p>Processor Series: Intel Core i5</p>
        <p>Processor model: 1038NG7</p>
        <p>The amount of RAM: 16GB</p>
        <p>The volume of SSD drive: 1TB</p>
        <p>Operating System: Mac OS</p>
    </div>
    <button type="buttons" onclick="AddToCart(z2.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>

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
      <p>Description</p>
        <p>Display diagonal: 15.6 inch</p>
        <p>Processor Series: Intel Core i5</p>
        <p>Processor model: 9300H</p>
        <p>The amount of RAM: 8GB</p>
        <p>The volume of SSD drive: 512GB</p>
        <p>Operating System: Linux</p>
    </div>
    <button type="buttons" onclick="AddToCart(z3.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="acerSwift">
    <div class="forblockcost">
    <img id="brandPng2"  src="https://m.media-amazon.com/images/I/71r+jfdzwRL.jpg" alt="">
    <p id="z4">$808.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Acer Swift 3</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i3</p>
          <p>Processor model: 1005G1</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z4.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="acerPredator">
    <div class="forblockcost">
    <img  id="brandPng2" src="https://static.acer.com/up/Resource/Acer/Laptops/Predator_15/Image/20150908/Preator-15-main.png" alt="">
    <p id="z5">$2091.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Acer Predator Helios 500</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10750H</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z5.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="acerAspire">
    <div class="forblockcost">
    <img id="brandPng2"  src="https://static.acer.com/up/Resource/Acer/Laptops/Aspire_3/images/20190820/Acer-Aspire-3-A315-22-22G-34-main.png" alt="">
    <p id="z6">$1045.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Acer Aspire 5</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 9750H</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z6.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
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
        <p>Description</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 1035G1</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z7.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="asusVivobook">
    <div class="forblockcost">
    <img id="brandPng2"  src="https://www.did.ie/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/4/m413da-ek007t_1.jpg" alt="">
    <p id="z8">$1521.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Asus Vivobook S403F</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10510U</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Endless OS</p>
      </div>
      <button type="buttons" onclick="AddToCart(z8.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="asusROG">
    <div class="forblockcost">
    <img  id="brandPng2" src="https://www.techtra-solutions.com/wp-content/uploads/2019/12/ROG-Strix-G-G531gd-GTX1050.png" alt="">
    <p id="z9">$1022.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Asus ROG Strix</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 10300H</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z9.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="asusChromebook">
    <div class="forblockcost">
    <img  id="brandPng2" src="https://www.expert.ie/media/catalog/product/cache/943253416458ce4d538fd5884dd2f446/a/s/asus_chromebook_c523na-br0067_display.png" alt="">
    <p  id="z10">$644.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Asus Chromebook Flip</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i3</p>
          <p>Processor model: 1115G4</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z10.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
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
        <p>Description</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10750H</p>
          <p>The amount of RAM: 32GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z11.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="lenovoYoga">
    <div class="forblockcost">
    <img  id="brandPng1" src="https://intellitech.co.ke/wp-content/uploads/2020/10/lenovo-thinkbook-13s-na-hero__80812_zoom.png" alt="">
    <p id="z12">$1589.99</p>
    </div>  
    <div class="macbookAirWords">
        <h1>Lenovo Yoga 930</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 1035G4</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z12.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="lenovoIdeaPad">
    <div class="forblockcost">
    <img id="brandPng1" src="https://thegoodguys.sirv.com/products/50071380/50071380_708541.PNG?scale.height=505&scale.width=773&canvas.height=505&canvas.width=773&canvas.opacity=0&q=90" alt="">
    <p id="z13">$974.99</p>
    </div>  
    <div class="macbookAirWords">
        <h1>Lenovo IdeaPad S340</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10750H</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: DOS</p>
      </div>
      <button type="buttons" onclick="AddToCart(z13.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="lenovoThinkPad">
    <div class="forblockcost">
    <img  id="brandPng1" src="https://www.lenovo.com/medias/lenovo-laptop-thinkpad-l15-intel-hero.png?context=bWFzdGVyfHJvb3R8MzA3NzI5fGltYWdlL3BuZ3xoN2MvaDRjLzEwODIyNzM1Mjk4NTkwLnBuZ3wyYzE0YjFmNTFjYzkwMmJmZDU5ZTVlZDU0MzJhMjE4ZWRiMWMxZTJhZjBjMWZhZDg4ZDViMTU3MDViOTQxNGJj" alt="">
    <p id="z14">$988.99</p>
    </div>  
    <div class="macbookAirWords">
        <h1>Lenovo ThinkPad X1 Carbon</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 8265U</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 256GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z14.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
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
        <p>Description</p>
          <p>Display diagonal: 13.3 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 1065G7</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z15.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="dellVostro">
    <div class="forblockcost">
    <img id="brandPng1"  src="https://i.dell.com/sites/imagecontent/products/PublishingImages/vostro-14-5471-laptop/1539_PDP_Vostro_Laptop_14_5470_02.jpg" alt="">
    <p id="z16">$889.99</p>
    </div>  
    <div class="macbookAirWords">
        <h1>Dell Vostro 5501</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 10210U</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 256GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z16.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="dellLatitude">
    <div class="forblockcost">
    <img  id="brandPng1" src="https://images-na.ssl-images-amazon.com/images/I/71%2B%2BjSGKTSL._AC_SL1500_.jpg" alt="">
    <p id="z17">$2020.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Dell Latitude E7440</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 13.3 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 10310U</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z17.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="dellGSeries">
    <div class="forblockcost">
    <img  id="brandPng1" src="https://images-na.ssl-images-amazon.com/images/I/71d538GEyxL._AC_SL1500_.jpg" alt="">
    <p id="z18">$2644.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>Dell G Series</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 17.3 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10750H</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z18.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
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
        <p>Description</p>
          <p>Display diagonal: 13.3 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 1035G4</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 512GB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z19.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="hpPavilion">
    <div class="forblockcost">
    <img  id="brandPng2" src=" https://images-na.ssl-images-amazon.com/images/I/81Cxu5r4O%2BL._SL1500_.jpg" alt="">
    <p id="z20">$1259.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>HP Pavilion 15</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 16.1 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 10750H</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z20.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="hpEnvy">
    <div class="forblockcost">
    <img  id="brandPng2" src="https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c06074418.png" alt="">
    <p id="z21">$1229.99</p>
    </div>
      <div class="macbookAirWords">
        <h1>HP Envy 17</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 15.6 inch</p>
          <p>Processor Series: Intel Core i7</p>
          <p>Processor model: 1065G7</p>
          <p>The amount of RAM: 8GB</p>
          <p>The volume of SSD drive: 1TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z21.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
  <div class="hpElitebook">
    <div class="forblockcost">
    <img  id="brandPng2"   src="https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c06614804.png?imwidth=278&imdensity=1" alt="">
    <p id="z22">$1537.99</p>
    </div> 
      <div class="macbookAirWords">
        <h1>HP Elitebook 840 G7</h1>
        <hr>
        <p>Description</p>
          <p>Display diagonal: 14 inch</p>
          <p>Processor Series: Intel Core i5</p>
          <p>Processor model: 10210U</p>
          <p>The amount of RAM: 16GB</p>
          <p>The volume of SSD drive: 512TB</p>
          <p>Operating System: Windows 10</p>
      </div>
      <button type="buttons" onclick="AddToCart(z22.textContent)" class="cartbtn btn-danger btn">Add to Cart</button>
  </div>
</div> 


  </div>
 </div>

</body>
</html>