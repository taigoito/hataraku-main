<?php include("inc/start.inc"); ?>
<?php
$title = "お問い合わせ";
$kbn = getParameter("kbn", "");
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
			<h3>Contact</h3>
		</div>
	</article>

	<div id="contents">

		<div id="main">

			<ul id="breadcrumbs">
				<a href="<?php echo $_SESSION["rootDir"] ?>./"><li class="home"><img src="<?php echo $_SESSION["rootDir"] ?>images/home.png" /><span>ホーム</span></li></a>
				<li class="active">＞<span><?php echo $title ?></span></li>
			</ul>

			<article>

				<section id="form">
					<div class="message">
						ショールーム来店予約・<br class="sp" />無料お見積り、ご質問・ご相談など<br />
						下記フォームからお問い合わせください。
					</div>
					<img id="quo_img" src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/quo.png" />
					<p class="quo">
						※クオカードのプレゼントは、1名様（1家族様）1回限りとさせていただきます。※未成年者様のみのご来場は対象外とさせていただきます。<br />
						※アンケートにご協力して頂く事が条件になります。※詳しくは現地係員にお問い合わせください。
					</p>
					<div class="section_inner">
						<div class="flow">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/<?php echo $myPage ?>/flow1.png" />
						</div>
						<div class="line2">
							<img src="<?php echo $_SESSION["rootDir"] ?>images/line2.png" />
						</div>
						<h3>お問い合わせフォーム</h3>
						<form id="form_main" method="post" action="contact2.php">
							<table>
								<tr>
									<th>問い合わせ内容<span class="required">＊</span></th>
									<td>
<?php
$kbnList = [];
$kbnList["1"] = "ショールーム来店予約";
$kbnList["2"] = "無料お見積もり";
$kbnList["3"] = "その他";
?>
										<select name="kbn">
											<option></option>
<?php
foreach ($kbnList as $key=>$value) {
	$selected = "";
	if ($key == $kbn) {
		$selected = " selected='selected'";
	}
?>
											<option value="<?php echo $value?>"<?php echo $selected ?>><?php echo $value ?></option>
<?php
}
?>
										</select>
										<div id="err_kbn" class="error">
											問い合わせ内容を入力してください。
										</div>
									</td>
								</tr>
								<tr>
									<th>お名前<span class="required">＊</span></th>
									<td>
										<input type="text" name="name" class="input_text" />
										<div id="err_name" class="error">
											お名前を入力してください。
										</div>
									</td>
								</tr>
								<tr>
									<th>フリガナ<span class="required">＊</span></th>
									<td>
										<input type="text" name="kana" class="input_text" />
										<div id="err_kana" class="error">
											フリガナを入力してください。
										</div>
									</td>
								</tr>
								<tr>
									<th>住所<span class="required">＊</span></th>
									<td>
										〒　<input id="zip1" type="text" name="zip1" maxlength="3" size="3" />-<input id="zip2" type="text" name="zip2" maxlength="4" size="4" /> <button onclick="AjaxZip3.zip2addr('zip1', 'zip2', 'pref', 'address1', 'address2', '');return false;">郵便番号から検索</button><br />
										<select name="pref">
<?php include("inc/pref.inc"); ?>
										</select>
										<br />
										<input id="address1" type="text" name="address1" class="input_text" /><br />
										<div id="err_address" class="error">
											住所を入力してください。
										</div>
									</td>
								</tr>
								<tr>
									<th>電話番号<span class="required">＊</span><br /><span class="required">(固定・携帯どちらか)</span></th>
									<td>
										固定電話
										<br />
										<input type="text" name="tel1" size="5" />
										-
										<input type="text" name="tel2" size="5" />
										-
										<input type="text" name="tel3" size="5" />
										<br />
										携帯電話
										<br />
										<input type="text" name="tel4" size="5" />
										-
										<input type="text" name="tel5" size="5" />
										-
										<input type="text" name="tel6" size="5" />
										<div id="err_tel" class="error">
											電話番号を入力してください。
										</div>
									</td>
								</tr>
								<tr>
									<th>メールアドレス<span class="required">＊</span></th>
									<td>
										<input type="text" name="mail" class="input_text" />
										<div id="err_mail" class="error">
											メールアドレスを入力してください。
										</div>
										<br />
										<p>
											【注意】 携帯電話､スマートフォンの設定が【受信拒否設定】をされている方は､<br />
											メールが受けとれなくなってしまいますので、<br />
											仮）<span class="required">info@hataraku.com</span>のドメイン指定受信の設定を行ってください。
										</p>
									</td>
								</tr>
								<tr>
									<th>希望連絡時間</th>
									<td>
										<select name="time">
<option value="指定なし">指定なし</option>
<option value="9：00頃">9：00頃</option>
<option value="10：00頃">10：00頃</option>
<option value="11：00頃">11：00頃</option>
<option value="12：00頃">12：00頃</option>
<option value="13：00頃">13：00頃</option>
<option value="14：00頃">14：00頃</option>
<option value="15：00頃">15：00頃</option>
<option value="16：00頃">16：00頃</option>
<option value="17：00頃">17：00頃</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>家屋形態</th>
									<td>
										<select name="house">
<option value="">選択して下さい</option>
<option value="戸建て">戸建て</option>
<option value="マンション">マンション</option>
<option value="その他">その他</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>工事時期</th>
									<td>
										<select name="date">
<option value="">選択して下さい</option>
<option value="すぐに">すぐに</option>
<option value="1ヶ月以内">1ヶ月以内</option>
<option value="3ヶ月以内">3ヶ月以内</option>
<option value="半年以内">半年以内</option>
<option value="1年以内">1年以内</option>
<option value="未定">未定</option>
										</select>
									</td>
								</tr>
								<tr>
									<th>工事予定場所</th>
									<td>
										<input name="place[]" type="checkbox" value="キッチン" />キッチン<br />
										<input name="place[]" type="checkbox" value="浴室・バス" />浴室・バス<br />
										<input name="place[]" type="checkbox" value="トイレ" />トイレ<br />
										<input name="place[]" type="checkbox" value="洗面室" />洗面室<br />
										<input name="place[]" type="checkbox" value="その他" />その他
									</td>
								</tr>
								<tr>
									<th>ご意見・ご質問など</th>
									<td>
										<textarea name="contents" class="input_text" rows="7" cols="60"></textarea>
									</td>
								</tr>
							</table>
							<p class="description">
								<span class="required">＊</span>印の付いている箇所は<span class="required">必須記入項目</span>ですので、必ず入力してください。<br />
								【来店予約の場合】<br />
								・当社からの予約確認、確定のご連絡を以って受付完了とさせて頂きます。<br />
								<span class="required">・当日のご来店予約については、お電話にて直接ご連絡頂ますようご協力をお願い致します。</span>
							</p>
							<div class="policy">
								<p>
お客様のプライバシーを尊重し、お客様の個人情報を大切に保護することを重要な責務と考えております。<br />
本サイトでは、個人情報保護に関する法令を尊重するとともに、個人情報の取り扱いに関して以下のような姿勢で行動しています。<br />
<br />
<strong>個人情報の保護</strong><br />
お客様から個人情報をご提供いただく場合、その情報は、原則として、お客様に対し弊社の商品・サービスおよび関連情報をご提供する目的、または、弊社の商品・サービスを改善する目的にのみ利用いたします。<br />
それ以外の目的に利用する場合は、個人情報をご提供いただく際に予めその目的を明示しておりますのでご確認下さい。<br />
お客様の個人情報をこれら正当な目的以外に無断で利用することはありません。<br />
<br />
<strong>個人情報の収集</strong><br />
お客さまとの契約上の責任を果たすため、また、より良い商品やサービスを提供したり、有用な情報を正しい方法により、必要な範囲で個人情報を収集します。<br />
<br />
<strong>個人情報の管理</strong><br />
個人情報は、以下のいずれかに該当する場合を除いて、いかなる第三者にも開示・提供いたしません。<br />
1.お客さまの同意がある場合。<br />
2.お客さま個人を識別することができない状態で開示する場合。<br />
3.業務を円滑に進める等の理由で外部業者に取り扱いを委託する場合。<br />
　　(この場合には、十分な保護水準を備えている委託先を選定し、契約による義務づけ等の方法により、適切な管理を実施します)<br />
4.お問合せ内容が、弊社関係会社から回答させていただくことが適切と判断される場合。<br />
5.有料サービスのご利用や商品のご注文等で決済が必要な場合。(この場合には、金融機関等との間で個人情報を交換することがあります)<br />
6.法令等により開示を要求された場合。<br />
<br />
<strong>クッキーの使用</strong><br />
本サイトをより便利に閲覧していただくために、クッキーと呼ばれる、お客様のブラウザに送信する小規模の情報をディスクにファイルとして格納させて頂くことがございます。これにより、お客様のプライバシーに関わる情報を入手することはございません。<br />
なお、クッキーを受けたくないお客様はブラウザの設定により、受け取りを拒否等設定が可能です。<br />
<br />
<strong>個人情報の保護対策</strong><br />
当社が保有する個人データの扱いの全部又は一部について外部委託をするときは、必要な契約を締結し、適切な管理・監督を行います。
								</p>
								<input type="checkbox" name="policy" />個人情報保護方針に同意する
								<div id="err_policy" class="error">
									同意するをチェックしてください。
								</div>
							</div>
							<div class="form_control">
								<a href="javascript:check()">
									<img id="confirm" src="<?php echo $_SESSION["rootDir"] ?>images/contact/confirm.png"
										onmouseover="this.src='images/contact/confirm2.png'"
										onmouseout="this.src='images/contact/confirm.png'"
									 />
								</a>
							</div>
						</form>
<script>
$("#err_kbn").hide();
$("#err_name").hide();
$("#err_kana").hide();
$("#err_address").hide();
$("#err_tel").hide();
$("#err_mail").hide();
$("#err_policy").hide();

function check() {
	var kbn = document.getElementsByName("kbn")[0];
	var name = document.getElementsByName("name")[0];
	var zip1 = document.getElementsByName("zip1")[0];
	var zip2 = document.getElementsByName("zip2")[0];
	var pref = document.getElementsByName("pref")[0];
	var address1 = document.getElementsByName("address1")[0];
	var kana = document.getElementsByName("kana")[0];
	var tel1 = document.getElementsByName("tel1")[0];
	var tel2 = document.getElementsByName("tel2")[0];
	var tel3 = document.getElementsByName("tel3")[0];
	var tel4 = document.getElementsByName("tel4")[0];
	var tel5 = document.getElementsByName("tel5")[0];
	var tel6 = document.getElementsByName("tel6")[0];
	var mail = document.getElementsByName("mail")[0];
	var policy = document.getElementsByName("policy")[0];

	$("#err_kbn").hide();
	$("#err_name").hide();
	$("#err_kana").hide();
	$("#err_address").hide();
	$("#err_tel").hide();
	$("#err_mail").hide();
	$("#err_policy").hide();

	if (kbn.value.trim() == "") {
		$("#err_kbn").show();
		kbn.focus();
		return;
	}

	if (name.value.trim() == "") {
		$("#err_name").show();
		name.focus();
		return;
	}

	if (kana.value.trim() == "") {
		$("#err_kana").show();
		kana.focus();
		return;
	}

	if (zip1.value.trim() == ""
	 || zip2.value.trim() == ""
	 || pref.value.trim() == ""
	 || address1.value.trim() == "") {
		$("#err_address").show();
		zip1.focus();
		return;
	}

	if ((tel1.value.trim() == "" || tel2.value.trim() == "" || tel3.value.trim() == "")
	 && (tel4.value.trim() == "" || tel5.value.trim() == "" || tel6.value.trim() == "")) {
		$("#err_tel").show();
		tel1.focus();
		return;
	}

	if (mail.value.trim() == "") {
		$("#err_mail").show();
		mail.focus();
		return;
	}

	if (!policy.checked) {
		$("#err_policy").show();
		policy.focus();
		return;
	}

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
