<div class="sp">
	<div id="menubar_hdr">
		<div>
			<img id="open" src="<?php echo $_SESSION["rootDir"] ?>images/open.png" />
		</div>
	</div>
</div>
<script type="text/javascript">
$(function() {
	showMenu(false);
	$("#menubar_hdr").click(
		function() {
	   		showMenu(true);
	});
	$("#close").click(
		function() {
	   		showMenu(false);
	});
});
function showMenu(visible) {
	var menubar = $("#menubar-s");
	var hdr = $("#menubar_hdr");
	if (visible) {
		menubar.show("fast");
		hdr.hide();
	} else {
		menubar.hide();
		hdr.show();
	}
}
</script>
<div id="footer_link">
	<a class="pc2" href="<?php echo $_SESSION["rootDir"] ?>contact.php?kbn=1"><img src="<?php echo $_SESSION["rootDir"] ?>images/footer/reserve.png" /></a>
	<a class="pc2" href="<?php echo $_SESSION["rootDir"] ?>contact.php?kbn=2"><img src="<?php echo $_SESSION["rootDir"] ?>images/footer/estimate.png" /></a>
	<a class="pc2" href="https://hrsn.jp/news/archives/2178"><img src="<?php echo $_SESSION["rootDir"] ?>images/footer/line.png" /></a>
	<a class="pc2" href="<?php echo $_SESSION["rootDir"] ?>news"><img src="<?php echo $_SESSION["rootDir"] ?>images/footer/catalog.png" /></a>
	<a class="sp2" href="<?php echo $_SESSION["rootDir"] ?>contact.php?kbn=1"><img src="<?php echo $_SESSION["rootDir"] ?>images/footer/reserve2.png" /></a>
	<a class="sp2" href="<?php echo $_SESSION["rootDir"] ?>contact.php?kbn=2"><img src="<?php echo $_SESSION["rootDir"] ?>images/footer/estimate2.png" /></a>
	<a class="sp2" href="https://hrsn.jp/news/archives/2178"><img src="<?php echo $_SESSION["rootDir"] ?>images/footer/line2.png" /></a>
	<a class="sp2" href="<?php echo $_SESSION["rootDir"] ?>news"><img src="<?php echo $_SESSION["rootDir"] ?>images/footer/catalog2.png" /></a>
</div>
<script>
$(function() {
	var footer_link = $("#footer_link");
	footer_link.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			footer_link.fadeIn();
		} else {
			footer_link.fadeOut();
		}
	});
});
</script>
