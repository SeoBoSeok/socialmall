<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

$admin = get_admin("super");

// 사용자 화면 우측과 하단을 담당하는 페이지입니다.
// 우측, 하단 화면을 꾸미려면 이 파일을 수정합니다.
?>
</div><!-- container End -->

<div id="ft">
    <h2><?php echo $config['cf_title']; ?> 정보</h2>
    <div id="ft_company">
        <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
        <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보</a>
        <a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a>

    </div>
    <div id="ft_logo"><a href="<?php echo G5_SHOP_URL; ?>/"><img src="<?php echo G5_IMG_URL; ?>/logo_bottom.png" width="100px" alt="<?php echo $config['cf_title']; ?> 메인"></a></div>
    <p>
        <span><b>회사명</b> <?php echo $default['de_admin_company_name']; ?></span>
        <!-- <span><b>주소</b> <?php //echo $default['de_admin_company_addr']; ?></span><br> -->
        <span><b>사업자 등록번호</b> <?php echo $default['de_admin_company_saupja_no']; ?></span><br>
        <span><b>대표</b> <?php echo $default['de_admin_company_owner']; ?></span>
        <span><b>전화</b> <?php echo $default['de_admin_company_tel']; ?></span>
        <!-- <span><b>팩스</b> <?php //echo $default['de_admin_company_fax']; ?></span><br> -->
        <!-- <span><b>운영자</b> <?php //echo $admin['mb_name']; ?></span><br> -->
        <!-- <span><b>통신판매업신고번호</b> <?php //echo $default['de_admin_tongsin_no']; ?></span><br> -->
        <span><b>개인정보 보호책임자</b> <?php echo $default['de_admin_info_name']; ?></span>

        <?php if ($default['de_admin_buga_no']) echo '<span><b>부가통신사업신고번호</b> '.$default['de_admin_buga_no'].'</span>'; ?><br>
        Copyright &copy; 2021 <?php echo $default['de_admin_company_name']; ?>. All Rights Reserved.
    </p>
   <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전</a>
    <?php } ?>
</div>
<style>
.fixed_quick {
    position: fixed;
    z-index: 999;
    bottom: 30px; /* 위치 */
    right: 30px; /* 위치 */
}

.quick {
    border-radius: 40%;
    text-align: center;
    height: 50px; /* 크기 */
    width: 50px; /* 크기 */
    box-sizing: border-box;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.05); /* 그림자 */
    cursor: pointer;
    transition: all 350ms cubic-bezier(0.50, 1, 0.07, 1);
    border:0.1px solid rgba(0,0,0,0.1); /* 테두리라인 */
}
.quick svg {transition: all 350ms cubic-bezier(0.50, 1, 0.07, 1);}
.quick:hover {box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.01); border:0.1px solid rgba(0,0,0,0.5);}
.quick:hover svg {fill: #000;} /* 마우스오버시 svg 아이콘의 fill 변경 */

/* 퀵메뉴 개별 스타일 */
.quick1 {background-color: #F7E600; display: none;}
.quick1 svg {margin-top: 13px;}

.quick2 {background-color: #fff; margin-top: 8px; display: none;}
.quick2 svg {margin-top: 13px;}

.quick3 {background-color: #fff; margin-top: 8px; display: none;}
.quick3 svg {margin-top: 13px;}

.quick4 {background-color: #fff; margin-top: 8px;}
.quick4 svg {margin-top: 13px;}

</style>
<div class="fixed_quick">
    <ul>
        <!-- 
        onclick="location.href='#';" 부분에 링크를 넣어주시면 됩니다. 
        -->
        <!-- 퀵메뉴1 { -->
        <div class="quick quick1" onclick="location.href='#';" style="display: none;">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 208 191.94" width="24" fill="#3A1D1D">
                <g>
                    <polygon class="cls-1" points="76.01 89.49 87.99 89.49 87.99 89.49 82 72.47 76.01 89.49"></polygon>
                    <path class="cls-1" d="M104,0C46.56,0,0,36.71,0,82c0,29.28,19.47,55,48.75,69.48-1.59,5.49-10.24,35.34-10.58,37.69,0,0-.21,1.76.93,2.43a3.14,3.14,0,0,0,2.48.15c3.28-.46,38-24.81,44-29A131.56,131.56,0,0,0,104,164c57.44,0,104-36.71,104-82S161.44,0,104,0ZM52.53,69.27c-.13,11.6.1,23.8-.09,35.22-.06,3.65-2.16,4.74-5,5.78a1.88,1.88,0,0,1-1,.07c-3.25-.64-5.84-1.8-5.92-5.84-.23-11.41.07-23.63-.09-35.23-2.75-.11-6.67.11-9.22,0-3.54-.23-6-2.48-5.85-5.83s1.94-5.76,5.91-5.82c9.38-.14,21-.14,30.38,0,4,.06,5.78,2.48,5.9,5.82s-2.3,5.6-5.83,5.83C59.2,69.38,55.29,69.16,52.53,69.27Zm50.4,40.45a9.24,9.24,0,0,1-3.82.83c-2.5,0-4.41-1-5-2.65l-3-7.78H72.85l-3,7.78c-.58,1.63-2.49,2.65-5,2.65a9.16,9.16,0,0,1-3.81-.83c-1.66-.76-3.25-2.86-1.43-8.52L74,63.42a9,9,0,0,1,8-5.92,9.07,9.07,0,0,1,8,5.93l14.34,37.76C106.17,106.86,104.58,109,102.93,109.72Zm30.32,0H114a5.64,5.64,0,0,1-5.75-5.5V63.5a6.13,6.13,0,0,1,12.25,0V98.75h12.75a5.51,5.51,0,1,1,0,11Zm47-4.52A6,6,0,0,1,169.49,108L155.42,89.37l-2.08,2.08v13.09a6,6,0,0,1-12,0v-41a6,6,0,0,1,12,0V76.4l16.74-16.74a4.64,4.64,0,0,1,3.33-1.34,6.08,6.08,0,0,1,5.9,5.58A4.7,4.7,0,0,1,178,67.55L164.3,81.22l14.77,19.57A6,6,0,0,1,180.22,105.23Z"></path>
                </g>
            </svg>
        </div>
        <!-- } -->
        
        <!-- 퀵메뉴2 { -->
        <div class="quick quick2" onclick="window.open('https://sir.kr');" style="display: none;">
            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#aaa">
                <g><rect fill="none" height="24" width="24" y="0"></rect></g>
                <g><path d="M12,2c-4.2,0-8,3.22-8,8.2c0,3.18,2.45,6.92,7.34,11.23c0.38,0.33,0.95,0.33,1.33,0 C17.55,17.12,20,13.38,20,10.2C20,5.22,16.2,2,12,2z M12,12c-1.1,0-2-0.9-2-2c0-1.1,0.9-2,2-2c1.1,0,2,0.9,2,2 C14,11.1,13.1,12,12,12z" enable-background="new"></path></g>
            </svg>
        </div>
        <!-- } -->
        
        <!-- 퀵메뉴3 { -->
        <div class="quick quick3" onclick="location.href='#';" style="display: none;">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#aaa">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path d="M12.88 5.05c3.18.4 5.67 2.89 6.07 6.07.06.51.49.88.99.88.04 0 .08 0 .12-.01.55-.07.94-.57.87-1.12-.51-4.09-3.72-7.3-7.81-7.81-.55-.06-1.05.33-1.11.88-.07.55.32 1.05.87 1.11zm.38 2.11c-.53-.14-1.08.18-1.22.72s.18 1.08.72 1.22c1.05.27 1.87 1.09 2.15 2.15.12.45.52.75.97.75.08 0 .17-.01.25-.03.53-.14.85-.69.72-1.22-.47-1.77-1.84-3.14-3.59-3.59zm5.97 8.1l-2.54-.29c-.61-.07-1.21.14-1.64.57l-1.84 1.84c-2.83-1.44-5.15-3.75-6.59-6.59l1.85-1.85c.43-.43.64-1.03.57-1.64l-.29-2.52c-.12-1.01-.97-1.77-1.99-1.77H5.03c-1.13 0-2.07.94-2 2.07.53 8.54 7.36 15.36 15.89 15.89 1.13.07 2.07-.87 2.07-2v-1.73c.01-1.01-.75-1.86-1.76-1.98z"></path>
            </svg>
        </div>
        <!-- } -->
        
        <!-- 퀵메뉴4 // 여기는 고정 입니다.{ -->
        <div class="quick quick4">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#aaa">
                <path d="M0 0h24v24H0V0z" fill="none"></path>
                <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM9 11H7V9h2v2zm4 0h-2V9h2v2zm4 0h-2V9h2v2z"></path>
            </svg>
        </div>
        <!-- } -->
    </ul>
</div>
<script>
    //클릭액션 quick4 를 클릭하는 경우 나머지 보이기&감추기
    $(document).ready(function() {
        $('.quick4').click(function() {
            $('.quick1').fadeToggle(200);
            $('.quick2').fadeToggle(250);
            $('.quick3').fadeToggle(300);
        });
    });
</script>
<?php
$sec = get_microtime() - $begin_time;
$file = $_SERVER['SCRIPT_NAME'];

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<script src="<?php echo G5_JS_URL; ?>/sns.js"></script>

<?php
include_once(G5_THEME_PATH.'/tail.sub.php');