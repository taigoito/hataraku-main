<?php include("inc/start.inc"); ?>
<?php
$title = "会社案内";
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
			<h3>Company Profile</h3>
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
							西部燃料 株式会社が運営する、<br class="sp" />水まわり専門リフォーム 店『はた楽』は<br />
							福井市を対象エリアに、<br class="sp" />みなさまの暮らしの応援隊として取り組む<br />
							地域密着型のリフォーム専門店です！
						</p>
					</div>
				</section>

				<section id="leader">
					<div class="line2">
						<img src="<?php echo $_SESSION["rootDir"] ?>images/line2.png" />
					</div>
					<h4>代表メッセージ</h4>
					<img class="image" src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/leader.jpg" />
					<div class="section_inner">
						<img class="line" src="<?php echo $_SESSION["rootDir"] ?>images/line.png" />
						<img src="<?php echo $_SESSION["rootDir"] ?>images/white.png" width="100%" height="45px" />
						<p class="msg1 mincho">
							お客様の笑顔のために<br />
							毎日楽しくはた楽をモットーに。
						</p>
						<p class="msg2 mincho">
							毎度お世話になっております。<br />
							私たちは、水まわり専門リフォーム「はた楽」です。<br />
							<br />
							皆様、はたらくという意味をご存知ですか?<br />
							働く＝傍（はた）を楽にする事、<br class="sp" />周りの人を楽にする事、楽しくする事、<br />
							という意味もあるようです。<br />
							<br />
							私たち、はた楽は上記に掲げた<br class="sp" />リフォーム事業理念をベースに<br class="sp" />水まわりのリフォームを中心に行っており、<br />
							地域の皆様にとって<br class="sp" />少しでも身近な存在であること、<br />
							どんなことでも気軽に相談できる<br class="sp" />会社であることを常に心がけております。<br />
							<br />
							今日も私たちは<br class="sp" />自分たちにしかできない役割を担い、<br />
							一人一人がいかに傍（はた）を<br class="sp" />楽にできるかを考えて<br class="sp" />「いい仕事」を作り上げていきます。
						</p>
						<p class="name gothic">
							運営会社／西部燃料 株式会社　代表取締役　<br class="sp" /><img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/name.png" />
						</p>
					</div>
				</section>

				<section id="message">
					<div class="section_inner">
						<h4><span class="hyphen">－</span>仕事で大事にしていること</h4>
						<p>
							当たり前の毎日がほんの少しでも楽しくなるようにと、心を込めてお客様のリフォームをお手伝いしています。新しくなるキッチンやお風呂そのものだけでなく、その先のお客様の喜ぶ顔こそが私のやりがいです。最終的には、空気のような水のような、そんな存在感で、お客様の暮らしにそっと寄り添える存在になれればいいなと思っています。
						</p>
						<h4><span class="hyphen">－</span>お客様へ一言</h4>
						<p>
							お客様にとって、満足できるリフォームのために少しでもお役立てできましたら、私にとってはこの上ない幸せです。<br />
							そして、リフォームを通じて深まるご縁を大切にしてまいりたいと考えております。
						</p>
					</div>
				</section>

				<section id="about">
					<div class="line2">
						<img src="<?php echo $_SESSION["rootDir"] ?>images/line2.png" />
					</div>
					<h4>会社概要</h4>
					<div class="section_inner">
						<table>
							<tr>
								<th><span class="hyphen">－</span>会社名</th>
								<td>
									西部燃料 株式会社
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>所在地</th>
								<td>
									〒910-0028　福井県福井市学園3-2-17
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>代表者</th>
								<td>
									畑下　徳洋
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>設立</th>
								<td>
									1969年 6月
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>資本金</th>
								<td>
									1,000万円
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>事業内容</th>
								<td>
									燃料販売業<br />
									リフォーム事業<br />
									外食事業<br />
									<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/ooto.png" />
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>TEL</th>
								<td>
									0776-26-0256
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>FAX</th>
								<td>
									0776-26-8158
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>E-mail</th>
								<td>
									info@hrsn.jp
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>営業時間</th>
								<td>
									9：00～17：00
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>定休日</th>
								<td>
									日曜・祝祭日
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>店舗情報</th>
								<td>
									【はた楽　福井店ショールーム】　<br class="sp" />〒910-0028　福井県福井市学園3-2-17
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>保有資格</th>
								<td>
									高圧ガス販売主任者<br />
									液化石油ガス設備士<br />
									危険物取扱者<br />
									給水装置工事主任技術者<br />
									下水道排水設備工事責任技術者<br />
									二級建築士<br />
									電気工事士<br />
									二級管工事施工管理技士<br />
									ガス機器設置スペシャリスト
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>取得許認可</th>
								<td>
									建築管工事業　知事許可（般-29）第10502号<br />
									給水装置工事事業者
								</td>
							</tr>
							<tr>
								<th><span class="hyphen">－</span>加盟団体</th>
								<td>
									タカラパートナーショップ<br />
									パナソニックの住まいパートナーズ<br />
									トクラスリフォームクラブ<br />
									一般社団法人福井県建築士会
								</td>
							</tr>
						</table>
					</div>
				</section>

				<section id="map">
					<div class="line2">
						<img src="<?php echo $_SESSION["rootDir"] ?>images/line2.png" />
					</div>
					<h4>アクセスマップ</h4>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.9368653011093!2d136.1945469509441!3d36.0706439800077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff8bf1ee5be0b8d%3A0xf37aa1a1e0a09703!2z6KW_6YOo54eD5paZ77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1503539924870" width="1400" height="560" frameborder="0" style="border:0" allowfullscreen></iframe>
					<div id="showroom">
						<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/showroom.jpg" />
					</div>
				</section>

<?php
$res = getContents("staff");
$resData = json_decode($res, true);
$list = $resData["list"];
?>
				<section id="staff">
					<h4>スタッフ紹介</h4>
					<div class="section_inner">
<?php
foreach ($list as $item) {
	$img = $item["ITEM_01"];
	$post = $item["ITEM_02"];
	$name = $item["ITEM_03"];
	$kana = $item["ITEM_04"];
	$face = $item["ITEM_05"];
	$hobby = $item["ITEM_06"];
	$place = $item["ITEM_07"];
	$stress = $item["ITEM_08"];
	$happy = $item["ITEM_09"];
	$like = $item["ITEM_10"];
	$special = $item["ITEM_11"];
	$voice = $item["ITEM_12"];
?>
						<div class="staff">
							<img src="<?php echo $userImageHost ?>user/staff/<?php echo $img ?>" />
							<img class="line" src="<?php echo $_SESSION["rootDir"] ?>images/line.png" />
							<div class="clear"></div>
							<div class="info">
								<div class="post"><?php echo $post ?></div>
								<div class="name">
									<div class="kanji"><?php echo $name ?></div>
									<div class="kana"><?php echo $kana ?></div>
								</div>
								<table>
									<tr>
										<th>会社での顔</th>
										<td><?php echo nl2br($face) ?></td>
									</tr>
									<tr>
										<th>趣味・好きなこと</th>
										<td><?php echo nl2br($hobby) ?></td>
									</tr>
									<tr>
										<th>行ってみたい所</th>
										<td><?php echo nl2br($place) ?></td>
									</tr>
									<tr>
										<th>私のストレス解消法</th>
										<td><?php echo nl2br($stress) ?></td>
									</tr>
									<tr>
										<th>◯◯なときが幸せ♪</th>
										<td><?php echo nl2br($happy) ?></td>
									</tr>
								</table>
								<div class="job">
									<h4>仕事への取り組み</h4>
									<div>
										<h5>会社の好きな所</h5>
										<p><?php echo nl2br($like) ?></p>
										<h5>仕事のこだわり</h5>
										<p><?php echo nl2br($special) ?></p>
									</div>
								</div>
								<div class="cust">
									<h4>お客様へ一言</h4>
									<div>
										<p><?php echo nl2br($voice) ?></p>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
<?php
}
?>

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
