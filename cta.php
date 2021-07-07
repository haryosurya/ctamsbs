<?php
$nmr = ['6283869905976','6287786131429','6283840399019','6281914323478'];
shuffle($nmr);
echo
'<a onclick="Lead();" target="_blank" href="https://wa.me/'.$nmr[0].'?text=Assalamualaikum, bolehkah saya minta bantuan kakak?"><svg viewBox="0 0 32 32" class="whatsapp-ico"><path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd"></path></svg></a>'.
'<style>.whatsapp-ico{ fill: white; width: 50px; height: 50px; padding: 3px; background-color: #4dc247; border-radius: 50%; box-shadow: 2px 2px 6px rgba(0,0,0,0.4); /* box-shadow: 2px 2px 11px rgba(0,0,0,0.7); */ position: fixed; bottom: 20px; right : 20px; z-index: 10; } .whatsapp-ico:hover{ box-shadow: 2px 2px 11px rgba(0,0,0,0.7); }</style>'.
'<script> function Lead(){ fbq("track","Lead"); } </script>'
;?>
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '704000653860616');
  fbq('track', 'PageView');
</script>
<?php
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.8.2.js"></script>
<style type="text/css">
  #overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #000;
    filter: alpha(opacity=70);
    -moz-opacity: 0.7;
    -khtml-opacity: 0.7;
    opacity: 0.7;
    z-index: 100;
    display: none;
  }

  .cnt223 a {
    text-decoration: none;
  }

  .megapop {
    width: 100%;
    margin: 0 auto;
    display: none;
    position: fixed;
    z-index: 101;
  }

  .cnt223 {
    min-width: 600px;
    width: 600px;
    min-height: 150px;
    margin: 100px auto;
    background: #f3f3f3;
    position: relative;
    z-index: 103;
    padding: 15px 35px;
    border-radius: 5px;
    box-shadow: 0 2px 5px #000;
  }

  .cnt223 p {
    clear: both;
    color: #555555;
    /* text-align: justify; */
    font-size: 20px;
    font-family: sans-serif;
  }

  .cnt223 p a {
    color: #d91900;
    font-weight: bold;
  }

  .cnt223 .x {
    float: right;
    height: 35px;
    left: 22px;
    position: relative;
    top: -25px;
    width: 34px;
  }

  .cnt223 .x:hover {
    cursor: pointer;
  }

  *{margin: 0; padding: 0}
  @keyframes autopopup {
      from {opacity: 0;margin-top:-200px;}
      to {opacity: 1;}
  }
  #close {
      background-color: rgba(64, 68, 65, 0.5);
      position: fixed;
      top:0;
      left:0;
      right:0;
      bottom:0;
      animation:autopopup 0.5s;
  }
  #close:target {
      -webkit-transition:all 1s;
      -moz-transition:all 1s;
      transition:all 1s;
      opacity: 0;
      visibility: hidden;
  }
  @media (min-width: 768px){
      .container-popup {
          width:30%;
      }
  }
  @media (max-width: 767px){
      .container-popup {
          width:30%;
      }
  }

  /* .close {
      position: absolute;
      top:3px;
      right:3px;
      background-color: #33898b;
      padding:7px 10px;
      font-size: 15px;
      text-decoration: none;
      line-height: 1;
      color:gray;
  }
 */










/*  */

  /* @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
  } */
  #custom_pop_up {
      background: #F2F6F9;
      max-width: 700px;
      padding: 30px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
  }


  .pop_up_close {
      text-align: right;
      position: absolute;
      top: 5px;
      right: 5px;
      cursor: pointer;
  }

  .pop_up_close svg {
      font-size: 2.2rem;
      color: #c5c5c5;
  }
  #cusotm_pop_up form button {
      background: #222222;
      color: #fff;
      border: none;
      padding: 14px 30px;
      text-transform: uppercase;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
  }

  #cusotm_pop_up form button svg {
      margin-left: 10px;
      font-size: 1rem;
  }

  #cusotm_pop_up form {
      display: flex;
      align-items: center;
  }
</style>

<!-- pop up on 15 second load -->
<script type='text/javascript'>
  $(function() {
    var overlay = $('<div id="overlay"></div>');
    $(document).ready(function(){
      setTimeout(function(){
        $('.megapop').show();;
        overlay.show();
        overlay.appendTo(document.body);
      },1000); // on load 15seconds after
    });
    $('.close').click(function() {
      $('.megapop').hide();
      overlay.appendTo(document.body).remove();
      return false;
    });
    $('.x').click(function() {
      $('.megapop').hide();
      overlay.appendTo(document.body).remove();
      return false;
    });
  });
</script>
  <!-- pop up on 15 second load -->


<!-- pop up on load -->
<script type="text/javascript">
function PopUp(hideOrshow) {
  if (hideOrshow == 'hide') document.getElementById('ac-wrapper').style.display = "none";
  else document.getElementById('ac-wrapper').removeAttribute('style');
}
window.onload = function () {
  setTimeout(function () {
    PopUp('show');
  }, 3000);
}
</script>

<div class='megapop bd-example-modal-lg' id ="close">
  <!-- <div class='cnt223'> -->
    <!-- <div class="container-popup">
        <form action="#" method="post" class="popup-form">
            <img src="http://files.wacana.siap.web.id/content/uploads/2016/06/kursus-desain-jakarta.jpg" alt="">
        </form>
      </div>
      <a class="close" href="#close">x</a>
    </div> -->
    <div id="custom_pop_up ">
      <div class="pop_up_close close" >
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg>
      </div>
      <div>
        <a href=""><img src="https://zaqya.com/wp-content/uploads/2021/07/PROMO-TODAY.jpg"></a>
      </div>
      <!-- <h2>Download our eCommerce Conversion Checklist</h2>
      <p>Get our inside conversion hacks to increase your store sales and revenue in no time. Created by eCommerce growth experts!</p> -->
      <!-- <form action="#"> -->
        <!-- <input type="email" placeholder="Email address">
        <input type="text" placeholder="Current platform"> -->
        <!-- </form> -->
        <div class="text-center mt-3">
          <a type="button" class="btn btn-success mt-2 " onclick="Lead();" target="_blank"  href="https://wa.me/<?php echo $nmr[1];?>?text=Assalamualaikum, bolehkah saya minta bantuan kakak?">
            Pesan Sekarang
            </a>
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<div style="margin : auto; width:50%; ">
<div id="ac-wrapper" style='display:none'>
  <div id="popup" style="border-style: double; margin : auto; background: #fff; position: fixed;top: 0; width:50%; z-index:99999; ">
    <!-- <div style="position: absolute;right: 0px; opacity: 0.5;" > 
    <button onClick="PopUp('hide')" class="close" style="margin: 3px;padding:5px"> X </button>
  </div> -->
    <divstyle="text-align:center; ">
      <center>
        <p>
        <br>Gratis Ongkir Sampai 20 Ribu<br>
        Hari ini saja ?
        </p>   
        <div class="mb-2 mt-1">
          <a href="https://shopee.co.id/idtokomuslim" target="_blank" onClick="PopUp('hide')" type="button" class="btn btn-primary btn-sm" > Mau! </a>
          <a onClick="PopUp('hide')" type="button" class="btn btn-primary btn-sm" style="color: white;"> Nanti Saja </a>
        </div>  
      </center>
    </div>
  </div>
</div>
</div>




<!-- kamus
megapop = popup mega terbesar posisi tengah after beberapa second





-->



<!--  -->
<script>
//   $(function() {
//     var wrap = $(".wrap.fixed");
//     $(window).scroll(function() {
//         var scroll = $(window).scrollTop();
//         if (scroll >= 50) wrap.addClass("sticky");
//         else wrap.removeClass("sticky");
//     });
// });

$(document).ready(function() {

  $(window).scroll(function() {
      if ($(window).scrollTop() >= ($(document).height() - $(window).height())) {
        $('.popup').css( "left", "20px" )
        $('.arrow').hide();
      }else{
        $('.popup').css( "left", "-380px" ); 
        // $('.arrow').show();
    }
  });
  
  $('.closed').click(function(){
    $('.popup').hide();
  });
  
 
});


$('.arrow').click(function(){
  //  $("html").animate({ scrollTop: $('html').prop("scrollHeight")}, 800);
   $('.popup').show();
});



</script>


  <!-- Popup START -->
 
  <!-- Popup START -->
  <div class="popup">
    <div class="closed ns-close"></div>
  </div>
  <!-- <div class="arrow animated bounce"></div> -->
  <!-- Popup END -->
  
  <!-- Popup END -->


  <style>

.popup {
  z-index: 9999;
  width: 380px;
  height: 180px;
  background: gray;
  bottom: 20px;
  right: 20px;
  position: fixed;
  border-radius: 5px;
  box-shadow: 0px 25px 10px -15px rgba(0, 0, 0, 0.05);
  transition: 0.5s;
  z-index: 99999;
}

.closed {
  position: absolute;
  top: 5px;
  right: 5px;
  width: 20px;
  height: 20px;
  cursor: pointer;
  z-index: 500;
}

.ns-close {
  width: 20px;
  height: 20px;
  position: absolute;
  right: 4px;
  top: 4px;
  overflow: hidden;
  text-indent: 100%;
  cursor: pointer;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.ns-close:hover, .ns-close:focus {
  outline: none;
}
.ns-close::before, .ns-close::after {
  content: "";
  position: absolute;
  width: 3px;
  height: 60%;
  top: 50%;
  left: 50%;
  background: var(--clr2);
}
.ns-close:hover::before, .ns-close:hover::after {
  background: #fff;
}
.ns-close::before {
  -webkit-transform: translate(-50%, -50%) rotate(45deg);
  transform: translate(-50%, -50%) rotate(45deg);
}
.ns-close::after {
  -webkit-transform: translate(-50%, -50%) rotate(-45deg);
  transform: translate(-50%, -50%) rotate(-45deg);
}

@keyframes bounce {
  0%, 20%, 50%, 80%, 100% {
    -moz-transform: translateY(0);
    -ms-transform: translateY(0);
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
  40% {
    -moz-transform: translateY(-30px);
    -ms-transform: translateY(-30px);
    -webkit-transform: translateY(-30px);
    transform: translateY(-30px);
  }
  60% {
    -moz-transform: translateY(-15px);
    -ms-transform: translateY(-15px);
    -webkit-transform: translateY(-15px);
    transform: translateY(-15px);
  }
}
.arrow {
  position: fixed;
  bottom: 50px;
  left: 50%;
  cursor: pointer;
  margin-left: -20px;
  width: 20px;
  height: 20px;
  padding: 20px;
  z-index: 99;
  background-color: blue;
  border-radius: 50em;
  background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTMuNzUxLDQ1NS44NjhjLTIwLjE4MSwyMC4xNzktNTMuMTY1LDE5LjkxMy03My42NzMtMC41OTVsMCwwYy0yMC41MDgtMjAuNTA4LTIwLjc3My01My40OTMtMC41OTQtNzMuNjcyICBsMTg5Ljk5OS0xOTBjMjAuMTc4LTIwLjE3OCw1My4xNjQtMTkuOTEzLDczLjY3MiwwLjU5NWwwLDBjMjAuNTA4LDIwLjUwOSwyMC43NzIsNTMuNDkyLDAuNTk1LDczLjY3MUwyOTMuNzUxLDQ1NS44Njh6Ii8+DQo8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMjIwLjI0OSw0NTUuODY4YzIwLjE4LDIwLjE3OSw1My4xNjQsMTkuOTEzLDczLjY3Mi0wLjU5NWwwLDBjMjAuNTA5LTIwLjUwOCwyMC43NzQtNTMuNDkzLDAuNTk2LTczLjY3MiAgbC0xOTAtMTkwYy0yMC4xNzgtMjAuMTc4LTUzLjE2NC0xOS45MTMtNzMuNjcxLDAuNTk1bDAsMGMtMjAuNTA4LDIwLjUwOS0yMC43NzIsNTMuNDkyLTAuNTk1LDczLjY3MUwyMjAuMjQ5LDQ1NS44Njh6Ii8+DQo8L3N2Zz4=);
  background-size: 20px 15px;
  background-repeat: no-repeat;
  background-position: center;
}

.bounce {
  -moz-animation: bounce 2s infinite;
  -webkit-animation: bounce 2s infinite;
  animation: bounce 2s infinite;
}

@media (max-width: 728px) {
  section.cards .card {
    width: 100%;
    display: block;
    margin: 10px 0 0 0 !important;
    padding: 0;
  }

  .popup {
    width: 280px;
  }
}
</style>


