<?php include("inc/start.inc"); ?>
<?php
$title = "お問い合わせ完了";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include("inc/head.inc"); ?>
</head>

<body id="contact">

<?php include("inc/header.inc"); ?>

	<article id="page_header">
		<div id="page_header_title">
			<h2><?php echo $title ?></h2>
			<h3>Contact done</h3>
		</div>
	</article>

	<div id="contents">

		<div id="main">

			<ul id="breadcrumbs">
				<a href="<?php echo $_SESSION["rootDir"] ?>./"><li class="home"><img src="<?php echo $_SESSION["rootDir"] ?>images/home.png" /><span>ホーム</span></li></a>
				<li class="active">＞<span>お問い合わせ</span></li>
			</ul>

			<article>

				<section>
					<div class="section_inner">
						<div class="flow">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/contact/flow3.png" />
						</div>

						<p class="thanks">
							お問い合わせ、<br class="sp" />ありがとうございました。
						</p>

					</div>
				</section>

			</article>

		</div>

	</div>

<?php include("inc/footer.inc"); ?>

<?php include("inc/footer2.inc"); ?>

</body>
</html>
