<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>
<link rel="stylesheet" href="/css/mobile/style.css?ver=191202">
<div id="container" class="idx-container">
        <h1 id="container_title"><span>결초보은시장 &amp; 결초보은 조목조목 협동조합</span></h1>
          

<!-- 배너 최신글 -->

<!-- 배너 최신글 시작 { -->
<div class="lt_bn">
    <ul>
            <li class="list_1">
            <div class="bg"><img src="http://www.boeunmarket.com/data/file/banner/0_B16iD4of_ebd14258f1f200e676630fca236ec4791b44a7a5.png"></div>
            <div class="bn_txt">
                <div class="txt_wr">
                        결초보은 조목조목 협동조합                        <div class="bn_detail"> 장인이 깎고 다듬어 만든 작품</div>
      
                </div>
            </div>
        </li>
        </ul>
</div>



<!-- } 배너 최신글 끝 -->

<script src="http://www.boeunmarket.com/js/swipe.js"></script>
<script src="http://www.boeunmarket.com/js/shop.mobile.main.js"></script>


<!-- <div id="sbn_side">
    <div class="sbn_bg"></div>
    <div id="sbn_side_wr">
                <button type="button" id="sbn_side_close" class="close-btn">닫기</button>
        
    </div>
</div> -->
<script>

$(function(){
    $("#sbn_side_close").on("click", function() {
        set_cookie("ck_top_banner_close", 1, 24, g5_cookie_domain);
        $("#sbn_side").hide();
    });
});

$(function() {
    $('#sbn_side_wr').css({
        'position' : 'absolute',
        'left' : '50%',
        'top' : '50%',
        'margin-left' : -$('#sbn_side_wr').outerWidth()/2,
        'margin-top' : -$('#sbn_side_wr').outerHeight()/2
    });
});


$(".sbn_slide").owlCarousel({
    autoplay: true,
    center: true,
    loop: true,
    nav: false,
    dots:true,
    responsiveClass:true,
    items:1
})

	
 </script>
<div id="sidx">
    
    <div class="sct_wrap" style="margin:150px 0 0 0">
        <h2>‘대추나무’의 아름다운 변신</h2>
        <p class="company_text">(결초보은 조목조목 협동조합)은<br>
        높은 품질의 장인 정신과 시대를 초월한 심미적 디자인을 지향합니다.<br>
        특유의 강한 존재감으로 인해 벽조목 공예품은 많은 이들에게 감동을 전하고 있습니다.<br>
        디자인에 깃든 완성도, 진정성 인간성의 공유는 우리가 지켜나가야 할 사회적 가치입니다.</p>
        <img class="company_image" src="/img/compay_image1.png">
    </div>

    <div class="sct_wrap" style="margin:150px 0 0 0">
        <h2>단 하나의 작품</h2>
        <p class="company_text">모든 작품은 장인들의 솜씨로 하나하나 정성을 다해 가장 이상적인 모습으로 만듦니다.<br>
        이러한 작품은 나무의 결, 모양, 색, 질감에 따라 달라지는 매력을 선사합니다.</p>
        <img class="company_image" src="/img/compay_image2.png">
    </div>

    <div class="sct_wrap">
      <div class="since">
        <h2>Since 2007,</h2>
        <p>보은의 대추나무는 오랜 시간동안 많은분들과 사랑받아왔습니다.</p>
        <img src="/img/since-1.png">
        <img src="/img/since-2.png">
        <img src="/img/since-3.png">
        <img src="/img/since-4.png">
        <img src="/img/since-5.png">
        <img src="/img/since-6.png">
        <img src="/img/since-7.png">
        <img src="/img/since-8.png">
        <img src="/img/since-9.png">
        <img src="/img/since-10.png">
      </div>

      <ul class="sct smt_20">
          <li class="sct_li">
            <div class="li_wr right" style="text-align:right">
              <div style="margin-top:90px">2020-09-22 (가칭) 보은 대추나무 가공 협동조합 임시총회<div>
              <div class="text" style="margin-top:60px">2020-10-07 결초보은 조목조목 협동조합 창립총회</div>
            </div>
          </div></div></li>
          <li class="sct_li" style="border-left:1px solid #777">
            <div class="li_wr" style="text-align:left">
            <div style="margin-top:50px">2020-09-14 (가칭) 보은 대추나무 가공 협동조합 임시총회 공고</div>
            <div style="margin-top:60px">2020-09-29 결초보은 조목조목 협동조합 창립총회 공고</div>
            <div style="margin:60px 0 50px 0">2020-10-27 결초보은 조목조목 협동조합 설립<div>
            </div>
          </div></div></li>
        </ul>




      <img class="" src="/img/compay_image3-1.png">
    </div>


    <div class="sct_wrap">
      <h2>Store</h2>
      <p>보은 대추나무 가공 협동조합</p>
      <p>보은읍 삼산로 3길 12-1 고객쉼터 1층</p>
      <iframe class="main__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3207.951760283421!2d127.71710251582093!3d36.48288119319578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35651963eef678a3%3A0x652ba7c3e1d62ae8!2z7Lap7LKt67aB64-EIOuztOydgOq1sCDrs7TsnYDsnY0g7IK87IKw66GcM-q4uCAxMi0x!5e0!3m2!1sko!2skr!4v1606786431000!5m2!1sko!2skr" width="100%" height="600" frameborder="0" style="border:0; margin:30px 0 150px 0" allowfullscreen=""></iframe>
    </div>

</div>


<script>

$("#container").removeClass("container").addClass("idx-container");
</script>


</div>