<?php
$title2 = "福井市の水廻り専門リフォーム、はた楽";
if (!empty($title)) {
	$title2 = $title."｜".$title2;
}
$keywords = "はた楽について,はた楽,西部燃料,福井市,リフォーム,福井県";
if (!empty($title)) {
	$keywords .= ",".$title;
}
$description = "『はた楽リフォーム』は、福井県福井市、信頼No.1をめざす地域密着型リフォーム専門店です。水まわりから改装までリフォームのことならおまかせください！ご来店予約＆無料お見積り受付中です！QUOカード500円分プレゼント！";
if (!empty($title)) {
	$description = $title."のページです。".$description;
}
?>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $title2 ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $description ?>">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-s.css" media="only screen and (min-width: 0px) and (max-width: 480px)" >
<link rel="stylesheet" href="css/style-220914.css" media="only screen and (min-width: 0px) and (max-width: 480px)" >

<link rel="shortcut icon" href="favicon.ico" type="favicon.ico" />
<link rel="icon" href="favicon.ico" type="favicon.ico" />

<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/scrollsmartly.min.js"></script>

<script src="js/jquery.bxslider.min.js"></script>
<link rel="stylesheet" href="js/jquery.bxslider.min.css">

<script src="js/ajaxzip3.js"></script>

<?php include("seo.inc"); ?>
