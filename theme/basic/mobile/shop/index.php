<?php
include_once('./_common.php');

define("_INDEX_", TRUE);

include_once(G5_THEME_MSHOP_PATH.'/shop.head.php');
?>

<script src="<?php echo G5_JS_URL; ?>/swipe.js"></script>
<script src="<?php echo G5_JS_URL; ?>/shop.mobile.main.js"></script>

    <?php echo display_banner('메인', 'mainbanner.10.skin.php'); ?>

    <?php if($default['de_mobile_type1_list_use']) { ?>
    <div class="sct_wrap">
            <h2><a href="<?php echo shop_type_url('1'); ?>">히트상품</a></h2>
        <?php
        $list = new item_list();
        $list->set_mobile(true);
        $list->set_type(1);
        $list->set_view('it_id', false);
        $list->set_view('it_name', true);
        $list->set_view('it_cust_price', true);
        $list->set_view('it_price', true);
        $list->set_view('it_icon', true);
        $list->set_view('sns', false);
        echo $list->run();
        ?>
    </div>
    <?php } ?>

    <?php echo display_banner('왼쪽', 'boxbanner.skin.php'); ?>

    <?php if($default['de_mobile_type2_list_use']) { ?>
    <div class="sct_wrap">
        <h2><a href="<?php echo shop_type_url('2');; ?>">추천상품</a></h2>
        <?php
        $list = new item_list();
        $list->set_mobile(true);
        $list->set_type(2);
        $list->set_view('it_id', false);
        $list->set_view('it_name', true);
        $list->set_view('it_cust_price', true);
        $list->set_view('it_price', true);
        $list->set_view('it_icon', true);
        $list->set_view('sns', true);
        echo $list->run();
        ?>
    </div>
    <?php } ?>

    <?php if($default['de_mobile_type3_list_use']) { ?>
    <div class="sct_wrap">
        <h2><a href="<?php echo shop_type_url('3');; ?>">최신상품</a></h2>
        <?php
        $list = new item_list();
        $list->set_mobile(true);
        $list->set_type(3);
        $list->set_view('it_id', false);
        $list->set_view('it_name', true);
        $list->set_view('it_basic', true);
        $list->set_view('it_cust_price', true);
        $list->set_view('it_price', true);
        $list->set_view('it_icon', true);
        $list->set_view('sns', true);
        echo $list->run();
        ?>
    </div>
    <?php } ?>

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

    <?php include_once(G5_MSHOP_SKIN_PATH.'/main.event.skin.php'); // 이벤트 ?>

    <!-- 커뮤니티 최신글 시작 { -->
    <section id="sidx_lat">
        <?php echo latest('theme/shop_basic', 'notice', 3, 30); ?>
    </section>


<script>
    $("#container").addClass("idx-container");
</script>

<?php
include_once(G5_THEME_MSHOP_PATH.'/shop.tail.php');