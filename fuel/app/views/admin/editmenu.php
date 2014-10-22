<h2>メニュー編集</h2>
<form enctype="multipart/form-data" action="confirm" method="post">
	<?php if (isset($errmsg)): ?>
		<p class="text-danger"><?php echo $errmsg; ?></p>
	<?php endif; ?>
	<?php foreach($menu as $val):?>
		<div class="col-md-6">
			<img src=<?php echo Config::get('MENU_IMG_PATH') . $val["imgurl"];?> class="img-responsive" alt="">
		</div>
		<div class="col-md-6">
			<table class="table">
				<tbody>
					<tr>
						<th>料理名</th>
						<td><input name="menu[name]" type="text" class="form-control" value='<?php echo $val["name"]?>'></td>
					</tr>
					<tr>
						<th>説明</th>
						<td><textarea name="menu[comment]" class="form-control" rows="5" ><?php echo $val["comment"] ?></textarea></td>
					</tr>
					<tr>
						<th>種類</th>
						<td><select name="menu[category]" class="form-control">
							<option <?php if($val["type"]=="food")echo"selected='selected'"?> value="food">主菜</option>
							<option <?php if($val["type"]=="sub")echo"selected='selected'"?> value="sub">副菜</option>
						</select></td>
					</tr>
					<tr>
						<th>画像</th>
						<td><input name="upload_file" class="form-control" type="file"></td>
					</tr>
				</tbody>
				<input type="hidden" name="menu[id]" value=<?php echo $val["id"];?>>
				<input type="hidden" name="type" value="menu">
			</table>
			<div class="form-group text-right">
				<a class="btn btn-danger btn-lg" href="/admin/menu">戻る</a>
				<input class="btn btn-primary btn-lg" type="submit" value="更新">
			</div>
		</div>
	<?php endforeach;?>
</form>
