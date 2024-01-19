<?php include("inc/start.inc"); ?>
<?php
$kbn = getParameter("kbn", "1");

if($kbn == "4") {
	$url = 'https://hrsn.jp/ecocute/';
	header('Location: ' . $url, true, 301);
	exit;
}

$res = getContents("reform");
$resData = json_decode($res, true);
$list = $resData["list"];
$item = $list[$kbn - 1];
$name = $item["ITEM_01"];
$name2 = $item["ITEM_02"];
$img = $item["ITEM_03"];
$back = $item["ITEM_04"];
$name3 = $item["ITEM_05"];
$price = $item["ITEM_06"];
$msg = $item["ITEM_07"];
$title = $name;
$title2 = $name2;
$kbnName = $name3;
$subTitle = "";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<?php include("inc/head.inc"); ?>
</head>

<body id="<?php echo $myPage ?>">

<?php include("inc/header.inc"); ?>

	<div id="page_header_base" class="kbn<?php echo $kbn ?>">
		<article id="page_header">
			<div id="page_header_title">
				<h2><?php echo $title ?></h2>
				<h3><?php echo $title2 ?></h3>
			</div>
		</article>
	</div>

	<div id="contents">

		<div id="main">

			<ul id="breadcrumbs">
				<a href="<?php echo $_SESSION["rootDir"] ?>./"><li class="home"><img src="<?php echo $_SESSION["rootDir"] ?>images/home.png" /><span>ホーム</span></li></a>
				<a href="<?php echo $_SESSION["rootDir"] ?>plan.php"><li>＞<span>リフォームプラン</span></li></a>
				<li class="active">＞<span><?php echo $title ?></span></li>
			</ul>

			<article>

				<section id="price">
					<div class="section_inner">
						<table>
							<tr>
								<td class="price_caption">
									<?php echo $name3 ?><div>参考価格</div>
								</td>
								<td class="price">
									<span class="nearly">約</span>
									<span class="value"><?php echo $price ?></span>
									<span class="yen">万円</span>
									<span class="tax">(税別)～</span>
								</td>
							</tr>
						</table>
						<div class="clear"></div>
					</div>
				</section>

<?php
$res = getContents("reform".$kbn."a");
$resData = json_decode($res, true);
$list = $resData["list"];
?>
				<section id="point">
					<div class="section_inner">
						<p class="msg mincho"><?php echo nl2br($msg) ?></p>
<?php
$idx = 1;
foreach ($list as $item) {
	$description = $item["ITEM_01"];
	$img = $item["ITEM_02"];
?>
						<div class="block point<?php echo $idx ?>">
							<div>お悩みポイント<?php echo $idx ?></div>
							<img src="<?php echo $userImageHost ?>user/reform/<?php echo $kbn ?>/a/<?php echo $img ?>" />
							<p>
								<span>●</span><?php echo nl2br($description) ?>
							</p>
						</div>
<?php
	$idx++;
}
?>
						<div class="clear"></div>
					</div>
				</section>

				<section id="point_menu">
					<a href="#merit"><img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/merit_a.png" /></a>
					<a href="#cost"><img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/cost_a.png" /></a>
					<a href="#example"><img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/example_a.png" /></a>
					<a href="#showroom"><img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/showroom_a.png" /></a>
				</section>

<?php
$res = getContents("reform".$kbn."b");
$resData = json_decode($res, true);
$list = $resData["list"];
?>
				<section id="merit" class="point">
					<h3>
						<div>
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/merit_b.png" />
						</div>
						リフォームのメリット
					</h3>
					<div class="section_inner">
<?php
$idx = 1;
foreach ($list as $item) {
	$description = $item["ITEM_01"];
	$img = $item["ITEM_02"];
	$no = str_pad($idx, 2, "0", STR_PAD_LEFT);
?>
						<div class="block">
							<table>
								<tr>
									<td colspan="2">
										<img class="image" src="<?php echo $userImageHost ?>user/reform/<?php echo $kbn ?>/b/<?php echo $img ?>" />
									</td>
								</tr>
								<tr>
									<td class="no">
										<div>Merit</div>
										<?php echo $no ?>
									</td>
									<td class="description">
										<?php echo nl2br($description) ?>
									</td>
								</tr>
							</table>
						</div>
						<div class="clear"></div>
<?php
	$idx++;
}
?>
					</div>
				</section>

				<section id="cost" class="point">
					<h3>
						<div>
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/cost_b.png" />
						</div>
						リフォームにかかる費用
					</h3>
					<div class="section_inner">
						<p>ご予算に応じて、多種多様なプランをご提案させていただきます。</p>
					</div>
				</section>

<?php
$res = getContents("reform".$kbn."c");
$resData = json_decode($res, true);
$list = $resData["list"];
?>
				<section id="example" class="point">
					<h3>
						<div>
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/example_b.png" />
						</div>
						施工実例
					</h3>
					<div class="section_inner">
<?php
$idx = 1;
foreach ($list as $item) {
	$name = $item["ITEM_01"];
	$before = $item["ITEM_02"];
	$after = $item["ITEM_03"];
	$cost = $item["ITEM_04"];
	$days = $item["ITEM_05"];
	$years = $item["ITEM_06"];
	$place = $item["ITEM_07"];
	$work = $item["ITEM_08"];
	$no = str_pad($idx, 2, "0", STR_PAD_LEFT);
	$works = explode(",", $work);
?>
						<div class="block">
							<h4><span><strong>実例<?php echo $no ?></strong>：<?php echo $name ?></span></h4>
							<div class="info">
								<table class="image">
									<tr class="pc3">
										<th class="before">Before</th>
										<th class="to">&nbsp;</th>
										<th class="after">After</th>
									</tr>
									<tr>
										<td class="before">
											<div class="before sp">Before</div>
											<img src="<?php echo $userImageHost ?>user/reform/<?php echo $kbn ?>/c/<?php echo $before ?>" />
										</td>
										<td class="to">
											<img src="<?php echo $_SESSION["rootDir"] ?>images/arrow2.png" />
										</td>
										<td class="after">
											<div class="after sp">After</div>
											<img src="<?php echo $userImageHost ?>user/reform/<?php echo $kbn ?>/c/<?php echo $after ?>" />
										</td>
									</tr>
								</table>
								<div class="data_title">Reform DATA</div>
								<table class="data">
									<tr>
										<th>リフォーム費用</th>
										<td><span><?php echo $cost ?></span>万円前後</td>
									</tr>
									<tr>
										<th>工期</th>
										<td><?php echo $days ?>日間</td>
									</tr>
									<tr>
										<th>築年数</th>
										<td><?php echo $years ?>年</td>
									</tr>
									<tr>
										<th>施工箇所</th>
										<td><?php echo $place ?></td>
									</tr>
								</table>
								<div class="work">
	<?php
		foreach ($works as $value) {
	?>
									<span><?php echo $value ?></span>
	<?php
		}
	?>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
<?php
	$idx++;
}
?>
					</div>
				</section>

				<section id="catalog">
					<h3>
						リフォームを<br class="sp" />お考えの方は、
					</h3>
					<img class="arrow" src="<?php echo $_SESSION["rootDir"] ?>images/arrow3.png" />
					<div class="catalog_base">
						<img class="catalog_img" src="<?php echo $_SESSION["rootDir"] ?>images/catalog/catalog_2.png" />
					</div>
					<div class="link_img">
						<img src="<?php echo $_SESSION["rootDir"] ?>images/link.png" />
						<a href="<?php echo $_SESSION["rootDir"] ?>/news/archives/2178"><div>詳しくはこちらから</div></a>
					</div>
				</section>

<?php
$res = getContents("showroom");
$resData = json_decode($res, true);
$list = $resData["list"];
?>
				<section id="showroom">
					<div class="showroom_header">
						<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/showroom.png" />
					</div>
					<h3>
						「はた楽」ショールーム福井のスタッフ達が<br />
						誠心誠意ご対応させていただきます！
					</h3>
					<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/staff.jpg" />
					<div class="image">
							<ul id="showroom_slider">
<?php
foreach ($list as $item) {
	$img = $item["ITEM_01"];
?>
								<img src="<?php echo $userImageHost ?>user/showroom/<?php echo $img ?>" />
<?php
}
?>
							</ul>
						<div id="showroom_slider-pager">
<?php
$idx = 0;
foreach ($list as $item) {
	$img = $item["ITEM_01"];
?>
							<a data-slide-index="<?php echo $idx ?>" href=""><img src="<?php echo $userImageHost ?>user/showroom/<?php echo $img ?>" /></a>
<?php
	$idx++;
}
?>
						</div>
						<div class="clear"></div>
					</div>
<script>
$(document).ready(function(){
	setTimeout("startSlider()", 0);
});
function startSlider() {
	$("#showroom_slider").bxSlider({
		auto:false,
		controls:false,
		pagerCustom: "#showroom_slider-pager",
	});
}
</script>
					<h4>
						実際に展示品が見られて比較検討ができる<br />
						体感型の「はた楽」ショールーム福井店です！
					</h4>
					<p>
						西武燃料㈱に併設されている弊社のショールームは、いつでもお客様のご来店を歓迎しています。お気軽にお立ち寄りください。キッチン、システムバス、洗面台、トイレ、水まわりのリフォームについて実際に見て、相談できるお店です。休憩スペースもございますので、お茶を飲むだけでもいらしてくださいね。
					</p>
					<div class="info">
						<div class="inner">
							<div class="name">はた楽 ショールーム福井店</div>
							<div class="address">〒910-0028 福井県福井市学園3丁目2-17</div>
							<div class="msg">お電話でのご相談も受付中！</div>
							<div class="tel">
								<span><img src="<?php echo $_SESSION["rootDir"] ?>images/tel.png" /></span>
								<span class="tel_no">0120-31-0502</span>
								<span>受付時間／9:00～17:30</span>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<div class="link_img">
						<img src="<?php echo $_SESSION["rootDir"] ?>images/link.png" />
						<a href="<?php echo $_SESSION["rootDir"] ?>contact.php?kbn=1"><div><img class="icon" src="<?php echo $_SESSION["rootDir"] ?>images/showroom_icon.png" />&nbsp;ショールーム来店予約はこちらから</div></a>
					</div>
				</section>

			</article>

		</div>

	</div>
	
<?php include("inc/footer.inc"); ?>

<?php include("inc/footer2.inc"); ?>

</body>
</html>
