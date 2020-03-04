<?
	include_once('./_head.php');
?>
<section class="sub">
			<div class="bg">
				<img src="<?=G5_IMG_URL?>/sub_top_tit5.png" alt="INTRODUCTION" />
			</div>
			<div>
				<aside>
					<img src="<?=G5_IMG_URL?>/sub_aside_cate5_tit.png" alt="팜스토리소개" />

					<ul class="pg3">
						<li class="<?=($board['bo_table']== 'croptalk') ? 'on':'off' ?>">
							<a href="<?=G5_BBS_URL?>/board.php?bo_table=notice"><strong>알림</strong></a>
						</li>
						<li class="<?=($board['bo_table']== 'grow') ? 'on':'off' ?>">
							<a href="<?=G5_BBS_URL?>/board.php?bo_table=menu"><strong>메뉴</strong></a>
						</li>
						<li class="<?=($board['bo_table']== 'school') ? 'on':'off' ?>">
							<a href="<?=G5_BBS_URL?>/board.php?bo_table=chef"><strong>나도요리사</strong></a>
						</li>
						<li class="<?=($board['bo_table']== 'school') ? 'on':'off' ?>">
							<a href="<?=G5_BBS_URL?>/board.php?bo_table=qa"><strong>질문</strong></a>
						</li>
						<li class="<?=($board['bo_table']== 'school') ? 'on':'off' ?>">
							<a href="<?=G5_BBS_URL?>/board.php?bo_table=faq"><strong>자주묻는질문</strong></a>
						</li>
					</ul>

				</aside>

				<article>
					<nav>
						<img src="<?=G5_IMG_URL?>/sub_nav_tit_cate5_<?=$board['bo_table']?>.png" alt="찾아오시는 길" />
						<span>HOME > 농작물이야기 > <strong><?= $board['bo_subject'] ?></strong></span>
					</nav>

					<!-- 컨텐츠 영역 -->
					<div class="content content3">