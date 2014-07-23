
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
	<div class="col-md-offset-2 col-md-8">
		<div class="row">
			<h2 class="text-center">紹介編集</h2>
			<form action="confirm" method="post">
				<table class="table">
					<thead>
						<tr>
							<th>題</th>
							<th>内容</th>
						</tr>
					</thead>
					<tbody id="target">
						<?php foreach($recruit as $val):?>
						<tr>
							<td><input name="title[]" class="input-lg form-control" type="text" value=<?php echo $val["title"]; ?>></td>
							<td><textarea style="resize:vertical" name="body[]" class="form-control"><?php echo $val["body"]; ?></textarea></td>
						</tr>
						<input type="hidden" name="id[]" value=<?php echo $val["id"];?>>
					<?php endforeach; ?>
					<input type="hidden" name="type" value="recruit">
				</tbody>
			</table>
			<div class="form-group text-right">
				<input class="btn btn-primary btn-lg" type="button" id="addcol" value="一行追加">
			</div>
			<div class="form-group text-right">
				<input class="btn btn-danger btn-lg" type="button" value="戻る">
				<input class="btn btn-primary btn-lg" type="submit" value="更新">
			</div>
		</form>
	</div>
</div>
</div>