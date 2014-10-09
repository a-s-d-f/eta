<h2 class="text-center">紹介編集</h2>
<form method="post" action="confirm">
	<table class="table">
		<thead>
			<tr>
				<th>題</th>
				<th>説明</th>
			</tr>
		</thead>
		<tbody id="target">
			<?php foreach($intro as $row):?>
				<tr>
					<td><input name="intro[title][]" class="input-lg form-control" type="text" value=<?php echo $row["title"]; ?>></td>
					<td><textarea name="intro[body][]" style="resize:vertical" class="form-control"><?php echo $row["body"]; ?></textarea></td>
				</tr>
				<input type="hidden" name="intro[id][]" value=<?php echo $row["id"];?>>
			<?php endforeach; ?>
			<input type="hidden" name="type" value="intro">
		</tbody>
	</table>
	<div class="form-group text-right">
		<input class="btn btn-primary btn-lg" type="button" data-type="intro" id="addcol" value="一行追加">
	</div>
	<div class="form-group text-right">
		<a class="btn btn-danger btn-lg" href="/admin/">戻る</a>
		<input class="btn btn-primary btn-lg" type="submit" value="更新">
	</div>
</form>