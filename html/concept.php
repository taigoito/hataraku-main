<?php include("inc/start.inc"); ?>
<?php
$title = "はた楽のリフォームについて";
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
			<h3>About</h3>
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
						<p>
							【福井のリフォーム専門店】<br />
							全エリア指定水道工事店ならではの安心自社施工！
						</p>
						<div>
							はた楽は、水まわりのリフォームのことを<br />
							何でも気軽に相談できる専門店なのです！
						</div>
						<p class="detail">
							水まわり専門リフォーム「はた楽」のモットーは<br />
							お客様の笑顔のために、<br class="sp" />楽しく暮らせる毎日を提供することです。<br />
							<br />
							「はた楽」を漢字にすると「傍楽」と書き、<br />
							<strong>”働く=傍にいる人を楽にすること”</strong><br class="sp" />という意味が込められています。
						</p>
					</div>
				</section>

				<section id="strength">
					<div class="section_inner">
						<div class="logo">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength.png" />
						</div>
						<a href="#strength01"><img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength01_a.png" /></a>
						<a href="#strength02"><img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength02_a.png" /></a>
						<a href="#strength03"><img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength03_a.png" /></a>
					</div>
					<div class="clear"></div>
				</section>

				<section id="strength01" class="strength">
					<div class="section_inner">
						<div class="title">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength01_b.png" />
						</div>
						<div class="image">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength01_1.jpg" />
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength01_2.jpg" />
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength01_3.jpg" />
						</div>
						<div class="clear"></div>
						<div class="description">
							<div class="description_inner">
								<h5>
									小工事も歓迎！<br />
									お客様のあらゆる「困った…」に対応！
								</h5>
								<p>
									本当のお困りごとは毎日の暮らしのなかで起こるささいなこと。<br />
									<br />
									よく耳にするのは、「こんな小さなこと、頼んで大丈夫かしら？」と遠慮してしまい、<br />
									不便な毎日を続けていらっしゃることがとても多いです。<br />
									<br />
									私たちのリフォームは、部屋を作ったりお湯を出すことではなくて、<br />
									それを通じてお客さまに心地よい暮らしを手にしてもらうことです。<br />
									<br />
									なので、1万円からの小さな工事でも喜んでお引き受けしています。<br />
									もともとは、灯油1本からお届けしていた当社ですから、小さなことこそ大得意なのです。
								</p>
							</div>
						</div>
					</div>
				</section>

				<section id="strength02" class="strength">
					<div class="section_inner">
						<div class="title">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength02_b.png" />
						</div>
						<div class="image">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength02_1.jpg" />
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength02_2.jpg" />
						</div>
						<div class="clear"></div>
						<div class="description">
							<div class="description_inner">
								<h5>
									地域密着型！<br />
									車で20分圏内なら、手厚くスピード対応！
								</h5>
								<p>
									創業50年のなかで私たちはプロパンガスの供給も続けています。<br />
									<br />
									「火が出ない」「お湯が出ない」などのお困りごとには、<br />
									即対応をずっと続けています。<br />
									<br />
									私たちはリフォームそのものよりも、<br />
									その後に暮らしを明るくしたいと考えていますから、<br />
									私たちが十分フォローできるエリア以外での工事はお受けしていません。<br />
									<br />
									今あるお客さまを一番大切にしていきたいという気持ちを持っています。
								</p>
							</div>
						</div>
					</div>
				</section>

				<section id="strength03" class="strength">
					<div class="section_inner">
						<div class="title">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength03_b.png" />
						</div>
						<div class="image">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength03_1.jpg" />
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/strength03_2.jpg" />
						</div>
						<div class="clear"></div>
						<div class="description">
							<div class="description_inner">
								<h5>
									工事保証が付くので<br />
									施工後もお気軽にお声かけください!
								</h5>
								<p>
									お客さまにリフォームで得ていただきたいのは、「安心」と「くつろぎ」です。<br />
									私たちは製品のほか、工事にまで保証を付けて<br />
									お客さまへの安心をお届けしたいと考えています。<br />
									<br />
									長いお付き合いをしたいので、口約束だけではなく思いを形にしています。
								</p>
							</div>
						</div>
					</div>
				</section>

<?php include("inc/link.inc"); ?>

			</article>

		</div>

	</div>

<?php include("inc/footer.inc"); ?>

<?php include("inc/footer2.inc"); ?>

</body>
</html>
