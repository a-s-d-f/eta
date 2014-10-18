<h2>ワイン編集</h2>
<form enctype="multipart/form-data" action="confirm" method="post">
	<?php if (isset($errmsg)): ?>
		<p class="text-danger"><?php echo $errmsg; ?></p>
	<?php endif; ?>
	<?php foreach($wine as $val):?>
		<div class="col-md-6">
			<img src=<?php echo Config::get('WINE_IMG_PATH') . $val["imgurl"];?> class="img-responsive" alt="">
		</div>
		<div class="col-md-6">
			<table class="table">
				<tbody>
					<tr>
						<th>料理名</th>
						<td><input name="wine[name]" type="text" class="form-control" value=<?php echo $val["name"]?>></td>
					</tr>
					<tr>
						<th>種類</th>
						<td><select name="wine[category]" class="form-control">
							<option <?php if($val["type"]=="red")echo"selected='selected'"?> value="red">赤</option>
							<option <?php if($val["type"]=="white")echo"selected='selected'"?> value="white">白</option>
							<option <?php if($val["type"]=="spark")echo"selected='selected'"?> value="spark">泡</option>
						</select></td>
					</tr>
					<tr>
						<th>金額</th>
						<td><input type="text" class="form-control" name="wine[money]" value=<?php echo $val["money"]?>></td>
					</tr>
					<tr>
						<th>説明</th>
						<td><textarea name="wine[siteurl]" class="form-control" rows="3" ><?php echo $val["siteurl"] ?></textarea></td>
					</tr>
					<tr>
						<th>画像</th>
						<td><input name="upload_file" class="form-control" type="file"></td>
					</tr>
				</tbody>
				<input type="hidden" name="wine[id]" value=<?php echo $val["id"];?>>
				<input type="hidden" name="type" value="wine">
			</table>
			<div class="form-group text-right">
				<a class="btn btn-danger btn-lg" href="/admin/wine">戻る</a>
				<input class="btn btn-primary btn-lg" type="submit" value="更新">
			</div>
		</div>
	<?php endforeach;?>
</form>