
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
	<div class="col-md-offset-1 col-md-10">
		<div class="row text-center">
			<h2>ワイン編集</h2>
			<form enctype="multipart/form-data" action="confirm" method="post">
			<?php foreach($wine as $val):?>
			<div class="col-md-6">
				<img src=<?php echo Uri::base().'assets/img/wine/'. $val["imgurl"];?> class="img-responsive" alt="">
			</div>
			<div class="col-md-6">
				<table class="table">
					<tbody>
						<tr>
							<th>料理名</th>
							<td><input name="name" type="text" class="form-control" value=<?php echo $val["name"]?>></td>
						</tr>
						<tr>
							<th>種類</th>
							<td><select name="category" class="form-control">
								<option <?php if($val["type"]=="red")echo"selected='selected'"?> value="red">赤</option>
								<option <?php if($val["type"]=="white")echo"selected='selected'"?> value="white">白</option>
								<option <?php if($val["type"]=="spark")echo"selected='selected'"?> value="spark">泡</option>
								<option <?php if($val["type"]=="hitomi red")echo"selected='selected'"?> value="hitomi red">ひとみ 赤</option>
								<option <?php if($val["type"]=="hitomi white")echo"selected='selected'"?> value="hitomi white">ひとみ 白</option>
								<option <?php if($val["type"]=="hitomi spark")echo"selected='selected'"?> value="hitomi spark">ひとみ 泡</option>
							</select></td>
						</tr>
						<tr>
							<th>金額</th>
							<td><input type="text" class="form-control" name="money" value=<?php echo $val["money"]?>></td>
						</tr>
						<tr>
							<th>説明</th>
							<td><textarea name="comment" class="form-control" rows="5" ><?php echo $val["comment"] ?></textarea></td>
						</tr>
						<tr>
							<th>画像</th>
							<td><input name="upload_file" class="form-control" type="file"></td>
						</tr>
					</tbody>
					<input type="hidden" name="id" value=<?php echo $val["id"];?>>
					<input type="hidden" name="type" value="wine">
				</table>
				<div class="form-group text-right">
					<input class="btn btn-danger btn-lg" type="button" value="戻る">
					<input class="btn btn-primary btn-lg" type="submit" value="更新">
				</div>
			</div>
		<?php endforeach;?>
	</form>
	</div>
</div>
</div>