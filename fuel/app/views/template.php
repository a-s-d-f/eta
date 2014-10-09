<!doctype html>
<html
xmlns="http://www.w3.org/1999/xhtml"
xmlns:svg="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<title>いーた</title>
	<?php echo Asset::css("bootstrap/bootstrap.css");?>
	<?php echo Asset::css("original/bootstrap-custom.css");?>
	<?php echo Asset::css("original/original.css");?>

	<!-- lightBox -->
	<?php echo Asset::css('lightbox/lightbox.css');?>
</head>
<body data-spy="scroll">
	<div class="container-fluid" id="container">
		<div class="col-xs-12" style="height:100%;">
			<?php echo $content;?>
			<div class="row clearfix margin-top3" id="footer">
				<div class="col-md-4 column">
					<h3>
						葡萄酒屋イータ
					</h3>
					<p class="text-left">
						御閲覧ありがとうございました。
					</p>
				</div>
				<div class="col-md-4 column">
					<h3>
						住所
					</h3> <address> <strong>eta, Inc.</strong><br /> 住所 : 大阪府大阪市天王寺区東高津町4-15<br />近鉄上本町駅より300ｍ<br />地下鉄谷町九丁目から700ｍ<br /> 大阪上本町駅から301m<br /> Tel :  06-6765-7117</address>
				</div>
				<div class="col-md-4 column" id="social">
					<h3>
						ソーシャル
					</h3>
					<div class="col-xs-3">
						<a href="https://www.facebook.com/winebar.eta" target="_blank">
							<?php echo Asset::img("facebook.png",array("class"=>"social-icon"));?>
						</a>
					</div>
					<div class="col-xs-3">
						<a href=<?php echo 'http://qr-official.line.me/sid/L/wineeta.png';?> rel="lightbox" title="line_QRcode" style="max-height:50px;">
							<?php echo Asset::img("line.png",array("class"=>"social-icon"));?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<?php echo Asset::js("bootstrap/bootstrap.js");?>
<?php echo Asset::js('lightbox/lightbox.min.js');?>
<?php echo Asset::js("original/original.js");?>
<?php echo Asset::js("js-plugin/isotope/jquery.isotope.min.js");?>