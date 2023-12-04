<?php include("inc/start.inc"); ?>
<?php
$title = "お問い合わせ確認";
?>
<?php
$send = 0;
$action = getParameter("action");
$kbn = getParameter("kbn", "　");
$name = getParameter("name", "　");
$kana = getParameter("kana", "　");
$zip = getParameter("zip", "　");
if ($zip == "　") {
	$zip1 = getParameter("zip1", "");
	$zip2 = getParameter("zip2", "");
	$zip = $zip1."-".$zip2;
}
$pref = getParameter("pref", "　");
$address1 = getParameter("address1", "　");
$tel_1 = getParameter("tel_1", "　");
if ($tel_1 == "　") {
	$tel1 = getParameter("tel1", "");
	$tel2 = getParameter("tel2", "");
	$tel3 = getParameter("tel3", "");
	$tel_1 = "　";
	if ($tel1 != "" || $tel2 != "" || $tel3 != "") {
		$tel_1 = $tel1."-".$tel2."-".$tel3;
	}
}
$tel_2 = getParameter("tel_2", "　");
if ($tel_2 == "　") {
	$tel4 = getParameter("tel4", "");
	$tel5 = getParameter("tel5", "");
	$tel6 = getParameter("tel6", "");
	$tel_2 = "　";
	if ($tel4 != "" || $tel5 != "" || $tel6 != "") {
		$tel_2 = $tel4."-".$tel5."-".$tel6;
	}
}
$mail = getParameter("mail", "　");
$time = getParameter("time", "　");
$house = getParameter("house", "　");
$date = getParameter("date", "　");
$place = getParameter("place", null);
if (empty($place)) {
	$place = "";
} else if (is_array($place)) {
	$place = implode(",", $place);
}
$contents = getParameter("contents", "　");

if ($action == "send") {

	$to = $adminMail;
	$subject = "お問い合わせ";
	$values = array();
	$values[] = "問い合わせ内容：\n".$kbn;
	$values[] = "お名前：\n".$name;
	$values[] = "フリガナ：\n".$kana;
	$values[] = "郵便番号：\n".$zip;
	$values[] = "都道府県：\n".$pref;
	$values[] = "住所：\n".$address1;
	$values[] = "固定電話：\n".$tel_1;
	$values[] = "携帯電話：\n".$tel_2;
	$values[] = "メールアドレス：\n".$mail;
	$values[] = "希望連絡時間：\n".$time;
	$values[] = "家屋形態：\n".$house;
	$values[] = "工事時期：\n".$date;
	$values[] = "工事予定場所：\n".$place;
	$values[] = "ご意見・ご質問など：\n".$contents;
	$body = implode("\n\n", $values);
	$header = "From: " .mb_encode_mimeheader("はた楽") ."<".$to.">";

	if (mb_send_mail($to, $subject, $body, $header)) {

		$to = $mail;
		$subject = "お問い合わせありがとうございます。";
		$body = readText("thanks.txt");
		$header = "From: " .mb_encode_mimeheader("はた楽") ."<".$adminMail.">";

		if (mb_send_mail($to, $subject, $body, $header)) {
			header("Location: contact3.php");
			exit;
		} else {
			$send = -1;
		}

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

<body id="contact">

<?php include("inc/header.inc"); ?>

	<article id="page_header">
		<div id="page_header_title">
			<h2><?php echo $title ?></h2>
			<h3>Contact confirm</h3>
		</div>
	</article>

	<div id="contents">

		<div id="main">

			<ul id="breadcrumbs">
				<a href="<?php echo $_SESSION["rootDir"] ?>./"><li class="home"><img src="<?php echo $_SESSION["rootDir"] ?>images/home.png" /><span>ホーム</span></li></a>
				<li class="active">＞<span>お問い合わせ</span></li>
			</ul>

			<article>

				&nbsp;
<?php
if ($send == -1) {
?>
	<p class="error">メールの送信に失敗しました。</p>
<?php
}
?>
				<section id="form">
					<div class="section_inner">
						<div class="flow">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/contact/flow2.png" />
						</div>
						<br />
						<h3>お問い合わせ確認</h3>
						<form id="form_main" method="post">
							<table>
								<tr>
									<th class="first">
										問い合わせ内容
									</th>
									<td>
										<?php echo $kbn ?>
										<input type="hidden" name="kbn" value="<?php echo $kbn ?>" />
									</td>
								</tr>
								<tr>
									<th>
										お名前
									</th>
									<td>
										<?php echo $name ?>
										<input type="hidden" name="name" value="<?php echo $name ?>" />
									</td>
								</tr>
								<tr>
									<th>
										フリガナ
									</th>
									<td>
										<?php echo $kana ?>
										<input type="hidden" name="kana" value="<?php echo $kana ?>" />
									</td>
								</tr>
								<tr>
									<th>
										住所
									</th>
									<td>
										〒
										<?php echo $zip ?>
										<input type="hidden" name="zip" value="<?php echo $zip ?>" /><br />
										<?php echo $pref ?>
										<input type="hidden" name="pref" value="<?php echo $pref ?>" /><br />
										<?php echo $address1 ?>
										<input type="hidden" name="address1" value="<?php echo $address1 ?>" /><br />
									</td>
								</tr>
								<tr>
									<th>
										電話番号
									</th>
									<td>
										固定電話
										<br />
										<?php echo $tel_1 ?>
										<input type="hidden" name="tel_1" value="<?php echo $tel_1 ?>" /><br />
										携帯電話
										<br />
										<?php echo $tel_2 ?>
										<input type="hidden" name="tel_2" value="<?php echo $tel_2 ?>" />
									</td>
								</tr>
								<tr>
									<th>
										メールアドレス
									</th>
									<td>
										<?php echo $mail ?>
										<input type="hidden" name="mail" value="<?php echo $mail ?>" />
									</td>
								</tr>
								<tr>
									<th>
										希望連絡時間
									</th>
									<td>
										<?php echo $time ?>
										<input type="hidden" name="time" value="<?php echo $time ?>" />
									</td>
								</tr>
								<tr>
									<th>
										家屋形態
									</th>
									<td>
										<?php echo $house ?>
										<input type="hidden" name="house" value="<?php echo $house ?>" />
									</td>
								</tr>
								<tr>
									<th>
										工事時期
									</th>
									<td>
										<?php echo $date ?>
										<input type="hidden" name="date" value="<?php echo $date ?>" />
									</td>
								</tr>
								<tr>
									<th>
										工事予定場所
									</th>
									<td>
										<?php echo $place ?>
										<input type="hidden" name="place" value="<?php echo $place ?>" />
									</td>
								</tr>
								<tr>
									<th>
										ご意見・ご質問など
									</th>
									<td>
										<?php echo nl2br($contents) ?>
										<input type="hidden" name="contents" value="<?php echo $contents ?>" />
									</td>
								</tr>
							</table>
							<input type="hidden" name="action" value="send">
							<div class="form_control">
								<a href="javascript:history.back()">
									<img id="back" src="<?php echo $_SESSION["rootDir"] ?>images/contact/back.png"
										onmouseover="this.src='images/contact/back2.png'"
										onmouseout="this.src='images/contact/back.png'" />
								</a>
								<a href="javascript:submit()">
									<img id="send" src="<?php echo $_SESSION["rootDir"] ?>images/contact/send.png"
										onmouseover="this.src='images/contact/send2.png'"
										onmouseout="this.src='images/contact/send.png'" />
								</a>
							</div>
						</form>

<script>
function submit() {
	$("#form_main").submit();
}
</script>
					</div>
				</section>

			</article>

		</div>

	</div>

<?php include("inc/footer.inc"); ?>

<?php include("inc/footer2.inc"); ?>

</body>
</html>
