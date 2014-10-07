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
					<a href="#seat">店内画像</a>
				</li>
				<li>
					<a href="#recruit">採用情報</a>
				</li>
				<li class="dropdown">
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
	<div id="message-box" style="cursor: pointer;cursor: hand;">
		<a class="button" data-filter="#intro" id="message"><span>イータ</span><span>葡萄酒屋</span></a>
	</div>
	<div style="clear:both;"></div>
</div>
<div class="row">
	<div class="col-md-12 column" style="" id="intro">
		<h1 class="text-center">
			店舗紹介
		</h1>
		<dl class="col-sm-offset-1 dl-horizontal">
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
		<dl class="col-sm-offset-2 dl-horizontal">
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
	<div class="col-md-offset-1 col-md-10 column text-center" id="seat">
		<h1 class="text-center">
			店内画像
		</h1>
		<div class="margin-top2" id="photo">
			<?php foreach($seat as $val):?>
				<div class="col-sm-6 column margin-2">
					 <a rel="lightbox" href=<?php echo Uri::base()."assets/img/".$val["imgurl"];?> data-lightbox="seat" data-title=<?php echo $val["name"];?>>
                        <?php echo Asset::img($val["imgurl"],array('class'=>'img-responsive'));?>
                    </a>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-12 column" id="recruit">
		<h1 class="text-center">
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
<script>
	$(function() {
		$(window).scroll(function () {
			var s = $(this).scrollTop();
			var m = document.getElementById("header").clientHeight;
			var nav = document.getElementById('navbar');
			if(s <= 0){
				$('#message-box').fadeIn('fast');
				classie.remove(nav,'navbar-effect');
			}
			if(s > 1){
				$('#message-box').fadeOut('fast');
			}
			if(s >= m-50) {
				classie.add(nav,'navbar-effect');
			}
		});
	});
</script>