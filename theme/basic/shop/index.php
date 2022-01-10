<?php
include_once('./_common.php');

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MSHOP_PATH.'/index.php');
    return;
}

if(! defined('_INDEX_')) define('_INDEX_', TRUE);

include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
?>
<link rel="stylesheet" href="/css/main/style.css?ver=191202">
<div id="wrapper" class="<?php echo implode(' ', $wrapper_class); ?>">
<div id="container">
<?php if($default['de_type1_list_use']) { ?>
<!-- 히트상품 시작 { -->
<!-- <section id="idx_hit" class="sct_wrap">
    <header>
        <h2><a href="<?php echo shop_type_url('1'); ?>">히트상품</a></h2>
    </header> -->
    <?php
    // $list = new item_list();
    // $list->set_type(1);
    // $list->set_view('it_img', true);
    // $list->set_view('it_id', false);
    // $list->set_view('it_name', true);
    // $list->set_view('it_basic', true);
    // $list->set_view('it_cust_price', true);
    // $list->set_view('it_price', true);
    // $list->set_view('it_icon', true);
    // $list->set_view('sns', true);
    // $list->set_view('star', true);
    // echo $list->run();
    ?>
<!-- </section> -->
<!-- } 히트상품 끝 -->
<script>
//히트상품
// $(function(){
//     var hit_smt_val = parseInt($('#idx_hit .smt_40').attr("data-value"));
    
//     if(! hit_smt_val){
//         hit_smt_val = 5;
//     }

// 	$('#idx_hit .smt_40').owlCarousel({
// 	    loop:true,
// 	    nav:true,
// 	    autoplay:true,
//         autoplayHoverPause:true,
// 	    responsive:{
// 	        1000:{items: hit_smt_val}
// 	    }
// 	})
// });
</script>
<?php } ?>

<?php if($default['de_type3_list_use']) { ?>
<!-- 최신상품 시작 { -->
<section class="sct_wrap">
    <header>
        <div class="titArea prdArea_tit">
            <h2 class="prdArea1-tit"><a href="<?php echo shop_type_url('3'); ?>">추천상품</a></h2>
		    <h3 class="prdArea1-copy">공산성 추천상품을 소개합니다.</h3>
	    </div>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(3);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    $list->set_view('star', true);
    echo $list->run();
    ?>
</section>
<!-- } 최신상품 끝 -->
<?php } ?>

<?php if($default['de_type2_list_use'] && false) { ?>
<!-- 추천상품 시작 { -->
<section class="sct_wrap">
    <header>
        <div class="titArea prdArea_tit">
            <h2 class="prdArea1-tit"><a href="<?php echo shop_type_url('2'); ?>">공산성 추천상품</a></h2>
		    <h3 class="prdArea1-copy">공산성 추천상품을 소개합니다.</h3>
	    </div>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(2);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', true);
    $list->set_view('star', true);
    echo $list->run();
    ?>
</section>
<!-- } 추천상품 끝 -->
<?php } ?>

<?php include_once(G5_SHOP_SKIN_PATH.'/boxevent.skin.php'); // 이벤트 ?>

<?php if($default['de_type5_list_use'] && false) { ?>
<!-- 할인상품 시작 { -->
<section class="sct_wrap">
    <header>
        <h2><a href="<?php echo shop_type_url('5'); ?>">할인상품</a></h2>
    </header>
    <?php
    $list = new item_list();
    $list->set_type(5);
    $list->set_view('it_id', false);
    $list->set_view('it_name', true);
    $list->set_view('it_basic', true);
    $list->set_view('it_cust_price', true);
    $list->set_view('it_price', true);
    $list->set_view('it_icon', true);
    $list->set_view('sns', false);
    $list->set_view('star', false);
    echo $list->run();
    ?>
</section>
<!-- } 할인상품 끝 -->
<?php } ?>
</div>
</div>

<div id="idx_rec">
        <h2>Featured Collection</h2>
        <ul class="sct smt_201">
          <li class="sct_li">
            <div class="li_wr">
              <div class="sct_img">
                <img src="/img/featured-1.jpg">
                <span class="btn_b12"><a href="/shop/list.php?ca_id=30">특산물</a></span>
              </div>
            </div>
          </li>
          <li class="sct_li">
            <div class="li_wr">
              <div class="sct_img">
                <img src="/img/featured-2.jpg">
                <span class="btn_b12"><a href="javascript:void(0);">체험</a></span>
              </div>
            </div>
          </li>
          <li class="sct_li">
            <div class="li_wr">
              <div class="sct_img">
                <img src="/img/featured-3.jpg">
                <span class="btn_b12"><a href="javascript:void(0);">교육</a></span>
              </div>
            </div>
          </li>
          <li class="sct_li">
            <div class="li_wr">
              <div class="sct_img">
                <img src="/img/featured-4.jpg">
                <span class="btn_b12"><a href="/shop/list.php?ca_id=10">기념품</a></span>
              </div>
            </div>
          </li>
        </ul>
    </div>

<section class="main_w_banner lt_bn">
    <div class="background-section">
        <img src="/img/gongsansung-background.jpg" alt="공산성" srcset="">
        <div class="bn_txt">
            <div class="txt_wr-2">
                                            <div class="bn_detail"> 단체소개</div>
                    <a href="/bbs/content.php?co_id=introduce" class="bn_view">바로가기</a>                </div>
        </div>
    </div>
</section>

<div id="container2">
    <div>
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

<?php
include_once(G5_THEME_SHOP_PATH.'/shop.tail.php');