<form enctype="multipart/form-data" action="confirm" method="post">
	<h2>店内編集</h2>
	<?php foreach($seat as $val):?>
		<img src=<?php echo Config::get('SEAT_IMG_PATH') . $val["imgurl"];?> class="img-responsive" alt="">
		<table class="table">
			<tbody>
				<tr>
					<th>座席名</th>
					<td><input name="seat[name]" type="text" class="form-control" value=<?php echo $val["name"]?>></td>
				</tr>
				<tr>
					<th>ファイル選択</th>
					<td><input class="form-control" type="file" name="upload_file"></td>
				</tr>
			</tbody>
			<input type="hidden" name="seat[id]" value=<?php echo $val["id"];?>>
			<input type="hidden" name="type" value="seat">
		</table>
	<?php endforeach;?>
	<div class="form-group text-right">
		<a class="btn btn-danger btn-lg" href="/admin/seat">戻る</a>
		<input class="btn btn-primary btn-lg" type="submit" value="更新">
	</div>
</form>