<h2>店内画像追加</h2>
<form enctype="multipart/form-data" action="addseat" method="post">
	<table class="table">
		<tbody>
			<tr>
				<th>座席名</th>
				<td><input type="text" name="name" class="form-control"></td>
			</tr>
			<tr>
				<th>ファイル選択</th>
				<td><input class="form-control" type="file" name="upload_file"></td>
			</tr>
		</tbody>
	</table>
	<div class="form-group text-right">
		<a class="btn btn-danger btn-lg" href="/admin/seat">戻る</a>
		<input class="btn btn-primary btn-lg" type="submit" value="更新">
	</div>
</form>