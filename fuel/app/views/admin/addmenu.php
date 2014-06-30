
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
			<div class="col-md-offset-3 col-md-6">
				<div class="row text-center">
					<h2>メニュー追加</h2>
					<table class="table">
							<tbody>
								<tr>
									<th>料理名</th>
									<td><input type="text" class="form-control"></td>
								</tr>
								<tr>
									<th>説明</th>
									<td><textarea class="form-control" rows="5"></textarea></td>
								</tr>
								<tr>
									<th>画像</th>
									<td><input class="form-control" type="file" id="exampleInputFile"></td>
								</tr>
							</tbody>
						</table>
						<div class="form-group text-right">
							<input class="btn btn-danger btn-lg" type="button" value="戻る">
							<input class="btn btn-primary btn-lg" type="button" value="更新">
						</div>
				</div>
			</div>
	</div>