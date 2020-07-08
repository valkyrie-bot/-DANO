<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<link href="<?=G5_THEME_URL?>/css/common.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?=G5_THEME_URL?>/css/style.css">

<footer id="footer">
           <div class="inner">
            <ul>
                <li>이용약관</li>
                <li>개인정보처리방침</li>
                <li>이메일주소무단수집거부</li>
            </ul>
            <ul class="sns">
                <li><img src="images/sns_1.png"></li>
                <li><img src="images/sns_2.png"></li>
            </ul>
            <p>
                04136 서울시 마포구 대흥로20길 8 카리스 장원빌딩 401호<br>Tel. 02-715-9984 Fax. 02-334-9984 E-mail. lgbtpride@empas.com<br>CopyrigthⓒSolidarity for LGBT Humas Rights of Korea All right reserves.
            </p>
            </div>
        </footer>