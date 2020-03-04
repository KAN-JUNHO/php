<?
	include_once('./_head.php');
?>
<section class="sub">
			<div class="bg">
				<img src="<?=G5_IMG_URL?>/sub_top_tit3.png" alt="INTRODUCTION" />
			</div>
			<div>
				<aside>
					<img src="<?=G5_IMG_URL?>/sub_aside_cate3_tit.png" alt="팜스토리소개" />

					<ul class="pg3">
						<li class="<?=($board['bo_table']== 'croptalk') ? 'on':'off' ?>">
							<a href="<?=G5_BBS_URL?>/board.php?bo_table=croptalk"><strong>농작물이야기</strong></a>
						</li>
						<li class="<?=($board['bo_table']== 'grow') ? 'on':'off' ?>">
							<a href="<?=G5_BBS_URL?>/board.php?bo_table=grow"><strong>텃밭가꾸기</strong></a>
						</li>
						<li class="<?=($board['bo_table']== 'school') ? 'on':'off' ?>">
							<a href="<?=G5_BBS_URL?>/board.php?bo_table=school"><strong>귀농학교</strong></a>
						</li>
					</ul>

				</aside>

				<article>
					<nav>
						<img src="<?=G5_IMG_URL?>/sub_nav_tit_cate3_<?=$board['bo_table']?>.png" alt="찾아오시는 길" />
						<span>HOME > 농작물이야기 > <strong><?= $board['bo_subject'] ?></strong></span>
					</nav>

					<!-- 컨텐츠 영역 -->
					<div class="content content3">