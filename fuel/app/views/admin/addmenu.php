<h2>メニュー追加</h2>
<form enctype="multipart/form-data" action="addmenu" method="post">
	<table class="table">
		<tbody>
			<tr>
				<th>料理名</th>
				<td><input name="name" type="text" class="form-control"></td>
			</tr>
			<tr>
				<th>説明</th>
				<td><textarea name="comment" class="form-control" rows="5"></textarea></td>
			</tr>
			<tr>
				<th>種類</th>
				<td><select name="category" class="form-control">
					<option value="" selected="slected">種類を選んでください</option>
					<option value="food">主菜</option>
					<option value="sub">副菜</option>
				</select></td>
			</tr>
			<tr>
				<th>画像</th>
				<td><input class="form-control" name="upload_file" type="file"></td>
			</tr>
		</tbody>
	</table>
	<div class="form-group text-right">
		<a class="btn btn-danger btn-lg" href="/admin/menu">戻る</a>
		<input class="btn btn-primary btn-lg" type="submit" value="更新">
	</div>
</form>