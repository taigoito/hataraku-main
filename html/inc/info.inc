<?php
$url = "https://hrsn.jp/news/?feed=rss3";

$cp = curl_init();
curl_setopt($cp, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($cp, CURLOPT_URL, $url);
curl_setopt($cp, CURLOPT_TIMEOUT, 60);
$res = curl_exec($cp);
curl_close($cp);

$res = simplexml_load_string($res);
$infoList = array();
$body = $res->channel;
$cnt = 0;
foreach ($body->item as $item) {

	$ymd = date("Y/m/d", strtotime((string)$item->pubDate));

	if ($cnt < 5) {

		$cnt++;

		$info = array();

		$info["ymd"]		= $ymd;
		$info["title"]		= (string)$item->title;

		$contents = (string)$item->description;
		$info["contents"]	= mb_substr($contents, 0, 100);

		$url = (string)$item->link;
		$pos = strpos($url, "?");
		if ($pos === false) {
		} else if ($pos >= 0) {
			$url = substr($url, 0, $pos);
		}
		$info["url"]		= $url;

		$image = $item->image;
		$imageUrl = "";
		if (!empty($image)) {
			$img = $image->img;
			$imageUrl = "";
			if (!empty($img)) {
				$attributes = $img->attributes();
				$imageUrl = (string)$attributes["src"];
			}
		}
		$info["image"] = $imageUrl;

		$infoList[] = $info;

	}

}
?>
