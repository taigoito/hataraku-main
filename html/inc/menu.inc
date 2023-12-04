<?php
$list = [];
$list["concept"]	= "はた楽のリフォームについて";
$list["plan"]		= "リフォームプラン";
$list["news"]		= "施工事例・お知らせ・キャンペーン";
$list["company"]	= "会社案内";
$list["contact"]	= "お問い合わせ";
?>
<nav id="menubar">
	<ul>
<?php
$idx = 0;
foreach ($list as $key=>$value) {
	$idx++;
	if ($key == "top") {
		$url = "./";
	} else if ($key == "news") {
		$url = $key."/";
	} else {
		$url = $key . ".php";
	}
	$menuName = $value;
	$class = "";
	if ($idx == 1) {
		$class = "first";
	}
?>
<?php
if ($key != "service") {
?>
		<li class="<?php echo $class ?>">
			<a href="<?php echo $_SESSION["rootDir"] ?><?php echo $url ?>">
				<span><img src="<?php echo $_SESSION["rootDir"] ?>images/menu/<?php echo $key ?>.png" /></span>
			</a>
		</li>
<?php
} else {
?>
		<li>
			<a href="javascript:return false;">
				<span><?php echo $menuName ?></span>
			</a>
			<ul class="child">
<?php
	foreach ($services as $key=>$value) {
		$url = $key . ".php";
		$menuName = $value;
?>
				<li class="child_menu">
					<a href="<?php echo $_SESSION["rootDir"] ?><?php echo $url ?>">・<?php echo $menuName ?></a>
				</li>
<?php
	}
?>
			</ul>
		</li>
<?php
}
?>
<?php
}
?>
	</ul>
</nav>
<nav id="menubar-s">
	<div id="close">
		<img src="<?php echo $_SESSION["rootDir"] ?>images/close.png" />
		閉じる
	</div>
<?php
$idx = 0;
foreach ($list as $key=>$value) {
	$idx++;
	$class = "";
	if ($key == "top") {
		$url = "./";
		$class = "top";
	} else if ($key == "news") {
		$url = $key."/";
	} else {
		$url = $key . ".php";
	}
	$menuName = $value;
?>
		<li class="<?php echo $class ?>"><a href="<?php echo $_SESSION["rootDir"] ?><?php echo $url ?>"><div><?php echo $menuName ?></div></a></li>
<?php
}
?>
</nav>
