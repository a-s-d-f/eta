
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
							<tr>
								<td><input class="input-lg form-control" type="text" value="店舗概要"></td>
								<td><input class="input-lg form-control" type="text" value="ワインを中心的に取り扱っているバーです。"></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
							<tr>
								<td><input class="input-lg form-control" type="text" value="営業時間"></td>
								<td><input class="input-lg form-control" type="text" value="１７：３０〜２３：００"></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
							<tr>
								<td><input class="input-lg form-control" type="text" value="席情報"></td>
								<td><textarea class="form-control">ソファ席：４名,テーブル席６名,ストゥール席２名・３名,カウンター席：４名</textarea></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
							<tr>
								<td><input class="input-lg form-control" type="text" value="貸切・予約"></td>
								<td><input class="input-lg form-control" type="text" value="店舗までご連絡お願いします。"></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
							<tr>
								<td><input class="input-lg form-control" type="text" value="住所"></td>
								<td><textarea class="form-control" rows="6">https://www.google.co.jp/maps/place/%E5%A4%A7%E9%98%AA%E5%BA%9C%E5%A4%A7%E9%98%AA%E5%B8%82%E5%A4%A9%E7%8E%8B%E5%AF%BA%E5%8C%BA%E6%9D%B1%E9%AB%98%E6%B4%A5%E7%94%BA%EF%BC%94%E2%88%92%EF%BC%91%EF%BC%95/@34.6682239,135.521403,17z/data=!3m1!4b1!4m2!3m1!1s0x6000e74dc6a2cba5:0x18056c668126c55e</textarea></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
							<tr>
								<td><input class="input-lg form-control" type="text" value="ＴＥＬ"></td>
								<td><input class="input-lg form-control" type="text" value="０６−６７６５−７１１７"></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
							<tr>
								<td><input class="input-lg form-control" type="text" value="ＦＡＸ"></td>
								<td><input class="input-lg form-control" type="text" value="０６−６７６５−７００１"></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
						</tbody>
					</table>
					<div class="form-group text-right">
						<input class="btn btn-primary btn-lg" type="button" id="addmin" value="小さい方追加">
						<input class="btn btn-primary btn-lg" type="button" id="addbig" value="大きい方追加">
					</div>
					<div class="form-group text-right">
							<input class="btn btn-danger btn-lg" type="button" value="戻る">
							<input class="btn btn-primary btn-lg" type="button" value="更新">
						</div>
				</div>
			</div>
	</div>