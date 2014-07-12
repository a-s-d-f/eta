
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
									<td><input class="input-lg form-control" type="text" value=<?php echo $val["title"]; ?>></td>
									<td><textarea class="form-control"><?php echo $val["body"]; ?></textarea></td>
									<td><input type="button" class="btn btn-lg btn-primary delete" data-filter=<?php echo $val["id"];?> value="削除"></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
					<div class="form-group text-right">
						<input class="btn btn-primary btn-lg" type="button" id="addbig" value="一行追加">
					</div>
					<div class="form-group text-right">
							<input class="btn btn-danger btn-lg" type="button" value="戻る">
							<input class="btn btn-primary btn-lg" type="button" value="更新">
						</div>
				</div>
			</div>
	</div>