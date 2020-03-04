<?
	include_once('./_head.php');
?>
<section class="sub">
			<div class="bg">
				<img src="<?=G5_IMG_URL?>/sub_top_tit4.png" alt="EVENT" />
			</div>
			<div>
				<aside>
					<img src="<?=G5_IMG_URL?>/sub_aside_cate4_tit.png" alt="이벤트" />

					<ul class="pg4">
						<li class="<?=($board['bo_table']=='event') ? 'on':'off' ?>">
							<a href="<?=G5_BBS_URL?>/board.php?bo_table=event"><strong>이벤트</strong></a>
						</li>
					</ul>

				</aside>

				<article>
					<nav>
						<img src="<?=G5_IMG_URL?>/sub_nav_tit_cate4_<?=$board['bo_table']?>.png" alt=" event" />
						<span>HOME > 농작물이야기 > <strong><?= $board['bo_subject'] ?></strong></span>
					</nav>

					<!-- 컨텐츠 영역 -->
					<div class="content content4">