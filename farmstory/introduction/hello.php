<?
	include_once('../common.php');
	include_once('../head.php');
?>

<section class="sub">
	<div class="bg">
		<img src="<?= G5_IMG_URL ?>/sub_top_tit1.png" alt="INTRODUCTION" />
	</div>
	<div>
		<aside>
			<img src="<?= G5_IMG_URL ?>/sub_aside_cate1_tit.png" alt="팜스토리소개" />

			<ul class="pg1">
				<li class="on">
					<a href="<?=G5_URL?>/hello.php"><strong>인사말</strong></a>
				</li>
				<li>
					<a href="<?=G5_URL?>/direction.php"><strong>찾아오시는길</strong></a>
				</li>
			</ul>

		</aside>

		<article>
			<nav>
				<img src="<?= G5_IMG_URL ?>/sub_nav_tit_cate1_tit1.png" alt="인사말" />
				<span>HOME > 팜스토리소개 > <strong>인사말</strong></span>
			</nav>

			<!-- 컨텐츠 영역 -->
			<div class="content content1">
				<p>
					안녕하세요. 팜스토리입니다...
				</p>
			</div>

		</article>
	</div>
</section>

<?
	include_once('../tail.php');
?>