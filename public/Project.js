// Reload
function reload(){
    window.scrollTo({top: 0});
    window.location.reload();
}
//LogIn Button
function logIn(){
    window.scrollTo({top: 0, behavior:'smooth'});
       document.querySelector(".form").style.display="flex";
       $(".form").animate({opacity:'1'},1500);
       document.querySelector("body").style.overflow="hidden";
       document.getElementById("signUp").src="signup-image.jpg";
       document.getElementById("log_in").innerHTML="Log In";
       $("#telephone").hide();
       $("#_email").hide();
       document.getElementById("creater").textContent="Create an Account";
       document.querySelector(".pass_1").style.display="none";
        document.querySelector(".pass_2").style.display="none";
        document.querySelector(".remember").style.display="block";
}




//Log_Out Button        
 function log_out(){
    $("#avatar").fadeOut("slow");
    $("#sign_in_button").fadeIn("slow");
 }


 //Close Icon
 function Close(){
    $(".form").animate({opacity:'0'},"slow");
    document.getElementById("_username").value="";
    document.getElementById("_email").value="";
    document.getElementById("_password").value="";
    document.getElementById("telephone").value="";
    document.querySelector("body").style.overflow="scroll";
    document.querySelector(".form-content").style.height="500px";
    document.querySelector(".form").style.display="none"; 
 }

//  Sign In Icon
 function SignIn(name){
    document.getElementById("sign_in_button").style.display="none";
    $("#avatar").fadeIn("slow");
    document.getElementById("user_name").innerHTML=name;
    Close();
 }

 //Register Inside LOGIN
 function goToRegister(element){
    $(".form-content").animate({opacity: 0},0);
    if(element.textContent=="Create an Account"){
        document.querySelector(".remember").style.display="none";
        document.querySelector(".pass_1").style.display="flex";
        document.querySelector(".pass_2").style.display="flex";
        $(".form").animate({opacity: 1});
        document.getElementById("signUp").src="signin-image.jpg";
       document.getElementById("log_in").innerHTML="Create an Account";
       document.getElementById("_username").value="";
    document.getElementById("_email").value="";
    document.getElementById("_password").value="";
    document.getElementById("telephone").value="";
    $("#telephone").show();
    $("#_email").show();
    element.textContent="Log in";
    }
    else{
        document.querySelector(".remember").style.display="block";
        document.querySelector(".pass_1").style.display="none";
        document.querySelector(".pass_2").style.display="none";
        document.getElementById("signUp").src="signup-image.jpg";
       document.getElementById("log_in").innerHTML="Log In";
       document.getElementById("_username").value="";
    document.getElementById("_email").value="";
    document.getElementById("_password").value="";
    document.getElementById("telephone").value="";
       $("#telephone").hide();
       $("#_email").hide();
       element.textContent="Create an Account";
    }
    $(".form-content").animate({opacity: 1},1500);
 }


// OnmouseOver
function big(element){
    element.style.fontSize="21px";
 }

// OnmouseOut
 function small(element){
     element.style.fontSize="20px";
 }

// Order Button
function order(){
    $(".laptops").fadeIn(1500);
    $("#choosebrand").fadeIn(1500);
    window.scrollTo({top: 0, behavior:'smooth'});
    document.querySelector(".form_order").style.display="flex";
    $(".form_order").animate({opacity:'1'},1500);
    document.querySelector("body").style.overflow="hidden";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".hp").style.display="none";
    document.querySelector(".macType").style.display="none";
    document.querySelector(".acerType").style.display="none";
    document.querySelector(".asusType").style.display="none";
    document.querySelector(".dellType").style.display="none";
    document.querySelector(".lenovoType").style.display="none";
    document.querySelector(".hpType").style.display="none";
}
// Close Order
function Close_order(){
    $(".form_order").animate({opacity:'0'},"slow");
    document.querySelector("body").style.overflow="scroll";
    document.querySelector(".form_order").style.display="none";
}
// Close Cart
function Close_cart(){
    $(".form_cart").animate({opacity:'0'},"slow");
    document.querySelector("body").style.overflow="scroll";
    document.querySelector(".form_cart").style.display="none";
    document.querySelector(".form_checkout").style.display="none";
}
// Functions for Brands ()
function displayTextNone(element){
    document.getElementById(element.id).style.display="none";
}
function displayTextShow(element){
    document.getElementById(element.id).style.display="block";
}
// BackToBrands
function BackToOrder1(){
    order();
    document.querySelector("#back_icon1").style.display="none";
}
// After choosing Brands
function macbook(){
    document.querySelector("#choosebrand").style.display="none";
    document.querySelector(".laptops").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".hp").style.display="none";
    document.querySelector("#back_icon1").style.display="block";
    $(".macbook").fadeIn(1);
}
function acer(){
    document.querySelector("#choosebrand").style.display="none";
    document.querySelector(".laptops").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".hp").style.display="none";
    document.querySelector("#back_icon1").style.display="block";
    $(".acer").fadeIn(1500);
}
function asus(){
    document.querySelector("#choosebrand").style.display="none";
    document.querySelector(".laptops").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".hp").style.display="none";
    document.querySelector("#back_icon1").style.display="block";
    $(".asus").fadeIn(1500);
}
function lenovo(){
    document.querySelector("#choosebrand").style.display="none";
    document.querySelector(".laptops").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".hp").style.display="none";
    document.querySelector("#back_icon1").style.display="block";
    $(".lenovo").fadeIn(1500);
}
function dell(){
    document.querySelector("#choosebrand").style.display="none";
    document.querySelector(".laptops").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
    document.querySelector("#back_icon1").style.display="block";
    $(".dell").fadeIn(1500);
}
function hp(){
    document.querySelector("#choosebrand").style.display="none";
    document.querySelector(".laptops").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector("#back_icon1").style.display="block";
    $(".hp").fadeIn(1500);
}

// After choosing brands, after than choosing type 
function macbookAir(){
    $(".macType").fadeIn(1500);
    document.querySelector(".macbookAir").style.display="flex";
    document.querySelector(".macbookPro").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
    document.querySelector(".acerType").style.display="none";
}
function macbookPro(){
    $(".macType").fadeIn(1500);
    document.querySelector(".macbookPro").style.display="flex";
    document.querySelector(".macbookAir").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
    
}

function acerNitro(){
    $(".acerType").fadeIn(1500);
    document.querySelector(".acerNitro").style.display="flex";
    document.querySelector(".acerAspire").style.display="none";
    document.querySelector(".acerPredator").style.display="none";
    document.querySelector(".acerSwift").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}

function acerSwift(){
    $(".acerType").fadeIn(1500);
    document.querySelector(".acerSwift").style.display="flex";
    document.querySelector(".acerAspire").style.display="none";
    document.querySelector(".acerPredator").style.display="none";
    document.querySelector(".acerNitro").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}

function acerPredator(){
    $(".acerType").fadeIn(1500);
    document.querySelector(".acerPredator").style.display="flex";
    document.querySelector(".acerAspire").style.display="none";
    document.querySelector(".acerSwift").style.display="none";
    document.querySelector(".acerNitro").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function acerAspire(){
    $(".acerType").fadeIn(1500);
    document.querySelector(".acerAspire").style.display="flex";
    document.querySelector(".acerSwift").style.display="none";
    document.querySelector(".acerPredator").style.display="none";
    document.querySelector(".acerNitro").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}

function asusZenbook(){
    $(".asusType").fadeIn(1500);
    document.querySelector(".asusZenbook").style.display="flex";
    document.querySelector(".asusVivobook").style.display="none";
    document.querySelector(".asusROG").style.display="none";
    document.querySelector(".asusChromebook").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function asusVivobook(){
    $(".asusType").fadeIn(1500);
    document.querySelector(".asusVivobook").style.display="flex";
    document.querySelector(".asusZenbook").style.display="none";
    document.querySelector(".asusROG").style.display="none";
    document.querySelector(".asusChromebook").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function asusROG(){
    $(".asusType").fadeIn(1500);
    document.querySelector(".asusROG").style.display="flex";
    document.querySelector(".asusVivobook").style.display="none";
    document.querySelector(".asusZenbook").style.display="none";
    document.querySelector(".asusChromebook").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function asusChromebook(){
    $(".asusType").fadeIn(1500);
    document.querySelector(".asusChromebook").style.display="flex";
    document.querySelector(".asusVivobook").style.display="none";
    document.querySelector(".asusROG").style.display="none";
    document.querySelector(".asusZenbook").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function lenovoLegion(){
    $(".lenovoType").fadeIn(1500);
    document.querySelector(".lenovoLegion").style.display="flex";
    document.querySelector(".lenovoYoga").style.display="none";
    document.querySelector(".lenovoIdeaPad").style.display="none";
    document.querySelector(".lenovoThinkPad").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function lenovoYoga(){
    $(".lenovoType").fadeIn(1500);
    document.querySelector(".lenovoYoga").style.display="flex";
    document.querySelector(".lenovoLegion").style.display="none";
    document.querySelector(".lenovoIdeaPad").style.display="none";
    document.querySelector(".lenovoThinkPad").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function lenovoIdeaPad(){
    $(".lenovoType").fadeIn(1500);
    document.querySelector(".lenovoIdeaPad").style.display="flex";
    document.querySelector(".lenovoYoga").style.display="none";
    document.querySelector(".lenovoLegion").style.display="none";
    document.querySelector(".lenovoThinkPad").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function lenovoThinkPad(){
    $(".lenovoType").fadeIn(1500);
    document.querySelector(".lenovoThinkPad").style.display="flex";
    document.querySelector(".lenovoYoga").style.display="none";
    document.querySelector(".lenovoIdeaPad").style.display="none";
    document.querySelector(".lenovoLegion").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function dellXPS(){
    $(".dellType").fadeIn(1500);
    document.querySelector(".dellXPS").style.display="flex";
    document.querySelector(".dellVostro").style.display="none";
    document.querySelector(".dellLatitude").style.display="none";
    document.querySelector(".dellGSeries").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function dellVostro(){
    $(".dellType").fadeIn(1500);
    document.querySelector(".dellVostro").style.display="flex";
    document.querySelector(".dellXPS").style.display="none";
    document.querySelector(".dellLatitude").style.display="none";
    document.querySelector(".dellGSeries").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function dellLatitude(){
    $(".dellType").fadeIn(1500);
    document.querySelector(".dellLatitude").style.display="flex";
    document.querySelector(".dellVostro").style.display="none";
    document.querySelector(".dellXPS").style.display="none";
    document.querySelector(".dellGSeries").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function dellGSeries(){
    $(".dellType").fadeIn(1500);
    document.querySelector(".dellGSeries").style.display="flex";
    document.querySelector(".dellVostro").style.display="none";
    document.querySelector(".dellLatitude").style.display="none";
    document.querySelector(".dellXPS").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function hpSpectre(){
    $(".hpType").fadeIn(1500);
    document.querySelector(".hpSpectre").style.display="flex";
    document.querySelector(".hpPavilion").style.display="none";
    document.querySelector(".hpEnvy").style.display="none";
    document.querySelector(".hpElitebook").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function hpPavilion(){
    $(".hpType").fadeIn(1500);
    document.querySelector(".hpPavilion").style.display="flex";
    document.querySelector(".hpSpectre").style.display="none";
    document.querySelector(".hpEnvy").style.display="none";
    document.querySelector(".hpElitebook").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function hpEnvy(){
    document.querySelector(".hpEnvy").style.display="flex";
    $(".hpType").fadeIn(1500);
    document.querySelector(".hpPavilion").style.display="none";
    document.querySelector(".hpSpectre").style.display="none";
    document.querySelector(".hpElitebook").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
}
function hpElitebook(){
    $(".hpType").fadeIn(1500);
    document.querySelector(".hpElitebook").style.display="flex";
    document.querySelector(".hpPavilion").style.display="none";
    document.querySelector(".hpEnvy").style.display="none";
    document.querySelector(".hpSpectre").style.display="none";
    document.querySelector(".macbook").style.display="none";
    document.querySelector(".acer").style.display="none";
    document.querySelector(".asus").style.display="none";
    document.querySelector(".dell").style.display="none";
    document.querySelector(".lenovo").style.display="none";
    document.querySelector(".hp").style.display="none";
    document.querySelector(".acerType").style.display="none";
}
//Checkout
function checkout(){
    window.scrollTo({top: 0, behavior:'smooth'});
    document.querySelector(".form_checkout").style.display="flex";
    document.querySelector(".form_cart").style.display="none";
    $(".form_checkout").animate({opacity:'1'},1500);
    document.querySelector("body").style.overflow="hidden";
}

// Close Add To Cart icon
function Close_carts(){
    $(".form_carts").animate({opacity:'0'},"slow");
    document.querySelector("body").style.overflow="scroll";
    document.querySelector(".form_carts").style.display="none";
}
// Add to Cart Icon click
function cart(){
    window.scrollTo({top: 0, behavior:'smooth'});
    document.querySelector(".form_cart").style.display="flex";
    $(".form_cart").animate({opacity:'1'},1500);
    document.querySelector("body").style.overflow="hidden";
    document.querySelector(".form_carts").style.display="none";
    document.querySelector(".form_order").style.display="none";

}
                                            // Add To Cart

// Add to Cart
function AddToCart(arg1){
    window.scrollTo({top: 0, behavior:'smooth'});
    document.querySelector(".form_carts").style.display="flex";
    $(".form_carts").animate({opacity:'1'},1500);
    document.querySelector("body").style.overflow="hidden";
    var itd=1;
    var order=[];
    var total_price=0;
    var d=document.createElement("div");
    var e=document.createElement("text");
    d.id=itd+".z";
    e.innerHTML="";
    d.innerHTML="The Price of your Order "+arg1+"";
    d.appendChild(e);
    d.style.fontSize="large";
    d.style.padding="10px";
    e.style.width="15px";
    e.style.height="15px";
    e.style.float="right";  
    d.style.maxWidth="100%";
    d.style.borderBottom="solid";
    document.querySelector(".form-content_cart").appendChild(d);
    document.querySelector(".form-content_cart").style.display="block";

    var price=arg1;
    order=parseInt(price);
    
    itd++;
    total_price+=parseInt(price);
 }
 

//Overview
 function overview(){
    window.scrollTo({top: 0,});
    document.querySelector("#aboutUswords1").style.display="none";
    document.querySelector("#aboutUswords2").style.display="none";
    document.querySelector("#aboutUswords3").style.display="none";
    document.querySelector("#aboutUswords4").style.display="none";
    document.querySelector("#aboutUswords5").style.display="none";
    document.querySelector("#aboutUswords6").style.display="none";
    document.querySelector("#aboutUswords7").style.display="none";
    document.querySelector("#b_image").style.display="none";
    document.querySelector(".order").style.display="none";
    document.querySelector("#about_").style.display="none";
    document.querySelector(".accessories").style.display="none";
    document.querySelector(".videos").style.display="none";
    document.querySelector(".best").style.display="none";
    if(window.innerWidth<=1000){
    document.querySelector(".overview_").style.display="block";
    document.querySelector("#overview_img").style.display="none";
    }
    else{
    document.querySelector(".overview_").style.display="flex";
    document.querySelector("#overview_img").style.display="block";
   
    
    }
 }


 //  Best of Best
function best(){
    document.querySelector(".accessories").style.display="none";
    document.querySelector(".videos").style.display="none";
    document.querySelector(".best").style.display="block";
    document.querySelector(".overview_").style.display="none";
    document.querySelector(".overview_").style.display="none";
    document.querySelector("#overview_img").style.display="none";
    document.querySelector("#aboutUswords1").style.display="none";
    document.querySelector("#aboutUswords2").style.display="none";
    document.querySelector("#aboutUswords3").style.display="none";
    document.querySelector("#aboutUswords4").style.display="none";
    document.querySelector("#aboutUswords5").style.display="none";
    document.querySelector("#aboutUswords6").style.display="none";
    document.querySelector("#aboutUswords7").style.display="none";
    document.querySelector("#b_image").style.display="none";
    document.querySelector(".order").style.display="none";
    document.querySelector("#about_").style.display="none";
    if(window.innerWidth<=1000){
        window.scrollTo({top: 0,});
    document.querySelector(".best1").style.display="block";
    document.querySelector(".best2").style.display="block";
    document.querySelector(".best3").style.display="block";
    document.querySelector(".best4").style.display="block";
    document.querySelector(".best5").style.display="block";
    }
    else{
    window.scrollTo({top: 0,});
    document.querySelector(".best1").style.display="flex";
    document.querySelector(".best2").style.display="flex";
    document.querySelector(".best3").style.display="flex";
    document.querySelector(".best4").style.display="flex";
    document.querySelector(".best5").style.display="flex";
    }
}


// Videos
function video(){
    window.scrollTo({top: 0,});
    document.querySelector(".accessories").style.display="none";
    document.querySelector(".videos").style.display="block";
    document.querySelector(".best").style.display="none";
    document.querySelector("#aboutUswords1").style.display="none";
    document.querySelector("#aboutUswords2").style.display="none";
    document.querySelector("#aboutUswords3").style.display="none";
    document.querySelector("#aboutUswords4").style.display="none";
    document.querySelector("#aboutUswords5").style.display="none";
    document.querySelector("#aboutUswords6").style.display="none";
    document.querySelector("#aboutUswords7").style.display="none";
    document.querySelector("#overview_img").style.display="none";
    document.querySelector("#b_image").style.display="none";
    document.querySelector(".order").style.display="none";
    document.querySelector("#about_").style.display="none";
    document.querySelector(".overview_").style.display="none";
    if(window.innerWidth<=1000){
    window.scrollTo({top: 0,});
    document.querySelector(".videos1").style.display="block";
    document.querySelector(".videos2").style.display="block";
    document.querySelector(".videos3").style.display="block";
    document.querySelector(".videos4").style.display="block";
    document.querySelector(".videos5").style.display="block";
    }
    else{
        document.querySelector(".videos1").style.display="flex";
        document.querySelector(".videos2").style.display="flex";
        document.querySelector(".videos3").style.display="flex";
        document.querySelector(".videos4").style.display="flex";
        document.querySelector(".videos5").style.display="flex";
    }
}

// Accessories
function accessories(){
    window.scrollTo({top: 0,});
    document.querySelector("#about_").style.display="none";
    document.querySelector(".accessories").style.display="flex";
    document.querySelector(".videos").style.display="none";
    document.querySelector(".best").style.display="none";
    document.querySelector("#aboutUswords1").style.display="none";
    document.querySelector("#aboutUswords2").style.display="none";
    document.querySelector("#aboutUswords3").style.display="none";
    document.querySelector("#aboutUswords4").style.display="none";
    document.querySelector("#aboutUswords5").style.display="none";
    document.querySelector("#aboutUswords6").style.display="none";
    document.querySelector("#aboutUswords7").style.display="none";
    document.querySelector("#overview_img").style.display="none";
    document.querySelector("#b_image").style.display="none";
    document.querySelector(".order").style.display="none";
    document.querySelector(".overview_").style.display="none";
    if(window.innerWidth<=1000){
    }
    
}

//  Contant Us
function contactUs(){
    $('html,body').animate({scrollTop: document.body.scrollHeight},"slow");
}

 //AboutUs
function aboutUs(){
    window.scrollTo({top: 0,});
    document.querySelector(".accessories").style.display="none";
    document.querySelector("#about_").style.display="block";
    document.querySelector("#aboutUswords1").style.display="block";
    document.querySelector("#aboutUswords2").style.display="block";
    document.querySelector("#aboutUswords3").style.display="block";
    document.querySelector("#aboutUswords4").style.display="block";
    document.querySelector("#aboutUswords5").style.display="block";
    document.querySelector("#aboutUswords6").style.display="block";
    document.querySelector("#aboutUswords7").style.display="block";
    document.querySelector("#overview_img").style.display="none";
    document.querySelector("#b_image").style.display="none";
    document.querySelector(".order").style.display="none";
    document.querySelector(".overview_").style.display="none";
    document.querySelector(".videos").style.display="none";
    document.querySelector(".best").style.display="none";
}

//Map
function initMap() {
    var for_map = {
        center:{lat: 43.2000,lng: 76.6340} ,
        zoom:10
    }
    var map = new google.maps.Map(document.getElementById("map"),for_map);
    // University
    var icon1 = {
        url: "https://www.pngkey.com/png/detail/131-1311026_graduate-school-icon-university-icon-blue.png",
        scaledSize: new google.maps.Size(20,20),
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point(-5,-5),
    }
    // Shopping Center
    var icon2 = {
        url: "https://cdn2.iconfinder.com/data/icons/shopping-sale-1/614/1083_-_Shop-512.png",
        scaledSize: new google.maps.Size(23,23),
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point(-5,25),
    }
    // Entertainment Center
    var icon3 = {
        url: "https://pngimage.net/wp-content/uploads/2018/05/comedy-icon-png-8.png",
        scaledSize: new google.maps.Size(25,25),
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point(0,0),
    }
    //KinderGarden 
    var icon4 = {
        url: "https://cdn.iconscout.com/icon/premium/png-512-thumb/kindergarten-1-579435.png",
        scaledSize: new google.maps.Size(20,20),
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point(0,-3),
    }
    // Laptop Office
    var icon5 = {
        url: "https://png.pngtree.com/png-clipart/20200225/original/pngtree-shop-icon-in-neon-style-png-image_5286865.jpg",
        scaledSize: new google.maps.Size(20,20),
        origin: new google.maps.Point(0,0),
        anchor: new google.maps.Point(0,0),
    }
    var marker1 = new google.maps.Marker({
        position: {lat:43.20776894499459,lng:76.66906506603232},
        map: map,
        title:"University",
        icon: icon1
    });
    var marker2 = new google.maps.Marker({
        position: {lat:43.234208501787435,lng:76.77726302973818},
        map: map,
        title:"Shopping Center",
        icon: icon2
    }); 
    var marker3 = new google.maps.Marker({
        position: {lat:43.154226488281004,lng:76.56687376929442},
        map: map,
        title:"Entertainment Center",
        icon: icon3
    });
    var marker4 = new google.maps.Marker({
        position: {lat:43.338933933886224,lng:76.70454013316582},
        map: map,
        title:"KinderGarden",
        icon: icon4
    });
    var marker5 = new google.maps.Marker({
        position: {lat:43.23597653955542,lng:76.90370512670899},
        map: map,
        title:"Laptop Office",
        icon: icon5
    });
    // Contents
    var window1 = new google.maps.InfoWindow({
        content: "Suleyman Demirel University",
    });
    marker1.addListener("click", () => {
        window1.open(map, marker1);
    });

    var window2 = new google.maps.InfoWindow({
        content: "Aport Mall",
    });
    marker2.addListener("click", () => {
        window2.open(map, marker2);

    });

    var window3 = new google.maps.InfoWindow({
        content: "Home Club",
    });
    marker3.addListener("click", () => {
        window3.open(map, marker3);
    });

    var window4 = new google.maps.InfoWindow({
        content: "Golden Key",
    });
    marker4.addListener("click", () => {
        window4.open(map, marker4);
    });
    var window5 = new google.maps.InfoWindow({
        content: "DirectShop",
    });
    marker5.addListener("click", () => {
        window5.open(map, marker5);
    });
    // Polyline
    // flightPlanCoordinates1 => Entertainment Center -> Laptop Office
    var flightPlanCoordinates1 = [
        { lat: 43.13873189565916, lng: 76.58623279510067 },
        { lat: 43.22597653955542, lng: 76.90370512670899 },
      ];
      var flightPath1 = new google.maps.Polyline({
        path: flightPlanCoordinates1,
        geodesic: true,
        strokeColor: "black",
        strokeOpacity: 1.0,
        strokeWeight: 1.5,
      });
      flightPath1.setMap(map);

    // flightPlanCoordinates2 => University -> Laptop Office
    var flightPlanCoordinates2 = [
        { lat: 43.18851143968647, lng: 76.68343874393801 },
        { lat: 43.22597653955542, lng: 76.90370512670899 },
      ];
    var flightPath2 = new google.maps.Polyline({
        path: flightPlanCoordinates2,
        geodesic: true,
        strokeColor: "#FF0000",
        strokeOpacity: 1.0,
        strokeWeight: 1.5,
      });
    flightPath2.setMap(map);

    // flightPlanCoordinates3 => KinderGarden -> Laptop Office
    var flightPlanCoordinates3 = [
        {lat:43.319933933886224,lng:76.72454013316582},
        { lat: 43.22597653955542, lng: 76.90370512670899 },
      ];
    var flightPath3 = new google.maps.Polyline({
        path: flightPlanCoordinates3,
        geodesic: true,
        strokeColor: "purple",
        strokeOpacity: 1.0,
        strokeWeight: 1.5,
      });
    flightPath3.setMap(map);

    // flightPlanCoordinates4 => Shopping Center -> Laptop Office
    var flightPlanCoordinates4 = [
        {lat:43.244208501787435,lng:76.7966302973818},
        { lat: 43.22597653955542, lng: 76.90370512670899 },
      ];
    var flightPath4 = new google.maps.Polyline({
        path: flightPlanCoordinates4,
        geodesic: true,
        strokeColor: "blue",
        strokeOpacity: 1.0,
        strokeWeight: 1.5,
      });
    flightPath4.setMap(map);
}
