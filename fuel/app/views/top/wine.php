<?php Config::load('dir');?>
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
	<div class="col-md-12 column text-center" id="winelist">
		<h1 class="text-center">
			葡萄酒
		</h1>
		<div id="wine-filter" class=" margin-top1">
			<a class="btn btn-lg btn-default" type="button" data-filter="*">全て</a>
			<a class="btn btn-lg btn-default" type="button" data-filter=".red"> 赤</a>
			<a class="btn btn-lg btn-default" type="button" data-filter=".white"> 白</a>
			<a class="btn btn-lg btn-default" type="button" data-filter=".spark"> 泡</a>
		</div>
		<div class="col-md-offset-1 row clearfix margin-top2 text-left isotopeWine">
			<?php foreach($wine as $val):?>
				<div <?php echo "class='col-sm-12 col-sm-6 col-lg-4 wineitem item ".$val["type"]."'";?>>
					<div class="col-xs-5">
						<a target="_blank" href=<?php echo $val['siteurl']?>>
							<?php echo Asset::img("wine/" . $val["imgurl"],array('class'=>'img-responsive'));?>
						</a>
					</div>
					<div class="col-xs-7">
						<dl class="winelist">
							<dt>葡萄酒名</dt>
							<dd>- <?php echo $val["name"];?></dd>
							<dt>値段</dt>
							<dd>- <?php echo $val["money"];?></dd>
							<dt>在庫</dt>
							<dd>- <?php if($val['stock']>0){echo'あり';}else{echo'なし';}?></dd>
						</dl>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>