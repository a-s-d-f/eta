
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
								<th>内容</th>
								<th>削除</th>
							</tr>
						</thead>
						<tbody id="target">
							<tr>
								<td><input class="input-lg form-control" type="text" value="職種"></td>
								<td><input class="input-lg form-control" type="text" value="ホールスタッフ"></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
							<tr>
								<td><input class="input-lg form-control" type="text" value="勤務時間"></td>
								<td><input class="input-lg form-control" type="text" value="１７：３０〜２２：３０"></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
							<tr>
								<td><input class="input-lg form-control" type="text" value="就業日数"></td>
								<td><input class="input-lg form-control" type="text" value="週３日〜 ※土日祝休み"></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
							<tr>
								<td><input class="input-lg form-control" type="text" value="時給"></td>
								<td><input class="input-lg form-control" type="text" value="９３０円〜"></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
							<tr>
								<td><input class="input-lg form-control" type="text" value="応募資格"></td>
								<td><textarea class="form-control" rows="5">◎ワインを学びたい方,◎ワインに合う料理を勉強したい方,◎接客が好きな方,◎料理学校に通う学生の方歓迎</textarea></td>
								<td><input type="button" class="btn btn-lg btn-primary delete" value="削除"></td>
							</tr>
							<tr>
								<td><input class="input-lg form-control" type="text" value="仕事内容"></td>
								<td><textarea class="form-control" rows="5">葡萄園・ワイナリーをグループ会社にもつ店主の元でワインを学べる環境です。,リピーターのお客様が続々増加中オーダーを伺ったりお料理の提供など全般になります。,丁寧に教えますので、ホール未経験でも大丈夫です。,まずは、当社ワインをはじめ他多種ありますので、楽しみながら覚えて下さいね！</textarea></td>
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