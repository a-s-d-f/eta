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
					<li ><a href="index">各種編集</a></li>
					<li ><a href="menu">メニュー編集</a></li>
					<li ><a href="wine">ワイン編集</a></li>
					<li class="active"><a href="seat">シート編集</a></li>
				</ul>
			</ul>
		</div>
	</div>
	<div class="col-md-9" id="edit-content">
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
				<?php foreach($datas['seat'] as $row):?>
					<tr>
						<td><?php echo $row["name"];?></td>
						<td><a href=<?php echo Config::get('SEAT_IMG_PATH') . $row["imgurl"];?> rel="lightbox-seats" class="btn btn-lg btn-primary" title=<?php echo $row["name"];?>>表示</a></td>
						<td><a href=<?php echo "editseat?id=".$row["id"]?> class="btn btn-lg btn-primary">編集</a></td>
						<td><input type="button" class="btn btn-lg btn-primary delete" data-type="seat" data-id=<?php echo $row["id"];?> value="削除"></td>
					</tr>
				<?php endforeach?>
			</tbody>
		</table>
		<div class="form-group text-right">
			<a href="addseat" class="btn btn-lg btn-primary">追加</a>
		</div>
	</div>
</div>
