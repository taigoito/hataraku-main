<header>

	<div id="logo" class="block">
		<a href="<?php echo $_SESSION["rootDir"] ?>./">
			<img id="header_logo" src="<?php echo $_SESSION["rootDir"] ?>images/logo.png" />
		</a>
		<div id="header_tel">
			<a href="tel:0120310502"><img src="<?php echo $_SESSION["rootDir"] ?>images/header/tel.png" /></a>
		</div>
		<div class="clear"></div>
	</div>
	<div class="block info">
		<div class="block catchcopy">
			水廻り専門リフォームの『はた楽』<br />
			福井県嶺北地域、福井市のリフォーム専門店
		</div>
		<div class="block tel">
			<div>お電話でのご相談も受付中！</div>
			<div>
				<img src="<?php echo $_SESSION["rootDir"] ?>images/tel.png" /><span class="tel_no">0120-31-0502</span>
			</div>
			<div class="time">受付時間／9:00～17:30</div>
		</div>
	</div>
	<div class="block link">
		<a href="<?php echo $_SESSION["rootDir"] ?>contact.php?kbn=1"><img src="<?php echo $_SESSION["rootDir"] ?>images/header/reserve.png" /></a>
		<a href="<?php echo $_SESSION["rootDir"] ?>contact.php?kbn=2"><img src="<?php echo $_SESSION["rootDir"] ?>images/header/estimate.png" /></a>
	</div>
	<div class="clear"></div>

</header>

<?php include("menu.inc"); ?>
