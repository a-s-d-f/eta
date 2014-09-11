
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
										<a href="logout">ログアウト</a>
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
	      <div class="block">
	        <div class="navbar navbar-inner block-header">
	          <div class="muted pull-left"><small>デバイス別アクセス</small></div>
	          <div class="pull-right" id="sb">
	            <span class="badge badge-warning" style="cursor:pointer" data-filter="d">日</span>
	            <span class="badge badge-warning" style="cursor:pointer" data-filter="w">週</span>
	            <span class="badge badge-warning" style="cursor:pointer" data-filter="m">月</span>
	            <span class="badge badge-warning" style="cursor:pointer" data-filter="y">年</span>
	          </div>
	        </div>
	        <div class="block-content collapse in">
	          <div class="span12">
	            <div id="hero-area" style="height: 250px;"></div>
	          </div>
	        </div>
	      </div>
	    </div>
		<div class="row">
			<h2 class="text-center">店舗紹介</h2>
			<table class="table">
				<thead>
					<tr>
						<th>題</th>
						<th>説明</th>
						<th>削除</th>
					</tr>
				</thead>
				<tbody id="target">
					<?php foreach($intro as $val):?>
					<tr>
						<td><input readonly name="title[]" class="input-lg form-control" type="text" value=<?php echo $val["title"]; ?>></td>
						<td><textarea readonly style="resize:none;" name="body[]" class="form-control"><?php echo $val["body"]; ?></textarea></td>
						<td><input type="button" class="btn btn-lg btn-primary delete" data-type="intro" data-id=<?php echo $val["id"];?> value="削除"></td>
					</tr>
					<input type="hidden" name="id[]" value=<?php echo $val["id"];?>>
				<?php endforeach; ?>
				<input type="hidden" name="type" value="intro">
			</tbody>
		</table>
		<div class="form-group text-right">
			<a href="editintro" class="btn btn-lg btn-primary">編集</a>
		</div>
	</div>
	<div class="row">
		<h2 class="text-center">お知らせ</h2>
		<table class="table">
			<thead>
				<tr>
					<th>題</th>
					<th>本文</th>
				</tr>
			</thead>
			<tbody id="target">
				<?php foreach($notification as $val):?>
				<tr>
					<td><input readonly class="input-lg form-control" type="text" name="title[]" value=<?php echo $val["title"];?>></td>
					<td><textarea readonly style="resize:none;" class="form-control" name="body[]"><?php echo $val["body"];?></textarea></td>
					<td><input type="button" class="btn btn-lg btn-primary delete" value="削除" data-type="notification" data-id=<?php echo $val["id"];?></td>
				</tr>
				<input type="hidden" name="id[]" value=<?php echo $val["id"];?>>
			<?php endforeach;?>
			<input type="hidden" name="type" value="notification">
		</tbody>
	</table>
	<div class="form-group text-right">
		<a href="editnotification" class="btn btn-lg btn-primary">編集</a>
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
						<td><a href=<?php echo "editmenu?id=".$val["id"]?> class="btn btn-lg btn-primary">編集</a></td>
						<td><input type="button" class="btn btn-lg btn-primary delete" data-type="menu" data-id=<?php echo $val["id"];?> value="削除"></td>
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
						<?php foreach($wine as $val):?>
						<tr>
							<td><?php echo $val["name"];?></td>
							<td><a href=<?php echo Uri::base().'assets/img/wine/'. $val["imgurl"];?> rel="lightbox-cats" class="btn btn-lg btn-primary" title=<?php echo $val["name"];?>>表示</a></td>
							<td><a href=<?php echo "editwine?id=".$val["id"]?> class="btn btn-lg btn-primary">編集</a></td>
							<td><input type="button" class="btn btn-lg btn-primary delete" data-type="wine"  data-id=<?php echo $val["id"];?> value="削除"></td>
						</tr>
					<?php endforeach?>
				</tbody>
			</table>
			<div class="form-group text-right">
				<a href="addwine" class="btn btn-lg btn-primary">追加</a>
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
							<?php foreach($seat as $val):?>
							<tr>
								<td><?php echo $val["name"];?></td>
								<td><a href=<?php echo Uri::base().'assets/img/'. $val["imgurl"];?> rel="lightbox-cats" class="btn btn-lg btn-primary" title=<?php echo $val["name"];?>>表示</a></td>
								<td><a href=<?php echo "editseat?id=".$val["id"]?> class="btn btn-lg btn-primary">編集</a></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" data-type="seat" data-id=<?php echo $val["id"];?> value="削除"></td>
							</tr>
						<?php endforeach?>
					</tbody>
				</table>
				<div class="form-group text-right">
					<a href="addseat" class="btn btn-lg btn-primary">追加</a>
				</div>
			</div>
			<div class="row">
				<h2 class="text-center">採用情報</h2>
				<table class="table">
					<thead>
						<tr>
							<th>題</th>
							<th>内容</th>
							<th>削除</th>
						</tr>
					</thead>
					<tbody id="target">
						<?php foreach($recruit as $val):?>
						<tr>
							<td><input readonly name="title[]" class="input-lg form-control" type="text" value=<?php echo $val["title"]; ?>></td>
							<td><textarea readonly style="resize:none;" name="body[]" class="form-control"><?php echo $val["body"]; ?></textarea></td>
							<td><input type="button" class="btn btn-lg btn-primary delete" data-type="recruit" data-id=<?php echo $val["id"];?> value="削除"></td>
						</tr>
						<input type="hidden" name="id[]" value=<?php echo $val["id"];?>>
					<?php endforeach; ?>
					<input type="hidden" name="type" value="recruit">
				</tbody>
			</table>
			<div class="form-group text-right">
				<a href="editrecruit" class="btn btn-lg btn-primary">編集</a>
			</div>
		</div>
	</div>
</div>