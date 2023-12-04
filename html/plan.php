<?php include("inc/start.inc"); ?>
<?php
$title = "リフォームプラン";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include("inc/head.inc"); ?>
</head>

<body id="<?php echo $myPage ?>">

<?php include("inc/header.inc"); ?>

	<article id="page_header">
		<div id="page_header_title">
			<h2><?php echo $title ?></h2>
			<h3>Reform plan</h3>
		</div>
	</article>

	<div id="contents">

		<div id="main">

			<ul id="breadcrumbs">
				<a href="<?php echo $_SESSION["rootDir"] ?>./"><li class="home"><img src="<?php echo $_SESSION["rootDir"] ?>images/home.png" /><span>ホーム</span></li></a>
				<li class="active">＞<span><?php echo $title ?></span></li>
			</ul>

			<article>

				<section id="description">
					<div class="section_inner">
						<img src="<?php echo $_SESSION["rootDir"] ?>images/logo2.png" />
						<h4>
							おすすめリフォームプラン
						</h4>
						<p>
							リフォームをお考えのそれぞれの場所ごとに、<br />
							お客様満足を追求した<br class="sp" />上質なリフォームをご提案いたします。<br />
							こちらではその一例として、<br class="sp" />おすすめプランの価格と内容をご紹介しております。
						</p>
					</div>
				</section>

				<section id="plan3">
					<div class="section_inner">
<?php include("inc/plan.inc"); ?>
					</div>
					<div class="clear"></div>
				</section>

<?php include("inc/link.inc"); ?>

			</article>

		</div>

	</div>

<?php include("inc/footer.inc"); ?>

<?php include("inc/footer2.inc"); ?>

</body>
</html>
