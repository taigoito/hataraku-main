<?php include("inc/start.inc"); ?>
<?php
$title = "施工事例カタログ　無料ダウンロード";
?>
<?php
$send = 0;
$action = getParameter("action");
$mail = getParameter("mail", "");

if ($action == "send") {

	$to = $mail;
	$subject = "施工事例カタログ";
	$body = readText("catalog.txt");
	$header = "From: " .mb_encode_mimeheader("はた楽") ."<".$adminMail.">";

	if (mb_send_mail($to, $subject, $body, $header)) {
		$send = 1;
	} else {
		$send = -1;
	}

}
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
			<h3>Catalog Download</h3>
		</div>
	</article>

	<div id="contents">

		<div id="main">

			<ul id="breadcrumbs">
				<a href="<?php echo $_SESSION["rootDir"] ?>./"><li class="home"><img src="<?php echo $_SESSION["rootDir"] ?>images/home.png" /><span>ホーム</span></li></a>
				<li class="active">＞<span><?php echo $title ?></span></li>
			</ul>

			<article>
<?php
switch ($send) {
	case 1:
?>
	<p class="success">メールを送信しました。</p>
<?php
		break;
	case -1:
?>
	<p class="error">メールの送信に失敗しました。</p>
<?php
		break;
}
?>
				<section>
					<div class="catalog_base">
						<img class="catalog_img" src="<?php echo $_SESSION["rootDir"] ?>images/catalog/catalog.png" />
					</div>
					<div class="section_inner">
						<div style="font-size:24px;text-align:center;margin-top:50px;">ただいま準備中です。</div>
<!--
						<h3>WEB施工事例カタログのお申し込み方法</h3>
						<form id="form_main" method="post">
							<input name="action" type="hidden" value="send" />
							<p>
								カタログのダウンロードには<br class="sp" />メールアドレスの登録が必要になります。<br />
								下記入力欄にメールアドレスをご入力いただき、<br />
								【WEB施工事例カタログを申し込む】<br class="sp" />ボタンを押していただければ、<br class="sp" />ご登録が完了します。
							</p>
							<input name="mail" type="text" size="30" />
							<div id="err_mail" class="error">
								メールアドレスを入力してください。
							</div>
							<div class="link_img">
								<img src="<?php echo $_SESSION["rootDir"] ?>images/link2.png" />
								<a href="javascript:check()">
									<div>
										<img class="icon" src="<?php echo $_SESSION["rootDir"] ?>images/catalog_icon2.png" />&nbsp;WEB施工事例カタログを申し込む
									</div>
								</a>
							</div>
						</form>
<script>
$("#err_mail").hide();

function check() {
	var mail = document.getElementsByName("mail")[0];

	$("#err_mail").hide();

	if (mail.value.trim() == "") {
		$("#err_mail").show();
		mail.focus();
		return;
	}

	$("#form_main").submit();
}
</script>
						<p class="description">
							※登録されたメールアドレスに【WEB施工事例カタログ無料ダウンロード】のURLが記載されたメールが送信されています。URLをクリックし、カタログをダウンロードしていただければ、パソコン・スマホなどで「はた楽」の施工事例を閲覧することができます。
						</p>
-->
					</div>
				</section>

			</article>

		</div>

	</div>

<?php include("inc/footer.inc"); ?>

<?php include("inc/footer2.inc"); ?>

</body>
</html>
