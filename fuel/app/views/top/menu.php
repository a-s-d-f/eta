<div class="row clearfix">
	<nav class="navbar navbar-default navbar-inverse navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="/">イータ</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li>
					<a href="/#intro">店舗紹介</a>
				</li>
				<li>
					<a href="/#notification">お知らせ</a>
				</li>
				<li>
					<a href="/#seat">店内画像</a>
				</li>
				<li>
					<a href="/#recruit">採用情報</a>
				</li>
				<li class="dropdown active">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">お品書き<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="/menu">料理</a>
						</li>
						<li>
							<a href="/wine">葡萄酒</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</div>
<div class="row clearfix">
	<div class="col-md-12 column text-center" id="menulist">
		<h1 class="text-center">
			お品書き
		</h1>
		<div id="menu-filter" class="margin-top1">
			<a class="btn btn-lg btn-default" type="button" data-filter="*"> 全て</a>
			<a class="btn btn-lg btn-default" type="button" data-filter=".food"> 主菜</a>
			<a class="btn btn-lg btn-default" type="button" data-filter=".sub"> 副菜</a>
		</div>
		<div class="margin-top2 text-left isotopeMenu">
			<?php foreach($menu as $val):?>
				<div <?php echo "class='col-sm-6 col-lg-4 item ".$val["type"]."'";?>>
				<?php echo Asset::img($val["imgurl"],array('class'=>'img-responsive'));?>
				<blockquote>
					<p><?php echo $val["comment"];?></p>
					<small><?php echo $val["name"];?></small>
				</blockquote>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
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
		<div class="col-xs-6 col-sm-4 col-md-6">
			<a href="https://www.facebook.com/winebar.eta" target="_blank">
				<?php echo Asset::img("facebook.png",array("class"=>"social-icon"));?>
			</a>
		</div>
		<div class="col-xs-6 col-sm-4 col-md-6">
			<a href=<?php echo 'http://qr-official.line.me/sid/L/wineeta.png';?> rel="lightbox" title="line_QRcode">
				<?php echo Asset::img("line.png",array("class"=>"social-icon"));?>
			</a>
		</div>
	</div>
</div>