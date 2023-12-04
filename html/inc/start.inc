<?php
session_start();
$values = explode("/", $_SERVER["REQUEST_URI"]);
$rootDir = "";
if (in_array("news", $values)) {
	$pos = array_search("news", $values);
	$rootDir = str_repeat("../", count($values) - $pos - 1);
}
$_SESSION["rootDir"] = $rootDir;
$myUrl = $values[count($values) - 1];
$pos = strpos($myUrl, "lang=");
if ($pos !== false) {
	$myUrl = substr($myUrl, 0, $pos - 1);
}
$values = explode("?", $myUrl);
$myPage = $values[0];
$myPage = str_replace(".php", "", $myPage);
if (empty($myPage)) {
	$myPage = "top";
}

$userImageHost = "https://hrsn.jp/";
$adminMail = "info@hrsn.jp";

function getParameter($name, $default = "") {
	$ret = $default;
	if (isset($_GET[$name])) {
		$ret = $_GET[$name];
	}
	if (isset($_POST[$name])) {
		$ret = $_POST[$name];
	}
	if (is_array($ret)) {
		if (empty($ret)) {
			$ret = $default;
		}
	} else {
		if (strlen($ret) == 0) {
			$ret = $default;
		}
	}
	return $ret;
}

function readText($fileName) {
	$ret;

	$filePath = "./data/".$fileName;
	$ret = file_get_contents($filePath);

	return $ret;
}

function readCsv($fileName) {
	$ret = array();

	$filePath = "./data/".$fileName;
	if ($handle = fopen($filePath, "r")) {
		while (($csv = fgetcsv($handle)) !== FALSE) {
			$ret[] = $csv;
		}
	}

	return $ret;
}

function buildUrl($url, $urlParam) {
	$ret = $url;

	if (!empty($urlParam)) {
		if (strpos($url, "?") === false) {
			$ret .= "?";
		} else {
			$ret .= "&";
		}
		$ret .= $urlParam;
	}

	return $ret;
}

function getCmsServer() {
	$ret = null;

	$ret = "https://cms.".$_SERVER["SERVER_NAME"]."/";
//	$ret = "http://hataraku-cms.i-conn.biz/";

	return $ret;
}

function getContents($infoGrp, $infoKbn = null, $order = null, $pageSize = 0, $pageNo = -1) {
	$ret = null;

	$url = getCmsServer();
	$url .= "contents/list.json";
	$url .= "?infoGrp=".$infoGrp;
	if ($infoKbn != null) {
		$url .= "&infoKbn=".$infoKbn;
	}
	if (!empty($order)) {
		$url .= "&order=".urlencode($order);
	}
	if ($pageNo >= 0) {
		$url .= "&pageIndex=".$pageNo;
	}
	if (!empty($pageSize)) {
		$url .= "&pageSize=".$pageSize;
	}

 	//$ret = file_get_contents($url);
	$cp = curl_init();
	curl_setopt($cp, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($cp, CURLOPT_URL, $url);
	curl_setopt($cp, CURLOPT_TIMEOUT, 60);
	$ret = curl_exec($cp);
	curl_close($cp);

	return $ret;
}

function getCalendar($ym = null, $calId = "default") {
	$ret = null;

	$url = getCmsServer();
	$url .= "calendar/list.json";
	$url .= "?calId=".$calId;
	if (empty($ym)) {
		$ym = date("Ym");
	}
	$url .= "&ym=".$ym;

	//$ret = file_get_contents($url);
	curl_setopt($cp, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($cp, CURLOPT_URL, $url);
	curl_setopt($cp, CURLOPT_TIMEOUT, 60);
	$ret = curl_exec($cp);
	curl_close($cp);

	return $ret;
}

function convFileName($value) {
	$ret = $value;

	switch (PHP_OS) {
		case "WIN32":
		case "WINNT":
			break;
		default:
			$ret = mb_convert_encoding($value, "cp932", "UTF-8");
	}

	$ret = urlencode($ret);

	return $ret;
}

function left($value, $len){
  return substr($value, 0, $len);
}

function right($value, $len){
  return substr($value, ($len) * (-1), $len);
}
function formatYmd($value) {
	$date = strtotime($value);
	return date("Y-m-d", $date);
}

function getWeekday($value) {
	$weekday = array("日", "月", "火", "水", "木", "金", "土");
	return $weekday[date("w", $value)];
}
