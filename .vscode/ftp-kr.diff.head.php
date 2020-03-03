<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
<div id="wrapper">
<!-- 상단 시작 { -->
    <!-- 오른쪽 고정배너 -->
    <div id="banner">
        <img src="./img/float_banner_tit.png" alt="10% 적립혜택" />
        <img src="./img/float_banner_txt.png" alt="장보기" />
    </div>

    <header>
        <!-- logo -->
        <a href="./index.html" class="logo"><img src="./img/logo.png" alt="팜스토리 로고" /></a>
        <img src="./img/head_txt_img.png" class="txt" alt="3만원 이상 무료배송" />
        <!-- badge -->
        <img src="./img/head_menu_badge.png" class="badge" alt="30%" />

        <nav>
            <a href="#">HOME |</a>
            <a href="./user/terms.html">회원가입 |</a>
            <a href="./user/login.html">로그인 |</a>
            <a href="#">로그아웃 |</a>
            <a href="#">고객센터</a>
        </nav>

        <!-- GNB(Global Navigation Bar) -->
        <ul class="gnb">
            <li><a href="./introduce/hello.html"><strong>팜스토리소개</strong></a></li>
            <li><a href="#"><strong>장보기</strong></a></li>
            <li><a href="#"><strong>농작물이야기</strong></a></li>
            <li><a href="#"><strong>이벤트</strong></a></li>
            <li><a href="#"><strong>커뮤니티</strong></a></li>
        </ul>
    </header>
    
<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->
<h1>head.php</h1>