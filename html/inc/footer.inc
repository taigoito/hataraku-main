<?php
$menuList = array();

$items = array();
$items["top"]				= "ホーム";
$items["company"]			= "会社案内";
$items["news"]  			= "施工事例紹介";
$menuList[] = $items;

$items = array();
$items["concept"]			= "はた楽のリフォームについて";
$items["news"]				= "事例・お知らせ・キャンペーン";
$menuList[] = $items;

$items = array();
$items["plan"]				= "おすすめリフォームプラン";
$subItems = [];
$subItems["reform?kbn=1"]	= "キッチンリフォーム";
$subItems["reform?kbn=2"]	= "浴室リフォーム";
$subItems["reform?kbn=3"]	= "トイレリフォーム";
$subItems["reform?kbn=4"]	= "給湯器交換";
$items["sub"]				= $subItems;
$menuList[] = $items;

$items = array();
$items["contact?kbn=1"]	= "ショールーム来店予約";
$items["contact?kbn=2"]	= "無料お見積り";
$items["contact"]	= "お問い合わせ";
$menuList[] = $items;

?>
<?php include("page_top.inc"); ?>
<footer>
	<div class="footer_inner">
<?php
$idx = 0;
foreach ($menuList as $items) {
	$idx++;
?>
		<div id="footer<?php echo $idx + 1 ?>" class="footer_block footer_menu">
			<ul id="menu<?php echo $idx ?>">
<?php
	foreach ($items as $key=>$value) {
		if (is_array($value)) {
			$subItems = $value;
?>
				<ul>
<?php
			foreach ($subItems as $key=>$value) {
				$values = explode("?", $key);
				$url = $values[0].".php?".$values[1];
				$title = $value;
		?>
						<li>
							<a href="<?php echo $_SESSION["rootDir"] ?><?php echo $url ?>">
								-<?php echo $title ?>
							</a>
						</li>
		<?php
			}
?>
				</ul>
<?php
		} else {
			if ($key == "top") {
				$url = "./";
			} else if ($key == "news") {
				$url = $key."/";
			} else {
				$values = explode("?", $key);
				if (count($values) == 1) {
					$url = $key . ".php";
				} else {
					$url = $values[0].".php?".$values[1];
				}
			}
			$title = $value;
?>
				<li>
					<a href="<?php echo $_SESSION["rootDir"] ?><?php echo $url ?>">
						<img src="<?php echo $_SESSION["rootDir"] ?>images/arrow.png" /><?php echo $title ?>
					</a>
				</li>
<?php
		}
	}
?>
			</ul>
		</div>
<?php
}
?>
		<div class="clear"></div>
		<div id="footer1" class="footer_block">
			<div class="footer_block">
				<div id="footer_logo">
					<a href="<?php echo $_SESSION["rootDir"] ?>"><img src="<?php echo $_SESSION["rootDir"] ?>images/footer/logo.png" /></a>
				</div>
				<div id="address">
					〒910-0028 福井県福井市学園3丁目2-17
				</div>
			</div>
			<div id="footer_msg" class="footer_block">
				<p>
					福井県福井市で水まわりのリフォームをお考えの方へ。<br />
					「はた楽」は信頼度No.1を目指す地域密着型リフォーム専門店です。<br />
					キッチン・お風呂・トイレ・洗面など、水まわりのリフォームなら「はた楽」にお任せください。<br />
					ご来店予約&無料お見積りも受付中です。
				</p>
				<div class="tel">
					<span>お電話でのご相談も受付中！</span>
					<div>
						<img src="<?php echo $_SESSION["rootDir"] ?>images/tel.png" /><span class="tel_no">0120-31-0502</span>
						<span class="time">受付時間／9:00～17:30</span>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div id="copyright">
			<div>
				Copyright © 2017 はた楽 All rights reserved.
			</div>
		</div>
	</div>
</footer>
