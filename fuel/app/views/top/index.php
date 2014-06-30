<div class="row clearfix" id="header">
	<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation" id="navbar">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">イータ</a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="#intro">店舗紹介</a>
				</li>
				<li>
					<a href="#notification">お知らせ</a>
				</li>
				<li>
					<a href="#menulist">お品書き</a>
				</li>
				<li>
					<a href="#winelist">葡萄酒</a>
				</li>
				<li>
					<a href="#seat">店内画像</a>
				</li>
				<li>
					<a href="#recruit">採用情報</a>
				</li>
				<li class="dropdown">
					<a href="" class="dropdown-toggle" data-toggle="dropdown">リンク<strong class="caret"></strong></a>
					<ul class="dropdown-menu">
						<li>
							<a href="">Facebook</a>
						</li>
						<li>
							<a href="">ブログ</a>
						</li>
						<li>
							<a href="">ひとみワイナリー</a>
						</li>
					</ul>
				</li>
			</ul>
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" />
				</div> <button type="submit" class="btn btn-default">検索</button>
			</form>
		</div>
	</nav>
	<div id="message-box">
		<a class="button" href="#intro"><span>イータ</span><span>葡萄酒屋</span></a>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-12 column" style="" id="intro">
		<h1 class="text-center">
			店舗紹介
		</h1>
		<dl class="col-md-offset-2 dl-horizontal">
			<?php foreach($intro as $val):?>
				<dt><?php echo $val["title"];?></dt>
				<?php if($val["title"] == "住所"):?>
				<dd><a class="link" target="blank" href="https://www.google.co.jp/maps/place/%E5%A4%A7%E9%98%AA%E5%BA%9C%E5%A4%A7%E9%98%AA%E5%B8%82%E5%A4%A9%E7%8E%8B%E5%AF%BA%E5%8C%BA%E6%9D%B1%E9%AB%98%E6%B4%A5%E7%94%BA%EF%BC%94%E2%88%92%EF%BC%91%EF%BC%95/@34.6682239,135.521403,17z/data=!3m1!4b1!4m2!3m1!1s0x6000e74dc6a2cba5:0x18056c668126c55e">
					<?php echo $val["body"];?></a></dd>
				<?php else:?>
					<?php if(strpos($val["body"],",") == false):?>
						<dd><?php echo $val["body"];?></dd>
					<?php else:?>
						<?php $temp = explode(",",$val["body"]);?>
						<?php foreach($temp as $tempVal):?>
							<dd><?php echo $tempVal;?></dd>
						<?php endforeach;?>
					<?php endif;?>
				<?php endif;?>
			<?php endforeach;?>
		</dl>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-12 column" id="notification">
		<h1 class="text-center">
			お知らせ
		</h1>
		<dl class="col-md-offset-3 dl-horizontal">
			<?php foreach($notification as $val):?>
				<a href="#notification" blank="" style="text-decoration:none;"  onClick=<?php echo "window.open('notification?id=".$val['id']."','お知らせの詳細','width=500,height=600'); return false;"?>>
					<dt><?php  echo date("Y-m-d",$val["created_at"])?></dt>
					<dd><?php echo $val["title"];?></dd>
				</a>
			<?php endforeach;?>
		</dl>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-12 column text-center" id="menulist">
		<h1 class="text-center">
			お品書き
		</h1>
		<div id="menu-filter" class="margin-top1">
			<a class="btn btn-lg btn-default" type="button" data-filter="*"> 全て</a>
			<a class="btn btn-lg btn-default" type="button" data-filter=".food"> 主菜</a>
			<a class="btn btn-lg btn-default" type="button" data-filter=".snack"> つまみ</a>
		</div>
		<div class="row clearfix margin-top2 text-left isotopeMenu">
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
<div class="row clearfix">
	<div class="col-md-12 column text-center" id="winelist">
		<h1 class="text-center">
			葡萄酒
		</h1>
		<div id="wine-filter" class=" margin-top1">
			<a class="btn btn-lg btn-default" type="button" data-filter="*">全て</a>
			<a class="btn btn-lg btn-default" type="button" data-filter=".hitomi"> ひとみ</a>
			<a class="btn btn-lg btn-default" type="button" data-filter=".red"> 赤</a>
			<a class="btn btn-lg btn-default" type="button" data-filter=".white"> 白</a>
			<a class="btn btn-lg btn-default" type="button" data-filter=".spark"> 泡</a>
		</div>
		<div class="col-md-offset-1 row clearfix margin-top2 text-left isotopeWine">
			<?php foreach($wine as $val):?>
				<div <?php echo "class='col-sm-12 col-sm-6 col-lg-4 item ".$val["type"]."'";?>>
					<div class="col-xs-5" style="margin-bottom:20px;">
						<?php echo Asset::img($val["imgurl"],array('class'=>'img-responsive'));?>
					</div>
					<div class="col-xs-7">
						<dl class="winelist">
							<dt>葡萄酒名</dt>
							<dd>- <?php echo $val["name"];?></dd>
							<dt>値段</dt>
							<dd>- <?php echo $val["money"];?></dd>
						</dl>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-offset-1 col-md-10 column text-center" id="seat">
		<h1 class="text-center">
			店内画像
		</h1>
		<div class="row clearfix margin-top2" id="photo">
			<?php foreach($seat as $val):?>
				<div class="col-md-6 col-lg-4 column">
					<a href=<?php echo Uri::base().'assets/img/'.$val["imgurl"];?> rel="lightbox-cats" title=<?php echo $val["name"];?>>
						<?php echo Asset::img($val["imgurl"],array('class'=>'img-responsive margin-2'));?>
					</a>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-sm-offset-2 col-md-7 column" id="recruit">
		<h1 class="col-sm-offset-6">
			採用情報
		</h1>
		<dl class="dl-horizontal">
			<?php foreach($recruit as $val):?>
				<dt><?php echo $val["title"];?></dt>
					<?php if(strpos($val["body"],",") == false):?>
						<dd><?php echo $val["body"];?></dd>
					<?php else:?>
						<?php $temp = explode(",",$val["body"]);?>
						<?php foreach($temp as $tempVal):?>
							<dd><?php echo $tempVal;?></dd>
						<?php endforeach;?>
					<?php endif;?>
			<?php endforeach;?>
		</dl>
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
		<a href="https://www.facebook.com/winebar.eta" target="_blank">
			<?php echo Asset::img("facebook.png",array("class"=>"social-icon"));?>
		</a>
		<a href=<?php echo Uri::base().'assets/img/qr.gif';?> rel="lightbox" title="line_QRcode">
			<?php echo Asset::img("line.png",array("class"=>"social-icon"));?>
		</a>
	</div>
</div>