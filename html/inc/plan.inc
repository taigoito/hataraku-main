<?php
$res = getContents("reform");
$resData = json_decode($res, true);
$list = $resData["list"];
?>
<div id="plan2">
<?php
$cnt = 0;
foreach ($list as $item) {
	$name = $item["ITEM_01"];
	$name2 = $item["ITEM_02"];
	$img = $item["ITEM_03"];
	$back = $item["ITEM_04"];
	$name3 = $item["ITEM_05"];
	$price = $item["ITEM_06"];
	$msg = $item["ITEM_07"];
	$kbn = $cnt + 1;
	$idx = $cnt % 2;
?>
	<a href="<?php echo $_SESSION["rootDir"] ?>reform.php?kbn=<?php echo $kbn ?>">
		<div class="block block<?php echo $idx ?>">
			<table class="plan_info">
				<tr>
					<th class="name" colspan="2">
						【<?php echo $name ?>】
					</th>
				</tr>
				<tr>
					<td colspan="2">
						<img src="<?php echo $userImageHost ?>user/reform/<?php echo $img ?>" />
					</td>
				</tr>
				<tr>
					<td class="price_caption">
						参考価格
					</td>
					<td class="price">
						<span class="nearly">約</span>
						<span class="value"><?php echo $price ?></span>
						<span class="yen">万円</span>
						<span class="tax">(税別)～</span>
					</td>
				</tr>
			</table>
			<div class="clear"></div>
		</div>
	</a>
<?php
	$cnt++;
}
?>
	<div class="clear"></div>
</div>
