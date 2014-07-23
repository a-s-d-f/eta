<!doctype html>
<html
xmlns="http://www.w3.org/1999/xhtml"
xmlns:svg="http://www.w3.org/2000/svg"
xmlns:xlink="http://www.w3.org/1999/xlink"
lang="en">
<head>
	<meta charset="UTF-8">
	<title>お知らせ詳細</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-custom.css">
	<link rel="stylesheet" href="css/original.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/original.js"></script>
</head>
<body>
	<div class="container-fluid" id="container">
		<div class="row clearfix">
			<nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">イータ</a>
				</div>
			</nav>
		</div>
		<div class="row margin-top2">
			<h1 class="text-center"><span class="glyphicon glyphicon-thumbs-up"></span> <?php echo $notification[0]["title"]?></h1>
			<div class="col-xs-10 margin-top2">
				<div class="row">
					<?php echo nl2br($notification[0]["body"]);?>
				</div>
			</div>
		</div>
		<div class="row clearfix margin-top4" id="footer">
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
				<div class="col-xs-6 col-sm-4 col-md-6">
					<a href="https://www.facebook.com/winebar.eta" target="_blank">
						<?php echo Asset::img("facebook.png",array("class"=>"social-icon"));?>
					</a>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-6">
					<a href=<?php echo Uri::base().'assets/img/qr.gif';?> rel="lightbox" title="line_QRcode">
						<?php echo Asset::img("line.png",array("class"=>"social-icon"));?>
					</a>
				</div>
			</div>
		</div>
	</div>
</body>