<p id="pagetop"><a href="#"><img src="<?php echo $_SESSION["rootDir"] ?>images/pagetop.png" /></a></p>
<script>
$(function(){
	$('a[href^=#]').click(function() {
		var speed = 1000;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$('body,html').animate({scrollTop:position}, speed, 'swing');
		return false;
	});
});
$(function() {
	var pagetop = $("#pagetop");
	pagetop.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 300) {
			pagetop.fadeIn();
		} else {
			pagetop.fadeOut();
		}
	});
});
</script>
