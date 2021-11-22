<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$navi_datas = $ca_ids = array();
$is_item_view = (isset($it_id) && isset($it) && isset($it['it_id']) && $it_id === $it['it_id']) ? true : false;

if( !$is_item_view && $ca_id ){
    $navi_datas = get_shop_navigation_data(true, $ca_id);
    $ca_ids = array(
        'ca_id' => substr($ca_id,0,2),
        'ca_id2' => substr($ca_id,0,4),
        'ca_id3' => substr($ca_id,0,6),
        );
} else if( $is_item_view && isset($it) && is_array($it) ) {
    $navi_datas = get_shop_navigation_data(true, $it['ca_id']);
    $ca_ids = array(
        'ca_id' => substr($it['ca_id'],0,2),
        'ca_id2' => substr($it['ca_id'],0,4),
        'ca_id3' => substr($it['ca_id'],0,6)
        );
}

$location_class = array();
if($is_item_view){
    $location_class[] = 'view_location';    // view_location는 리스트 말고 상품보기에서만 표시
} else {
	$location_class[] = 'is_list is_right';    // view_location는 리스트 말고 상품보기에서만 표시
}

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_SHOP_CSS_URL.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/shop.category.navigation.js"></script>', 10);
?>

<script>
jQuery(function($){
    $(document).ready(function() {
        $("#sct_location select").on("change", function(e){
            var url = $(this).find(':selected').attr("data-url");
            
            if (typeof itemlist_ca_id != "undefined" && itemlist_ca_id === this.value) {
                return false;
            }

            window.location.href = url;
        });

		$("select.shop_hover_selectbox").shop_select_to_html();
    });
});
</script>