<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>
<link rel="stylesheet" href="/css/mobile/style.css?ver=191202">
<div id="main_bn3">
  <div class="lt_bn">
      <ul>
          <li class="list_1">
              <div class="bg"><img src="/img/general_banner.png?211012"></div>
          </li>

      </ul>
  </div>
  <div id="bx_pager" class="bx_pager">
      <ul>
          <!-- <li> <a href="/general_market.php" class="">보은종합시장 소개</a></li> -->
          <!-- <li> <a href="/bbs/board.php?bo_table=market" class="active">상점소개</a></li> -->
          <!-- <li> <a href="/bbs/board.php?bo_table=category" class="">카테고리</a></li> -->
          <!-- <li> <a href="/bbs/board.php?bo_table=market_news" class="">시장소식</a></li> -->
      </ul>
  </div>
</div>
<div id="container" class="idx-container">
        <!-- <h1 id="container_title"><span>결초보은시장 &amp; 결초보은 조목조목 협동조합</span></h1> -->
          


<!-- 배너 최신글 -->

<!-- 배너 최신글 시작 { -->
<!-- <div class="lt_bn">
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
</div> -->



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
    
    <!-- <div class="sct_wrap" style="margin:150px 0 0 0">
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
    </div> -->

<div class="sct_wrap">
    <div class="since">
        <h2>Since 2017,</h2>
        <p>여러분의 많은 관심 부탁드립니다.</p>
        <div class="sct_img_wrap">
            <img src="/img/since-1.jpg">
            <img src="/img/since-2.jpg">
            <img src="/img/since-3.jpg">
            <img src="/img/since-4.jpg">
            <img src="/img/since-5.jpg">
            <img src="/img/since-6.jpg">
            <img src="/img/since-7.jpg">
            <img src="/img/since-8.jpg">
            <img src="/img/since-9.jpg">
            <img src="/img/since-10.jpg">
        </div>
    </div>
    <!-- <img class="" src="/img/compay_image3-1.png"> -->
</div>


    <div class="sct_wrap">
      <h2>Store</h2>
      <p></p>
      <p>공주 산성시장</p>
      <iframe class="main__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3207.951760283421!2d127.71710251582093!3d36.48288119319578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35651963eef678a3%3A0x652ba7c3e1d62ae8!2z7Lap7LKt67aB64-EIOuztOydgOq1sCDrs7TsnYDsnY0g7IK87IKw66GcM-q4uCAxMi0x!5e0!3m2!1sko!2skr!4v1606786431000!5m2!1sko!2skr" width="100%" height="600" frameborder="0" style="border:0; margin:30px 0 150px 0" allowfullscreen=""></iframe>
    </div>

</div>


<script>

$("#container").removeClass("container").addClass("idx-container");
</script>


</div>