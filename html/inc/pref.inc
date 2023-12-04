<option value="">選択してください</option>
<?php
$list = [];
$list["北海道"] = "";
$list["青森県"] = "";
$list["岩手県"] = "";
$list["宮城県"] = "";
$list["秋田県"] = "";
$list["山形県"] = "";
$list["福島県"] = "";
$list["茨城県"] = "";
$list["栃木県"] = "";
$list["群馬県"] = "";
$list["埼玉県"] = "";
$list["千葉県"] = "";
$list["東京都"] = "";
$list["神奈川県"] = "";
$list["新潟県"] = "";
$list["富山県"] = "";
$list["石川県"] = "";
$list["福井県"] = "";
$list["山梨県"] = "";
$list["長野県"] = "";
$list["岐阜県"] = "";
$list["静岡県"] = "";
$list["愛知県"] = "";
$list["三重県"] = "";
$list["滋賀県"] = "";
$list["京都府"] = "";
$list["大阪府"] = "";
$list["兵庫県"] = "";
$list["奈良県"] = "";
$list["和歌山県"] = "";
$list["鳥取県"] = "";
$list["島根県"] = "";
$list["岡山県"] = "";
$list["広島県"] = "";
$list["山口県"] = "";
$list["徳島県"] = "";
$list["香川県"] = "";
$list["愛媛県"] = "";
$list["高知県"] = "";
$list["福岡県"] = "";
$list["佐賀県"] = "";
$list["長崎県"] = "";
$list["熊本県"] = "";
$list["大分県"] = "";
$list["宮崎県"] = "";
$list["鹿児島県"] = "";
$list["沖縄県"] = "";
if (isset($list[$address1])) {
	$list[$address1] = "selected='selected'";
}
?>
<?php
foreach ($list as $key=>$value) {
?>
<option value="<?php echo $key ?>" <?php echo $value ?>><?php echo $key ?></option>
<?php
}
?>
