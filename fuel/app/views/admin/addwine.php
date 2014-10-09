<h2>ワイン追加</h2>
<form enctype="multipart/form-data" action="addwine" method="post">
	<table class="table">
		<tbody>
			<tr>
				<th>ワイン名</th>
				<td><input name="name" type="text" class="form-control"></td>
			</tr>
			<tr>
				<th>種類</th>
				<td>
					<select name="category" class="form-control">
						<option value="" selected="slected">種類を選んでください</option>
						<option value="red">赤</option>
						<option value="white">白</option>
						<option value="spark">泡</option>
						<option value="hitomi red">ひとみ 赤</option>
						<option value="hitomi white">ひとみ 白</option>
						<option value="hitomi spark">ひとみ 泡</option>
					</select>
				</td>
			</tr>
			<tr>
				<th>値段</th>
				<td><input name="money" type="text" class="form-control"></td>
			</tr>
			<tr>
				<th>説明</th>
				<td><textarea name="comment" class="form-control" rows="5"></textarea></td>
			</tr>
			<tr>

			</tr>
			<tr>
				<th>画像</th>
				<td><input class="form-control" type="file" name="upload_file"></td>
			</tr>
		</tbody>
	</table>
	<div class="form-group text-right">
		<a class="btn btn-danger btn-lg" href="/admin/wine">戻る</a>
		<input class="btn btn-primary btn-lg" type="submit" value="更新">
	</div>
</form>