<?php include("inc/start.inc"); ?>
<?php
$title = "";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include("inc/head.inc"); ?>
</head>

<body id="<?php echo $myPage ?>">

<?php include("inc/header.inc"); ?>

	<div class="slider_all pc">
		<div class="slider_base">
			<ul class="slider">
				<a href="<?php echo $_SESSION["rootDir"] ?>company.php"><img src="<?php echo $_SESSION["rootDir"] ?>images/top/slide/03.jpg" /></a>
				<a href="<?php echo $_SESSION["rootDir"] ?>news/archives/196"><img src="<?php echo $_SESSION["rootDir"] ?>images/top/slide/00.jpg" /></a>
				<a href="<?php echo $_SESSION["rootDir"] ?>contact.php?kbn=1"><img src="<?php echo $_SESSION["rootDir"] ?>images/top/slide/02.jpg" /></a>
				<a href="<?php echo $_SESSION["rootDir"] ?>catalog.php"><img src="<?php echo $_SESSION["rootDir"] ?>images/top/slide/01.jpg" /></a>
			</ul>
			<div class="clear"></div>
		</div>
	</div>

	<div class="slider_all sp">
		<div class="slider_base">
			<ul class="slider2">
				<a href="<?php echo $_SESSION["rootDir"] ?>news/archives/196"><img src="<?php echo $_SESSION["rootDir"] ?>images/top/slide/00.jpg" /></a>
				<a href="<?php echo $_SESSION["rootDir"] ?>catalog.php"><img src="<?php echo $_SESSION["rootDir"] ?>images/top/slide/01.jpg" /></a>
				<a href="<?php echo $_SESSION["rootDir"] ?>contact.php?kbn=1"><img src="<?php echo $_SESSION["rootDir"] ?>images/top/slide/02.jpg" /></a>
				<a href="<?php echo $_SESSION["rootDir"] ?>company.php"><img src="<?php echo $_SESSION["rootDir"] ?>images/top/slide/03.jpg" /></a>
			</ul>
			<div class="clear"></div>
		</div>
	</div>

<script>
$(document).ready(function(){
	$(".slider").bxSlider({
		auto: true,
		controls: true,
		pager: true,
		slideWidth:1000,
		touchEnabled:true,
		minSlides:3,
		maxSlides:3,
		moveSlides:1,
		slideMargin:0
	});
});
$(document).ready(function(){
	$(".slider2").bxSlider({
		auto: true,
		controls: true,
		pager: true,
	});
});
</script>

	<div id="contents">

		<div id="main">

			<article>

				<section id="link">
					<div class="section_inner">
						<div id="reserve">
							<h3>
								<img src="<?php echo $_SESSION["rootDir"] ?>images/reserve_icon.png" />
								来店予約受け付け
							</h3>
							<img class="image" src="<?php echo $_SESSION["rootDir"] ?>images/top/reserve.jpg" />
							<br />
							<p>
								WEBからご来店予約された方に<br />
								QUOカード500円分をもれなくプレゼント！
							</p>
							<a href="<?php echo $_SESSION["rootDir"] ?>contact.php?kbn=1"><img class="go" src="<?php echo $_SESSION["rootDir"] ?>images/go.png" /></a>
							<div class="clear"></div>
						</div>
						<div id="catalog">
							<h3>
								<img src="<?php echo $_SESSION["rootDir"] ?>images/catalog_icon.png" />
								WEB カタログ
							</h3>
							<img class="image" src="<?php echo $_SESSION["rootDir"] ?>images/top/catalog.jpg" />
							<br />
							<p>
								WEB施工事例カタログを無料ダウンロード！<br />
								パソコン・スマホで今すぐチェック！
							</p>
							<a href="<?php echo $_SESSION["rootDir"] ?>catalog.php"><img class="go" src="<?php echo $_SESSION["rootDir"] ?>images/go.png" /></a>
							<div class="clear"></div>
						</div>
					</div>
				</section>

<?php include("inc/info.inc"); ?>

				<section id="news">
					<div class="section_inner">
						<div class="line2">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/line2.png" />
						</div>
						<div class="title">
							<div class="ja">施工事例・お知らせ・キャンペーン情報</div>
							<div class="en">News</div>
						</div>
						<div class="body">
<?php
$cnt = 0;
foreach ($infoList as $info) {
	$date = strtotime($info["ymd"]);
	$date = date("Y/m/d", $date)."(".getWeekday($date).")";
	$contents = $info["title"];
	$img = $info["image"];
	$link = $info["url"];
	$idx = $cnt % 2;
?>
							<div class="block block<?php echo $idx ?>">
								<a href="<?php echo $link ?>">
									<img src="<?php echo $img ?>" />
									<div>
										<span class="date"><?php echo $date ?></span>
										<p><?php echo nl2br($contents) ?></p>
									</div>
								</a>
							</div>
<?php
	$cnt++;
}
?>
							<div class="clear"></div>
							<div class="link_img">
								<img src="<?php echo $_SESSION["rootDir"] ?>images/link.png" />
								<a href="<?php echo $_SESSION["rootDir"] ?>news/"><div>施工事例・お知らせ・キャンペーン情報一覧へ</div></a>
							</div>
						</div>
					</div>
				</section>

				<section id="plan">
					<div class="section_inner">
						<img id="logo2" src="<?php echo $_SESSION["rootDir"] ?>images/logo2.png" />
						<div class="title">
							<div class="ja">おすすめリフォームプラン</div>
							<div class="en">Reform plan</div>
						</div>
						<div class="body">
							<p>
								リフォームをお考えのそれぞれの場所ごとに、</br >
								お客様満足を追求した上質なリフォームをご提案いたします。</br >
								こちらではその一例として、<br class="sp" />おすすめプランの価格と内容をご紹介しております。
							</p>
<?php include("inc/plan.inc"); ?>
						</div>
					</div>
				</section>

				<section id="estimate">
					<img class="image" src="<?php echo $_SESSION["rootDir"] ?>images/top/estimate.jpg" />
					<div class="link_img">
						<img src="<?php echo $_SESSION["rootDir"] ?>images/link.png" />
						<a href="<?php echo $_SESSION["rootDir"] ?>contact.php?kbn=2"><div>今すぐお見積りをご希望の方はこちら</div></a>
					</div>
				</section>

				<section id="showroom">
					<div class="section_inner">
						<div class="line2">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/line2.png" />
						</div>
						<div class="title">
							<div class="ja">体感型ショールーム</div>
							<div class="en">Show room</div>
						</div>
						<div class="body">
							<p>
								私たちはた楽は、お客様のご要望や理想をじっくりと伺い、<br />
								期待・想像以上のリフォームへと繋がるようご提案を心がけています。<br />
								家づくりのことなら私たちにお任せください。
							</p>
							<img class="image" src="<?php echo $_SESSION["rootDir"] ?>images/top/showroom.jpg" />
							<div id="showroom_info">
								<div class="name">はた楽 ショールーム福井店</div>
								<div class="address">〒910-0028 福井県福井市学園3丁目2-17</div>
								<div class="msg">お電話でのご相談も受付中！</div>
								<div class="tel">
									<img src="<?php echo $_SESSION["rootDir"] ?>images/tel.png" />
									<span class="tel_no">0120-31-0502</span>
								</div>
								<div class="time">受付時間／9:00～17:30</div>
							</div>
							<div class="clear"></div>
							<div id="staff">
								<img class="image" src="<?php echo $_SESSION["rootDir"] ?>images/top/staff.png" />
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</section>
				<div id="to_company" class="link_img">
					<img src="<?php echo $_SESSION["rootDir"] ?>images/link.png" />
					<a href="<?php echo $_SESSION["rootDir"] ?>company.php"><div>会社案内へ</div></a>
				</div>

			</article>

		</div>

	</div>

<?php include("inc/footer.inc"); ?>

<?php include("inc/footer2.inc"); ?>

</body>
</html>
