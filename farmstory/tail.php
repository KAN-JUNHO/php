<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>


<!-- } 콘텐츠 끝 -->



<!-- 하단 시작 { -->
    <!-- 푸터영역 -->
    <footer>
        <img src="<?= G5_IMG_URL?>/footer_logo.png" alt="푸터로고" />

        <p>
            (주)더조은 / 사업자번호 123-45-67890 / 통신판매신고 제 2013호 / 등록번호 더조은1234 / 발행인 : 홍길동
            <br />
            대표자 :	 홍길동 / 개인정보관리자 : 홍길동 / ☎ 051) 123-4567 / 부산광역시 부산진구 부전동 123 5층
            <br />
            <strong>Copyright ⓒ(주)더조은 All rights reserved.</strong>
        </p>
    </footer>

<!-- } 하단 끝 -->

</div><!-- wrapper 끝 -->


<?php
include_once(G5_PATH."/tail.sub.php");
?>