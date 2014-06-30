
<div class="container-fluid" id="container">
	<div class="col-md-12">
		<div class="row">
			<nav class="navbar navbar-default navbar-inverse" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="#">管理画面</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					</ul>
					<form class="navbar-right">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<a href="" class="dropdown-toggle" data-toggle="dropdown">管理者<strong class="caret"></strong></a>
								<ul class="dropdown-menu">
									<li>
										<a href="">ログアウト</a>
									</li>
								</ul>
							</li>
						</ul>
					</form>
				</div>
			</nav>
		</div>
	</div>
	<div class="col-md-3">
		<div class="row">
			<ul class="nav nav-pills nav-stacked">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#">各種編集</a></li>
				</ul>
			</ul>
		</div>
	</div>
	<div class="col-md-9" id="edit-content">
		<div class="row">
			<h2 class="text-center">店舗紹介</h2>
			<dl class="dl-horizontal">
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
			<div class="form-group text-right">
				<a href="editintro.html" class="btn btn-lg btn-primary">編集</a>
			</div>
		</div>
		<div class="row">
			<h2 class="text-center">お知らせ</h2>
			<dl class="col-md-offset-3 dl-horizontal">
				<?php foreach($notification as $val):?>
					<a href="#notification" blank="" style="text-decoration:none;"  onClick=<?php echo "window.open('notification?id=".$val['id']."','お知らせの詳細','width=500,height=600'); return false;"?>>
						<dt><?php  echo date("Y-m-d",$val["created_at"])?></dt>
						<dd><?php echo $val["title"];?></dd>
					</a>
				<?php endforeach;?>
			</dl>
			<div class="form-group text-right">
				<a href="editnotification.html" class="btn btn-lg btn-primary">編集</a>
			</div>
		</div>
		<div class="row">
			<h2 class="text-center">お品書き</h2>
			<table class="table">
				<thead>
					<tr>
						<th>料理名</td>
							<th>写真</th>
							<th>編集</td>
							<th>削除</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($menu as $val):?>
								<tr>
									<td><?php echo $val["name"];?></td>
									<td><a href=<?php echo Uri::base().'assets/img/'. $val["imgurl"];?> rel="lightbox-cats" class="btn btn-lg btn-primary" title=<?php echo $val["name"];?>>表示</a></td>
									<td><a href="editmenu" class="btn btn-lg btn-primary">編集</a></td>
									<td><input type="button" class="btn btn-lg btn-primary" value="削除"></td>
								</tr>
							<?php endforeach;?>
						</tbody>
					</table>
					<div class="form-group text-right">
						<a href="addmenu" class="btn btn-lg btn-primary">追加</a>
					</div>
				</div>
				<div class="row">
					<h2 class="text-center">葡萄酒</h2>
					<table class="table">
						<thead>
							<tr>
								<th>葡萄酒名</td>
									<th>写真</th>
									<th>編集</td>
										<th>削除</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php foreach($menu as $val):?>
										<?php endforeach?>
										<td>わいん１</td>
										<td><a href="image/img1.jpg" rel="lightbox-cats" class="btn btn-lg btn-primary" title="image1">表示</a></td>
										<td><a href="editwine.html" class="btn btn-lg btn-primary">編集</a></td>
										<td><input type="button" class="btn btn-lg btn-primary" value="削除"></td>
									</tr>
									<tr>
										<td>わいん２</td>
										<td><a href="image/img1.jpg" rel="lightbox-cats" class="btn btn-lg btn-primary" title="image1">表示</a></td>
										<td><a href="editwine.html" class="btn btn-lg btn-primary">編集</a></td>
										<td><input type="button" class="btn btn-lg btn-primary" value="削除"></td>
									</tr>
									<tr>
										<td>わいん３</td>
										<td><a href="image/img1.jpg" rel="lightbox-cats" class="btn btn-lg btn-primary" title="image1">表示</a></td>
										<td><a href="editwine.html" class="btn btn-lg btn-primary">編集</a></td>
										<td><input type="button" class="btn btn-lg btn-primary" value="削除"></td>
									</tr>
									<tr>
										<td>わいん４</td>
										<td><a href="image/img1.jpg" rel="lightbox-cats" class="btn btn-lg btn-primary" title="image1">表示</a></td>
										<td><a href="editwine.html" class="btn btn-lg btn-primary">編集</a></td>
										<td><input type="button" class="btn btn-lg btn-primary" value="削除"></td>
									</tr>
								</tbody>
							</table>
							<div class="form-group text-right">
								<a href="addwine.html" class="btn btn-lg btn-primary">追加</a>
							</div>
						</div>
						<div class="row">
							<h2 class="text-center">店内画像</h2>
							<table class="table">
								<thead>
									<tr>
										<th>画像名</td>
											<th>写真</th>
											<th>編集</td>
												<th>削除</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>てんない１</td>
												<td><a href="image/img3.jpg" rel="lightbox-cats" class="btn btn-lg btn-primary" title="image1">表示</a></td>
												<td><a href="editseat.html" class="btn btn-lg btn-primary">編集</a></td>
												<td><input type="button" class="btn btn-lg btn-primary" value="削除"></td>
											</tr>
											<tr>
												<td>てんない２</td>
												<td><a href="image/img4.jpg" rel="lightbox-cats" class="btn btn-lg btn-primary" title="image1">表示</a></td>
												<td><a href="editseat.html" class="btn btn-lg btn-primary">編集</a></td>
												<td><input type="button" class="btn btn-lg btn-primary" value="削除"></td>
											</tr>
											<tr>
												<td>てんない３</td>
												<td><a href="image/img5.jpg" rel="lightbox-cats" class="btn btn-lg btn-primary" title="image1">表示</a></td>
												<td><a href="editseat.html" class="btn btn-lg btn-primary">編集</a></td>
												<td><input type="button" class="btn btn-lg btn-primary" value="削除"></td>
											</tr>
											<tr>
												<td>てんない４</td>
												<td><a href="image/img6.jpg" rel="lightbox-cats" class="btn btn-lg btn-primary" title="image1">表示</a></td>
												<td><a href="editseat.html" class="btn btn-lg btn-primary">編集</a></td>
												<td><input type="button" class="btn btn-lg btn-primary" value="削除"></td>
											</tr>
										</tbody>
									</table>
									<div class="form-group text-right">
										<a href="addseat.html" class="btn btn-lg btn-primary">追加</a>
									</div>
								</div>
								<div class="row">
									<h2 class="text-center">採用情報</h2>
									<dl class="dl-horizontal">
										<dt>
											職種
										</dt>
										<dd>
											ホールスタッフ
										</dd>
										<dt>
											勤務時間
										</dt>
										<dd>
											１７：３０〜２２：３０
										</dd>
										<dt>
											就業日数
										</dt>
										<dd>
											週３日〜 ※土日祝休み
										</dd>
										<dt>
											時給
										</dt>
										<dd>
											９３０円〜
										</dd>
										<dt>
											応募資格
										</dt>
										<dd>◎ワインを学びたい方</dd>
										<dd>◎ワインに合う料理を勉強したい方</dd>
										<dd>◎接客が好きな方</dd>
										<dd>◎料理学校に通う学生の方歓迎</dd>
										<dt>
											仕事内容
										</dt>
										<dd>
											葡萄園・ワイナリーをグループ会社にもつ店主の元でワインを学べる環境です。
										</dd>
										<dd>
											リピーターのお客様が続々増加中オーダーを伺ったりお料理の提供など全般になります。
										</dd>
										<dd>
											丁寧に教えますので、ホール未経験でも大丈夫です。
										</dd>
										<dd>
											まずは、当社ワインをはじめ他多種ありますので、楽しみながら覚えて下さいね！
										</dd>
									</dl>
									<div class="form-group text-right">
										<a href="editrecruit.html" class="btn btn-lg btn-primary">編集</a>
									</div>
								</div>
							</div>
						</div>